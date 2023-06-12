@extends('admin.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>BVM Contact</title>

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

<link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

<link rel="stylesheet" href="{{asset('admin/assets/css/contact.css')}}">

@section('content')

        <section>
            <div class="contact_profile-section  py-sm-5 py-3">
                <div class="container-fluid">
                    <div class="contact_profile-details"></div>
                    <div class="contact_banner-bg-img "></div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="ps-sm-5">
                                <h1 class="pb-sm-4 pb-2">Connect With Us
                                    <div class="custom-border"></div>
                                </h1>
                                <p>Need to get in touch with us !
                                    either fill out the form with your inquiry.</p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex justify-content-xl-end justify-content-center">
                                <img src="{{asset('admin/assets/image/contect-bg.png')}}" alt="" class="profile-img">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- contact details -->
        <section class="pb-5">
            <div class="contact-section">
                <div class="container" data-aos="fade-up" data-aos-duration="3000">
                    <div class="row">
                        <div class="col-lg-4 mb-lg-0 mb-4">
                            <div class="contact-info">
                                <div class="bg-border"></div>
                                <div class="bg-circle"></div>
                                <div class="d-flex contact-data">
                                    <div class="contact-icon me-3">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="contact-number mb-3">
                                        <h5>Call For Help</h5>
                                        <p class="mb-0">+91 7069459872</p>
                                        <p class="mb-0">+91 8200572882</p>
                                        <p class="mb-0">+91 8758607151</p>
                                    </div>
                                </div>
                                <div class="d-flex contact-data">
                                    <div class="contact-icon me-3">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="contact-number">
                                        <h5>Email Drop us</h5>
                                        <p class="mb-3">info@bvminfotech.com</p>
                                    </div>
                                </div>
                                <div class="d-flex contact-data">
                                    <div class="contact-icon me-3">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="contact-number">
                                        <h5>Office Location</h5>
                                        <p class="mb-0">Surat Office, India (3)</p>
                                        <p class="mb-3">Rajkot Office, India (1)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="more-content">
                                <div class="bg-border"></div>
                                <div class="blue-border"></div>
                                <div class="bg-circle"></div>
                                <h2 class="mb-5">Our Branches</h2>
                                <div>
                                    <div class="d-flex branches-add">
                                        <i class="fa-solid fa-angle-right me-4"></i>
                                        <p id="1" style="cursor: pointer;">1049-1051, Silver Business Point, Near VIP
                                            Circle,Uttran,
                                            Surat, Gujarat – 394105</p>
                                    </div>
                                    <div class="d-flex branches-add">
                                        <i class="fa-solid fa-angle-right me-4"></i>
                                        <p id="2" style="cursor: pointer;">Block-B, A-307, ICC Building, Majura Gate,
                                            Surat, Gujarat - 395001</p>
                                    </div>
                                    <div class="d-flex branches-add">
                                        <i class="fa-solid fa-angle-right me-4"></i>
                                        <p id="3" style="cursor: pointer;">618, Laxmi Enclave - 2 , opposite Gajera
                                            School,
                                            Katargam,
                                            Surat, Gujarat - 395004</p>
                                    </div>
                                    <div class="d-flex branches-add">
                                        <i class="fa-solid fa-angle-right me-4"></i>
                                        <p id="4" style="cursor: pointer;">701 – R.K. Empire, 150 Feet Ring Road, Near
                                            Mavdi
                                            Circle,
                                            Rajkot, Gujarat - 360004</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- contact Map -->

        <div class="py-5">
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed/v1/place?q=1049-1051,Surat,&amp;key=AIzaSyBSFRN6WWGYwmFi498qXXsD2UwkbmD74v4"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    style="width: 100%; height: 400px;"></iframe>

                <!-- <div style="width: 100%; height: 400px;" id="map-canvas"></div> -->
            </div>
        </div>

        <!-- contact form -->
        <div class="contact-form pb-5" data-aos="fade-up" data-aos-duration="3000">
            <div class="container">
                <div class="content-heading pb-5">
                    <fieldset>
                        <legend>
                            <h1 class="px-sm-3">Ready to Get Started?</h1>
                        </legend>
                    </fieldset>
                    <p>Your email address will not be published. Required fields are marked *</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="bg-contact-img">
                            <img src="{{asset('admin/assets/image/contact.png')}}" alt="">
                        </div>
                        <div class="bg-circle"></div>
                    </div>

                    <div class="col-lg-6 contect-border">
                        <div class="form-heading">
                            <h2>Drop us a line</h2>
                        </div>

                        <div>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control custom-input" id="inputEmail4"
                                        placeholder="Your Name *">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control custom-input" id="inputPassword4"
                                        placeholder="Your Email *">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control custom-input" id="inputPassword4"
                                        placeholder="Your Phone *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control custom-input" id="inputPassword4"
                                        placeholder="Subject *">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control custom-textarea" placeholder="Your Message...."
                                        id="floatingTextarea"></textarea>
                                </div>
                                <div class="text-center">
                                    <button class="btn w-auto contect-btn px-lg-5 px-3">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->

@endsection
@section('footerjs')
    <script>
        var map;
        function initialize() {
            map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: new google.maps.LatLng(48.1293954, 12.556663),//Setting Initial Position
                zoom: 10
            });
        }

        function newLocation(newLat, newLng) {
            map.setCenter({
                lat: newLat,
                lng: newLng,
                marker: null
            });
            map = new google.maps.Map(document.getElementById("map-canvas"), {
                center: { lat: 21.23371, lng: 72.86343 },
                zoom: 18,
            });
        }


        google.maps.event.addDomListener(window, 'load', initialize);

        $(document).ready(function () {
            $("#1").on('click', function () {
                newLocation(21.23371, 72.86343);
            });

            $("#2").on('click', function () {
                newLocation(21.180935, 72.818242);
            });

            $("#3").on('click', function () {
                newLocation(21.230713, 72.82917);
            });

            $("#4").on('click', function () {
                newLocation(22.254381, 70.786493);
            });
        });



    </script>
@endsection






