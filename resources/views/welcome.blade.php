<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon144.png">
      <link rel="apple-touch-icon" sizes="114x114" href="images/favicon114.png">
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
      <link rel="stylesheet" href="/css/medical-icons.css">
      <link rel="stylesheet" href="/css/social-icons.css">
      <link rel="stylesheet" href="/css/icon-font.css">
      <link rel="stylesheet" href="/js/owl.carousel/owl.carousel.css">
      <link rel="stylesheet" href="/css/frontend-grid.css">
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="/css/mobile.css">
      <!--[if IE]>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.0/mootools-yui-compressed.js"></script>
      <script type="text/javascript" src="js/selectivizr-min.js"></script>
      <script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>

    <div id="page">
        <!-- Preloader -->
        <div id="page-preloader">
           <div class="spinner centered-container"></div>
        </div>
        <!-- END Preloader -->

        @include('components.header')

  <!-- Full screen section -->
  <section class="full-screen fw-main-row" style="background-image: url(/images/3.jpg);">
    <div class="fw-container centered-container tar">
       <div class="container tar fw-col-xs-12 fw-col-sm-6 fw-col-md-5">
          <h2 class="h1"><span class="blue-color">Helping You</span><br>Stay Happy One</h2>
          <p>Check Out Our Services!</p>
          <a href="sms://8888?body=ok" class="button-style1"><span>Subscribe</span></a><a href="sms://8888?body=ok" class="button-style1 dark"><span>more info</span></a>
       </div>
    </div>
 </section>

<section class="fw-main-row pt40 pb40">
            <div class="fw-container">
               <h2 class="heading-decor pb35">{{__('Popular')}} {{__('Categories')}}</h2>

               <div class="icon-box-area fw-row">

                @foreach(\App\Models\BlogCategory::allCategories() as $category)
                  <!-- Icon box item -->
                  <div class="icon-box-col fw-col-xs-12 fw-col-sm-4 fw-col-md-3" style="height: 255px;">
                     <div class="{{$category->icon}}"></div>
                     <div class="h4">{{$category->title}}</div>
                     <p>{{substr($category->description,0,100)}}</p>
                     <a href="/category/{{$category->id}}" class="button-style2 gray min"><span>{{__('read more')}}</span></a>
                  </div>
                  <!-- END Icon box item -->
                @endforeach

               </div>
               <!-- END Icon box  style 3 -->
            </div>
         </section>

        <section class="fw-main-row pt40">
            <div class="fw-container">
               <h2 class="heading-decor pb20">{{ __('Latest') }} {{__( 'From MedInfo')}}</h2>
               <div class="fw-row">

                   @foreach(\App\Models\Blog::lastN(3) as $blog)
                <!-- Blog item -->
                  <div class="blog-item fw-col-md-4">
                     <div class="fw-row">
                        <div class="image fw-col-sm-5 fw-col-md-12"><a href="/blog/{{$blog->slug}}"><img src="{{$blog->thumb}}" alt="{{$blog->title}}"></a></div>
                        <div class="fw-col-sm-7 fw-col-md-12">
                           <h4><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h4>
                           <div class="post-date">{{$blog->created_at->diffForHumans()}}</div>
                           <p>{{substr($blog->detail,0,150)}}...</p>
                           <a href="/blog/{{$blog->slug}}" class="button-style2 gray min">{{__('read more')}}</a>
                        </div>
                     </div>
                  </div>
                  <!-- END Blog item -->
                   @endforeach


               </div>
            </div>
         </section>

        @include('components.footer')
    </div>
    <script type="text/javascript" src="/js/jquery-2.1.3.min.js"></script>
    <script src="/js/owl.carousel/owl.carousel.min.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>

</body>
</html>
