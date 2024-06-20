<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social - Cuong</title>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="{{ asset('users/social_assets/css/style.css') }}">
    <!-- ICONCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <nav>
        <div class="container">
            <h2 class="logo">
                CuongSocial
            </h2>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Search for creators inspirations">
            </div>
            <div class="create">
                <label class="btn btn-primary" for="create-post">Create</label>
                <div class="profile-picture">
                    <img src="{{ asset('users/social_assets/images/profile-1.jpg') }}">
                </div>
            </div>
        </div>
    </nav>

    <!----------------------------- MAIN ----------------------------->
    <main>
        <div class="container">
            <!-- ================ LEFT ================ -->
            <div class="left">
                <div class="profile">
                    <div class="profile-picture">
                        <img src="{{ asset('users/social_assets/images/profile-1.jpg') }}">
                    </div>
                    <div class="handle">
                        <h4>Anna Jr</h4>
                        <p class="text-muted">
                            @anna
                        </p>
                    </div>
                </div>

                <!-- ============= SIDEBAR ============= -->

                <div class="sidebar">
                    <a class="menu-item active">
                        <span><i class="uil uil-home"></i>
                        </span>
                        <h3>Home</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-compass"></i>
                        </span>
                        <h3>Explore</h3>
                    </a>
                    <a class="menu-item" id="notification">
                        <span><i class="uil uil-bell"><small class="notification-count">4</small></i>
                        </span>
                        <h3>Notifications</h3>
                        <!-- ----------------------- NOTIFICATION POPUP ----------------------- -->
                        <div class="notification-popup" style="display: none;">
                            <div>
                                <div class="profile-picture">
                                    <img src="{{ asset('users/social_assets/images/profile-5.jpg') }}" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Keke Messi</b>
                                    <span> accepted your friend request</span>
                                    <small class="text-muted">5 DAYS AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="{{ asset('users/social_assets/images/profile-7.jpg') }}" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Keke Benjamin</b>
                                    <span> accepted your friend request</span>
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="{{ asset('users/social_assets/images/profile-9.jpg') }}" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Keke Benjamin</b>
                                    <span> accepted your friend request</span>
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="{{ asset('users/social_assets/images/profile-4.jpg') }}" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>MynaSang</b>
                                    <span> accepted your friend request</span>
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="menu-item" id="theme">
                        <span><i class="uil uil-palette"></i>
                        </span>
                        <h3>Theme</h3>
                    </a>

                </div>
                <!-- ======================= END OF SIDEBAR ======================= -->
                <label for="create-post" class="btn btn-primary">Create Post</label>
            </div>
            <!-- ================ END OF LEFT ================ -->

            <!-- ================ MIDDLE ================ -->
            <div class="middle">
                <!-- ================ CREATE POST ================ -->
                <form action="" class="create-post">
                    <div class="profile-picture">
                        <img src="{{ asset('users/social_assets/images/profile-1.jpg') }}" alt="">
                    </div>
                    <input type="text" placeholder="What's on your mind, Diana?" id="create-post">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>

                <!-- ================ FEEDS ================ -->
                <div class="feeds">
                    <div class="feed">
                        <!-- ================ FEED 1 ================ -->
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="{{ asset('users/social_assets/images/profile-10.jpg') }}" alt="">
                                </div>
                                <div class="ingo">
                                    <h3>Lana Rose</h3>
                                    <small>Dubai, 15 MINUTED AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="{{ asset('users/social_assets/images/feed-1.jpg') }}" alt="">
                        </div>

                        <div class="action-button">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="{{ asset('users/social_assets/images/profile-10.jpg') }}"
                                    alt=""></span>
                            <span><img src="{{ asset('users/social_assets/images/profile-15.jpg') }}"
                                    alt=""></span>
                            <span><img src="{{ asset('users/social_assets/images/profile-13.jpg') }}"
                                    alt=""></span>
                            <p>Like by <b>Ernest Aritn</b> and <b>2, 330 others</b></p>
                        </div>

                        <div class="caption">
                            <p>
                                <b>Lana Rose</b> Lorem ipsum dolor, sit amet consectetur adipisicing.
                                <span class="harsh-tag">#lifestyle</span>
                            </p>
                        </div>

                        <div class="comments text-muted">"View all 277 comments"</div>
                    </div>
                    <div class="feed">
                        <!-- ================ FEED 2 ================ -->
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="{{ asset('users/social_assets/images/profile-11.jpg') }}"
                                        alt="">
                                </div>
                                <div class="ingo">
                                    <h3>Yang chi</h3>
                                    <small>Dubai, 20 MINUTED AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="{{ asset('users/social_assets/images/feed-2.jpg') }}" alt="">
                        </div>

                        <div class="action-button">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="{{ asset('users/social_assets/images/profile-15.jpg') }}"
                                    alt=""></span>
                            <span><img src="{{ asset('users/social_assets/images/profile-16.jpg') }}"
                                    alt=""></span>
                            <span><img src="{{ asset('users/social_assets/images/profile-13.jpg') }}"
                                    alt=""></span>
                            <p>Like by <b>Ernest Aritn</b> and <b>2, 130 others</b></p>
                        </div>

                        <div class="caption">
                            <p>
                                <b>Lana Rose</b> Lorem ipsum dolor, sit amet consectetur adipisicing.
                                <span class="harsh-tag">#lifestyle</span>
                            </p>
                        </div>

                        <div class="comments text-muted">"View all 177 comments"</div>
                    </div>
                    <!-- ================ END FEEDS ================ -->
                </div>


            </div>
    </main>

    <!-- =============================================== THEME CUSTOMIZATION =================================== -->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p class="text-muted">Manage your font size, color, and background.</p>

            <!-- --------- FONT SIZES ---------- -->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h5>Aa</h5>
                    <div class="choose-size">
                        <span class="font-size-1 "></span>
                        <span class="font-size-2 active"></span>
                        <span class="font-size-3"></span>
                        <span class="font-size-4"></span>
                        <span class="font-size-5"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>

            <!-- --------- PRIMARY COLORS ---------- -->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>

            <!-- --------- BACKGROUND COLORS ---------- -->
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5>Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Light Out</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="./assets/js/main.js"></script> --}}
    <script src="{{ asset('users/social_assets/js/main.js') }}"></script>
</body>


</html>
