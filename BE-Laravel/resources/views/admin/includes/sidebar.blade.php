<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.html" aria-expanded="false"><i
                            data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Manager</span></li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">Animal Management</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('list_animal') }}" class="sidebar-link">
                                <span class="hide-menu"> All Animals </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="file-text" class="feather-icon"></i>
                                <span class="hide-menu">Add Animal</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.add-animal') }}" class="sidebar-link">
                                        <span class="hide-menu"> Add Basic </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.add-image-animal') }}" class="sidebar-link">
                                        <span class="hide-menu"> Add Image</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.classification-animal') }}" class="sidebar-link">
                                        <span class="hide-menu">Classification</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="layers" class="feather-icon"></i>
                        <span class="hide-menu">Animal Categories</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="category-list.html" class="sidebar-link">
                                <span class="hide-menu"> All Categories </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="add-category.html" class="sidebar-link">
                                <span class="hide-menu"> Add Category </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="users" class="feather-icon"></i>
                        <span class="hide-menu">Users</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.list_user') }}" class="sidebar-link">
                                <span class="hide-menu"> All Users </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.view_add_user') }}" class="sidebar-link">
                                <span class="hide-menu"> Add User </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="users" class="feather-icon"></i>
                        <span class="hide-menu">Post Animal</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.list_posts') }}" class="sidebar-link">
                                <span class="hide-menu"> All Posts </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="gamepad" class="feather-icon"></i>
                                <span class="hide-menu">Games</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="game-list.html" class="sidebar-link">
                                        <span class="hide-menu"> All Games </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add-game.html" class="sidebar-link">
                                        <span class="hide-menu"> Add Game </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="book-open" class="feather-icon"></i>
                                <span class="hide-menu">Topics</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="topic-list.html" class="sidebar-link">
                                        <span class="hide-menu"> All Topics </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add-topic.html" class="sidebar-link">
                                        <span class="hide-menu"> Add Topic </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="activity" class="feather-icon"></i>
                                <span class="hide-menu">Animal Behaviors</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="behavior-list.html" class="sidebar-link">
                                        <span class="hide-menu"> All Behaviors </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add-behavior.html" class="sidebar-link">
                                        <span class="hide-menu"> Add Behavior </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">Animal Habitats</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="habitat-list.html" class="sidebar-link">
                                        <span class="hide-menu"> All Habitats </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add-habitat.html" class="sidebar-link">
                                        <span class="hide-menu"> Add Habitat </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="image" class="feather-icon"></i>
                                <span class="hide-menu">Animal Images</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="image-list.html" class="sidebar-link">
                                        <span class="hide-menu"> All Images </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="add-image.html" class="sidebar-link">
                                        <span class="hide-menu"> Add Image </span>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                <li class="list-divider"></li>
            </ul>
        </nav>
    </div>
</aside>
