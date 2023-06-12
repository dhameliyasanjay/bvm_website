<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title"
          content=" We are a Worldwide Leader in IT Administration, Counseling, Innovation, and Advanced Arrangements with a Huge Organize of Advancement & Conveyance Centers. - BVM Infotech - Every Minute Matters.">

    <meta name="description"
          content="We are a computer program improvement company from Surat, Gujarat. that centers on giving exceedingly subjective, convenient conveyed, and cost-effective program items. Our Key clients are faithful to us since we volume up their business.">

    <meta name="keywords"
          content="HTML, CSS, JAVASCRIPT, JS, PHP, .NET, WEB DEVELOPMENT, APP DEVELOPMENT, IOS DEVELOPMENT, GAME DEVELOPEMENT, IT SOLUTIONS, IT SERVICES COMPANY, IT COMPANIES, ANDROID APP DEVELOPMENT, MOBILE APP DEVELOPMENT, ANDROID DEVELOPMENT, APP DEVELOPMENT COMPANY ANDROID GAME DEVELOPMENT, WEB DEVELOPMENT, WEB DESIGN COMPANY, WEB DEVELOPMENT COMPANY, MOBLIE GAME DEVELOPMENT, APP DEVELOPMENT COMPANY IN SURAT">

    <meta name="author" content="BVM Infotech - Every Moment Matters">

    <meta name="robots" content="index, follow">

    <meta name="og_site_name" property="og:site_name" content="bvminfotech">

    <meta name="og_title" property="og:title" content="BVM Infotech - Every Moment Matters">

    <meta property="og:description"
          content=" BVM infotech is the main Internet site Growth firm in Surat, India. We're a tool Advancement firm and get-ready IT advance provider that focuses on offering highly qualitative, timely, and given and cost-effective client solutions. Our Key clients are sincere to us because we have the volume up their commerce and also has got additionally spread it to earth globally. We are at present working on lots of technologies like to react js, node js, mongo Db, Angular Js, Android Development, iOS Development, PHP, ASP, and Game Development. Our major motto is to satisfy our clients.">

    <meta property="og:url" content="https://bvminfotech.com/">

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="BVM infotech - Every Moment Matters">

    <meta name="twitter:description"
          content=" BVM infotech is the main Internet site Growth firm in Surat, India. We're a tool Advancement firm and get-ready IT advance provider that focuses on offering highly qualitative, timely, and given and cost-effective client solutions. Our Key clients are sincere to us because we have the volume up their commerce and also has got additionally spread it to earth globally. We are at present working on lots of technologies like to react js, node js, mongo Db, Angular Js, Android Development, iOS Development, PHP, ASP, and Game Development. Our major motto is to satisfy our clients.">

    <meta name="twitter:image" content="/favicon.ico">
    <link rel="canonical" href="#">

    <meta name="linkedin:card" content="summary_large_image">

    <meta name="linkedin:title" content="BVM infotech - Every Moment Matters">

    <meta name="linkedin:description"
          content=" BVM infotech is the main Internet site Growth firm in Surat, India. We're a tool Advancement firm and get-ready IT advance provider that focuses on offering highly qualitative, timely, and given and cost-effective client solutions. Our Key clients are sincere to us because we have the volume up their commerce and also has got additionally spread it to earth globally. We are at present working on lots of technologies like to react js, node js, mongo Db, Angular Js, Android Development, iOS Development, PHP, ASP, and Game Development. Our major motto is to satisfy our clients.">

    <meta name="linkedin:image" content="/favicon.ico">
    <link rel="canonical" href="#">

    <meta name="facebook:card" content="summary_large_image">

    <meta name="facebook:title" content="BVM infotech - Every Moment Matters">

    <meta name="facebook:description"
          content=" BVM infotech is the main Internet site Growth firm in Surat, India. We're a tool Advancement firm and get-ready IT advance provider that focuses on offering highly qualitative, timely, and given and cost-effective client solutions. Our Key clients are sincere to us because we have the volume up their commerce and also has got additionally spread it to earth globally. We are at present working on lots of technologies like to react js, node js, mongo Db, Angular Js, Android Development, iOS Development, PHP, ASP, and Game Development. Our major motto is to satisfy our clients.">

    <meta name="facebook:image" content="/favicon.ico">
    <link rel="canonical" href="#">

    <meta name="instagram:card" content="summary_large_image">

    <meta name="instagram:title" content="BVM infotech - Every Moment Matters">

    <meta name="instagram:description"
          content=" BVM infotech is the main Internet site Growth firm in Surat, India. We're a tool Advancement firm and get-ready IT advance provider that focuses on offering highly qualitative, timely, and given and cost-effective client solutions. Our Key clients are sincere to us because we have the volume up their commerce and also has got additionally spread it to earth globally. We are at present working on lots of technologies like to react js, node js, mongo Db, Angular Js, Android Development, iOS Development, PHP, ASP, and Game Development. Our major motto is to satisfy our clients.">

    <meta name="instagram:image" content="/favicon.ico">
    <link rel="canonical" href="#">

    <meta name="theme-color" content="#EF6DD7">
    @yield('headercss')
