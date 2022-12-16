@extends('admin.layouts.master')

@section('title', "Dashboard")

@section('content')
<div class="page-title">
    <div class="d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Dashboard</h5>
    </div>
</div>
<div class="row">
    <div class="col-4 col-lg-4 my-2">
        <div class="dw">
            <div class="dw-body d-flex">
                <span class="bg-info text-white stamp me-1">
                    <i class="fas fa-eye icon-md"></i>
                </span>
                <div class="lh-sm">
                    <div class="dw-text text-sm-start">
                        Visits
                    </div>
                    <div class="text-muted">
                        {{ App\Models\Traffic::count() }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 col-lg-4 my-2">
        <div class="dw">
            <div class="dw-body d-flex">
                <span class="bg-success text-white stamp me-1">
                    <i class="fas fa-folder icon-md"></i>
                </span>
                <div class="lh-sm">
                    <div class="dw-text text-sm-start">
                        Works
                    </div>
                    <div class="text-muted">
                        {{ App\Models\Project::count() }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 col-lg-4 my-2">
        <div class="dw">
            <div class="dw-body d-flex">
                <span class="bg-danger text-white stamp me-1">
                    <i class="fas fa-comment icon-md"></i>
                </span>
                <div class="lh-sm">
                    <div class="dw-text text-sm-start">
                    Reviews
                    </div>
                    <div class="text-muted">
                        {{ App\Models\Review::count() }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 col-lg-4 my-2">
        <div class="dw">
            <div class="dw-body d-flex">
                <span class="bg-warning text-white stamp me-1">
                    <i class="fas fa-eye icon-md"></i>
                </span>
                <div class="lh-sm">
                    <div class="dw-text text-sm-start">
                        Today
                    </div>
                    <div class="text-muted">
                        {{ App\Models\Traffic::where('date', date('Y-m-d '))->count() }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 col-lg-4 my-2">
        <div class="dw">
            <div class="dw-body d-flex">
                <span class="bg-primary text-white stamp me-1">
                    <i class="fas fa-eye icon-md"></i>
                </span>
                <div class="lh-sm">
                    <div class="dw-text text-sm-start">
                        Monthly
                    </div>
                    <div class="text-muted">
                        {{ App\Models\Traffic::whereYear('created_at', date('Y'))->whereMonth('created_at', date('m'))->count() }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 col-lg-4 my-2">
        <div class="dw">
            <div class="dw-body d-flex">
                <span class="bg-success text-white stamp me-1">
                    <i class="fas fa-eye icon-md"></i>
                </span>
                <div class="lh-sm">
                    <div class="dw-text text-sm-start">
                        Yearly
                    </div>
                    <div class="text-muted">
                        {{ App\Models\Traffic::whereYear('created_at', date('Y'))->count() }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Hit Statitics</h5>
    <div class="card-body table-responsive">
        <table class="table table-bordered table-vcenter " id="datatable">
            <thead>
            <tr>
                <th>ID</th>
                <th>IP</th>
                <th>URL</th>
                <th>User Info</th>
                <th>Referer</th>
                <th>User Agent</th>
                <th>Country</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($traffic as $key=> $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->ip_address}}</td>
                <td>{{$item->url}}</td>
                <td>
                    <p>Device : {{$item->device}}</p>
                    <p>Browser : {{$item->browser}}</p>
                    <p>Type : {{$item->device_type}}</p>
                    <p>Platform : {{$item->platform}}</p>
                </td>
                <td>{{$item->referrer}}</td>
                <td>
                    {{ Str::limit($item->user_agent, 40) }}                       
                </td>
                <td>
                    @if ($item->country == null || $item->country == "false" || $item->country == 0 )
                        Nil
                    @else
                        @php $logs = json_decode($item->country); @endphp
                        <p>IP: {{$logs->ip}}</p>
                        <p>Country: {{$logs->countryName}}</p>
                    @endif
                </td>
               <td>{{show_datetime($item->created_at)}}</td>
            </tr>
            @endforeach
            </tbody>

        </table>
    </div>
</div>

<div class="card">
    <h5 class="card-header">Custom Scripts</h5>
    <div class="card-body">
        <form action="{{route('admin.settings.update')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 form-label">Scripts</label>
            <div class="col-sm-10">                            
                <textarea name="head_scripts" rows="13" class="form-control">{{ get_setting('head_scripts') }}</textarea>
            </div>
        </div>
        <div class="form-group text-end">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
    </div>
</div>
@endsection