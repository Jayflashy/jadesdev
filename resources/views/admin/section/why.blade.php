@extends('admin.layouts.master')

@section('title', "Why Us Section")

@section('content')
<div class="page-title">
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Why Us Section</h5>
    </div>
</div>
<div class="card">
    <div class="card-body">
       <form action="{{route('admin.section.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row form-group">
                <label class="col-md-2 form-label">Title</label>
                <div class="col-md-10">
                    <input type="text" name="why_title" value="{{get_section('why_title')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">Phone No.</label>
                <div class="col-md-10">
                    <input type="text" name="why_phone" value="{{get_section('why_phone')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">Option 1</label>
                <div class="col-md-10">
                    <input type="text" name="why_op1" value="{{get_section('why_op1')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">Option 2</label>
                <div class="col-md-10">
                    <input type="text" name="why_op2" value="{{get_section('why_op2')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">Why Content`</label>
                <div class="col-md-10">
                    <textarea name="why_content" class="form-control" rows="2">{{get_section('why_content')}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection