<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Aplikasi Donasi Tzu Chi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/image/logo.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('template/charityworks-master/assets/css/style.css') }}">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/image/logo.png') }}" alt="logo tzu chi">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <ul>
                                        <li>Phone: +62 21 55963680</li>
                                        <li>Email: tzuchiind@tzuchi.or.id</li>
                                    </ul>
                                    <div class="header-social">
                                        <ul>
                                            <li><a href="https://www.instagram.com/tzuchiindonesia/"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://www.facebook.com/tzuchiindonesia/"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UCfywSuUWqtJOLO10alVtXRA"><i
                                                        class="fab fa-youtube"></i></a></li>
                                            <li> <a href="https://twitter.com/tzuchiindonesia"><i
                                                        class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="header-info-right d-flex align-items-center">
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select1">
                                                    <option value="">Indonesia</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('assets/image/logo.png') }}"
                                            alt="logo tzu chi" style="width:7em; aspect-ratio:2/1;"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about.html">Tentang Kami</a></li>
                                                <li><a href="blog.html">Blog</a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Kontak Kami</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="contact.html" class="btn header-btn">Donate</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
    @yield('content')
    <footer>
        <div class="footer-wrapper section-bg2"
            data-background="{{ asset('template/charityworks-master/assets/img/gallery/footer_bg.png') }}">
            <!-- Footer Top-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <div class="footer-tittle">
                                        <div class="footer-logo mb-20">
                                            <a href="index.html"><img src="{{ asset('assets/image/logo.png') }}"
                                                    alt="gambar logo tzu chi"
                                                    style="width:20em; aspect-ratio:2/1;"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li>
                                            <p>Address :Tzu Chi Center, Pantai Indah Kapuk, Jakarta Utara 14470</p>
                                        </li>
                                        <li><a href="tel:+62 21 55963680">Phone : +62 21 55963680</a></li>
                                        <li><a href="mailto:tzuchiind@tzuchi.or.id">Email : tzuchiind@tzuchi.or.id</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Link</h4>
                                    <ul>
                                        <li><a href="#"> Home</a></li>
                                        <li><a href="#">Tentang Kami</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Kontak Kami</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-xl-10 col-lg-9 ">
                                <div class="footer-copy-right">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com" target="_blank">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3">
                                <div class="footer-social f-right">
                                    <a href="https://www.instagram.com/tzuchiindonesia/"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/tzuchiindonesia/"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.youtube.com/channel/UCfywSuUWqtJOLO10alVtXRA"><i
                                            class="fab fa-youtube"></i></a>
                                    <a href="https://twitter.com/tzuchiindonesia"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{ asset('template/charityworks-master/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('template/charityworks-master/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('template/charityworks-master/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('template/charityworks-master/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('template/charityworks-master/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('template/charityworks-master/assets/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('template/charityworks-master/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ asset('template/charityworks-master/assets/js/jquery.barfiller.js') }}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('template/charityworks-master/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('template/charityworks-master/assets/js/contact.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('template/charityworks-master/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('template/charityworks-master/assets/js/main.js') }}"></script>

</body>

</html>
