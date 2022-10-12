<!DOCTYPE html>
<html lang="en">
<!-- index-2 06:41:43 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Service Apartments</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="<?= base_url("frontend/css/style.css")?>" >
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="<?= base_url("frontend/css/responsive.css")?>" >
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url("frontend/images/logo.png")?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url("frontend/images/logo.png")?>" >
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url("frontend/images/logo.png")?>" >

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?= base_url("frontend/js/html5shiv.js")?>" ></script>
    <![endif]-->

</head>

<body>
<div class="boxed_wrapper"> <!--start boxed wrapper and close before body tag-->

    <!--<div class="preloader"></div>-->

    <!-- Start Top Bar style2 -->
    <section class="top-bar-style2">
        <div class="top-style2 clearfix">
            <div class="top-style2-left">
                <p><span class="icon-music"></span>We have Answers</p>
                <ul>
                    <li>+91 9999105555</li>
                    <li>info@eserviceapartments.com</li>
                </ul>
            </div>
            <div class="top-style2-right">

                <ul class="topbar-social-links">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Top Bar style2 -->

    <!--Start Main Header-->
    <header class="main-header header-style2 stricky">
        <div class="inner-container clearfix">
            <div class="logo-box-style2 float-left">
                <a href="index.html">
                    <img src="<?= base_url("frontend/images/logo.png")?>" alt="Awesome Logo">
                    <h5>Service Apartments</h5>
                </a>
            </div>
            <div class="main-menu-box float-right">
                <nav class="main-menu style2 clearfix">
                    <div class="navbar-header clearfix">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="index.html">Home</a>

                            </li>
                            <li class=""><a href="#">About Us</a>
                            </li>
                            <?php foreach($state as $state): ?>
                            <li class="">
                                <a href="<?= base_url().$state['name']."html"?>"><?= $state['name'] ?></a>
                            </li>
                            <?php endforeach; ?>
                            </li>
                            <!-- <li class="dropdown"><a href="shop.html">Shop</a>
                                <ul>
                                    <li><a href="shop.html">Our Products</a></li>
                                    <li><a href="shop-single.html">Products Single</a></li>
                                    <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="account.html">My Account</a></li>
                                </ul>
                            </li> -->
                            <li><a href="#">Goa</a></li>
                            <li><a href="#">FAQ</a></li>

                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="mainmenu-right style2">
                    <div class="outer-search-box">
                        <div class="seach-toggle"><i class="fa fa-search"></i></div>
                        <ul class="search-box">
                            <li>
                                <form method="post" action="#">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Search Here" required>
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>

                    <div class="button">
                        <a class="btn-one" href="#">Book Now<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header-->

    <!--start main content-->
    <?= $this->renderSection('user-contents') ?>
    <!--end main content-->




    <!--Start footer area Style4-->
    <footer class="footer-area style4">
        <div class="container">
            <div class="row">
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="single-footer-widget marbtm50-s4">
                        <div class="our-info-box">
                            <div class="footer-logo">
                                <a href="<?= base_url() ?>">
                                    <img src="<?= base_url("frontend/images/logo.png")?>" alt="Awesome Logo">
                                    <h5>- Service Apartments</h5>
                                </a>
                            </div>
                            <div class="text">
                                <p>eService Apartment offers fully-furnished eco-friendly & economical serviced apartments which contains fully equipped modular kitchen, spacious living area and large bathroom. </p>
                            </div>
                            <div class="follow-us-social-links clearfix">
                                <span>Follw Us On:</span>
                                <ul class="sociallinks-style-one">
                                    <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="single-footer-widget s4">
                        <div class="title-style2">
                            <h3>Usefull Links</h3>
                        </div>
                        <div class="usefull-links">
                            <ul class="float-left">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delhi</a></li>
                                <li><a href="#">Gurgaon</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact US</a></li>
                            </ul>
                            <ul class="float-left borders-left">

                                <li><a href="#">Noida</a></li>
                                <li><a href="#">Goa</a></li>
                                <li><a href="#"> Disclaimer</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Partner With Us</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
                    <div class="single-footer-widget pdtop50-s4">
                        <div class="title-style2">
                            <h3>Subscribe Us</h3>
                        </div>
                        <div class="subscribe-box">
                            <form class="subscribe-form" action="#">
                                <input type="email" name="email" placeholder="Your Email">
                                <button class="btn-one" type="submit">Subscribe<span class="flaticon-next"></span></button>
                            </form>
                            <div class="text">
                                <p><span>*</span>Subscribe us and get latest news and updates</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
            </div>
        </div>
    </footer>
    <!--End footer area style4-->

    <!--Start Footer Contact Info Area-->
    <section class="footer-contact-info-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="footer-contact-info clearfix">
                        <li>
                            <div class="single-footer-contact-info">
                                <div class="inner">
                                    <div class="icon">
                                        <span class="icon-global"></span>
                                    </div>
                                    <div class="text">
                                        <p>Ramphal Chowk, Dwarka Sector 7,<br> New Delhi -110075</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-footer-contact-info">
                                <div class="inner">
                                    <div class="icon">
                                        <span class="icon-support1"></span>
                                    </div>
                                    <div class="text">
                                        <p>+91 9999 10 5555<br> <span>Mon - Friday:</span> 9.00am to 6.00pm</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-footer-contact-info">
                                <div class="inner">
                                    <div class="icon">
                                        <span class="icon-shipping-and-delivery"></span>
                                    </div>
                                    <div class="text">
                                        <p>info@eserviceapartments.com<br> www.eserviceapartments.com </p>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Footer Contact Info Area-->

    <!--Start footer bottom area-->
    <section class="footer-bottom-area style3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="copyright-text text-center">
                        <p><a href="index.html" target="_blank"> Copyright &copy; 2022, All Rights Reserved by <a href="https://www.globalheight.com/">Global Height</a></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End footer bottom area-->

