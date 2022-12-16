@extends('admin.layouts.master')

@section('title', "Banner Section")

@section('content')
<div class="page-title">
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Banner Section</h5>
    </div>
</div>
<div class="card">
    <div class="card-body">
       <form action="{{route('admin.section.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row form-group">
                <label class="col-md-2 form-label">Title 1</label>
                <div class="col-md-10">
                    <input type="text" name="b_t1" value="{{get_section('b_t1')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">Title 2</label>
                <div class="col-md-10">
                    <input type="text" name="b_t2" value="{{get_section('b_t2')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">Banner Text`</label>
                <div class="col-md-10">
                    <textarea name="b_text" class="form-control" rows="2" required>{{get_section('b_text')}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection