@extends('user.main')
@section('title', 'Home Page')
@section('content_user')
    <style>
        .wrapper_cate {
            width: 100%;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container_cate {
            height: 400px;
            display: flex;
            flex-wrap: nowrap;
            justify-content: start;
        }

        .card_cate {
            width: 80px;
            border-radius: .75rem;
            background-size: cover;
            cursor: pointer;
            overflow: hidden;
            border-radius: 2rem;
            margin: 0 10px;
            display: flex;
            align-items: flex-end;
            transition: .6s cubic-bezier(.28, -0.03, 0, .99);
            box-shadow: 0px 10px 30px -5px rgba(0, 0, 0, 0.8);
        }

        .card_cate>.row {
            color: white;
            display: flex;
            flex-wrap: nowrap;
        }

        .card_cate>.row>.icon {
            background: #2EB872;
            color: white;
            border-radius: 50%;
            width: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 15px;
        }

        .card_cate>.row>.description {
            display: flex;
            justify-content: center;
            flex-direction: column;
            overflow: hidden;
            height: 100px;
            width: 520px;
            opacity: 0;
            transform: translateY(30px);
            transition-delay: .3s;
            transition: all .3s ease;
        }


        .row_climate {
            padding: 0.75vw;

            display: grid;
            grid-template-columns: repeat(64, 1fr);
            grid-template-rows: 55vh 30vh;
            grid-row-gap: 0.75vw;
        }

        .box_climate a {
            display: block;
            width: 100%;
            height: 100%;

            position: absolute;
            top: 0;
            left: 0;

            &:hover img {
                opacity: 0.75;
            }
        }

        .box__inner {
            background-color: #005696;
            width: 100%;
            height: 100%;
            position: relative;

            img {
                width: 100%;
                height: 100%;

                object-position: 50% 50%;
                object-fit: cover;

                transition: opacity .2s ease-out;
            }
        }

        .box--left {
            clip-path: polygon(0 0, 98% 0, 83% 100%, 0 100%);
            grid-row: 1;
            grid-column: 1 / span 35;
        }

        .box--right {
            clip-path: polygon(17% 0, 100% 0, 100% 100%, 2% 100%);
            grid-row: 1;
            grid-column: span 35 / -1;
        }

        .box--small {
            grid-row: 2;

            &.box--left {
                clip-path: polygon(0 0, 83% 0, 98% 100%, 0 100%);
            }

            &.box--right {
                clip-path: polygon(2% 0, 100% 0, 100% 100%, 17% 100%);
            }
        }

        .description p {
            color: #d8d8dc;
            padding-top: 9px;
        }

        .description h4 a {
            /* color: #fff; */
            text-transform: uppercase;
        }

        input {
            display: none;
        }

        input:checked+label {
            width: 800px;
        }

        input:checked+label .description {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        .bigTitle {
            font-family: 'Lobster', cursive;
            font-size: xx-large;
            text-align: center;
            margin: 130px 0;
        }

        .bigTitle .des {
            font-size: large;
            max-width: 500px;
            margin: 10px auto;
            color: #ffffff4D;
        }

        .transport ul {
            padding: 0;
            list-style: none;
            display: grid;
            grid-template-columns: auto auto auto auto auto auto;
            column-gap: 20px;
        }

        .transport li {
            text-align: center;
            color: #ffffff4D;
        }

        .transport li i {
            display: block;
            margin-bottom: 20px;
            font-size: xxx-large;
            color: #fff;
        }

        .zoom {
            transform: scale(1);
            transition: 0.5s;
        }

        .zoom:hover {
            transform: scale(1.2);
            filter: brightness(0.5);
        }

        .checkin {
            display: grid;
            grid-template-columns: 32.333% 32.333% 32.333%;
            column-gap: 1%;
            grid-template-rows: 300px 300px;
            row-gap: 10px;
        }

        .checkin .des {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 100%;
        }

        .checkin .item {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
        }

        .checkin img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .checkin .item .content {
            position: absolute;
            bottom: 10px;
            left: 10px;
            right: 10px;
            color: #fff;
            width: calc(100% - 20px);
        }

        .checkin .item .content .title {
            font-size: 24px;
            font-weight: 700;
            color: #FFF;
        }

        .checkin .item .content .des {
            opacity: 0.7;
        }

        .checkin .item:nth-child(1) {
            grid-column-start: 1;
            grid-column-end: 3;
        }

        .checkin .item:nth-child(2) {
            grid-column-start: 3;
            grid-row-start: 1;
            grid-row-end: 3;
        }

        .main-collection-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            /* Khoảng cách giữa các mục */
        }

        .collection-group-block {
            flex: 1 1 30%;
            /* Đảm bảo các mục có chiều rộng khoảng 30% và có thể co dãn */
            box-sizing: border-box;
        }

        .collection-animal-container {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .collection-animal-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .hover-overlay,
        .bg-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .collection-title-block {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            padding: 5px 10px;
            border-radius: 5px;
        }

        /* .main-collection-container {
                                                        display: grid;
                                                        grid-template-columns: 1fr 1fr 1fr;
                                                        gap: 20px;
                                                    }

                                                    .collection-group-block {
                                                        display: flex;
                                                        flex-direction: column;
                                                        gap: 20px;
                                                    }

                                                    .center-column {
                                                        justify-content: center;
                                                    }

                                                    .collection-animal-container {
                                                        position: relative;
                                                        text-align: center;
                                                    }

                                                    .collection-animal-container .hover-overlay {
                                                        border-radius: 28px;
                                                        height: 100%;
                                                    }

                                                    .collection-animal-img {
                                                        border-radius: 20px;
                                                        width: 100%;
                                                        height: auto;
                                                    }

                                                    .hover-overlay,
                                                    .bg-gradient {
                                                        position: absolute;
                                                        top: 0;
                                                        left: 0;
                                                        width: 100%;
                                                        height: 100%;
                                                    } */

        .card_cate .description p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 100%;
            margin: 0;
        }

        .collection-title-block {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
        }

        .see-all-collection-link-block {
            grid-column: span 3;
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('users/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/photo-grid.css') }}">
    @foreach ($areas as $key => $area)
        <style>
            .card_cate[for="c{{ $key + 1 }}"] {
                background-image: url("http://localhost:8000/areas/{{ $area->area_image }}");
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>
    @endforeach
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Welcome To Zoofari</p>
                    <h1 class="display-5 mb-4">
                        Why You Should Visit
                        <span class="text-primary">Zoofari</span> Park!
                    </h1>
                    <p class="mb-4">
                        Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No
                        stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo
                        nonumy clita sit at, sed sit sanctus dolor eos.
                    </p>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Free Car
                        Parking
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Natural
                        Environment
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Professional
                        Guide & Security
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>World Best
                        Animals
                    </h5>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="{{ asset('users/img/about.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-paw fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Total Animal</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Daily Vigitors</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Total Membership</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                    <p class="text-white mb-0">Save Wild Life</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Our Services</p>
                    <h1 class="display-5 mb-0">
                        Special Services For
                        <span class="text-primary">Zoofari</span> Visitors
                    </h1>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                        <i class="fa fa-3x fa-mobile-alt text-white"></i>
                        <div class="ms-4">
                            <p class="text-white mb-0">Call for more info</p>
                            <h2 class="text-white mb-0">+012 345 6789</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="{{ asset('users/img/icon/icon-2.png') }}" alt="Icon" />
                    <h5 class="mb-3">Car Parking</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="{{ asset('users/img/icon/icon-3.png') }}" alt="Icon" />
                    <h5 class="mb-3">Animal Photos</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{ asset('users/img/icon/icon-4.png') }}" alt="Icon" />
                    <h5 class="mb-3">Guide Services</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="{{ asset('users/img/icon/icon-5.png') }}" alt="Icon" />
                    <h5 class="mb-3">Food & Beverages</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="{{ asset('users/img/icon/icon-6.png') }}" alt="Icon" />
                    <h5 class="mb-3">Zoo Shopping</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="{{ asset('users/img/icon/icon-7.png') }}" alt="Icon" />
                    <h5 class="mb-3">Free Hi Speed Wi-Fi</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{ asset('users/img/icon/icon-8.png') }}" alt="Icon" />
                    <h5 class="mb-3">Play Ground</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="{{ asset('users/img/icon/icon-9.png') }}" alt="Icon" />
                    <h5 class="mb-3">Rest House</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        sed diam stet diam sed stet.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Categories Animal -->


    <div class="container-xxl py-5">
        <h1 class="display-5 mb-0">
            Nhiều Châu Lục Với Các <span class="text-primary">Loài Vật</span> Tuyệt Vời
        </h1>
        <div class="wrapper_cate">
            <div class="container_cate">
                @foreach ($areas as $key => $area)
                    <input type="radio" name="slide" id="c{{ $key + 1 }}" checked>
                    <label for="c{{ $key + 1 }}" class="card_cate">
                        <div class="row">
                            <div class="icon">{{ $key + 1 }}</div>
                            <div class="description">
                                <h2 style="font-weight: 700"><a
                                        href="{{ route('user.cate-list', ['id' => $area->id]) }}">{{ $area->area_name }}</a>
                                </h2>
                                <p style="color: #000000; font-weight:600">Winter has so much to offer -
                                    creative activities Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                                    numquam reiciendis, provident ea est corporis.</p>
                            </div>
                        </div>
                    </label>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Animal Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Our Animals</p>
                    <h1 class="display-5 mb-0">
                        Let`s See Our <span class="text-primary">Zoofari</span> Awsome
                        Animals
                    </h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Explore More Animals</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-md-1.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('users/img/animal-md-1.jpg') }}"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-lg-1.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('users/img/animal-lg-1.jpg') }}"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-lg-2.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('users/img/animal-lg-2.jpg') }}"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-md-2.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('users/img/animal-md-2.jpg') }}"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-md-3.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('users/img/animal-md-3.jpg') }}"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="img/animal-lg-3.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('users/img/animal-lg-3.jpg') }}"
                                        alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Animal End -->

    <!-- Animal Color -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="overflow-block">
                <div class="new-main-container main-collections">
                    <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-6">
                            <p><span class="text-primary me-2">#</span>Sắc Màu Động Vật </p>
                            <h1 class="display-5 mb-0">
                                Ngắm Nhìn Các Loài Vật Với <span class="text-primary">Màu Sắc</span> Đa Dạng
                            </h1>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <a class="btn btn-primary py-3 px-5" href="">Explore More Animals</a>
                        </div>
                    </div>
                    <div class="photo-grid">
                        <div class="card card-tall card-wide"
                            style="background-image:url('http://localhost:8000/colors/{{$green->color_image}}')">
                            <a href="{{route('color',['id' => $green->id])}}">{{$green->color_name}}</a>
                        </div>
                        <div class="card card-tall"
                            style="background-image:url('http://localhost:8000/colors/{{$blue->color_image}}')">
                            <a href="{{route('color',['id' => $blue->id])}}">{{$blue->color_name}}</a>
                        </div>
                        <div class="card"
                            style="background-image:url('http://localhost:8000/colors/{{$red->color_image}}')">
                            <a href="{{route('color',['id' => $red->id])}}">{{$red->color_name}}</a>
                        </div>
                        <div class="card"
                            style="background-image:url('http://localhost:8000/colors/{{$yellow->color_image}}')">
                            <a href="{{route('color',['id' => $yellow->id])}}">{{$yellow->color_name}}</a>
                        </div>
                        <div class="card"
                            style="background-image:url('http://localhost:8000/colors/{{$orange->color_image}}')">
                            <a href="{{route('color',['id' => $orange->id])}}">{{$orange->color_name}}</a>
                        </div>
                        <div class="card"
                            style="background-image:url('http://localhost:8000/colors/{{$brown->color_image}}')">
                            <a href="{{route('color',['id' => $brown->id])}}">{{$brown->color_name}}</a>
                        </div>
                        <div class="card card-wide"
                            style="background-image:url('http://localhost:8000/colors/{{$white->color_image}}')">
                            <a href="{{route('color',['id' => $white->id])}}">{{$white->color_name}}</a>
                        </div>
                        <div class="card"
                            style="background-image:url('http://localhost:8000/colors/{{$black->color_image}}')">
                            <a href="{{route('color',['id' => $black->id])}}">{{$black->color_name}}</a>
                        </div>
                        <div class="card"
                            style="background-image:url('http://localhost:8000/colors/{{$gray->color_image}}')">
                            <a href="{{route('color',['id' => $gray->id])}}">{{$gray->color_name}}</a>
                        </div>
                        <div class="card"
                            style="background-image:url('http://localhost:8000/colors/{{$purple->color_image}}')">
                            <a href="{{route('color',['id' => $purple->id])}}">{{$purple->color_name}}</a>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Climate --}}
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-6">
                            <p><span class="text-primary me-2">#</span>Đại Dương</p>
                            <h1 class="display-5 mb-0">
                                Tìm Kiếm Các <span class="text-primary">Loài Vật</span> Ở Các Đại Dương Rộng Lớn Sâu Thẳm
                            </h1>
                        </div>
                    </div>
                    <div class="row_climate">
                        <div class="box_climate box--left">
                            <div class="box__inner">
                                <a href="#">
                                    <img src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_3000,h_2000,f_auto/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/v6bwf3e8qhdfhrgq7lv3/V%C3%A9V%C3%A0oC%E1%BB%95ngIMGWorldsofAdventure,Dubai-KlookVi%E1%BB%87tNam.jpg"
                                        alt="">
                                </a>
                            </div>
                        </div>

                        <div class="box_climate box--right">
                            <div class="box__inner">
                                <a href="#">
                                    <img src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_3000,h_2000,f_auto/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/v6bwf3e8qhdfhrgq7lv3/V%C3%A9V%C3%A0oC%E1%BB%95ngIMGWorldsofAdventure,Dubai-KlookVi%E1%BB%87tNam.jpg"
                                        alt="">
                                </a>
                            </div>
                        </div>

                        <div class="box_climate box--left box--small">
                            <div class="box__inner">
                                <a href="#">
                                    <img src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_3000,h_2000,f_auto/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/v6bwf3e8qhdfhrgq7lv3/V%C3%A9V%C3%A0oC%E1%BB%95ngIMGWorldsofAdventure,Dubai-KlookVi%E1%BB%87tNam.jpg"
                                        alt="">
                                </a>
                            </div>
                        </div>

                        <div class="box_climate box--right box--small">
                            <div class="box__inner">
                                <a href="#">
                                    <img src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_3000,h_2000,f_auto/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/v6bwf3e8qhdfhrgq7lv3/V%C3%A9V%C3%A0oC%E1%BB%95ngIMGWorldsofAdventure,Dubai-KlookVi%E1%BB%87tNam.jpg"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Color --}}
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-6">
                            <p><span class="text-primary me-2">#</span>Vùng Khí Hậu</p>
                            <h1 class="display-5 mb-0">
                                Các Loài Động Vật Với <span class="text-primary">Vùng Khí Hậu</span> Khác Nhau
                            </h1>
                        </div>
                    </div>

                    <div class="checkin">
                        <div class="item">
                            <img src="http://localhost:8000/climates/full/{{$tropical->climate_image}}"title="{{$tropical->climate_name}}"
                                class="zoom">
                            <div class="content">
                                <a href="{{route('climate',['id' => $tropical->id])}}" class="title">{{$tropical->climate_name}}</a>
                                <div class="des">
                                {{$tropical->climate_description}}
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="http://localhost:8000/climates/full/{{$arid->climate_image}}" title="{{$arid->climate_name}}"
                                class="zoom">
                            <div class="content">
                                <a href="{{route('climate',['id' => $arid->id])}}" class="title">{{$arid->climate_name}}</a>
                                <div class="des">
                                {{$arid->climate_description}}
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="http://localhost:8000/climates/full/{{$temperate->climate_image}}" title="{{$temperate->climate_name}}"
                                class="zoom">
                            <div class="content">
                                <a href="{{route('climate',['id' => $temperate->id])}}" class="title">{{$temperate->climate_name}}</a>
                                <div class="des">
                                {{$temperate->climate_description}}
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="http://localhost:8000/climates/full/{{$cold->climate_image}}" title="{{$cold->climate_name}}"
                                class="zoom">
                            <div class="content">
                                <a href="{{route('climate',['id' => $cold->id])}}" class="title">{{$cold->climate_name}}</a>
                                <div class="des">
                                {{$cold->climate_description}}
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://localhost:8000/climates/full/{{$polar->climate_image}}" title="{{$polar->climate_name}}"
                                class="zoom">
                            <div class="content">
                                <a href="{{route('climate',['id' => $polar->id])}}" class="title">{{$polar->climate_name}}</a>
                                <div class="des">
                                {{$polar->climate_description}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Visiting Hours Start -->
            <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                            <h1 class="display-6 text-white mb-5">Visiting Hours</h1>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <span>Monday</span>
                                    <span>9:00AM - 6:00PM</span>
                                </li>
                                <li class="list-group-item">
                                    <span>Tuesday</span>
                                    <span>9:00AM - 6:00PM</span>
                                </li>
                                <li class="list-group-item">
                                    <span>Wednesday</span>
                                    <span>9:00AM - 6:00PM</span>
                                </li>
                                <li class="list-group-item">
                                    <span>Thursday</span>
                                    <span>9:00AM - 6:00PM</span>
                                </li>
                                <li class="list-group-item">
                                    <span>Friday</span>
                                    <span>9:00AM - 6:00PM</span>
                                </li>
                                <li class="list-group-item">
                                    <span>Saturday</span>
                                    <span>9:00AM - 6:00PM</span>
                                </li>
                                <li class="list-group-item">
                                    <span>Sunday</span>
                                    <span>Closed</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                            <h1 class="display-6 text-white mb-5">Contact Info</h1>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Office</td>
                                        <td>123 Street, New York, USA</td>
                                    </tr>
                                    <tr>
                                        <td>Zoo</td>
                                        <td>123 Street, New York, USA</td>
                                    </tr>
                                    <tr>
                                        <td>Ticket</td>
                                        <td>
                                            <p class="mb-2">+012 345 6789</p>
                                            <p class="mb-0">ticket@example.com</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Support</td>
                                        <td>
                                            <p class="mb-2">+012 345 6789</p>
                                            <p class="mb-0">support@example.com</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Visiting Hours End -->

            <!-- Membership Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-6">
                            <p><span class="text-primary me-2">#</span>Membership</p>
                            <h1 class="display-5 mb-0">
                                You Can Be A Proud Member Of
                                <span class="text-primary">Zoofari</span>
                            </h1>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <a class="btn btn-primary py-3 px-5" href="">Special Pricing</a>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="membership-item position-relative">
                                <img class="img-fluid" src="{{ asset('users/img/animal-lg-1.jpg') }}" alt="" />
                                <h1 class="display-1">01</h1>
                                <h4 class="text-white mb-3">Popular</h4>
                                <h3 class="text-primary mb-4">$99.00</h3>
                                <p><i class="fa fa-check text-primary me-3"></i>10% discount</p>
                                <p>
                                    <i class="fa fa-check text-primary me-3"></i>2 adult and 2 child
                                </p>
                                <p>
                                    <i class="fa fa-check text-primary me-3"></i>Free animal
                                    exhibition
                                </p>
                                <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="membership-item position-relative">
                                <img class="img-fluid" src="{{ asset('users/img/animal-lg-2.jpg') }}" alt="" />
                                <h1 class="display-1">02</h1>
                                <h4 class="text-white mb-3">Standard</h4>
                                <h3 class="text-primary mb-4">$149.00</h3>
                                <p><i class="fa fa-check text-primary me-3"></i>15% discount</p>
                                <p>
                                    <i class="fa fa-check text-primary me-3"></i>4 adult and 4 child
                                </p>
                                <p>
                                    <i class="fa fa-check text-primary me-3"></i>Free animal
                                    exhibition
                                </p>
                                <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="membership-item position-relative">
                                <img class="img-fluid" src="{{ asset('users/img/animal-lg-3.jpg') }}" alt="" />
                                <h1 class="display-1">03</h1>
                                <h4 class="text-white mb-3">Premium</h4>
                                <h3 class="text-primary mb-4">$199.00</h3>
                                <p><i class="fa fa-check text-primary me-3"></i>20% discount</p>
                                <p>
                                    <i class="fa fa-check text-primary me-3"></i>6 adult and 6 child
                                </p>
                                <p>
                                    <i class="fa fa-check text-primary me-3"></i>Free animal
                                    exhibition
                                </p>
                                <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Membership End -->

            <!-- Testimonial Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        Our Clients Say!
                    </h1>
                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                                src="{{ asset('users/img/testimonial-1.jpg') }}" style="width: 100px; height: 100px" />
                            <div class="testimonial-text rounded text-center p-4">
                                <p>
                                    Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                                    duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                                    clita erat magna elitr erat sit sit erat at rebum justo sea
                                    clita.
                                </p>
                                <h5 class="mb-1">Patient Name</h5>
                                <span class="fst-italic">Profession</span>
                            </div>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                                src="{{ asset('users/img/testimonial-2.jpg') }}" style="width: 100px; height: 100px" />
                            <div class="testimonial-text rounded text-center p-4">
                                <p>
                                    Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                                    duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                                    clita erat magna elitr erat sit sit erat at rebum justo sea
                                    clita.
                                </p>
                                <h5 class="mb-1">Patient Name</h5>
                                <span class="fst-italic">Profession</span>
                            </div>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4"
                                src="{{ asset('users/img/testimonial-3.jpg') }}" style="width: 100px; height: 100px" />
                            <div class="testimonial-text rounded text-center p-4">
                                <p>
                                    Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                                    duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                                    clita erat magna elitr erat sit sit erat at rebum justo sea
                                    clita.
                                </p>
                                <h5 class="mb-1">Patient Name</h5>
                                <span class="fst-italic">Profession</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
        @endsection
