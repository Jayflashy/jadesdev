@extends('admin.layouts.master')

@section('title', "Services")

@section('content')
<div class="page-title">
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Services Section</h5>
    </div>
</div>
<div class="card">
    <div class="card-body">
       <form action="{{route('admin.section.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row form-group">
                <label class="col-md-2 form-label">Service Title</label>
                <div class="col-md-10">
                    <input type="text" name="ser_title" value="{{get_section('ser_title')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">Description</label>
                <div class="col-md-10">
                    <textarea name="ser_des" class="form-control" rows="1" required>{{get_section('ser_des')}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 form-group">
                    <label class="form-label">Section 1</label>
                    <input type="text" name="s_t1" value="{{get_section('s_t1')}}" placeholder="Title" required class="form-control">
                    <textarea name="s_c1" class="form-control" placeholder="section content" rows="3" required>{{get_section('s_c1')}}</textarea>
                </div>
                <div class="col-md-6 col-lg-3 form-group">
                    <label class="form-label">Section 2</label>
                    <input type="text" name="s_t2" value="{{get_section('s_t2')}}" placeholder="Title" required class="form-control">
                    <textarea name="s_c2" class="form-control" placeholder="section content" rows="3" required>{{get_section('s_c2')}}</textarea>
                </div>
                <div class="col-md-6 col-lg-3 form-group">
                    <label class="form-label">Section 3</label>
                    <input type="text" name="s_t3" value="{{get_section('s_t3')}}" placeholder="Title" required class="form-control">
                    <textarea name="s_c3" class="form-control" placeholder="section content" rows="3" required>{{get_section('s_c3')}}</textarea>
                </div>
                <div class="col-md-6 col-lg-3 form-group">
                    <label class="form-label">Section 4</label>
                    <input type="text" name="s_t4" value="{{get_section('s_t4')}}" placeholder="Title" required class="form-control">
                    <textarea name="s_c4" class="form-control" placeholder="section content" rows="3" required>{{get_section('s_c4')}}</textarea>
                </div>
                
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection