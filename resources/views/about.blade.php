@extends('layouts.master')
@section('title', 'About Us')

@section('content')
 <!-- Start Breadcrumb 
============================================= -->
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

<!-- Star About Area -->
<div class="about-area center-responsive default-padding">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-6">
                <div class="thumb">
                    <img src="{{static_asset('img/about.png')}}" alt="Thumb">
                </div>
            </div>
            <div class="col-lg-6 info">
                <h5>Discover Our Company</h5>
                <h2 class="area-title">{{get_section('about_title')}}</h2>
                <p>
                    {{get_section('about_text')}}
                </p>
                <ul class="achivement">
                    <li>
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="23" data-speed="6000">23</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Project Completed</span>
                        </div>
                    </li>
                    <li>
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="99" data-speed="5000">99</div>
                                <div class="operator">%</div>
                            </div>
                            <span class="medium">Satisfaction</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->

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

@endsection