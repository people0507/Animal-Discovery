@extends('admin.main')
@section('title', 'Home Page Admin')
@section('content_admin')
<style>
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px;
            background-color: #4CAF50;
            /* Màu xanh */
            color: white;
            z-index: 9999;
            display: none;
            /* Ẩn ban đầu */
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .notification.success {
            background-color: #4CAF50;
            /* Màu xanh */
        }

        .notification.failed {
            background-color: #ff3333;
            /* Màu đỏ */
            color: white;
        }


        .notification.show {
            display: block;
            animation: slideInRight 0.5s ease-out forwards;
        }

        @keyframes slideInRight {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(0);
            }
        }
    </style>
    @if (session('success'))
        <div id="notification" class="notification success">
            <p id="notification-message"></p>
            <span id="close-notification" class="close-notification"><i class="fa fa-check" aria-hidden="true"></i>
                {{ session('success') }}</span>
        </div>
    @endif

    @if (session('failed'))
        <div id="notification" class="notification failed">
            <p id="notification-message"></p>
            <span id="close-notification" class="close-notification"><i class="fa fa-exclamation-triangle"
                    aria-hidden="true"></i> {{ session('failed') }}</span>
        </div>
    @endif
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Xin Chào {{ Auth::user()->name }}!
                </h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card-group">
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">{{$user}}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Người Dùng</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                    class="set-doller">$</sup>18,306</h2>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Earnings of Month
                            </h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-right">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">{{$post}}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Bài Viết</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="file-text"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <h2 class="text-dark mb-1 font-weight-medium">{{$animalDetail}}</h2>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Động Vật</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted"><i data-feather="gitlab"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- *************************************************************** -->
        <!-- End First Cards -->
        <!-- *************************************************************** -->
        <!-- *************************************************************** -->
        <!-- Start Sales Charts Section -->
        <!-- *************************************************************** -->
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total Sales</h4>
                        <div id="campaign-v2" class="mt-2" style="height:283px; width:100%;"></div>
                        <ul class="list-style-none mb-0">
                            <li>
                                <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                <span class="text-muted">Direct Sales</span>
                                <span class="text-dark float-right font-weight-medium">$2346</span>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                <span class="text-muted">Referral Sales</span>
                                <span class="text-dark float-right font-weight-medium">$2108</span>
                            </li>
                            <li class="mt-3">
                                <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                                <span class="text-muted">Affiliate Sales</span>
                                <span class="text-dark float-right font-weight-medium">$1204</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Activity</h4>
                        <div class="mt-4 activity">
                            <div class="d-flex align-items-start border-left-line pb-3">
                                <div>
                                    <a href="javascript:void(0)" class="btn btn-info btn-circle mb-2 btn-item">
                                        <i data-feather="shopping-cart"></i>
                                    </a>
                                </div>
                                <div class="ml-3 mt-2">
                                    <h5 class="text-dark font-weight-medium mb-2">New Product Sold!</h5>
                                    <p class="font-14 mb-2 text-muted">John Musa just purchased <br> Cannon 5M
                                        Camera.
                                    </p>
                                    <span class="font-weight-light font-14 text-muted">10 Minutes Ago</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-start border-left-line pb-3">
                                <div>
                                    <a href="javascript:void(0)" class="btn btn-danger btn-circle mb-2 btn-item">
                                        <i data-feather="message-square"></i>
                                    </a>
                                </div>
                                <div class="ml-3 mt-2">
                                    <h5 class="text-dark font-weight-medium mb-2">New Support Ticket</h5>
                                    <p class="font-14 mb-2 text-muted">Richardson just create support <br>
                                        ticket</p>
                                    <span class="font-weight-light font-14 text-muted">25 Minutes Ago</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-start border-left-line">
                                <div>
                                    <a href="javascript:void(0)" class="btn btn-cyan btn-circle mb-2 btn-item">
                                        <i data-feather="bell"></i>
                                    </a>
                                </div>
                                <div class="ml-3 mt-2">
                                    <h5 class="text-dark font-weight-medium mb-2">Notification Pending Order!
                                    </h5>
                                    <p class="font-14 mb-2 text-muted">One Pending order from Ryne <br> Doe</p>
                                    <span class="font-weight-light font-14 mb-1 d-block text-muted">2 Hours
                                        Ago</span>
                                    <a href="javascript:void(0)" class="font-14 border-bottom pb-1 border-info">Load
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- *************************************************************** -->
        <!-- End Location and Earnings Charts Section -->
        <!-- *************************************************************** -->
        <!-- *************************************************************** -->
        <!-- Start Top Leader Table -->
        <!-- *************************************************************** -->
        <!-- <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <h4 class="card-title">Top Leaders</h4>
                            <div class="ml-auto">
                                <div class="dropdown sub-dropdown">
                                    <button class="btn btn-link text-muted dropdown-toggle" type="button" id="dd1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i data-feather="more-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                        <a class="dropdown-item" href="#">Insert</a>
                                        <a class="dropdown-item" href="#">Update</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap v-middle mb-0">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted">Team Lead
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-2">Project
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Team</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                            Status
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                            Weeks
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Budget</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-top-0 px-2 py-4">
                                            <div class="d-flex no-block align-items-center">
                                                <div class="mr-3"><img
                                                        src="{{ asset('admin/assets/images/users/widget-table-pic1.jpg') }}"
                                                        alt="user" class="rounded-circle" width="45"
                                                        height="45" /></div>
                                                <div class="">
                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna
                                                        Gover</h5>
                                                    <span class="text-muted font-14">hgover@gmail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14">Elite Admin</td>
                                        <td class="border-top-0 px-2 py-4">
                                            <div class="popover-icon">
                                                <a class="btn btn-primary rounded-circle btn-circle font-12"
                                                    href="javascript:void(0)">DS</a>
                                                <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                                    href="javascript:void(0)">SS</a>
                                                <a class="btn btn-cyan rounded-circle btn-circle font-12 popover-item"
                                                    href="javascript:void(0)">RP</a>
                                                <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                    href="javascript:void(0)">+</a>
                                            </div>
                                        </td>
                                        <td class="border-top-0 text-center px-2 py-4"><i
                                                class="fa fa-circle text-primary font-12" data-toggle="tooltip"
                                                data-placement="top" title="In Testing"></i></td>
                                        <td class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                            35
                                        </td>
                                        <td class="font-weight-medium text-dark border-top-0 px-2 py-4">$96K
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-4">
                                            <div class="d-flex no-block align-items-center">
                                                <div class="mr-3"><img
                                                        src="{{ asset('admin/assets/images/users/widget-table-pic2.jpg') }}"
                                                        alt="user" class="rounded-circle" width="45"
                                                        height="45" /></div>
                                                <div class="">
                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium">Daniel
                                                        Kristeen
                                                    </h5>
                                                    <span class="text-muted font-14">Kristeen@gmail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-muted px-2 py-4 font-14">Real Homes WP Theme</td>
                                        <td class="px-2 py-4">
                                            <div class="popover-icon">
                                                <a class="btn btn-primary rounded-circle btn-circle font-12"
                                                    href="javascript:void(0)">DS</a>
                                                <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                                    href="javascript:void(0)">SS</a>
                                                <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                    href="javascript:void(0)">+</a>
                                            </div>
                                        </td>
                                        <td class="text-center px-2 py-4"><i class="fa fa-circle text-success font-12"
                                                data-toggle="tooltip" data-placement="top" title="Done"></i>
                                        </td>
                                        <td class="text-center text-muted font-weight-medium px-2 py-4">32</td>
                                        <td class="font-weight-medium text-dark px-2 py-4">$85K</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-4">
                                            <div class="d-flex no-block align-items-center">
                                                <div class="mr-3"><img
                                                        src="{{ asset('admin/assets/images/users/widget-table-pic3.jpg') }}"
                                                        alt="user" class="rounded-circle" width="45"
                                                        height="45" /></div>
                                                <div class="">
                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium">Julian
                                                        Josephs
                                                    </h5>
                                                    <span class="text-muted font-14">Josephs@gmail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-muted px-2 py-4 font-14">MedicalPro WP Theme</td>
                                        <td class="px-2 py-4">
                                            <div class="popover-icon">
                                                <a class="btn btn-primary rounded-circle btn-circle font-12"
                                                    href="javascript:void(0)">DS</a>
                                                <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item"
                                                    href="javascript:void(0)">SS</a>
                                                <a class="btn btn-cyan rounded-circle btn-circle font-12 popover-item"
                                                    href="javascript:void(0)">RP</a>
                                                <a class="btn btn-success text-white rounded-circle btn-circle font-20"
                                                    href="javascript:void(0)">+</a>
                                            </div>
                                        </td>
                                        <td class="text-center px-2 py-4"><i class="fa fa-circle text-primary font-12"
                                                data-toggle="tooltip" data-placement="top" title="Done"></i>
                                        </td>
                                        <td class="text-center text-muted font-weight-medium px-2 py-4">29</td>
                                        <td class="font-weight-medium text-dark px-2 py-4">$81K</td>
                                    </tr>
                                    <tr>
                                        <td class="px-2 py-4">
                                            <div class="d-flex no-block align-items-center">
                                                <div class="mr-3"><img
                                                        src="{{ asset('admin/assets/images/users/widget-table-pic4.jpg') }}"
                                                        alt="user" class="rounded-circle" width="45"
                                                        height="45" /></div>
                                                <div class="">
                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium">Jan
                                                        Petrovic
                                                    </h5>
                                                    <span class="text-muted font-14">hgover@gmail.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-muted px-2 py-4 font-14">Hosting Press HTML</td>
                                        <td class="px-2 py-4">
                                            <div class="popover-icon">
                                                <a class="btn btn-primary rounded-circle btn-circle font-12"
                                                    href="javascript:void(0)">DS</a>
                                                <a class="btn btn-success text-white font-20 rounded-circle btn-circle"
                                                    href="javascript:void(0)">+</a>
                                            </div>
                                        </td>
                                        <td class="text-center px-2 py-4"><i class="fa fa-circle text-danger font-12"
                                                data-toggle="tooltip" data-placement="top" title="In Progress"></i></td>
                                        <td class="text-center text-muted font-weight-medium px-2 py-4">23</td>
                                        <td class="font-weight-medium text-dark px-2 py-4">$80K</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- *************************************************************** -->
        <!-- End Top Leader Table -->
        <!-- *************************************************************** -->
    </div>
@endsection
<script>
    // Hiển thị thông báo
    function showNotification(message) {
        var notification = document.querySelector('.notification');
        notification.innerHTML = message;
        notification.classList.add('show');

        // Tự động ẩn sau 5 giây
        setTimeout(function() {
            hideNotification();
        }, 5000); // Ẩn sau 5 giây
    }

    // Ẩn thông báo
    function hideNotification() {
        var notification = document.querySelector('.notification');
        notification.classList.remove('show');
    }

    // Hiển thị thông báo khi trang được load
    window.onload = function() {
        var successMessage = "{{ session('success') }}";
        var failedMessage = "{{ session('failed') }}";

        if (failedMessage) {
            showNotification(failedMessage);
        }
        if (successMessage) {
            showNotification(successMessage);
        }
    };
</script>