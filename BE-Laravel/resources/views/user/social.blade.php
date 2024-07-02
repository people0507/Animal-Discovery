<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cộng Đồng Động Vật</title>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="{{ asset('users/social_assets/css/style.css') }}">
    <!-- ICONCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
</head>

<body>
    <nav>
        <div class="container">
            <h2 class="logo">
                Cộng Đồng Động Vật
            </h2>
            <div class="create">
                {{-- <label class="btn btn-primary" for="create-post" id="createPostButton">Create</label> --}}
                <div class="profile-picture">
                    <img src="{{ asset('users/social_assets/images/profile-1.jpg') }}">
                </div>
            </div>
        </div>
    </nav>
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
    <!----------------------------- MAIN ----------------------------->
    <main>

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
        <div class="container">
            <!-- ================ LEFT ================ -->
            <div class="left">
                <div class="profile">
                    <div class="profile-picture">
                        <img src="{{ asset('users/social_assets/images/profile-1.jpg') }}">
                    </div>
                    <div class="handle">
                        <h4>{{ Auth::user()->name }}</h4>
                        <p class="text-muted">
                            {{ Auth::user()->email }}
                        </p>
                    </div>
                </div>

                <!-- ============= SIDEBAR ============= -->

                <div class="sidebar">
                    <a class="menu-item active">
                        <span><i class="uil uil-home"></i>
                        </span>
                        <h3>Trang chủ</h3>
                    </a>
                    <a class="menu-item" id="notification">
                        <span><i class="uil uil-bell"><small class="notification-count">4</small></i>
                        </span>
                        <h3>Thông Báo</h3>
                        <!-- ----------------------- NOTIFICATION POPUP ----------------------- -->
                        <div class="notification-popup" style="display: none;">
                        </div>
                    </a>
                    <a class="menu-item" id="theme">
                        <span><i class="uil uil-palette"></i>
                        </span>
                        <h3>Giao Diện</h3>
                    </a>

                </div>
                <!-- ======================= END OF SIDEBAR ======================= -->
                <label for="create-post" class="btn btn-primary" id="createPostButton">
                    Create Post
                </label>
            </div>
            <!-- ================ END OF LEFT ================ -->

            <!-- ================ MIDDLE ================ -->
            <div class="middle">

                <!-- ================ FEEDS ================ -->
                @foreach ($posts as $key => $post)
                    <div class="feeds">
                        <div class="feed">
                            <!-- ================ FEED 1 ================ -->
                            <div class="head">
                                <div class="user">
                                    <div class="profile-picture">

                                        <img src="{{ asset('users/social_assets/images/profile-10.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="ingo">
                                        <h3>{{ $post->user->name }}</h3>
                                        <small>Dubai, 15 MINUTED AGO</small>
                                    </div>
                                </div>
                                <span class="edit">
                                    <i class="uil uil-ellipsis-h"></i>
                                </span>
                            </div>

                            <div class="content" style="margin:5px 0px">
                                {{-- <p>{{ $post->content }}</p> --}}
                                <div class="description" id="description-{{ $key }}">
                                    {{ Str::limit($post->content, 300) }}
                                    @if (strlen($post->content) > 300)
                                        <span class="show-more" onclick="showMore({{ $key }})">Xem Thêm</span>
                                    @endif
                                </div>
                                <div class="full-description" id="full-description-{{ $key }}"
                                    style="display: none;">
                                    {{ $post->content }}
                                    <span class="show-less" onclick="showLess({{ $key }})">Ẩn bớt</span>
                                </div>
                            </div>

                            <div class="photo">
                                <img src="http://localhost:8000/posts/{{ $post->image }}" alt="">
                            </div>

                            <div class="action-button">
                                <div class="interaction-buttons">
                                    <span id="likeIcon_{{ $key }}">
                                        @if ($post->liked_by_user == false)
                                            <i class="far fa-heart"></i>
                                    </span>
                                @else
                                    <i class="fa-heart liked fas"></i>
                @endif
                <span id="commentIcon_{{ $key }}"><i class="uil uil-comment-dots"></i></span>
                <span><i class="uil uil-share-alt"></i></span>

            </div>
            <div class="bookmark">
                <span><i class="uil uil-bookmark-full"></i></span>
            </div>
        </div>

        <div class="liked-by">
            <span><img src="{{ asset('users/social_assets/images/profile-10.jpg') }}" alt=""></span>
            <span><img src="{{ asset('users/social_assets/images/profile-15.jpg') }}" alt=""></span>
            <span><img src="{{ asset('users/social_assets/images/profile-13.jpg') }}" alt=""></span>
            <p>Like by <b>Ernest Aritn</b> and <b>{{ $post->likes_count }} others</b></p>

        </div>

        <div class="caption">
            <p>

                <b>{{ $post->user->name }}</b> {{ $post->title }}

                <span class="harsh-tag">#lifestyle</span>
            </p>
        </div>

        <div class="comments text-muted">"View all {{ $post->comments_count }} comments"</div>

        </div>
        </div>
        @endforeach
        </div>
    </main>

    <!-- =============================================== THEME CUSTOMIZATION =================================== -->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p class="text-muted">Manage your font size, color, and background.</p>

            <!-- --------- FONT SIZES ---------- -->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h5>Aa</h5>
                    <div class="choose-size">
                        <span class="font-size-1 "></span>
                        <span class="font-size-2 active"></span>
                        <span class="font-size-3"></span>
                        <span class="font-size-4"></span>
                        <span class="font-size-5"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>

            <!-- --------- PRIMARY COLORS ---------- -->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 "></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4 active"></span>
                    <span class="color-5"></span>
                </div>
            </div>

            <!-- --------- BACKGROUND COLORS ---------- -->
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5>Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Light Out</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($posts as $key => $post)
        <div id="commentModal_{{ $key }}" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close_{{ $key }}">&times;</span>
                    <h2>Để lại bình luận </h2>
                </div>
                <div class="comments-modal">

                </div>
                <div class="comment-box">
                    <input id="inputComment_{{ $key }}" type="text" class="btn-comment"
                        placeholder="Viết bình luận ...">
                    <br>
                    <button id="submitComment_{{ $key }}" type="button" class="btn btn-primary"
                        style="margin-top: 10px">Bình Luận</button>
                </div>
            </div>
        </div>
    @endforeach

    {{-- Modal Create --}}
    <div id="addContinentModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeModal">&times;</span>
                <h5 class="modal-title">Thêm bài viết</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.create_animal_post') }}" id="addContinentForm"
                    enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="continentTitle">Tên bài viết</label>
                        <input type="text" class="form-control" name="title" id="continentTitle"
                            placeholder="Nhập tiêu đề bài viết" required>
                    </div>
                    <div class="form-group">
                        <label for="continentDescription">Mô tả</label>
                        <textarea style="height:300px" class="form-control" name="content" id="continentDescription" rows="3"
                            placeholder="Nhập mô tả" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="continentImage">Hình ảnh</label>
                        <input type="file" class="form-control-file" name="image" id="continentImage"
                            onchange="previewImage(event)" required>
                    </div>
                    <div class="preview-container">
                        <img id="imagePreview" src="#" alt="Preview"
                            style="display: none; width: 500px; height: auto;" />
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" style="margin-right: 10px">Lưu</button>
                <button type="button" class="btn btn-secondary" id="closeModalButton">Đóng</button>
            </div>
            </form>

        </div>
    </div>

    {{--
    <script src="./assets/js/main.js"></script> --}}
    <script src="{{ asset('users/social_assets/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var createPostButton = document.getElementById('createPostButton');
            var addContinentModal = document.getElementById('addContinentModal');
            var closeModal = document.getElementById('closeModal');
            var closeModalButton = document.getElementById('closeModalButton');
            var addContinentForm = document.getElementById('addContinentForm');

            // Mở modal khi nhấn nút "Create Post"
            createPostButton.addEventListener('click', function() {
                addContinentModal.style.display = 'flex';
            });

            // Đóng modal khi nhấn nút "X" hoặc "Đóng"
            closeModal.addEventListener('click', function() {
                addContinentModal.style.display = 'none';
            });

            closeModalButton.addEventListener('click', function() {
                addContinentModal.style.display = 'none';
            });

            // Đóng modal khi nhấn ra ngoài modal
            window.addEventListener('click', function(event) {
                if (event.target === addContinentModal) {
                    addContinentModal.style.display = 'none';
                }
            });

        });

        function showMore(id) {
            document.getElementById('description-' + id).style.display = 'none';
            document.getElementById('full-description-' + id).style.display = 'block';
        }

        function showLess(id) {
            document.getElementById('full-description-' + id).style.display = 'none';
            document.getElementById('description-' + id).style.display = 'block';
        }
    </script>
    <script>
        let arr = @json($posts);
        arr.forEach((element, index) => {
            function likeVideo() {
                const likeIcon = document.querySelector('#likeIcon_' + index + ' i');
                likeIcon.classList.toggle('liked');

                if (likeIcon.classList.contains('liked')) {
                    likeIcon.classList.remove('far');
                    likeIcon.classList.add('fas');
                    positiveFeedback = true;
                } else {
                    likeIcon.classList.remove('fas');
                    likeIcon.classList.add('far');
                    positiveFeedback = false;
                }

                // Ajax request
                var postId = element.id;
                var liked = element.liked_by_user;
                var url = '{{ route('user.post_like_or_dislike') }}';

                fetch(url, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            post_id: postId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data) {
                            console.log(data);
                        } else {
                            console.error('Failed to like/unlike post');
                        }
                    })
                    .catch(error => {
                        console.error('Error processing request:', error);
                    });
            }

            const likeIconContainer = document.querySelector('#likeIcon_' + index);
            likeIconContainer.addEventListener('click', likeVideo);
            var modal = document.getElementById("commentModal_" + index);
            var btn = document.getElementById("commentIcon_" + index);
            var span = document.getElementsByClassName("close_" + index)[0];
            btn.onclick = function() {
                modal.style.display = "block";
            }
            span.onclick = function() {
                modal.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            function loadComments(response) {
                var key = index;
                var $modalHeader = $('#commentModal_' + key + ' .modal-content .modal-header');
                var $commentsModal = $modalHeader.siblings('.comments-modal');
                $commentsModal.empty();
                response.forEach(function(comment, index) {
                    var commentHtml = '<div class="comment container">';
                    commentHtml += '<div class="c-user">';
                    commentHtml +=
                        '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJxA7pQkxq3NaB1gvfVi6jV25AHuY_CEjk-Q&s" alt="" class="usr-img">';
                    commentHtml += '<p class="usr-name">' + comment.name + '</p>';
                    commentHtml += '</div>';
                    commentHtml += '<p class="c-text">';
                    commentHtml += '<span class="reply-to"></span>';
                    commentHtml += '<span class="c-body">' + comment.comment + '</span>';
                    commentHtml += '</p>';
                    commentHtml += '</div>';
                    $commentsModal.append(commentHtml);
                });
            }

            $('#submitComment_' + index).on('click', function() {
                var input_comment = $('#inputComment_' + index).val();
                console.log(input_comment);
                var post_id = element.id;
                $.ajax({
                    url: '{{ route('user.create_animal_comment') }}',
                    method: 'POST',
                    data: {
                        "post_id": post_id,
                        "input_comment": input_comment,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        loadComments(response);
                        $('#inputComment_' + index).val('')
                    },
                    error: function() {
                        alert('Failed to submit comment');
                    }
                });
            });

            $('#commentIcon_' + index).on('click', function() {
                var post_id = element.id;
                $.ajax({
                    url: '{{ route('user.get_list_comment') }}',
                    method: 'POST',
                    data: {
                        "post_id": post_id,
                        "_token": "{{ csrf_token() }}",
                    },
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        loadComments(response);

                    },
                    error: function() {
                        alert('Failed to submit comment');
                    }
                });
            });
        });
    </script>
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
    <script>
        function loadNotifications(response) {
            var $notificationPopup = $('.notification-popup');
            // var $commentsModal = $modalHeader.siblings('.comments-modal');
            // $commentsModal.empty();
            $('.container-noti').remove();
            response.forEach(function(noti, index) {
                var commentHtml = '<div class="container-noti">';
                commentHtml += '<div class="profile-picture">';
                commentHtml += '<img src="{{ asset('users/social_assets/images/profile-5.jpg') }}" alt="">';
                commentHtml += '</div>';
                commentHtml += '<div class="notification-body">';
                commentHtml += '<b>' + noti.user + '</b>';
                commentHtml += '<span>' + noti.message + '</span>';
                commentHtml += '<small class="text-muted">' + noti.time + '</small>';
                commentHtml += '</div>';
                commentHtml += '</div>';
                $notificationPopup.append(commentHtml);
            });
        }

        var notification = document.querySelector('#notification');
        var notificationPopup = document.querySelector('.notification-popup');

        console.log(notificationPopup);
        $(notification).on('click', function() {
            if (notificationPopup.style.display == 'none') {
                notificationPopup.style.display = 'block';
                $.ajax({
                    url: '{{ route('user.list_notification') }}',
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        loadNotifications(response);
                    },
                    error: function() {
                        alert('Failed to submit comment');
                    }
                });
            } else {
                notificationPopup.style.display = 'none';
            }
        });

        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function() {
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.src = reader.result;
                imagePreview.style.display = 'block';
            }

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>


</html>
