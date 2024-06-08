@extends('admin.main')
@section('title', 'Home Page Admin')
@section('content_admin')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">{{ Auth::user()->name }}</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html">Animal Management</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Users</h4>
                            <form action="{{route('create_user')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control" placeholder="Name Scientific">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender" id="" class="form-control">
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Birthday</label>
                                            <input type="date" name="birthdate" class="form-control" placeholder="Birthday">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select name="role_id" id="" class="form-control">
                                                <option value="1">Admin</option>
                                                <option value="2">User</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Avatar</label>
                                            <input type="file" name="avatar" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions text-right">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button type="reset" class="btn btn-dark">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
