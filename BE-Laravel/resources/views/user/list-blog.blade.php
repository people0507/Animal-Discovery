@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')
    <style>
        .pl-3,
        .px-3 {
            padding-left: 1rem !important;
        }

        .mr-2,
        .mx-2 {
            margin-right: .5rem !important;
        }
    </style>
    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Our Blog</h4>
            <h4 class="display-4 font-weight-bold">Latest Article From Blog</h4>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="{{ asset('users/image-blog/blog-1.jpg') }}" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                        style="width: 80px; height: 80px;">
                        <small>01</small>
                        <strong class="text-uppercase m-0 text-white">Jan</strong>
                        <small>2045</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                    ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                    dolor sed kasd accusam</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="{{ asset('users/image-blog/blog-2.jpg') }}" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                        style="width: 80px; height: 80px;">
                        <small>01</small>
                        <strong class="text-uppercase m-0 text-white">Jan</strong>
                        <small>2045</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                    ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                    dolor sed kasd accusam</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="{{ asset('users/image-blog/blog-1.jpg') }}" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                        style="width: 80px; height: 80px;">
                        <small>01</small>
                        <strong class="text-uppercase m-0 text-white">Jan</strong>
                        <small>2045</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                    ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                    dolor sed kasd accusam</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-lg-6 mb-5 blog-item">
                <img class="img-fluid mb-4" src="{{ asset('users/image-blog/blog-2.jpg') }}" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                        style="width: 80px; height: 80px;">
                        <small>01</small>
                        <strong class="text-uppercase m-0 text-white">Jan</strong>
                        <small>2045</small>
                    </div>
                    <div class="pl-3">
                        <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                        <div class="d-flex">
                            <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                            <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                            <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                        </div>
                    </div>
                </div>
                <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                    ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                    dolor sed kasd accusam</p>
                <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="col-lg-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-4">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection
