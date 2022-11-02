<header class="main-header bg-blue-900">
    <nav class="navbar navbar-static-top">
        <div class="container">

            <div class="px-5">
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand"><b>Bin</b>Market</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="--collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Acueil</a></li>
                        <li><a href="">A propos de nous</a></li>
                        <li><a href="">Nous contacter</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catégories de produits <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <?php
             
                $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM category");
                  $stmt->execute();
                  foreach($stmt as $row){
                    echo "
                      <li><a href='category.php?category=".$row['cat_slug']."'>".$row['name']."</a></li>
                    ";                  
                  }
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();

              ?>
                            </ul>
                        </li>
                    </ul>
                    <form method="POST" class="navbar-form navbar-left" action="search.php">
                        <div class="input-group">
                            <input type="text" class="form-control" id="navbar-search-input" name="keyword"
                                placeholder="Rechercher un produit" required>
                            <span class="input-group-btn" id="searchBtn" style="display:none;">
                                <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown messages-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="label label-success cart_count"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Vous avez <span class="cart_count"></span> article(s) dans le panier
                                </li>
                                <li>
                                    <ul class="menu" id="cart_menu">
                                    </ul>
                                </li>
                                <li class="footer"><a href="cart_view.php">Ouvrir le pannier</a></li>
                            </ul>
                        </li>
                        <?php
            if(isset($_SESSION['user'])){
              $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
              echo '
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="'.$image.'" class="user-image" alt="User Image">
                    <span class="hidden-xs">'.$user['firstname'].' '.$user['lastname'].'</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="'.$image.'" class="img-circle" alt="User Image">

                      <p>
                        '.$user['firstname'].' '.$user['lastname'].'
                        <small>Member since '.date('M. Y', strtotime($user['created_on'])).'</small>
                      </p>
                    </li>
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
              ';
            }
            else{
              echo "
                <li><a href='login.php'>Connexion</a></li>
                <li><a href='signup.php'>Inscription</a></li>
              ";
            }
          ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>