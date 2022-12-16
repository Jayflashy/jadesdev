<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jadesdev - IT Solution Company">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="Website" >
    <meta property="og:title" content="{{get_setting('title')}}" >
    <meta property="og:image" content="{{my_asset(get_setting('logo'))}}" >
    <meta property="og:description" content="{{get_setting('description')}} " >
    <meta property="og:site_name" content="{{get_setting('title') }}" >

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content=" {{get_setting('title')}}">
    <meta name="twitter:description" content="{{get_setting('description')}} ">
    <meta name="twitter:image" content="{{ my_asset(get_setting('logo')) }}">  
    <!-- ========== Page Title ========== -->
    <title>{{get_setting('title') }}</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{my_asset(get_setting('favicon'))}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{static_asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{static_asset('css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{static_asset('css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{static_asset('css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{static_asset('css/elegant-icons.css')}}" rel="stylesheet" />
    <link href="{{static_asset('css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{static_asset('css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{static_asset('css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{static_asset('css/animate.css')}}" rel="stylesheet" />
    <link href="{{static_asset('css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{static_asset('css/style.css')}}" rel="stylesheet">
    <link href="{{static_asset('css/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{static_asset('js/html5/html5shiv.min.js')}}"></script>
      <script src="{{static_asset('js/html5/respond.min.js')}}"></script>
    <![endif]-->
    {!! get_setting('head_scripts') !!}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ get_setting('google_analytics') }}"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ get_setting('google_analytics') }}');
    </script>

</head>

<body>
    <!-- Preloader Start -->
    {{-- <div class="se-pre-con"></div> --}}
    <!-- Preloader Ends -->

    {{-- header --}}
    @include('layouts.header')

    <!-- Start Banner  -->
    <div class="banner-area double-thumb auto-height bg-gradient bg-cover text-light mt-sm-4" style="background-image: url({{static_asset('img/shape/18.jpg')}});">
        <div class="item-box">
            <div class="item">
                <div class="container">
                    <div class="row align-center">
                                        
                        <div class="col-lg-6">
                            <div class="content mt-sm-3">
                                <h2 class="wow fadeInDown">{{get_section('b_t1')}}<strong>{{get_section('b_t2')}}</strong></h2>
                                <p class="wow fadeInLeft">
                                    {{get_section('b_text')}}
                                </p>
                                <a data-animation="animated fadeInUp" class="btn btn-light effect btn-md" href="{{route('services')}}">Find out More</a>
                            </div>
                        </div>
                        <!-- Start Appoinment Form -->
                        <div class="col-lg-6">
                            <div class="single-thumb">
                                <img src="{{static_asset('img/thumb/2.png')}}" alt="Thumb">
                            </div>
                        </div>
                        <!-- End Appoinment Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Star About Area-->
    <div id="about" class="about-area overflow-hidden version-three default-padding-top">
        <!-- Fixed Shape -->
        <div class="fixed-shape-bottom">
            <img src="{{static_asset('img/shape/16.png')}}" alt="Thumb">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="row align-center">

                <div class="col-lg-6 thumbs wow fadeInRight" data-wow-delay="500ms">
                    <img src="{{static_asset('img/thumb/1.png')}}" alt="Thumb">
                </div>
                
                <div class="col-lg-6 info left wow fadeInUp" data-wow-delay="700ms">
                    <h2 class="area-title">{{get_section('about_title')}}</h2>
                    <p>
                        {{get_section('about_text')}}
                    </p>
                    <ul>
                        <li>
                            <h4>Ideas and Concept</h4>
                            <p>
                                We come up with a strategic technical plan required to execute your ideas.
                            </p>
                        </li>
                        <li>
                            <h4>Quality Execution</h4>
                            <p>
                                We are consistent in carrying out your planned tasks to produce results in compliance with your expectations.
                            </p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- End About Area -->
    <!-- Start Services Area -->
    <div class="services-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Our Services</h5>
                        <h2 class="area-title">{{get_section('ser_title')}}</h2>
                        <div class="devider"></div>
                        <p>
                            {{get_section('ser_text')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="services-content text-center">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <img src="{{static_asset('img/icon/1.png')}}" alt="Thumb">
                            <h5><a href="#">{{get_section('s_t1')}}</a></h5>
                            <p>
                                {{get_section('s_c1')}} 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <img src="{{static_asset('img/icon/2.png')}}" alt="Thumb">
                            <h5><a href="#">{{get_section('s_t2')}}</a></h5>
                            <p>
                                {{get_section('s_c2')}}  
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <img src="{{static_asset('img/icon/3.png')}}" alt="Thumb">
                            <h5><a href="#">{{get_section('s_t3')}}</a></h5>
                            <p>
                                {{get_section('s_c3')}}   
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">
                            <img src="{{static_asset('img/icon/4.png')}}" alt="Thumb">
                            <h5><a href="#">{{get_section('s_t4')}}</a></h5>
                            <p>
                                {{get_section('s_c4')}} 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
                <div class="bottom-content text-center">
                    <p>
                        Want a custom service? <a href="htpps://wa.me/2348035852702">Contact us now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Area -->
    <!-- Start Why Choose Us -->
    <div class="choose-us-area overflow-hidden reverse default-padding bg-gray">
        <div class="container">
            <div class="row align-center">
                
                <div class="col-lg-6 info wow fadeInUp">
                    <h5>Why Choose Us</h5>
                    <h2 class="area-title"> {{get_section('why_title')}} </h2>
                    <p>
                        {{get_section('why_content')}} 
                    </p>
                    <ul>
                        <li> {{get_section('why_op1')}} </li>
                        <li> {{get_section('why_op2')}} </li>
                    </ul>
                    <div class="contact">
                        <p>
                            Join our team - come work with us.
                        </p>
                        <h4><i class="fas fa-phone"></i>{{get_section('why_phone')}} </h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumb wow fadeInRight" data-wow-delay="0.6s">
                        <img src="{{static_asset('img/illustration/1.png')}}" alt="Thumb">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Area -->

    <!-- Start Case Studies Area -->
    <div id="projects" class="case-studies-area overflow-hidden grid-items default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Recent Works</h5>
                        <h2 class="area-title"> {{get_section('pro_title')}}  </h2>
                        <div class="devider"></div>
                        <p>
                        {{get_section('pro_des')}} 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="case-items-area">
                <div class="masonary">
                    <div id="portfolio-grid" class="case-items colums-3">
                        @foreach ($projects as $item)
                        <!-- Single Item -->
                        <div class="pf-item">
                            <div class="item">
                                <div class="thumb">
                                    <img src="{{my_asset($item->image)}}" alt="Thumb">
                                    <a href="{{my_asset($item->image)}}" class="item popup-gallery"><i class="fa fa-eye"></i></a>
                                </div>
                                <div class="info">
                                    <div class="tags">
                                        <a target="_blank" href="{{$item->link}}">{{$item->category}}</a> 
                                    </div>
                                    <h4>
                                        <a target="_blank" href="{{$item->link}}">{{$item->name}}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Case Studies Area -->

    <!-- Start Faq -->
    <div id="faq" class="faq-area overflow-hidden rectangular-shape default-padding">
        <div class="container">
            <div class="faq-items">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="thumb wow fadeInLeft" data-wow-delay="0.5s">
                            <img src="{{static_asset('img/illustration/4.png')}}" alt="Thumb">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="faq-content">
                            <h5>faq</h5>
                            <h2 class="area-title"> {{get_section('faq_title')}} </h2>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{get_section('faq_q1')}} 
                                        </h4>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                {{get_section('faq_a1')}} 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            {{get_section('faq_q2')}} 
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                {{get_section('faq_a2')}} 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            {{get_section('faq_q3')}} 
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                {{get_section('faq_a3')}} 
                                            </p>
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
    <!-- End Faq -->

    <!-- Start Testimonials Area -->
    <div class="testimonials-area carousel-shadow default-padding-bottom">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-6">
                        <h5>Our Client's Review </h5>
                        <h2>
                            What client say about us?
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonials-carousel owl-carousel owl-theme">
                        @foreach ($reviews as $review)
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="{{my_asset($review->image)}}" alt="Thumb">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <div class="info">
                                <p>
                                    {{$review->message}}
                                </p>
                                <div class="bottom">
                                    <div class="provider">
                                        <h5>{{$review->name}}</h5>
                                        <span>{{$review->position}}</span>
                                    </div>
                                    <div class="raging">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->


    <!-- Start Contact Area -->
    <div class="contact-area bg-gray default-padding">
        <div class="container">
            <div class="contact-box">
                <div class="row align-center">
                    <div class="col-lg-5 left-info">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="info">
                                <h5>Office Location</h5>
                                <p>
                                    Ife, Osun State, <br>Nigeria
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info">
                                <h5>Phone</h5>
                                <p>
                                    {{get_setting('phone')}} <br> {{get_setting('phone_2')}}
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-envelope-open"></i>
                            </div>
                            <div class="info">
                                <h5>Email</h5>
                                <p>
                                {{get_setting('email')}} <br> {{get_setting('email_2')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="content">
                            <div class="heading">
                                <h2>Need Help?</h2>
                                <p>Reach out to the world’s most reliable IT services.</p>
                                {{-- session --}}
                                @if(Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                                    {{Session::get('success')}}
                                </div>
                                @endif
                                @if(Session::get('error'))
                                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                    {{Session::get('error')}}
                                </div>
                                @endif
                            </div>
                            <form action="{{route('contact.send')}}" method="POST" class="contact-forms">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" required placeholder="Please describe what you need."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit"> Get a free consultation </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-md-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    {{-- footer --}}
    @include('layouts.footer')

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{static_asset('js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{static_asset('js/popper.min.js')}}"></script>
    <script src="{{static_asset('js/bootstrap.min.js')}}"></script>
    <script src="{{static_asset('js/jquery.appear.js')}}"></script>
    <script src="{{static_asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{static_asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{static_asset('js/modernizr.custom.13711.js')}}"></script>
    <script src="{{static_asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{static_asset('js/wow.min.js')}}"></script>
    <script src="{{static_asset('js/progress-bar.min.js')}}"></script>
    <script src="{{static_asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{static_asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{static_asset('js/count-to.js')}}"></script>
    <script src="{{static_asset('js/jquery.backgroundMove.js')}}"></script>
    <script src="{{static_asset('js/YTPlayer.min.js')}}"></script>
    <script src="{{static_asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{static_asset('js/bootsnav.js')}}"></script>
    <script src="{{static_asset('js/main.js')}}"></script>

</body>
</html>