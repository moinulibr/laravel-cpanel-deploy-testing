@extends('backend.partials.app')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Roles</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Roles List</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Roles
            </div>
            <div class="card-body">

                <div class="row mb-2">
                    <div class="col-xl-4">
                        <div class="">
                                @can('roles.create')
                                <a type="button" href="{{route('admin.roles.create')}}" class="btn btn-danger mb-2 me-2">
                                    <i class="fas fa-plus"></i> Add New Role</a>
                                @endcan
                           
                        
                        </div>
                    </div><!-- end col-->
                </div>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Role</th>
                                <th style="width: 125px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{$role->name}}</td>
                                <td>
                                @can('roles.delete')
                                <a href="{{ route('admin.roles.edit',[$role->id])}}" class="action-icon"> <i class="fas fa-edit"></i></a>
                                @endcan
                                
                                @can('roles.delete')
                                    <a href="{{ route('admin.roles.destroy',[$role->id])}}" class="delete action-icon"> <i class="fas fa-trash"></i></a>
                                @endcan
                             
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$roles->links()}}

                </div>
            </div>
        </div>
    </div>
</main>
                
@endsection

