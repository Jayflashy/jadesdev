@extends('layouts.master')
@section('title', "Contact Us")
@section('content')
<!-- Start Breadcrumb  -->
<div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url({{static_asset('img/breadcrumb.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>@yield('title')</h2>
                <ul class="breadcrumb">
                    <li><a href="{{route('index')}}"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">@yield('title')</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

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

@endsection
