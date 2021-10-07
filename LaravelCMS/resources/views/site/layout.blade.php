<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('descrption')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"> -->
</head>
<body>
<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="/">
                                <img src="{{asset('assets/img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    @foreach ($front_menu as $menuslug => $menutitle )
                                        <li>
                                            <a href="{{$menuslug}}">{{$menutitle}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="Appointment">

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->   

<!-- conteúdo do home.blade -->   
@yield('content')

<!-- 
    slider_area_start 
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-6">
                        <div class="slider_text ">
                            <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s" >{{$front_config['title']}} <br>
                                with applab</h3>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">{{$front_config['subtitle']}}</p>
                            <div class="video_service_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                                <a href="#" class="boxed-btn3">Get Start Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="phone_thumb wow fadeInDown" data-wow-duration="1.1s" data-wow-delay=".2s">
                            <img src="img/ilstrator/phone.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    slider_area_end
-->
    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                        <h3>Save your time to <br>
                                using applab</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
                        <div class="thumb">
                                <img src="img/icon/2.svg" alt="">
                        </div>
                        <h3>Manage team in <br>
                                One Place</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                        <div class="single_service text-center wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                                <div class="thumb">
                                        <img src="img/icon/1.svg" alt="">
                                </div>
                                <h3>All-powerful Pointing <br> 
                                        has no control</h3>
                            </div>
                </div>
                <div class="col-lg-4 col-md-4">

                            <div class="single_service text-center wow fadeInUp " data-wow-duration=".8s" data-wow-delay=".6s">
                                <div class="thumb">
                                        <img src="img/icon/3.svg" alt="">
                                </div>
                                <h3>Establish a solid online
                                        presence</h3>
                            </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area  -->

    <!-- service_area_2  -->
    <div class="service_area_2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-duration=".4s" data-wow-delay=".5s">
                    <div class="man_thumb">
                        <img src="img/ilstrator_img/man_walk.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-6 ">
                    <div class="mobile_screen wow fadeInRight" data-wow-duration=".8s" data-wow-delay=".5s">
                        <img src="img/ilstrator_img/mobile_screen.png" alt="">
                    </div>
                </div>
            </div>
            <div class="service_content_wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single_service  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                            <span>01</span>
                            <h3>Sign Up for free</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_service  wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
                            <span>02</span>
                            <h3>Make your profile</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4  wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                        <div class="single_service">
                            <span>03</span>
                            <h3>Enjoy the app</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area_2  -->


    <!-- about  -->
    <div class="features_area ">
        <div class="container">
            <div class="features_main_wrap">
                    <div class="row  align-items-center">
                            <div class="col-xl-5 col-lg-5 col-md-6">
                                <div class="features_info2">
                                    <h3>Features that give
                                        you real feel</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida Risus com odo
                                        viverra maecenas.</p>
                                    <div class="about_btn">
                                        <a class="boxed-btn4" href="#">Download Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 offset-xl-1 offset-lg-1 col-md-6 ">
                                <div class="about_draw wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                                    <img src="img/ilstrator_img/draw.png" alt="">
                                </div>
                            </div>
                    </div>
            </div>
            <div class="features_main_wrap">
                    <div class="row  align-items-center">
                            <div class="col-xl-5 col-lg-5 offset-xl-1 offset-lg-1 col-md-6">
                                <div class="about_image wow fadeInLeft" data-wow-duration=".4s" data-wow-delay=".3s">
                                    <img src="img/ilstrator_img/phone.png" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="features_info">
                                    <h3 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" >Easy setup and <br>
                                            management</h3>
                                    <p class="wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s"  >Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>
                                    <ul>
                                        <li class="wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s" > Apartments frequently or motionless. </li>
                                        <li class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".6s" > Duis aute irure dolor in reprehenderit in voluptate. </li>
                                        <li class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s" > Voluptatem quia voluptas sit aspernatur.</li>
                                    </ul>
            
                                    <div class="about_btn wow fadeInUp" data-wow-duration=".10s" data-wow-delay=".8s" >
                                        <a class="boxed-btn4" href="#">Download Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <!--/ about  -->
    <!-- testmonial_area  -->
    <div class="testmonial_area">
        <div class="container">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <div class="single_testmonial text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                        <div class="section_title">
                            <h3>Review from our <br>
                                    regular users</h3>
                        </div>
                        <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod <br>
                                tempor incididunt labore et dolore magna aliqua <br>
                                quis ipsum suspendisse ultrices.
                        </p>
                        <div class="rating_author">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>
                                    - Robert Smile
                            </span>
                        </div>
                    </div>
                    <div class="single_testmonial text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                        <div class="section_title">
                            <h3>Review from our <br>
                                    regular users</h3>
                        </div>
                        <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod <br>
                                tempor incididunt labore et dolore magna aliqua <br>
                                quis ipsum suspendisse ultrices.
                        </p>
                        <div class="rating_author">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>
                                    - Robert Smile
                            </span>
                        </div>
                    </div>
                    <div class="single_testmonial text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                        <div class="section_title">
                            <h3>Review from our <br>
                                    regular users</h3>
                        </div>
                        <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod <br>
                                tempor incididunt labore et dolore magna aliqua <br>
                                quis ipsum suspendisse ultrices.
                        </p>
                        <div class="rating_author">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>
                                    - Robert Smile
                            </span>
                        </div>
                    </div>
                    <div class="single_testmonial text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                        <div class="section_title">
                            <h3>Review from our <br>
                                    regular users</h3>
                        </div>
                        <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod <br>
                                tempor incididunt labore et dolore magna aliqua <br>
                                quis ipsum suspendisse ultrices.
                        </p>
                        <div class="rating_author">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>
                                    - Robert Smile
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ testmonial_area  -->

    <!-- prising_area  -->
    <div class="prising_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
                        <h3>Unlock full Power</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit sed do eiusmod <br> tempor incididunt.</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters align-items-center">
                <div class="col-xl-4 col-md-4">
                    <div class="single_prising text-center wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".8s">
                        <div class="prising_header d-flex justify-content-between">
                            <h3>Basic</h3>
                            <span>$06</span>
                        </div>
                        <ul>
                            <li>One User</li>
                            <li>1000 ui elements</li>
                            <li>Webmail Support</li>
                            <li>100GB Cloud Storage</li>
                        </ul>
                        <div class="prising_bottom">
                            <a href="#" class="get_now prising_btn">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_prising text-center wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".6s">
                        <div class="prising_header d-flex justify-content-between pink_header">
                            <h3>Team</h3>
                            <span>$06</span>
                        </div>
                        <ul>
                            <li>One User</li>
                            <li>1000 ui elements</li>
                            <li>Webmail Support</li>
                            <li>100GB Cloud Storage</li>
                            <li>Unlimited Users Limit</li>
                        </ul>
                        <div class="prising_bottom">
                            <a href="#" class="get_now prising_btn">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_prising text-center wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".8s">
                        <div class="prising_header d-flex justify-content-between green_header">
                            <h3>Business</h3>
                            <span>$06</span>
                        </div>
                        <ul>
                            <li>One User</li>
                            <li>1000 ui elements</li>
                            <li>Webmail Support</li>
                            <li>100GB Cloud Storage</li>
                        </ul>
                        <div class="prising_bottom">
                            <a href="#" class="get_now prising_btn">Get Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ prising_area  -->

    <!-- productivity_area  -->
    <div class="productivity_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-12 col-lg-6">
                    <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">Get start from now <br>
                            and increase productivity</h3>
                </div>
                <div class="col-xl-5 col-md-12 col-lg-6">
                    <div class="app_download wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                        <a href="#" >
                                <img src="img/ilstrator/app.svg" alt="">
                        </a>
                        <a href="#">
                                <img src="img/ilstrator/play.svg" alt="">
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ productivity_area  -->

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="/">
                                    <img src="{{asset('assets/img/logo.png')}}" alt="">
                                </a>
                            </div>
                            <p>
                                {{$front_config['subtitle']}}
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Menu
                            </h3>
                            <ul>
                                @foreach ($front_menu as $menuslug => $menutitle )
                                    <li>
                                        <a href="{{$menuslug}}">{{$menutitle}}</a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Downloads
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Download from Apple Store

                                    </a>
                                </li>
                                <li><a href="#">
                                        Download from Play Store
                                    </a>
                                </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- JS here -->
    <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/scrollIt.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/gijgo.min.js')}}"></script>

    <!--contact js-->
    <script src="{{asset('assets/js/contact.js')}}"></script>
    <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/mail-script.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>


</body>
</html>