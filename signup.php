<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }

?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition register-page hold-transition login-page bg1">
    <div class="register-box">

        <div class="register-box-body z-50 relative mt-56">
            <p class="login-box-msg text-4xl font-bold ">Créer un compte</p>
            <div>
                <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

     
    ?>
                <br>
            </div>
            <form action="register.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="firstname" placeholder="Pré-nom" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="lastname" placeholder="Post-nom" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Votre email" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <hr>
                <div class="row">
                    <div class="w-full px-5 mt-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat  bg-blue-900 w-full"
                            name="signup"><i class="fa fa-pencil"></i>S'inscrire</button>
                    </div>
                </div>
            </form>
            <br>
            <a href="login.php" class="text-blue-700">J'ai déjà un compte</a><br>
            <!-- <a href="index.php"><i class="fa fa-home"></i> Home</a> -->
        </div>
    </div>

    <?php include 'includes/scripts.php' ?>
</body>

</html>