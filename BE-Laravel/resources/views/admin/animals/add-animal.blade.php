@extends('admin.main')
@section('title', 'Home Page Admin')
@section('content_admin')
<style>
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px;
            background-color: #4CAF50;
            /* Màu xanh */
            color: white;
            z-index: 9999;
            display: none;
            /* Ẩn ban đầu */
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .notification.success {
            background-color: #4CAF50;
            /* Màu xanh */
        }

        .notification.failed {
            background-color: #ff3333;
            /* Màu đỏ */
            color: white;
        }


        .notification.show {
            display: block;
            animation: slideInRight 0.5s ease-out forwards;
        }

        @keyframes slideInRight {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(0);
            }
        }
    </style>
    @if (session('success'))
        <div id="notification" class="notification success">
            <p id="notification-message"></p>
            <span id="close-notification" class="close-notification"><i class="fa fa-check" aria-hidden="true"></i>
                {{ session('success') }}</span>
        </div>
    @endif

    @if (session('failed'))
        <div id="notification" class="notification failed">
            <p id="notification-message"></p>
            <span id="close-notification" class="close-notification"><i class="fa fa-exclamation-triangle"
                    aria-hidden="true"></i> {{ session('failed') }}</span>
        </div>
    @endif
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <a href="{{ route('list_animal') }}" class="btn btn-primary mb-3"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i>
                    Quay lại</a>
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">{{ Auth::user()->name }}</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('list_animal') }}">Thông tin động vật</a>
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
                        <h4 class="card-title">Thông tin chi tiết động vật</h4>
                        <form
                            action="{{ $mode == 'add' ? route('admin.create-animal') : route('admin.update-animal', ['id' => $animalDetail->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tên</label>
                                            @if ($mode == 'add')
                                                <input name="animal_name" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input name="animal_name" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin"
                                                    value="{{ $animalDetail->animal_name }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tên Khoa Học</label>
                                            @if ($mode == 'add')
                                                <input name="animal_scientific_name" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input name="animal_scientific_name" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin"
                                                    value="{{ $animalDetail->animal_scientific_name }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Chiều Dài</label>
                                            @if ($mode == 'add')
                                                <input name="animal_length" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input name="animal_length" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin"
                                                    value="{{ $animalDetail->animal_length }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tốc Độ Tối Đa</label>
                                            @if ($mode == 'add')
                                                <input name="top_speed" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input name="top_speed" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin" value="{{ $animalDetail->top_speed }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Cân Nặng</label>
                                            @if ($mode == 'add')
                                                <input name="animal_weight" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input name="animal_weight" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin"
                                                    value="{{ $animalDetail->animal_weight }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Sải Cánh</label>
                                            @if ($mode == 'add')
                                                <input name="animal_swing" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input name="animal_swing" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin"
                                                    value ="{{ $animalDetail->animal_swing }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Số Lượng Quần Thể</label>
                                            @if ($mode == 'add')
                                                <input name="population_size" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input name="population_size" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin"
                                                    value ="{{ $animalDetail->population_size }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tuổi Thọ Trung Bình</label>
                                            @if ($mode == 'add')
                                                <input name="avg_lifespan" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input name="avg_lifespan" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin"
                                                    value ="{{ $animalDetail->avg_lifespan }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tiếng Kêu</label>
                                            <input name="animal_sound" type="file" class="form-control"
                                                accept=".mp3,.mp4">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Hành Vi Giao Hợp</label>
                                            @if ($mode == 'add')
                                                <input name="mating_behavior" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input name="mating_behavior" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin"
                                                    value ="{{ $animalDetail->mating_behavior }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Mùa Sinh Sản</label>
                                            @if ($mode == 'add')
                                                <input name="reproduction_season" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input name="reproduction_season" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin"
                                                    value ="{{ $animalDetail->reproduction_season }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Thời Gian Mang Thai (Ấp Trứng)</label>
                                            @if ($mode == 'add')
                                                <input name="pregnancy_duration" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input name="pregnancy_duration" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin"
                                                    value ="{{ $animalDetail->pregnancy_duration }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Số Lượng Sinh Sản Con(Trứng) </label>
                                            @if ($mode == 'add')
                                                <input name="baby_carrying" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input name="pregnancy_duration" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin"
                                                    value ="{{ $animalDetail->pregnancy_duration }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tuổi Trưởng Thành</label>
                                            @if ($mode == 'add')
                                                <input name="independent_age" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin">
                                            @else
                                                <input name="independent_age" type="text" class="form-control"
                                                    placeholder="Hãy nhập thông tin"
                                                    value ="{{ $animalDetail->independent_age }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tình Trạng Bảo Tồn</label>
                                        <select name="conservation_status_id" id="" class="form-control">
                                            @if ($mode == 'add')
                                                @foreach ($conservationStatus as $item)
                                                    <option value="{{ $item->id }}">{{ $item->status_name }}</option>
                                                @endforeach
                                            @else
                                                @foreach ($conservationStatus as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $animalDetail->conservation_status_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->status_name }}</option>
                                                @endforeach
                                            @endif
                                        </select>

                                    </div>
                                    <div class="col-md-4">
                                        <label>Chế Độ Ăn</label>
                                        <select name="diet_type" id="" class="form-control">
                                            @if ($mode == 'add')
                                                @foreach ($dietType as $item)
                                                    <option value="{{ $item->id }}">{{ $item->diet_name }}</option>
                                                @endforeach
                                            @else
                                                @foreach ($dietType as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $animalDetail->diet_type_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->diet_name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Loại Động Vật</label>
                                        <select name="category_id" id="" class="form-control">
                                            @if ($mode == 'add')
                                                @foreach ($animalCategory as $item)
                                                    <option value="{{ $item->id }}">{{ $item->category_name }}
                                                    </option>
                                                @endforeach
                                            @else
                                                @foreach ($animalCategory as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $animalDetail->category_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->category_name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Xu Hướng Quần Thể</label>
                                        <select name="population_trending_id" id="" class="form-control">
                                            @if ($mode == 'add')
                                                @foreach ($populationTrending as $item)
                                                    <option value="{{ $item->id }}">
                                                        {{ $item->population_trending_name }}</option>
                                                @endforeach
                                            @else
                                                @foreach ($populationTrending as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $animalDetail->population_trending_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->population_trending_name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <label>Thời Gian Hoạt Động</label>
                                        <select name="activity_time_id" id="" class="form-control">
                                            @if ($mode == 'add')
                                                @foreach ($activityTime as $item)
                                                    <option value="{{ $item->id }}">{{ $item->activity_name }}
                                                    </option>
                                                @endforeach
                                            @else
                                                @foreach ($activityTime as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $animalDetail->activity_time_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->activity_name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <label>Đường Dẫn Video</label>
                                            @if ($mode == 'add')
                                                <textarea name="animal_video" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;"></textarea>
                                            @else
                                                <textarea name="animal_video" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;">{{ $animalDetail->animal_video }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Mô Tả</label>
                                            @if ($mode == 'add')
                                                <textarea name="animal_description" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;"></textarea>
                                            @else
                                                <textarea name="animal_description" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;">{{ $animalDetail->animal_description }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Vẻ Bề Ngoài</label>
                                            @if ($mode == 'add')
                                                <textarea name="appearance_description" class="form-control" placeholder="Hãy nhập thông tin"
                                                    style="height: 200px;"></textarea>
                                            @else
                                                <textarea name="appearance_description" class="form-control" placeholder="Hãy nhập thông tin"
                                                    style="height: 200px;">{{ $animalDetail->appearance_description }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Phân Bố Địa Lý</label>
                                            @if ($mode == 'add')
                                                <textarea name="geography_description" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;"></textarea>
                                            @else
                                                <textarea name="geography_description" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;">{{ $animalDetail->geography_description }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tập Tính & Lối Sống</label>
                                            @if ($mode == 'add')
                                                <textarea name="habit_lifestyle_description" class="form-control" placeholder="Hãy nhập thông tin"
                                                    style="height: 200px;"></textarea>
                                            @else
                                                <textarea name="habit_lifestyle_description" class="form-control" placeholder="Hãy nhập thông tin"
                                                    style="height: 200px;">{{ $animalDetail->habit_lifestyle_description }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tập Tính & Sinh Sản</label>
                                            @if ($mode == 'add')
                                                <textarea name="mating_habit_description" class="form-control" placeholder="Hãy nhập thông tin"
                                                    style="height: 200px;"></textarea>
                                            @else
                                                <textarea name="mating_habit_description" class="form-control" placeholder="Hãy nhập thông tin"
                                                    style="height: 200px;">{{ $animalDetail->mating_habit_description }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Chế Độ Ăn & Dinh Dưỡng</label>
                                            @if ($mode == 'add')
                                                <textarea name="diet_nutrition_description" class="form-control" placeholder="Hãy nhập thông tin"
                                                    style="height: 200px;"></textarea>
                                            @else
                                                <textarea name="diet_nutrition_description" class="form-control" placeholder="Hãy nhập thông tin"
                                                    style="height: 200px;">{{ $animalDetail->diet_nutrition_description }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Các Mối Đe Dọa Đối Với Quần Thể</label>
                                            @if ($mode == 'add')
                                                <textarea name="population_threat" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;"></textarea>
                                            @else
                                                <textarea name="population_threat" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;">{{ $animalDetail->population_threat }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Số Lượng Trong Quần Thể</label>
                                            @if ($mode == 'add')
                                                <textarea name="population_number" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;"></textarea>
                                            @else
                                                <textarea name="population_number" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;">{{ $animalDetail->population_number }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Vai Trò Sinh Thái</label>
                                            @if ($mode == 'add')
                                                <textarea name="ecological_niche" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;"></textarea>
                                            @else
                                                <textarea name="ecological_niche" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;">{{ $animalDetail->population_number }}</textarea>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Những Sự Thật Thú Vị</label>
                                            @if ($mode == 'add')
                                                <textarea name="fun_fact" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;"></textarea>
                                            @else
                                                <textarea name="fun_fact" class="form-control" placeholder="Hãy nhập thông tin" style="height: 200px;">{{ $animalDetail->fun_fact }}</textarea>
                                            @endif
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

            Dropzone.options.myDropzone.url = "{{ route('list_animal') }}";
        }
    </script>
@endsection
<script>
    // Hiển thị thông báo
    function showNotification(message) {
        var notification = document.querySelector('.notification');
        notification.innerHTML = message;
        notification.classList.add('show');

        // Tự động ẩn sau 5 giây
        setTimeout(function() {
            hideNotification();
        }, 5000); // Ẩn sau 5 giây
    }

    // Ẩn thông báo
    function hideNotification() {
        var notification = document.querySelector('.notification');
        notification.classList.remove('show');
    }

    // Hiển thị thông báo khi trang được load
    window.onload = function() {
        var successMessage = "{{ session('success') }}";
        var failedMessage = "{{ session('failed') }}";

        if (failedMessage) {
            showNotification(failedMessage);
        }
        if (successMessage) {
            showNotification(successMessage);
        }
    };
</script>