@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')
    <style>
        .animal-detail-img {
            border-radius: 10px;
        }

        .char__block {
            border: 1px solid black;
        }

        .s-char-char__block {
            padding: 12px 0;
            border-bottom: 1px solid #e9e9e9;
        }

        .s-char-char__name {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            color: #777;
            margin-bottom: 10px;
        }

        .s-char-char__num {
            font-size: 26px;
            font-weight: 400;
            text-transform: uppercase;
            color: #00c853;
            font-family: Rubik, sans-serif;
        }

        .characteristic-right-block .s-char-char__num {
            font-size: 22px;
        }

        .characteristic-container,
        .units-block {
            display: block;
            float: left;
        }

        .units-block {
            font-size: 10px;
            padding: 0 14px 0 6px;
            position: relative;
        }

        .units-container {
            position: absolute;
            top: -4px;
            z-index: 2;
        }

        .units-container span {
            display: block;
            cursor: pointer;
            float: left;
        }

        .toggle-units,
        .toggle-units_last {
            cursor: pointer;
            display: inline-block;
        }

        .units-container span:first-child {
            padding: 4px 6px 4px 0;
            border-right: 1px solid #aaa;
        }
    </style>
    @php
        $breadcrumbs = [
            ['name' => 'Home', 'url' => route('user.home')],
        ];
    @endphp

    @include('user.includes.redirect', ['breadcrumbs' => $breadcrumbs])
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="main-animal">
                <div class="row">
                    <div class="col-8">
                        <img src="http://localhost:8000/animal_images/{{$data->images->image_name}}"
                            width="100%" alt="" class="animal-detail-img">
                    </div>
                    <div class="col-lg-4">
                        <div class="s-char-content">
                            <div class="s-char-heading">
                                <h1 class="a-h1">
                                    {{$data->animal_name}}
                                </h1>
                                <p class="s-char-heading__name">
                                    Redbird, Common cardinal, cardinal
                                </p>
                                <div class="animal-language-switcher">
                                    <div class="animal-header-language-switcher" id="animal-language-switcher">
                                        <div class="animal-header-language-switcher-content">
                                            <div class="lang-icon">
                                                <img src="/img/lang-switcher-blue.svg" alt="">
                                            </div>
                                            13 languages
                                            <div class="lang-caret">
                                                <img src="/img/lang-switcher-caret-blue.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="animal-header-language-select" id="animal-language-switcher-select"
                                            style="display: none;">
                                            <div>
                                                <span>English</span>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://animalia.bio/index.php/uk/northern-cardinal?collection=38">Українська</a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://animalia.bio/index.php/es/northern-cardinal?collection=38">Español</a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://animalia.bio/index.php/it/northern-cardinal?collection=38">Italiano</a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://animalia.bio/index.php/fr/northern-cardinal?collection=38">Français</a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://animalia.bio/index.php/de/northern-cardinal?collection=38">Deutsch</a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://animalia.bio/index.php/pt/northern-cardinal?collection=38">Português</a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://animalia.bio/index.php/pl/northern-cardinal?collection=38">Polski</a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://animalia.bio/index.php/da/northern-cardinal?collection=38">Dansk</a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://animalia.bio/index.php/fi/northern-cardinal?collection=38">Suomi</a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://animalia.bio/index.php/sv/northern-cardinal?collection=38">Svenska</a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://animalia.bio/index.php/ko/northern-cardinal?collection=38">한국어</a>
                                            </div>
                                            <div>
                                                <a
                                                    href="https://animalia.bio/index.php/nl/northern-cardinal?collection=38">Nederlands</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="s-char-kinds">
                                <div class="s-char-kinds__item">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <div class="s-char-kinds__attr">
                                                Kingdom
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <a href="https://animalia.bio/animalia" class="s-char-kinds__name">Animalia</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-char-kinds__item">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <div class="s-char-kinds__attr">
                                                Phylum
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <a href="https://animalia.bio/chordata" class="s-char-kinds__name">Chordata</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-char-kinds__item">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <div class="s-char-kinds__attr">
                                                Class
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <a href="https://animalia.bio/aves" class="s-char-kinds__name">Aves</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-char-kinds__item">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <div class="s-char-kinds__attr">
                                                Order
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <a href="https://animalia.bio/passeriformes"
                                                class="s-char-kinds__name">Passeriformes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-char-kinds__item">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <div class="s-char-kinds__attr">
                                                Family
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <a href="https://animalia.bio/cardinalidae"
                                                class="s-char-kinds__name">Cardinalidae</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-char-kinds__item">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <div class="s-char-kinds__attr">
                                                Genus
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <a href="https://animalia.bio/cardinalis"
                                                class="s-char-kinds__name">Cardinalis</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-char-kinds__item">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <div class="s-char-kinds__attr text-uppercase">
                                                SPECIES

                                            </div>
                                        </div>
                                        <div class="col-8 s-char-kinds__name unactive">
                                            {{$data->animal_scientific_name}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="s-char-char characteristic-right-block">
                            <div class="s-char-char__block">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="s-char-char__name">Life Span</div>
                                        <div class="s-char-char__num">{{$data->avg_lifespan}}</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="s-char-char__name">Weight</div>
                                        <div class="s-char-char__num">
                                            <div class="characteristic-container">
                                                <div class="characteristic-value weight_1">33.6-65</div>
                                                <div class="characteristic-value weight_2">{{$data->animal_height}}</div>
                                            </div>
                                            <div class="units-block">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <span action="weight_1" class="toggle-units active-unit">g</span>
                                                    </div>
                                                    <div class="col-1 text-center">
                                                        |
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="toggle-units_last" action="weight_2">oz</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="s-char-char__block">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="s-char-char__name">Length</div>
                                        <div class="s-char-char__num">
                                            <div class="characteristic-container">
                                                <div class="characteristic-value lengths_1">21-23.5</div>
                                                <div class="characteristic-value lengths_2">8.3-9.3</div>
                                            </div>
                                            <div class="units-block">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <span action="weight_1" class="toggle-units active-unit">cm</span>
                                                    </div>
                                                    <div class="col-1 text-center">
                                                        |
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="toggle-units_last" action="weight_2">inch</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="s-char-char__name">Wingspan</div>
                                        <div class="s-char-char__num">
                                            <div class="characteristic-container">
                                                <div class="characteristic-value wingspan_1">25-31</div>
                                                <div class="characteristic-value wingspan_2">9.8-12.2</div>
                                            </div>
                                            <div class="units-block">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <span action="weight_1" class="toggle-units active-unit">cm</span>
                                                    </div>
                                                    <div class="col-1 text-center">
                                                        |
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="toggle-units_last" action="weight_2">inch</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
