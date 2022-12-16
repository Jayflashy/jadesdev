
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> JayFlash Sacred Page </title>

    <!-- Styles -->
    <link href="{{ static_asset('css/vendors.css') }}" rel="stylesheet">
    <link href="{{ static_asset('css/admin-style.css') }}" rel="stylesheet">    
    <!-- Favicon  -->
    <link rel="shortcut icon" href="{{ my_asset(get_setting('favicon'))}}" />

    <script>
        var JDV = JDV || {};
    </script>

</head>
<body>
    <div class="wrapper">
        <div class="content-wraps">
            {{-- Start Topnav --}}
            <div class="nav-topbar">
                <div class="d-flex py-3">
                    <div class="topbar-item">
                        <div class="d-flex align-items-center">
                            <a href="{{route('index')}}" >
                                <img src="{{my_asset(get_setting('logo'))}}" alt="" class="blank-logo">
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            {{-- Stop Topnav --}}
            <div class="main-container">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-xl-6 mx-auto">
                            <div class="card shadow-lg">
                                <div class="card-header">
                                    <h5 class="text-muted fw-bold mb-0">Welcome back! Log in to your account</h5>
                                </div>
                                <div class="card-body p-4 pt-2">
                                    <form method="POST" action="{{ route('admin.logins') }}" class="needs-validation" novalidate="" >
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label" for="email">@lang('Email Address')</label>
                                            <input id="email" type="email" placeholder="{{__('Email Address')}}" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            <div class="invalid-feedback">
                                                @lang('Email is invalid')
                                            </div>
                                        </div>
                        
                                        <div class="form-group">
                                            <label class="form-label" for="password">@lang('Password')</label>
                                            <input id="password" type="password" placeholder="{{__('Password')}}" class="form-control" name="password" required>
                                            <div class="invalid-feedback">
                                                @lang('Password is required')
                                            </div>
                                        </div>
                                        
                                        <div class="my-3 d-flex justify-content-between">
                                            <div class="form-check">
                                                <label class="form-check-label ">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                                    @lang('Remember me')
                                                </label>
                                            </div>
                                        </div>
                        
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-primary w-100">
                                                @lang('Login')	
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>
            {{-- Footer --}}
            <footer class="footer">
                <p> &copy; {{get_setting('title')}}</p>
             </footer>
        </div>        
    </div>
    

    <!-- SCRIPTS -->
    
    <script src="{{ static_asset('js/vendors.js') }}"></script>
    <script src="{{ static_asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ static_asset('js/core.js') }}"></script>
    
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