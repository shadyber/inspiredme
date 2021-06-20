@extends('layouts.app')
@section('content')
    <div class="page-title">
        <div class="container">
            <h2>{{__('Articles')}}</h2>
            <ul class="nav">
                <li><a href="/">{{__('Home')}}</a></li>
                <li><a href="/blog">{{__('Articles')}}</a></li>
                <li>{{__('All')}} {{__('Articles')}}</li>
            </ul>
        </div>
    </div>

    <div class="container pt-120 pb-90">


        @foreach($blogs->chunk(3) as $chunk)

            <div class="row">
                @foreach($chunk as $blog)
                    <div class="col-md-4 col-sm-6">
                        <!-- Post -->
                        <div class="post-default">
                            <div class="post-thumb">
                                <a href="/blog/{{$blog->slug}}">
                                    <img src="{{$blog->thumb}}" alt="{{$blog->title}}" class="img-fluid">
                                </a>
                            </div>
                            <div class="post-data">
                                <!-- Category -->
                                <div class="cats"><a href="/category/{{$blog->category->slug}}"> {{$blog->category->title}} </a></div>
                                <!-- Title -->
                                <div class="title">
                                    <h2><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h2>
                                </div>
                                <!-- Post Desc -->
                                <div class="desc">
                                    <p>
                                        {{ substr(strip_tags($blog->detail),0,70 ) }}...
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- End of Post -->
                    </div>

                @endforeach
            </div>
        @endforeach



        <!-- Post Pagination -->
        <div class="post-pagination d-flex justify-content-center">

            {{ $blogs->links('vendor.pagination.bootstrap-4') }}

        </div>
        <!-- End of Post Pagination -->
    </div>




@endsection
