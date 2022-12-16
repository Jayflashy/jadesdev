@extends('errors.layouts')
@section('title', "Invalid Request")
@section('content')
    <div class="error">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
              <div class="error-num d-inline-block">
                419            <div class="error-num__clip" data-text="419">419</div>
              </div>
              <h2 class="text-white">Something has gone seriously wrong</h2>
              <p class="text-white mt-4">Your Request contains an invalid syntax. Please try again</p>
              <a href="{{route('index')}}" class="cmn-btn mt-4">Go to Home</a>
            </div>
          </div>
        </div>
    </div>
@endsection