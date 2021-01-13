<style>

#nav-main{
    float:right;
    direction:rtl!important;


    }
    #logo{
        direction: ltr!important;
        text-align:right!important;
      
    }
</style>
<header class="main-header header-style-2 mb-40">
            <div class="header-bottom header-sticky background-white text-center">
                <div class="scroll-progress gradient-bg-1"></div>
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-3">
                            <div class="header-logo d-none d-lg-block">
                                <a href="index.html" id="logo">
                                    <img class="logo-img d-inline" src="{{asset('assets/imgs/logo.svg')}}" alt="">
                                </a>
                            </div>
                            <div class="logo-tablet d-md-inline d-lg-none d-none">
                                <a href="index.html">
                                    <img class="logo-img d-inline" src="{{asset('assets/imgs/logo.svg')}}" alt="">
                                </a>
                            </div>
                            <div class="logo-mobile d-block d-md-none">
                                <a href="index.html">
                                    <img class="logo-img d-inline" src="{{asset('assets/imgs/favicon.svg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-9 main-header-navigation">
                            <!-- Main-menu -->
                            <div class="main-nav text-left float-lg-left float-md-right">
                                <!-- <ul class="mobi-menu d-none menu-3-columns" id="navigation">
                                    <li class="cat-item cat-item-2"><a href="#">Global Economy</a></li>
                                    <li class="cat-item cat-item-3"><a href="#">Environment</a></li>
                                    <li class="cat-item cat-item-4"><a href="#">Religion</a></li>
                                    <li class="cat-item cat-item-5"><a href="#">Fashion</a></li>
                                    <li class="cat-item cat-item-6"><a href="#">Terrorism</a></li>
                                    <li class="cat-item cat-item-7"><a href="#">Conflicts</a></li>
                                    <li class="cat-item cat-item-2"><a href="#">Scandals</a></li>
                                    <li class="cat-item cat-item-2"><a href="#">Executive</a></li>
                                    <li class="cat-item cat-item-2"><a href="#">Foreign policy</a></li>
                                    <li class="cat-item cat-item-2"><a href="#">Healthy Living</a></li>
                                    <li class="cat-item cat-item-3"><a href="#">Medical Research</a></li>
                                    <li class="cat-item cat-item-4"><a href="#">Children’s Health</a></li>
                                    <li class="cat-item cat-item-5"><a href="#">Around the World</a></li>
                                    <li class="cat-item cat-item-6"><a href="#">Ad Choices</a></li>
                                    <li class="cat-item cat-item-7"><a href="#">Mental Health</a></li>
                                    <li class="cat-item cat-item-2"><a href="#">Media Relations</a></li>
                                </ul> -->
                                <nav id="nav-main">
                                    <ul class="main-menu d-none d-lg-inline">
                                        <li >
                                            <a href="{{url('/')}}"><span class="mr-15">
                                                          </span>{{__('menu.home')}}</a>
                                        </li>
                                    
                                         <li><a href="{{url('/about')}}" ><span class="mr-15">
                                                    <ion-icon name="mail-unread-outline"></ion-icon>
                                                </span>{{__('menu.contact')}}</a></li>
                                                <li >
                                            <a href="{{ LaravelLocalization::getLocalizedURL('en') }}"><span class="mr-15">
                                                          </span>English</a>
                                           
                                        </li>
                                        
                                        <li >  <a id="dari"  href="{{ LaravelLocalization::getLocalizedURL('fa') }}" >دری </a> </li>
                                       <li >  <a id="pashto"  href="{{ LaravelLocalization::getLocalizedURL('ps') }}">پښتو </a> </li>          
                                      
                                   </ul>
                                </nav>
                            </div>
                            <!-- Search -->
                            <form id="search" action="#" method="get" class="search-form d-lg-inline float-right position-relative mr-30 d-none">
                                <input type="text" class="search_field" placeholder="{{__('menu.se')}}" value="" name="s">
                                <span class="search-icon"><i class="ti-search mr-5"></i></span>
                            </form>
                            <!-- Off canvas -->
                            <div class="off-canvas-toggle-cover">
                                <div class="off-canvas-toggle hidden d-inline-block ml-15" id="off-canvas-toggle">
                                    <ion-icon name="grid-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>