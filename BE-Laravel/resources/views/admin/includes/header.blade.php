<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md">
        <div class="navbar-header" data-logobg="skin6">
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
            <div class="navbar-brand">
                <a href="{{ route('admin.dashboard') }}">
                    <b class="logo-icon">
                        <img src="{{ asset('admin/assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                        <img src="{{ asset('admin/assets/images/logo-icon.png') }}" alt="homepage" class="light-logo" />
                    </b>
                    <span class="logo-text">
                        <img src="{{ asset('admin/assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                        <img src="{{ asset('admin/assets/images/logo-light-text.png') }}" class="light-logo"
                            alt="homepage" />
                    </span>
                </a>
            </div>
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav float-left">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        @if(Auth::user()->avatar != null)
                        <img src="{{ asset('avatars/'. Auth::user()->avatar) }}" alt="user"
                            class="rounded-circle" width="40" height="40">
                        @else
                        <img src="{{ asset('error/user_error.jpg') }}" alt="user"
                            class="rounded-circle" width="40" height="40">
                        @endif
                        <span class="ml-2 d-none d-lg-inline-block"><span
                                class="text-dark">{{ Auth::user()->name }}</span> <i data-feather="chevron-down"
                                class="svg-icon"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <a class="dropdown-item" href="{{route('logout')}}"><i data-feather="power"
                                class="svg-icon mr-2 ml-1"></i>
                            Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
