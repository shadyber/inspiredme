<!-- Header -->
<header class="header">
    <div class="header-fixed">
        <div class="container-fluid pl-120 pr-120 position-relative">
            <div class="row d-flex align-items-center">

                <div class="col-lg-3 col-md-4 col-6">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="/"><img src="/assets/images/logo.png" alt="" class="img-fluid"></a>
                    </div>
                    <!-- End of Logo -->
                </div>

                <div class="col-lg-9 col-md-8 col-6 d-flex justify-content-end position-static">
                    <!-- Nav Menu -->
                    <div class="nav-menu-cover">
                        <ul class="nav nav-menu">
                            <li><a href="/">{{__('Home')}}</a></li>


                            <li><a href="/about">{{__('About')}}</a></li>

                            <li class="menu-item-has-children"><a href="/blog">{{__('Articles')}}</a>
                                <ul class="sub-menu">
                                    <li><a href="/blog">{{__('All')}} {{__('Articles')}}</a></li>
                                    @foreach(\App\Models\BlogCategory::allCategories() as $category)

                                        <li><a href="/category/{{$category->slug}}">{{$category->title}}</a></li>
                                    @endforeach


                                </ul>
                            </li>

                            <li><a href="/contact">{{__('Contact')}}</a></li>



                            @if (Route::has('login'))

                                @auth
                                    <li class="menu-item-has-children">

                                        <a href="#" >
                                            <img src="{{\Illuminate\Support\Facades\Auth::user()->photo}}"   alt="{{\Illuminate\Support\Facades\Auth::user()->name}}" width="32px" >
                                       <span class="badge badge-info">0</span>
                                        <ul class="sub-menu">
                                          <li>

                                              <a class="dropdown-item" href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                  {{ __('Logout') }}
                                              </a>

                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  @csrf
                                              </form>

                                          </li>
                                          <li> <a href="{{ url('/home') }}"  > <i class="mdi-logout-variant"></i> {{__('Profile') }}</a> </li>
                                        </ul>


                                @else
                                    <li>  <a href="{{ route('login') }}">{{__('Login')}}</a></li>

                                    @if (Route::has('register'))
                                        <li>    <a href="{{ route('register') }}" >{{__('Register')}}</a></li>
                        @endif
                        @endauth
                    </div>
                    @endif

                    </ul>
                    <!-- Mobile Menu -->
                    <div class="mobile-menu-cover">
                        <ul class="nav mobile-nav-menu">
                            <li class="search-toggle-open">
                                <img src="/assets/images/search-icon.svg" alt="" class="img-fluid svg">
                            </li>
                            <li class="search-toggle-close hide">
                                <img src="/assets/images/close.svg" alt="" class="img-fluid">
                            </li>
                            <li class="nav-menu-toggle">
                                <img src="/assets/images/menu-toggler.svg" alt="" class="img-fluid svg">
                            </li>
                        </ul>
                    </div>
                    <!-- End of Mobile Menu -->
                </div>
                <!-- End of Nav Menu -->

            </div>
        </div>
    </div>

</header>
<!-- End of Header -->
