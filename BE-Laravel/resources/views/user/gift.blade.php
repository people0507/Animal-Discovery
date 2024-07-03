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
            <h1>Đổi quà</h1>

            <div class="points">
                <p>Số điểm hiện tại: <span id="point-counter">100</span></p>
            </div>

            <div class="gifts">
                <a href="#" class="gift-link" data-gift-id="1" data-gift-points="50">
                    <img src="https://saladowinery.com/wp-content/uploads/2017/12/gift.jpg" alt="Gift 1">
                    <p>Quà 1 (50 điểm)</p>
                </a>
                <a href="#" class="gift-link" data-gift-id="2" data-gift-points="80">
                    <img src="https://www.verdict.co.uk/wp-content/uploads/2018/11/shutterstock_712915198-e1542045457155.jpg"
                        alt="Gift 2">
                    <p>Quà 2 (80 điểm)</p>
                </a>
            </div>
        </div>
    </main>
    {{--
    <script src="./assets/js/main.js"></script> --}}
    <script src="{{ asset('users/social_assets/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var pointCounter = document.getElementById('point-counter');
            var giftLinks = document.querySelectorAll('.gift-link');

            giftLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    var giftId = this.getAttribute('data-gift-id');
                    var giftPoints = parseInt(this.getAttribute('data-gift-points'));

                    var currentPoints = parseInt(pointCounter.textContent);
                    if (currentPoints >= giftPoints) {
                        pointCounter.textContent = currentPoints - giftPoints;
                        alert('Bạn đã nhận quà có ID ' + giftId);
                    } else {
                        alert('Bạn không đủ điểm để nhận quà này.');
                    }
                });
            });
        });
    </script>
</body>


</html>
