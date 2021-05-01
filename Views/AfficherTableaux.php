<?php
include  "../Controller/TableauxC.php";
session_start();

$tableauxC= new TableauxC();
    $liste=$tableauxC->afficherTableauxs();

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/proudcts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:46 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Store || Egypt Museum || Responsive HTML Template</title>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#d99578">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#d99578">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#d99578">
    <link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i%7CPrata&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/egypt-icons/style.css">
    <link rel="stylesheet" href="css/nouislider.css">
    <link rel="stylesheet" href="css/nouislider.pips.css">
    <link rel="stylesheet" href="css/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <?php include 'header.php'; ?>

        <section class="inner-banner" style="background-image: url(images/background/inner-banner-bg-1-2.jpg);">
            <div class="container">
                <h2 class="inner-banner__title">Our Store</h2><!-- /.inner-banner__title -->
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li>Store</li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <div class="product-sorting">
            <div class="container">
                <div class="inner-container">
                <form method="POST" action="AjouterTableau.php">
                     <input type="submit" class="thm-btn login-form__btn" value="Ajouter un tableau" name="ajouter" >
                  </form>
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </div><!-- /.product-sorting -->
        <section class="product-one">
            <div class="container">
                <div class="row">
                <?php
                  foreach($liste as $row){
                                      ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="product-one__single">
                            <div class="product-one__image">
                                <img src="<?php echo $row['image']; ?>"  width="150" height="300" alt="Awesome Image" />
                            </div><!-- /.product-one__image -->
                            <div class="product-one__content">
                                <div class="product-one__content-left">
                                    <h3 class="product-one__title">
                                        <a href="AfficherCadeaux.php"><?php echo $row['nom']; ?></a>
                                    </h3><!-- /.product-one__title -->
                                    <p class="product-one__text"><?php echo $row['prix']; ?> TND</p><!-- /.product-one__text -->
                                    <p class="product-one__stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>(24 Reviews)</span>
                                    </p><!-- /.product-one__stars -->
                                </div><!-- /.product-one__content-left -->
                                <div class="product-one__content-right">
                                    <a href="AjouterPanier.php?id=<?PHP echo $row['id']; ?>&prix=<?php echo $row['prix']; ?>&type=tableaux" data-toggle="tooltip" data-placement="top" title="Ajouter Panier" class="product-one__cart-btn"><i class="egypt-icon-supermarket"></i></a>
                                </div><!-- /.product-one__content-right -->
                            </div><!-- /.product-one__content -->
                        </div><!-- /.product-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <?php
                                            }
                                        ?>           
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.product-one -->
        <?php include 'footer.php'; ?>

    </div><!-- /.page-wrapper -->
    <div class="side-menu__block">
        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <a href="index-2.html"><img src="images/resources/dark-logo.png" alt="Awesome Image" /></a>
            <div class="side-menu__block-about">
                <h3 class="side-menu__block__title">About Us</h3><!-- /.side-menu__block__title -->
                <p class="side-menu__block-about__text">We must explain to you how all seds this mistakens idea off denouncing pleasures and praising pain was born and I will give you a completed accounts off the system and </p><!-- /.side-menu__block-about__text -->
                <a href="#" class="thm-btn side-menu__block-about__btn">Get Consultation</a>
            </div><!-- /.side-menu__block-about -->
            <hr class="side-menu__block-line" />
            <div class="side-menu__block-contact">
                <h3 class="side-menu__block__title">Contact Us</h3><!-- /.side-menu__block__title -->
                <ul class="side-menu__block-contact__list">
                    <li class="side-menu__block-contact__list-item">
                        <i class="fa fa-map-marker"></i>
                        Rock St 12, Newyork City, USA
                    </li><!-- /.side-menu__block-contact__list-item -->
                    <li class="side-menu__block-contact__list-item">
                        <i class="fa fa-phone"></i>
                        <a href="tel:526-236-895-4732">(526) 236-895-4732</a>
                    </li><!-- /.side-menu__block-contact__list-item -->
                    <li class="side-menu__block-contact__list-item">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:example@mail.com">example@mail.com</a>
                    </li><!-- /.side-menu__block-contact__list-item -->
                    <li class="side-menu__block-contact__list-item">
                        <i class="fa fa-clock-o"></i>
                        Week Days: 09.00 to 18.00 Sunday: Closed
                    </li><!-- /.side-menu__block-contact__list-item -->
                </ul><!-- /.side-menu__block-contact__list -->
            </div><!-- /.side-menu__block-contact -->
            <p class="side-menu__block__text site-footer__copy-text"><a href="#">Egypt</a> <i class="fa fa-copyright"></i> 2019 All Right Reserved</p>
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->
    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="egypt-icon-search"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="egypt-icon-arrow-2"></i></a>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="js/nouislider.js"></script>
    <script src="js/jquery.bootstrap-touchspin.min.js"></script>
    <script src="js/theme.js"></script>
</body>


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/proudcts.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:48 GMT -->
</html>