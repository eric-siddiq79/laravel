<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Lawyer HTML-5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
   </head>
   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-1 col-md-1">
                        <div class="logo">
                        <a href="index.html"><img src="{{asset('/assets/img/logo/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8 col-md-6">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">  
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="caseStudies.html">Case Studies</a></li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single-blog.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">Element</a></li>
                                            <li><a href="case_details.html">Case Details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>             
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <!-- Header-btn -->
                        <div class="header-btn d-none d-lg-block f-right">
                            <a href="#" class="btn header-btn">Free Consultation</a>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>

    

        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center" data-background="{{asset('/assets/img/hero/h1_hero.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <p data-animation="fadeInUp" data-delay=".6s">Professional lawyers</p>
                                    <h1 data-animation="fadeInUp" data-delay=".4s" >We will fight<br>
                                        for you like a friend </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-bottom"  >
                        <div class="slider-bottom-cap" data-animation="fadeInLeft" data-delay=".6s">
                            <p>Schedule a Free Consultation 24/7</p>
                            <span>01654.066.456</span>
                        </div>
                        <div class="slider-video d-flex align-items-center" data-animation="fadeInRight" data-delay=".8s">
                            <a class="popup-video ani-btn" href="https://www.youtube.com/watch?v=1aP-TXUpNoU">
                            <img src="assets/img/icon/video_btn.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center" data-background="{{asset('/assets/img/hero/h1_hero.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="hero__caption">
                                    <p data-animation="fadeInUp" data-delay=".6s">Professional lawyers</p>
                                    <h1 data-animation="fadeInUp" data-delay=".4s" >We will fight<br>
                                        for you like a friend </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-bottom"  >
                        <div class="slider-bottom-cap" data-animation="fadeInLeft" data-delay=".4s">
                            <p>Schedule a Free Consultation 24/7</p>
                            <span>01654.066.456</span>
                        </div>
                        <div class="slider-video d-flex align-items-center" data-animation="fadeInRight" data-delay=".8s">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU">
                            <img src="{{asset('/assets/img/icon/video_btn.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- slider Area End-->

        <!-- Legal Practice Area start -->
        <div class="legal-practice-area section-padding30">
            <div class="container">
                  <!--Section Tittle  -->
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-70">
                            <h2>Legal Practice Area.</h2>
                        </div>
                    </div>
                </div>
                <!-- single items -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-practice mb-30">
                            <div class="practice-img">
                                <img src="{{asset('/assets/img/legal/legal_1.png')}}" alt="">

                                <!-- "practice-icon-->
                                <div class="practice-icon">
                                    <i class="flaticon-care"></i>
                                </div>
                            </div>
                            <div class="practice-caption">
                                <h4><a href="#">Vehicle Accident</a></h4>
                                <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod tem incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-practice mb-30">
                            <div class="practice-img">
                                <img src="{{asset('/assets/img/legal/legal_2.png')}}" alt="">

                                <!-- "practice-icon-->
                                <div class="practice-icon">
                                    <i class="flaticon-care"></i>
                                </div>
                            </div>
                            <div class="practice-caption">
                                <h4><a href="#">Health Law</a></h4>
                                <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod tem incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-practice mb-30">
                            <div class="practice-img">
                                <img src="{{asset('/assets/img/legal/legal_3.png')}}" alt="">

                                <!-- "practice-icon-->
                                <div class="practice-icon">
                                    <i class="flaticon-care"></i>
                                </div>
                            </div>
                            <div class="practice-caption">
                                <h4><a href="#">Insurance Law</a></h4>
                                <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit, sed do eiusmod tem incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Legal Practice Area End-->

        <!-- About Law Start-->
        <div class="about-low-area about-bg about-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <!-- section tittle -->
                        <div class="section-tittle section-tittle-l mb-70">
                            <h2>About Just Law</h2>
                        </div>
                        <div class="about-caption mb-100">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                           <!-- Counter Up -->
                            <div class="count-clients">
                                <div class="single-counter text-center">
                                    <span class="counter">250</span>
                                    <p>Happy Clients</p>
                                </div>
                                <div class="single-counter text-center">
                                    <span class="counter">920</span>
                                    <p>Wining Case</p>
                                </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img f-left">
                                <img src="{{asset('/assets/img/about/about-low-front.jpg')}}" alt="">
                            </div>
                            <div class="about-back-img f-right d-none d-md-block">
                                <img src="{{asset('/assets/img/about/about-low-back.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Law End-->

        <!-- Contact form Start -->
        <div class="contact-form bg-height pb-160" data-background="{{asset('/assets/img/about/contact_bg.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                        <div class="form-wrapper">
                        <!--Section Tittle  -->
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle-f text-center mb-70">
                                        <h2>Free Consultation</h2>
                                    </div>
                                </div>
                            </div>
                            <!--End Section Tittle  -->
                            <form id="contact-form" action="{{ route('saveConsultation') }}" method="POST">
                            <div class="row">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="email" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-30">
                                    <div class="select-itms">
                                        <select name="select" id="select2">
                                            <option value="">Health Law</option>
                                            <option value="">Arafath Miya</option>
                                            <option value="">Shakil Miya</option>
                                            <option value="">saiful islam</option>
                                            <option value="">Tamim Sharker</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="Email" name="subject" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-30">
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </div>
                                   <div class="submit-info">
                                        <button class="submit-btn2" type="submit">Submit Now</button>
                                   </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact form End -->

        <!-- Recent-case-area Start -->
        <section class="recent-case-area section-padding30">
            <div class="container">
                <!--Section Tittle  -->
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-70">
                            <h2>Recent Case Studies</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="properties__button">
                            <!--Nav Button  -->
                            <nav>                                                                     
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Vehicle Accident</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Health Law</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Insurance Law </a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false"> Bankruptcy</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                         </div>
                    </div>
                </div>
                    <!-- Nav Card -->
                    <div class="tab-content" id="nav-tabContent">
                        <!-- card one -->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-practice mb-30">
                                        <div class="practice-img">
                                            <img src="{{asset('/assets/img/legal/legal_1.png')}}" alt="">
                                            <!-- "practice-icon-->
                                            <div class="practice-icon">
                                                <span>Accidental</span>
                                            </div>
                                        </div>
                                        <div class="practice-caption2">
                                            <h4>Car Accident Insurance Critical Case</h4>
                                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor incididunt ut labore.</p>
                                            <a href="case_details.html" class="read-more1">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-practice mb-30">
                                        <div class="practice-img">
                                            <img src="{{asset('/assets/img/legal/legal_2.png')}}" alt="">
                                            <!-- "practice-icon-->
                                            <div class="practice-icon">
                                                <span>Devorce</span>
                                            </div>
                                        </div>
                                        <div class="practice-caption2">
                                            <h4>Legal Separation & Devorce Case</h4>
                                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor incididunt ut labore.</p>
                                            <a href="case_details.html" class="read-more1">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-practice mb-30">
                                        <div class="practice-img">
                                            <img src="{{asset('/assets/img/legal/legal_3.png')}}" alt="">
                                            <!-- "practice-icon-->
                                            <div class="practice-icon">
                                                <span>Study</span>
                                            </div>
                                        </div>
                                        <div class="practice-caption2">
                                            <h4>Boys Case Study Critical Family Case</h4>
                                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor incididunt ut labore.</p>
                                            <a href="case_details.html" class="read-more1">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card two -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-practice mb-30">
                                        <div class="practice-img">
                                            <img src="{{asset('/assets/img/legal/legal_2.png')}}" alt="">
                                            <!-- "practice-icon-->
                                            <div class="practice-icon">
                                                <span>Devorce</span>
                                            </div>
                                        </div>
                                        <div class="practice-caption2">
                                            <h4>Legal Separation & Devorce Case</h4>
                                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor incididunt ut labore.</p>
                                            <a href="case_details.html" class="read-more1">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-practice mb-30">
                                        <div class="practice-img">
                                            <img src="{{asset('/assets/img/legal/legal_1.png')}}" alt="">
                                            <!-- "practice-icon-->
                                            <div class="practice-icon">
                                                <span>Accidental</span>
                                            </div>
                                        </div>
                                        <div class="practice-caption2">
                                            <h4>Car Accident Insurance Critical Case</h4>
                                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor incididunt ut labore.</p>
                                            <a href="case_details.html" class="read-more1">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-practice mb-30">
                                        <div class="practice-img">
                                            <img src="{{asset('/assets/img/legal/legal_3.png')}}" alt="">
                                            <!-- "practice-icon-->
                                            <div class="practice-icon">
                                                <span>Study</span>
                                            </div>
                                        </div>
                                        <div class="practice-caption2">
                                            <h4>Boys Case Study Critical Family Case</h4>
                                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor incididunt ut labore.</p>
                                            <a href="case_details.html" class="read-more1">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card three -->
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-practice mb-30">
                                        <div class="practice-img">
                                            <img src="{{asset('/assets/img/legal/legal_3.png')}}" alt="">
                                            <!-- "practice-icon-->
                                            <div class="practice-icon">
                                                <span>Study</span>
                                            </div>
                                        </div>
                                        <div class="practice-caption2">
                                            <h4>Boys Case Study Critical Family Case</h4>
                                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor incididunt ut labore.</p>
                                            <a href="case_details.html" class="read-more1">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-practice mb-30">
                                        <div class="practice-img">
                                            <img src="{{asset('/assets/img/legal/legal_1.png')}}" alt="">
                                            <!-- "practice-icon-->
                                            <div class="practice-icon">
                                                <span>Accidental</span>
                                            </div>
                                        </div>
                                        <div class="practice-caption2">
                                            <h4>Car Accident Insurance Critical Case</h4>
                                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor incididunt ut labore.</p>
                                            <a href="case_details.html" class="read-more1">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-practice mb-30">
                                        <div class="practice-img">
                                            <img src="{{asset('/assets/img/legal/legal_2.png')}}" alt="">
                                            <!-- "practice-icon-->
                                            <div class="practice-icon">
                                                <span>Devorce</span>
                                            </div>
                                        </div>
                                        <div class="practice-caption2">
                                            <h4>Legal Separation & Devorce Case</h4>
                                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor incididunt ut labore.</p>
                                            <a href="case_details.html" class="read-more1">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card foure -->
                        <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-practice mb-30">
                                        <div class="practice-img">
                                            <img src="assets/img/legal/legal_2.png" alt="">
                                            <!-- "practice-icon-->
                                            <div class="practice-icon">
                                                <span>Devorce</span>
                                            </div>
                                        </div>
                                        <div class="practice-caption2">
                                            <h4>Legal Separation & Devorce Case</h4>
                                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor incididunt ut labore.</p>
                                            <a href="case_details.html" class="read-more1">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-practice mb-30">
                                        <div class="practice-img">
                                            <img src="assets/img/legal/legal_1.png" alt="">
                                            <!-- "practice-icon-->
                                            <div class="practice-icon">
                                                <span>Accidental</span>
                                            </div>
                                        </div>
                                        <div class="practice-caption2">
                                            <h4>Car Accident Insurance Critical Case</h4>
                                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor incididunt ut labore.</p>
                                            <a href="case_details.html" class="read-more1">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-practice mb-30">
                                        <div class="practice-img">
                                            <img src="assets/img/legal/legal_3.png" alt="">
            
                                            <!-- "practice-icon-->
                                            <div class="practice-icon">
                                                <span>Study</span>
                                            </div>
                                        </div>
                                        <div class="practice-caption2">
                                            <h4>Boys Case Study Critical Family Case</h4>
                                            <p>Lorem ipsum dolor sit amet, tetur adipiscing elit, sed do eiusmodmpor incididunt ut labore.</p>
                                            <a href="case_details.html" class="read-more1">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Nav Card -->
                </div>
        </section>
        <!-- Recent-case-area End -->

        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding" data-background="{{asset('/assets/img/testmonial/testi_bg.png')}}">
            <div class="container">
                <!--Section Tittle  -->
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="section-tittle section-tittle-testi text-center mb-45">
                            <h2>Words From Clients</h2>
                        </div>
                    </div>
                </div>
                <!-- Testimonial contents -->
               <div class="row d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="h1-testimonial-active dot-style">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img">
                                           <img src="{{asset('/assets/img/testmonial/Homepage_testi_1.png')}}" alt="">
                                           <span>Devid jonathan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img">
                                           <img src="{{asset('/assets/img/testmonial/Homepage_testi_1.png')}}" alt="">
                                           <span>Devid jonathan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img">
                                           <img src="{{asset('/assets/img/testmonial/Homepage_testi_1.png')}}" alt="">
                                           <span>Devid jonathan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Mates Start -->
        <div class="teams-area section-padding30">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="section-tittle section-tittle-f text-center mb-70">
                            <h2>Team Mates</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-teams text-center">
                            <div class="team-img">
                                <img src="{{asset('/assets/img/team/team_1.jpg')}}" alt="">
                            </div>
                            <div class="team-caption">
                                <h4><a href="#">Jhon Smith</a></h4>
                                <span>Senior Lawyer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-teams text-center">
                            <div class="team-img">
                                <img src="{{asset('/assets/img/team/team_2.jpg')}}" alt="">
                            </div>
                            <div class="team-caption">
                                <h4><a href="#">Emma Bunton</a></h4>
                                <span>Professional Lawyer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-teams text-center">
                            <div class="team-img">
                                <img src="{{asset('/assets/img/team/team_3.jpg')}}" alt="">
                            </div>
                            <div class="team-caption">
                                <h4><a href="#">Bunton Jonathon</a></h4>
                                <span>Top Rated Lawyer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Mates End-->

        <!-- Want To Work Start -->
        <div class="wantToWork-area w-padding">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-7 col-lg-9 col-md-8">
                        <div class="wantToWork-caption">
                            <h2>Get Your Answer In Just 5 Minutes</h2>
                            <p>Checking your loan options does not affect your credit score!s</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-3 col-md-4">
                       <div class="wantToWork-btn f-right">
                            <a href="#" class="btn btn-ans">Get started <i class="ti-angle-double-right"></i></a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Want To Work End -->

    </main>
   <footer>
       <!-- Footer Start-->
       <div class="footer-area footer-bg footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                      <div class="single-footer-caption mb-50">
                        <!-- logo -->
                        <div class="footer-logo">
                        <a href="index.html"><img src="{{asset('/assets/img/logo/logo.png')}}" alt=""></a>
                        </div>
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Seddo eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur pisicin elit, sed do eiusmod tempor.</p>
                               </div>
                            </div>
                        </div>
                        <!-- footer social -->
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-2 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Company</h4>
                               <ul>
                                   <li><a href="index.html">Home</a></li>
                                   <li><a href="about.html"> About Us</a></li>
                                   <li><a href="#">Browse Pets</a></li>
                                   <li><a href="blog.html">Blog</a></li>
                                   <li><a href="contact.html">Contact Us</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Services</h4>
                               <ul>
                                   <li><a href="#">O’Connor Group</a></li>
                                   <li><a href="#">Our Business Model</a></li>
                                   <li><a href="#">Our Lawyers Team</a></li>
                                   <li><a href="#"> Most Recent Cases</a></li>
                                   <li><a href="#"> Hot Lawyers News</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Newsletter</h4>
                               <div class="footer-pera footer-pera2">
                                <p>For Lastest update Sign up here</p>
                            </div>
                            <!-- Form -->
                            <div class="footer-form" >
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                    method="get" class="subscribe_form relative mail_part">
                                        <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                        class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = ' Email Address '">
                                        <div class="submit-btn">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                            class="email_icon newsletter-submit button-contactForm">
                                        
                                            Subscribe <i class="ti-angle-double-right"></i></button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('/assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/assets/js/slick.min.js')}}"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('/assets/js/wow.min.js')}}"></script>
		<script src="{{asset('/assets/js/animated.headline.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('/assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('/assets/js/jquery.sticky.js')}}"></script>
        
        <!-- counter , waypoint -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="{{asset('/assets/js/jquery.counterup.min.js')}}"></script>

        <!-- counter -->
        <script src="{{asset('/assets/js/contact.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.form.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('/assets/js/mail-script.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('/assets/js/plugins.js')}}"></script>
        <script src="{{asset('/assets/js/main.js')}}"></script>
        
    </body>
</html>