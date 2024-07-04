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
            <h2 class="title">
                Danh sách chủ đề câu hỏi
            </h2>

            <div class="full-games">
                @foreach ($topics as $topic)
                    <div class="item-game">
                        <div class="img-game" style="height: 250px">
                            <img src="http://localhost:8000/topics/{{ $topic->topic_image }}" class="responsive-img">
                        </div>
                        <div class="content-game">
                            <div class="">
                                <div class="row">
                                    <div class="col-sm fw-bold">
                                        Tên chủ đề:
                                    </div>
                                    <div class="col-8">
                                        {{ $topic->topic_name }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm fw-bold">
                                        Mô tả chủ đề:
                                    </div>
                                    <div class="title-game col-8">
                                        {{ $topic->topic_description }} Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Ad itaque veritatis, modi facere iste pariatur rem ab sapiente
                                        delectus cumque!
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="bottom">
                                <div class="row">
                                    <div class="info-game col-sm-8">
                                        Thông tin: Bộ câu hỏi có {{ $topic->questions_count }} câu hỏi, mỗi câu hỏi
                                        người chơi sẽ nhận được {{ $topic->score_per_question }} điểm
                                    </div>
                                    <div class="col-sm-4 text-end">
                                        <a class="btn-game"
                                            href="{{ route('user.play_game', ['id' => $topic->id]) }}">Tham gia</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    {{--
    <script src="./assets/js/main.js"></script> --}}
    <script src="{{ asset('users/social_assets/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>


</html>
