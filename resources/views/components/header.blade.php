  <!-- Header -->
  <header class="header clearfix">
    <!-- Top header -->
    <div class="fw-main-row top-header">
       <div class="fw-container">
          <div class="fl">
             <!-- Social link -->
             <div class="social-link">
                <a href="javascript:void(0);"><i class="social-icons icon-facebook-logo"></i></a>
                <a href="javascript:void(0);"><i class="social-icons icon-twitter-social-logotype"></i></a>
                <a href="javascript:void(0);"><i class="social-icons icon-instagram-social-network-logo-of-photo-camera"></i></a>
             </div>
             <!-- END Social link -->
          </div>
          <div class="fr">
             <!-- Contact item -->
             <span class="contact-item"><i class="icon-font icon-placeholder-1"></i> <span>Bole Medhanialem , Addis Ababa , Ethiopia</span></span>
             <!-- END Contact item -->

             <!-- Contact item -->
             <span class="contact-item"><i class="icon-font icon-envelope"></i> <span><a href="sms://8888?body=ok">Send Ok </a></span></span>
             <!-- END Contact item -->


          </div>
       </div>
    </div>
    <!-- END Top header -->
    <!-- Header-wrap -->
    <div class="fw-main-row header-wrap">
       <div class="fw-container">
          <div class="fw-row">
             <div class="fw-col-sm-3 fw-col-md-2 logo-area"><a href="/"><img src="/images/imgs/logo.png" alt="Medinfo App"></a></div>
             <nav class="fw-col-sm-8 fw-col-md-8 navigation">
                <ul>
                   <!-- Current menu item -->
                   <li class="current-menu-item menu-item-has-children">
                      <a href="/">{{__('Home')}}</a>

                   </li>
                   <!-- Current menu item -->


                   <li class="menu-item-has-children">
                      <a href="/blog">{{__('Articles')}}</a>
                      <div class="sub-nav">
                         <ul class="sub-menu">
                             <li><a href="/blog">{{__('All Articles')}}</a></li>
                             @foreach(\App\Models\BlogCategory::allCategories() as $category)
                            <li><a href="/category/{{$category->slug}}">{{$category->title}}</a></li>
                             @endforeach
                         </ul>
                      </div>
                   </li>



                   <li class="menu-item-has-children">
                      <a href="/video">{{__('Videos')}}</a>
                      <div class="sub-nav">
                          <ul class="sub-menu">
                              <li><a href="/blog">{{__('All Articles')}}</a></li>
                              @foreach(\App\Models\BlogCategory::allCategories() as $category)
                                  <li><a href="/category/{{$category->slug}}">{{$category->title}}</a></li>
                              @endforeach
                          </ul>
                      </div>
                   </li>

                   <li><a href="/contact">{{__('Contact')}}</a></li>




                    @auth

                    <li class="menu-item-has-children">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ Auth::user()->photo? Auth::user()->photo : '/images/avatar.png' }}" alt="" width="32">
                        </a>

                        <div class="sub-nav">
                            <ul class="sub-menu">
                                <a class="dropdown-item" href="/home">
                                {{ __('Profile') }}
                            </a>



                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </ul>
                        </div>
                    </li>

                    @endauth
                    @guest
                        <a href="/register"> {{__('Join')}}</a>
                    @endguest


                    <li class="menu-item-has-children">


                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span>
                            {{ Config::get('languages')[App::getLocale()]['display'] }}

                        </a>
                        <div class="sub-nav">
                            <ul class="sub-menu">
                                @foreach (Config::get('languages') as $lang => $language)

                                    @if ($lang != App::getLocale())

                                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
                                            <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span>
                                            {{$language['display']}}
                                        </a>

                                    @endif

                                @endforeach
                            </ul>
                        </div>
                    </li>



                </ul>


             </nav>
             <div class="fw-col-sm-2 search-module">
                 <form action="/search" method="GET">
                     <input type="text" class="input" name="key" placeholder="{{__('Search')}}">
                     <button type="submit" class="submit"><i class="icon-font icon-search"></i></button>
                 </form>
             </div>
             <!-- Mobile side button -->
             <div class="mobile-side-button"><i class="icon-font icon-menu"></i></div>
             <!-- END Mobile side button -->
             <!-- Mobiile side -->
             <div class="mobile-side">
                <!-- Social link -->
                <div class="social-link">
                   <a href="javascript:void(0);"><i class="social-icons icon-facebook-logo"></i></a>
                   <a href="javascript:void(0);"><i class="social-icons icon-twitter-social-logotype"></i></a>
                   <a href="javascript:void(0);"><i class="social-icons icon-instagram-social-network-logo-of-photo-camera"></i></a>
                </div>
                <!-- END Social link -->
                <div class="search-module">
                   <form action="/search" method="GET">
                      <input type="text" class="input" name="key" placeholder="Search">
                      <button type="submit" class="submit"><i class="icon-font icon-search"></i></button>
                   </form>
                </div>
                <!-- Mobile navigation -->
                <nav class="mobile-navigation">
                   <ul>
                      <!-- Current menu item -->
                      <li class="current-menu-item menu-item-has-children">
                         <a href="/">Home</a>
                         <div class="sub-nav">

                         </div>
                      </li>
                      <!-- Current menu item -->

                      <li class="menu-item-has-children">
                         <a href="/blog">Blog</a>
                         <div class="sub-nav">
                            <ul class="sub-menu">
                                @foreach(\App\Models\BlogCategory::allCategories() as $category)
                                <li><a href="/category/{{$category->id}}">{{$category->title}}</a></li>
                                 @endforeach
                            </ul>
                         </div>
                      </li>

                      <li><a href="/contact">Contact</a></li>
                       @auth

                           <li class="menu-item-has-children">

                               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <img src="{{ Auth::user()->photo? Auth::user()->photo : '/images/avatar.png' }}" alt="" width="32">
                               </a>

                               <div class="sub-nav">
                                   <ul class="sub-menu">
                                       <a class="dropdown-item" href="/home">
                                           {{ __('Profile') }}
                                       </a>



                                       <a class="dropdown-item" href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                           {{ __('Logout') }}
                                       </a>

                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           @csrf
                                       </form>
                                   </ul>
                               </div>
                           </li>





                       @endauth
                       @guest
                           <a href="/register"> Join</a>
                       @endguest
                   </ul>
                </nav>
                <!-- END Mobile navigation -->
             </div>
             <!-- END Mobiile side -->
          </div>
       </div>
    </div>
    <!-- END Header-wrap -->
 </header>
 <!-- END Header -->
