<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Mar 2019 16:05:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$meta->title}} | @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="/user/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/user/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/user/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/user/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="/user/css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="/user/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/user/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="/user/css/meanmenu.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="/user/vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="/user/vendor/slider/css/preview.css" type="text/css" media="screen" />
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="/user/css/jquery.datetimepicker.css">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="/user/css/magnific-popup.css">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="/user/css/hover-min.css">
    <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="/user/css/reImageGrid.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/user/style.css">
    <!-- Modernizr Js -->
    <script src="/user/js/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Add your site or application content here -->
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<!-- Main Body Area Start Here -->
<div id="wrapper">
    <!-- Header Area Start Here -->
    <header>
        <div id="header1" class="header1-area">
            <div class="main-menu-area bg-primary" id="sticker">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-3">
                            <div class="logo-area">
                                <a href="{{route('home')}}"><img class="img-responsive" src="/uploads/{{$meta->logo}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-9">
                            <nav id="desktop-nav">
                                <ul>
                                    <li class="active"><a href="#">About JUAA</a>
                                        <ul>
                                            <li><a href="{{route('single.page', 'about-juaa-alumni-association')}}">About</a></li>
                                            <li><a href="{{route('single.page', 'terms-and-conditions')}}">Terms and Conditions</a></li>
                                            <li><a href="{{route('single.page', 'service')}}">Services</a></li>
                                            <li><a href="{{route('single.page', 'survey-on-job-market')}}">Survey on Job Market</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Members</a>
                                        <ul>
                                            <li><a href="{{route('single.page', 'types-of-membership')}}">Types of Membership</a></li>
                                            <li><a href="{{route('single.page', 'registration-fee')}}">Registration Fee</a></li>
                                            <li><a href="{{route('single.page', 'rules-inclusions-of-member')}}">Rules Inclusions of Member</a></li>
                                            <li><a href="{{route('single.page', 'members-rights-and-benifits')}}">Rights and Benifits</a></li>
                                            <li><a href="{{route('single.page', 'expulsion')}}">Expulsion</a></li>
                                            <li><a href="{{route('single.page', 'reinstatement-of-membership')}}">Reinstatement</a></li>
                                            <li><a href="{{route('single.page', 'rules-of-inclusion-of-member')}}">Inclusion Of a Member</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">NetWork Directory</a>
                                        <ul>
                                            <li><a href="{{route('single.page', 'job-tracking-career')}}">Job Network Directory</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Gallery</a>
                                        <ul>
                                            <li><a href="{{route('gallery.photo')}}">Photo Gallery</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-2 col-md-2 hidden-sm">
                            <div class="apply-btn-area">
                                <a href="{{route('member.create')}}" class="apply-now-btn">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area Start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li class="active"><a href="#">About JUAA</a>
                                        <ul>
                                            <li><a href="{{route('single.page', 'about-juaa-alumni-association')}}">About</a></li>
                                            <li><a href="{{route('single.page', 'terms-and-conditions')}}">Terms and Conditions</a></li>
                                            <li><a href="{{route('single.page', 'service')}}">Services</a></li>
                                            <li><a href="{{route('single.page', 'survey-on-job-market')}}">Survey on Job Market</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Members</a>
                                        <ul>
                                            <li><a href="{{route('single.page', 'types-of-membership')}}">Types of Membership</a></li>
                                            <li><a href="{{route('single.page', 'registration-fee')}}">Registration Fee</a></li>
                                            <li><a href="{{route('single.page', 'rules-inclusions-of-member')}}">Rules Inclusions of Member</a></li>
                                            <li><a href="{{route('single.page', 'members-rights-and-benifits')}}">Rights and Benifits</a></li>
                                            <li><a href="{{route('single.page', 'expulsion')}}">Expulsion</a></li>
                                            <li><a href="{{route('single.page', 'reinstatement-of-membership')}}">Reinstatement</a></li>
                                            <li><a href="{{route('single.page', 'rules-of-inclusion-of-member')}}">Inclusion Of a Member</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">NetWork Directory</a>
                                        <ul>
                                            <li><a href="{{route('single.page', 'job-tracking-career')}}">Job Network Directory</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Gallery</a>
                                        <ul>
                                            <li><a href="{{route('gallery.photo')}}">Photo Gallery</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area End -->
    </header>
    <!-- Header Area End Here -->
    @section('content')

    @show
    <!-- Footer Area Start Here -->
    <footer>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <p>&copy; 2019 JU Alumni Association All Rights Reserved. </p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End Here -->
</div>
<!-- Main Body Area End Here -->
<!-- jquery-->
<script src="/user/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<!-- Plugins js -->
<script src="/user/js/plugins.js" type="text/javascript"></script>
<!-- Bootstrap js -->
<script src="/user/js/bootstrap.min.js" type="text/javascript"></script>
<!-- WOW JS -->
<script src="/user/js/wow.min.js"></script>
<!-- Nivo slider js -->
<script src="/user/vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="/user/vendor/slider/home.js" type="text/javascript"></script>
<!-- Owl Cauosel JS -->
<script src="/user/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
<!-- Meanmenu Js -->
<script src="/user/js/jquery.meanmenu.min.js" type="text/javascript"></script>
<!-- Srollup js -->
<script src="/user/js/jquery.scrollUp.min.js" type="text/javascript"></script>
<!-- jquery.counterup js -->
<script src="/user/js/jquery.counterup.min.js"></script>
<script src="/user/js/waypoints.min.js"></script>
<!-- Countdown js -->
<script src="/user/js/jquery.countdown.min.js" type="text/javascript"></script>
<!-- Isotope js -->
<script src="/user/js/isotope.pkgd.min.js" type="text/javascript"></script>
<!-- Magic Popup js -->
<script src="/user/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<!-- Gridrotator js -->
<script src="/user/js/jquery.gridrotator.js" type="text/javascript"></script>
<!-- Custom Js -->
<script src="/user/js/main.js" type="text/javascript"></script>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Mar 2019 16:06:20 GMT -->
</html>
