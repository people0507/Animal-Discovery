@extends('user.main')
@section('title', 'Categories Animal')
@section('content_user')
    <link rel="stylesheet" href="{{ asset('users/comment/style.css') }}">
    <!-- Blog Detail Start -->
    <div class="container py-5">
        <div class="s-char-block">
            <h1 class="article-header">
                The Great Meadow Rebirth
            </h1>
            <div class="article-container">
                <p dir="ltr">In one of <a
                        href="../../../how-natural-and-humanmade-disasters-can-impact-habitats-and-populations">my previous
                        posts</a>, I wrote about the human tragedy and environmental damage caused by the destruction of the
                    Kakhovka Hydroelectric Power Station dam by Russian occupiers.</p>
                <p><strong>&nbsp;</strong></p>
                <p dir="ltr">An interesting aspect of this story is that it contains a double crime against Ukraine and
                    its people. The first crime was the construction of this dam, which flooded a vast area of ​​the Dnipro
                    River floodplains, historically known as the Great Meadow.</p>
                <p><strong>&nbsp;</strong></p>
                <p dir="ltr">Ukrainian Cossacks called the Great Meadow their father, for the shelter and security it
                    provided. The Great Meadow is not only an important part of national identity, which the empire always
                    tried to overcome but also a unique ecosystem of river floodplains in Europe in terms of size.</p>
                <p><strong>&nbsp;<img
                            src="https://s3.animalia.bio/blog/original/XLgtJu4aCxtlnqFSPUBk4dv49VNjpL0fIhLLVc8W.webp"
                            alt="" width="100%"></strong></p>
            </div>
            <div class="col-12 py-4 ">
                <h3 class="mb-4 font-weight-bold">4 Comments</h3>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="comment">
                        <div class="comment-compo">
                            <template class="reply-input-template">
                                <div class="reply-input container-comment">
                                    <img src="{{ asset('users/comment/images/avatars/image-juliusomo.webp') }}"
                                        alt="" class="usr-img">
                                    <textarea class="cmnt-input" placeholder="Add a comment..."></textarea>
                                    <button class="bu-primary">SEND</button>
                                </div>
                            </template>

                            <template class="comment-template">
                                <div class="comment-wrp">
                                    <div class="comment container-comment">
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
                                    <div class="reply-input container-comment">
                                        <img src="{{ asset('users/comment/images/avatars/image-juliusomo.webp') }}"
                                            alt="" class="usr-img">
                                        <textarea class="cmnt-input" placeholder="Add a comment..."></textarea>
                                        <button class="bu-primary">SEND</button>
                                    </div> <!--reply input-->
                                </div> <!--comment sectio-->

                                <div class="modal-wrp invisible">
                                    <div class="modal container-comment">
                                        <h3>Delete comment</h3>
                                        <p>Are you sure you want to delete this comment? This will remove the comment
                                            and
                                            cant
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
    </div>
    <!-- Blog Detail End -->

    <script src="{{ asset('users/comment/app.js') }}"></script>
@endsection
