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

            <div class="game-over">
                <h1>Chúc mừng bạn đã hoàn thành trò chơi!</h1>

                <div class="results">
                    <p>Số câu đúng: <span id="correct-answers">8</span></p>
                    <p>Số câu sai: <span id="wrong-answers">2</span></p>
                </div>

                {{-- <div class="chart">
                    <div class="bar correct" style="width: 80%;"></div>
                    <div class="bar wrong" style="width: 20%;"></div>
                </div> --}}

                <div class="chart"></div>

                <div class="buttons">
                    <button class="button-74" role="button"><i class="fa-solid fa-gift"></i> Đổi quà</button>

                    <button class="button-74" style="background:#0056b3; color: #Fff; "><i class="fa fa-arrow-left"
                            aria-hidden="true"></i> Quay trở lại</button>
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
