@extends('layouts.app')

@section('title','List Blog in ' )
@section('content')

    <section class="fw-main-row pt40">
        <div class="fw-container">
            <h2 class="heading-decor pb20">{{__('Videos')}}</h2>
            <div class="fw-row">

                @foreach($videos->chunk(3) as $chunk)

                    <div class="fw-row">
                        @foreach($chunk as $video)
                            <div class="blog-item fw-col-md-4">
                                <div class="fw-row">
                                    <div class="image fw-col-sm-5 fw-col-md-12">
                                        <a href="/blog/{{$video->slug}}">
                                            <img src="{{$video->thumb}}" alt="{{$video->title}}">
                                        </a></div> <div class="fw-col-sm-7 fw-col-md-12"><h4>
                                            <a href="/blog/{{$video->slug}}">{{$video->title}}</a></h4>
                                        <div class="post-date">{{$video->created_at->diffForHumans()}}</div>
                                        <p> {{substr(strip_tags($video->detail),0,100)}}...</p>
                                        <a href="/blog/{{$video->slug}}" class="button-style2 gray min">{{__('Watch')}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            @endforeach



            <!-- Post Pagination -->
                <div class="post-pagination d-flex justify-content-center">

                    {{ $videos->links('vendor.pagination.bootstrap-4') }}

                </div>
                <!-- End of Post Pagination -->
            </div>

        </div>
    </section>


@endsection
