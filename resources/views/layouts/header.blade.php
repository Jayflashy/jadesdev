<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">

        <!-- Start Top Search -->
        <div class="container-full">
            <div class="row">
                <div class="top-search">
                    <div class="input-group">
                        <form action="#">
                            <input type="text" name="text" class="form-control" placeholder="Search">
                            <button type="submit">
                                <i class="fas fa-search"></i>
                            </button>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container-full">
            <div class="nav-box">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav inc-border">
                    <ul>
                        {{-- <li class="search"><a href="#"><i class="ti-search"></i></a></li> --}}
                        <li class="side-menu"><a href="#"><i class="ti-menu-alt"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{my_asset(get_setting('logo'))}}" class="logo logo-display" alt="Logo">
                        <img src="{{my_asset(get_setting('logo'))}}" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="{{Route::is('index') ? 'active' : ''}}">
                            <a href="{{route('index')}}" class="smooth-menu">Home</a>
                        </li>
                        <li class="{{Route::is('about') ? 'active' : ''}}">
                            <a class="smooth-menu" href="{{route('about')}}">About</a>
                        </li>
                        <li class="{{Route::is('services') ? 'active' : ''}}">
                            <a class="smooth-menu" href="{{route('services')}}">Services</a>
                        </li>
                        <li class="">
                            <a class="smooth-menu" href="{{route('index')}}/#projects">Projects</a>
                        </li>
                        <li class="">
                            <a class="smooth-menu" href="{{route('index')}}/#faq">FAQs</a>
                        </li>
                        <li class="{{Route::is('contact') ? 'active' : ''}}">
                            <a class="smooth-menu" href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="ti-close"></i></a>
            <div class="widget">
                <h4 class="title">Contact Info</h4>
                <ul class="contact">
                    <li>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info">
                            <span>Email</span> {{get_setting('email')}}
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info">
                            <span>Phone</span>  {{get_setting('phone')}}
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info">
                            <span>Office Hours</span> Mon - Fri : 8:00 - 18:00 </br> Sat : 11:00 - 18:00
                        </div> 
                    </li>
                </ul>
            </div>
            <div class="widget">
                <h4 class="title">Additional Links</h4>
                <ul>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('index')}}/#projects">Projects</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="widget social">
                <h4 class="title">Connect With Us</h4>
                <ul class="link">
                    <li class="facebook"><a href=" {{get_setting('facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="twitter"><a href=" {{get_setting('twitter')}}"><i class="fab fa-twitter"></i></a></li>
                    <li class="instagram"><a href=" {{get_setting('instagram')}}"><i class="fab fa-github"></i></a></li>
                    <li class="whatsapp"><a href=" {{get_setting('whatsapp')}}"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>