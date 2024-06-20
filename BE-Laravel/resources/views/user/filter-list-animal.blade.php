@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')
    <link rel="stylesheet" href="{{ asset('users/css/fillter-list-animal.css') }}" style="padding: 50px 0">
    <div
        @if (isset($data1->climate_image) && $data1->climate_image != '') style = "background-image: url(http://localhost:8000/climates/full/{{ $data1->climate_image }});"
    @elseif(isset($data1->biome_image) && $data1->biome_image != '')
        style = "background-image: url(http://localhost:8000/biomes/full/{{ $data1->biome_image }});  padding: 50px 0"
    @else
        class="slide-head" @endif>
        <header xmlns="http://www.w3.org/1999/html" class="main-head">
            <div class="container-nav clearfix">
                <a href="https://animalia.bio/index.php" class="logo">Animalia <span>All you want to know about
                        animals</span>
                </a>
                <ul class="main-nav">
                    <li class="catalog-li"><a href="https://animalia.bio/index.php/mammals">
                            Mammals
                        </a>
                    </li>
                    <li class="catalog-li"><a href="https://animalia.bio/index.php/reptiles">
                            Reptiles
                        </a>
                    </li>
                    <li class="catalog-li"><a href="https://animalia.bio/index.php/birds">
                            Birds
                        </a>
                    </li>
                    <li class="catalog-li"><a href="https://animalia.bio/index.php/amphibia">
                            Amphibia
                        </a>
                    </li>
                    <br>
                    <li class="catalog-li"><a href="https://animalia.bio/index.php/mollusk">
                            Mollusk
                        </a>
                    </li>
                    <li class="catalog-li"><a href="https://animalia.bio/index.php/fish">
                            Fish
                        </a>
                    </li>
                    <li class="catalog-li"><a href="https://animalia.bio/index.php/insects">
                            Insects
                        </a>
                    </li>
                </ul>
                <div class="sub-nav">
                    <form action="/elastic-search" class="a-search">
                        <input type="text" placeholder="quick search" name="search" id="search-field-header"
                            class="search-field ui-autocomplete-input" autocomplete="off">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </form>
                </div>
            </div>
        </header>
        <br>
        <div class="main-content">
            <div class="row">
                <div class="col-6">
                    <div class="h4-title">
                        ACTIVE DAY PERIOD
                    </div>
                    <div class="h1-title">
                        {{ $data1->climate_name }}
                    </div>
                    <div class="quantity-h3">
                        {{ $count }} LOÀI
                    </div>
                </div>
                <div class="col-6">
                    <div class="box-text">
                        {{ $data1->climate_description }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                @foreach ($data as $item)
                    <div class="blog-item mb-5">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100"
                                    src="http://localhost:8000/animal_images/{{ $item->images->image_name }}"
                                    style="object-fit: cover;">
                            </div>
                            <div
                                class="col-12
                                    col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small>
                                        <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2024</small>
                                    </div>
                                    <h5 class="text-uppercase mb-3">{{ $item->animal_name }}</h5>
                                    <p class="truncate-text">{{ $item->animal_description }}</p>
                                    <a class="text-primary text-uppercase"
                                        href="{{ route('user.animal-detail', ['id' => $item->id]) }}">Read More<i
                                            class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-lg m-0">
                            <li class="page-item disabled">
                                <a class="page-link rounded-0" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link rounded-0" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Categories</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="h5 bg-light py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web
                            Design</a>
                        <a class="h5 bg-light py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web
                            Development</a>
                        <a class="h5 bg-light py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web
                            Development</a>
                        <a class="h5 bg-light py-2 px-3 mb-2" href="#"><i
                                class="bi bi-arrow-right me-2"></i>Keyword
                            Research</a>
                        <a class="h5 bg-light py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Email
                            Marketing</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Recent Post</h3>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ asset('users/img_fillter-list-animal/blog-1.jpg') }}"
                            style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit
                            amet adipis elit
                        </a>
                    </div>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ asset('users/img_fillter-list-animal/blog-2.jpg') }}"
                            style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit
                            amet adipis elit
                        </a>
                    </div>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="img/blog-3.jpg"
                            style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit
                            amet adipis elit
                        </a>
                    </div>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="img/blog-1.jpg"
                            style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit
                            amet adipis elit
                        </a>
                    </div>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="img/blog-2.jpg"
                            style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit
                            amet adipis elit
                        </a>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-primary m-1">Design</a>
                        <a href="" class="btn btn-primary m-1">Development</a>
                        <a href="" class="btn btn-primary m-1">Marketing</a>
                        <a href="" class="btn btn-primary m-1">SEO</a>
                        <a href="" class="btn btn-primary m-1">Writing</a>
                        <a href="" class="btn btn-primary m-1">Consulting</a>
                        <a href="" class="btn btn-primary m-1">Design</a>
                        <a href="" class="btn btn-primary m-1">Development</a>
                        <a href="" class="btn btn-primary m-1">Marketing</a>
                        <a href="" class="btn btn-primary m-1">SEO</a>
                        <a href="" class="btn btn-primary m-1">Writing</a>
                        <a href="" class="btn btn-primary m-1">Consulting</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Plain Text Start -->
                <div>
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Plain Text</h3>
                    <div class="bg-light text-center" style="padding: 30px;">
                        <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd
                            justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                        <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->
    <script></script>
@endsection
