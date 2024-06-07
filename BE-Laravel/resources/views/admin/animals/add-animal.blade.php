@extends('admin.main')
@section('title', 'Home Page Admin')
@section('content_admin')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Admin!</h3>
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
                        <h4 class="card-title">Animal</h4>
                            <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name Animal</label>
                                            <input type="text" class="form-control" placeholder="Name Animal">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name Scientific</label>
                                            <input type="text" class="form-control" placeholder="Name Scientific">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Length</label>
                                            <input type="text" class="form-control" placeholder="Length">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Height</label>
                                            <input type="text" class="form-control" placeholder="Height">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Weight</label>
                                            <input type="text" class="form-control" placeholder="Weight">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Size</label>
                                            <input type="text" class="form-control" placeholder="Size">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Average Lifespan</label>
                                            <input type="text" class="form-control" placeholder="Average Lifespan">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Sound</label>
                                            <input type="text" class="form-control" placeholder="Sound">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Video</label>
                                            <input type="url" class="form-control" placeholder="Video URL">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Conservation Status</label>
                                            <input type="text" class="form-control" placeholder="Conservation Status">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Active</label>
                                            <input type="text" class="form-control" placeholder="Active">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Diet</label>
                                            <input type="text" class="form-control" placeholder="Diet">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <input type="text" class="form-control" placeholder="Category">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <div class="dropzone" id="myDropzone" style="border: 1px solid #e9ecef;">
                                                <div class="dz-message">
                                                    <span>Click or drop files here to upload</span>
                                                </div>
                                            </div>
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
    <script>
        if (!Dropzone.options.myDropzone) {
            Dropzone.options.myDropzone = {
                paramName: "file", // Tên của trường dùng để gửi tệp tin
                maxFilesize: 2, // Kích thước tệp tối đa (đơn vị: MB)
                acceptedFiles: ".jpeg,.jpg,.png,.gif", // Loại tệp chấp nhận
                addRemoveLinks: true, // Hiển thị liên kết để xóa tệp tin đã tải lên
                dictDefaultMessage: "Kéo và thả tệp tin hoặc nhấp để tải lên", // Thông báo mặc định
            };

            Dropzone.options.myDropzone.url = "index.html";
        }
    </script>
@endsection
