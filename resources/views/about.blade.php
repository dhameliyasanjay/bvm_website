@extends('admin.app')
@section('headercss')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BVM About Us</title>

    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/css/about.css')}}">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;800&family=Josefin+Sans:wght@500&family=Luckiest+Guy&family=Poppins&display=swap"
        rel="stylesheet">

    <!-- font awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- slick slider -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />

    <!-- AOS animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection
@section('content')
    <section>
        <div class="profile-section py-sm-5 py-3">
            <div class="container-fluid">
                <div class="profile-details"></div>
                <div class="banner-bg-img"></div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="ps-sm-5">
                            <h1 class="pb-sm-4 pb-2">About Us
                                <div class="custom-border"></div>
                            </h1>

                            <p class="about-content">"We are a leading software development company that offers
                                top-rated
                                Software Development Services due to our vast experience, team of skilled
                                professionals, key business insights, and a dedicated working process"</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="d-flex justify-content-xl-end justify-content-center">
                            <img src="{{asset('admin/assets/image/banner.png')}}" alt="" class="profile-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="approch-section py-5">
        <div class="container">
            <div class="approch-heading pb-sm-5 pb-2">
                <fieldset>
                    <legend>
                        <h1 class="px-3">Our Approach</h1>
                    </legend>
                </fieldset>
                <p>With the fast paced life we live</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="approch-bgimg">
                        <img src="{{asset('admin/assets/image/settingimg.png')}}" alt="">
                    </div>
                </div>

                <div class="col-lg-6 pt-sm-5 pt-3 text-sm-start text-center">
                    <div class="approch-title">
                        <h1 class="mb-0">Listen To Customer Requirement</h1>
                    </div>
                    <div>
                        <div class="p-3 pt-sm-5 pt-3 mb-0 approch-list pb-sm-5 pb-3">
                            <ul>
                                <li>What’s the need? Is it a new development, enhancements, bug fixing
                                    or a consulting work?
                                </li>
                                <li>
                                    Based on the type of requirement, set the Goals and move forward.
                                </li>
                                <li>
                                    We are powered by caring. Caring is at the heart of our values. It drives us
                                    to deliver the best results, to be the best colleagues, and deliver the
                                    best solutions.
                                </li>
                            </ul>
                        </div>

                        <div class="pt-lg-5 pt-3 d-xl-flex justify-content-between">
                            <button class="btn approch-btn p-0 pe-5 mb-3">
                                <i class="fa-brands fa-linkedin-in me-4"></i>
                                linkedin
                            </button>
                            <button class="btn approch-btn p-0 pe-5 mb-3">
                                <i class="fa-brands fa-facebook-f me-4"></i>
                                Facebook
                            </button>
                            <button class="btn approch-btn p-0 pe-5 mb-3">
                                <i class="fa-brands fa-instagram me-4"></i>
                                Instagram
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--About services -->

    <div class="service-section">
        <div class="container">
            <div class="service-heading">
                <h1>We Are Leaders, Thinkers And Makers
                    At Your Service.</h1>
            </div>
            <div class="row bg-white pt-5 px-4 pb-4 custom-box-shadow">
                <div class="col-sm-6">
                    <div class="card border-0 custom-scard">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center">
                                <div class="service-circle me-sm-4">
                                    <img src="{{asset('admin/assets/image/s1.png')}}" alt="">
                                </div>
                                <div class="service-content">
                                    <h5>Client-centric</h5>
                                    <p>We care about our clients, about their success,
                                        and about the partnership we aim to build.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center">
                                <div class="service-circle me-sm-4">
                                    <img src="{{asset('admin/assets/image/s2.png')}}" alt="">
                                </div>
                                <div class="service-content">
                                    <h5>Agile</h5>
                                    <p>We are built to do, correct, explore, innovate,
                                        breakthrough and repeat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-body custom-scard">
                            <div class="d-lg-flex align-items-center">
                                <div class="service-circle me-sm-4">
                                    <img src="{{asset('admin/assets/image/s3.png')}}" alt="">
                                </div>
                                <div class="service-content">
                                    <h5>Responsible</h5>
                                    <p>We own up to our successes and our mistakes.
                                        We are not a process, we are not anonymous.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center">
                                <div class="service-circle me-sm-4">
                                    <img src="{{asset('admin/assets/image/s4.png')}}" alt="">
                                </div>
                                <div class="service-content">
                                    <h5>Hierarchical</h5>
                                    <p>We empower our colleagues to be brave,
                                        creative, entrepreneurial, agile, and responsible.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- About Gallery -->

    <div class="gallery-section py-5">
        <div class="gallery-heading pb-5">
            <fieldset>
                <legend>
                    <h1 class="px-3">Our Gallery</h1>
                </legend>
            </fieldset>
            <p>We are a Nation of BVM</p>
        </div>

        <div class="container-fluid px-0">
            <div class="gallery-grid mb-3">
                <div class="row d-flex">
                    <div class="about-slider mb-0 ">
                        <div class="col-lg-4 mx-sm-2">
                            <img src="{{asset('admin/assets/image/it1.jpg')}}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-lg-4 mx-sm-2">
                            <img src="{{asset('admin/assets/image/it2.jpg')}}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-lg-4 mx-sm-2">
                            <img src="{{asset('admin/assets/image/it6.jpg')}}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-lg-4 mx-sm-2">
                            <img src="{{asset('admin/assets/image/it4.jpg')}}" alt="" width="100%" height="100%">
                        </div>
                        <div class="col-lg-4 mx-sm-2">
                            <img src="{{asset('admin/assets/image/it7.jpg')}}" alt="" width="100%" height="100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-content py-5">
                <div class="mb-5">
                    <h1 class="text-center">Company is shaping for Tomorrow</h1>
                </div>
                <div class="d-lg-flex justify-content-evenly">
                    <div class="bg-circle">
                        <div class="add-icon1">
                            <img src="{{asset('admin/assets/image/b.png')}}" alt="">
                            <p class="title1">BELIEVE</p>
                        </div>
                    </div>

                    <div class="bg-circle">
                        <div class="add-icon2">
                            <img src="{{asset('admin/assets/image/v.png')}}" alt="">
                            <p class="title2">VALUABLE</p>
                        </div>
                    </div>

                    <div class="bg-circle">
                        <div>
                            <img src="{{asset('admin/assets/image/v.png')}}" alt="">
                            <p class="title3">MASTERPICE</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-footer px-5 pt-5 pb-3">
                <div class="row">
                    <div class="col-lg-4">
                        <p>We are not trying to emulate the companies of yesterday,
                            we are the company of tomorrow. We are the future,
                            logistically apart, together always.</p>
                    </div>
                    <div class="col-lg-8 d-lg-flex justify-content-center align-items-center">
                        <button class="btn gallery-btn me-5 mb-lg-0 mb-3">
                            <a href="our-services.blade.php" class="custom-text px-sm-5 mb-lg-0 mb-3">View All
                                Servies</a>
                        </button>

                        <button class="btn gallery-btn me-5">
                            <a href="contact.blade.php" class="custom-text px-sm-5 mb-lg-0 mb-3">View All Branches</a>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div>
        </div>
    </div>

@endsection
@section('footerjs')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.about-slider').slick({
                dots: true,
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                autoplay: true,
                speed: 2000,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true,
                            speed: 2000,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            speed: 2000,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            speed: 2000,
                        }
                    }
                ]
            });
        });
    </script>
@endsection
