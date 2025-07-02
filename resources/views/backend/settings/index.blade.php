@extends('backend.partials.app')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Setting</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Setting Manage</li>
        </ol>


        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Setting Manage
            </div>
            <div class="card-body">
                <form action="{{route('admin.settings.store')}}" method="POST" enctype="multipart/form-data" id="ajax_form">
                    @csrf
                    <div class="row">
                
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="last_name">Full Name</strong>
                                <input type="text" id="last_name" class="form-control" name="name" placeholder="Full name..." value="{{ $item?$item->name:'' }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="email">Email Address</strong>
                                <input type="text" id="email" class="form-control" name="email" placeholder="Email Address" value="{{ $item?$item->email:'' }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="contact">Contact Number </strong>
                                <input type="text" id="contact" class="form-control" name="contact" placeholder="Contact Number " value="{{ $item?$item->contact:'' }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="alternative_conatct">ALterNative Contact Number </strong>
                                <input type="text" id="alternative_conatct" class="form-control" name="alternative_conatct" placeholder="ALterNative Contact Number " value="{{ $item?$item->alternative_conatct:'' }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="alternative_conatct">Address </strong>
                                <textarea placeholder="Address" name="address" class="form-control">{{ $item?$item->address:'' }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="alternative_conatct">Description </strong>
                                <textarea placeholder="Description" name="note" class="form-control">{{ $item?$item->note:'' }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong for="alternative_conatct">Site Logo </strong>
                                <input type="file" name="logo" class="form-control">
                            </div>
                        </div>

 
                        
                    </div>
                    <br>
                    <input type="submit" value="Save" class="btn btn-success">
                    <hr>
                </form>

            </div>
        </div>
    </div>
</main>
                
@endsection

