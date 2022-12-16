@extends('errors.layouts')
@section('title', "Page not found")
@section('content')
<div class="error">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <div class="error-num d-inline-block">
            404            <div class="error-num__clip" data-text="404">404</div>
          </div>
          <h2 class="text-white">Page not found</h2>
          <p class="text-white mt-4">page you are looking for doesn't exit or an other error occured <br> or temporarily unavailable.</p>
          <a href="{{route('index')}}" class="cmn-btn mt-4">Go to Home</a>
        </div>
      </div>
    </div>
</div>
@endsection