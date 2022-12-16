<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{get_setting('title')}}</title>

    <!-- Styles -->
    <link href="{{ static_asset('css/vendors.css') }}" rel="stylesheet">
    <link href="{{ static_asset('css/admin-style.css') }}" rel="stylesheet">    
    <!-- Favicon  -->
    <link rel="shortcut icon" href="{{ my_asset(get_setting('favicon'))}}" />
    @yield('styles')
    <script>
        var JDV = JDV || {};
    </script>

    
</head>
<body>
    <div class="wrapper">
        {{-- start sidebar --}}
        <div class="sidebar-wrap">
            <div class="sidebar-nav c-scrollbar">
                <div class="side-nav-logo">
                    <a href="">
                        <img src="{{my_asset(get_setting('logo') )}}" alt="" class="nav-logo"> 
                    </a>
                </div>
                <div class="side-nav-wrap">
                    <div class="side-nav-content sidelinks">
                        <a class="side-nav-link" href="{{route('admin.index')}}">
                            <i class="fas fa-home"></i> Dashboard
                        </a>
                        <a class="side-nav-link" href="{{route('admin.projects')}}">
                            <i class="fas fa-cog"></i> Projects
                        </a>
                        <a class="side-nav-link" href="{{route('admin.review')}}">
                            <i class="fas fa-cog"></i> Reviews
                        </a>
                        <a class="side-nav-link" href="{{route('admin.contacts')}}">
                            <i class="fas fa-cog"></i> Contacts
                        </a>
                         <a class="side-nav-link has-sub" href="#"> 
                            <i class="fa fa-bullhorn"></i> Sections
                            <span class="side-nav-arrow"></span>
                        </a>
                        <div class="collapse submenu">
                            <a class="sublink" href="{{route('admin.section.about')}}">@lang('About')</a>
                            <a class="sublink" href="{{route('admin.section.service')}}">@lang('Services')</a>
                            <a class="sublink" href="{{route('admin.section.why')}}">@lang('Why Us')</a>
                            <a class="sublink" href="{{route('admin.section.banner')}}">@lang('Banner')</a>
                            <a class="sublink" href="{{route('admin.section.faq')}}">@lang('FAQs')</a>
                        </div>
                        <a class="side-nav-link has-sub" href="#">
                            <i class="fas fa-cog"></i> Settings
                            <span class="side-nav-arrow"></span>
                        </a>
                        <div class="collapse submenu">
                            <a class="sublink" href="{{route('admin.settings')}}">General Setting</a>
                            <a class="sublink" href="{{route('admin.email_settings')}}">Email Setting</a>
                        </div>                        
                    </div>
                </div>
                
            </div>
            <div class="sidebar-overlay"></div>
        </div>  
        {{-- stop sidebar --}}
        <div class="content-wrap">
            <div class="nav-topbar">
                <div class="d-flex">
                    <div class="nav-topbar-toggler" >
                        <button class="mobile-toggler" data-toggle="side-nav" id="side-nav">
                            <span></span>
                        </button>
                        <button class="mobile-toggler " data-toggle="mobile-nav" id="mobile-nav">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="d-flex py-3">
                    <div class="mobile-logo" >
                        <a href="{{url('/admin')}}">  
                            <img src="{{my_asset(get_setting('logo'))}}" alt="" class="nav-logo">
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-stretch flex-grow-xl-1">
                    <div class="topbar-item">
                        <div class="d-flex align-items-center">
                            <a class="btn btn-icon btn-circle btn-light" href="{{route('index')}}" target="_blank" title="Browse Website">
                                <i class="fas fa-globe"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex nav-toolbar">
                    <div class="topbar-item">
                        <div class="d-flex align-items-center">
                            <a class="btn btn-nav btn-circle btn-light" href="javascript:void(0);" data-bs-toggle="dropdown" id="profileDropdown">
                                <i class="fa fa-user fa-1x"></i>
                            </a>
                            <div class="dropdown-menu profile-dropdown " aria-labelledby="profileDropdown">
                                <!-- item-->
                                <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="fa fa-account-circle"></i>Edit Profile</a>
                                <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="fa fa-logout"></i> Logout</a>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-container">
                <div class="container-xl">
                    <div class="justify-content-center">
                        @yield('content')
                    </div>
                </div>               
            </div>
            {{-- Footer --}}
            <footer class="footer">
                <p> &copy; {{get_setting('title')}}. </p>
             </footer>
        </div>        
    </div>
    

    <!-- SCRIPTS -->
    
    <script src="{{ static_asset('js/vendors.js') }}"></script>
    <script src="{{ static_asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ static_asset('js/core.js') }}"></script>
    
    @yield('scripts')
    <script type="text/javascript"> 
        
        @if(Session::get('success'))
        Snackbar.show({
            text: '{{Session::get('success')}}',
            backgroundColor: '#38c172'
        });
        @endif
        @if(Session::get('error'))
        Snackbar.show({
            text: '{{Session::get('error')}}',
            backgroundColor: '#e3342f'
        });
        @endif
    </script>
</body>
</html>