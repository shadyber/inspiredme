@extends('layouts.app')
@section('content')
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
