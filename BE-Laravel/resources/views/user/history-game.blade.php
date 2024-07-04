<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diễn Đàn Động Vật</title>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="{{ asset('users/social_assets/css/style.css') }}">
    <link href="{{ asset('users/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- ICONCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
</head>

<body>
    @include('user.includes.header-social')

    <main>
        <div class="games">

            <div class="game-over">
                <h1>Lịch sử trò chơi</h1>

                <div class="row mt-5 mb-5">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Ngày</th>
                                    <th>Tên chủ đề</th>
                                    <th>Số câu đúng</th>
                                    <th>Số câu sai</th>
                                    <th>Điểm</th>
                                    <th>Tổng số câu hỏi</th>
                                    <th>Thời gian chơi</th>
                                </tr>
                            </thead>
                            <tbody id="game-history">
                            </tbody>
                        </table>
                    </div>

                    <div class="buttons mt-3">
                        <a href="">
                            <button class="button-74" role="button"><i class="fa-solid fa-gift"></i> Đổi quà</button>
                        </a>

                        <a href="{{ route('user.view_list_topic') }}">
                            <button class="button-74" style="background:#0056b3; color: #fff;"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Quay trở lại</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('users/social_assets/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var gameHistoryData = [{
                date: '2024-07-01',
                correct: 5,
                wrong: 2,
                score: 50,
                totalQuestions: 7,
                timePlayed: '10 phút'
            },
            {
                date: '2024-07-02',
                correct: 7,
                wrong: 3,
                score: 70,
                totalQuestions: 10,
                timePlayed: '15 phút'
            },
            {
                date: '2024-07-02',
                correct: 7,
                wrong: 3,
                score: 70,
                totalQuestions: 10,
                timePlayed: '15 phút'
            },
            {
                date: '2024-07-02',
                correct: 7,
                wrong: 3,
                score: 70,
                totalQuestions: 10,
                timePlayed: '15 phút'
            },
        ];

        let totalCorrect = 0;
        let totalWrong = 0;
        let totalQuestions = 0;
        gameHistoryData.forEach(function(game) {
            totalCorrect += game.correct;
            totalWrong += game.wrong;
            totalQuestions += game.totalQuestions;
        });


        var gameHistoryTable = document.getElementById('game-history');
        gameHistoryData.forEach(function(game) {
            var row = document.createElement('tr');
            row.innerHTML = `
            <td>${game.date}</td>
            <td>${game.nameTopic}</td>
            <td>${game.correct}</td>
            <td>${game.wrong}</td>
            <td>${game.score}</td>
            <td>${game.totalQuestions}</td>
            <td>${game.timePlayed}</td>
        `;
            gameHistoryTable.appendChild(row);
        });

        // Hiển thị tổng câu hỏi
        document.getElementById('total-questions').innerText = totalQuestions;
    </script>
</body>


</html>
