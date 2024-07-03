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
            <div class="quizz">
                <div class="title-quizz">
                    Câu hỏi 1: Con vật nào có thể thay đổi màu sắc cơ thể của mình để hòa nhập với môi trường xung
                    quanh, giúp
                    chúng trốn tránh kẻ thù và săn mồi hiệu quả hơn?
                </div>
                <form id="quiz-form">
                    <input type="radio" id="q1_option_a" name="q1_answer" value="A">
                    <label for="q1_option_a">A. Con bạch tuộc</label><br>

                    <input type="radio" id="q1_option_b" name="q1_answer" value="B">
                    <label for="q1_option_b">B. Con tắc kè hoa</label><br>

                    <input type="radio" id="q1_option_c" name="q1_answer" value="C">
                    <label for="q1_option_c">C. Con cá voi</label><br>

                    <input type="radio" id="q1_option_d" name="q1_answer" value="D">
                    <label for="q1_option_d">D. Con hổ</label><br>
                </form>

                <div class="title-quizz">
                    Câu hỏi 2: Con vật nào có khả năng bay cao nhất?
                </div>
                <form id="quiz-form">
                    <input type="radio" id="q2_option_a" name="q2_answer" value="A">
                    <label for="q2_option_a">A. Đại bàng</label><br>

                    <input type="radio" id="q2_option_b" name="q2_answer" value="B">
                    <label for="q2_option_b">B. Chim én</label><br>

                    <input type="radio" id="q2_option_c" name="q2_answer" value="C">
                    <label for="q2_option_c">C. Thiên nga</label><br>

                    <input type="radio" id="q2_option_d" name="q2_answer" value="D">
                    <label for="q2_option_d">D. Chuột túi</label><br>
                </form>

                <button type="button" id="submit-quiz" class="btn-submit">Gửi đáp án</button>
            </div>



        </div>
    </main>
    {{--
    <script src="./assets/js/main.js"></script> --}}
    <script src="{{ asset('users/social_assets/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

<script>
    document.getElementById('submit-quiz').addEventListener('click', function() {
        // Lấy giá trị đáp án từ form
        var q1_answer = document.querySelector('input[name="q1_answer"]:checked');
        var q2_answer = document.querySelector('input[name="q2_answer"]:checked');

        // Kiểm tra nếu người dùng chưa chọn đầy đủ đáp án
        if (!q1_answer || !q2_answer) {
            alert('Vui lòng chọn đáp án cho tất cả câu hỏi.');
            return;
        }

        // Xử lý logic dựa trên đáp án của người dùng
        var answers = {
            q1: q1_answer.value,
            q2: q2_answer.value
            // Thêm các câu hỏi khác nếu cần
        };

        // Gửi dữ liệu đáp án đi, ví dụ:
        // fetch('/submit-quiz', {
        //     method: 'POST',
        //     body: JSON.stringify(answers),
        //     headers: {
        //         'Content-Type': 'application/json'
        //     }
        // })
        // .then(response => response.json())
        // .then(data => {
        //     // Xử lý kết quả trả về nếu cần
        //     console.log(data);
        // })
        // .catch(error => console.error('Lỗi:', error));

        // Thông báo thành công hoặc chuyển hướng sau khi gửi đáp án
        alert('Đã gửi đáp án thành công.');
    });
</script>

</html>
