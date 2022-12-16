@extends('admin.layouts.master')

@section('title', "Email Settings")

@section('content')
<div class="page-title">
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Email Settings</h5>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.email.update') }}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="col-lg-4">
                    <label class="form-label">{{__('MAIL MAILER')}}</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" value="{{  env('MAIL_MAILER') }}" disabled> 
                </div>
            </div>
            <div class="form-group row">
                <input type="hidden" name="types[]" value="MAIL_HOST">
                <div class="col-lg-4">
                    <label class="form-label">{{__('MAIL HOST')}}</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="MAIL_HOST" value="{{  env('MAIL_HOST') }}" placeholder="{{__('MAIL HOST')}}">
                </div>
            </div>
            <div class="form-group row">
                <input type="hidden" name="types[]" value="MAIL_PORT">
                <div class="col-lg-4">
                    <label class="form-label">{{__('MAIL PORT')}}</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="MAIL_PORT" value="{{  env('MAIL_PORT') }}" placeholder="{{__('MAIL PORT')}}">
                </div>
            </div>
            <div class="form-group row">
                <input type="hidden" name="types[]" value="MAIL_USERNAME">
                <div class="col-lg-4">
                    <label class="form-label">{{__('MAIL USERNAME')}}</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="MAIL_USERNAME" value="{{  env('MAIL_USERNAME') }}" placeholder="{{__('MAIL USERNAME')}}">
                </div>
            </div>
            <div class="form-group row">
                <input type="hidden" name="types[]" value="MAIL_PASSWORD">
                <div class="col-lg-4    ">
                    <label class="form-label">{{__('MAIL PASSWORD')}}</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="MAIL_PASSWORD" value="{{  env('MAIL_PASSWORD') }}" placeholder="{{__('MAIL PASSWORD')}}">
                </div>
            </div>
            <div class="form-group row">
                <input type="hidden" name="types[]" value="MAIL_ENCRYPTION">
                <div class="col-lg-4">
                    <label class="form-label">{{__('MAIL ENCRYPTION')}}</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="MAIL_ENCRYPTION" value="{{  env('MAIL_ENCRYPTION') }}" placeholder="{{__('MAIL ENCRYPTION')}}">
                </div>
            </div>
            <div class="form-group row">
                <input type="hidden" name="types[]" value="MAIL_FROM_ADDRESS">
                <div class="col-lg-4">
                    <label class="form-label">{{__('MAIL FROM ADDRESS')}}</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="MAIL_FROM_ADDRESS" value="{{  env('MAIL_FROM_ADDRESS') }}" placeholder="{{__('MAIL FROM ADDRESS')}}">
                </div>
            </div>
            <div class="form-group row">
                <input type="hidden" name="types[]" value="MAIL_FROM_NAME">
                <div class="col-lg-4">
                    <label class="form-label">{{__('MAIL FROM NAME')}}</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="MAIL_FROM_NAME" value="{{  env('MAIL_FROM_NAME') }}" placeholder="{{__('MAIL FROM NAME')}}">
                </div>
            </div>      
            <div class="form-group mb-0 text-end">
                <button class="btn btn-primary" type="submit">{{__('Save')}}</button>
            </div> 
        </form>
    </div>
</div>
@endsection