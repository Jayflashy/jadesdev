@extends('admin.layouts.master')

@section('title', "Settings")

@section('content')
<div class="page-title">
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0">General Settings</h5>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form class="row" action="{{route('admin.settings.update')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="col-lg-6">                    
            <div class="form-group row">
                <label class="col-sm-3 form-label">@lang('Website Name')</label>
                <div class="col-sm-9">                            
                    <input type="text" name="title" class="form-control" value="{{ get_setting('title') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 form-label">@lang('Website Email')</label>
                <div class="col-sm-9">                            
                    <input type="text" name="email" class="form-control" value="{{ get_setting('email') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 form-label">@lang('Email 2')</label>
                <div class="col-sm-9">                            
                    <input type="text" name="email_2" class="form-control" value="{{ get_setting('email_2') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 form-label">@lang('Website Phone')</label>
                <div class="col-sm-9">                            
                    <input type="tel" name="phone" class="form-control" value="{{ get_setting('phone') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 form-label">@lang('Phone 2')</label>
                <div class="col-sm-9">                            
                    <input type="tel" name="phone_2" class="form-control" value="{{ get_setting('phone_2') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 form-label">@lang('Website About')</label>
                <div class="col-sm-9">                            
                    <textarea name="description" rows="3" class="form-control">{{ get_setting('description') }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 form-label">Office Address</label>
                <div class="col-sm-9">                            
                    <input name="address" type="text" class="form-control" value="{{get_setting('address') }}" >
                </div>
            </div> 
            <div class="form-group row">
                <label class="col-sm-3 form-label">Office Hours</label>
                <div class="col-sm-9">                            
                    <input name="office_hour" type="text" class="form-control" value="{{get_setting('office_hour') }}" >
                </div>
            </div>    
        </div>
        <div class="col-lg-6">  
            <div class="form-group row">
                <label class="col-sm-3 form-label">Seo Keywords</label>
                <div class="col-sm-9">                            
                    <input name="seo_keywords" type="text" class="form-control" value="{{get_setting('seo_keywords') }}" >
                </div>
            </div>   
            <div class="form-group row">
                <label class="col-sm-3 form-label">@lang('Google Analytics')</label>
                <div class="col-sm-9">                            
                    <input type="text" name="google_analytics" class="form-control" value="{{ get_setting('google_analytics') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 form-label">@lang('Facebook Link')</label>
                <div class="col-sm-9">                            
                    <input name="facebook" type="text" class="form-control" value="{{get_setting('facebook') }}" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 form-label">@lang('Twitter Link')</label>
                <div class="col-sm-9">                            
                    <input name="twitter" type="text" class="form-control" value="{{get_setting('twitter') }}" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 form-label">@lang('Whatsapp Link')</label>
                <div class="col-sm-9">                            
                    <input name="whatsapp" type="text" class="form-control" value="{{get_setting('whatsapp') }}" >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 form-label">@lang('Instagram Link')</label>
                <div class="col-sm-9">                            
                    <input name="instagram" type="text" class="form-control" value="{{get_setting('instagram') }}" >
                </div>
            </div>  
                                     
            <div class="form-group row">                        
                <label class="col-sm-3 form-label">@lang('Site Logo')</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="logo" accept="image/*"/>
                </div>
                <div class="col-md-3">
                    <img class="primage" src="{{ my_asset(get_setting('logo'))}}" alt="Site Logo" >
                </div>
            </div>
            <div class="form-group row">                        
                <label class="col-sm-3 form-label">@lang('Favicon')</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="favicon" accept="image/*"/>
                </div>
                <div class="col-md-3">
                    <img class="primage" src="{{ my_asset(get_setting('favicon'))}}" alt="Favicon" >
                </div>
            </div>
        </div>

        <div class="form-group text-end">
            <button type="submit" class="btn btn-primary w-100">Save</button>
        </div>
        </form>
    </div>
</div>
@endsection