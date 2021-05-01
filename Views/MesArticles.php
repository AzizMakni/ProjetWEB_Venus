<?php
if ( empty(session_id()) ) session_start();

include "../Controller/ArticleC.php";
$article1C=new ArticleC();
$liste=$article1C->recupererArticleByClientId($_SESSION['idclient']);
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:26 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog List View || Egypt Museum || Responsive HTML Template</title>
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

    <?php include 'topbar.php'; ?>
    <?php include 'header.php'; ?>
    <section class="inner-banner">
        <div class="container">
            <h2 class="inner-banner__title">Mes Articles</h2><!-- /.inner-banner__title -->
            <ul class="list-unstyled thm-breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li>Blog</li>
            </ul><!-- /.thm-breadcrumb -->
        </div><!-- /.container -->
    </section><!-- /.inner-banner -->
    <section class="blog-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <?php
                    foreach ($liste as $item) {
                        ?>
                        <div class="blog-one__single">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-one__image">
                                        <img src="images/blog/blog-g-1-1.jpg" alt="">
                                        <a href="article.php?id=<?php echo $item['id']; ?>"><i class="egypt-icon-add"></i>
                                            <!-- /.egypt-icon-add --></a>
                                    </div><!-- /.blog-one__image -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="blog-one__content">
                                        <div class="blog-one__top">
                                            <div class="blog-one__date">
                                                <span>
                                                    <?php echo date("d", strtotime($item['date'])); ?> <br>
                                                    <?php echo date("F", strtotime($item['date'])); ?>
                                                </span>
                                            </div><!-- /.blog-one__date -->
                                            <div class="blog-one__meta">
                                                <a href="#">Moi</a>
                                                <a href="#"></a>
                                            </div><!-- /.blog-one__meta -->
                                        </div><!-- /.blog-one__top -->
                                        <h3 class="blog-one__title"><a href="article.php?id=<?php echo $item['id']; ?>"><?php echo $item['titre']; ?></a></h3><!-- /.blog-one__title -->
                                        <p class="blog-one__text"><?php echo $item['description']; ?></p><!-- /.blog-one__text -->
                                        <a href="article.php?id=<?php echo $item['id']; ?>" class="blog-one__link">Voir plus <span>+</span></a><br>
                                        <a href="supprimerArticle.php?id=<?php echo $item['id']; ?>" class="blog-one__link">Supprimer</a><br>
                                        <a href="modifierArticle.php?id=<?php echo $item['id']; ?>" class="blog-one__link">Modifier</a>
                                        <!-- /.blog-one__link -->
                                    </div><!-- /.blog-one__content -->
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.blog-one__single -->
                        <?php
                    }
                    ?>

                    <a href="ajouterArticle.html">Poster un atricle</a>
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar sidebar__right">
                        <div class="sidebar__single sidebar__search">
                            <form action="#" class="sidebar__search-form">
                                <input type="text" name="search" placeholder="Search...">
                                <button type="submit"><i class="egypt-icon-search"></i></button>
                            </form><!-- /.sidebar__search-form -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h3 class="sidebar__title">Categories</h3><!-- /.sidebar__title -->
                            <ul class="list-unstyled sidebar__cat-list">
                                <li>
                                    <a href="#">
                                        <span class="sidebar__cat-list__icon"></span>
                                        History
                                        <span class="sidebar__cat-list__count">(10)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar__cat-list__icon"></span>
                                        Internationl
                                        <span class="sidebar__cat-list__count">(10)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar__cat-list__icon"></span>
                                        Exhibition
                                        <span class="sidebar__cat-list__count">(10)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar__cat-list__icon"></span>
                                        Kids & Family
                                        <span class="sidebar__cat-list__count">(10)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar__cat-list__icon"></span>
                                        Press Release
                                        <span class="sidebar__cat-list__count">(10)</span>
                                    </a>
                                </li>
                            </ul><!-- /.sidebar__cat-list -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h3 class="sidebar__title">Trending Post</h3><!-- /.sidebar__title -->
                            <div class="sidebar__post-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <div class="sidebar__post-single">
                                        <div class="sidebar__post-image">
                                            <div class="sidebar__post-date"><span>5</span> sep</div><!-- /.sidebar__post-date -->
                                            <img src="images/blog/blog-s-1-1.jpg" alt="Awesome Image" />
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <a href="#" class="sidebar__post-cata">International</a>
                                            <h3 class="sidebar__post-title"><a href="blog-details.html">5 Things You’ll Learn at The Egypt National Symposium</a></h3><!-- /.sidebar__post-title -->
                                            <a href="blog-details.html" class="sidebar__post-link">Read More <span>+</span></a>
                                        </div><!-- /.sidebar__post-content -->
                                    </div><!-- /.sidebar__post-single -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="sidebar__post-single">
                                        <div class="sidebar__post-image">
                                            <div class="sidebar__post-date"><span>5</span> sep</div><!-- /.sidebar__post-date -->
                                            <img src="images/blog/blog-s-1-1.jpg" alt="Awesome Image" />
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <a href="#" class="sidebar__post-cata">International</a>
                                            <h3 class="sidebar__post-title"><a href="blog-details.html">5 Things You’ll Learn at The Egypt National Symposium</a></h3><!-- /.sidebar__post-title -->
                                            <a href="blog-details.html" class="sidebar__post-link">Read More <span>+</span></a>
                                        </div><!-- /.sidebar__post-content -->
                                    </div><!-- /.sidebar__post-single -->
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="sidebar__post-single">
                                        <div class="sidebar__post-image">
                                            <div class="sidebar__post-date"><span>5</span> sep</div><!-- /.sidebar__post-date -->
                                            <img src="images/blog/blog-s-1-1.jpg" alt="Awesome Image" />
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <a href="#" class="sidebar__post-cata">International</a>
                                            <h3 class="sidebar__post-title"><a href="blog-details.html">5 Things You’ll Learn at The Egypt National Symposium</a></h3><!-- /.sidebar__post-title -->
                                            <a href="blog-details.html" class="sidebar__post-link">Read More <span>+</span></a>
                                        </div><!-- /.sidebar__post-content -->
                                    </div><!-- /.sidebar__post-single -->
                                </div><!-- /.item -->
                            </div><!-- /.sidebar__post-carousel -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h3 class="sidebar__title">Tags</h3><!-- /.sidebar__title -->
                            <div class="sidebar__tags-list">
                                <a href="#">Art</a>
                                <a href="#">Collection</a>
                                <a href="#">Display</a>
                                <a href="#">Events</a>
                                <a href="#">Exhibition</a>
                                <a href="#">Gallery</a>
                                <a href="#">Memorial</a>
                                <a href="#">Visit</a>
                            </div><!-- /.sidebar__tags-list -->
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h3 class="sidebar__title">Instagram</h3><!-- /.sidebar__title -->
                            <ul class="sidebar__insta-list list-unstyled">
                                <li><a href="#">
                                        <span class="sidebar__insta-list__link">+</span>
                                        <img src="images/blog/blog-insta-1-1.jpg" alt="Awesome Image" />
                                    </a></li>
                                <li><a href="#">
                                        <span class="sidebar__insta-list__link">+</span>
                                        <img src="images/blog/blog-insta-1-2.jpg" alt="Awesome Image" />
                                    </a></li>
                                <li><a href="#">
                                        <span class="sidebar__insta-list__link">+</span>
                                        <img src="images/blog/blog-insta-1-3.jpg" alt="Awesome Image" />
                                    </a></li>
                                <li><a href="#">
                                        <span class="sidebar__insta-list__link">+</span>
                                        <img src="images/blog/blog-insta-1-4.jpg" alt="Awesome Image" />
                                    </a></li>
                                <li><a href="#">
                                        <span class="sidebar__insta-list__link">+</span>
                                        <img src="images/blog/blog-insta-1-5.jpg" alt="Awesome Image" />
                                    </a></li>
                                <li><a href="#">
                                        <span class="sidebar__insta-list__link">+</span>
                                        <img src="images/blog/blog-insta-1-6.jpg" alt="Awesome Image" />
                                    </a></li>
                            </ul><!-- /.sidebar__insta-list -->
                        </div><!-- /.sidebar__single -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-grid -->
    <footer class="site-footer">
        <div class="container">
            <a class="site-footer__logo" href="index-2.html"><img src="images/resources/footer-logo-1-1.png" alt=""></a>
            <form action="#" class="site-footer__form">
                <div class="site-footer__form-icon">
                    <i class="egypt-icon-email"></i><!-- /.egypt-icon-email -->
                </div><!-- /.site-footer__form-icon -->
                <input type="text" placeholder="Enter Email Address...">
                <button type="submit"><i class="egypt-icon-right-arrow1"></i><!-- /.egypt-icon-right-arrow1 --></button>
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


<!-- Mirrored from st.ourhtmldemo.com/new/egypt/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Apr 2021 19:33:32 GMT -->
</html>
