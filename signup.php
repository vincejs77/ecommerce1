<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }

  if(isset($_SESSION['captcha'])){
    $now = time();
    if($now >= $_SESSION['captcha']){
      unset($_SESSION['captcha']);
    }
  }

?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition register-page hold-transition login-page bg1">
    <div class="register-box">
        <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
        <div class="register-box-body z-50 relative mt-56">
            <p class="login-box-msg text-4xl font-bold ">Créer un compte</p>

            <form action="register.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="firstname" placeholder="Pré-nom"
                        value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="lastname" placeholder="Post-nom"
                        value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Votre email"
                        value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="repassword"
                        placeholder="Reécrire le mot de passer" required>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <?php
            if(!isset($_SESSION['captcha'])){
              echo '
                <di class="form-group" style="width:100%;">
                  <div class="g-recaptcha" data-sitekey="6LevO1IUAAAAAFX5PpmtEoCxwae-I8cCQrbhTfM6"></div>
                </di>
              ';
            }
          ?>
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