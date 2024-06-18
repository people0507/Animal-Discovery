@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')
    <link rel="stylesheet" href="{{ asset('users/css/animal-detail.css') }}">
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
                                @foreach ($data->biomes as $item)
                                <div class="col-lg-3 col-md-6 s-distr-margin">
                                    <a href="https://animalia.bio/urban-wildlife" class="s-distr-zone-item "
                                    style="background-color: #00c853; background-image: url(http://localhost:8000/biomes/small/{{$item->biome_image}}); background-size: cover"><span>{{$item->biome_name}}</span>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="s-distr-climate">
                        <h3 class="a-h3">

                            Climate zones
                        </h3>
                        <div class="row">
                            @foreach ($data->climates as $item)
                            <div class="col-lg-3 col-md-6 s-distr-margin">
                                <a href="https://animalia.bio/temperate" class="s-distr-climate__link "
                                    style="background-color: #4CAF50; background-image: url(http://localhost:8000/climates/small/{{$item->climate_image}});"><span>{{$item->climate_name}}</span>
                                </a>
                            </div>
                            @endforeach
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
                            <div class="row align-items-center mt-3">
                                <div class="col-sm-3">
                                    <div class="s-habbit-group__slug">

                                        Bird's call
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <audio controls="">
                                        <source src="https://xeno-canto.org/332858/download" type="audio/mpeg">
                                        Your browser does not support the audio element.

                                    </audio>
                                </div>
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
