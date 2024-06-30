@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')
    <link rel="stylesheet" href="{{ asset('users/css/fillter-list-animal.css') }}" style="padding: 50px 0">
    <div
        @if (isset($data1->climate_image) && $data1->climate_image != '') 
        style = "background-image: url(http://localhost:8000/climates/full/{{ $data1->climate_image }});"
    @elseif(isset($data1->biome_image) && $data1->biome_image != '')
        style = "background-image: url(http://localhost:8000/biomes/full/{{ $data1->biome_image }});"
    @else
        style = "background-image: url(http://localhost:8000/error/error.jpg);"
    @endif
    >
        <header xmlns="http://www.w3.org/1999/html" class="main-head">
            <div class="container-nav clearfix">
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
                    <div class="h1-title">
                    @if (isset($data1->climate_image) && $data1->climate_image != '')
                        {{ $data1->climate_name }}
                    @else
                        {{ $data1->biome_name }}
                    @endif
                    </div>
                    <div class="quantity-h3">
                        {{ $count }} LOÀI
                    </div>
                </div>
                <div class="col-6">
                    <div class="box-text">
                    @if (isset($data1->climate_image) && $data1->climate_image != '')
                        {{ $data1->climate_description }}
                    @else
                        {{ $data1->biome_description }}
                    @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col">
                @foreach ($data as $item)
                    <div class="blog-item mb-5">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                @if($item->images->image_name != null)
                                <img class="img-fluid h-100"
                                    src="http://localhost:8000/animal_images/{{ $item->images->image_name }}"
                                    style="object-fit: cover;">
                                @else
                                <img class="img-fluid h-100"
                                    src="http://localhost:8000/error/error.jpg"
                                    style="object-fit: cover;">
                                @endif
                            </div>
                            <div
                                class="col-12
                                    col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
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

                {{ $data->links('pagination::bootstrap-4') }}
            </div>
            <!-- Blog list End -->

        </div>
    </div>
    <!-- Blog End -->
    <script></script>
@endsection
