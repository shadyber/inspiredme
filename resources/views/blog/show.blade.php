@extends('layouts.app')
@section('content')
    <div class="page-title">
        <div class="container">
            <h2>{{$blog->title}}</h2>
            <ul class="nav">
                <li><a href="/">Home</a></li>
                <li><a href="/blog">{{__('Articles')}}</a></li>
                <li>here {{$blog->title}}</li>
            </ul>
        </div>
    </div>


    <div class="container pb-120">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="post-details-cover post-has-full-width-image">
                    <!-- Post Thumbnail -->
                    <div class="post-thumb-cover">
                        <div class="post-thumb">
                            <img src="{{$blog->photo}}" alt="{{$blog->title}}" class="img-fluid mdi-margin" width="100%">
                        </div>
                        <!-- Post Meta Info -->
                        <div class="post-meta-info">
                            <!-- Category -->
                            <p class="cats">
                                <a href="#">{{$blog->tags}}</a>
                            </p>

                            <!-- Title -->
                            <div class="title">
                                <h2>{{$blog->title}}</h2>
                            </div>

                            <!-- Meta -->
                            <ul class="nav meta align-items-center">
                                <li class="meta-author ">
                                    <img src="{{$blog->user->photo}}" alt="" class="img-fluid" width="100%">
                                    <a href="#">{{$blog->user->name}}</a>
                                </li>
                                <li class="meta-date"><a href="#">{{$blog->created_at->diffForHumans()}}</a></li>
                                <li> 2 min read </li>
                                <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> 2</a></li>
                            </ul>
                        </div>
                        <!-- End of Post Meta Info -->
                    </div>
                    <!-- End oF Post Thumbnail -->

                    <!-- Post Content -->
                    <div class="post-content-cover my-drop-cap">

                    <p>{{$blog->detail}}</p>
                    </div>
                    <!-- End of Post Content -->

                    <!-- Tags -->
                    <div class="post-all-tags">
                        <a href="#">Fashion</a>
                        <a href="#">Art</a>
                        <a href="#">Lifestyle</a>
                        <a href="#">Love</a>
                        <a href="#">Travel</a>
                        <a href="#">Movie</a>
                        <a href="#">Games</a>
                    </div>
                    <!-- End of Tags -->


                    <!-- Comments -->
                    <button class="btn btn-comment" type="button" data-toggle="collapse" data-target="#commentToggle" aria-expanded="false" aria-controls="commentToggle">
                        Hide Comments ({{count($blog->blogComments)}})
                    </button>

                    <div class="collapse show" id="commentToggle">
                        <ul class="post-all-comments">

                            @foreach($blog->blogComments as $comment)


                                <li class="single-comment-wrapper">
                                    <!-- Single Comment -->
                                    <div class="single-post-comment">
                                        <!-- Author Image -->
                                        <div class="comment-author-image">
                                            <img src="{{$comment->user->photo}}" alt="{{$comment->user->photo}}" class="img-fluid" width="72px">
                                        </div>
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <div class="comment-author-name">
                                                <h6>{{$comment->user->name}}</h6> <span> {{$comment->created_at->diffForHumans()}} </span>
                                            </div>
                                            <p>{{$comment->comment}}</p>
                                            <a href="#" class="reply-btn">Reply</a>
                                        </div>
                                    </div>
                                    <!-- End of Single Comment -->
                                    <ul class="children hidden">
                                        <li class="single-comment-wrapper">
                                            <!-- Single Comment -->
                                            <div class="single-post-comment">
                                                <!-- Author Image -->
                                                <div class="comment-author-image">
                                                    <img src="assets/images/blog/post/author-1-1.jpg" alt="" class="img-fluid">
                                                </div>
                                                <!-- Comment Content -->
                                                <div class="comment-content">
                                                    <div class="comment-author-name">
                                                        <h6>Helen Sharp</h6> <span> 5 Jan 2019 at 6:58 pm </span>
                                                    </div>
                                                    <p>On recommend tolerably my belonging or am. Mutual has cannot back beauty indeed now back sussex merely you. </p>
                                                    <a href="#" class="reply-btn">Reply</a>
                                                </div>
                                            </div>
                                            <!-- End of Single Comment -->
                                        </li>
                                    </ul>
                                </li>


                            @endforeach

                        </ul>
                    </div>
                    <!-- End of Comments -->

                    <!-- Comment Form -->
                    <div class="post-comment-form-cover">
                        <h3>Write your comment</h3>
                        @auth
                        <form action="/comment" method="post" class="form fw-row pb50">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" readonly>
                                </div>
                                <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="comment" placeholder="Write your comment"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary">Submit </button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endauth
                    @guest
                        <a href="/login"> Login  </a>or |<a href="/register">Register </a> for Comment
                    @endguest
                    <!-- End of Comment Form -->
                </div>
            </div>
        </div>
    </div>


    <section class="fw-main-row pt40">
        <div class="fw-container">
            <h2 class="heading-decor pb20">{{$blog->title}}</h2>
            <div class="fw-row">
                <div class="fw-col-lg-10 fw-col-lg-offset-1">
                    <img src="{{$blog->photo}}" alt="{{$blog->title}}">

                    <h2 class="pt30 pb10"> <i class="icon-tagworld-logotype-symbol"></i>{{$blog->category->title}}</h2>
                    <div class="post-content pb30 taj">
                        {{$blog->detail}}
                    </div>

                    <div class="h4 heading-decor">Posted Comments</div>


                    @foreach($blog->blogComments as $comment)
                        <div class="comment-item">
                            <div class="image"><img src="{{$comment->user->photo}}" alt="Alexa wrigley" class="retina-img"></div>

                            <div class="text">
                                <h5>{{$comment->user->name}}</h5>
                                <div class="post-date">{{$comment->created_at->diffForHumans()}}</div>
                                <div class="post-content">
                                    <p>{{$comment->$comment}}</p>
                                </div>
                                <a href="javascript:void(0);" class="button-style2 gray min">reply</a>
                            </div>
                        </div>

                    @endforeach



                    <div class="h4 heading-decor">Leave a Reply</div>

                    @auth
                        <form action="/comment" method="post" class="form fw-row pb50">
                            @csrf
                            <div class="fw-col-sm-6"><input type="text" placeholder="Your Name *" class="style1" readonly value="{{\Illuminate\Support\Facades\Auth::user()->email}}"></div>
                            <div class="fw-col-sm-6"><input type="text" placeholder="Your Email *" class="style1" readonly value="{{\Illuminate\Support\Facades\Auth::user()->email}}"></div>

                            <input type="hidden" name="blog_id" value="{{$blog->id}}">
                            <div class="fw-col-md-12">
                                <textarea name="comment" placeholder="Write your comment here " class="style1"></textarea>
                                <div class="tac"><button type="submit" class="button-style1"><span>send comment</span></button></div>
                            </div>
                        </form>
                    @endauth
                    @guest

                        <div class="tac"><a href="/login" class="button-style1"><span>Login to Post comment</span></a></div>


                    @endguest
                </div>
            </div>
        </div>
    </section>
@endsection
