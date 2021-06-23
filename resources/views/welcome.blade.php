<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">


        <title>Welcome {{ config('app.name', 'Info251') }}</title>

        <meta property="og:url"           content="{{url()->full()}}" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Welcome to  Info251" />
        <meta property="og:description"   content="sms ok on 6475 to suscribe and get inspired every day." />
        <meta property="og:image"         content="https://info251.com/assets/images/banner/4.jpg')" />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}

            .centerscreen{
                width: 300px;
                height: 300px;
                position: absolute;
                left: 50%;
                top: 50%;
                margin-left: -150px;
                margin-top: -150px;
            }
        </style>

         <!-- Favicon -->
    <link rel="shortcut icon" type="/image/png" href="assets/images/favicon.png">

    <!--==== Google Fonts ====-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500%7CSpectral:400,400i,500,600,700" rel="stylesheet">

    <!-- CSS Files -->

    <!--==== Bootstrap css file ====-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!--==== Font-Awesome css file ====-->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <!--==== Animate CSS ====-->
    <link rel="stylesheet" href="/assets/plugins/animate/animate.min.css">

    <!--==== Owl Carousel ====-->
    <link rel="stylesheet" href="/assets/plugins/owl-carousel/owl.carousel.min.css">

    <!--==== Magnific Popup ====-->
    <link rel="stylesheet" href="/assets/plugins/magnific-popup/magnific-popup.css">

    <!--==== Style css file ====-->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!--==== Custom css file ====-->
    <link rel="stylesheet" href="/assets/css/custom.css">


    </head>

    <body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preload-img">
            <div class="spinnerBounce">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- End of Preloader -->


@include('components.search')

@include('components.header')

