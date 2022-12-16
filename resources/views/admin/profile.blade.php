@extends('admin.layouts.master')

@section('title', "Edit PRofile")

@section('content')
<div class="col-lg-8 mx-auto">
<div class="page-title">
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit Profile</h5>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="card"> 
            <div class="card-body">
                <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 form-label" for="name">{{__('Name')}}</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control" value="{{Auth::user()->name}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-label" for="email">{{__('Email Address')}}</label>
                        <div class="col-sm-9">
                            <input type="email" placeholder="{{__('Email Address')}}" id="email" name="email" class="form-control" value="{{Auth::user()->email}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-label">{{__('Phone')}}</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="{{__('Phone')}}" name="phone" class="form-control" value="{{Auth::user()->phone}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-label" for="password">{{__('Password')}}</label>
                        <div class="col-sm-9">
                            <input type="password" placeholder="{{__('Password')}}" id="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-0 text-end">
                        <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection