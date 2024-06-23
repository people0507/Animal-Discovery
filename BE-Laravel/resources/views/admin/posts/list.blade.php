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
                        <h4 class="card-title">Danh sách bài viết động vật</h4>
                        <div class="table-responsive">
                            <table id="multi_col_order" class="table table-striped table-bordered display no-wrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tiêu đề bài viết</th>
                                        <th>Ảnh</th>
                                        <th>Nội dung</th>
                                        <th>Người tạo</th>
                                        <th>Tương tác</th>
                                        <th>Trạng thái</th>
                                        <th>Thời Gian Tạo</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bài viết 1</td>
                                        <td><img src="http://127.0.0.1:8000/users/img/about.jpg" alt="Ảnh bài viết 1"
                                                width="100">
                                        </td>
                                        <td>Nội dung bài viết 1</td>
                                        <td>Người tạo 1</td>
                                        <td>Likes: 10, Comments: 5</td>
                                        <td>Đã xuất bản</td>
                                        <td>2023-06-20 12:00:00</td>
                                        <td>
                                            <a href="#" class="icon-action delete-action" data-toggle="modal"
                                                data-target="#deleteConfirmationModal_" style="color: red;">
                                                <i class="icon-close"></i>
                                            </a>
                                        </td>
                                        {{-- <td>
                                            @if ($post->status == 'Đã xuất bản')
                                                <a href="#" class="icon-action delete-action" data-toggle="modal" data-target="#deleteConfirmationModal_{{ $index }}" style="color: red;">
                                                    <i class="icon-close"></i>
                                                </a>
                                            @else
                                                <a href="#" class="icon-action delete-action" data-toggle="modal" data-target="#deleteConfirmationModal_{{ $index }}" style="color: red;">
                                                    <i class="icon-close"></i>
                                                </a>
                                                /
                                                <a href="#" class="icon-action approve-action" style="color: green;">
                                                    <i class="icon-check"></i>
                                                </a>
                                            @endif
                                        </td> --}}
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Bài viết 2</td>
                                        <td><img src="http://127.0.0.1:8000/users/img/about.jpg" alt="Ảnh bài viết 2"
                                                width="100"></td>
                                        <td>Nội dung bài viết 2</td>
                                        <td>Người tạo 2</td>
                                        <td>Likes: 8, Comments: 3</td>
                                        <td>Chưa xuất bản</td>
                                        <td>2023-06-21 09:30:00</td>
                                        <td>
                                            <a href="#" class="icon-action delete-action" data-toggle="modal"
                                                data-target="#deleteConfirmationModal_" style="color: red;">
                                                <i class="icon-close"></i>
                                            </a>
                                            /
                                            <a href="#" class="icon-action approve-action" style="color: green;">
                                                <i class="icon-check"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteConfirmationModal_" tabindex="-1" role="dialog"
        aria-labelledby="deleteConfirmationModalLabel_" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel_">Xóa bài viết động vật
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa bài viết này không?
                </div>
                <div class="modal-footer">
                    <form action="" method="POST">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script></script>
