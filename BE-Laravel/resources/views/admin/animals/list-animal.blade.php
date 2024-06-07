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
                        <h4 class="card-title">All Animal</h4>
                        <div class="table-responsive">
                            <table id="multi_col_order"
                                class="table table-striped table-bordered display no-wrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Name Animal</th>
                                        <th>Name Scientiffi</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <!-- <th>Length</th>
                                        <th>Height</th>
                                        <th>Weight</th>
                                        <th>Size</th>
                                        <th>Average Lifespan</th>
                                        <th>Sound</th>
                                        <th>Video</th>
                                        <th>Conservation Status</th>
                                        <th>Active</th>
                                        <th>Diet</th> -->
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr onclick="showModal('Great White Shark', 'Carcharodon carcharias', 'The great white shark is a large species of shark found in coastal waters.', 'https://news4sanantonio.com/resources/media2/16x9/full/1015/center/80/cab905ba-dbcd-43ab-99c7-3fbdf1eadd8b-large16x9_GettyImages515714114.jpg', 'Fish', '5 meters', '1.5 meters', '1100 kg', 'Large', '70 years', 'Shark sound', 'shark_video.mp4', 'Vulnerable', 'Diurnal', 'Carnivore')">
                                        <td>1</td>
                                        <td>Great White Shark</td>
                                        <td>Carcharodon carcharias</td>
                                        <td>The great white shark is a large species of shark found in coastal waters.</td>
                                        <td><img src="https://news4sanantonio.com/resources/media2/16x9/full/1015/center/80/cab905ba-dbcd-43ab-99c7-3fbdf1eadd8b-large16x9_GettyImages515714114.jpg" alt="Shark" width="100"></td>
                                        <td>Fish</td>
                                        <td>
                                            <a href="#" class="icon-action delete-action" data-toggle="modal" data-target="#deleteConfirmationModal" style="color: red;"><i class="icon-close"></i></a>
                                            /
                                            <a href="animal-detail.html" class="icon-action" onclick="event.stopPropagation();"><i class="icon-settings"></i></a>
                                        </td>
                                    </tr>
                                    <tr onclick="showModal('Great White Shark', 'Carcharodon carcharias', 'The great white shark is a large species of shark found in coastal waters.', 'https://news4sanantonio.com/resources/media2/16x9/full/1015/center/80/cab905ba-dbcd-43ab-99c7-3fbdf1eadd8b-large16x9_GettyImages515714114.jpg', 'Fish', '5 meters', '1.5 meters', '1100 kg', 'Large', '70 years', 'Shark sound', 'shark_video.mp4', 'Vulnerable', 'Diurnal', 'Carnivore')">
                                        <td>2</td>
                                        <td>Cat</td>
                                        <td>Felis catus</td>
                                        <td>Cats are small, carnivorous mammals that are often kept as pets.</td>
                                        <td><img src="cat.jpg" alt="Cat" width="100"></td>
                                        <td>Mammals</td>
                                        <td>
                                            <a href="#" class="icon-action" onclick="showDeleteConfirmationModal();" style="color: red;"><i class="icon-close"></i></a>
                                            /
                                            <a href="animal-detail.html" class="icon-action" onclick="event.stopPropagation();"><i class="icon-settings"></i></a>
                                        </td>
                                    </tr>
                                    <tr onclick="showModal('Great White Shark', 'Carcharodon carcharias', 'The great white shark is a large species of shark found in coastal waters.', 'https://news4sanantonio.com/resources/media2/16x9/full/1015/center/80/cab905ba-dbcd-43ab-99c7-3fbdf1eadd8b-large16x9_GettyImages515714114.jpg', 'Fish', '5 meters', '1.5 meters', '1100 kg', 'Large', '70 years', 'Shark sound', 'shark_video.mp4', 'Vulnerable', 'Diurnal', 'Carnivore')">
                                        <td>3</td>
                                        <td>Great White Shark</td>
                                        <td>Carcharodon carcharias</td>
                                        <td>The great white shark is a large species of shark found in coastal waters.</td>
                                        <td><img src="shark.jpg" alt="Shark" width="100"></td>
                                        <td>Fish</td>
                                        <td>
                                            <a href="#" class="icon-action" onclick="showDeleteConfirmationModal();" style="color: red;"><i class="icon-close"></i></a>
                                            /
                                            <a href="animal-detail.html"" class="icon-action" onclick="event.stopPropagation();"><i class="icon-settings"></i></a>
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
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Xác nhận xóa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa mục này không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Xóa</button>
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
        // Chỉ kích hoạt modal xác nhận xóa khi click vào nút "Xóa"
        document.querySelectorAll('.delete-action').forEach(item => {
            item.addEventListener('click', function(event) {
                event.preventDefault(); // Chặn sự kiện mặc định của nút "Xóa"
                event.stopPropagation(); // Ngăn chặn sự kiện lan truyền lên cấp độ cao hơn
                $('#deleteConfirmationModal').modal('show'); // Hiển thị modal xác nhận xóa
            });
        });

        $('#confirmDeleteBtn').click(function() {
            alert('Xóa thành công!');
            $('#deleteConfirmationModal').modal('hide');
        });
    </script>
