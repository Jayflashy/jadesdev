@extends('admin.layouts.master')

@section('title', "Contact Messages")

@section('content')
<div class="page-title">
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Contact Messages</h5>
    </div>
</div>
<div class="card">
    <div class="card-body table-responsive">
        <table class="table table-bordered table-vcenter " id="datatable">
            <thead>
            <tr>
                <th>ID</th>
                <th>Sender Name</th>
                <th>Phone</th>
                <th>Email</th>    
                <th>Message</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $key=> $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>
                    <span class="text-muted strong">
                        {{ Str::limit($item->name, 40) }}
                    </span>
                </td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
                <td>
                    {{ Str::limit($item->comments, 40) }}                       
                </td>
               <td>{{show_datetime($item->created_at)}}</td>
            </tr>
            @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection