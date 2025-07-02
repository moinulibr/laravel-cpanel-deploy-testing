@extends('backend.partials.app')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Section </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Section List </li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Section
                @include('backend.academic.nav')
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="{{route('admin.sections.store')}}" method="POST" id="ajax_form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group">
                                        <strong for="section">Section Name</strong>
                                        <input type="text" id="section" class="form-control" name="name" placeholder="Enter Section name...">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Save" class="btn btn-success">
                            <hr>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th style="width: 125px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $key=>$item)
                                    <tr>
                                        <td> {{$key+1}}</td>
                                        <td> {{$item->name}}</td>
                                        <td> {{$item->status=='1'?'active':'de-active'}}</td>
                                        <td>
                                            @can('permissions.edit')
                                            <a href="{{ route('admin.sections.edit',[$item->id])}}" class="action-icon btn_modal"> 
                                                <i class="fa fa-edit"></i></a>
                                            @endcan
                                            @can('permissions.delete')
                                                <a href="{{ route('admin.sections.destroy',[$item->id])}}" class="delete action-icon"> 
                                                    <i class="fa fa-trash"></i></a>
                                            @endcan

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</main>
                
@endsection

