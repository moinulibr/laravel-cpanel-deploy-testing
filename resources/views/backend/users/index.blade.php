@extends('backend.partials.app')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Users</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Users List</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Users
            </div>
            <div class="card-body">

                <div class="row mb-2">
                    <div class="col-xl-4">
                        <div class="">
                            
                                <a type="button" href="{{route('admin.users.create')}}" class="btn btn-danger mb-2 me-2">
                                    <i class="fas fa-plus"></i> Add New User</a>
                           
                        
                        </div>
                    </div><!-- end col-->
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" >
                        <thead class="table-light">
                            <tr>
                                <th> Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th style="width: 125px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @foreach($user->getRoleNames() as $role)
                                        <span class="badge bg-success">{{$role}}</span>
                                    @endforeach
                                </td>
                                <td>
                                    @can('users.edit')
                                    
                                    @endcan
                                </td>
                                <td>
                                @can('users.edit')
                                <a title="Edit" href="{{ route('admin.users.edit',[$user->id])}}" class="action-icon"> 
                                    <i class="fas fa-edit"></i></a>
                                @endcan
                                @can('users.delete')
                                    <a title="Delete" href="{{ route('admin.users.destroy',[$user->id])}}" class="delete btn btn-sm btn-danger"> 
                                        <i class="fas fa-trash"></i>
                                    </a>
                                @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</main>
                
@endsection

