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
                        @if($mode == 'add')
                        <h4 class="card-title">Thêm Mới Thông Tin Người Dùng</h4>
                        @else
                        <h4 class="card-title">Cập Nhật Thông Tin Người Dùng</h4>
                        @endif
                            <form action="{{$mode == 'add' ? route('admin.create_user') : route('admin.update_user',['id' => $user->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tên Người Dùng</label>
                                            @if($mode == 'add')
                                            <input type="text" name="username" class="form-control" placeholder="Hãy nhập thông tin">
                                            @else
                                            <input type="text" name="username" class="form-control" placeholder="Username" value="{{$user->name}}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            @if($mode == 'add')
                                            <input type="text" name="email" class="form-control" placeholder="Hãy nhập thông tin">
                                            @else
                                            <input type="text" name="email" class="form-control" placeholder="Name Scientific" value="{{$user->email}}">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Mật Khẩu</label>
                                            @if($mode == 'add')
                                            <input type="password" name="password" class="form-control" placeholder="Hãy nhập thông tin">
                                            @else
                                            <input type="password" name="password" class="form-control" placeholder="Password" value="{{$user->password}}">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Giới Tính</label>
                                            <select name="gender" id="" class="form-control">
                                            @if($mode == 'add')
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                            @else
                                                <option value="1" {{$user->gender == 1 ? 'selected' : ''}}>Nam</option>
                                                <option value="2" {{$user->gender == 2 ? 'selected' : ''}}>Nữ</option>
                                            @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Ngày Sinh</label>
                                            @if($mode == 'add')
                                                <input type="date" name="birthdate" class="form-control" placeholder="Hãy nhập thông tin">
                                            @else
                                                <input type="date" name="birthdate" class="form-control" placeholder="Birthday" value="{{$user->birthdate}}">
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Vai Trò</label>
                                            <select name="role_id" id="" class="form-control">
                                                @foreach ($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->role_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Ảnh Đại Diện</label>
                                            <input type="file" name="avatar" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions text-right">
                                    @if($mode == 'add')
                                    <button type="submit" class="btn btn-info">Thêm Mới</button>
                                    @else
                                    <button type="submit" class="btn btn-info">Cập Nhật</button>
                                    @endif
                                    <button type="reset" class="btn btn-dark">Làm Mới</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
