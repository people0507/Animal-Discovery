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
                                @if($mode == 'area')
                                <h4 class="card-title">Danh sách các châu lục của động vật</h4>
                                @elseif($mode == 'climate')
                                <h4 class="card-title">Danh sách các vùng khí hậu của động vật</h4>
                                @elseif($mode == 'nation')
                                <h4 class="card-title">Danh sách các quốc gia của động vật</h4>
                                @elseif($mode == 'color')
                                <h4 class="card-title">Danh sách các màu sắc của động vật</h4>
                                @elseif($mode == 'biome')
                                <h4 class="card-title">Danh sách các quần xã sinh học của động vật</h4>
                                @else
                                <h4 class="card-title">Danh sách các đại dương của động vật</h4>
                                @endif
                                <div class="table-responsive">
                                    <table id="multi_col_order"
                                        class="table table-striped table-bordered display no-wrap" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                        @if($mode == 'area')
                                            <th>Ảnh Châu Lục</th>
                                            <th>Tên Châu Lục</th>
                                            <th>Mô Tả Châu Lục</th>
                                        @elseif($mode == 'climate')
                                            <th>Ảnh Vùng Khí Hậu</th>
                                            <th>Tên Vùng Khí Hậu</th>
                                            <th>Mô Tả Vùng Khí Hậu</th>
                                        @elseif($mode == 'nation')
                                            <th>Tên Quốc Gia</th>
                                        @elseif($mode == 'color')
                                            <th>Ảnh Màu Sắc</th>
                                            <th>Tên Màu Sắc</th>
                                            <th>Mô Tả Màu Sắc</th>
                                        @elseif($mode == 'biome')
                                            <th>Ảnh Quần Xã Sinh Học</th>
                                            <th>Tên Quần Xã Sinh Học</th>
                                            <th>Mô Tả Quần Xã Sinh Học</th>
                                        @else
                                            <th>Ảnh Đại Dương</th>
                                            <th>Tên Đại Dương</th>
                                            <th>Mô Tả Đại Dương</th>
                                        @endif
                                        <th>Thời Gian Tạo</th>
                                        <th>Thao tác</th>
                                        </tr>
                                            
                                        </thead>
                                        <tbody>
                                           
                                        @if($mode == 'area')
                                        @foreach ($data->areas as $key => $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td><img src="http://localhost:8000/areas/{{$item->area_image}}" width="200"></td>
                                            <td>{{$item->area_name}}</td>
                                            <td>{{$item->area_description}}</td>     
                                            <td>{{$item->created_at}}</td>
                                                <td>
                                                <form action="{{ route('delete_user', ['id' => $item->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="icon-action" type="submit" style="color: red;">
                                                    <i class="icon-close"></i>
                                                </button>
                                                </form>
                                                    /
                                                    <a href="user-detail.html" class="icon-action" onclick="event.stopPropagation();"><i class="icon-settings"></i></a>
                                            </td>
                                        </tr>
                                            @endforeach
                                        @elseif($mode == 'climate')
                                        @foreach ($data->climates as $key => $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td><img src="http://localhost:8000/climates/full/{{$item->climate_image}}" width="200"></td>
                                            <td>{{$item->climate_name}}</td>
                                            <td>{{$item->climate_description}}</td>
                                            <td>{{$item->created_at}}</td>
                                                <td>
                                                <form action="{{ route('delete_user', ['id' => $item->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="icon-action" type="submit" style="color: red;">
                                                    <i class="icon-close"></i>
                                                </button>
                                                </form>
                                                    /
                                                    <a href="user-detail.html" class="icon-action" onclick="event.stopPropagation();"><i class="icon-settings"></i></a>
                                            </td>
                                        </tr>
                                            @endforeach
                                        @elseif($mode == 'nation')
                                        @foreach ($data->nations as $key => $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->nation_name}}</td>
                                            <td>{{$item->created_at}}</td>
                                                <td>
                                                <form action="{{ route('delete_user', ['id' => $item->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="icon-action" type="submit" style="color: red;">
                                                    <i class="icon-close"></i>
                                                </button>
                                                </form>
                                                    /
                                                    <a href="user-detail.html" class="icon-action" onclick="event.stopPropagation();"><i class="icon-settings"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @elseif($mode == 'color')
                                        @foreach ($data->colors as $key => $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td><img src="http://localhost:8000/colors/{{$item->color_image}}" width="200"></td>
                                            <td>{{$item->color_name}}</td>
                                            <td>{{$item->color_description}}</td>
                                            <td>{{$item->created_at}}</td>
                                                <td>
                                                <form action="{{ route('delete_user', ['id' => $item->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="icon-action" type="submit" style="color: red;">
                                                    <i class="icon-close"></i>
                                                </button>
                                                </form>
                                                    /
                                                    <a href="user-detail.html" class="icon-action" onclick="event.stopPropagation();"><i class="icon-settings"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @elseif($mode == 'biome')
                                        @foreach ($data->biomes as $key => $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td><img src="http://localhost:8000/biomes/full/{{$item->biome_image}}" width="200"></td>
                                            <td>{{$item->biome_name}}</td>
                                            <td>{{$item->biome_description}}</td>
                                            <td>{{$item->created_at}}</td>
                                                <td>
                                                <form action="{{ route('delete_user', ['id' => $item->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="icon-action" type="submit" style="color: red;">
                                                    <i class="icon-close"></i>
                                                </button>
                                                </form>
                                                    /
                                                    <a href="user-detail.html" class="icon-action" onclick="event.stopPropagation();"><i class="icon-settings"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        @foreach ($data->oceans as $key => $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td><img src="http://localhost:8000/oceans/{{$item->ocean_image}}" width="200"></td>
                                            <td>{{$item->ocean_name}}</td>
                                            <td>{{$item->ocean_description}}</td>
                                            <td>{{$item->created_at}}</td>
                                                <td>
                                                <form action="{{ route('delete_user', ['id' => $item->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="icon-action" type="submit" style="color: red;">
                                                    <i class="icon-close"></i>
                                                </button>
                                                </form>
                                                    /
                                                    <a href="user-detail.html" class="icon-action" onclick="event.stopPropagation();"><i class="icon-settings"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Modal -->
    <div class="modal fade" id="animalModal" tabindex="-1" role="dialog" aria-labelledby="animalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="animalModalLabel">
                       <b>Animal Details</b>
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Name:</strong> <span id="animalName"></span></p>
                    <p><strong>Scientific Name:</strong> <span id="animalScientificName"></span></p>
                    <p><strong>Description:</strong> <span id="animalDescription"></span></p>
                    <p><strong>Image:</strong> <img id="animalImage" src="" alt="" width="100"></p>
                    <p><strong>Length:</strong> <span id="animalLength"></span></p>
                    <p><strong>Height:</strong> <span id="animalHeight"></span></p>
                    <p><strong>Weight:</strong> <span id="animalWeight"></span></p>
                    <p><strong>Size:</strong> <span id="animalSize"></span></p>
                    <p><strong>Average Lifespan:</strong> <span id="animalLifespan"></span></p>
                    <p><strong>Sound:</strong> <span id="animalSound"></span></p>
                    <p><strong>Video:</strong> <span id="animalVideo"></span></p>
                    <p><strong>Conservation Status:</strong> <span id="animalConservationStatus"></span></p>
                    <p><strong>Activity Time:</strong> <span id="animalActivity"></span></p>
                    <p><strong>Diet:</strong> <span id="animalDiet"></span></p>
                    <p><strong>Category:</strong> <span id="animalCategory"></span></p>
                </div>
            </div>
        </div>
    </div>
@endsection
     <script>
        function showModal(name, scientificName, description, imageSrc, category, length, height, weight, size, lifespan, sound, video, conservationStatus, activity, diet) {
            document.getElementById('animalName').innerText = name;
            document.getElementById('animalScientificName').innerText = scientificName;
            document.getElementById('animalDescription').innerText = description;
            document.getElementById('animalImage').src = imageSrc;
            document.getElementById('animalLength').innerText = length;
            document.getElementById('animalHeight').innerText = height;
            document.getElementById('animalWeight').innerText = weight;
            document.getElementById('animalSize').innerText = size;
            document.getElementById('animalLifespan').innerText = lifespan;
            document.getElementById('animalSound').innerText = sound;
            document.getElementById('animalVideo').innerText = video;
            document.getElementById('animalConservationStatus').innerText = conservationStatus;
            document.getElementById('animalActivity').innerText = activity;
            document.getElementById('animalDiet').innerText = diet;
            document.getElementById('animalCategory').innerText = category;
            $('#animalModal').modal('show');
        }
        </script>
