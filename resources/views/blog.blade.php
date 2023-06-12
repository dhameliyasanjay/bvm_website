@extends('admin.app')
@section('headercss')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BVM Blog</title>

    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/css/blog.css')}}">

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
        <!-- Blog Profile -->
        <section>
            <div class="blog_profile-section py-md-5 px-sm-3">
                <div class="container-lg p-0 custom-container">
                    <div class="blog_profile-details"></div>
                    <div class="blog_banner-bg-img">
                        <img src="{{asset('admin/assets/image/blog-img.png')}}" alt="" width="100%" class="position-relative">
                    </div>
                    <div class="blog-title">
                        <div class="blog-heading pb-sm-5 pb-2 text-white">
                            <fieldset class="blog-fieldset">
                                <legend>
                                    <h1 class="px-3 text-white">Our Blogs</h1>
                                </legend>
                            </fieldset>
                            <p class="text-white">We’re on the lookout for talented and passionate candidates to join
                                our
                                squad!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- blog info -->

        <section>
            <div class="blog-info-section py-3">
                <div class="container">
                    <ul class="nav nav-pills mb-md-5 mb-2 blog-button d-sm-flex justify-content-sm-around"
                        id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active blog-btn-color  px-4 me-lg-5 w-lg-auto w-100 mb-lg-0 mb-3"
                                id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                                role="tab" aria-controls="pills-home" aria-selected="true">Clients</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link blog-btn-color  px-4 me-lg-5 w-lg-auto w-100 mb-lg-0 mb-3"
                                id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">BVM
                                Team</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link blog-btn-color  px-4 me-lg-5 w-lg-auto w-100 mb-lg-0 mb-3"
                                id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                                type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Developers</button>
                        </li>
                    </ul>
                    <div class="tab-content blog-gallery" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 mb-4">
                                    <div class="card blog-card" data-aos="fade-up" data-aos-easing="linear"
                                        data-aos-duration="500">
                                        <div class="blog-card-info">
                                            <div class="blog-img">
                                                <img src="{{asset('admin/assets/image/team-img.png')}}" alt="">
                                            </div>
                                            <div class="blog-content">
                                                <p class="mb-2">How to make</p>
                                                <h4>Custom component
                                                    class & apply it to
                                                    components ?</h4>
                                                <p class="mb-0">as we use a storyboard, we use a label regularly in our
                                                    designs, and in
                                                    that,
                                                    we use custom fonts to llok better as per our design, but still...
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="body-content mb-3">How to make custome component class & Apply it
                                                to
                                                components ?</h3>
                                            <div class="d-sm-flex mb-3">
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-user me-2"></i>
                                                    <p class="mb-0">Vruti damania</p>
                                                </div>
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    <p class="mb-0">May 08, 2022</p>
                                                </div>
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-clock me-2"></i>
                                                    <p class="mb-0">05:48 PM</p>
                                                </div>
                                            </div>

                                            <div>
                                                <p style="color: black;">as we use a storyboard, we use a label
                                                    regularly in
                                                    our designs, and in
                                                    that,
                                                    we use custom fonts to llok better as per our design, but still...
                                                </p>

                                                <div class="d-flex justify-content-end align-items-center">
                                                    <p class="mb-0 me-2" style="color:#FE0F5E;">Read More</p>
                                                    <i class="fa-solid fa-arrow-right" style="color:#FE0F5E;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mb-4" data-aos="fade-up" data-aos-easing="linear"
                                    data-aos-duration="700">
                                    <div class="card blog-card">
                                        <div class="blog-card-info">
                                            <div class="blog-img">
                                                <img src="{{asset('admin/assets/image/team-img.png')}}" alt="">
                                            </div>
                                            <div class="blog-content">
                                                <p class="mb-2">What are closures?</p>
                                                <h4>3 ways to Define
                                                    closures & it’s Example.</h4>
                                                <p class="mb-0">In Swift, Closures can be challenging to understand with
                                                    types. they are used with the standard libraries and they....</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="body-content mb-3">What are closures ? 3 Ways to Define closures
                                                with
                                                Example</h3>
                                            <div class="d-sm-flex mb-3">
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-user me-2"></i>
                                                    <p class="mb-0">Aditya Vaidya</p>
                                                </div>
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    <p class="mb-0">May 01, 2022</p>
                                                </div>
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-clock me-2"></i>
                                                    <p class="mb-0">06:23 PM</p>
                                                </div>
                                            </div>

                                            <div>
                                                <p style="color: black;">In Swift, Closures can be challenging to
                                                    understand
                                                    with types. they are used with the standard libraries and they....
                                                </p>

                                                <div class="d-flex justify-content-end align-items-center">
                                                    <p class="mb-0 me-2" style="color:#FE0F5E;">Read More</p>
                                                    <i class="fa-solid fa-arrow-right" style="color:#FE0F5E;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mb-4" data-aos="fade-up" data-aos-easing="linear"
                                    data-aos-duration="900">
                                    <div class="card blog-card">
                                        <div class="blog-card-info">
                                            <div class="blog-img">
                                                <img src="{{asset('admin/assets/image/team-img.png')}}" alt="">
                                            </div>
                                            <div class="blog-content">
                                                <p class="mb-2">How to make</p>
                                                <h4>Custom component
                                                    class & apply it to
                                                    components ?</h4>
                                                <p class="mb-0">as we use a storyboard, we use a label regularly in our
                                                    designs, and in
                                                    that,
                                                    we use custom fonts to llok better as per our design, but still...
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="body-content mb-3">How to make custome component class & Apply it
                                                to
                                                components ?</h3>
                                            <div class="d-sm-flex mb-3">
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-user me-2"></i>
                                                    <p class="mb-0">Vruti damania</p>
                                                </div>
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    <p class="mb-0">May 08, 2022</p>
                                                </div>
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-clock me-2"></i>
                                                    <p class="mb-0">05:48 PM</p>
                                                </div>
                                            </div>

                                            <div>
                                                <p style="color: black;">as we use a storyboard, we use a label
                                                    regularly in
                                                    our designs, and in
                                                    that,
                                                    we use custom fonts to llok better as per our design, but still...
                                                </p>

                                                <div class="d-flex justify-content-end align-items-center">
                                                    <p class="mb-0 me-2" style="color:#FE0F5E;">Read More</p>
                                                    <i class="fa-solid fa-arrow-right" style="color:#FE0F5E;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mb-4" data-aos="fade-up" data-aos-easing="linear"
                                    data-aos-duration="1100">
                                    <div class="card blog-card">
                                        <div class="blog-card-info">
                                            <div class="blog-img">
                                                <img src="{{asset('admin/assets/image/team-img.png')}}" alt="">
                                            </div>
                                            <div class="blog-content">
                                                <p class="mb-2">How to make</p>
                                                <h4>Custom component
                                                    class & apply it to
                                                    components ?</h4>
                                                <p class="mb-0">as we use a storyboard, we use a label regularly in our
                                                    designs, and in
                                                    that,
                                                    we use custom fonts to llok better as per our design, but still...
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="body-content mb-3">How to make custome component class & Apply it
                                                to
                                                components ?</h3>
                                            <div class="d-sm-flex mb-3">
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-user me-2"></i>
                                                    <p class="mb-0">Vruti damania</p>
                                                </div>
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    <p class="mb-0">May 08, 2022</p>
                                                </div>
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-clock me-2"></i>
                                                    <p class="mb-0">05:48 PM</p>
                                                </div>
                                            </div>

                                            <div>
                                                <p style="color: black;">as we use a storyboard, we use a label
                                                    regularly in
                                                    our designs, and in
                                                    that,
                                                    we use custom fonts to llok better as per our design, but still...
                                                </p>

                                                <div class="d-flex justify-content-end align-items-center">
                                                    <p class="mb-0 me-2" style="color:#FE0F5E;">Read More</p>
                                                    <i class="fa-solid fa-arrow-right" style="color:#FE0F5E;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mb-4" data-aos="fade-up" data-aos-easing="linear"
                                    data-aos-duration="1300">
                                    <div class="card blog-card">
                                        <div class="blog-card-info">
                                            <div class="blog-img">
                                                <img src="{{asset('admin/assets/image/team-img.png')}}" alt="">
                                            </div>
                                            <div class="blog-content">
                                                <p class="mb-2">What are closures?</p>
                                                <h4>3 ways to Define
                                                    closures & it’s Example.</h4>
                                                <p class="mb-0">In Swift, Closures can be challenging to understand with
                                                    types. they are used with the standard libraries and they....</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="body-content mb-3">What are closures ? 3 Ways to Define closures
                                                with
                                                Example</h3>
                                            <div class="d-sm-flex mb-3">
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-user me-2"></i>
                                                    <p class="mb-0">Aditya Vaidya</p>
                                                </div>
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    <p class="mb-0">May 01, 2022</p>
                                                </div>
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-clock me-2"></i>
                                                    <p class="mb-0">06:23 PM</p>
                                                </div>
                                            </div>

                                            <div>
                                                <p style="color: black;">In Swift, Closures can be challenging to
                                                    understand
                                                    with types. they are used with the standard libraries and they....
                                                </p>

                                                <div class="d-flex justify-content-end align-items-center">
                                                    <p class="mb-0 me-2" style="color:#FE0F5E;">Read More</p>
                                                    <i class="fa-solid fa-arrow-right" style="color:#FE0F5E;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mb-4" data-aos="fade-up" data-aos-easing="linear"
                                    data-aos-duration="1500">
                                    <div class="card blog-card">
                                        <div class="blog-card-info">
                                            <div class="blog-img">
                                                <img src="{{asset('admin/assets/image/team-img.png')}}" alt="">
                                            </div>
                                            <div class="blog-content">
                                                <p class="mb-2">How to make</p>
                                                <h4>Custom component
                                                    class & apply it to
                                                    components ?</h4>
                                                <p class="mb-0">as we use a storyboard, we use a label regularly in our
                                                    designs, and in
                                                    that,
                                                    we use custom fonts to llok better as per our design, but still...
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h3 class="body-content mb-3">How to make custome component class & Apply it
                                                to
                                                components ?</h3>
                                            <div class="d-sm-flex mb-3">
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-user me-2"></i>
                                                    <p class="mb-0">Vruti damania</p>
                                                </div>
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-calendar-days me-2"></i>
                                                    <p class="mb-0">May 08, 2022</p>
                                                </div>
                                                <div class="d-flex align-items-center blog-text mb-sm-0 mb-2">
                                                    <i class="fa-solid fa-clock me-2"></i>
                                                    <p class="mb-0">05:48 PM</p>
                                                </div>
                                            </div>

                                            <div>
                                                <p style="color: black;">as we use a storyboard, we use a label
                                                    regularly in
                                                    our designs, and in
                                                    that,
                                                    we use custom fonts to llok better as per our design, but still...
                                                </p>

                                                <div class="d-flex justify-content-end align-items-center">
                                                    <p class="mb-0 me-2" style="color:#FE0F5E;">Read More</p>
                                                    <i class="fa-solid fa-arrow-right" style="color:#FE0F5E;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">

                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">

                        </div>
                    </div>
                </div>
            </div>
        </section>





    <!-- Footer -->

@endsection



    <!-- Option 1: Bootstrap Bundle with Popper -->
