
 <header class="site-header site-header__header-one  ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box">
                        <a class="navbar-brand" href="index.php">
                            <img src="images/resources/light-logo.png" class="main-logo" alt="Awesome Image" />
                        </a>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box @@extra_class">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                            <a href="#">Evenements</a>
                            </li>
                            <li>
                                <a href="#">Produits</a>
                                <ul class="submenu">
                                    <li><a href="AfficherTableaux.php">Tableaux</a></li>
                                    <li><a href="AfficherCadeaux.php">Cadeaux</a></li>
                                </ul><!-- /.submenu -->
                            </li>
                                <?php if(!isset($_SESSION['client']))
                                { ?>
                            <li>
                                <a href="#">Articles</a>
                            </li>
                            <li>
                                <a href="#">Connexion</a>
                                            <ul class="submenu">
                                            <li><a href="#">Se connecter</a></li>
                                            <li><a href="#">S'inscrire</a></li>
                                        </ul><!-- /.submenu -->
                            </li>
                                <?php 
                              }
                              else
                              {
                                ?>
                            <li>
                                <a href="#">Articles</a>
                                        <ul class="submenu">
                                            <li><a href="#">Articles</a></li>
                                            <li><a href="#">Mes Articles</a></li>
                                        </ul><!-- /.submenu -->
                            </li>

                            <li>
                                <a href="#">Mes Achats</a>
                            </li>
                            <li>
                                <a href="Deconnexion.php">Deconnexion</a>
                            </li>
                                <?php 
                                  }
                                  ?>
                    </div><!-- /.navbar-collapse -->
                    <?php
                        require_once  "../Controller/PanierC.php";
                        $panierCHeader= new PanierC();
                        $resultcount=$panierCHeader->countPanier();
                        ?>
                    <div class="right-side-box">
                        <a href="Panier.php" class="site-header__cart"><i class="egypt-icon-supermarket"></i>

                            <!-- /.egypt-icon-supermarket --> <span class="count"> <?php echo $resultcount; ?></span><!-- /.count --></a>

                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header -->