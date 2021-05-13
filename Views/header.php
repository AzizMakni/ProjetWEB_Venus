<?php
if ( empty(session_id()) ) session_start();
?>
<header class="site-header site-header__header-one  ">
    <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="logo-box">
                <a class="navbar-brand" href="index-2.html">
                    <img src="images/resources/light-logo.png" class="main-logo" alt="Awesome Image" />
                </a>
                <button class="menu-toggler" data-target=".main-navigation">
                    <span class="fa fa-bars"></span>
                </button>
            </div><!-- /.logo-box -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="main-navigation">
                <ul class=" navigation-box @@extra_class">
                    <li class="current">
                        <a href="index-2.html">Home</a>
                        <ul class="submenu">
                            <li><a href="index-2.html">Home One</a></li>
                            <li><a href="index-3.html">Home Two</a></li>
                            <li><a href="index-2.html">Header Variations</a>
                                <ul class="submenu">
                                    <li><a href="index-2.html">Home One</a></li>
                                    <li><a href="index-3.html">Home Two</a></li>
                                </ul><!-- /.submenu -->
                            </li>
                        </ul><!-- /.submenu -->
                    </li>
                    <li>
                        <a href="about.html">The Museum</a>
                        <ul class="submenu">
                            <li><a href="about.html">About Us </a></li>
                            <li><a href="team.html">Meet Our Team</a></li>
                            <li><a href="venues.html">Venues</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul><!-- /.submenu -->
                    </li>

                    <li>
                        <a href="request-visit.html">Visit</a>
                        <ul class="submenu">
                            <li><a href="request-visit.html#open-hrs">Opening Hours</a></li>
                            <li><a href="request-visit.html#admission">Admission Cost</a></li>
                            <li><a href="request-visit.html#how-to-get">How to Get Here</a></li>
                            <li><a href="request-visit.html#anenities">Amenities</a></li>
                            <li><a href="request-visit.html#interior">Interior Map</a></li>
                        </ul><!-- /.submenu -->
                    </li>

                    <li>
                        <a href="Evenements.php">Evenements</a>
                    </li>
                    <li>
                        <a href="Articles.php">Articles</a>
                    </li>
                    <?php if(!isset($_SESSION['client']))
                    { ?>
                        <li>
                            <a href="Connexion.php">Connexion</a>
                            <ul class="submenu">
                                <li><a href="Connexion.php">Se connecter</a></li>
                                <li><a href="Inscription.php">S'inscrire</a></li>
                            </ul><!-- /.submenu -->
                        </li>
                        <?php
                    }
                    else
                    {
                        ?>
                        <li>
                            <a href="MesArticles.php">Mes Articles</a>
                        </li>
                        <li>
                            <a href="Deconnexion.php">Deconnexion</a>
                        </li>
                        <?php
                    }
                    ?>
            </div><!-- /.navbar-collapse -->
            <div class="right-side-box">
                <a href="cart.html" class="site-header__cart"><i class="egypt-icon-supermarket"></i>
                    <!-- /.egypt-icon-supermarket --> <span class="count">3</span><!-- /.count --></a>
                <!-- /.site-header__cart -->
                <a href="#" class="site-header__sidemenu-nav side-menu__toggler">
                    <span class="site-header__sidemenu-nav-line"></span><!-- /.site-header__sidemenu-nav-line -->
                    <span class="site-header__sidemenu-nav-line"></span><!-- /.site-header__sidemenu-nav-line -->
                    <span class="site-header__sidemenu-nav-line"></span><!-- /.site-header__sidemenu-nav-line -->
                </a><!-- /.site-header__sidemenu -->
            </div><!-- /.right-side-box -->
        </div>
        <!-- /.container -->
    </nav>
</header><!-- /.site-header -->
