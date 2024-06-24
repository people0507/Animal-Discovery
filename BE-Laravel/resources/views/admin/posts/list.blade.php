@extends('admin.main')
@section('title', 'Home Page Admin')
@section('content_admin')
    <style>
        td {
            word-wrap: break-word;
            white-space: normal;
        }

        .show-more,
        .show-less {
            color: rgb(46, 91, 255);
            cursor: pointer;
            text-decoration: underline;
        }

        .full-description {
            display: none;
            white-space: normal;
        }
    </style>
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
                                        <th style="width: 65px;">STT</th>
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
                                    @foreach ($posts as $key => $post)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td style="width: 10%">{{ $post->title }}</td>
                                            <td><img src="http://127.0.0.1:8000/posts/{{ $post->image }}"
                                                    alt="{{ $post->title }}" width="200"></td>
                                            {{-- <td style="width: 30%">{{ $post->content }}</td> --}}
                                            <td style="width: 20%">
                                                <div class="description" id="description-{{ $key }}">
                                                    {{ Str::limit($post->content, 100) }}
                                                    @if (strlen($post->content) > 100)
                                                        <span class="show-more" onclick="showMore({{ $key }})">Show
                                                            more</span>
                                                    @endif
                                                </div>
                                                <div class="full-description" id="full-description-{{ $key }}"
                                                    style="display: none;">
                                                    {{ $post->content }}
                                                    <span class="show-less" onclick="showLess({{ $key }})">Show
                                                        less</span>
                                                </div>
                                            </td>
                                            <td>{{ $post->user->name }}</td>
                                            <td>Thích: {{ $post->likes_count }},Bình Luận: {{ $post->comments_count }}
                                            </td>
                                            @if ($post->status == 0)
                                                <td>Chưa Phê Duyệt</td>
                                            @else
                                                <td style="color: green">Đã Phê Duyệt</td>
                                            @endif
                                            <td>{{ $post->created_at }}</td>
                                            <td>
                                                <a href="#" class="icon-action delete-action" data-toggle="modal"
                                                    data-target="#deleteConfirmationModal_{{ $post->id }}"
                                                    style="color: red;">
                                                    <i class="icon-close"></i>
                                                </a>
                                                @if ($post->status == 0)
                                                    /
                                                    <a href="#" class="icon-action approve-action" data-toggle="modal"
                                                        data-target="#approvalConfirmationModal_{{ $post->id }}"
                                                        style="color: green;">
                                                        <i class="icon-check"></i>
                                                    </a>
                                                @endif
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
    @foreach ($posts as $key => $post)
        <div class="modal fade" id="deleteConfirmationModal_{{ $post->id }}" tabindex="-1" role="dialog"
            aria-labelledby="deleteConfirmationModalLabel_{{ $post->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel_{{ $post->id }}">Xóa bài viết động vật
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn xóa bài viết này không?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('admin.delete-posts', ['id' => $post->id]) }}" method="POST">
                            @csrf
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Approval -->
        <div class="modal fade" id="approvalConfirmationModal_{{ $post->id }}" tabindex="-1" role="dialog"
            aria-labelledby="approvalConfirmationModalLabel_{{ $post->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="approvalConfirmationModalLabel_{{ $post->id }}">Phê duyệt bài viết
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc chắn muốn phê duyệt bài viết này sẽ được hiển thị trên blog ?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('admin.approval-posts', ['id' => $post->id]) }}" method="POST">
                            @csrf
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-danger" id="confirmDeleteBtn">Có</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
<script>
    function showMore(id) {
        document.getElementById('description-' + id).style.display = 'none';
        document.getElementById('full-description-' + id).style.display = 'block';
    }

    function showLess(id) {
        document.getElementById('full-description-' + id).style.display = 'none';
        document.getElementById('description-' + id).style.display = 'block';
    }
</script>
