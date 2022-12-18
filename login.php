<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition login-page bg1 ">
    <div class="login-box flex justify-center item-center">
        <div>

            <div class="login-box-body relative z-50 mt-24">
                <div>
                    <?php
      if(isset($_SESSION['error'])){
        echo " 
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div> <br/>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div> <br/>
        ";
        unset($_SESSION['success']);
      }
    ?>
                </div>
                <p class="login-box-msg text-4xl font-bold ">Connectez-vous pour ouvrir une session</p>

                <form action="verify.php" method="POST">
                    <div class="form-group has-feedback">
                        <input value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" type="email"
                            class="form-control" name="email" placeholder="Email" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="w-full px-6">
                            <button type="submit" class="btn btn-primary btn-block btn-flat bg-blue-900 w-full"
                                name="login"><i class="fa fa-sign-in"></i> Se connecter</button>
                        </div>
                    </div>
                </form>
                <br>
                <a href="password_forgot.php">J'ai oublié mon mot de passe</a><br>
                <a href="signup.php" class="text-center text-blue-700 font-reg">Créer un compte</a><br>
            </div>
        </div>
    </div>

    <?php include 'includes/scripts.php' ?>
</body>

</html>