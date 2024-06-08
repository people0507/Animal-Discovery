@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')
    <style>
        .item-animal {
            margin-top: 70px;
        }

        .title-cate-animal {
            font-size: 4rem;
            font-weight: 700;
            color: #2EB872;
        }

        .item-animal-img {
            border-radius: 10px;
        }

        .line {
            height: 0.6px;
            background-color: #c9c9c9;
            margin: 10px 0 20px 0;
        }

        .detai-animal {
            font-weight: 700;
        }
    </style>
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('user.home')],
            ['name' => 'Categories List', 'url' => route('user.cate-list')],
        ];
    @endphp

    @include('user.includes.redirect', ['breadcrumbs' => $breadcrumbs])
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="cate-top">
                <h1 class="title-cate-animal">
                    Fluffy Animals
                </h1>
                <p class="desc-cate-animal">
                    In this collection, let's take a look at animals that have soft fluffy coats and find out some
                    interesting
                    facts about them.
                </p>
            </div>
            <div class="list-animal-item">

                <div class="item-animal">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="title-item-animal">
                                RED FOX
                            </h3>
                            <div class="line"></div>
                            <p class="desc-item-animal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam
                                illo
                                vero quis expedita
                                deserunt explicabo beatae minus eligendi excepturi sint suscipit, tempora eveniet? Minus
                                numquam
                                officia officiis saepe id labore magni fugit? Facere, necessitatibus similique quia,
                                voluptates,
                                maiores aliquid eveniet assumenda architecto exercitationem reprehenderit quo corrupti neque
                                perferendis est laudantium.</p>
                            <a class="detai-animal" href="{{ route('user.animal-detail') }}">Discover more <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('images/monkey-1.jpg') }}" width="100%" alt=""
                                class="item-animal-img">
                        </div>
                    </div>
                </div>
                <div class="item-animal">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="title-item-animal">
                                RED FOX
                            </h3>
                            <div class="line"></div>
                            <p class="desc-item-animal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam
                                illo
                                vero quis expedita
                                deserunt explicabo beatae minus eligendi excepturi sint suscipit, tempora eveniet? Minus
                                numquam
                                officia officiis saepe id labore magni fugit? Facere, necessitatibus similique quia,
                                voluptates,
                                maiores aliquid eveniet assumenda architecto exercitationem reprehenderit quo corrupti neque
                                perferendis est laudantium.</p>
                            <a class="detai-animal" href="">Discover more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('images/monkey-1.jpg') }}" width="100%" alt=""
                                class="item-animal-img">
                        </div>
                    </div>
                </div>
                <div class="item-animal">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="title-item-animal">
                                RED FOX
                            </h3>
                            <div class="line"></div>
                            <p class="desc-item-animal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam
                                illo
                                vero quis expedita
                                deserunt explicabo beatae minus eligendi excepturi sint suscipit, tempora eveniet? Minus
                                numquam
                                officia officiis saepe id labore magni fugit? Facere, necessitatibus similique quia,
                                voluptates,
                                maiores aliquid eveniet assumenda architecto exercitationem reprehenderit quo corrupti neque
                                perferendis est laudantium.</p>
                            <a class="detai-animal" href="">Discover more <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('images/monkey-1.jpg') }}" width="100%" alt=""
                                class="item-animal-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