</head>
<body>
<div class="holder">
    <div class="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- navbar -->
<div class="main-body">
    <header>
        <div class="main-section">
            <nav class="navbar navbar-expand-lg navbar-light pt-sm-4 custom-navber">
                <div class="container-fluid ps-0">
                    <div class="nav-logo" data-aos="fade-right" data-aos-easing="linear">
                        <img src="{{asset('admin/assets/image/bvmlogo.png')}}" alt="#">
                        <img src="{{asset('admin/assets/image/logotitle.png')}}" alt="">
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-list custom-navlist">
                            <li class="nav-item {{ Request::path() ==  'home' ? 'active' : ''  }}">
                                <a class="nav-link mx-lg-3" aria-current="page" href="{{url('home')}}">Home</a>
                            </li>
                            <li class="nav-item {{ Request::path() ==  'about' ? 'active' : ''  }} ">
                                <a class="nav-link mx-lg-3" href="{{url('about')}}">About Us</a>
                            </li>
                            <li class="nav-item {{ Request::path() ==  'our-services' ? 'active' : ''  }}">
                                <a class="nav-link mx-lg-3" href="{{url('our-services')}}">Services</a>
                            </li>
                            <li class="nav-item {{ Request::path() ==  'event' ? 'active' : ''  }}">
                                <a class="nav-link mx-lg-3" href="{{url('event')}}">Events</a>
                            </li>
                            <li class="nav-item {{ Request::path() ==  'career' ? 'active' : ''  }}">
                                <a class="nav-link mx-lg-3" href="{{url('career')}}">Careers</a>
                            </li>
                            <li class="nav-item {{ Request::path() ==  'blog' ? 'active' : ''  }}">
                                <a class="nav-link mx-lg-3" href="{{url('blog')}}">Blogs</a>
                            </li>
                            <li class="nav-item {{ Request::path() ==  'contact' ? 'active' : ''  }}">
                                <a class="nav-link mx-lg-3" href="{{url('contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>



@yield('content')
</div>

<!-- footer -->

