@extends('layouts.app')
@section('content')
    <section class="fw-main-row pt40">
        <div class="fw-container">
            <h2 class="heading-decor pb20">MedInfo Articles</h2>

            @foreach($blogs->chunk(3) as $chunk)
                <div class="fw-row">
                @foreach($chunk as $blog)

                    <!-- Blog item -->
                        <div class="blog-item fw-col-md-4">
                            <div class="fw-row">
                                <div class="image fw-col-sm-5 fw-col-md-12"><a href="/blog/{{$blog->slug}}"><img src="{{$blog->thumb}}" alt="{{$blog->title}}"></a></div>
                                <div class="fw-col-sm-7 fw-col-md-12">
                                    <h4><a href="/blog/{{$blog->slug}}">{{substr($blog->title,0,35)}}</a></h4>
                                    <div class="post-date">{{$blog->created_at->diffForHumans()}}</div>
                                    <p>{{substr($blog->detail,0,150)}}...</p>
                                    <a href="/blog/{{$blog->slug}}" class="button-style2 gray min">{{__('read more')}}</a>
                                </div>
                            </div>
                        </div>
                        <!-- END Blog item -->

                    @endforeach
                </div>
        @endforeach



        <!-- Pagination -->
            <div class="pagination">
                <a href="javascript:void(0);" class="active">1</a>
                <a href="javascript:void(0);">2</a>
                <a href="javascript:void(0);">3</a>
                <a href="javascript:void(0);">4</a>
                <a href="javascript:void(0);"><i class="icon-font icon-right-arrow"></i></a>
            </div>
            <!-- END Pagination -->
        </div>
    </section>

@endsection
