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
                                <h4 class="card-title">All Users</h4>
                                <div class="table-responsive">
                                    <table id="multi_col_order"
                                        class="table table-striped table-bordered display no-wrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Gender</th>
                                                <th>Birthday</th>
                                                <th>Avatar</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Admin</td>
                                                <td>admin@gmail.com</td>
                                                <td>Male</td>
                                                <td>29-11-2003</td>
                                                <td><img src="https://i.pinimg.com/originals/6a/44/f0/6a44f0e35b10e6ed063eeebf7ed844f9.jpg"Cat" width="100"></td>
                                                <td>Manager</td>
                                                <td>
                                                    <a href="#" class="icon-action" onclick="showDeleteConfirmationModal();" style="color: red;"><i class="icon-close"></i></a>
                                                    /
                                                    <a href="user-detail.html" class="icon-action" onclick="event.stopPropagation();"><i class="icon-settings"></i></a>
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
