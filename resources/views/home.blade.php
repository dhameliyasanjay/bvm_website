@extends('admin.app')
@section('headercss')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


    <!-- font awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- slick slider -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />

    <!-- AOS animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>BVM Website Home</title>
@endsection
@section('content')



    <section>
        <div class="profile-section py-sm-5 py-3">
            <div class="container-fluid">
                <div class="profile-details"></div>
                <div class="banner-bg-img"></div>

                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="ps-lg-5">
                                        <h1 class="pb-sm-4 pb-2">Digital Experience
                                            <div class="custom-border"></div>
                                        </h1>

                                        <p>Transforming today’s workforce for
                                            tomorrowand beyond</p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-flex justify-content-xl-end justify-content-center">
                                        <img src="{{asset('admin/assets/image/company.gif')}}" alt="" class="profile-img">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="1000">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="ps-lg-5">
                                        <h1 class="pb-sm-4 pb-2">Intelligent Solutions
                                            <div class="custom-border"></div>
                                        </h1>

                                        <p>Providing Scalable Solutions Leveraging legacy and
                                            Next Gen Technologies</p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-xl-flex justify-content-xl-end justify-content-center">
                                        <img src="{{asset('admin/assets/image/computer.gif')}}" alt="" class="profile-img">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="ps-lg-5">
                                        <h1 class="pb-sm-4 pb-2">Digital Solutions
                                            <div class="custom-border"></div>
                                        </h1>

                                        <p>Reimagine Your Business With hands On Partner to Support
                                            You Define, Design and Deliver Solutions.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="d-xl-flex justify-content-xl-end justify-content-center">
                                        <img src="{{asset('admin/assets/image/banner3.png')}}" alt="" class="profile-img">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our section -->
    <section class="our-section py-sm-5 pt-5">
        <div class="container">
            <div class="our-heading pb-sm-5 pt-2">
                <fieldset>
                    <legend>
                        <h1 class="px-3">Our
                            Values</h1>
                    </legend>
                </fieldset>
                <p>In this article we explore
                    company core values</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear">
                    <div class="card mb-4">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-center mb-4">
                                <img src="{{asset('admin/assets/image/daimond.png')}}" alt="">
                                <div>
                                    <h5 class="card-title mb-0 ms-4">Be an Ambassador</h5>
                                </div>
                            </div>
                            <p class="card-text">We make sure our team feels appreciated and valued. We take the
                                time to
                                stop and acknowledge where we came from so that we don’t miss how impressive...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear">
                    <div class="card mb-4">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-center mb-4">
                                <img src="{{asset('admin/assets/image/p1.png')}}" alt="">
                                <div>
                                    <h5 class="card-title mb-0 ms-4">Enjoy the journey</h5>
                                </div>
                            </div>
                            <p class="card-text">We make sure our team feels appreciated and valued. We take the
                                time to
                                stop and acknowledge where we came from so that we don’t miss how impressive...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear">
                    <div class="card mb-4">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-center mb-4">
                                <img src="{{asset('admin/assets/image/p2.png')}}" alt="">
                                <div>
                                    <h5 class="card-title mb-0 ms-4">Get it Done</h5>
                                </div>
                            </div>
                            <p class="card-text">We make sure our team feels appreciated and valued. We take the
                                time to
                                stop and acknowledge where we came from so that we don’t miss how impressive...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear">
                    <div class="card mb-4">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-center mb-4">
                                <img src="{{asset('admin/assets/image/p3.png')}}" alt="">
                                <div>
                                    <h5 class="card-title mb-0 ms-4">Evolve and Adapt</h5>
                                </div>
                            </div>
                            <p class="card-text">We make sure our team feels appreciated and valued. We take the
                                time to
                                stop and acknowledge where we came from so that we don’t miss how impressive...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear">
                    <div class="card mb-4">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-center mb-4">
                                <img src="{{asset('admin/assets/image/p4.png')}}" alt="">
                                <div>
                                    <h5 class="card-title mb-0 ms-4">Do the right thing</h5>
                                </div>
                            </div>
                            <p class="card-text">We make sure our team feels appreciated and valued. We take the
                                time to
                                stop and acknowledge where we came from so that we don’t miss how impressive...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-down" data-aos-easing="linear">
                    <div class="card mb-4">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-center mb-4">
                                <img src="{{asset('admin/assets/image/p5.png')}}" alt="">
                                <div>
                                    <h5 class="card-title mb-0 ms-4">Making Better</h5>
                                </div>
                            </div>
                            <p class="card-text">We make sure our team feels appreciated and valued. We take the
                                time to
                                stop and acknowledge where we came from so that we don’t miss how impressive...</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- mobile development -->

    <div class="mobile-section" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="row py-sm-4">
                <div class="col-xxl-6">
                    <div class="mobiledev-bgimg pb-5">
                        <img src="{{asset('admin/assets/image/mobiledev.png')}}" alt="" class="mobile-img pb-5 w-100">
                    </div>
                </div>
                <div class="col-xxl-6 pt-sm-5 pt-3 text-sm-start text-center">
                    <div class="mobile-heading">
                        <h1 class="mb-0">Mobile App Development</h1>
                    </div>
                    <p class="p-3 pt-sm-5 pt-3 mb-0 mobile-text">"Mobile
                        application development is the process of
                        creating
                        applications that run on a mobile device, and a typical mobile application
                        utilizes a network connection to work with remote computing resources
                        Hence, the mobile development process involves creating installable
                        software bundles (code, binaries, assets, etc.)"</p>

                    <button class="btn custome-btn">
                        <a href="{{url('mobile-develop')}}" class="custom-text px-5 mt-lg-5 p-2">Read More</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="largre-bg-img"></div>
    </div>


    <!-- Web-Development -->

    <div class="web-section position-relative" data-aos="fade-up" data-aos-duration="2500">
        <div class="container">
            <div class="row py-4">
                <div class="col-xxl-6 pt-sm-5 pb-3 text-sm-start text-center">
                    <div class="web-heading">
                        <h1 class="mb-0">Web Development</h1>
                    </div>
                    <p class="p-3 pt-sm-5 pt-3 mb-0 web-text">"Web
                        development refers in general to the tasks associated
                        with
                        developing websites for hosting via intranet or internet. The
                        web development process includes web design, web content
                        development, client-side/server-side scripting and network
                        security configuration, among other tasks."</p>
                    <button class="btn custome-btn">
                        <a href="{{url('web-develop')}}" class="custom-text px-5 mt-lg-5 p-2">Read More</a>
                    </button>
                </div>
                <div class="col-xxl-6">
                    <div class="web-bg-img">
                        <img src="{{asset('admin/assets/image/webdev.png')}}" alt="" class="web-img w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Testimonial -->

    <div class="testimonial-section pt-5" data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            <div class="test-heading pb-sm-5 pb-3 text-center">
                <fieldset>
                    <legend>
                        <h1 class="px-3">Testimonials</h1>
                    </legend>
                </fieldset>
                <p>Some Expression of our Clients</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('admin/assets/image/gridimg.png')}}" alt="" class="test-img">
                </div>
                <div class="col-lg-6 pt-5 text-sm-start text-center">
                    <div class="test-title">
                        <h1 class="mb-0">4+ Year Experiance</h1>
                    </div>
                    <p class="p-3 py-sm-5 py-3 test-text">"BVM-Infotech is
                        a leading Website Development company in
                        Surat,India.
                        We are providing Website Design & Development Services, ERP Solution,
                        HRM Solution, CRM Solution, Desktop Application Development, Web
                        Portal Development, E-commerce Website Development and Mobile
                        Application Development."</p>

                    <div
                        class="d-sm-flex justify-content-between text-sm-start text-center align-items-center test-experiance py-sm-4">
                        <div class="col-md-4">
                            <span id="count1" class="display-4"></span><span>+</span>
                            <p>Years of Experiance</p>
                        </div>
                        <div class="col-md-4">
                            <span id="count2" class="display-4"></span><span>+</span>
                            <p>Happy Employee</p>
                        </div>
                        <div class="col-md-4">
                            <span id="count3" class="display-4"></span><span>+</span>
                            <p>Successful Projects</p>
                        </div>
                    </div>

                    <button class="btn custome-btn">
                        <a href="#" class="custom-text px-5 mt-lg-5 p-2">Read More</a>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Working process -->

    <div class="working-section py-sm-5 pt-5" data-aos="fade-up">
        <div class="container position-relative">
            <div class="working-heading pb-sm-5 text-center">
                <fieldset>
                    <legend>
                        <h1 class="px-3">Working Process</h1>
                    </legend>
                </fieldset>
                <p class="mb-sm-5 mb-2">4 Steps Are Follows We Works</p>
            </div>

            <div class="text-center pt-5 working-content">
                <div class="working-img">
                    <img src="{{asset('admin/assets/image/white-border.png')}}" alt="">
                </div>

                <div class="working-box">
                    <div class="box-1">
                        <span class="n1">01</span>
                        <span><img src="{{asset('admin/assets/image/n1.png')}}" alt=""></span>
                    </div>

                    <div class="d-xxl-flex">
                        <div class="text1">
                            <h3>CONCEPT</h3>
                        </div>
                        <div class="text2">
                            <h3>COMMUNICATION</h3>
                        </div>
                        <div class="text3">
                            <h3>BUGET</h3>
                        </div>
                        <div class="text4">
                            <h3>DEVELOPMENT</h3>
                        </div>
                        <div class="text5">
                            <h3>RESULTS</h3>
                        </div>
                    </div>

                </div>
                <div class="working-box2">
                    <div class="box-2">
                        <span class="n2">02</span>
                        <span><img src="{{asset('admin/assets/image/n2.png')}}" alt=""></span>
                    </div>
                </div>

                <div class="working-box3">
                    <div class="box-3">
                        <span class="n3">03</span>
                        <span><img src="{{asset('admin/assets/image/n3.png')}}" alt=""></span>
                    </div>
                </div>

                <div class="working-box4">
                    <div class="box-4">
                        <span class="n4">04</span>
                        <span><img src="{{asset('admin/assets/image/n4.png')}}" alt=""></span>
                    </div>
                </div>

                <div class="working-box5">
                    <div class="box-5">
                        <span class="n5">05</span>
                        <span><img src="{{asset('admin/assets/image/n5.png')}}" alt=""></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- People Review -->

    <div class="people-review">
        <div class="container-fluid p-0">
            <div class="people-img">
                <img src="{{asset('admin/assets/image/light-bg.png')}}" alt="" width="100%">
            </div>
            <div class="people-content">
                <div class="people-heading pt-sm-5 pt-3">
                    <h1>What People Are Saying</h1>
                </div>
                <div class="container">
                    <div class="people-card">
                        <div class="row d-flex justify-content-center ">
                            <div class="slick-card">
                                <div class="col-lg-3">
                                    <div class="card custom-card h-100 border-0 mx-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-sm-4">
                                                <img src="{{asset('admin/assets/image/girl.png')}}" alt="" class="rounded-img">
                                                <div class="ps-4 text-white">
                                                    <h5 class="mb-0">Frederik Roy Rasmussen</h5>
                                                    <p class="mb-0">CEO and President,InnRoad</p>
                                                </div>
                                            </div>
                                            <p class="card-text text-white">“ BVM-Infotech Technologies has been a
                                                trusted
                                                partner of Activecubes.
                                                They have done an excellent job in addressing our BI/DW staffing
                                                needs
                                                as they understand this space very well. Their consultants have
                                                always
                                                delivered as expected or exceeded....”</p>

                                            <div class="w-100 d-flex justify-content-end">
                                                <img src="{{asset('admin/assets/image/star.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="card custom-card h-100 mx-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-sm-4">
                                                <img src="{{asset('admin/assets/image/girl.png')}}" alt="" class="rounded-img">
                                                <div class="ps-4 text-white">
                                                    <h5 class="mb-0">Frederik Roy Rasmussen</h5>
                                                    <p class="mb-0">CEO and President,InnRoad</p>
                                                </div>
                                            </div>
                                            <p class="card-text text-white">“ BVM-Infotech Technologies has been a
                                                trusted
                                                partner of Activecubes.
                                                They have done an excellent job in addressing our BI/DW staffing
                                                needs
                                                as they understand this space very well. Their consultants have
                                                always
                                                delivered as expected or exceeded....”</p>

                                            <div class="w-100 d-flex justify-content-end">
                                                <img src="{{asset('admin/assets/image/star.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card custom-card h-100 border-0 mx-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-sm-4">
                                                <img src="{{asset('admin/assets/image/girl.png')}}" alt="" class="rounded-img">
                                                <div class="ps-4 text-white">
                                                    <h5 class="mb-0">Frederik Roy Rasmussen</h5>
                                                    <p class="mb-0">CEO and President,InnRoad</p>
                                                </div>
                                            </div>
                                            <p class="card-text text-white">“ BVM-Infotech Technologies has been a
                                                trusted
                                                partner of Activecubes.
                                                They have done an excellent job in addressing our BI/DW staffing
                                                needs
                                                as they understand this space very well. Their consultants have
                                                always
                                                delivered as expected or exceeded....”</p>

                                            <div class="w-100 d-flex justify-content-end">
                                                <img src="{{asset('admin/assets/image/star.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card custom-card h-100 border-0 mx-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-sm-4">
                                                <img src="{{asset('admin/assets/image/girl.png')}}" alt="" class="rounded-img">
                                                <div class="ps-4 text-white">
                                                    <h5 class="mb-0">Frederik Roy Rasmussen</h5>
                                                    <p class="mb-0">CEO and President,InnRoad</p>
                                                </div>
                                            </div>
                                            <p class="card-text text-white">“ BVM-Infotech Technologies has been a
                                                trusted
                                                partner of Activecubes.
                                                They have done an excellent job in addressing our BI/DW staffing
                                                needs
                                                as they understand this space very well. Their consultants have
                                                always
                                                delivered as expected or exceeded....”</p>

                                            <div class="w-100 d-flex justify-content-end">
                                                <img src="{{asset('admin/assets/image/star.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Our teams -->

    <div class="team-section pt-sm-5 pt-3">
        <div class="container">
            <div class="team-heading text-center">
                <fieldset>
                    <legend>
                        <h1 class="px-3">Our Teams</h1>
                    </legend>
                </fieldset>
                <p>Meet our Experienced team member</p>
            </div>

            <div class="py-sm-5 py-3">
                <div class="row justify-content-center">
                    <div class="our-slick">
                        <div class="col-sm-3">
                            <div class="card me-3">
                                <img src="{{asset('admin/assets/image/team-img.png')}}" alt="">
                                <div class="card-body card-info">
                                    <div>
                                        <div class="d-flex justify-content-center mb-4">
                                            <div class="card-icon me-3"><i class="fa-brands fa-linkedin-in"></i>
                                            </div>
                                            <div class="card-icon me-3"><i class="fa-brands fa-facebook-f"></i>
                                            </div>
                                            <div class="card-icon"> <i class="fa-brands fa-instagram"></i></div>
                                        </div>
                                        <div class="team-name text-center text-white">
                                            <h5 class="mb-0">Araminta Max</h5>
                                            <p class="text-white">Senior Marketer</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card me-3">
                                <img src="{{asset('admin/assets/image/team-img.png')}}" alt="">
                                <div class="card-body card-info">
                                    <div>
                                        <div class="d-flex justify-content-center mb-4">
                                            <div class="card-icon me-3"><i class="fa-brands fa-linkedin-in"></i>
                                            </div>
                                            <div class="card-icon me-3"><i class="fa-brands fa-facebook-f"></i></i>
                                            </div>
                                            <div class="card-icon"> <i class="fa-brands fa-instagram"></i></i></div>
                                        </div>
                                        <div class="team-name text-center text-white">
                                            <h5 class="mb-0">Araminta Max</h5>
                                            <p class="text-white">Senior Marketer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card me-3">
                                <img src="{{asset('admin/assets/image/team-img.png')}}" alt="">
                                <div class="card-body card-info">
                                    <div>
                                        <div class="d-flex justify-content-center mb-4">
                                            <div class="card-icon me-3"><i class="fa-brands fa-linkedin-in"></i>
                                            </div>
                                            <div class="card-icon me-3"><i class="fa-brands fa-facebook-f"></i></i>
                                            </div>
                                            <div class="card-icon"> <i class="fa-brands fa-instagram"></i></i></div>
                                        </div>
                                        <div class="team-name text-center text-white">
                                            <h5 class="mb-0">Araminta Max</h5>
                                            <p class="text-white">Senior Marketer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card me-3">
                                <img src="{{asset('admin/assets/image/team-img.png')}}" alt="">
                                <div class="card-body card-info">
                                    <div>
                                        <div class="d-flex justify-content-center mb-4">
                                            <div class="card-icon me-3"><i class="fa-brands fa-linkedin-in"></i>
                                            </div>
                                            <div class="card-icon me-3"><i class="fa-brands fa-facebook-f"></i></i>
                                            </div>
                                            <div class="card-icon"> <i class="fa-brands fa-instagram"></i></i></div>
                                        </div>
                                        <div class="team-name text-center text-white">
                                            <h5 class="mb-0">Araminta Max</h5>
                                            <p class="text-white mb-0">Senior Marketer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- client -->

    <div class="client-conteiner py-sm-5 py-3">
        <div class="client-heading py-5 position-relative">
            <div class="container d-flex justify-content-center">
                <div class="row justify-content-center w-100">
                    <div class="client-slick">
                        <div class="col-lg-2">
                            <div class="card me-3">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/image/c1.png')}}" alt="" class="m-auto">
                                </div>
                            </div>
                            <div>
                                <p class="text-center text-white mt-4 mb-0" style="font-size: 25px;">KVDOO</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card me-3">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/image/c2.png')}}" alt="" class="m-auto" style="height: 37px;">
                                </div>
                            </div>
                            <div>
                                <p class="text-center text-white mt-4 mb-0" style="font-size: 25px;">INNROAD</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card me-3">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/image/c3.png')}}" alt="" class="m-auto">
                                </div>
                            </div>
                            <div>
                                <p class="text-center text-white mt-4 mb-0" style="font-size: 25px;">NEOBENK</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card me-3">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/image/c4.png')}}" alt="" class="m-auto">
                                </div>
                            </div>
                            <div>
                                <p class="text-center text-white mt-4 mb-0" style="font-size: 25px;">OPTION</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card me-3">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/image/c1.png')}}" alt="" class="m-auto">
                                </div>
                            </div>
                            <div>
                                <p class="text-center text-white mt-4 mb-0" style="font-size: 25px;">KVDOO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="dotted"></div> -->
        </div>
    </div>

<!-- footer -->


@endsection
@section('footerjs')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.slick-card').slick({
                dots: true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                autoplay: true,
                speed: 2000,
                responsive: [
                    {
                        breakpoint: 1500,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true,
                            arrows: false,
                        }
                    }
                ]
            });
        });

        $(document).ready(function () {
            $('.our-slick').slick({
                dots: false,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                centerPadding: '60px',
                autoplay: true,
                arrows: true,
                speed: 2000,
                responsive: [
                    {
                        breakpoint: 1300,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: false,
                            arrows: false,
                        }
                    }
                ]
            });
        });

        $(document).ready(function () {
            $('.client-slick').slick({
                dots: false,
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                autoplay: true,
                arrows: false,
                speed: 2000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: false,
                            arrows: false,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                            dots: false,
                        }
                    },
                ]
            });
        });
    </script>

@endsection
