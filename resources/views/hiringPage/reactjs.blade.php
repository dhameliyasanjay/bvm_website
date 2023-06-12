@extends('admin.app')
@section('headercss')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Full Stack Developer</title>

    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/fullstack.css')}}">

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
    @endsection

    @section('content')


        <section>
            <div class="hiring-section py-sm-5 py-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="ps-sm-5 hiring-content">
                                <h1 class="pb-sm-4 pb-2 hiring-heading">WE ARE<br />HIRING !
                                </h1>
                                <div>
                                    <button class="btn hiring-btn">JOIN OUR TEAM</button>
                                </div>

                                <div
                                    class="d-flex align-items-center justify-content-sm-start justify-content-center mt-4">
                                    <i class="fa-solid fa-envelope me-3 hiring-icon"></i>
                                    <a href="#" class="hiring-info">info@bvminfotech.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="d-flex justify-content-xl-end justify-content-center">
                                <img src="{{asset('admin/assets/image/hiring-img.png')}}" alt="" class="hiring-img w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- hiring Form -->

        <section>
            <div class="hiring-form-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 pe-xl-4">
                            <div class="card hiring-card">
                                <div class="card-body">
                                    <div class="hiring-box btn-center">
                                        <div class="d-sm-flex align-items-center text-center">
                                            <div class="hiring-box-circle me-sm-3 mb-2">
                                                <img src="{{asset('admin/assets/image/b1.png')}}" alt="">
                                            </div>
                                            <div class="hiring-heading mb-sm-0 mb-2">
                                                <p class="mb-0">React.js Developer</p>
                                            </div>
                                        </div>
                                        <div class="text-sm-end text-center mb-sm-0 mb-2">
                                            <a href="#" class="hiring-link">+4 Position</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hiring-form-box py-5">
                        <form class="row g-3">
                            <div class="col-md-12 pb-5">
                                <label for="inputText4" class="form-label hiring-label">Full Name *</label>
                                <div class="hiring-input">
                                    <div class="overlay-android overlay"></div>
                                    <input type="text" class="form-control border-0" id="inputText4">
                                </div>
                            </div>
                            <div class="col-md-6 pb-5">
                                <label for="inputPhone4" class="form-label hiring-label">Phone Number *</label>
                                <div class="hiring-input">
                                    <div class="overlay-android overlay"></div>
                                    <input type="text" class="form-control border-0" id="inputPhone4">
                                </div>
                            </div>
                            <div class="col-md-6 pb-5">
                                <label for="inputEmail4" class="form-label hiring-label">Email Id *</label>
                                <div class="hiring-input">
                                    <div class="overlay-android overlay"></div>
                                    <input type="password" class="form-control border-0" id="inputEmail4">
                                </div>
                            </div>
                            <div class="col-md-12 pb-5">
                                <label for="formFile" class="form-label hiring-label">Attach Resume/CV*(Only
                                    PDF,DOC,JPG,PNG)</label>
                                <div class="hiring-input p-4">
                                    <div class="overlay-android overlay"></div>
                                    <input class="border-0 hiring-choose-input " type="file" name="myFile[]" id="myFile"
                                        multiple>
                                    <button class="hiring-choose-btn px-lg-5 px-3" type="button">Choose File</button>
                                    <span class="choose-text"></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="Textarea" class="form-label hiring-label">Message</label>
                                <div class="hiring-input">
                                    <div class="overlay-android overlay"></div>
                                    <input type="Textarea" class="form-control border-0" id="Textarea">
                                </div>
                            </div>

                            <div class="text-center pt-sm-5 pt-3">
                                <button class="btn w-auto hiring-btn px-lg-5 px-3">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

@endsection

    <!-- footer -->



