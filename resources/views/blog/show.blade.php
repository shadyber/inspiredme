@extends('layouts.app')

@section('title',$blog->title)
@section('image','https://info251.com/'.$blog->photo)
@section('detail',$blog->detail)

@section('content')

    <div class="page-title">
        <div class="container">
            <h2>{{$blog->title}}</h2>
            <ul class="nav">
                <li><a href="/">Home</a></li>
                <li><a href="/blog">{{__('Articles')}}</a></li>
                <li><a href="{{$blog->category->getlink()}}">{{$blog->category->title}}</a></li>
                <li>here <a href="{{$blog->getlink()}}">{{$blog->title}}</a> </li>
            </ul>
        </div>
    </div>


    <div class="container pt-120 pb-90">


        <div class="row">


            <div class="col-md-10 offset-md-2">
                <div class="post-details-cover post-has-full-width-image">

                    <!-- Post Thumbnail -->
                    <div class="post-thumb-cover">
                        <div class="post-thumb item-center">
                            <img src="{{$blog->photo}}" alt="{{$blog->title}}" class="img-fluid mdi-margin" width="90%">
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


                        <div>
                            {!!html_entity_decode($blog->detail)!!}
                        </div>

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

                        @endauth

                        @guest
                            <a href="/login"> Login  </a>or |<a href="/register">Register </a> for Comment
                        @endguest
                    <!-- End of Comment Form -->
                </div>

                    <hr>


             </div>

        </div>


        </div>


    </div>
@endsection