@include('components.banner')
<main id="app">
@include('layouts.flash_message')

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">6475 Ok</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="newsletter">
                        <div class="section-title text-center">

                        </div>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <form action="#" method="post" novalidate="novalidate">
                                    <div class="input-group">

                                        <div class="input-group-append">
                                            <a href="sms://6475?body=ok" class="btn btn-default btn-block">{{__('Join Us Now')}}</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer input-group-append">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Later')}}</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Trending  Article-->
    <section class="pt-120 pb-10">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title text-center">
                <h2>{{__('Trending Post')}}</h2>
            </div>
            <!-- Section Title -->

            <div class="row">
                <div class="col-lg-6 order-lg-2">

                    @foreach(\App\Models\Blog::trandinN(1) as $blog)
                    <!-- Post -->
                    <div class="post-default post-has-bg-img">
                        <div class="post-thumb">
                            <a href="/blog/{{$blog->slug}}">
                                <div data-bg-img="{{$blog->photo}}"></div>
                            </a>
                        </div>
                        <div class="post-data">
                            <!-- Category -->
                            <div class="cats"><a href="/category/{{$blog->category->slug}}">{{$blog->category->title}}</a></div>
                            <!-- Title -->
                            <div class="title">
                                <h2><a href="/blog/{{$blog->slug}}"> {{$blog->title}}</a></h2>
                            </div>
                            <!-- Post Meta -->
                            <ul class="nav meta align-items-center">
                                <li class="meta-author">
                                    <img src="{{$blog->user->photo}}" alt="{{$blog->user->name}}" class="img-fluid">
                                    <a href="#">{{$blog->user->name}}</a>
                                </li>
                                <li class="meta-date"><a href="#">{{$blog->created_at->diffForHumans()}}</a></li>
                                <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> {{count($blog->blogcomments)}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Post -->
                        @endforeach

                </div>

                <div class="col-lg-6 order-lg-1">

                    @foreach(\App\Models\Blog::trandinN(2) as $blog)
                    <!-- Post -->
                    <div class="post-default post-has-no-thumb">
                        <div class="post-data">
                            <!-- Category -->
                            <div class="cats"><a href="/category/{{$blog->category->slug}}">{{$blog->category->title}}</a></div>
                            <!-- Title -->
                            <div class="title">
                                <h2><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h2>
                            </div>
                            <!-- Post Meta -->
                            <ul class="nav meta align-items-center">
                                <li class="meta-author">
                                    <img src="{{$blog->user->photo}}" alt="{{$blog->user->name}}" class="img-fluid">
                                    <a href="#">{{$blog->user->name}}</a>
                                </li>
                                <li class="meta-date"><a href="#">{{$blog->created_at->diffForHumans()}}</a></li>
                                <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> {{count($blog->blogcomments)}}</a></li>
                            </ul>
                            <!-- Post Desc -->
                            <div class="desc">
                                <p>
                                    {{substr(strip_tags($blog->detail),0,100)}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End of Post -->
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!-- End of Trending  Article-->

    <!-- post with sidebar -->
    <div class="container pt-40 pb-90">
        <div class="row">
            <div class="col-lg-8">
                <!-- Popular Post -->
                <section class="popular-post pb-10">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>{{__('Popular')}} {{__ ('Articles')}}</h2>
                    </div>
                    <!-- End of Section title -->

                    <div class="post-blog-list">

                        @foreach(\App\Models\Blog::popularN(3) as $blog)
                        <!-- Post -->
                        <div class="post-default post-has-right-thumb">
                            <div class="d-flex flex-wrap">
                                <div class="post-thumb align-self-stretch order-md-2">
                                    <a href="/blog/{{$blog->slug}}">
                                        <div data-bg-img="{{$blog->thumb}}"></div>
                                    </a>
                                </div>
                                <div class="post-data order-md-1">
                                    <!-- Category -->
                                    <div class="cats"><a href="/category/{{$blog->category->slug}}">{{$blog->category->title}}</a></div>
                                    <!-- Title -->
                                    <div class="title">
                                        <h2><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h2>
                                    </div>
                                    <!-- Post Meta -->
                                    <ul class="nav meta align-items-center">
                                        <li class="meta-author">
                                            <img src="{{$blog->user->photo}}" alt="{{$blog->user->name}}" class="img-fluid">
                                            <a href="#">{{$blog->user->name}}</a>
                                        </li>
                                        <li class="meta-date"><a href="#">{{$blog->created_at->diffForHumans()}}</a></li>
                                        <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> {{count($blog->blogcomments)}}</a></li>
                                    </ul>
                                    <!-- Post Desc -->
                                    <div class="desc">
                                        <p>{{substr(strip_tags($blog->detail),0,100)}}
                                        </p>
                                    </div>
                                    <!-- Read More Button -->
                                    <a href="/blog/{{$blog->slug}}" class="btn btn-primary">{{__('read more')}}</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Post -->
                        @endforeach

                    </div>
                </section>
                <!-- End of Popular Post  -->

                <!-- Most Viewed Post -->
                <section class="pt-40 pb-10 most-viewed">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>{{__('Recent')}} {{__ ('Articles')}}</h2>
                    </div>
                    <!-- End of Section title -->
                    <div class="post-blog-list">
                        <div class="row">
                            <div class="col-sm-12">
                                @foreach(\App\Models\Blog::lastN(1) as $blog)
                                <!-- Post -->
                                <div class="post-default post-has-front-title">
                                    <div class="post-thumb">
                                        <a href="/blog/{{$blog->slug}}"> <img src="{{$blog->thumb}}" alt="{{$blog->title}}" class="img-fluid"> </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="/category/{{$blog->category->slug}}">{{$blog->category->title}}</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                                    @endforeach
                            </div>

                            @foreach(\App\Models\Blog::lastN(4) as $blog)
                            <div class="col-sm-6">
                                <!-- Post -->
                                <div class="post-default">
                                    <div class="post-thumb">
                                        <a href="/blog/{{$blog->slug}}"> <img src="{{$blog->thumb}}" alt="{{$blog->title}}" class="img-fluid"> </a>
                                    </div>
                                    <div class="post-data">
                                        <!-- Category -->
                                        <div class="cats"><a href="/category/{{$blog->category->slug}}">{{$blog->category->title}}</a></div>
                                        <!-- Title -->
                                        <div class="title">
                                            <h2><a href="/blog/{{$blog->slug}}">{{$blog->title}} </a></h2>
                                        </div>
                                        <!-- Post Desc -->
                                        <div class="desc">
                                            <p>
                                                {{substr(strip_tags($blog->detail),0,100)}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Post -->
                            </div>
                            @endforeach

                        </div>
                    </div>
                </section>
                <!-- End of Most Viewed Post -->

                <!-- 728 ad -->
                <div class="pt-40 pb-40 biz-ad">
                    <a href="#"><img src="/assets/images/ad-728.png" alt="" class="img-fluid"></a>
                </div>
                <!-- End of 728 ad -->

            </div>
            <div class="col-lg-4">
                <div class="pt-88">
                    <div class="my-sidebar">

                        <!-- Featured  Article -->
                        <div class="widget widget-featured-post">
                            <!-- Widget Title -->
                            <h4 class="widget-title">
                               {{__(' Featured Post')}}
                            </h4>
                            <!-- End of Widget Title -->

                            <!-- Widget Content -->
                            <div class="widget-content">

                              @foreach(\App\Models\Blog::featuredN(4) as $blog)
                               <!-- Single Post -->
                                <div class="featured-post">
                                    <!-- Post Thumbnail -->
                                    <a href="/blog/{{$blog->slug}}">
                                        <img src="{{$blog->thumb}}" alt="{{$blog->title}}" class="img-fluid">
                                    </a>
                                    <!-- Post Title -->
                                    <div class="featured-post-title">
                                        <h6> <a href="/blog/{{$blog->slug}}">{{$blog->title}}</a> </h6>
                                    </div>
                                </div>
                                <!-- End of Single Post -->
                              @endforeach

                            </div>
                            <!-- End of Widget Content -->
                        </div>
                        <!-- End of Featured  Article -->


                        <!-- Newsletter Widget -->
                        <div class="widget widget-newsletter">
                            <!-- Widget Title -->
                            <h4 class="widget-title">
                                {{__('Newsletter')}}
                            </h4>
                            <!-- End of Widget Title -->

                            <!-- Widget Content -->
                            <div class="widget-content">
                                <!-- Newsletter Text -->
                                <p>Sign up and receive recent Article and stories in your inbox every day.</p>
                                <!-- Newsletter Form -->
                                <div class="newsletter">
                                    <form action="/newsletters" method="post">
                                        @csrf
                                        <input type="email" class="form-control" placeholder="Your Email" required>
                                        <button type="submit" class="btn btn-block btn-default">{{__('Subscribe')}}</button>
                                    </form>
                                </div>
                            </div>
                            <!-- End of Widget Content -->
                        </div>
                        <!-- End of Newsletter Widget -->

                        <!-- Recent Post Widget -->
                        <div class="widget widget-recent-post">
                            <!-- Widget Title -->
                            <h4 class="widget-title">
                               {{__(' Recent')}} {{__('Articles')}}
                            </h4>
                            <!-- End of Widget Title -->

                            <!-- Widget Content -->
                            <div class="widget-content">
                             @foreach(\App\Models\Blog::lastN(5) as $blog)
                               <!-- Single Post -->
                                <div class="wrp-cover">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumb">
                                        <a href="/blog/{{$blog->slug}}">
                                            <img src="{{$blog->thumb}}" alt="{{$blog->title}}" class="img-fluid">
                                        </a>
                                    </div>
                                    <!-- Post Title -->
                                    <div class="post-title">
                                        <a href="/blog/{{$blog->slug}}">{{$blog->title}}</a>
                                    </div>
                                </div>
                                 @endforeach

                            </div>
                            <!-- End of Widget Content -->
                        </div>
                        <!-- End of Recent Post Widget -->


                        <!-- Recent Post Widget -->
                        <div class="widget widget-recent-post">
                            <!-- Widget Title -->
                            <h4 class="widget-title">
                                {{__(' Recent')}} {{__('Videos')}}
                            </h4>
                            <!-- End of Widget Title -->

                            <!-- Widget Content -->
                            <div class="widget-content">
                            @foreach(\App\Models\Videos::lastN(5) as $blog)
                                <!-- Single Post -->
                                    <div class="wrp-cover">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumb">
                                            <a href="/video/{{$blog->slug}}">
                                                <img src="{{$blog->thumb_small}}" alt="{{$blog->title}}" class="img-fluid">
                                            </a>
                                        </div>
                                        <!-- Post Title -->
                                        <div class="post-title">
                                            <a href="/video{{$blog->slug}}">{{$blog->title}}</a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <!-- End of Widget Content -->
                        </div>
                        <!-- End of Recent Post Widget -->

                        <!-- Tags Cloud Widget -->
                        <div class="widget widget-tag-cloud">
                            <!-- Widget Title -->
                            <h4 class="widget-title">
                                {{__('Tags')}}
                            </h4>
                            <!-- End of Widget Title -->

                            <!-- Widget Content -->
                            <div class="widget-content tagcloud">
                                <a href="#">Fashion</a>
                                <a href="#">Art</a>
                                <a href="#">Lifestyle</a>
                                <a href="#">Love</a>
                                <a href="#">Travel</a>
                                <a href="#">Health</a>
                                <a href="#">Education</a>
                                <a href="#">Movie</a>
                                <a href="#">Games</a>
                                <a href="#">Sports</a>
                            </div>
                            <!-- End of Widget Content -->
                        </div>
                        <!-- End of Tags Cloud Widget -->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of post with sidebar -->


    <!-- Newsletter -->
    <section class="newsletter-cover">
        <!-- Overlay -->
        <div class="nl-bg-ol"></div>
        <div class="container">
            <div class="newsletter pt-80 pb-80">
                <!-- Section title -->
                <div class="section-title text-center">
                    <h2>{{__('Subscribe Our Newsletter')}}</h2>
                </div>
                <!-- End of Section title -->
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- Newsletter Form -->
                        <form  action="/newsletters" method="post" >
                            <div class="input-group">
                                @csrf
                                <input type="email" class="form-control" placeholder="Your Email" required>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">{{__('Submit')}}</button>
                                </div>
                            </div>
                            <p class="checkbox-cover d-flex justify-content-center">
                                <label> I've read and accept the <a href="/terms">Terms &amp; Privacy Policy </a>
                                    <input type="checkbox" required>
                                    <span class="checkmark"></span>
                                </label>
                            </p>
                        </form>
                        <!-- End of Newsletter Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Newsletter -->
@include('components.footer')

</main>
    <!-- Back to Top Button -->
    <div class="back-to-top d-flex align-items-center justify-content-center">
        <span><i class="fa fa-long-arrow-up"></i></span>
    </div>
    <!-- End of Back to Top Button -->

    <!-- JS Files -->

    <!-- ==== JQuery 1.12.1 js file ==== -->
    <script src="/assets/js/jquery-1.12.1.min.js"></script>

    <!-- ==== Bootstrap js file ==== -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <!-- ==== Owl Carousel ==== -->
    <script src="/assets/plugins/owl-carousel/owl.carousel.min.js"></script>

    <!-- ==== Magnific Popup ==== -->
    <script src="/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- ==== Script js file ==== -->
    <script src="/assets/js/scripts.js"></script>

    <!-- ==== Custom js file ==== -->
    <script src="/assets/js/custom.js"></script>

    <script>

        $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() == $(document).height()) {
                $("#myModal").modal('show');
            }
        });
    </script>

    </body>
</html>