</div> <!--end div.class box wrapper class started after body tag-->


<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>



<script src="<?= base_url("frontend/js/jquery.js")?>"></script>
<script src="<?= base_url("frontend/js/appear.js")?>"></script>
<script src="<?= base_url("frontend/js/bootstrap.bundle.min.js")?>"></script>
<script src="<?= base_url("frontend/js/bootstrap-select.min.js")?>"></script>
<script src="<?= base_url("frontend/js/isotope.js")?>"></script>
<script src="<?= base_url("frontend/js/jquery.bootstrap-touchspin.js")?>"></script>
<script src="<?= base_url("frontend/js/jquery.countTo.js")?>"></script>
<script src="<?= base_url("frontend/js/jquery.easing.min.js")?>"></script>
<script src="<?= base_url("frontend/js/jquery.enllax.min.js")?>"></script>
<script src="<?= base_url("frontend/js/jquery.fancybox.js")?>"></script>
<script src="<?= base_url("frontend/js/jquery.mixitup.min.js")?>"></script>
<script src="<?= base_url("frontend/js/jquery.paroller.min.js")?>"></script>
<script src="<?= base_url("frontend/js/owl.js")?>"></script>
<script src="<?= base_url("frontend/js/validation.js")?>"></script>
<script src="<?= base_url("frontend/js/wow.js")?>"></script>

<!---
<script src="<?= base_url("frontend//js/gmaps.js")?>"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
<script src="<?= base_url("frontend/js/mapapi.js")?>"></script>
--->
<script src="<?= base_url("frontend/js/map-helper.js")?>"></script>

<script src="<?= base_url("frontend/assets/language-switcher/jquery.polyglot.language.switcher.js")?>"></script>
<script src="<?= base_url("frontend/assets/timepicker/timePicker.js")?>"></script>
<script src="<?= base_url("frontend/assets/html5lightbox/html5lightbox.js")?>"></script>

<!--Revolution Slider-->
<script src="<?= base_url("frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js")?>" ></script>
<script src="<?= base_url("frontend/plugins/revolution/js/jquery.themepunch.tools.min.js")?>" ></script>
<script src="<?= base_url("frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js")?>" ></script>
<script src="<?= base_url("frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js")?>" ></script>
<script src="<?= base_url("frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js")?>" ></script>
<script src="<?= base_url("frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js")?>" ></script>
<script src="<?= base_url("frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js")?>" ></script>
<script src="<?= base_url("frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js")?>" ></script>
<script src="<?= base_url("frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js")?>" ></script>
<script src="<?= base_url("frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js")?>" ></script>
<script src="<?= base_url("frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js")?>" ></script>
<script src="<?= base_url("frontend/js/main-slider-script.js")?>"></script>

<!-- thm custom script -->
<script src="<?= base_url("frontend/js/custom.js")?>"></script>



</body>


<!-- index-2 06:43:55 GMT -->

</html>
