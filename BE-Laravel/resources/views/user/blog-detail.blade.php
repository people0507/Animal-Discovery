@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')
    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        .pl-3,
        .px-3 {
            padding-left: 1rem !important;
        }

        .mr-2,
        .mx-2 {
            margin-right: .5rem !important;
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }

        .media-body {
            flex: 1;
        }

        .mr-3,
        .mx-3 {
            margin-right: 1rem !important;
        }

        .media {
            display: flex;
            align-items: flex-start;
        }

        .mr-4,
        .mx-4 {
            margin-right: 1.5rem !important;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        .w-50 {
            width: 50% !important;
        }

        .img-avatar {
            /* width: 100px;
                                                                                                                height: 100px; */
        }

        .float-left {
            float: left !important;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }

        .float-right {
            float: right !important;
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('users/comment/style.css') }}">
    <!-- Blog Detail Start -->
    <div class="container py-5">
        <h1 class="text-center mb-5">Detail Blog</h1>
        <div class="row">
            <div class="col-12">
                <img class="img-fluid mb-4" src="{{ asset('users/img/bg-2.jpg') }}" alt="Image">
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                        style="width: 100px; height: 100px;">
                        <span>01</span>
                        <strong class="text-uppercase m-0 text-white">Jan</strong>
                        <span>2045</span>
                    </div>
                    <div class="pl-3">
                        <h1 class="font-weight-bold mb-3">Lorem ipsum dolor sit amet</h1>
                        <div class="d-flex">
                            <span class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</span>
                            <span class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</span>
                            <span class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</span>
                        </div>
                    </div>
                </div>
                <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem. Nonumy vero
                    labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam consetetur eirmod. Kasd accusam
                    sit ipsum sadipscing et at at sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at
                    et aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren sit stet no diam kasd
                    vero, eos tempor gubergren clita est consetetur dolores et dolor. Sadipscing lorem kasd labore ea
                    sanctus sanctus, dolores invidunt et consetetur et duo. Tempor dolores accusam sit vero sit, sed labore
                    duo vero et at, et amet et justo gubergren. Labore aliquyam voluptua dolor nonumy lorem. Sanctus sed
                    sadipscing rebum ipsum dolor et ea no. Ipsum elitr sea erat.</p>
                <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur
                    elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo
                    dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo
                    et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit
                    invidunt, sed duo dolor et amet no et. Ut takimata tempor kasd amet kasd ut. No et ipsum amet tempor et.
                    Sed nonumy sed vero ut, sed aliquyam accusam clita dolores tempor est. Ea et takimata consetetur et amet
                    sanctus. Duo no diam ipsum diam dolores, eirmod diam dolores clita sed erat magna. Dolore ut amet ea
                    magna. Sea et dolore sit labore at amet eos. Dolor voluptua sit rebum sit ut nonumy. Dolor amet amet sit
                    sadipscing, lorem.</p>
                <h2 class="mb-4 font-weight-bold">Est dolor lorem et ea</h2>
                <img class="w-50 float-left mr-4 mb-3" src="{{ asset('users/img/carousel-2.jpg') }}" alt="Image">
                <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus
                    sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no
                    magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No
                    at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt
                    sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum
                    vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem
                    et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea
                    kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et
                    eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam,
                    amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna
                    eos magna, justo gubergren labore sit voluptua eos. Dolores et no stet magna et gubergren amet dolor
                    sit, lorem dolore est vero et. Justo erat magna ipsum magna sea. Magna amet est sit sed sadipscing. At
                    takimata dolores ut dolore takimata stet nonumy ipsum, gubergren vero ea consetetur aliquyam kasd est
                    magna justo, dolore justo at dolore et aliquyam nonumy lorem gubergren. Amet duo invidunt kasd labore
                    aliquyam. Vero dolores lorem elitr justo ut, accusam erat sed dolor at accusam takimata ipsum sea diam.
                    Ipsum voluptua lorem sed amet, amet sea sit et at nonumy labore takimata, justo ipsum voluptua stet
                    takimata. Ea lorem elitr aliquyam gubergren sit magna sanctus, sed sed dolore ipsum justo dolor et amet
                    invidunt erat. Sadipscing sanctus stet. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis
                    aliquam, cupiditate doloribus libero aut voluptate quos animi mollitia maiores, recusandae dignissimos
                    architecto rerum repellendus itaque consectetur quia, sunt dolores. Numquam ab labore accusamus nihil
                    harum possimus eos alias explicabo dolore, distinctio cum accusantium! Officiis quis accusantium amet
                    reprehenderit ducimus totam a repellendus libero nesciunt similique ad, quod odio. Harum, nesciunt
                    laborum error minus quos cum neque officia inventore enim voluptate ad amet eius hic perspiciatis
                    repellat porro veniam quae? Tempore eum accusamus sit perferendis velit obcaecati odio qui. Distinctio
                    magni repellat voluptatum voluptatem nam illum maxime tenetur est magnam veritatis?</p>
                <h3 class="mb-4 font-weight-bold">Est dolor lorem et ea</h3>
                <img class="w-50 float-right ml-4 mb-3" src="{{ asset('users/img/carousel-3.jpg') }}" alt="Image">
                <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus
                    sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no
                    magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No
                    at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt
                    sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum
                    vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem
                    et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea
                    kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et
                    eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam,
                    amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna
                    eos magna, justo gubergren labore sit voluptua eos. Dolores et no stet magna et gubergren amet dolor
                    sit, lorem dolore est vero et. Justo erat magna ipsum magna sea. Magna amet est sit sed sadipscing. At
                    takimata dolores ut dolore takimata stet nonumy ipsum, gubergren vero ea consetetur aliquyam kasd est
                    magna justo, dolore justo at dolore et aliquyam nonumy lorem gubergren. Amet duo invidunt kasd labore
                    aliquyam. Vero dolores lorem elitr justo ut, accusam erat sed dolor at accusam takimata ipsum sea diam.
                    Ipsum voluptua lorem sed amet, amet sea sit et at nonumy labore takimata, justo ipsum voluptua stet
                    takimata. Ea lorem elitr aliquyam gubergren sit magna sanctus, sed sed dolore ipsum justo dolor et amet
                    invidunt erat. Sadipscing sanctus stet.</p>
            </div>
            <div class="col-12 pt-4">
                <div class="media bg-secondary text-white mb-4 p-5">
                    <img src="{{ asset('users/image-blog/user.jpg') }}" alt="Image"
                        class="mr-3 img-avatar mt-1 rounded-circle p-3 bg-dark" style="width:150px;">
                    <div class="media-body">
                        <h4 class="text-primary mb-3">John Doe</h4>
                        <p class="m-0">Consetetur elitr erat vero sanctus labore dolor ipsum et diam, tempor dolores eos
                            dolor consetetur lorem ipsum, ipsum accusam ipsum sit no ut est. Gubergren ea ipsum erat
                            consetetur magna kasd amet est, voluptua magna elitr ea sit justo sed sanctus. Accusam duo duo
                            sit sit. Ut eos ipsum sed takimata sed dolor justo, elitr no labore amet et et sanctus. Duo
                            invidunt magna diam no clita, ea eos vero sanctus est aliquyam et, dolores gubergren eirmod sea
                            invidunt no kasd. Amet ut sadipscing eirmod et dolore. Sed lorem stet aliquyam ipsum eos.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 py-4 ">
                <h3 class="mb-4 font-weight-bold">4 Comments</h3>
                <div class="comment">
                    <div class="comment-compo">
                        <template class="reply-input-template">
                            <div class="reply-input container">
                                <img src="{{ asset('users/comment/images/avatars/image-juliusomo.webp') }}" alt=""
                                    class="usr-img">
                                <textarea class="cmnt-input" placeholder="Add a comment..."></textarea>
                                <button class="bu-primary">SEND</button>
                            </div>
                        </template>

                        <template class="comment-template">
                            <div class="comment-wrp">
                                <div class="comment container">
                                    <div class="c-score">
                                        <img src="{{ asset('users/comment/images/icon-plus.svg') }}" alt="plus"
                                            class="score-control score-plus">
                                        <p class="score-number">5</p>
                                        <img src="{{ asset('users/comment/images/icon-minus.svg') }}" alt="minus"
                                            class="score-control score-minus">
                                    </div>
                                    <div class="c-controls">
                                        <a class="delete"><img src="{{ asset('users/comment/images/icon-delete.svg') }}"
                                                alt="" class="control-icon">Delete</a>
                                        <a class="edit"><img src="{{ asset('users/comment/images/icon-edit.svg') }}"
                                                alt="" class="control-icon">Edit</a>
                                        <a class="reply"><img src="{{ asset('users/comment/images/icon-reply.svg') }}"
                                                alt="" class="control-icon">Reply</a>
                                    </div>
                                    <div class="c-user">
                                        <img src="{{ asset('users/comment/images/avatars/image-maxblagun.webp') }}"
                                            alt="" class="usr-img">
                                        <p class="usr-name">maxblagun</p>
                                        <p class="cmnt-at">2 weeks ago</p>
                                    </div>
                                    <p class="c-text">
                                        <span class="reply-to"></span>
                                        <span class="c-body"></span>
                                    </p>
                                </div><!--comment-->
                                <div class="replies comments-wrp">
                                </div><!--replies-->
                            </div>
                        </template>
                        <main>
                            <div class="comment-section">

                                <div class="comments-wrp">

                                </div> <!--commentS wrapper-->
                                <div class="reply-input container">
                                    <img src="{{ asset('users/comment/images/avatars/image-juliusomo.webp') }}"
                                        alt="" class="usr-img">
                                    <textarea class="cmnt-input" placeholder="Add a comment..."></textarea>
                                    <button class="bu-primary">SEND</button>
                                </div> <!--reply input-->
                            </div> <!--comment sectio-->

                            <div class="modal-wrp invisible">
                                <div class="modal container">
                                    <h3>Delete comment</h3>
                                    <p>Are you sure you want to delete this comment? This will remove the comment and cant
                                        be
                                        undone
                                    </p>
                                    <button class="yes">YES,DELETE</button>
                                    <button class="no">NO,CANCEL</button>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog Detail End -->
    <script src="{{ asset('users/comment/app.js') }}"></script>
@endsection
