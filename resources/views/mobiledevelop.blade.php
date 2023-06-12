@extends('admin.app')
@section('headercss')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Mobile App Development</title>

    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/css/mobiledev.css')}}">

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

     <!-- Mobile profile dev -->
        <section>
            <div class="profile-section py-sm-5 py-3">
                <div class="container-fluid">
                    <div class="profile-details"></div>
                    <div class="banner-bg-img"></div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="ps-sm-5">
                                <h1 class="pb-sm-4 pb-2">Mobile App Development
                                    <div class="custom-border"></div>
                                </h1>

                                <p class="about-content">We do our business smartly by developing custom Android and
                                    iPhone
                                    mobile applications that boost a quality and signature that is truly worthy of your
                                    brand.</p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex justify-content-xl-end justify-content-center">
                                <img src="{{asset('admin/assets/image/mobile-dev.png')}}" alt="" class="profile-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="android-section py-5">
                <div class="container">
                    <div class="android-heading pb-sm-5 pb-2">
                        <fieldset>
                            <legend>
                                <h1 class="px-sm-3">Benefits of Android</h1>
                            </legend>
                        </fieldset>
                        <p>Perform seamlessly on multiple devices</p>
                    </div>

                    <div class="row justify-content-between">
                        <div class="col-xl-4">
                            <div class="card mobile-card mb-sm-5 mb-3 text-center p-sm-4 p-2">
                                <div class="card-img text-center">
                                    <img src="{{asset('admin/assets/image/m1.png')}}" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="card-text">
                                        <h3>Open Source Platform</h3>
                                        <p>Android is an open-source platform which means you can interact with the huge
                                            community. You can always be aware of the latest versions of app
                                            development.
                                            The best thing is, no license is required to use it. This feature has
                                            attracted
                                            thousands of owners to choose android mobile app development for their
                                            projects.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card mobile-card mb-sm-5 mb-3 text-center p-sm-4 p-2">
                                <div class="card-img text-center">
                                    <img src="{{asset('admin/assets/image/m2.png')}}" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="card-text">
                                        <h3>Enhanced Security</h3>
                                        <p>From the time Android has started its first version Gingerbread, Google has
                                            launched many friendly updates. As a result of this, it stands firm against
                                            other operating systems in terms of data security. It offers high-level
                                            protection to the apps by making it difficult for malware wide range to
                                            locate
                                            the data structure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-xl-4">
                            <div class="card mobile-card mb-sm-5 mb-3 text-center p-sm-4 p-2">
                                <div class="card-img text-center">
                                    <img src="{{asset('admin/assets/image/m3.png')}}" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="card-text">
                                        <h3>Huge User Base</h3>
                                        <p>Android OS devices are widely used across the globe with more than 80% of
                                            smartphone users. With a market share of 75%, it attracts businesses of all
                                            sizes. It has millions of active users per month, making it an ideal
                                            platform.
                                            You can reach a large group of the target audience.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card mobile-card mb-sm-5 mb-3 text-center p-sm-4 p-2">
                                <div class="card-img text-center">
                                    <img src="{{asset('admin/assets/image/m4.png')}}" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="card-text">
                                        <h3>Low Investment</h3>
                                        <p>The android mobile app development has a very low barrier to entry and it is
                                            easier for developers to reduce the development cost. Developers are
                                            required to
                                            pay a one-time registration fee for distributing the application. After
                                            that,
                                            they can build and test the product on any device. There is a huge return on
                                            such an investment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-img text-center">
                    <img src="{{asset('admin/assets/image/mobiledevelop.png')}}" alt="">
                </div>
            </div>
        </section>

        <!-- Devlopment process -->
        <div class="process-section">
            <div class="container py-5">
                <div class="process-content mb-5">
                    <p class="text-white">How we Work</p>
                    <h3 class="text-white">Our App Development Process</h3>
                </div>

                <div class="text-center pt-5 process-details">
                    <div class="process-img">
                        <img src="{{asset('admin/assets/image/process-img.png')}}" alt="" width="100%">
                    </div>

                    <div class="process-box mb-lg-0 mb-4">
                        <div class="probox-1">
                            <span class="n1">1</span>
                            <div class="pro-img">
                                <img src="{{asset('admin/assets/image/pro-icon1.png')}}" alt="">
                            </div>
                        </div>

                        <div class="d-lg-flex">
                            <div class="text1">
                                <h3>DISCOVERY</h3>
                            </div>
                            <div class="text2">
                                <h3>PLANNING</h3>
                            </div>
                            <div class="text3">
                                <h3>DESIGN</h3>
                            </div>
                            <div class="text4">
                                <h3>DEVELOPMENT</h3>
                            </div>
                            <div class="text5">
                                <h3>TESTING, QA <br> & LAUNCH</h3>
                            </div>
                            <div class="text6">
                                <h3>MAINTENANCE</h3>
                            </div>
                        </div>
                    </div>
                    <div class="process-box2 pb-lg-0 pb-5">
                        <div class="probox-2">
                            <span class="n2">2</span>
                            <div class="pro-img">
                                <img src="{{asset('admin/assets/image/pro-icon2.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="process-box3 pb-lg-0 pb-5">
                        <div class="probox-3">
                            <span class="n3">3</span>
                            <div class="pro-img">
                                <img src="{{asset('admin/assets/image/pro-icon3.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="process-box4 pb-lg-0 pb-5">
                        <div class="probox-4">
                            <span class="n4">4</span>
                            <div class="pro-img">
                                <img src="{{asset('admin/assets/image/pro-icon4.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="process-box5 pb-lg-0 pb-5">
                        <div class="probox-5">
                            <span class="n5">5</span>
                            <div class="pro-img">
                                <img src="{{asset('admin/assets/image/pro-icon5.png')}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="process-box6">
                        <div class="probox-6">
                            <span class="n6">6</span>
                            <div class="pro-img">
                                <img src="{{asset('admin/assets/image/pro-icon6.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- mobile-contact -->

        <div class="blog-contect-section mt-5">
            <div class="contect-bg-img">
                <img src="{{asset('admin/assets/image/blog-contact.png')}}" alt="" height="700px" class="bg-img">
                <div class="contact-heading pt-xxl-5 py-4">
                    <h1>Contact Us !</h1>
                    <p class="mb-4">If you are looking for a solid partner for your projects, send us an email.
                        we’d love to talk to you !</p>
                    <div class="container pt-xxl-5">
                        <div class="row">
                            <div class="col-xxl-4 me-xxl-5 mb-4">
                                <form class="custom-form">
                                    <p style="color: #EF6DD7; text-align: start; font-size: 25px;">Send us a message</p>
                                    <div class="mb-3 text-start">
                                        <label for="exampleInputText1" class="form-label text-dark">Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="mb-3 text-start">
                                        <label for="exampleInputEmail1" class="form-label text-dark">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="mb-3 text-start">
                                        <label for="exampleInputNumber1" class="form-label text-dark">Phone</label>
                                        <input type="number" class="form-control" id="exampleInputNumber1">
                                    </div>
                                    <div class="mb-3 text-start">
                                        <label for="exampleInputText1" class="form-label text-dark">Message</label>
                                        <input type="text" class="form-control" id="exampleInputText1">
                                    </div>

                                    <div>
                                        <button class="contect-btn px-5">Send Message</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-xxl-7 text-start ">
                                <div class="contact-text pb-xxl-5 pb-3">
                                    <p class="mb-0">Let’s Talk</p>
                                    <h3>Speak With Expert Engineers.</h3>
                                </div>

                                <div class="row">
                                    <div class="col-xxl-6 pt-2 pb-xxl-5">
                                        <div class="blog-box btn-center">
                                            <div class="blog-box-circle me-sm-4">
                                                <img src="{{asset('admin/assets/image/call.png')}}" alt="" width="100%">
                                            </div>
                                            <div class="blog-info">
                                                <h5 class="mb-0">Call For Help</h5>
                                                <p class="mb-0">+91 7069459872</p>
                                                <p class="mb-0">+91 8200572882</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 pt-2 pb-xxl-5">
                                        <div class="blog-box btn-center">
                                            <div class="blog-box-circle me-sm-4">
                                                <img src="{{asset('admin/assets/image/p4.png')}}" alt="" width="100%">
                                            </div>
                                            <div class="blog-info">
                                                <h5 class="mb-0">Drop us an email</h5>
                                                <p class="mb-0">info@bvminfotech.com</p>
                                                <p class="mb-0">hr@bvminfotech.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center custom-border">
                                        <img src="{{asset('admin/assets/image/custom-border.png')}}" alt="">
                                    </div>
                                    <div class="col-12 pt-2 pt-xxl-5 pt-2">
                                        <div class="blog-box btn-center">
                                            <div class="blog-box-circle me-sm-4">
                                                <img src="{{asset('admin/assets/image/location.png')}}" alt="" width="100%">
                                            </div>
                                            <div class="blog-info">
                                                <h5 class="mb-0">Office Location</h5>
                                                <p class="mb-0">1049-1051, Silver Business Point, Near VIP
                                                    Circle,Uttran,
                                                    Surat, Gujarat – 394105</p>
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


    <!-- Footer -->

    @endsection
