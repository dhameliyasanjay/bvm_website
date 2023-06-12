@extends('admin.app')
@section('headercss')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BVM Career</title>

    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/career.css')}}">


    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;800&family=Josefin+Sans:wght@500&family=Luckiest+Guy&display=swap"
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


        <!-- profile section -->


        <section>
            <div class="career-profile py-sm-5 py-3">
                <div class="container-fluid">
                    <div class="career-details"></div>
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="ps-sm-4 career-padding">
                                <p>APPLY AND SCHEDULE AN INTERVIEW</p>
                                <h5>Are You Smart, <br> Creative & Resourceful ?</h5>

                                <div class="row text-sm-start text-center align-items-center test-experiance py-sm-4">
                                    <div class="col-md-5">
                                        <span id="count1" class="display-4"></span><span>+</span>
                                        <p>Years of Experiance</p>
                                    </div>
                                    <div class="col-md-5">
                                        <span id="count2" class="display-4"></span><span>+</span>
                                        <p>Creative Minds</p>
                                    </div>
                                    <div class="col-md-5">
                                        <span id="count3" class="display-4"></span><span>+</span>
                                        <p>Project</p>
                                    </div>
                                    <div class="col-md-5">
                                        <span id="count4" class="display-4"></span><span>+</span>
                                        <p>Happy Clints</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="d-flex justify-content-xl-end justify-content-center">
                                <img src="{{asset('admin/assets/image/employeephoto.png')}}" alt="" class="cereer-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- career section -->

        <section class="career-service py-sm-5 py-3">
            <div class="container">
                <div class="career-heading pb-sm-5 pb-2">
                    <fieldset>
                        <legend>
                            <h1 class="px-3">Career Opportunities</h1>
                        </legend>
                    </fieldset>
                    <p>We’re on the lookout for talented and passionate candidates to join our squad!</p>
                </div>

                <div class="row career-content mx-sm-0 mx-2 mb-sm-0 mb-3">
                    <div class="col-lg-5 mb-lg-0 mb-3">
                        <div class="career-box btn-center">
                            <div class="careerbox-circle me-sm-4 mb-3">
                                <img src="{{asset('admin/assets/image/p4.png')}}" alt="">
                            </div>
                            <div class="career-info">
                                <h5 class="mb-0">Drop your CV at :</h5>
                                <p class="mb-0">hr@bvminfotech.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="career-box btn-center">
                            <div class="careerbox-circle me-sm-4 mb-3">
                                <img src="{{asset('admin/assets/image/call.png')}}" alt="">
                            </div>
                            <div class="career-info">
                                <h5 class="mb-0">Contact / WhatsApp :</h5>
                                <p class="mb-0">+91 7069459872</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-sm-5 px-sm-5 container-fluid">
                <div class="row">
                    <div class="col-xl-6 pe-xl-4">
                        <div class="card career-card" data-aos="fade-up" data-aos-easing="linear"
                            data-aos-duration="500">
                            <div class="card-body">
                                <div class="career-box2 btn-center">
                                    <div class="d-sm-flex align-items-center text-center">
                                        <div class="careerbox-circle2 me-sm-3 mb-2">
                                            <img src="{{asset('admin/assets/image/b1.png')}}" alt="">
                                        </div>
                                        <div class="cereer-heading mb-sm-0 mb-2">
                                            <p class="mb-0">Full Stack Developer</p>
                                        </div>
                                    </div>
                                    <div class="text-sm-end text-center mb-sm-0 mb-2">
                                        <button class="btn carerr-btn px-5">
                                            <a href="{{url('fullstack-hiring')}}" class="text-white">Apply Now</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="career-text">
                                <p>6+ Months to 4 Years of Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 ps-xl-4">
                        <div class="card career-card" data-aos="fade-up" data-aos-easing="linear"
                            data-aos-duration="700">
                            <div class="card-body">
                                <div class="career-box2 btn-center">
                                    <div class="d-sm-flex align-items-center text-center">
                                        <div class="careerbox-circle2 me-sm-3 mb-2">
                                            <img src="{{asset('admin/assets/image/b6.png')}}" alt="">
                                        </div>
                                        <div class="cereer-heading mb-sm-0 mb-2">
                                            <p class="mb-0">ReactJs Developer</p>
                                        </div>
                                    </div>
                                    <div class="text-sm-end text-center mb-sm-0 mb-2">
                                        <button class="btn carerr-btn px-5">
                                            <a href="{{url('reactjs-hiring')}}" class="text-white">Apply Now</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="career-text">
                                <p>6+ Months to 4 Years of Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 pe-xl-4">
                        <div class="card career-card" data-aos="fade-up" data-aos-easing="linear"
                            data-aos-duration="900">
                            <div class="card-body">
                                <div class="career-box2 btn-center">
                                    <div class="d-sm-flex align-items-center text-center">
                                        <div class="careerbox-circle2 me-sm-3 mb-2">
                                            <img src="{{asset('admin/assets/image/b2.png')}}" alt="">
                                        </div>
                                        <div class="cereer-heading mb-sm-0 mb-2">
                                            <p class="mb-0">Laravel Developer</p>
                                        </div>
                                    </div>
                                    <div class="text-sm-end text-center mb-sm-0 mb-2">
                                        <button class="btn carerr-btn px-5"><a href="{{url('laravel-hiring')}}" class="text-white">Apply Now</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="career-text">
                                <p>6+ Months to 4 Years of Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 ps-xl-4">
                        <div class="card career-card" data-aos="fade-up" data-aos-easing="linear"
                            data-aos-duration="1100">
                            <div class="card-body">
                                <div class="career-box2 btn-center">
                                    <div class="d-sm-flex align-items-center text-center">
                                        <div class="careerbox-circle2 me-sm-3 mb-2">
                                            <img src="{{asset('admin/assets/image/b3.png')}}" alt="">
                                        </div>
                                        <div class="cereer-heading mb-sm-0 mb-2">
                                            <p class="mb-0">UX/UI Designer</p>
                                        </div>
                                    </div>
                                    <div class="text-sm-end text-center mb-sm-0 mb-2">
                                        <button class="btn carerr-btn px-5">
                                            <a href="{{url('ui-ux-hiring')}}" class="text-white">Apply Now</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="career-text">
                                <p>6+ Months to 4 Years of Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 pe-xl-4">
                        <div class="card career-card" data-aos="fade-up" data-aos-easing="linear"
                            data-aos-duration="1300">
                            <div class="card-body">
                                <div class="career-box2 btn-center">
                                    <div class="d-sm-flex align-items-center text-center">
                                        <div class="careerbox-circle2 me-sm-3 mb-2">
                                            <img src="{{asset('admin/assets/image/b4.png')}}" alt="">
                                        </div>
                                        <div class="cereer-heading mb-sm-0 mb-2">
                                            <p class="mb-0">Android Developer</p>
                                        </div>
                                    </div>
                                    <div class="text-sm-end text-center mb-sm-0 mb-2">
                                        <button class="btn carerr-btn px-5">
                                            <a href="{{url('android-hiring')}}" class="text-white">Apply Now</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="career-text">
                                <p>6+ Months to 4 Years of Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 ps-xl-4">
                        <div class="card career-card" data-aos="fade-up" data-aos-easing="linear"
                            data-aos-duration="1500">
                            <div class="card-body">
                                <div class="career-box2 btn-center">
                                    <div class="d-sm-flex align-items-center text-center">
                                        <div class="careerbox-circle2 me-sm-3">
                                            <img src="{{asset('admin/assets/image/unitylogo.png')}}" alt="" width="100%">
                                        </div>
                                        <div class="cereer-heading mb-sm-0 mb-2">
                                            <p class="mb-0">Unity Developer</p>
                                        </div>
                                    </div>
                                    <div class="text-sm-end text-center mb-sm-0 mb-2">
                                        <button class="btn carerr-btn px-5">
                                            <a href="{{url('unity-hiring')}}" class="text-white">Apply Now</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="career-text">
                                <p>6+ Months to 4 Years of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Advantage -->

        <div class="advantage-section pb-5">
            <div class="container">
                <div class="advantage-heading pb-sm-5 pb-2">
                    <fieldset>
                        <legend>
                            <h1 class="px-3">The BVM Advantages</h1>
                        </legend>
                    </fieldset>
                    <p>We’re on the lookout for talented and passionate candidates to join our squad!</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('admin/assets/image/employeephoto.png')}}" alt="" class="w-100">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="advantage-content">
                            <ul class="ps-sm-4 ps-0">
                                <li>We Are a ‘ Monday to Friday’ Company !(Alternet Saturday Open)</li>
                                <li>Employee-Centric Organization</li>
                                <li>Competitive Remuneration Package</li>
                                <li>Flexible & Conducive Work Culture</li>
                                <li>Holistic Growth and development Opportunities</li>
                                <li>Inclusive and diverse Work Force</li>
                                <li>Unused leave Encashment Policy</li>
                                <li>Team Outing & Recreational Activities Throughout the Month</li>
                                <li>Attractive referral bonus scheme</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    <!-- Footer -->
@endsection




