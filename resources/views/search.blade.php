@extends('layouts.app')
@section('content')
    <div class="page-title search-title">
        <div class="container">
            <h2><span>Search results for:</span></h2>
        </div>
    </div>


    <div class="container pt-120 pb-90">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-sm-6">
                <!-- Post -->
                <div class="post-default">
                    <div class="post-thumb">
                        <a href="/blog/{{$blog->slug}}">
                            <img src="{{$blog->thumb}}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="post-data">
                        <!-- Category -->
                        <div class="cats"><a href="/category/{{$blog->category->id}}">{{$blog->category->title}}</a></div>
                        <!-- Title -->
                        <div class="title">
                            <h2><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h2>
                        </div>
                        <!-- Post Desc -->
                        <div class="desc">
                            <p>
                                {{substr($blog->detail,0,100)}}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End of Post -->
            </div>
            @endforeach

                @if(count($blogs)==0)
                    <div class="span card-body shadow-lg bg-warning"> No Result Found by this keyword <br>      <a href="/"> Goto Home </a> | or Search different keyword on the top navigation. </div>

                @endif



        </div>

        <!-- Post Pagination -->
        <div class="post-pagination d-flex justify-content-center">
            <span class="current">1</span>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#"><i class="fa fa-angle-right"></i></a>
        </div>
        <!-- End of Post Pagination -->
    </div>



@endsection
