@extends('admin.layouts.master')

@section('title', "About Section")

@section('content')
<div class="page-title">
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0">About Section</h5>
    </div>
</div>
<div class="card">
    <div class="card-body">
       <form action="{{route('admin.section.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row form-group">
                <label class="col-md-2 form-label">About Title</label>
                <div class="col-md-10">
                    <input type="text" name="about_title" value="{{get_section('about_title')}}" id="" required class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-2 form-label">About Text`</label>
                <div class="col-md-10">
                    <textarea name="about_text" class="form-control" rows="3">{{get_section('about_text')}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </div>
        </form>
    </div>
    <h5 class="page-title">Project Section</h5>
    <div class="card-body">
        <form action="{{route('admin.section.update')}}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="row form-group">
                 <label class="col-md-2 form-label">Works Title</label>
                 <div class="col-md-10">
                     <input type="text" name="pro_title" value="{{get_section('pro_title')}}" id="" required class="form-control">
                 </div>
             </div>
             <div class="row form-group">
                 <label class="col-md-2 form-label">Work Desc</label>
                 <div class="col-md-10">
                     <textarea name="pro_des" class="form-control" rows="2">{{get_section('pro_des')}}</textarea>
                 </div>
             </div>
             <div class="form-group">
                 <button type="submit" class="btn btn-primary w-100">Update</button>
             </div>
         </form>
     </div>
</div>
@endsection