<div class="footer-section pt-5 pb-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2 footer-card">
                <div class="section-1">
                    <div class="text-center mb-4">
                        <img src="{{asset('admin/assets/image/bvmlogo.png')}}" alt="">
                        <div>
                            <img src="{{asset('admin/assets/image/logotitle.png')}}" alt="">
                        </div>
                    </div>
                    <p class="text-center fsmall-text">BVM-Infotech is a leading Website
                        Development company in Surat,India.
                        We are providing Website
                        Design & Development Services</p>
                </div>
            </div>

            <div class="col-lg-2 footer-card">
                <div class="section-1">
                    <div class="mb-2">
                        <h5 class="footer-heading mb-4">Quick Tie-Up</h5>
                    </div>
                    <ul class="ps-0 list">
                        <li><a href="{{URL::to('home')}}">Home</a></li>
                        <li>About us</li>
                        <li>Services</li>
                        <li>Infrastructure</li>
                        <li>Infrastructure</li>
                        <li>Blogs</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 footer-card">
                <div class="section-1">
                    <div class="mb-2">
                        <h5 class="footer-heading mb-4">Help</h5>
                    </div>
                    <ul class="ps-0 list">
                        <li>FAQ</li>
                        <li>Terms & Conditions</li>
                        <li>Reporting</li>
                        <li>Documentation</li>
                        <li>Connect us</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 footer-card">
                <div class="section-1">
                    <div class="mb-2">
                        <h5 class="footer-heading mb-4">Contact us</h5>
                    </div>
                    <div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fa-solid fa-location-dot me-2" style="font-size: 17px;"></i>
                            <p class="fsmall-text mb-0">1049-1051, Silver Business Point, Near VIP Circle,Uttran,
                                Surat, Gujarat – 394105
                            </p>
                        </div>

                        <div class="d-flex align-items-center mb-2">
                            <i class="fa-solid fa-location-dot me-2" style="font-size: 17px;"></i>
                            <p class="fsmall-text mb-0">
                                Block-B, A-307, ICC Building, Majura Gate, Surat, Gujarat - 395001
                            </p>
                        </div>

                        <div class="d-flex align-items-center mb-2">
                            <i class="fa-solid fa-location-dot me-2" style="font-size: 17px;"></i>
                            <p class="fsmall-text mb-0">
                                618, Laxmi Enclave - 2 , opposite Gajera School, Katargam, Surat, Gujarat - 395004
                            </p>
                        </div>

                        <div class="d-flex align-items-center mb-2">
                            <i class="fa-solid fa-location-dot me-2" style="font-size: 17px;"></i>
                            <p class="fsmall-text mb-0">
                                701 – R.K. Empire, 150 Feet Ring Road, Near Mavdi Circle, Rajkot, Gujarat - 360004
                            </p>
                        </div>
                    </div>
                </div>

                <div class="d-flex pt-lg-5 my-3">
                    <i class="fa-brands fa-linkedin-in me-4 footer-icon" style="color: #AC7DFB;"></i>
                    <i class="fa-brands fa-facebook-f me-4 footer-icon" style="color: #AC7DFB;"></i>
                    <i class="fa-brands fa-instagram me-4 footer-icon" style="color: #AC7DFB;"></i>
                </div>
            </div>
            <div class="col-lg-3 footer-card">
                <div class="section-1">
                    <div class="mb-2">
                        <h5 class="footer-heading mb-4">Company Timing</h5>
                    </div>
                    <div>
                        <div class="d-flex mb-2">
                            <i class="fa-solid fa-clock me-2 mt-2" style="font-size: 17px;"></i>
                            <div>
                                <p class="fsmall-text mb-0 fw-bold">Monday-Saturday</p>
                                <p class="fsmall-text mb-0">09:00 AM - 06:00 PM</p>
                                <p class="fsmall-text mb-0 fw-bold d-flex">Alternet Saturday :<span
                                        style="color: white; margin-left:5px;"> Closed</span></p>
                                <p class="fsmall-text mb-0">(1st, 3rd & 5th Saturday)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bg"></div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- slick slider -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script type="text/javascript" src="{{asset('admin/assets/js/page.js')}}"></script>
@yield('footerjs')


{{--<script type="text/javascript">--}}
{{--    $(document).ready(function () {--}}
{{--        $('.about-slider').slick({--}}
{{--            dots: true,--}}
{{--            infinite: true,--}}
{{--            slidesToShow: 4,--}}
{{--            slidesToScroll: 4,--}}
{{--            autoplay: true,--}}
{{--            speed: 2000,--}}
{{--            arrows: false,--}}
{{--            responsive: [--}}
{{--                {--}}
{{--                    breakpoint: 1024,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 3,--}}
{{--                        slidesToScroll: 3,--}}
{{--                        infinite: true,--}}
{{--                        dots: true,--}}
{{--                        speed: 2000,--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    breakpoint: 600,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 2,--}}
{{--                        slidesToScroll: 2,--}}
{{--                        speed: 2000,--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    breakpoint: 480,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                        slidesToScroll: 1,--}}
{{--                        speed: 2000,--}}
{{--                    }--}}
{{--                }--}}
{{--            ]--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
{{--    $(document).ready(function () {--}}
{{--        $('.slick-card').slick({--}}
{{--            dots: true,--}}
{{--            infinite: true,--}}
{{--            slidesToShow: 3,--}}
{{--            slidesToScroll: 3,--}}
{{--            autoplay: true,--}}
{{--            speed: 2000,--}}
{{--            responsive: [--}}
{{--                {--}}
{{--                    breakpoint: 1500,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                        slidesToScroll: 1,--}}
{{--                        infinite: true,--}}
{{--                        dots: true,--}}
{{--                        arrows: false,--}}
{{--                    }--}}
{{--                }--}}
{{--            ]--}}
{{--        });--}}
{{--    });--}}

{{--    $(document).ready(function () {--}}
{{--        $('.our-slick').slick({--}}
{{--            dots: false,--}}
{{--            infinite: true,--}}
{{--            slidesToShow: 3,--}}
{{--            slidesToScroll: 3,--}}
{{--            centerPadding: '60px',--}}
{{--            autoplay: true,--}}
{{--            arrows: true,--}}
{{--            speed: 2000,--}}
{{--            responsive: [--}}
{{--                {--}}
{{--                    breakpoint: 1300,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                        slidesToScroll: 1,--}}
{{--                        infinite: true,--}}
{{--                        dots: false,--}}
{{--                        arrows: false,--}}
{{--                    }--}}
{{--                }--}}
{{--            ]--}}
{{--        });--}}
{{--    });--}}

{{--    $(document).ready(function () {--}}
{{--        $('.client-slick').slick({--}}
{{--            dots: false,--}}
{{--            infinite: true,--}}
{{--            slidesToShow: 4,--}}
{{--            slidesToScroll: 4,--}}
{{--            autoplay: true,--}}
{{--            arrows: false,--}}
{{--            speed: 2000,--}}
{{--            responsive: [--}}
{{--                {--}}
{{--                    breakpoint: 1024,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 3,--}}
{{--                        slidesToScroll: 3,--}}
{{--                        infinite: true,--}}
{{--                        dots: false,--}}
{{--                        arrows: false,--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    breakpoint: 768,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                        slidesToScroll: 1,--}}
{{--                        arrows: false,--}}
{{--                        dots: false,--}}
{{--                    }--}}
{{--                },--}}
{{--            ]--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $('.service-slide').slick({--}}
{{--            dots: false,--}}
{{--            infinite: true,--}}
{{--            slidesToShow: 4,--}}
{{--            slidesToScroll: 4,--}}
{{--            autoplay: true,--}}
{{--            speed: 2000,--}}
{{--            arrows: false,--}}
{{--            responsive: [--}}
{{--                {--}}
{{--                    breakpoint: 1024,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 3,--}}
{{--                        slidesToScroll: 3,--}}
{{--                        infinite: true,--}}
{{--                        dots: true,--}}
{{--                        arrows: false,--}}
{{--                        speed: 2000,--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    breakpoint: 992,--}}
{{--                    settings: {--}}
{{--                        slidesToShow: 1,--}}
{{--                        slidesToScroll: 1,--}}
{{--                        arrows: false,--}}
{{--                        speed: 2000,--}}
{{--                    }--}}
{{--                },--}}
{{--            ]--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--<script>--}}
{{--    var map;--}}
{{--    function initialize() {--}}
{{--        map = new google.maps.Map(document.getElementById('map-canvas'), {--}}
{{--            center: new google.maps.LatLng(48.1293954, 12.556663),//Setting Initial Position--}}
{{--            zoom: 10--}}
{{--        });--}}
{{--    }--}}

{{--    function newLocation(newLat, newLng) {--}}
{{--        map.setCenter({--}}
{{--            lat: newLat,--}}
{{--            lng: newLng,--}}
{{--            marker: null--}}
{{--        });--}}
{{--        map = new google.maps.Map(document.getElementById("map-canvas"), {--}}
{{--            center: { lat: 21.23371, lng: 72.86343 },--}}
{{--            zoom: 18,--}}
{{--        });--}}
{{--    }--}}


{{--    google.maps.event.addDomListener(window, 'load', initialize);--}}

{{--    $(document).ready(function () {--}}
{{--        $("#1").on('click', function () {--}}
{{--            newLocation(21.23371, 72.86343);--}}
{{--        });--}}

{{--        $("#2").on('click', function () {--}}
{{--            newLocation(21.180935, 72.818242);--}}
{{--        });--}}

{{--        $("#3").on('click', function () {--}}
{{--            newLocation(21.230713, 72.82917);--}}
{{--        });--}}

{{--        $("#4").on('click', function () {--}}
{{--            newLocation(22.254381, 70.786493);--}}
{{--        });--}}
{{--    });--}}



{{--</script>--}}



<!-- AOS animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>


</body>

</html>
