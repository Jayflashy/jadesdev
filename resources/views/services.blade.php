@extends('layouts.master')
@section('title', "Services")
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
@endsection