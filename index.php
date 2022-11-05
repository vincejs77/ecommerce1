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
                            <?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
                            <section class="relative bg-white">
                                <!-- Main Section -->
                                <main class="relative opacity-100">
                                    <div
                                        class="flex flex-col items-center justify-between max-w-7xl --px-10 pt-24 mx-auto lg:flex-row">
                                        <div
                                            class="flex flex-col w-full gap-8 mx-auto -mt-20 lg:w-1/2 sm:max-w-lg lg:text-left sm:text-center">
                                            <h1 class="text-5xl font-black text-gray-800 xl:text-6xl"> Achetez en toute
                                                sécurité </h1>
                                            <p class="text-gray-600 text-3xl">Notre plateforme vous garantie
                                                le meilleur service local de vente en ligne
                                            </p>

                                            <div class="relative flex flex-col w-full gap-4 sm:flex-row">
                                                <input type="email"
                                                    class="flex-1 px-6 py-4 text-xl text-gray-700 border-2 border-gray-200 rounded-md"
                                                    placeholder="Addresse email" />
                                                <button
                                                    class="px-6 py-3.5 font-semibold bg-blue-500 text-lg text-white rounded-md">
                                                    S'inscrire
                                                </button>
                                            </div>
                                        </div>
                                        <div class="w-5/6 mt-20 sm:w-1/2 lg:pl-16 lg:mt-0">
                                            <img src="https://cdn.devdojo.com/images/november2021/apps.png">
                                        </div>
                                    </div>
                                </main>
                            </section>


                            <section class="relative w-full py-12 overflow-hidden bg-white md:py-20 xl:pt-12 xl:pb-40">
                                <div
                                    class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0">
                                    <h2 class="mb-1 text-4xl font-extrabold leading-tight text-gray-900">Nos Catégories
                                        de produit</h2>
                                    <p class="mb-12 text-3xl mt-2 text-gray-500">Nous disposons d'une game de produit
                                        dans
                                        diverses Catégories.</p>
                                    <div class="flex w-full h-full">
                                        <div class="w-full lg:w-3/3">
                                            <!-- Feature blocks first column -->
                                            <div class="flex flex-col w-full mb-10 sm:flex-row">
                                                <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                                                    <div class="relative h-full ml-0 mr-0 sm:mr-10">
                                                        <span
                                                            class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-indigo-500 rounded-lg"
                                                            data-primary="indigo-500" data-rounded="rounded-lg"
                                                            data-rounded-max="rounded-full"></span>
                                                        <div class="relative h-full p-5 bg-white border-2 border-indigo-500 rounded-lg"
                                                            data-primary="indigo-500" data-rounded="rounded-lg"
                                                            data-rounded-max="rounded-full">
                                                            <div class="flex items-center -mt-1">
                                                                <svg class="w-8 h-8 text-indigo-500 fill-current"
                                                                    data-primary="indigo-500" viewBox="0 0 20 20">
                                                                    <polygon
                                                                        points="18.198,7.95 3.168,7.95 3.168,8.634 9.317,9.727 9.317,19.564 12.05,19.564 12.05,9.727 18.198,8.634 ">
                                                                    </polygon>
                                                                    <path
                                                                        d="M2.485,10.057v-3.41H2.473l0.012-4.845h1.366c0.378,0,0.683-0.306,0.683-0.683c0-0.378-0.306-0.683-0.683-0.683H1.119c-0.378,0-0.683,0.306-0.683,0.683c0,0.378,0.306,0.683,0.683,0.683h0.683v4.845C1.406,6.788,1.119,7.163,1.119,7.609v2.733c0,0.566,0.459,1.025,1.025,1.025c0.053,0,0.105-0.008,0.157-0.016l-0.499,5.481l5.9,2.733h0.931C8.634,13.266,5.234,10.458,2.485,10.057z">
                                                                    </path>
                                                                    <path
                                                                        d="M18.169,6.584c-0.303-3.896-3.202-6.149-7.486-6.149c-4.282,0-7.183,2.252-7.484,6.149H18.169z M15.463,3.187c0.024,0.351-0.103,0.709-0.394,0.977c-0.535,0.495-1.405,0.495-1.94,0c-0.29-0.268-0.418-0.626-0.394-0.977C13.513,3.827,14.683,3.827,15.463,3.187z">
                                                                    </path>
                                                                    <path
                                                                        d="M18.887,10.056c-2.749,0.398-6.154,3.206-6.154,9.508h0.933l5.899-2.733L18.887,10.056z">
                                                                    </path>
                                                                </svg>
                                                                <h3 class="my-2 ml-3 text-2xl font-bold text-gray-800">
                                                                    Ordinateur portables et de bureau</h3>
                                                            </div>
                                                            <p class="mt-3 mb-1 text-xs font-medium text-indigo-500 uppercase"
                                                                data-primary="indigo-500 text-xl">PREMIUM FEATURE</p>
                                                            <p class="mb-2 text-gray-600">Nous avons tout type
                                                                d'ordinateur. Des ordiateur de bureau et portable de
                                                                toute marque</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full sm:w-1/2">
                                                    <div class="relative h-full ml-0 md:mr-10">
                                                        <span
                                                            class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500 rounded-lg"
                                                            data-primary="purple-500" data-rounded="rounded-lg"
                                                            data-rounded-max="rounded-full"></span>
                                                        <div class="relative h-full p-5 bg-white border-2 border-purple-500 rounded-lg"
                                                            data-primary="purple-500" data-rounded="rounded-lg"
                                                            data-rounded-max="rounded-full">
                                                            <div class="flex items-center -mt-1">
                                                                <svg class="w-8 h-8 text-purple-500 fill-current"
                                                                    data-primary="purple-500" viewBox="0 0 20 20">
                                                                    <path
                                                                        d="M19.629,9.655c-0.021-0.589-0.088-1.165-0.21-1.723h-3.907V7.244h1.378V6.555h-2.756V5.866h2.067V5.177h-0.689V4.488h-1.378V3.799h0.689V3.11h-1.378V2.421h0.689V1.731V1.294C12.88,0.697,11.482,0.353,10,0.353c-5.212,0-9.446,4.135-9.629,9.302H19.629z M6.555,2.421c1.522,0,2.756,1.234,2.756,2.756S8.077,7.933,6.555,7.933S3.799,6.699,3.799,5.177S5.033,2.421,6.555,2.421z">
                                                                    </path>
                                                                    <path
                                                                        d="M12.067,18.958h-0.689v-0.689h2.067v-0.689h0.689V16.89h2.067v-0.689h0.689v-0.689h-1.378v-0.689h-2.067v-0.689h1.378v-0.689h2.756v-0.689h-1.378v-0.689h3.218c0.122-0.557,0.189-1.134,0.21-1.723H0.371c0.183,5.167,4.418,9.302,9.629,9.302c0.711,0,1.401-0.082,2.067-0.227V18.958z">
                                                                    </path>
                                                                </svg>
                                                                <h3 class="my-2 ml-3 text-2xl font-bold text-gray-800">
                                                                    Tablettes</h3>
                                                            </div>
                                                            <p class="mt-3 mb-1 text-xs font-medium text-purple-500 uppercase"
                                                                data-primary="purple-500">NEW FEATURE</p>
                                                            <p class="mb-2 text-gray-600">
                                                                Des tablettes pour adultes et enfants, des tables pour
                                                                des profetionnel
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Feature blocks second column -->
                                            <div class="flex flex-col w-full mb-5 sm:flex-row">
                                                <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                                                    <div class="relative h-full ml-0 mr-0 sm:mr-10">
                                                        <span
                                                            class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-blue-400 rounded-lg"
                                                            data-primary="blue-400" data-rounded="rounded-lg"
                                                            data-rounded-max="rounded-full"></span>
                                                        <div class="relative h-full p-5 bg-white border-2 border-blue-400 rounded-lg"
                                                            data-primary="blue-400" data-rounded="rounded-lg"
                                                            data-rounded-max="rounded-full">
                                                            <div class="flex items-center -mt-1">
                                                                <svg class="w-8 h-8 text-blue-400 fill-current"
                                                                    data-primary="blue-400" viewBox="0 0 20 20">
                                                                    <path
                                                                        d="M18.21,16.157v-8.21c0-0.756-0.613-1.368-1.368-1.368h-1.368v1.368v1.368v6.841l-1.368,3.421h5.473L18.21,16.157z">
                                                                    </path>
                                                                    <path
                                                                        d="M4.527,9.316V7.948V6.579H3.159c-0.756,0-1.368,0.613-1.368,1.368v8.21l-1.368,3.421h5.473l-1.368-3.421V9.316z">
                                                                    </path>
                                                                    <path
                                                                        d="M14.766,5.895h0.023V5.21c0-2.644-2.145-4.788-4.789-4.788S5.211,2.566,5.211,5.21v0.685h0.023H14.766zM12.737,3.843c0.378,0,0.684,0.307,0.684,0.684s-0.306,0.684-0.684,0.684c-0.378,0-0.684-0.307-0.684-0.684S12.358,3.843,12.737,3.843z M10,1.448c0.755,0,1.368,0.613,1.368,1.368S10.755,4.185,10,4.185c-0.756,0-1.368-0.613-1.368-1.368S9.244,1.448,10,1.448z">
                                                                    </path>
                                                                    <path
                                                                        d="M14.789,6.579H5.211v9.578l1.368,1.368h6.841l1.368-1.368V6.579z M12.052,12.052H7.948c-0.378,0-0.684-0.306-0.684-0.684c0-0.378,0.306-0.684,0.684-0.684h4.105c0.378,0,0.684,0.306,0.684,0.684C12.737,11.746,12.431,12.052,12.052,12.052z M12.052,9.316H7.948c-0.378,0-0.684-0.307-0.684-0.684s0.306-0.684,0.684-0.684h4.105c0.378,0,0.684,0.307,0.684,0.684S12.431,9.316,12.052,9.316z">
                                                                    </path>
                                                                </svg>
                                                                <h3 class="my-2 ml-3 text-2xl font-bold text-gray-800">
                                                                    SmartPhones et iPhones
                                                                </h3>
                                                            </div>
                                                            <p class="mt-3 mb-1 text-xs font-medium text-blue-400 uppercase"
                                                                data-primary="blue-400">FREE FEATURE</p>
                                                            <p class="mb-2 text-gray-600">
                                                                Nous avons tout type de téléphones. Et tout est à votre
                                                                budget
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="w-full sm:w-1/2">
                                                    <div class="relative h-full ml-0 md:mr-10">
                                                        <span
                                                            class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-500 rounded-lg"
                                                            data-primary="green-500" data-rounded="rounded-lg"
                                                            data-rounded-max="rounded-full"></span>
                                                        <div class="relative h-full p-5 bg-white border-2 border-green-500 rounded-lg"
                                                            data-primary="green-500" data-rounded="rounded-lg"
                                                            data-rounded-max="rounded-full">
                                                            <div class="flex items-center -mt-1">
                                                                <svg class="w-8 h-8 text-green-500 fill-current"
                                                                    data-primary="green-500" viewBox="0 0 20 20">
                                                                    <path
                                                                        d="M16.853,8.355V5.888c0-3.015-2.467-5.482-5.482-5.482H8.629c-3.015,0-5.482,2.467-5.482,5.482v2.467l-2.741,7.127c0,1.371,4.295,4.112,9.594,4.112s9.594-2.741,9.594-4.112L16.853,8.355z M5.888,17.367c-0.284,0-0.514-0.23-0.514-0.514c0-0.284,0.23-0.514,0.514-0.514c0.284,0,0.514,0.23,0.514,0.514C6.402,17.137,6.173,17.367,5.888,17.367z M5.203,10c0-0.377,0.19-0.928,0.423-1.225c0,0,0.651-0.831,1.976-0.831c0.672,0,1.141,0.309,1.141,0.309C9.057,8.46,9.315,8.938,9.315,9.315v1.028c0,0.188-0.308,0.343-0.685,0.343H5.888C5.511,10.685,5.203,10.377,5.203,10z M7.944,16.853H7.259v-1.371l0.685-0.685V16.853z M9.657,16.853H8.629v-2.741h1.028V16.853zM8.972,13.426v-1.028c0-0.568,0.46-1.028,1.028-1.028c0.568,0,1.028,0.46,1.028,1.028v1.028H8.972z M11.371,16.853h-1.028v-2.741h1.028V16.853z M12.741,16.853h-0.685v-2.056l0.685,0.685V16.853z M14.112,17.367c-0.284,0-0.514-0.23-0.514-0.514c0-0.284,0.23-0.514,0.514-0.514c0.284,0,0.514,0.23,0.514,0.514C14.626,17.137,14.396,17.367,14.112,17.367z M14.112,10.685h-2.741c-0.377,0-0.685-0.154-0.685-0.343V9.315c0-0.377,0.258-0.855,0.572-1.062c0,0,0.469-0.309,1.141-0.309c1.325,0,1.976,0.831,1.976,0.831c0.232,0.297,0.423,0.848,0.423,1.225S14.489,10.685,14.112,10.685z M18.347,15.801c-0.041,0.016-0.083,0.023-0.124,0.023c-0.137,0-0.267-0.083-0.319-0.218l-2.492-6.401c-0.659-1.647-1.474-2.289-2.905-2.289c-0.95,0-1.746,0.589-1.754,0.595c-0.422,0.317-1.084,0.316-1.507,0C9.239,7.505,8.435,6.916,7.492,6.916c-1.431,0-2.246,0.642-2.906,2.292l-2.491,6.398c-0.069,0.176-0.268,0.264-0.443,0.195c-0.176-0.068-0.264-0.267-0.195-0.444l2.492-6.401c0.765-1.911,1.824-2.726,3.543-2.726c1.176,0,2.125,0.702,2.165,0.731c0.179,0.135,0.506,0.135,0.685,0c0.04-0.029,0.99-0.731,2.165-0.731c1.719,0,2.779,0.814,3.542,2.723l2.493,6.404C18.611,15.534,18.524,15.733,18.347,15.801z">
                                                                    </path>
                                                                </svg>
                                                                <h3 class="my-2 ml-3 text-2xl font-bold text-gray-800">
                                                                    Autres Gadgets</h3>
                                                            </div>
                                                            <p class="mt-3 mb-1 text-xs font-medium text-green-500 uppercase"
                                                                data-primary="green-500">PREMIUM FEATURE</p>
                                                            <p class="mb-2 text-gray-600">
                                                                Des gadgets pour tout type d'appareil, pour usage
                                                                personnel ou profetionnel
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>




                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/banner1.png" alt="First slide">
                                    </div>
                                    <div class="item">
                                        <img src="images/banner2.png" alt="Second slide">
                                    </div>
                                    <div class="item">
                                        <img src="images/banner3.png" alt="Third slide">
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                </a>
                            </div>
                            <div class="my-24">
                                <h2 class="text-6xl font-bold ">Les plus vendus ce mois-ci</h2>

                            </div>
                            <?php
		       			$month = date('m');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>&#36; ".number_format($row['price'], 2)."</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "Ceci est un problème de connexion: " . $e->getMessage();
						}

						$pdo->close();

		       		?>
                        </div>
                        <div class="col-sm-3">
                            <?php include 'includes/sidebar.php'; ?>
                        </div>
                    </div>
                </section>

            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
    </div>

    <?php include 'includes/scripts.php'; ?>
</body>

</html>