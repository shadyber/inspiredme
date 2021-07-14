<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MedInfo') }}</title>


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

    <div id="app">
        <!-- Preloader -->
        <div id="page-preloader">
           <div class="spinner centered-container"></div>
        </div>
        <!-- END Preloader -->

      @include('components.header')


        @yield('content')

     @include('components.footer')

    </div>
    <script type="text/javascript" src="/js/jquery-2.1.3.min.js"></script>
    <script src="/js/owl.carousel/owl.carousel.min.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
@yield('css')

</body>
</html>
