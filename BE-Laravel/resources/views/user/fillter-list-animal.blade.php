@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')
    <link rel="stylesheet" href="{{ asset('users/css/fillter-list-animal.css') }}">
    <div class="slide-head">
        <header xmlns="http://www.w3.org/1999/html" class="main-head">
            <div class="container clearfix">
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
                        DIURNAL ANIMALS
                    </div>
                    <div class="quantity-h3">
                        2661 SPECIES
                    </div>
                </div>
                <div class="col-6">
                    <div class="box-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est molestias sequi corrupti doloribus
                        saepe at quisquam minus maiores quibusdam voluptate. Suscipit, totam esse asperiores error, corrupti
                        quisquam quidem repudiandae voluptate facilis modi mollitia, libero enim nihil amet veniam saepe id.
                        Eos dolores magni, impedit laborum maxime delectus sunt facilis quod repellendus dolor, quae
                        assumenda deserunt expedita placeat at vero est cupiditate earum animi explicabo optio alias
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
