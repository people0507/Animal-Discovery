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

        .s-char-text {
            margin-bottom: 30px;
            margin-top: 35px;
        }

        .page-animal p {
            margin: 10px 0;
            line-height: 1.5;
        }

        .s-char-status-item {
            text-align: center;
            width: 103px;
            height: 103px;
            border-radius: 5px;
            position: relative;
            display: inline-block;
            margin-right: 15px;
            margin-bottom: 20px;
            -webkit-transition: all .3s linear;
            transition: all .3s linear;
            vertical-align: middle;
        }

        .page-animal a {
            font-family: Rubik, sans-serif;
        }

        .s-gallery {
            position: relative;
            padding-bottom: 50px !important;
        }

        .a-h2 {
            font-weight: 500;
            font-size: 42px;
            margin-bottom: 40px;
        }

        .page-animal img {
            max-width: 100%;
            border-radius: 6px;
        }

        .gallery_count_photos {
            position: absolute;
            font-size: 18px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            font-family: Rubik;
            color: #fff;
            text-align: center;
            width: 95.4%;
        }

        .page-animal .open-gallery {
            cursor: -webkit-zoom-in;
            cursor: zoom-in;
        }

        .s-char-status-item p {
            font-family: Rubik, sans-serif;
            font-size: 30px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 0;
            line-height: 1;
            padding-top: 13px;
        }

        .s-char-status-item span {
            font-size: 14px;
            font-weight: 400;
            color: #fff;
        }

        .s-char-status-item-collection {
            width: 206px;
            background-position: 50% !important;
            background-size: cover !important;
        }

        .s-population-link {
            margin-top: 50px;
        }

        .page-animal section {
            padding: 35px 0;
            border-bottom: 1px solid #e9e9e9;
        }

        .hesperiden .tp-tab-content {
            background: transparent;
            position: relative;
            padding: 15px 15px 15px 85px;
            left: 0;
            overflow: hidden;
            margin-top: -15px;
            box-sizing: border-box;
            color: #333;
            display: inline-block;
            width: 100%;
            height: 100%;
            position: absolute;
        }

        .hesperiden .tp-tab-date {
            display: block;
            color: #aaa;
            font-weight: 500;
            font-size: 12px;
            margin-bottom: 0;
        }

        .hesperiden .tp-tab-title {
            display: block;
            text-align: left;
            color: #333;
            font-size: 14px;
            font-weight: 500;
            text-transform: none;
            line-height: 17px;
        }

        .hesperiden .tp-tab-image {
            width: 60px;
            height: 60px;
            max-height: 100%;
            max-width: 100%;
            position: relative;
            display: inline-block;
            float: left;
        }

        .hesperiden .tp-tab {
            opacity: 1;
            padding: 10px;
            box-sizing: border-box;
            font-family: roboto, sans-serif;
            border-bottom: 1px solid #e5e5e5;
        }

        .fullwidthbanner-container .fullwidthabanner {
            width: 100%;
            position: relative;
        }

        #rev_slider_1070_1_wrapper {
            background-color: #fff !important;
        }

        .rev_slider {
            overflow: hidden;
        }

        .tp-bannertimer.tp-bottom {
            top: auto;
            bottom: 0 !important;
            height: 5px;
        }

        .tp-bannertimer {
            visibility: hidden;
            width: 100%;
            height: 5px;
            background: #000;
            background: rgba(0, 0, 0, .15);
            position: absolute;
            z-index: 200;
            top: 0;
        }

        .s-distr-block {
            margin-bottom: 50px;
        }

        .a-h3 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 25px;
            margin-top: 20px;
        }

        .s-distr-block--row .row {
            margin-bottom: 15px;
        }

        .s-distr-margin {
            margin-bottom: 30px;
        }

        .s-distr-zone-item {
            text-align: center;
            width: 100%;
            max-width: 278px;
            height: 100%;
            min-height: 101px;
            border-radius: 5px;
            text-shadow: -1px 1px 0 rgba(0, 0, 0, .79);
            font-size: 24px;
            font-weight: 700;
            margin: auto;
            color: #fff;
            padding: 10px 5px;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            position: relative;
        }

        .s-distr-climate__link {
            width: 100%;
            max-width: 278px;
            height: 100%;
            min-height: 101px;
            font-size: 24px;
            font-weight: 700;
            color: #fff;
            margin: auto;
            text-align: center;
            border-radius: 5px;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .s-habbit-content {
            margin-bottom: 30px;
        }

        .align-items-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .s-habbit-group a {
            margin-left: 2px;
            font-size: 22px;
        }

        .s-population-slug {
            text-transform: uppercase;
            color: #777;
            font-weight: 600;
            font-size: 16px;
        }

        .s-population__link {
            font-size: 22px;
        }

        .s-population-view {
            margin-top: 60px;
        }

        .s-population-view__item {
            width: 50px;
            height: 50px;
            border: 2px solid #999a96;
            border-radius: 50%;
            line-height: 50px;
            text-align: center;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 18px;
            color: #999a96;
            display: inline-block;
        }

        .s-mating-slug__text {
            font-size: 16px;
            color: #777;
            text-transform: uppercase;
            font-weight: 600;
        }

        .s-mating-char a {
            display: inline-block;
            font-size: 20px;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .s-mating-descr .row {
            margin-bottom: 18px;
        }

        .page-animal p {
            margin: 10px 0;
            line-height: 1.5;
        }

        .s-mating-char__text {
            color: #222;
            font-size: 18px;
            font-weight: 600;
            font-size: 20px;
        }

        .s-related-row {
            margin-bottom: 30px;
        }

        .s-related-item {
            height: 316px;
            border-radius: 8px;
            overflow: hidden;
            max-width: 252px;
            position: relative;
            display: block;
        }

        .s-related-item__content {
            padding: 20px;
            background-color: rgba(0, 0, 0, .6);
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            margin-top: auto;
            width: 100%;
            position: absolute;
            bottom: 0;
        }

        .s-related-item__name {
            font-family: Rubik, sans-serif;
            text-transform: uppercase;
            color: #fff;
            font-weight: 500;
            font-size: 22px;
            margin-bottom: 4px;
        }

        .center {
            text-align: center;
        }

        .show-more-animal-lists {
            border: 2px solid #ff3;
            padding: 16px 70px;
            border-radius: 22px;
            text-transform: uppercase;
            color: #333;
            font-weight: 500;
        }

        .s-related .a-h2 {
            text-align: center;
        }

        .s-fascinating .a-h2 {
            text-align: center;
        }

        .a-h2 {
            text-align: center;
        }

        .slide-container {
            max-width: 1120px;
            width: 100%;
            padding: 40px 0;
        }

        .slide-content {
            margin: 0 40px;
            overflow: hidden;
            border-radius: 25px;
        }

        .card {
            border-radius: 25px;
            background-color: #FFF;
        }

        .image-content,
        .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px 14px;
        }

        .image-content {
            position: relative;
            row-gap: 5px;
            padding: 25px 0;
        }

        .overlay {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: #2EB872;
            border-radius: 25px 25px 0 25px;
        }

        .overlay::before,
        .overlay::after {
            content: '';
            position: absolute;
            right: 0;
            bottom: -40px;
            height: 40px;
            width: 40px;
            /* background-color: #2EB872; */
        }

        .overlay::after {
            border-radius: 0 25px 0 0;
            background-color: #FFF;
        }

        .card-image {
            position: relative;
            height: 250px;
            width: 300px;
            /* border-radius: 50%; */
            background: #FFF;
            padding: 3px;
        }

        .card-image .card-img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            /* border-radius: 50%; */
            border: 4px solid #2EB872;
        }

        .name {
            font-size: 18px;
            font-weight: 500;
            color: #333;
        }

        .description {
            font-size: 14px;
            color: #707070;
            text-align: center;
        }

        .button {
            border: none;
            font-size: 16px;
            color: #FFF;
            padding: 8px 16px;
            background-color: #2EB872;
            border-radius: 6px;
            margin: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button:hover {
            background: #2EB872;
        }

        .swiper-navBtn {
            color: red;
            /* color: #2EB872; */
            transition: color 0.3s ease;
        }

        .swiper-navBtn:hover {
            color: #2EB872;
        }

        .swiper-navBtn::before,
        .swiper-navBtn::after {
            font-size: 35px;
        }

        .swiper-button-next {
            right: 0;
        }

        .swiper-button-prev {
            left: 0;
        }

        .swiper-pagination-bullet {
            background-color: #2EB872;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background-color: #2EB872;
        }

        @media screen and (max-width: 768px) {
            .slide-content {
                margin: 0 10px;
            }

            .swiper-navBtn {
                display: none;
            }
        }

        .slide-show-more {
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background-color: #b8ffcd32;
        }
    </style>
    @php
        $breadcrumbs = [['name' => 'Home', 'url' => route('user.home')]];
    @endphp

    @include('user.includes.redirect', ['breadcrumbs' => $breadcrumbs])
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container page-animal">
            <div class="main-animal">
                <div class="row">
                    <div class="col-8">
                        <img src="http://localhost:8000/animal_images/{{ $data->images->image_name }}" width="100%"
                            alt="" class="animal-detail-img">
                    </div>
                    <div class="col-lg-4">
                        <div class="s-char-content">
                            <div class="s-char-heading">
                                <h1 class="a-h1">
                                    {{ $data->animal_name }}
                                </h1>
                                <div class="animal-language-switcher">
                                    <div class="animal-header-language-switcher" id="animal-language-switcher">
                                        <div class="animal-header-language-switcher-content">
                                            <div class="lang-icon">
                                                <img src="/img/lang-switcher-blue.svg" alt="">
                                            </div>
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
                                            <div class="s-char-kinds__attr text-uppercase">
                                                SPECIES

                                            </div>
                                        </div>
                                        <div class="col-8 s-char-kinds__name unactive">
                                            {{ $data->animal_scientific_name }}
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
                                        <div class="s-char-char__num">{{ $data->avg_lifespan }}</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="s-char-char__name">Weight</div>
                                        <div class="s-char-char__num">
                                            <div class="characteristic-container">
                                                <div class="characteristic-value weight_1">33.6-65</div>
                                                <div class="characteristic-value weight_2">{{ $data->animal_height }}
                                                </div>
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
            <div class="s-char-text">
                <p></p>
                {{ $data->animal_description }}
                <p></p>
            </div>
            <div class="s-char-status">
                <a href="https://animalia.bio/crepuscular" title="Crepuscular" data-url="crepuscular"
                    class="s-char-status-item " style="background-color:#757575">
                    <p>Cr</p>
                    <span>Crepuscular</span>
                </a>
                <a href="https://animalia.bio/nocturnal" title="Nocturnal" data-url="nocturnal"
                    class="s-char-status-item " style="background-color:#424242">
                    <p>No</p>
                    <span>Nocturnal</span>
                </a>
                <a href="https://animalia.bio/omnivore" title="Omnivore" data-url="omnivore" class="s-char-status-item "
                    style="background-color:#9CCC65">
                    <p>Om</p>
                    <span>Omnivore</span>
                </a>
                <a href="https://animalia.bio/scavenger" title="Scavenger" data-url="scavenger"
                    class="s-char-status-item " style="background-color:#80052d">
                    <p>Sc</p>
                    <span>Scavenger</span>
                </a>
                <a href="https://animalia.bio/terrestrial" title="Terrestrial" data-url="terrestrial"
                    class="s-char-status-item " style="background-color:#43350a">
                    <p>Te</p>
                    <span>Terrestrial</span>
                </a>
                <a href="https://animalia.bio/altricial-animals" title="Altricial" data-url="altricial-animals"
                    class="s-char-status-item " style="background-color:#f52a2a">
                    <p>Al</p>
                    <span>Altricial</span>
                </a>
                <a href="https://animalia.bio/territorial" title="Territorial" data-url="territorial"
                    class="s-char-status-item " style="background-color:#d52828">
                    <p>Te</p>
                    <span>Territorial</span>
                </a>
                <a href="https://animalia.bio/viviparous" title="Viviparous" data-url="viviparous"
                    class="s-char-status-item " style="background-color:#6b62b9">
                    <p>Vi</p>
                    <span>Viviparous</span>
                </a>
                <a href="https://animalia.bio/burrow" title="Burrowing" data-url="burrow" class="s-char-status-item "
                    style="background-color:#5D4037">
                    <p>Bu</p>
                    <span>Burrowing</span>
                </a>
                <a href="https://animalia.bio/predator" title="Predator" data-url="predator" class="s-char-status-item "
                    style="background-color:#a90505">
                    <p>Pr</p>
                    <span>Predator</span>
                </a>
                <a href="https://animalia.bio/bright" title="Bright" data-url="bright" class="s-char-status-item "
                    style="background-color:#e7cf58">
                    <p>Br</p>
                    <span>Bright</span>
                </a>
                <a href="https://animalia.bio/cute" title="Cute" data-url="cute" class="s-char-status-item "
                    style="background-color:#0ca6cd">
                    <p>Cu</p>
                    <span>Cute</span>
                </a>
                <a href="https://animalia.bio/monogamy" title="Monogamy" data-url="monogamy" class="s-char-status-item "
                    style="background-color:#d83e75">
                    <p>Mo</p>
                    <span>Monogamy</span>
                </a>
                <a href="https://animalia.bio/social-animals" title="Social" data-url="social-animals"
                    class="s-char-status-item " style="background-color:#FB8C00">
                    <p>So</p>
                    <span>Social</span>
                </a>
                <a href="https://animalia.bio/dominance-hierarchy" title="Dominance hierarchy"
                    data-url="dominance-hierarchy" class="s-char-status-item " style="background-color:#e62828">
                    <p>Do</p>
                    <span>Dominance hierarchy</span>
                </a>
                <a href="https://animalia.bio/not-a-migrant" title="Not a migrant" data-url="not-a-migrant"
                    class="s-char-status-item " style="background-color:#6c2139">
                    <p>No</p>
                    <span>Not a migrant</span>
                </a>
                <a href="/animals-that-start-with-r" title="starts with r" class="s-char-status-item"
                    style="background-color: rgb(0,200,83);">
                    <p>R</p>
                    <span>starts with</span>
                </a>
                <a href="https://animalia.bio/collections/canada-province-animals" title="Canada Province Animals"
                    class="s-char-status-item s-char-status-item-collection"
                    style="background:url(https://s3.animalia.bio/animals/photos/full/1.25x1/moose-alces-alces.webp)">
                    <p>Ca</p>
                    <span>Canada Province Animals<br> (collection)</span>
                </a>
                <a href="https://animalia.bio/collections/fluffy-animals" title="Fluffy Animals"
                    class="s-char-status-item s-char-status-item-collection"
                    style="background:url(https://s3.animalia.bio/animals/photos/full/1.25x1/dscf-227101995jpeg.webp)">
                    <p>Fl</p>
                    <span>Fluffy Animals<br> (collection)</span>
                </a>
            </div>
            <section class="s-ad-banner-horizontal">
                <div class="container" style="text-align: center;">
                    <div id="adngin-between_posts_auto-ad-0"></div>
                </div>
            </section>
            <section class="s-appearance">
                <a class="anchor" id="appearance"></a>
                <div class="container">
                    <div class="s-appearance-block">
                        <h2 class="a-h2">
                            Appearance
                        </h2>
                        <p>{{ $data->appearance_description }}</p>
                    </div>
                </div>
            </section>
            <section class="s-gallery">
                <a class="anchor" id="photo-gallery"></a>
                <div class="container">
                    <h2 class="a-h2">
                        Photos with

                        Red Fox
                    </h2>

                    <div class="s-gallery-block">
                        <div class="row">
                            <div class="col-lg-6 no-gutter-r">
                                <div class="s-gallery-item s-gallery-item--md open-gallery" data-id="53632">
                                    <img src="https://s3.animalia.bio/animals/photos/full/1x1/EYiZers8nKz9njyjDPEJ.webp"
                                        alt="Red Fox photo">
                                </div>
                            </div>
                            <div class="col-lg-6 no-gutter-r">
                                <div class="s-gallery-block__sm">
                                    <div class="row">
                                        <div class="col-sm-6 no-gutter-r">
                                            <div class="s-gallery-item s-gallery-item--right open-gallery"
                                                data-id="53631">
                                                <img src="https://s3.animalia.bio/animals/photos/small/1x1/cHgSXm2fQkqpUkQ9nhCO.webp"
                                                    alt="Red Fox photo">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 no-gutter-r">
                                            <div class="s-gallery-item s-gallery-item--right open-gallery"
                                                data-id="53642">
                                                <img src="https://s3.animalia.bio/animals/photos/small/1x1/lHfQHtQaLWP2F0CDENQM.webp"
                                                    alt="Red Fox photo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-gallery-block__sm">
                                    <div class="row">
                                        <div class="col-sm-6 no-gutter-r">
                                            <div class="s-gallery-item s-gallery-item--right open-gallery"
                                                data-id="53641">
                                                <img src="https://s3.animalia.bio/animals/photos/small/1x1/Pl480lF7lqsclIy7gNAg.webp"
                                                    alt="Red Fox photo">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 no-gutter-r">
                                            <div class="s-gallery-item s-gallery-item--right open-gallery"
                                                style="position: relative" data-id="11833">
                                                <img src="https://s3.animalia.bio/animals/photos/small/1x1/hunting-fox-hayden-valley.webp"
                                                    alt="Hunting fox, Hayden Valley">
                                                <div class="gallery_count_photos">
                                                    View 27 more photos of Red Fox

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="video">
                <div class="container">
                    <h2 class="a-h2">

                        Video
                    </h2>
                    <article class="content1">
                        <div id="rev_slider_1070_1_wrapper"
                            class="rev_slider_wrapper fullwidthbanner-container tp-mouseover" data-alias="media-gallery"
                            data-source="gallery"
                            style="margin: 0px auto; background-color: rgb(51, 51, 51); padding: 0px; overflow: visible; height: 778px;">

                            <div id="rev_slider_1070_1"
                                class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive rev_redraw_on_blurfocus"
                                style="margin-top: 0px; margin-bottom: 0px; height: 658px;" data-version="5.4.1"
                                data-slideactive="rs-30180">
                                <ul class="tp-revslider-mainul"
                                    style="visibility: visible; display: block; overflow: hidden; width: 1170px; height: 100%; max-height: none; left: 0px;">

                                    <li data-index="rs-30180" data-transition="fade" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="default"
                                        data-thumb="https://img.youtube.com/vi/r2t0MidPKXQ/default.jpg" data-rotate="0"
                                        data-saveperformance="off" data-title="Things you need to know about RED FOXES!"
                                        data-param1="Documentary" data-param2="" data-param3="" data-param4=""
                                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                                        data-param10="" data-description="" class="tp-revslider-slidesli active-revslide"
                                        style="perspective: 6000px; width: 100%; height: 100%; overflow: hidden; z-index: 20; visibility: inherit; opacity: 1;">



                                        <div class="tp-parallax-wrap"
                                            style="position: absolute; display: block; visibility: visible; min-width: 100%; left: 0px; top: 0px; z-index: 7;">
                                            <div class="tp-loop-wrap"
                                                style="position: absolute; display: block; min-width: 100%;">
                                                <div class="tp-mask-wrap"
                                                    style="position: absolute; display: block; min-width: 100%; overflow: visible;">
                                                    <div class="tp-caption   tp-resizeme tp-videolayer coverscreenvideo HasListener rs-apiready"
                                                        id="slide-3018-layer-30" data-x="0" data-y="0"
                                                        data-type="video" data-responsive_offset="on"
                                                        data-frames="[{&quot;speed&quot;:1000,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1000,&quot;ease&quot;:&quot;Power1.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                        data-ytid="r2t0MidPKXQ"
                                                        data-videoattributes="version=3&amp;enablejsapi=1&amp;html5=1&amp;volume=100&amp;hd=1&amp;wmode=opaque&amp;showinfo=0&amp;ref=0&amp;rel=0&amp;origin=https://animalia.bio;"
                                                        data-videorate="1" data-videowidth="100%" data-videoheight="100%"
                                                        data-videocontrols="controls" data-videoloop="none"
                                                        data-forcecover="1" data-aspectratio="16:9"
                                                        data-textalign="['left','left','left','left']"
                                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                        data-autoplay="off" data-nextslideatend="true" data-volume="100"
                                                        data-forcerewind="on"
                                                        style="z-index: 7; border-width: 0px; visibility: inherit; width: 1170px; height: 658px; transition: none 0s ease 0s; text-align: left; line-height: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 17px; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                                                        <iframe type="text/html"
                                                            src="https://www.youtube-nocookie.com/embed/r2t0MidPKXQ?version=3&amp;enablejsapi=1&amp;html5=1&amp;volume=100&amp;hd=1&amp;wmode=opaque&amp;showinfo=0&amp;ref=0&amp;rel=0&amp;origin=https://www.animalia.bio;"
                                                            width="100%" height="100%"
                                                            style="opacity: 1; width: 100%; height: 100.019%; position: absolute; left: 0px; top: -0.0094984%; display: block; transition: none 0s ease 0s; text-align: left; line-height: 0px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 16px; visibility: inherit;"
                                                            class="resizelistener" id="iframe77143"
                                                            data-gtm-yt-inspected-6="true"
                                                            title="Things you need to know about RED FOXES!"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-index="rs-30181" data-transition="fade" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="default"
                                        data-thumb="https://img.youtube.com/vi/OD4A9Xj0cYo/default.jpg" data-rotate="0"
                                        data-saveperformance="off" data-title="Fantastic Mr. Fox | Destination WILD"
                                        data-param1="Documentary" data-param2="" data-param3="" data-param4=""
                                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                                        data-param10="" data-description="" class="tp-revslider-slidesli"
                                        style="perspective: 6000px; width: 100%; height: 100%; overflow: hidden;">



                                        <div class="tp-parallax-wrap "
                                            style=" position:absolute;display:block;;visibility:hidden">
                                            <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-caption   tp-resizeme fullscreenvideo tp-videolayer"
                                                        id="slide-3018-layer-31" data-x="0" data-y="0"
                                                        data-type="video" data-responsive_offset="on"
                                                        data-frames="[{&quot;speed&quot;:1000,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1000,&quot;ease&quot;:&quot;Power1.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                        data-ytid="OD4A9Xj0cYo"
                                                        data-videoattributes="version=3&amp;enablejsapi=1&amp;html5=1&amp;volume=100&amp;hd=1&amp;wmode=opaque&amp;showinfo=0&amp;ref=0&amp;rel=0&amp;origin=https://animalia.bio;"
                                                        data-videorate="1" data-videowidth="100%" data-videoheight="100%"
                                                        data-videocontrols="controls" data-videoloop="none"
                                                        data-forcecover="1" data-aspectratio="16:9"
                                                        data-textalign="['left','left','left','left']"
                                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                        data-autoplay="off" data-nextslideatend="true" data-volume="100"
                                                        data-forcerewind="on"
                                                        style="z-index: 7; border-width: 0px; visibility: hidden;"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-index="rs-30182" data-transition="fade" data-slotamount="default"
                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                        data-easeout="default" data-masterspeed="default"
                                        data-thumb="https://img.youtube.com/vi/R1_3yYDnHfc/default.jpg" data-rotate="0"
                                        data-saveperformance="off" data-title="Growing Fox Cubs | Nat Geo Wild"
                                        data-param1="Lifestyle" data-param2="" data-param3="" data-param4=""
                                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                                        data-param10="" data-description="" class="tp-revslider-slidesli"
                                        style="perspective: 6000px; width: 100%; height: 100%; overflow: hidden;">



                                        <div class="tp-parallax-wrap "
                                            style=" position:absolute;display:block;;visibility:hidden">
                                            <div class="tp-loop-wrap" style="position:absolute;display:block;;">
                                                <div class="tp-mask-wrap" style="position:absolute;display:block;;">
                                                    <div class="tp-caption   tp-resizeme fullscreenvideo tp-videolayer"
                                                        id="slide-3018-layer-32" data-x="0" data-y="0"
                                                        data-type="video" data-responsive_offset="on"
                                                        data-frames="[{&quot;speed&quot;:1000,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1000,&quot;ease&quot;:&quot;Power1.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;ease&quot;:&quot;nothing&quot;}]"
                                                        data-ytid="R1_3yYDnHfc"
                                                        data-videoattributes="version=3&amp;enablejsapi=1&amp;html5=1&amp;volume=100&amp;hd=1&amp;wmode=opaque&amp;showinfo=0&amp;ref=0&amp;rel=0&amp;origin=https://animalia.bio;"
                                                        data-videorate="1" data-videowidth="100%" data-videoheight="100%"
                                                        data-videocontrols="controls" data-videoloop="none"
                                                        data-forcecover="1" data-aspectratio="16:9"
                                                        data-textalign="['left','left','left','left']"
                                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                                        data-autoplay="off" data-nextslideatend="true" data-volume="100"
                                                        data-forcerewind="on"
                                                        style="z-index: 7; border-width: 0px; visibility: hidden;"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden; width: 0%;"></div>
                                <div class="tp-loader spinner5" style="display: none;">
                                    <div class="dot1"></div>
                                    <div class="dot2"></div>
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                            <div class="tp-tabs  outer-bottom hesperiden nav-pos-hor-left nav-pos-ver-bottom nav-dir-horizontal"
                                style="max-width: 900px; max-height: 80px; overflow: visible; position: relative; background: rgb(255, 255, 255); padding: 0px; left: 0px; transform: matrix(1, 0, 0, 1, 0, 0); height: 80px;">
                                <div class="tp-tab-mask"
                                    style="max-width: 900px; max-height: 80px; overflow: hidden; position: relative; height: 80px; width: 900px;">
                                    <div class="tp-tabs-inner-wrapper"
                                        style="position: relative; width: 900px; height: 80px; left: 0px;">
                                        <div data-liindex="0" data-liref="rs-30180" class="tp-tab selected"
                                            style="width: 300px; height: 80px; left: 0px; top: 0px;">
                                            <div class="tp-tab-content"> <span class="tp-tab-date">Documentary</span>
                                                <span class="tp-tab-title">Things you need to know about RED FOXES!</span>
                                            </div>
                                            <div class="tp-tab-image"
                                                style="background-image: url(&quot;https://img.youtube.com/vi/r2t0MidPKXQ/default.jpg&quot;);">
                                            </div>
                                        </div>
                                        <div data-liindex="1" data-liref="rs-30181" class="tp-tab"
                                            style="width: 300px; height: 80px; left: 300px; top: 0px;">
                                            <div class="tp-tab-content"> <span class="tp-tab-date">Documentary</span>
                                                <span class="tp-tab-title">Fantastic Mr. Fox | Destination WILD</span>
                                            </div>
                                            <div class="tp-tab-image"
                                                style="background-image: url(&quot;https://img.youtube.com/vi/OD4A9Xj0cYo/default.jpg&quot;);">
                                            </div>
                                        </div>
                                        <div data-liindex="2" data-liref="rs-30182" class="tp-tab"
                                            style="width: 300px; height: 80px; left: 600px; top: 0px;">
                                            <div class="tp-tab-content"> <span class="tp-tab-date">Lifestyle</span> <span
                                                    class="tp-tab-title">Growing Fox Cubs | Nat Geo Wild</span></div>
                                            <div class="tp-tab-image"
                                                style="background-image: url(&quot;https://img.youtube.com/vi/R1_3yYDnHfc/default.jpg&quot;);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
            <section class="s-distr">
                <a class="anchor" id="distribution"></a>
                <div class="container">
                    <div class="s-distr-block">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="s-distr-content">
                                    <h2 class="a-h2">

                                        Distribution
                                    </h2>
                                    <h3 class="a-h3">

                                        Geography
                                    </h3>
                                    <div class="s-distr-block s-distr-block--row">
                                        <div class="row align-items-center">
                                            <div class="col-sm-3">
                                                <div class="s-distr-geography__slug">

                                                    Continents
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                @foreach ($data->areas as $item)
                                                <a href="https://animalia.bio/asia-animals"
                                                    class="s-distr-geography__link ">{{$item->area_name}},</a>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-sm-3">
                                                <div class="s-distr-geography__slug">

                                                    Countries
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                @foreach ($data->nations as $item)
                                                <a href="https://animalia.bio/albania-animals"
                                                    class="s-distr-geography__link ">{{$item->nation_name}},</a>
                                            
                                                @endforeach
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <p>{{$data->geography_description}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="s-distr-map zoom-map-trigger">
                                    <img src="https://s3.animalia.bio/animals/maps/medium/KoZMZpn7n28GdMJxcyO7.webp"
                                        alt="Red Fox habitat map">
                                </div>
                            </div>
                        </div>
                        <div class="mt-50">
                            <section class="s-ad-banner-horizontal">
                                <div class="container" style="text-align: center;">
                                    <div class="list-ads-block"></div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="s-distr-zone">
                        <h3 class="a-h3">

                            Biome
                        </h3>
                        <div class="s-distr-block">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    <a href="https://animalia.bio/agricultural" class="s-distr-zone-item "
                                        style="background-color: #00c853; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/6191876643-543648ff1c-hjpg.webp); background-size: cover"><span>Agricultural</span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    <a href="https://animalia.bio/anthropogenic-biome" class="s-distr-zone-item "
                                        style="background-color: #00c853; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/6inU3SB0PtrtxTSmCX2O.webp); background-size: cover"><span>Anthropogenic
                                            biome</span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    <a href="https://animalia.bio/chaparral" class="s-distr-zone-item "
                                        style="background-color: #00c853; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/13338726334-edbe8c745f-kjpg.webp); background-size: cover"><span>Chaparral</span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    <a href="https://animalia.bio/forest" class="s-distr-zone-item "
                                        style="background-color: #00c853; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/3475869897-070a647ba7-4kjpg.webp); background-size: cover"><span>Forest</span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    <a href="https://animalia.bio/mountains" class="s-distr-zone-item "
                                        style="background-color: #00c853; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/1871px-2909-vallon-moy-resjpg.webp); background-size: cover"><span>Mountains</span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    <a href="https://animalia.bio/grassland" class="s-distr-zone-item "
                                        style="background-color: #00c853; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/6023184021-397dc8673e-kjpg.webp); background-size: cover"><span>Grassland</span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    <a href="https://animalia.bio/shrubland" class="s-distr-zone-item "
                                        style="background-color: #00c853; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/erXO1gBryMOOcsZnar7q.webp); background-size: cover"><span>Shrubland</span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    <a href="https://animalia.bio/suburban" class="s-distr-zone-item "
                                        style="background-color: #00c853; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/6455772155-87ec902e88-kjpg.webp); background-size: cover"><span>Suburban</span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    <a href="https://animalia.bio/wetlands" class="s-distr-zone-item "
                                        style="background-color: #00c853; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/6089087194-9da86f75ab-ojpg.webp); background-size: cover"><span>Wetlands
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    <a href="https://animalia.bio/rocky-areas" class="s-distr-zone-item "
                                        style="background-color: #00c853; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/9271464143-7cc67614ca-kjpg.webp); background-size: cover"><span>Rocky
                                            areas </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    <a href="https://animalia.bio/woodland" class="s-distr-zone-item "
                                        style="background-color: #00c853; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/49521906851-044f5da7a2-kjpg.webp); background-size: cover"><span>Woodland</span>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    <a href="https://animalia.bio/urban-wildlife" class="s-distr-zone-item "
                                        style="background-color: #00c853; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/z7NT9zVZbzm9HH0EkzEc.webp); background-size: cover"><span>Urban
                                            wildlife</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-distr-climate">
                        <h3 class="a-h3">

                            Climate zones
                        </h3>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 s-distr-margin">
                                <a href="https://animalia.bio/temperate" class="s-distr-climate__link "
                                    style="background-color: #4CAF50; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/11148243034-4e1fbac74c-ojpg.webp);"><span>Temperate</span>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 s-distr-margin">
                                <a href="https://animalia.bio/cold" class="s-distr-climate__link "
                                    style="background-color: #2196F3; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/39200848735-6d27c61bb4-ojpg.webp);"><span>Cold</span>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 s-distr-margin">
                                <a href="https://animalia.bio/tropical" class="s-distr-climate__link "
                                    style="background-color: #FF5722; background-image: url(https://s3.animalia.bio/catalog/covers/small/2x1/37579557402-dbe97ed42e-ojpg.webp);"><span>Tropical</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-habbit">
                <a class="anchor" id="habits"></a>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="s-habbit-img open-gallery" data-id="11849">
                                <img src="http://localhost:8000/animal_images/{{$habitImage->image_name}}"
                                    alt="Red Fox 2016-05-19 (11)">
                            </div>
                            <div class="optimanetwork">
                                <script data-adscript="" src="https://servingcdn.net?uid=64a8647323c90d5fba5ff554&amp;w=300&amp;h=250"
                                    type="text/javascript"></script>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="s-habbit-content">
                                <h2 class="a-h2">

                                    Habits and Lifestyle
                                </h2>
                                <p>{{$data->habit_lifestyle_description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-mating">
                <a class="anchor" id="mating"></a>
                <div class="container">
                    <div class="s-mating-block">
                        <h2 class="a-h2">

                            Mating Habits
                        </h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="s-mating-descr">
                                    <div class="row align-items-end">
                                        <div class="col-6">
                                            <div class="s-mating-slug">
                                                <div class="s-mating-slug__text text-uppercase">

                                                    MATING BEHAVIOR
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="s-mating-char">
                                                <a href="https://animalia.bio/index.php/polygyny" class="">{{$data->mating_behavior}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-end">
                                        <div class="col-6">
                                            <div class="s-mating-slug">
                                                <div class="s-mating-slug__text text-uppercase">

                                                    REPRODUCTION SEASON
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="s-mating-char">
                                                <div class="s-mating-char__text">{{$data->reproduction_season}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-end">
                                        <div class="col-6">
                                            <div class="s-mating-slug">
                                                <div class="s-mating-slug__text text-uppercase">

                                                    PREGNANCY DURATION
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="s-mating-char">
                                                <div class="s-mating-char__text">{{$data->pregnancy_duration}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-end">
                                        <div class="col-6">
                                            <div class="s-mating-slug">
                                                <div class="s-mating-slug__text text-uppercase">

                                                    BABY CARRYING
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="s-mating-char">
                                                <div class="s-mating-char__text">{{$data->baby_carrying}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-end">
                                        <div class="col-6">
                                            <div class="s-mating-slug">
                                                <div class="s-mating-slug__text text-uppercase">

                                                    INDEPENDENT AGE
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="s-mating-char">
                                                <div class="s-mating-char__text">{{$data->independent_age}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="s-mating-text">
                                    <p>{{$data->mating_habit_description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-ad-banner-horizontal">
                <div class="container" style="text-align: center;">
                    <div class="list-ads-block"></div>
                </div>
            </section>
            <section class="s-population">
                <a class="anchor" id="population"></a>
                <div class="container">
                    <div class="s-population-block">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="s-population-img open-gallery" data-id="53626">
                                    <img src="http://localhost:8000/animal_images/{{$populationImage->image_name}}"
                                        alt="Red Fox photo">
                                </div>
                                <div class="s-population-link">
                                    <div class="row align-items-center">
                                        <div class="col-sm-5 col-md-4">
                                            <div class="s-population-slug">

                                                Population Trend
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-md-8">
                                            <a href="https://animalia.bio/stable" class="s-population__link">{{$data->trend->population_trending_name}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-population-link">
                                    <div class="row align-items-center">
                                        <div class="col-sm-5 col-md-4">
                                            <div class="s-population-slug text-uppercase">

                                                POPULATION STATUS
                                            </div>
                                        </div>
                                        <div class="col-sm-7 col-md-8">
                                            <a href="https://animalia.bio/least-concern-lc"
                                                class="s-population__link">{{$data->status->status_name}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="s-population-view">
                                    <a href="https://animalia.bio/not-evaluated-ne" title="Not evaluated (NE)"
                                        class="s-population-view__item ">ne</a>
                                    <a href="https://animalia.bio/data-deficient-dd" title="Data deficient (DD)"
                                        class="s-population-view__item ">dd</a>
                                    <a href="https://animalia.bio/least-concern-lc" title="Least concern (LC)"
                                        class="s-population-view__item  active ">lc</a>
                                    <a href="https://animalia.bio/near-threatened-nt" title="Near Threatened (NT)"
                                        class="s-population-view__item ">nt</a>
                                    <a href="https://animalia.bio/vulnerable-vu" title="Vulnerable (VU)"
                                        class="s-population-view__item ">vu</a>
                                    <a href="https://animalia.bio/endangered-en" title="Endangered (EN)"
                                        class="s-population-view__item ">en</a>
                                    <a href="https://animalia.bio/critically-endangered-cr"
                                        title="Critically endangered (CR)" class="s-population-view__item ">cr</a>
                                    <a href="https://animalia.bio/extinct-in-the-wild-ew" title="Extinct in the wild (EW)"
                                        class="s-population-view__item ">ew</a>
                                    <a href="https://animalia.bio/extinct-ex" title="Extinct (EX)"
                                        class="s-population-view__item ">ex</a>
                                </div>
                                <div class="mt-50">
                                    <div id="adngin-population-0"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="s-population-content">
                                    <h2 class="a-h2">

                                        Population
                                    </h2>
                                    <h3 class="a-h3">

                                        Population threats
                                    </h3>
                                    <p>{{$data->population_threat}}
                                    </p>
                                    <h3 class="a-h3">

                                        Population number
                                    </h3>
                                    <p>{{$data->population_number}}</p>
                                    <h3 class="a-h3">

                                        Ecological niche
                                    </h3>
                                    <p>{{$data->ecological_niche}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="s-related">
                <div class="container">
                    <h2 class="a-h2">

                        Included in Lists
                    </h2>
                    <div class="s-related-row">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-6">
                                <a href="https://animalia.bio/index.php/lists/country/mammals-of-sri-lanka"
                                    class="s-related-item ml-auto"
                                    style="background: url('https://s3.animalia.bio/animals/photos/small/1x1/800px-sri-lanka-purple-faced-leaf-monkeyjpg.webp') no-repeat center; background-size: cover">
                                    <div class="s-related-item__content">
                                        <div class="s-related-item__name">Mammals of Sri Lanka</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="https://animalia.bio/index.php/lists/country/threatened-species-of-saudi-arabia"
                                    class="s-related-item ml-auto"
                                    style="background: url('https://s3.animalia.bio/animals/photos/small/1x1/hawaiian-green-sea-turtle-on-black-sand.webp') no-repeat center; background-size: cover">
                                    <div class="s-related-item__content">
                                        <div class="s-related-item__name">Threatened Species of Saudi Arabia</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="https://animalia.bio/index.php/lists/country/threatened-species-of-united-arab-emirates"
                                    class="s-related-item ml-auto"
                                    style="background: url('https://s3.animalia.bio/animals/photos/small/1x1/hawaiian-green-sea-turtle-on-black-sand.webp') no-repeat center; background-size: cover">
                                    <div class="s-related-item__content">
                                        <div class="s-related-item__name">Threatened Species of United Arab Emirates</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <a href="https://animalia.bio/index.php/lists/country/mammals-of-oman"
                                    class="s-related-item ml-auto"
                                    style="background: url('https://s3.animalia.bio/animals/photos/small/1x1/jIGBzfIM8PVutDJUsahS.webp') no-repeat center; background-size: cover">
                                    <div class="s-related-item__content">
                                        <div class="s-related-item__name">Mammals of Oman</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="center">
                        <a href="https://animalia.bio/index.php/lists?animal=finless-porpoise"
                            class="show-more-animal-lists">
                            more lists with Indo-Pacific Finless Porpoise

                        </a>
                    </div>
                </div>
            </section>
            <section class="slide-show-more">
                <div class="slide-container swiper">
                    <div class="slide-content">
                        <h2 class="a-h2">
                            More Fascinating Animals to Learn About
                        </h2>
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="https://cdn.firstcry.com/education/2022/11/26141737/Animal-Name-Starting-With-L-For-Kids.jpg"
                                            alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Lion</h2>
                                    <p class="description">The lorem text the section that contains header with having open
                                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                                    <a href="#" class="button">View More</a>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="https://cdn.firstcry.com/education/2022/11/26141737/Animal-Name-Starting-With-L-For-Kids.jpg"
                                            alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Lion</h2>
                                    <p class="description">The lorem text the section that contains header with having
                                        open
                                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                                    <a href="#" class="button">View More</a>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="https://cdn.firstcry.com/education/2022/11/26141737/Animal-Name-Starting-With-L-For-Kids.jpg"
                                            alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Lion</h2>
                                    <p class="description">The lorem text the section that contains header with having
                                        open
                                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                                    <a href="#" class="button">View More</a>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="https://cdn.firstcry.com/education/2022/11/26141737/Animal-Name-Starting-With-L-For-Kids.jpg"
                                            alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Lion</h2>
                                    <p class="description">The lorem text the section that contains header with having
                                        open
                                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                                    <a href="#" class="button">View More</a>
                                </div>
                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>
                                    <div class="card-image">
                                        <img src="https://cdn.firstcry.com/education/2022/11/26141737/Animal-Name-Starting-With-L-For-Kids.jpg"
                                            alt="" class="card-img">
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h2 class="name">Lion</h2>
                                    <p class="description">The lorem text the section that contains header with having
                                        open
                                        functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
                                    <a href="#" class="button">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
        </div>
    </div>
    <!-- About End -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Swiper's JavaScript -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
@endsection
