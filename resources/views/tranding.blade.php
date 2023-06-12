@extends('admin.app')
@section('headercss')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BVM Our Services</title>

    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/css/our-service.css')}}">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;800&family=Josefin+Sans:wght@500&family=Luckiest+Guy&display=swap"
        rel="stylesheet">

    <!-- font awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <!-- slick slider -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>

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
                            <h1 class="pb-sm-4 pb-2">Our Services
                                <div class="custom-border"></div>
                            </h1>
                            <p class="about-content">BVM Infotech provides various services ranging from Software
                                Development to UI/UX design and Branding.
                                We provide robust and stable solutions to our client's
                                problem with our expertise.</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="d-flex justify-content-xl-end justify-content-center">
                            <img src="{{asset('admin/assets/image/service-bg.png')}}" alt="" class="our-service-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-service py-sm-5 py-3">
        <div class="container">
            <div class="service-heading pb-sm-5 pb-2">
                <fieldset>
                    <legend>
                        <h1 class="px-sm-3">What we do for you</h1>
                    </legend>
                </fieldset>
                <p>Managed IT services for your industry</p>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="service-slide">
                    <div class="col-sm-2">
                        <div class="card service-card mx-4">
                            <div class="card-body">
                                <div class="box-content text-center py-3">
                                    <div class="box-circle mb-4">
                                        <img src="{{asset('admin/assets/image/i1.png')}}" alt="">
                                    </div>
                                    <a href="{{url('android')}}" class="mb-0">Android App</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="card service-card mx-4">
                            <div class="card-body">
                                <div class="box-content text-center py-3">
                                    <div class="box-circle mb-4">
                                        <img src="{{asset('admin/assets/image/i3.png')}}" alt="">
                                    </div>
                                    <a href="{{url('website')}}" class="mb-0">Website</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="card service-card mx-4">
                            <div class="card-body">
                                <div class="box-content text-center py-3">
                                    <div class="box-circle mb-4">
                                        <img src="{{asset('admin/assets/image/i4.png')}}" alt="">
                                    </div>
                                    <a href="{{url('ui-ux')}}" class="mb-0">UX/UI</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="card service-card mx-4">
                            <div class="card-body">
                                <div class="box-content text-center py-3">
                                    <div class="box-circle mb-4">
                                        <img src="{{asset('admin/assets/image/i5.png')}}" alt="">
                                    </div>
                                    <a href="{{url('cross-platform')}}" class="mb-0">Cross Platform</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card service-card mx-4">
                            <div class="card-body">
                                <div class="box-content text-center py-3">
                                    <div class="box-circle mb-4">
                                        <img src="{{asset('admin/assets/image/i6.png')}}" alt="">
                                    </div>
                                    <a href="{{url('project-dev')}}" class="mb-0">Project
                                        Development</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card service-card mx-4">
                            <div class="card-body">
                                <div class="box-content text-center py-3">
                                    <div class="box-circle mb-4">
                                        <img src="{{asset('admin/assets/image/i7.png')}}" alt="">
                                    </div>
                                    <a href="{{url('tranding')}}" class="mb-0">Trending
                                        Technologies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card service-card mx-4">
                            <div class="card-body">
                                <div class="box-content text-center py-3">
                                    <div class="box-circle mb-4">
                                        <img src="{{asset('admin/assets/image/i8.png')}}" alt="">
                                    </div>
                                    <a href="{{url('digital')}}" class="mb-0">Digital
                                        Marketing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-details py-sm-5 py-3">
                <div class="service-box btn-center mb-4">
                    <div class="overlay-android overlay7"></div>
                    <div class="box-circle me-4 mb-sm-0 mb-4">
                        <img src="{{asset('admin/assets/image/li-6.png')}}" alt="">
                    </div>
                    <div class="service-info">
                        <h5 class="mb-3"><span style="color: #EF6DD7;">Tranding</span> Technologies</h5>
                        <p class="mb-0">We Also work with emerging and trending technologies. Our expert team has
                            experiance working with iOT (Internet
                            of Things), AR (Augmented reality), Machine and AI (artificial intelligence), iBeacon,
                            and
                            360-degree virtual tours.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('footerjs')

    <script>
        $(document).ready(function () {
            $('.service-slide').slick({
                dots: false,
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
                            arrows: false,
                            speed: 2000,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                            speed: 2000,
                        }
                    },
                ]
            });
        });
    </script>
@endsection
