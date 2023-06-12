@extends('admin.app')
@section('headercss')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BVM Event</title>

    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/css/event.css')}}">

    <link href="{{asset('admin/assets/path/to/lightbox.css')}}" rel="stylesheet" />

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
<!-- profile section -->


<section>
    <div class="profile-section py-sm-5 py-3">
        <div class="container-fluid">
            <div class="profile-details"></div>
            <div class="banner-bg-img"></div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="ps-sm-5">
                        <h1 class="pb-sm-4 pb-2">Events
                            <div class="custom-border"></div>
                        </h1>

                        <p class="about-content">“ We wouldn't be who we are without our team of talented
                            people.
                            Check out our latest events to keep up with our community! “</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="d-flex justify-content-xl-end justify-content-center">
                        <img src="{{asset('admin/assets/image/event-bg.png')}}" alt="" class="profile-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Event section -->
<section class="event-section py-sm-5 py-3">
    <div class="container">
        <div class="event-heading pb-sm-5 pb-2">
            <fieldset>
                <legend>
                    <h1 class="px-3">BVM Events</h1>
                </legend>
            </fieldset>
            <p>Community and positive culture</p>
        </div>

        <div>
            <ul class="nav nav-pills mb-3 event-button d-flex justify-content-around" id="pills-tab"
                role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active event-btn-color  px-4 me-lg-5 w-lg-auto w-100 mb-lg-0 mb-3"
                            id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button"
                            role="tab" aria-controls="pills-home" aria-selected="true">Indoor</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link event-btn-color  px-4 me-lg-5 w-lg-auto w-100 mb-lg-0 mb-3"
                            id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                            type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Outdoor</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link event-btn-color  px-4 me-lg-5 w-lg-auto w-100 mb-lg-0 mb-3"
                            id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                            type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Monthly
                        Celebration</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link event-btn-color  px-4 me-lg-5 w-lg-auto w-100 mb-lg-0 mb-3"
                            id="pills-last-tab" data-bs-toggle="pill" data-bs-target="#pills-last" type="button"
                            role="tab" aria-controls="pills-last" aria-selected="false">Days Celebration</button>
                </li>
            </ul>
            <div class="tab-content event-gallery" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                     aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/diwali.jpg')}}" data-lightbox="mygallery"
                                           data-title="Diwali Celebration"><img src="{{asset('admin/assets/image/diwali.jpg')}}" alt=""
                                                                                width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Diwali Celebration</h5>
                                            <p class="mb-0">Oct-2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/office.jpg')}}" data-lightbox="mygallery"
                                           data-title="Office Inauguration"><img src="{{asset('admin/assets/image/office.jpg')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Office Inauguration</h5>
                                            <p class="mb-0">Feb-2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/ganesha.jpg')}}" data-lightbox="mygallery"
                                           data-title="Ganesh Celebration"><img src="{{asset('admin/assets/image/ganesha.jpg')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Ganesh Celebration</h5>
                                            <p class="mb-0">Sep-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/raksha-bhandan.jpg')}}" data-lightbox="mygallery"
                                           data-title="Rakshabandhan"><img src="{{asset('admin/assets/image/raksha-bhandan.jpg')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Rakshabandhan</h5>
                                            <p class="mb-0">August-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/blackday.jpg')}}" data-lightbox="mygallery"
                                           data-title="Black Day"><img src="{{asset('admin/assets/image/blackday.jpg')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Black Day</h5>
                                            <p class="mb-0">August-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/janmasthmi.jpg')}}" data-lightbox="mygallery"
                                           data-title="Janmashtami"><img src="{{asset('admin/assets/image/janmasthmi.jpg')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Janmashtami</h5>
                                            <p class="mb-0">August-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                     aria-labelledby="pills-profile-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/e2.png')}}" data-lightbox="mygallery"
                                           data-title="Dumas Trip"><img src="{{asset('admin/assets/image/e2.png')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Dumas Trip</h5>
                                            <p class="mb-0">Sep-2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/e5.png')}}" data-lightbox="mygallery"
                                           data-title="Imagicaa Trip"><img src="{{asset('admin/assets/image/e5.png')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Imagicaa Trip</h5>
                                            <p class="mb-0">March-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/e6.png')}}" data-lightbox="mygallery"
                                           data-title="Seminar"><img src="{{asset('admin/assets/image/e6.png')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Seminar</h5>
                                            <p class="mb-0">Jan-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/e1.png')}}" data-lightbox="mygallery"
                                           data-title="Outdoor Sports"><img src="{{asset('admin/assets/image/e1.png')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Outdoor Sports</h5>
                                            <p class="mb-0">May-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/e9.png')}}" data-lightbox="mygallery"
                                           data-title="IT Cricket Tournament"><img src="{{asset('admin/assets/image/e9.png')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">IT Cricket Tournament</h5>
                                            <p class="mb-0">August-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                     aria-labelledby="pills-contact-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/month-of-the-day.jpg')}}" data-lightbox="mygallery"
                                           data-title="Employee of the month"><img src="{{asset('admin/assets/image/month-of-the-day.jpg')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Employee of the month</h5>
                                            <p class="mb-0">August-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/month-of-the-day.jpg')}}" data-lightbox="mygallery"
                                           data-title="Best performance of the month"><img src="{{asset('admin/assets/image/month-of-the-day.jpg')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Best performance of the month</h5>
                                            <p class="mb-0">August-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/month-of-the-day.jpg')}}" data-lightbox="mygallery"
                                           data-title="Birthday celebration"><img src="{{asset('admin/assets/image/month-of-the-day.jpg')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Birthday celebration</h5>
                                            <p class="mb-0">August-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-last" role="tabpanel" aria-labelledby="pills-last-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/new-year.jfif')}}" data-lightbox="mygallery"
                                           data-title="Indepence day"><img src="{{asset('admin/assets/image/new-year.jfif')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Indepence day</h5>
                                            <p class="mb-0">August-2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/e3.png')}}" data-lightbox="mygallery"
                                           data-title="Movie Day"><img src="{{asset('admin/assets/image/e3.png')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Movie Day</h5>
                                            <p class="mb-0">August-2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 mb-sm-5 mb-2">
                            <div class="card border-0">
                                <div class="card-body position-relative">
                                    <div class="event-img">
                                        <a href="{{asset('admin/assets/image/black-day.jpg')}}" data-lightbox="mygallery"
                                           data-title="Black Day"><img src="{{asset('admin/assets/image/black-day.jpg')}}" alt="" width="100%"></a>
                                    </div>
                                    <div class="event-name d-flex align-items-center justify-content-center">
                                        <div>
                                            <h5 class="mb-0">Black Day</h5>
                                            <p class="mb-0">August-2022</p>
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
</section>
    <!-- Footer -->

@endsection


    <!-- Option 1: Bootstrap Bundle with Popper -->
@section('footerjs')


<script src="{{asset('admin/assets/path/to/lightbox.js')}}"></script>
@endsection
