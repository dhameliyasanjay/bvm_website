@extends('admin.app')

@section('headercss')

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Web Development</title>

    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('admin/assets/css/webdev.css')}}">

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
                            <h1 class="pb-sm-4 pb-2">Web Development
                                <div class="custom-border"></div>
                            </h1>

                            <p class="about-content">We select an appropriate programming structure based on client
                                requirements & develop everything keeping in mind a successful web presence comprising
                                robust architecture</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="d-flex justify-content-xl-end justify-content-center">
                            <img src="{{asset('admin/assets/image/webdevelop.png')}}" alt="" class="webprofile-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="company-section py-sm-5 py-3">
            <div class="container">
                <div class="compay-info text-center">
                    <h1 class="pb-4">Web Application Development Company</h1>

                    <p>We select an appropriate programming structure based on client requirements & develop everything
                        keeping in mind a successful web presence comprising robust architecture, maximum versatility &
                        best scope for future growth. Using object-oriented best practices, comprehensive code base &
                        coding guidelines, our team offers highly customizable solutions to meet the requirements of our
                        clients.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- work section -->
    <section>
        <div class="work-section py-5">
            <div class="container">
                <div class="work-heading pb-sm-5 pb-2">
                    <fieldset>
                        <legend>
                            <h1 class="px-sm-3">HOW WE WORK</h1>
                        </legend>
                    </fieldset>
                    <p>Our Web Development Technologies</p>
                </div>

                <div class="work-info">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 px-4 pb-4">
                            <div class="card work-card">
                                <div class="overlay-android overlay"></div>
                                <div class="d-flex px-4 pt-4 pb-3 align-items-center work-text">
                                    <img src="{{asset('admin/assets/image/web1.png')}}" alt="" class="me-4">
                                    <h3 class="mb-0">Front-end</h3>
                                </div>
                                <div class="card-body position-relative">
                                    <div class="work-box btn-center mb-0">
                                        <div class="work-info">
                                            <ul class="ps-4 work-list">
                                                <li><a href="#">React Js</a></li>
                                                <li><a href="#">Angular Js</a></li>
                                                <li><a href="#">NodeJs</a></li>
                                                <li><a href="#">Vue Js</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 px-4 pb-4">
                            <div class="card work-card">
                                <div class="overlay-android overlay"></div>
                                <div class="d-flex px-4 pt-4 pb-3 align-items-center work-text">
                                    <img src="{{asset('admin/assets/image/web2.png')}}" alt="" class="me-4">
                                    <h3 class="mb-0">Back-end</h3>
                                </div>
                                <div class="card-body position-relative">
                                    <div class="work-box btn-center mb-0">
                                        <div class="work-info d-flex">
                                            <ul class="ps-4 work-list">
                                                <li><a href="#">Node Js</a></li>
                                                <li><a href="#">.Net</a></li>
                                                <li><a href="#">Laravel</a></li>
                                                <li><a href="#">Python</a></li>
                                            </ul>


                                            <ul class="ps-5 work-list1">
                                                <li><a href="#" class="ms-sm-4 ms-3">Java</a></li>
                                                <li><a href="#" class="ms-sm-4 ms-3">PHP</a></li>
                                                <li><a href="#" class="ms-sm-4 ms-3">CodeIgniter</a></li>
                                                <li><a href="#" class="ms-sm-4 ms-3">Ruby on Rails</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 px-4 pb-4">
                            <div class="card work-card">
                                <div class="overlay-android overlay"></div>
                                <div class="d-flex px-4 pt-4 pb-3 align-items-center work-text">
                                    <img src="{{asset('admin/assets/image/web3.png')}}" alt="" class="me-4">
                                    <h3 class="mb-0">Database</h3>
                                </div>
                                <div class="card-body position-relative">
                                    <div class="work-box btn-center mb-0">
                                        <div class="work-info d-flex">
                                            <ul class="ps-4 work-list">
                                                <li><a href="#">MySQL</a></li>
                                                <li><a href="#">MongoDB</a></li>
                                                <li><a href="#">PostgreSQL</a></li>
                                            </ul>

                                            <ul class="ps-5 work-list1">
                                                <li><a href="#">MS-SQL</a></li>
                                                <li><a href="#">SQLite</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 px-4 pb-4">
                            <div class="card work-card">
                                <div class="overlay-android overlay"></div>
                                <div class="d-flex px-4 pt-4 pb-3 align-items-center work-text">
                                    <img src="{{asset('admin/assets/image/web4.png')}}" alt="" class="me-4">
                                    <h3 class="mb-0">Deployment</h3>
                                </div>
                                <div class="card-body position-relative">
                                    <div class="work-box btn-center mb-0">
                                        <div class="work-info">
                                            <ul class="ps-4 work-list">
                                                <li><a href="#">AWS</a></li>
                                                <li><a href="#">GCP</a></li>
                                                <li><a href="#">Azure</a></li>
                                                <li><a href="#">Digital Ocean</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 px-4 pb-4">
                            <div class="card work-card">
                                <div class="overlay-android overlay"></div>
                                <div class="d-flex px-4 pt-4 pb-3 align-items-center work-text">
                                    <img src="{{asset('admin/assets/image/web5.png')}}" alt="" class="me-4">
                                    <h3 class="mb-0">Unit Testing</h3>
                                </div>
                                <div class="card-body position-relative">
                                    <div class="work-box btn-center mb-0">
                                        <div class="work-info">
                                            <ul class="ps-4  work-list">
                                                <li><a href="#">Selenium</a></li>
                                                <li><a href="#">Jest</a></li>
                                                <li><a href="#">Jasmine</a></li>
                                                <li><a href="#">Mocha</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 px-4 pb-4">
                            <div class="card work-card">
                                <div class="overlay-android overlay"></div>
                                <div class="d-flex px-4 pt-4 pb-3 align-items-center work-text">
                                    <img src="{{asset('admin/assets/image/web6.png')}}" alt="" class="me-4">
                                    <h3 class="mb-0">Project Management
                                        Tool</h3>
                                </div>
                                <div class="card-body position-relative">
                                    <div class="work-box btn-center mb-0">
                                        <div class="work-info">
                                            <ul class="ps-4 work-list">
                                                <li><a href="#">Microsoft Team</a></li>
                                                <li><a href="#">Asana</a></li>
                                                <li><a href="#">Jira</a></li>
                                                <li><a href="#">Slack</a></li>
                                            </ul>
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


    <!-- Webdevelop Service -->


    <section>
        <div class="webservice-section">
            <div class="container">
                <div class="webservice-heading">
                    <h1>Why to opt for our Web Development Services</h1>
                </div>

                <div class="row py-sm-5 py-3">
                    <div class="col-lg-6">
                        <div class="webservice-info">
                            <ul class="ps-0 pt-sm-4">
                                <li>Technically strong team of 100+ domain experts carrying 10+ yrs of experience</li>
                                <li>Adherence to best coding guidelines & quality standards</li>
                                <li>Clean W3C validated code cooperative with multiple platforms & browsers</li>
                                <li>Highly maintainable website structure</li>
                                <li>Responsive user-friendly interfaces</li>
                                <li>Performance, load & stress testing before delivery</li>
                                <li>Up-to-date techniques implemented using latest technologies</li>
                                <li>Completely SEO optimized designs to boost rankings</li>
                                <li>Considerably less maintenance work</li>
                                <li>High-end security against malicious practices</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 pb-sm-0 pb-3">
                        <div>
                            <img src="{{asset('admin/assets/image/webservice-bg.png')}}" alt="" width="100%">
                        </div>
                    </div>
                </div>


                <div class="webservice-heading">
                    <h1>What would you get</h1>
                </div>

                <div class="row py-sm-5 py-3">
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('admin/assets/image/webservice-2.png')}}" alt="" width="100%">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="webservice-info">
                            <ul class="ps-0 pt-sm-4">
                                <li>Complete Functional & highly usable web applications matching to your busi- ess
                                    needs, requirements & expectations</li>
                                <li>Full control & full transparency of the development process backed with Seam- less
                                    communication</li>
                                <li>Smart & Open application structure allowing for high solution productivity &
                                    scalability</li>
                                <li>Great application maintainability enabling to reduce the total cost of ownership
                                </li>
                                <li>Mature QA systems throughout the entire software development life cycle</li>
                                <li>Deployment, Stabilization & Open-ended support & maintenance of the delivered
                                    application</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
