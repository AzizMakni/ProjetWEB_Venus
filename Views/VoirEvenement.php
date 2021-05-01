<?php
if ( empty(session_id()) ) session_start();

if(isset($_GET['id'])) {
    include "../Controller/EvenementC.php";
    $event1C=new EvenementC();
    $liste = $event1C->getEventById($_GET['id']);
    include "../Controller/PromotionC.php";
    $promo1C=new PromotionC();
    $listepromo=$promo1C->getPromotionsByEvent($_GET['id']);

    ?>
    <!DOCTYPE html>
    <html lang="en">


    <!-- Mirrored from st.ourhtmldemo.com/new/egypt/event-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:32:02 GMT -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Independent Japanese Antiquity || Event Details || Egypt Museum || Responsive HTML Template</title>
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
        <link
            href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i%7CPrata&amp;display=swap"
            rel="stylesheet">


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

        <?php include 'topbar.php'; ?>
        <?php include 'header.php'; ?>
        <?php
        foreach ($liste as $item) {
            ?>
            <section class="inner-banner">
                <div class="container">
                    <h2 class="inner-banner__title"><?php echo $item['nom']; ?></h2>
                </div><!-- /.container -->
            </section><!-- /.inner-banner -->
            <section class="event-details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="event-details__content">

                                <div class="event-details__single" id="about-event">
                                    <div class="event-details__event-info">
                                        <div class="row">
                                            <div class="col-lg-6 d-flex">
                                                <div class="my-auto">
                                                    <ul class="list-unstyled event-details__event-info__list">
                                                        <li>
                                                                <img src="<?php echo "../Admin/".$item['image']; ?>">
                                                        </li>
                                                        <li>
                                                            <span>Date debut</span>
                                                            <p>
                                                                <i class="fa fa-clock-o"></i>
                                                                <?php echo $item['date_debut']; ?>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <span>Date fin</span>
                                                            <p>
                                                                <i class="fa fa-clock-o"></i>
                                                                <?php echo $item['date_fin']; ?>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <span>Lieu</span>
                                                            <p>
                                                                <i class="fa fa-location-arrow"></i>
                                                                <?php echo $item['lieu']; ?>
                                                            </p>
                                                        </li>
                                                    </ul><!-- /.list-unstyled event-details__event-info__list -->
                                                </div><!-- /.my-auto -->
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-6 clearfix">
                                                <img src="images/event/event-d-1-1.jpg" class="float-right"
                                                     alt="Awesome Image"/>
                                            </div><!-- /.col-lg-6 -->
                                        </div><!-- /.row -->
                                    </div><!-- /.event-details__event-info -->
                                    <h3 class="event-details__title">Detailles</h3>
                                    <!-- /.event-details__title -->
                                    <p class="event-details__text"><?php echo $item['informations'] ?></p><!-- /.event-details__text -->

                                </div><!-- /#about-event.event-details__single -->
                                <div id="schedule" class="event-details__single">
                                    <h3 class="event-details__title">Les promotions de l'evenement</h3><!-- /.event-details__title -->
                                    <?php
                                    foreach ($listepromo as $row) {
                                        ?>
                                        <ul class="event-details__schedule-list list-unstyled">
                                            <li>
                                                <div class="event-details__schedule-time">
                                                    Date de promotion :<?php echo $row['date_promotion']; ?>
                                                </div><!-- /.event-details__schedule-time -->
                                                <div class="event-details__schedule-content">
                                                    <h3>Reduction :</h3>
                                                    <p><?php echo $row['reduction']; ?> %</p>
                                                </div><!-- /.event-details__schedule-content -->
                                            </li>
                                        </ul>
                                        <?php
                                    }
                                    ?>
                                </div><!-- /#schedule.event-details__single -->
                            </div><!-- /.event-details__content -->
                        </div><!-- /.col-lg-8 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.event-details -->
            <?php
        }
        ?>

        <footer class="site-footer">
            <div class="container">
                <a class="site-footer__logo" href="index-2.html"><img src="images/resources/footer-logo-1-1.png" alt=""></a>
                <form action="#" class="site-footer__form">
                    <div class="site-footer__form-icon">
                        <i class="egypt-icon-email"></i><!-- /.egypt-icon-email -->
                    </div><!-- /.site-footer__form-icon -->
                    <input type="text" placeholder="Enter Email Address...">
                    <button type="submit"><i class="egypt-icon-right-arrow1"></i><!-- /.egypt-icon-right-arrow1 -->
                    </button>
                </form><!-- /.site-footer__form -->
                <div class="site-footer__social">
                    <a href="#"><i class="egypt-icon-logo"></i></a>
                    <a href="#"><i class="egypt-icon-twitter"></i></a>
                    <a href="#"><i class="egypt-icon-instagram"></i></a>
                    <a href="#"><i class="egypt-icon-play"></i></a>
                </div><!-- /.site-footer__social -->
                <p class="site-footer__copy">Copyrights &copy; 2019 <a href="#">Egypt</a>, All Rights Reserved.</p>
                <!-- /.site-footer__copy -->
            </div><!-- /.container -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->
    <div class="side-menu__block">
        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <a href="index-2.html"><img src="images/resources/dark-logo.png" alt="Awesome Image"/></a>
            <div class="side-menu__block-about">
                <h3 class="side-menu__block__title">About Us</h3><!-- /.side-menu__block__title -->
                <p class="side-menu__block-about__text">We must explain to you how all seds this mistakens idea off
                    denouncing pleasures and praising pain was born and I will give you a completed accounts off the
                    system and </p><!-- /.side-menu__block-about__text -->
                <a href="#" class="thm-btn side-menu__block-about__btn">Get Consultation</a>
            </div><!-- /.side-menu__block-about -->
            <hr class="side-menu__block-line"/>
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
            <p class="side-menu__block__text site-footer__copy-text"><a href="#">Egypt</a> <i
                    class="fa fa-copyright"></i> 2019 All Right Reserved</p>
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


    <!-- Mirrored from st.ourhtmldemo.com/new/egypt/event-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:32:06 GMT -->
    </html>
    <?php
}
    ?>
