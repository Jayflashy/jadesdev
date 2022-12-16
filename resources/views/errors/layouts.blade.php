<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="{{ static_asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ static_asset('css/error.css') }}">
    @yield('styles')    

    <link rel="shortcut icon" href="{{ my_asset(get_setting('favicon'))}}" type="image/x-icon">  
</head>
<body>
    <main class="content">
        @yield('content')
    </main>



</body>
</html>