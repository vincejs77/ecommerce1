<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>

        <div class="content-wrapper">
            <div class="container">

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-9">
                            <h1 class="page-header">Votre panier</h1>
                            <div class="box box-solid">
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th></th>
                                            <th>L'image</th>
                                            <th>Nom du produit</th>
                                            <th>Prix</th>
                                            <th width="20%">Quantité</th>
                                            <th>Total</th>
                                        </thead>
                                        <tbody id="tbody">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php
	        			if(isset($_SESSION['user'])){
	        				echo "
	        					<div id='paypal-button'></div>
	        				";
	        			}
	        			else{
	        				echo "
	        					<h4>Vous devez vous <a href='login.php' class='text-blue-700 font-bold'>connecter</a> pour continuer.</h4>
	        				";
	        			}
	        		?>
                        </div>
                        <div class="col-sm-3">
                            <?php include 'includes/sidebar.php'; ?>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <?php $pdo->close(); ?>
        <?php include 'includes/footer.php'; ?>
    </div>

    <?php include 'includes/scripts.php'; ?>
    <script>
    var total = 0;
    $(function() {
        $(document).on('click', '.cart_delete', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                type: 'POST',
                url: 'cart_delete.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    if (!response.error) {
                        getDetails();
                        getCart();
                        getTotal();
                    }
                }
            });
        });

        $(document).on('click', '.minus', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var qty = $('#qty_' + id).val();
            if (qty > 1) {
                qty--;
            }
            $('#qty_' + id).val(qty);
            $.ajax({
                type: 'POST',
                url: 'cart_update.php',
                data: {
                    id: id,
                    qty: qty,
                },
                dataType: 'json',
                success: function(response) {
                    if (!response.error) {
                        getDetails();
                        getCart();
                        getTotal();
                    }
                }
            });
        });

        $(document).on('click', '.add', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var qty = $('#qty_' + id).val();
            qty++;
            $('#qty_' + id).val(qty);
            $.ajax({
                type: 'POST',
                url: 'cart_update.php',
                data: {
                    id: id,
                    qty: qty,
                },
                dataType: 'json',
                success: function(response) {
                    if (!response.error) {
                        getDetails();
                        getCart();
                        getTotal();
                    }
                }
            });
        });

        getDetails();
        getTotal();

    });

    function getDetails() {
        $.ajax({
            type: 'POST',
            url: 'cart_details.php',
            dataType: 'json',
            success: function(response) {
                $('#tbody').html(response);
                getCart();
            }
        });
    }

    function getTotal() {
        $.ajax({
            type: 'POST',
            url: 'cart_total.php',
            dataType: 'json',
            success: function(response) {
                total = response;
            }
        });
    }
    </script>
    <!-- Paypal Express -->
    <script>
    paypal.Button.render({
        env: 'sandbox', // change for production if app is live,

        client: {
            sandbox: 'AS8cgGM_bZ5ZCHQL9TKInWuAh8t2oS7yqzgSfrB28TftHneh10CQS1D_mMarSz02k5SOwzSACW004VTo',
            //production: 'AaBHKJFEej4V6yaArjzSx9cuf-UYesQYKqynQVCdBlKuZKawDDzFyuQdidPOBSGEhWaNQnnvfzuFB9SM'
        },

        commit: true, // Show a 'Pay Now' button

        style: {
            color: 'gold',
            size: 'small'
        },

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [{
                        //total purchase
                        amount: {
                            total: total,
                            currency: 'USD'
                        }
                    }]
                }
            });
        },

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function(payment) {
                window.location = 'sales.php?pay=' + payment.id;
            });
        },

    }, '#paypal-button');
    </script>
</body>

</html>