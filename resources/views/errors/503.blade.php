@extends('errors.layouts')
@section('title', "Syntax Error")
@section('content')
    <div class="error">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
              <div class="error-num d-inline-block">
                503            <div class="error-num__clip" data-text="503">503</div>
              </div>
              <h2 class="text-white">We are currently running maintainance</h2>
              <p class="text-white mt-4">The site is under maintainance. Please check back again.</p>
              <a href="{{route('index')}}" class="cmn-btn mt-4">Go to Home</a>
            </div>
          </div>
        </div>
    </div>
@endsection