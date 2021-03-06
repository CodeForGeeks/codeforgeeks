<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Font Awesome Min JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <!-- Owl Theme Default CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <title>Welcome to Code For Geeks</title>
</head>

<body data-spy="scroll" data-offset="70">
    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="folding-cube">
            <div class="cube1 cube"></div>
            <div class="cube2 cube"></div>
            <div class="cube4 cube"></div>
            <div class="cube3 cube"></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Main Header Area -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light header-sticky">
        <div class="container">
            <a class="navbar-brand" href="index-eleven.html"><span>A</span>ddax</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#work">Work</a></li>
                    <li class="nav-item"><a class="nav-link" href="#price">Price</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Main Header Area -->

    <!-- Start Main Banner -->
    <div id="home" class="main-banner item-bg-one">

        <div class="creative-banner-three"></div>

        <div id="particles-js"></div>

        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="main-banner-text">
                                <h4>The Best Website to learn Web technologies</h4>
                                <h1>Welcome to world of
                                    <a href="" class="typewrite" data-period="2000" data-type='[ "Geeks.", "Programmer.", "Developer.", "Software Engineers." ]'>
										<span class="wrap"></span>
										</a>
                                </h1>
                                <p>Be the Web and Software Developer you gonna be proud of. And practice daily for the positive outcomes.</p>
                                <a href="#welcome" class="btn btn-primary">Get Started</a>
                                <a href="#work" class="btn btn-primary view-work">View Work</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner -->

    <!-- Start Welcome Area -->
    <section id="welcome" class="welcome-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h4>The Best Website to learn Web technologies</h4>
                <h2>Welcome to <span>Code For Geeks</span></h2>
                <p>We provide you with the finest, & Easiest and quality code of Web and Software Development.</p>
            </div>

            <div class="row">
                @foreach ($mycourses as $eachcourse)
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-box">
                        <i class="fa fa-life-ring icon"></i>
                        <h3>{{$eachcourse->course_name}}</h3>
                        <p>{{$eachcourse->course_description}}</p>
                        <a href="#about" title="Read More" class="link-btn"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Welcome Area -->

    <!-- Start About Area -->
    <section id="about" class="about-area ptb-80 bg-222222">
        <div class="container">
            <div class="section-title">
                <h2>About <span>Code For Geeks</span></h2>
                <p>We offer the best courses of web development and software development. (A complete guide to Software engineering)</p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-md-12">
                    <div class="about-addax">
                        <div class="section-title">
                            <h2>WHAT WE <span>OFFER?</span></h2>
                            <p>We offer the best courses of web development and software development. (A complete guide to Software engineering)</p>
                        </div>

                        <ul class="pull-left">
                            <li><i class="fa fa-check"></i>Basic HTML / CSS / Javascript</li>
                            <li><i class="fa fa-check"></i>Frontend Desiging</li>
                            <li><i class="fa fa-check"></i>Backend Development</li>
                        </ul>

                        <ul>
                            <li><i class="fa fa-check"></i>AWS Cloud Service</li>
                            <li><i class="fa fa-check"></i>Firebase</li>
                            <li><i class="fa fa-check"></i>GCP Cloud Functions</li>
                        </ul>

                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="about-video">
                        <img src="{{asset('assets/img/about.jpg')}}" alt="about">
                        <div class="video-btn">
                            <a href="https://www.youtube.com/watch?v=GfLccvR0nVk" class="popup-youtube"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Strategy Area -->
    <section class="strategy-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="image">
                        <img src="{{asset('assets/img/about-strategy.jpg')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-7">
                    <div class="about-strategy ptb-80">
                        <div class="section-title">
                            <h4>Highly Creative Solutions</h4>
                            <h2>About <span>Strategy</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>

                        <ul>
                            <li><i class="fa fa-check"></i>Creative Design</li>
                            <li><i class="fa fa-check"></i>Retina Ready</li>
                            <li><i class="fa fa-check"></i>Responsive Design</li>
                            <li><i class="fa fa-check"></i>Modern Design</li>
                            <li><i class="fa fa-check"></i>Awesome Design</li>
                            <li><i class="fa fa-check"></i>Digital Marketing & Branding</li>
                        </ul>

                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Strategy Area -->

    <!-- Start Who We Are Area -->
    <section class="who-we-are ptb-80 bg-222222">
        <div class="container">
            <div class="section-title">
                <h2>On what <span>Technologies</span> do we teach?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                @foreach ($technologies as $eachtechnology)
                <div class="col-lg-4 col-md-6">
                    <div class="single-who-we-are">
                            {!! $eachtechnology->technology_icon !!}
                            <h4>{{$eachtechnology->technology_name}}</h4>
                            <p>{{$eachtechnology->technology_description}}</p>
                            <span>{{$eachtechnology->technology_id}}</span>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
    <!-- End Who We Are Area -->

    <!-- Start CTR Area -->
    <section class="ctr-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title mb-0">
                        <h4>Looking for exclusive services?</h4>
                        <h2>Get The Best For Your Business</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#contact" class="btn btn-primary">Contact</a>
                        <a href="#work" class="btn btn-primary view-work">View Work</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End CRT Area -->

    <!-- Start Skill Area -->
    <section class="skill-area ptb-80 bg-222222">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-skill">
                        <div class="section-title">
                            <h2>Some of Our <span>Skills</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>

                        <h3 class="progress-title">Branding</h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:92%;">
                                <div class="progress-value">92%</div>
                            </div>
                        </div>

                        <h3 class="progress-title">Marketing</h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:97%;">
                                <div class="progress-value">97%</div>
                            </div>
                        </div>

                        <h3 class="progress-title">Design</h3>
                        <div class="progress">
                            <div class="progress-bar" style="width:90%;">
                                <div class="progress-value">90%</div>
                            </div>
                        </div>

                        <h3 class="progress-title">Development</h3>
                        <div class="progress mb-0">
                            <div class="progress-bar" style="width:95%;">
                                <div class="progress-value">95%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="skill-video">
                        <img src="{{asset('assets/img/video-img.jpg')}}" alt="video-img">
                        <div class="video-btn">
                            <a href="https://www.youtube.com/watch?v=Pj80xAVP6QM" class="popup-youtube"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skill Area -->

    <!-- Start Fun Fact Area -->
    <section class="funFacts-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="funFact">
                        <i class="fa fa-smile-o"></i>
                        <h2 class="count">540</h2>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="funFact">
                        <i class="fa fa-shield"></i>
                        <h2 class="count">980</h2>
                        <p>Completed Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="funFact">
                        <i class="fa fa-trophy"></i>
                        <h2 class="count">46</h2>
                        <p>Wining Awards</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="funFact">
                        <i class="fa fa-users"></i>
                        <h2><span class="count">50</span></h2>
                        <p>Team Members</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Fact Area -->

    <!-- Start Team Area -->
    <section id="team" class="team-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h4>Meet Addax</h4>
                <h2>Our Creative <span>Team</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="team-slider">
                    @foreach ($team as $eachmember)
                    <div class="col-lg-12 col-md-12">
                        <div class="our-team">
                            <div class="pic">
                                <img src="{{asset('images/'.$eachmember->team_image)}}" alt="team-img">
                            </div>

                            <div class="team-content">
                                <h3 class="title">{{$eachmember->team_name}}</h3>
                                <span class="post">{{$eachmember->team_position}}</span>
                            </div>

                            <div class="social">
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Area -->

    <!-- Start How We Work -->
    <section class="how-work ptb-80 bg-222222">
        <div class="container">
            <div class="section-title">
                <h2>How We <span>Work</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-how-work">
                        <h3>01.</h3>
                        <h4>Planing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-how-work">
                        <h3>02.</h3>
                        <h4>Designing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-how-work">
                        <h3>03.</h3>
                        <h4>Product Launch</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End How We Work -->

    <!-- Start Services Area -->
    <section id="services" class="services-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h2>Our <span>Services</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="services-img">
                            <img src="{{asset('assets/img/services-img1.jpg')}}" alt="services-img">

                            <div class="icon">
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                        </div>

                        <div class="services-content">
                            <h3>Web Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="services-img">
                            <img src="{{asset('assets/img/services-img2.jpg')}}" alt="services-img">

                            <div class="icon">
                                <i class="fa fa-linode"></i>
                            </div>
                        </div>

                        <div class="services-content">
                            <h3>Branding</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="services-img">
                            <img src="{{asset('assets/img/services-img3.jpg')}}" alt="services-img">

                            <div class="icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>

                        <div class="services-content">
                            <h3>Marketing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="services-img">
                            <img src="{{asset('assets/img/services-img4.jpg')}}" alt="services-img">

                            <div class="icon">
                                <i class="fa fa-line-chart"></i>
                            </div>
                        </div>

                        <div class="services-content">
                            <h3>Analytics</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="services-img">
                            <img src="{{asset('assets/img/services-img5.jpg')}}" alt="services-img">

                            <div class="icon">
                                <i class="fa fa-anchor"></i>
                            </div>
                        </div>

                        <div class="services-content">
                            <h3>Development</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="services-img">
                            <img src="{{asset('assets/img/services-img6.jpg')}}" alt="services-img">

                            <div class="icon">
                                <i class="fa fa-headphones"></i>
                            </div>
                        </div>

                        <div class="services-content">
                            <h3>Ui & Ux Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="services-img">
                            <img src="{{asset('assets/img/services-img7.jpg')}}" alt="services-img">

                            <div class="icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                        </div>

                        <div class="services-content">
                            <h3>Responsive Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="services-img">
                            <img src="{{asset('assets/img/services-img8.jpg')}}" alt="services-img">

                            <div class="icon">
                                <i class="fa fa-camera-retro"></i>
                            </div>
                        </div>

                        <div class="services-content">
                            <h3>Photography</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-services">
                        <div class="services-img">
                            <img src="{{asset('assets/img/services-img9.jpg')}}" alt="services-img">

                            <div class="icon">
                                <i class="fa fa-life-ring"></i>
                            </div>
                        </div>

                        <div class="services-content">
                            <h3>Custom Support</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Area -->

    <!-- Start Why We Are Different -->
    {{--  <section class="why-we-different ptb-80 bg-222222">
        <div class="container">
            <div class="section-title">
                <h2>Why We <span>Are Different</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="tabset">
                        <!-- Tab 1 -->
                        <input type="radio" name="tabset" id="tab1" aria-controls="speed-flexibility" checked>
                        <label for="tab1">Speed , flexibility</label>
                        <!-- Tab 2 -->
                        <input type="radio" name="tabset" id="tab2" aria-controls="profeesional-work">
                        <label for="tab2">Profeesional work</label>
                        <!-- Tab 3 -->
                        <input type="radio" name="tabset" id="tab3" aria-controls="experienced-staff">
                        <label for="tab3">Experienced Staff</label>
                        <!-- Tab 4 -->
                        <input type="radio" name="tabset" id="tab4" aria-controls="custom-support">
                        <label for="tab4">Custom Support</label>

                        <div class="tab-panels">
                            <section id="speed-flexibility" class="tab-panel">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="why-we-different-text">
                                            <h4>Speed , flexibility</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            <ul>
                                                <li><i class="fa fa-check"></i>Creative Design</li>
                                                <li><i class="fa fa-check"></i>Retina Ready</li>
                                                <li><i class="fa fa-check"></i>Responsive Design</li>
                                                <li><i class="fa fa-check"></i>Modern Design</li>
                                                <li><i class="fa fa-check"></i>Awesome Design</li>
                                                <li><i class="fa fa-check"></i>Digital Marketing & Branding</li>
                                            </ul>

                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="why-we-different-img">
                                            <img src="{{asset('assets/img/different-img2.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section id="profeesional-work" class="tab-panel">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="why-we-different-text">
                                            <h4>Profeesional work</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            <ul>
                                                <li><i class="fa fa-check"></i>Creative Design</li>
                                                <li><i class="fa fa-check"></i>Retina Ready</li>
                                                <li><i class="fa fa-check"></i>Responsive Design</li>
                                                <li><i class="fa fa-check"></i>Modern Design</li>
                                                <li><i class="fa fa-check"></i>Awesome Design</li>
                                                <li><i class="fa fa-check"></i>Digital Marketing & Branding</li>
                                            </ul>

                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="why-we-different-img">
                                            <img src="{{asset('assets/img/different-img1.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section id="experienced-staff" class="tab-panel">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="why-we-different-text">
                                            <h4>Experienced staff</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            <ul>
                                                <li><i class="fa fa-check"></i>Creative Design</li>
                                                <li><i class="fa fa-check"></i>Retina Ready</li>
                                                <li><i class="fa fa-check"></i>Responsive Design</li>
                                                <li><i class="fa fa-check"></i>Modern Design</li>
                                                <li><i class="fa fa-check"></i>Awesome Design</li>
                                                <li><i class="fa fa-check"></i>Digital Marketing & Branding</li>
                                            </ul>

                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="why-we-different-img">
                                            <img src="{{asset('assets/img/different-img3.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section id="custom-support" class="tab-panel">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="why-we-different-text">
                                            <h4>24/7 support</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                                            <ul>
                                                <li><i class="fa fa-check"></i>Creative Design</li>
                                                <li><i class="fa fa-check"></i>Retina Ready</li>
                                                <li><i class="fa fa-check"></i>Responsive Design</li>
                                                <li><i class="fa fa-check"></i>Modern Design</li>
                                                <li><i class="fa fa-check"></i>Awesome Design</li>
                                                <li><i class="fa fa-check"></i>Digital Marketing & Branding</li>
                                            </ul>

                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="why-we-different-img">
                                            <img src="{{asset('assets/img/different-img4.jpg')}}" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}
    <!-- End Why Are Different -->

    <!-- Start Work Area -->
    {{--  <section id="work" class="work-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h2>Our <span>Work</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="shorting-menu">
                        <button class="filter" data-filter="all">All</button>
                        <button class="filter" data-filter=".brand">Brand</button>
                        <button class="filter" data-filter=".design">Design</button>
                        <button class="filter" data-filter=".graphic">Graphic</button>
                        <button class="filter" data-filter=".photoshop">Photoshop</button>
                        <button class="filter" data-filter=".illustrator">Illustrator</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="shorting">
            <div class="row m-0">
                <div class="col-lg-4 col-md-6 mix brand p-0">
                    <div class="single-work">
                        <img src="{{asset('assets/img/work-img1.jpg')}}" alt="work-img">

                        <div class="work-content">
                            <h4>Creative Design</h4>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li>.</li>
                                <li><a href="#">Brand</a></li>
                            </ul>
                        </div>

                        <a href="{{asset('assets/img/work-img1.jpg')}}" class="popup-btn"><i class="fa fa-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mix design p-0">                  <div class="single-work">
                        <img src="{{asset('assets/img/work-img2.jpg')}}" alt="work-img">

                        <div class="work-content">
                            <h4>Creative Design</h4>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li>.</li>
                                <li><a href="#">Brand</a></li>
                            </ul>
                        </div>

                        <a href="{{asset('assets/img/work-img2.jpg')}}" class="popup-btn"><i class="fa fa-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mix graphic p-0">
                    <div class="single-work">
                        <img src="{{asset('assets/img/work-img3.jpg')}}" alt="work-img">

                        <div class="work-content">
                            <h4>Creative Design</h4>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li>.</li>
                                <li><a href="#">Brand</a></li>
                            </ul>
                        </div>

                        <a href="{{asset('assets/img/work-img3.jpg')}}" class="popup-btn"><i class="fa fa-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mix photoshop p-0">
                    <div class="single-work">
                        <img src="{{asset('assets/img/work-img4.jpg')}}" alt="work-img">

                        <div class="work-content">
                            <h4>Creative Design</h4>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li>.</li>
                                <li><a href="#">Brand</a></li>
                            </ul>
                        </div>

                        <a href="{{asset('assets/img/work-img4.jpg')}}" class="popup-btn"><i class="fa fa-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mix design p-0">
                    <div class="single-work">
                        <img src="{{asset('assets/img/work-img5.jpg')}}" alt="work-img">

                        <div class="work-content">
                            <h4>Creative Design</h4>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li>.</li>
                                <li><a href="#">Brand</a></li>
                            </ul>
                        </div>

                        <a href="{{asset('assets/img/work-img5.jpg')}}" class="popup-btn"><i class="fa fa-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mix illustrator p-0">
                    <div class="single-work">
                        <img src="{{asset('assets/img/work-img6.jpg')}}" alt="work-img">

                        <div class="work-content">
                            <h4>Creative Design</h4>
                            <ul>
                                <li><a href="#">Design</a></li>
                                <li>.</li>
                                <li><a href="#">Brand</a></li>
                            </ul>
                        </div>

                        <a href="{{asset('assets/img/work-img6.jpg')}}" class="popup-btn"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}
    <!-- End Work Area -->

    <!-- Start Price Area -->
    <section id="price" class="price-area ptb-80 bg-222222">
        <div class="container">
            <div class="section-title">
                <h2>Our Products <span>Pricing</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="pricingTable">
                        <h3 class="title">Basic</h3>
                        <div class="price-value">
                            <span class="currency">$</span>
                            <span class="amount">39.00</span>
                            <span class="month">/Per month</span>
                        </div>
                        <ul class="pricing-content">
                            <li><i class="fa fa-check"></i> Any Ware Access</li>
                            <li><i class="fa fa-check"></i> 10 GB Hosting</li>
                            <li><i class="fa fa-check"></i> 2 Unique Users</li>
                            <li><i class="fa fa-check"></i> 12 GB Capacity</li>
                            <li><i class="fa fa-check"></i> Weekly Backups</li>
                            <li><i class="fa fa-check"></i> Support 24 / hour</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Order Now</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="pricingTable">
                        <h3 class="title">Standard</h3>
                        <div class="price-value">
                            <span class="currency">$</span>
                            <span class="amount">49.00</span>
                            <span class="month">/Per month</span>
                        </div>
                        <ul class="pricing-content">
                            <li><i class="fa fa-check"></i> Any Ware Access</li>
                            <li><i class="fa fa-check"></i> 15 GB Hosting</li>
                            <li><i class="fa fa-check"></i> 5 Unique Users</li>
                            <li><i class="fa fa-check"></i> 17 GB Capacity</li>
                            <li><i class="fa fa-check"></i> Weekly Backups</li>
                            <li><i class="fa fa-check"></i> Support 24 / hour</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Order Now</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="pricingTable">
                        <h3 class="title">Premium</h3>
                        <div class="price-value">
                            <span class="currency">$</span>
                            <span class="amount">59.00</span>
                            <span class="month">/Per month</span>
                        </div>
                        <ul class="pricing-content">
                            <li><i class="fa fa-check"></i> Any Ware Access</li>
                            <li><i class="fa fa-check"></i> 20 GB Hosting</li>
                            <li><i class="fa fa-check"></i> 10 Unique Users</li>
                            <li><i class="fa fa-check"></i> 21 GB Capacity</li>
                            <li><i class="fa fa-check"></i> Weekly Backups</li>
                            <li><i class="fa fa-check"></i> Support 24 / hour</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Price Area -->

    <!-- Start FAQ Area -->
    <section class="faq-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked <span>Question</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h5 class="mb-0">
                                        Where should I incorporate my business? <i class="fa fa-plus"></i>
                                    </h5>
                                </a>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                                <div class="card-body">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h5 class="mb-0">
                                        How much should I capitalize my business with at the beginning? <i class="fa fa-plus"></i>
                                    </h5>
                                </a>
                            </div>

                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
                                <div class="card-body">
                                    Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Ut tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus
                                    auctor velit at lacus blandit, commodo iaculis justo viverra. Etiam vitae est arcu. Mauris vel congue dolor. Aliquam eget mi mi.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h5 class="mb-0">
                                        How big should a stock option pool for employees be? <i class="fa fa-plus"></i>
                                    </h5>
                                </a>
                            </div>

                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionEx">
                                <div class="card-body">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="headingFour">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <h5 class="mb-0">
                                        How can I get a venture capitalist to pay attention to me? <i class="fa fa-plus"></i>
                                    </h5>
                                </a>
                            </div>

                            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordionEx">
                                <div class="card-body">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-0">
                            <div class="card-header" role="tab" id="headingFive">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <h5 class="mb-0">
                                        How can I come up with a great name for my business <i class="fa fa-plus"></i>
                                    </h5>
                                </a>
                            </div>

                            <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordionEx">
                                <div class="card-body">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12">
                    <div class="image"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ Area -->

    <!-- Start Testimonials Area -->
    <section class="testimonials-area ptb-80 bg-222222">
        <div class="container">
            <div class="section-title">
                <h2>Our Clients <span>Feedback</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                @foreach ($testimonials as $eachtestimonial)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-feedback">
                            <div class="client-info">
                                <div class="client-pic">
                                    <img src="{{asset('thumbnail/'.$eachtestimonial->testimonial_client_image)}}" alt="client-avatar">
                                </div>

                                <div class="client-title">
                                    <h4>{{$eachtestimonial->testimonial_client}}</h4>
                                    <h5>{{$eachtestimonial->testimonial_position}}</h5>
                                </div>
                            </div>

                            <p>{{$eachtestimonial->testimonial_message}}</p>

                            <span><i class="fa fa-quote-left"></i></span>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- End Testimonials Area -->

    <!-- Start Blog Area -->
    <section id="blog" class="blog-area ptb-80">
        <div class="container">
            <div class="section-title">
                <h4>Our News</h4>
                <h2>Latest Blog <span>Posts</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="blog-slider">
                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-item" style="background-image: url(assets/img/services-img1.jpg)">
                            <span>Business & Tech</span>
                            <h4><a href="single-post.html">The best gear for starting a small business</a></h4>
                            <p> Fusce vitae nulla at lorem pret ium semper. Curab itur laoreet, lectus ac digni ssim vest ibul lorem pretium semper lectus ac digni...</p>

                            <a href="single-post.html" title="Read More" class="link-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-item" style="background-image: url(assets/img/services-img2.jpg)">
                            <span>Business & Tech</span>
                            <h4><a href="single-post.html">Get your first business suit right with these tips</a></h4>
                            <p> Fusce vitae nulla at lorem pret ium semper. Curab itur laoreet, lectus ac digni ssim vest ibul lorem pretium semper lectus ac digni...</p>

                            <a href="single-post.html" title="Read More" class="link-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-item" style="background-image: url(assets/img/services-img3.jpg)">
                            <span>Design & IT</span>
                            <h4><a href="single-post.html">How to Make a Font - Font Design Full Process</a></h4>
                            <p> Fusce vitae nulla at lorem pret ium semper. Curab itur laoreet, lectus ac digni ssim vest ibul lorem pretium semper lectus ac digni...</p>

                            <a href="single-post.html" title="Read More" class="link-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-item" style="background-image: url(assets/img/services-img4.jpg)">
                            <span>Marketing & Trend</span>
                            <h4><a href="single-post.html">10 Hot Marketing Trends You Need to Implement in 2018</a></h4>
                            <p> Fusce vitae nulla at lorem pret ium semper. Curab itur laoreet, lectus ac digni ssim vest ibul lorem pretium semper lectus ac digni...</p>

                            <a href="single-post.html" title="Read More" class="link-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="single-blog-item" style="background-image: url(assets/img/services-img5.jpg)">
                            <span>Business & Tech</span>
                            <h4><a href="single-post.html">How to Be a Work From Home Professional</a></h4>
                            <p> Fusce vitae nulla at lorem pret ium semper. Curab itur laoreet, lectus ac digni ssim vest ibul lorem pretium semper lectus ac digni...</p>

                            <a href="single-post.html" title="Read More" class="link-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Partner Area -->
    <div class="partner-area ptb-80 bg-222222">
        <div class="container">
            <div class="row">
                <div class="partner-slider">
                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <a href="#"><img src="{{asset('assets/img/partner-1.png')}}" alt="partner"></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <a href="#"><img src="{{asset('assets/img/partner-2.png')}}" alt="partner"></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <a href="#"><img src="{{asset('assets/img/partner-3.png')}}" alt="partner"></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <a href="#"><img src="{{asset('assets/img/partner-4.png')}}" alt="partner"></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <a href="#"><img src="{{asset('assets/img/partner-5.png')}}" alt="partner"></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <a href="#"><img src="{{asset('assets/img/partner-6.png')}}" alt="partner"></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <a href="#"><img src="{{asset('assets/img/partner-1.png')}}" alt="partner"></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <a href="#"><img src="{{asset('assets/img/partner-2.png')}}" alt="partner"></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <a href="#"><img src="{{asset('assets/img/partner-3.png')}}" alt="partner"></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <a href="#"><img src="{{asset('assets/img/partner-4.png')}}" alt="partner"></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <a href="#"><img src="{{asset('assets/img/partner-5.png')}}" alt="partner"></a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="item">
                            <a href="#"><img src="{{asset('assets/img/partner-6.png')}}" alt="partner"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Start Subscribe Area-->
    <section class="subscribe-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="newsletter">
                        <h4>Join Our Newsletter</h4>
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Your Email Address" name="EMAIL" required autocomplete="off">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe Area-->

    <!-- Start Contact Area -->
    <section id="contact" class="contact-area ptb-80 bg-222222">
        <div class="container">
            <div class="section-title">
                <h4>Get in Touch</h4>
                <h2>Let's <span>Contact</span> Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div id="map"></div>

                    <div class="contact-info">
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Exercisplan 4, 111 49 Stockholm, Sweden</li>
                            <li><i class="fa fa-envelope"></i> <a href="#">addax@gmail.com</a></li>
                            <li><i class="fa fa-phone"></i> <a href="#">(+124)412-2445515</a></li>
                            <li><i class="fa fa-fax"></i> <a href="#">617-241-60055</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="contact-form">
                        <h4>Stay Connected</h4>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="number">Phone Number</label>
                                        <input type="text" class="form-control" name="number" id="number" required data-error="Please enter your number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Start Footer Area -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h4><a href="index-eleven.html"><span>a</span>ddax</a></h4>
                    <ul>
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-skype"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                    <p>Copyright <i class="fa fa-copyright"></i> 2019 All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <div class="go-top"><i class="fa fa-angle-up"></i></div>

    <!-- JQuery Min JS -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Popper Min JS -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <!-- Bootstrap Min JS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- WayPonits JS -->
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <!-- CounterUp JS -->
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Mixitup min JS -->
    <script src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>
    <!-- Jquery Ripples Min JS -->
    <script src="{{asset('assets/js/jquery.ripples-min.js')}}"></script>
    <!-- Jquery Particles Min JS -->
    <script src="{{asset('assets/js/particles.min.js')}}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
    <!-- Contact Form Min JS -->
    <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
    <!-- ajaxChimp Min JS -->
    <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <!-- Map API JS FILES -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApghCIIx9MpQhA768sKXxvR_Okg0SF2k4&callback=initMap"></script>
    <!-- Addax Map JS FILE -->
    <script src="{{asset('assets/js/addax-map.js')}}"></script>
    <!-- WoW JS -->
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
