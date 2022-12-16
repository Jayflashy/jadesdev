@extends('admin.layouts.master')

@section('title', "Reviews")

@section('content')
<div class="page-title">
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0">@yield('title') </h5>
        <a class="btn btn-primary btn-sm" href="#" data-bs-toggle="modal" data-bs-target="#create_modal"><i class="fas fa-plus"></i> @lang('Add Review') </a>
    </div>
</div>
<div class="card">
    <div class="card-body table-responsive">
        <table class="table table-hover table-bordered " id="datatable" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Position</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $key => $item )
                <tr>
                    <td>{{$key +1}} </td>
                    <td>{{$item->name}}</td>
                    <td><img loading="lazy"  class="img-table" src="{{my_asset($item->image)}}" alt="Image"> </td>
                    <td>{{$item->position}}</td>
                    <td>{{text_trim($item->message, 50)}}</td>
                    <td>
                        <div class="d-flex">
                            <a data-bs-toggle="modal" data-bs-target="#edit_modal-{{$item->id}}"  href="#" class="btn btn-success  btn-sm me-1" data-bs-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="{{route('admin.review.delete', [$item->id])}}" class="btn btn-danger  btn-sm me-1" data-bs-toggle="tooltip"title="Delete"><i class="fa fa-trash"></i></a>
                        <div>
                    </td>
                </tr>
                {{-- edit modals --}}
                <div class="modal fade" id="edit_modal-{{$item->id}}" tabindex="-1"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold">Edit Review</h5>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.review.update', [$item->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" value="{{$item->name}}" name="name" placeholder="name is requiored " required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Position</label>
                                    <input type="text" class="form-control" value="{{$item->position}}" name="position" placeholder="position " required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" name="message" id=""  required rows="3">{{$item->message}}</textarea>
                                  </div>
                                <div class="form-group mb-2">
                                    <label class="form-label">Review Image</label>                            
                                    <input type="file" class="form-control mb-2" name="image" accept="image/*" id="slide" onchange="preview_slide('simg{{$item->id}}','simage{{$item->id}}')">
                                    <img id="simg{{$item->id}}" class="pimage" src="{{my_asset($item->image)}}"" >
                                    <img id="simage{{$item->id}}" class="d-none pimage"/> 
                                </div>
                                <div class="form-group mt-2 text-end">
                                    <button type="submit" class="btn btn-block btn-primary"> Edit Review</button>
                                </div> 
                            </form>            
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
{{-- create modal --}}
<div class="modal fade" id="create_modal" tabindex="0" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" id="modal-size" role="document">
        <div class="modal-content position-relative">
            <div class="modal-header">
                <h5 class="modal-title">Create Review </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>            
            <form action="{{ route('admin.review.create') }}" method="post" enctype="multipart/form-data">
                @csrf                                 
                <div class="modal-body px-3 pt-3">
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="name is requiored " required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Position</label>
                        <input type="text" class="form-control" name="position" placeholder="Position" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="" placeholder="write your message"  required rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" required name="image" accept="image/*" onchange="preview_picture(event)" />
                    </div>
                    <img id="pimage" class="pimage"/>  
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Create Review</button>
                </div>
            </form>           
        </div>
    </div>
</div> 
@endsection

@section('scripts')
<script>
    function preview_picture(event)
    {
        var reader = new FileReader();
        reader.onload = function()
        {
            var output = document.getElementById('pimage');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
    function preview_slide(nid,oid)
    {
        document.getElementById(oid).classList.remove('d-none');
        document.getElementById(nid).classList.add('d-none');
        var reader = new FileReader();
        reader.onload = function()
        {
            var output = document.getElementById(oid);
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
@section('styles')
<style>
    .img-table{
        height:70px ;
    }
    .pimage{
        width: auto;
        max-height: 250px;
        margin: 0;
        margin-top: 15px;
    }
</style>
@endsection