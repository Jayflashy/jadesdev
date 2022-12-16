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
    <meta property="og:title" content="@yield('title') - {{get_setting('title')}}" >
    <meta property="og:image" content="{{my_asset(get_setting('logo'))}}" >
    <meta property="og:description" content="{{get_setting('description')}} " >
    <meta property="og:site_name" content="{{get_setting('title') }}" >

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="@yield('title') - {{get_setting('title')}}">
    <meta name="twitter:description" content="{{get_setting('description')}} ">
    <meta name="twitter:image" content="{{ my_asset(get_setting('logo')) }}">  

    <!-- ========== Page Title ========== -->
    <title>@yield('title') - {{get_setting('title')}}</title>

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

    @yield('content')

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