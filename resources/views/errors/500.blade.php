@extends('errors.layouts')
@section('title', "Server Error")
@section('content')
    <div class="error">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
              <div class="error-num d-inline-block">
                500            <div class="error-num__clip" data-text="500">500</div>
              </div>
              <h2 class="text-white">Something has gone seriously wrong</h2>
              <p class="text-white mt-4">It's always time for a coffee break. We should be back by the time you finish your coffee.</p>
              <a href="{{route('index')}}" class="cmn-btn mt-4">Go to Home</a>
            </div>
          </div>
        </div>
    </div>
@endsection