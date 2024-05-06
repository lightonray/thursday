<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Thursday</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>

        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
        <!-- Preloader -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header id="header">
            <div id="sticky-header" class="menu-area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div  class="logo">
                                        <a href="index.html"><img style="margin-left: 20px; width: 120px" src="assets/img/logo/thursdaylogo.png" alt="Logo"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active"><a href="#header" class="section-link">Home</a></li>
                                            <li><a href="#feature" class="section-link">Feature</a></li>
                                            <li><a href="#chart" class="section-link">Plans</a></li>
                                            <li><a href="#roadMap" class="section-link">Forum</a></li>
                                            <li class="menu-item-has-children"><a href="#">Why Thursday?</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Technology</a></li>
                                                    <li><a href="blog-details.html">Security</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action">
                                        <ul class="list-wrap">
                                            @auth
                                                <li class="header-login"><a href="{{ route('user.dashboard') }}">Home<i class="fas fa-home"></i></a></li>
                                            @endauth

                                            @guest
                                                <li class="header-login"><a href="{{ route('user.login') }}">Login<i class="fas fa-user"></i></a></li>
                                            @endguest
                                            <li class="offcanvas-menu"><a href="#" class="menu-tigger"><i class="fas fa-bars"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                        </div>
                    </div>
                </div>
            </div>

            <!-- offCanvas-menu -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button><i class="far fa-window-close"></i></button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli <br> Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                        <p>+(090) 8765 86543 85</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                        <p>example.mail@hum.com</p>
                    </div>
                </div>
                <div class="social-icon-right mt-30">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offCanvas-menu-end -->

        </header>
        <!-- header-area-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section class="banner-area banner-bg" data-background="assets/img/banner/banner_bg.png">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="banner-content text-center">
                                <h2 class="title">Welcome to Thursday <br> <span>Revolutionize Your Trading</span></h2>
                                <p>Thursday offers a unified platform for trading across all major cryptocurrency exchanges, equipped with advanced automation trading and analytics.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-scroll-down">
                    <a href="#contribution" class="section-link">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <div class="banner-shape-wrap">
                    <img src="assets/img/banner/banner_shape01.png" alt="" class="leftToRight">
                    <img src="assets/img/banner/banner_shape02.png" alt="" class="alltuchtopdown">
                </div>
            </section>
            <!-- banner-area-end -->
        
            <!-- contribution-area -->
            <section id="contribution" class="contribution-area pt-130 pb-130">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="contribution-title">
                                <h2 class="title">Expanding Horizons</h2>
                            </div>
                            <div class="progress-wrap">
                                <ul class="list-wrap">
                                    <li>Seamless Integration</li>
                                    <li>Robust Automation</li>
                                    <li>Comprehensive Analytics</li>
                                </ul>
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 83%"></div>
                                </div>
                                <h6 class="progress-title">Ahead of Schedule in Our Development Roadmap</h6>
                            </div>
                            <div class="contribution-btn">
                                <a href="contact.html" class="btn">Get Started</a>
                                <a href="contact.html" class="btn btn-two">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contribution-shape-wrap">
                    <img src="assets/img/images/contribution_shape01.png" alt="" class="alltuchtopdown">
                    <img src="assets/img/images/contribution_shape02.png" alt="" class="leftToRight">
                </div>
            </section>
            <!-- contribution-area-end -->
        
            <!-- brand-area -->
            <div class="brand-area">
                <div class="container-fluid p-0">
                    <div class="row g-0">
                        <div class="col-lg-12">
                            <div class="brand-title text-center">
                                <h6 class="title">Our Trusted Partners</h6>
                            </div>
                        </div>
                    </div>
                    <div class="brand-item-wrap">
                        <div class="row g-0 brand-active">
                            <div class="col-12">
                                <div class="brand-item">
                                    <a target="blank" href="https://www.cardiffmet.ac.uk/Pages/default.aspx">
                                        <img src="assets/img/brand/CMU.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="brand-item">
                                    <a target="blank" href="https://vum.bg/">
                                        <img src="assets/img/brand/VUM.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
        
            <!-- features-area -->
            <section id="feature" class="features-area pt-140 pb-110">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="section-title text-center mb-70">
                                <h2 class="title">Features Tailored for Every Trader</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="features-item">
                                <div class="features-content">
                                    <h2 class="title">Smart Terminal Interface</h2>
                                    <p>Control and execute trades across all exchanges from one powerful interface.</p>
                                </div>
                                <div class="features-img">
                                    <img src="assets/img/images/features_img01.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="features-item">
                                <div class="features-content">
                                    <h2 class="title">Advanced Trading Bots</h2>
                                    <p>Automate your trading strategies with our highly customizable and intelligent bots.</p>
                                </div>
                                <div class="features-img">
                                    <img src="assets/img/images/features_img02.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="features-item">
                                <div class="features-content">
                                    <h2 the="title">Enhanced Security Measures</h2>
                                    <p>Trade with confidence knowing your assets are safeguarded with state-of-the-art security protocols.</p>
                                </div>
                                <div class="features-img">
                                    <img src="assets/img/images/features_img03.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="features-item">
                                <div class="features-content">
                                    <h2 class="title">Real-Time Market Insights</h2>
                                    <p>Gain an edge in the market with real-time analytics and actionable insights.</p>
                                </div>
                                <div class="features-img">
                                    <img src="assets/img/images/features_img04.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-area-end -->
        
            <!-- features-area -->
            <section class="features-area-two features-bg"  data-background="assets/img/bg/features_bg.png">
                <div class="container">
                    <div class="features-inner-wrap">
                        <div class="features-item-wrap">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="features-item-two">
                                        <div class="features-img-two">
                                            <img src="assets/img/images/features_two_img01.png" alt="">
                                        </div>
                                        <div class="features-content-two">
                                            <h2 class="title">Seamless Trading Experience</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="features-item-two">
                                        <div the="features-img-two">
                                            <img src="assets/img/images/features_two_img02.png" alt="">
                                        </div>
                                        <div class="features-content-two">
                                            <h2 the="title">Comprehensive Asset Management</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="features-item-two">
                                        <div the="features-img-two">
                                            <img src="assets/img/images/features_two_img03.png" alt="">
                                        </div>
                                        <div class="features-content-two">
                                            <h2 the="title">Cutting-Edge Technological Integration</h2>
                                        </div>
                                    </div
                                ></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title section-title-two text-center">
                                    <h2 class="title">Join Thursday and Step into the Future of Trading</h2>
                                </div>
                            </div>
                        </div>
                        <div class="features-line-shape"></div>
                    </div>
                </div>
                <div class="features-shape-wrap">
                    <img src="assets/img/images/features_shape01.png" alt="" class="alltuchtopdown">
                    <img src="assets/img/images/features_shape02.png" alt="" class="leftToRight">
                </div>
            </section>
            <!-- features-area-end -->
        </main>
        
        <!-- main-area-end -->

        <!-- footer-area -->
        <footer>
            <div class="footer-area footer-bg" data-background="assets/img/bg/footer_bg.png">
                <div class="container">
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Usefull Links</h4>
                                    <div class="footer-link">
                                        <ul class="list-wrap">
                                            <li><a href="contact.html">Contact us</a></li>
                                            <li><a href="contact.html">How it Works</a></li>
                                            <li><a href="contact.html">Create</a></li>
                                            <li><a href="contact.html">Explore</a></li>
                                            <li><a href="contact.html">Terms & Services</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-2 col-md-4 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">SOLUTIONS</h4>
                                    <div class="footer-link">
                                        <ul class="list-wrap">
                                            <li><a href="contact.html">Token Suite</a></li>
                                            <li><a href="contact.html">Ecosystem</a></li>
                                            <li><a href="contact.html">Investment</a></li>
                                            <li><a href="contact.html">Portal</a></li>
                                            <li><a href="contact.html">Tokenization</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Usefull Links</h4>
                                    <div class="footer-link">
                                        <ul class="list-wrap">
                                            <li><a href="contact.html">Help Center</a></li>
                                            <li><a href="contact.html">Partners</a></li>
                                            <li><a href="contact.html">Suggestions</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="contact.html">Newsletters</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-8">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Subscribe Newsletter</h4>
                                    <div class="footer-newsletter">
                                        <p>Exerci tation ullamcorper suscipit lobortis nisl aliquip ex ea commodo</p>
                                        <form action="#">
                                            <input type="text" placeholder="Info@gmail.com">
                                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="copyright-text">
                                    <p>Copyright © 2024 Thursday. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-shape-wrap">
                    <img src="assets/img/images/footer_shape01.png" alt="" class="alltuchtopdown">
                    <img src="assets/img/images/footer_shape02.png" alt="" class="leftToRight">
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->


		<!-- JS here -->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/ajax-form.js"></script>
        <script src="assets/js/jquery.easing.js"></script>
        <script src="assets/js/chart.min.js"></script>
        <script src="assets/js/custom-chart.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
