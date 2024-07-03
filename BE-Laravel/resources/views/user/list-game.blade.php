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
                <div class="profile-picture" id="profile-picture">
                    <img src="{{ asset('users/social_assets/images/profile-1.jpg') }}">
                </div>
                <div id="dropdown-menu" class="dropdown-menu" style="display: none;">
                    <a href="">Cập nhật tài khoản</a>
                    <a href="">Đăng xuất</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div class="games">
            <h2 class="title">
                Danh sách chủ đề câu hỏi
            </h2>
            <div class="full-games">
                <div class="item-game">
                    <div class="img-game">
                        <img src="https://cdn.tgdd.vn/Files/2022/03/06/1418798/so2-100423-010123.jpg" alt="">
                    </div>
                    <div class="content-game">
                        <div class="top">
                            <div class="title-game">
                                Lorem ipsum dolor sit amet consectetur.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo excepturi tenetur minus
                                doloribus aut veritatis laudantium beatae voluptas, quisquam obcaecati?
                            </div>
                            <a class="btn btn-success btn-game" style="color:#fff" href="">Tham gia</a>
                        </div>
                        <div class="line"></div>
                        <div class="bottom">
                            <div class="info-game">
                                Thông tin: 10 câu hỏi, mỗi câu hỏi 100 điểm
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {{--
    <script src="./assets/js/main.js"></script> --}}
    <script src="{{ asset('users/social_assets/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>


</html>
