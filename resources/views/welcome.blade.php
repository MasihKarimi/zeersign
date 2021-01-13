<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
   @include('layout.head')
</head>

<body>
  
   
    <div class="main-wrap" >
        <!--Offcanvas sidebar-->
        <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar position-right ">
            <button class="off-canvas-close"><i class="ti-close"></i></button>
            <div class="sidebar-inner">
              
                <!--Ads-->
                <div class="sidebar-widget widget-ads mb-30">
                    <div class="widget-header tags-close mb-20">
                        <h5 class="widget-title mt-5">Your Ads Here</h5>
                    </div>
                    <a href="assets/imgs/news-1.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s">
                        <img class="border-radius-10" src="assets/imgs/ads-1.jpg" alt="">
                    </a>
                </div>
            </div>
        </aside>
        <!-- Main Header -->
       @include('layout.header')
        <!-- Main Wrap Start -->
        <main class="position-relative" >
          
            <div class="post-carausel-1-items mb-50" id="main">
            @foreach($articles as $article)
                <div class="col" id="header" >
                    <div class="slider-single bg-white p-10 border-radius-15">
                        <div class="img-hover-scale border-radius-10">
                           
                            <a href="single.html"> 
                                <img class="border-radius-10" src="{{asset('admin/article')}}/{{$article->image}}"  alt="post-slider">
                            </a>
                        </div>
                        <h6  class="post-title pr-5 pl-5 mb-10 mt-15 text-limit-2-row">
                            <a href="{{url('/article_single',$article->id)}}" >{{$article->name}}</a>
                        </h6>
                        <div id="section-article" class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase pl-5 pb-15">
                            <span class="post-by">{{__('menu.b')}}: <a href="author.html">{{$article->author->name}}</a></span>
                           
                        </div>
                    </div>
                </div>
            @endforeach
               
            </div>
            <div class="container" id="latest">
                <!--Ads-->
                <div class="row">
                    <div class="col-12 text-center mb-50">
                        <a href="#">
                            <img class="border-radius-10 d-inline" src="assets/imgs/ads.jpg" alt="post-slider">
                        </a>
                    </div>
                </div>
                <!--Content-->
                <div class="row">
                    <!-- sidebar-left -->
                    <div class="col-lg-2 col-md-3 primary-sidebar sticky-sidebar sidebar-left order-2 order-md-1">
                        <!-- Widget Weather -->
                        <div class="sidebar-widget widget-weather border-radius-10 bg-white mb-30">
                            <div class="d-flex">
                                <div class="font-medium">
                                    <p>Monday</p>
                                    <h2>12</h2>
                                    <p><strong>August</strong></p>
                                </div>
                                <div class="font-medium ml-10 pt-20">
                                    <div id="datetime" class="d-inline-block">
                                        <ul>
                                            <li><span class="font-small">
                                                    <a class="text-primary" href="#">London</a><br>
                                                    <i class="wi wi-day-sunny mr-5"></i>32ºc
                                                </span>
                                                <p>Sunny</p>
                                            </li>
                                            <li><span class="font-small">
                                                    <a class="text-danger" href="#">Paris</a><br>
                                                    <i class="wi wi-day-cloudy mr-5"></i>28ºc
                                                </span>
                                                <p>Cloudy</p>
                                            </li>
                                            <li><span class="font-small">
                                                    <a class="text-success" href="#">New York</a><br>
                                                    <i class="wi wi-rain-mix mr-5"></i>25ºc
                                                </span>
                                                <p>Rainy</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Categories -->
                        <div class="sidebar-widget widget_categories_2 border-radius-10 bg-white mb-30" >
                            <ul class="font-small text-muted">
                                @foreach($tags as $tag)
                                <li  class="cat-item cat-item-2 active">
                                    <a href="#">
                                        <span class="mr-10" id ="tag">
                                            <ion-icon name="earth-outline"></ion-icon>
                                        </span> {{$tag->name}}
                                    </a>
                                </li>
                               @endforeach
                            </ul>
                        </div>
                        <!-- Widget Categories -->
                        <div class="sidebar-widget widget_categories border-radius-10 bg-white mb-30">
                            <div class="widget-header position-relative mb-15">
                                <h5 class="widget-title"><strong>{{__('menu.c')}}</strong></h5>
                            </div>
                           
                            <ul  class="font-small text-muted" id ="category">
                            @foreach($categories as $category)
                                <li id ="category" class="cat-item cat-item-2"><a href="#">{{$category->name}}</a></li>
                            @endforeach
                            </ul>

                        </div>
                    </div>
                    <!-- main content -->
                    <div class="col-lg-10 col-md-9 order-1 order-md-2">
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="latest-post mb-50">
                                    <div class="widget-header position-relative mb-30">
                                        <div class="row">
                                            <div class="col-7">
                                                <h4 class="widget-title mb-0"> <span> {{__('menu.la')}}</span></h4>
                                            </div>
                                            <div class="col-5 text-right">
                                                <h6 class="font-medium pr-15">
                                                   
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="loop-list-style-1">
                                      
                                        <article class="first-post p-10 background-white border-radius-10 mb-30 wow fadeIn animated">
                                        @foreach($arti as $ar)    
                                        <div class="img-hover-slide border-radius-15 mb-30 position-relative overflow-hidden">
                                                <span class="top-right-icon bg-dark"><i class="mdi mdi-flash-on"></i></span>
                                                <a href="single.html">
                                                    <img  src="{{asset('admin/article')}}/{{$ar->image}}" alt="post-slider">
                                                </a>
                                            </div>
                                            <div class="pr-10 pl-10">
                                                <div class="entry-meta mb-30">
                                                    <a class="entry-meta meta-0" href="category.html"><span class="post-in background2 text-primary font-x-small">
                                                     @foreach($article->categories as $cat)
                                                        {{$cat->name}}
                                                     @endforeach</span></a>
                                                    <div class="float-right font-small">
                                                           </div>
                                                </div>
                                                <h4 class="post-title mb-20">
                                                    <span class="post-format-icon">
                                                        <ion-icon name="headset-outline"></ion-icon>
                                                    </span>
                                                    <a href="single.html">{{$ar->name}}</a></h4>
                                                <div class="mb-20 overflow-hidden">
                                                    <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                                        <span class="post-by">{{__('menu.b')}} :<a href="author.html">{{$ar->author->name}}</a></span>
                                                       
                                                    </div>
                                                    <div class="float-right">
                                                        <a href="single.html" class="read-more"><span class="mr-10"><i class="fa fa-thumbtack" aria-hidden="true"></i></span>Picked by Editor</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </article>
                                       @foreach($artic as $article)
                                        <article class="p-10 background-white border-radius-10 mb-30 wow fadeIn animated">
                                            <div class="d-flex">
                                                <div class="post-thumb d-flex mr-15 border-radius-15 img-hover-scale">
                                                    <a class="color-white" href="single.html">
                                                        <img class="border-radius-15" s src="{{asset('admin/article')}}/{{$article->image}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body"  id = "articles">
                                                    <div class="entry-meta mb-15 mt-10">
                                                        <a class="entry-meta meta-2" href="category.html"><span class="post-in text-danger font-x-small">
                                                        @foreach($article->categories as $cat)
                                                        {{$cat->name}}
                                                        @endforeach
                                                        </span></a>
                                                    </div>
                                                    <h5 class="post-title mb-15 text-limit-2-row">
                                                        <a href="single.html"> {{$article->name}}</a></h5>
                                                    <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                                        <span class="post-by">{{__('menu.b')}} :<a href="author.html">{{$article->author->name}}</a></span>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                       @endforeach
                                    </div>
                                </div>
                                <div class="pagination-area mb-30">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-start">
                                            <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-left"></i></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="sidebar-widget widget-ads mb-30 text-center">
                                    <a href="assets/imgs/news-1.jpg">
                                        <img class="border-radius-10" src="assets/imgs/ads-3.png" alt="">
                                    </a>
                                </div>
                                <!-- Videos-->
                                <div class="sidebar-widget">
                                    <div class="widget-header position-relative mb-20">
                                        <div class="row">
                                            <div class="col-7">
                                                <h5 class="widget-title mb-0">Videos <span>News</span></h5>
                                            </div>
                                            <div class="col-5 text-right">
                                                <h6 class="font-medium pr-15">
                                                    <a class="text-muted font-small" href="#">View more</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-tab-item post-module-1 post-module-4">
                                        <div class="row">
                                            <div class="slider-single col-md-6 mb-30">
                                                <div class="img-hover-scale border-radius-10">
                                                    <span class="top-right-icon background10"><i class="mdi mdi-share"></i></span>
                                                    <a href="single.html">
                                                        <img class="border-radius-10" src="assets/imgs/news-17.jpg" alt="post-slider">
                                                    </a>
                                                    <div class="play_btn play_btn_small">
                                                        <a class="play-video" href="../../333834999.html" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s">
                                                            <i class="fa fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h5 class="post-title pr-5 pl-5 mb-10 mt-15 text-limit-2-row">
                                                    <a href="single.html">What Will It Take to Reopen the World to Travel?</a>
                                                </h5>
                                                <div class="entry-meta meta-1 font-x-small mt-10 pr-5 pl-5 text-muted">
                                                    <span><span class="mr-5"><i class="fa fa-eye" aria-hidden="true"></i></span>30k</span>
                                                    <span class="ml-15"><span class="mr-5 text-muted"><i class="fa fa-comment" aria-hidden="true"></i></span>1.5k</span>
                                                    <span class="ml-15"><span class="mr-5 text-muted"><i class="fa fa-share-alt" aria-hidden="true"></i></span>15k</span>
                                                    <a class="float-right" href="#"><i class="ti-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <div class="slider-single col-md-6 mb-30">
                                                <div class="img-hover-scale border-radius-10">
                                                    <a href="single.html">
                                                        <img class="border-radius-10" src="assets/imgs/news-18.jpg" alt="post-slider">
                                                    </a>
                                                    <div class="play_btn play_btn_small">
                                                        <a class="play-video" href="../../333834999.html" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s">
                                                            <i class="fa fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <h5 class="post-title pr-5 pl-5 mb-10 mt-15 text-limit-2-row">
                                                    <a href="single.html">Many Races, Little Time: Cycling Faces a Crowded Calendar</a>
                                                </h5>
                                                <div class="entry-meta meta-1 font-x-small mt-10 pr-5 pl-5 text-muted">
                                                    <span><span class="mr-5"><i class="fa fa-eye" aria-hidden="true"></i></span>5.8k</span>
                                                    <span class="ml-15"><span class="mr-5 text-muted"><i class="fa fa-comment" aria-hidden="true"></i></span>2.5k</span>
                                                    <span class="ml-15"><span class="mr-5 text-muted"><i class="fa fa-share-alt" aria-hidden="true"></i></span>125k</span>
                                                    <a class="float-right" href="#"><i class="ti-bookmark"></i></a>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 sidebar-right">
                                <!--Post aside style 1-->
                                <div class="sidebar-widget mb-30">
                                    <div class="widget-header position-relative mb-30">
                                        <div class="row">
                                            <div class="col-7">
                                              
                                            </div>
                                            <div class="col-5 text-right">
                                                <h6 class="font-medium pr-15">
                                                    <a class="text-muted font-small" href="#">{{__('menu.va')}}</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="post-aside-style-1 border-radius-10 p-20 bg-white">
                                        <ul class="list-post">
                                            <li class="mb-20">
                                                <div class="d-flex">
                                                    <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                                        <a class="color-white" href="single.html">
                                                            <img src="assets/imgs/thumbnail-4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Federal arrests show no sign that antifa plotted protests</a></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-20">
                                                <div class="d-flex">
                                                    <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                                        <a class="color-white" href="single.html">
                                                            <img src="assets/imgs/thumbnail-15.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">How line-dried laundry gets that fresh smell</a></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-20">
                                                <div class="d-flex">
                                                    <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                                        <a class="color-white" href="single.html">
                                                            <img src="assets/imgs/thumbnail-16.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Traveling tends to magnify all human emotions</a></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                                        <a class="color-white" href="single.html">
                                                            <img src="assets/imgs/thumbnail-15.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">How line-dried laundry gets that fresh smell</a></h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                    
                                <!--Top authors-->
                                <div class="sidebar-widget mb-30">
                                    <div class="widget-top-auhor border-radius-10 p-20 bg-white">
                                        <div class="widget-header widget-header-style-1 position-relative mb-15">
                                            <h5 class="widget-title pl-5"> <span>{{__('menu.ta')}}</span></h5>
                                        </div>
                                        @foreach($authors as $author)
                                        <a class="red-tooltip active" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Emma - 1034 posts"><img src="{{asset('admin/author')}}/{{$author->image}}" alt=""></a>
                                        @endforeach
                                       </div>
                                </div>
                                <!--Newsletter-->
                                <div class="sidebar-widget widget_newsletter border-radius-10 p-20 bg-white mb-30">
                                    <div class="widget-header widget-header-style-1 position-relative mb-15">
                                        <h5 class="widget-title">{{__('menu.nl')}}</h5>
                                    </div>
                                    <div class="newsletter">
                                        <p class="font-medium"></p>
                                        <form target="_blank" action="#" method="get" class="subscribe_form relative mail_part">
                                            <div class="form-newsletter-cover">
                                                <div class="form-newsletter position-relative">
                                                    <input type="email" name="EMAIL"  required="">
                                                    <button type="submit">
                                                        <i class="ti ti-email"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--Post aside style 2-->
                                <!-- <div class="sidebar-widget mb-30">
                                    <div class="widget-header mb-30">
                                        <h5 class="widget-title">Top <span>Trending</span></h5>
                                    </div>
                                    <div class="post-aside-style-2">
                                        <ul class="list-post">
                                            <li class="mb-30 wow fadeIn animated">
                                                <div class="d-flex">
                                                    <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                                        <a class="color-white" href="single.html">
                                                            <img src="assets/imgs/thumbnail-2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Vancouver woman finds pictures and videos of herself online</a></h6>
                                                        <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                                            <span class="post-by">By <a href="author.html">K. Marry</a></span>
                                                            <span class="post-on">4m ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-30 wow fadeIn animated">
                                                <div class="d-flex">
                                                    <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                                        <a class="color-white" href="single.html">
                                                            <img src="assets/imgs/thumbnail-3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">4 Things Emotionally Intelligent People Don’t Do</a></h6>
                                                        <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                                            <span class="post-by">By <a href="author.html">Mr. John</a></span>
                                                            <span class="post-on">3h ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mb-30 wow fadeIn animated">
                                                <div class="d-flex">
                                                    <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale">
                                                        <a class="color-white" href="single.html">
                                                            <img src="assets/imgs/thumbnail-5.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="post-content media-body">
                                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Reflections from a Token Black Friend</a></h6>
                                                        <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase">
                                                            <span class="post-by">By <a href="author.html">Kenedy</a></span>
                                                            <span class="post-on">4h ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- <div class="sidebar-widget mb-30">
                                    <div class="widget-header mb-30">
                                        <h5 class="widget-title">Most <span>Popular</span></h5>
                                    </div>
                                    <div class="post-aside-style-3">
                                        <article class="bg-white border-radius-15 mb-30 p-10 wow fadeIn animated">
                                            <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                                                <a href="single.html">
                                                    <video autoplay="" class="photo-item__video" loop="" muted="" preload="none">
                                                        <source src="../../exp=1609933312~acl=722787761.mp4~hmac=7a79b61c406b50acc01339bf7b39ead1309b012acf680e4b3c732805313d5822/vimeo-prod-skyfire-std-us/01/2150/8/210754416/722787761.mp4?s=826dbe91a402d3fc239674b6595a0100b2a45098&amp;profile_id=164&amp;oauth2_token_id=57447761" type="video/mp4">
                                                    </video>
                                                </a>
                                            </div>
                                            <div class="pl-10 pr-10">
                                                <h5 class="post-title mb-15"><a href="single.html">Vancouver woman finds pictures and videos of herself online</a></h5>
                                                <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase mb-10">
                                                    <span class="post-in">In <a href="category.html">Global</a></span>
                                                    <span class="post-by">By <a href="author.html">K. Marry</a></span>
                                                    <span class="post-on">4m ago</span>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="bg-white border-radius-15 mb-30 p-10 wow fadeIn animated">
                                            <div class="post-thumb d-flex mb-15 border-radius-15 img-hover-scale">
                                                <a href="single.html">
                                                    <img class="border-radius-15" src="assets/imgs/news-22.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="pl-10 pr-10">
                                                <h5 class="post-title mb-15"><a href="single.html">Fight breaks out at Disneyland</a></h5>
                                                <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase mb-10">
                                                    <span class="post-in">In <a href="category.html">Healthy</a></span>
                                                    <span class="post-by">By <a href="author.html">Steven</a></span>
                                                    <span class="post-on">14m ago</span>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div> -->
                                <div class="sidebar-widget p-20 border-radius-15 bg-white widget-latest-comments wow fadeIn animated">
                                    <div class="widget-header mb-30">
                                        <h5 class="widget-title">Last <span>Comments</span></h5>
                                    </div>
                                    <div class="post-block-list post-module-6">
                                        <div class="last-comment mb-20 d-flex wow fadeIn animated">
                                            <span class="item-count vertical-align">
                                                <a class="red-tooltip author-avatar" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Azumi - 985 posts"><img src="assets/imgs/authors/author-14.png" alt=""></a>
                                            </span>
                                            <div class="alith_post_title_small">
                                                <p class="font-medium mb-10"><a href="single.html">A writer is someone for whom writing is more difficult than it is for other people.</a></p>
                                                <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase mb-10">
                                                    <span class="post-by">By <a href="author.html">Azumi</a></span>
                                                    <span class="post-on">4m ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="last-comment d-flex wow fadeIn animated">
                                            <span class="item-count vertical-align">
                                                <a class="red-tooltip author-avatar" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Harry - 1245 posts"><img src="assets/imgs/authors/author-9.png" alt=""></a>
                                            </span>
                                            <div class="alith_post_title_small">
                                                <p class="font-medium mb-10"><a href="single.html">Riding the main trail was easy, a little bumpy because my mountain bike is a hardtail</a></p>
                                                <div class="entry-meta meta-1 font-x-small color-grey float-left text-uppercase mb-10">
                                                    <span class="post-by">By <a href="author.html">K. Harry</a></span>
                                                    <span class="post-on">4m ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row mb-50 mt-15">
                            <div class="col-md-12">
                                <div class="widget-header position-relative mb-30">
                                    <h4 class="widget-title mb-0">From <span>Blog</span></h4>
                                </div>
                                <div class="post-carausel-2 post-module-1 row">
                                    <div class="col">
                                        <div class="post-thumb position-relative">
                                            <div class="thumb-overlay img-hover-slide border-radius-15 position-relative" style="background-image: url(assets/imgs/thumbnail-7.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <div class="post-content-overlay">
                                                    <div class="entry-meta meta-0 font-small mb-15">
                                                        <a href="category.html"><span class="post-cat bg-success color-white">Travel</span></a>
                                                    </div>
                                                    <h5 class="post-title">
                                                        <a class="color-white" href="single.html">Tesla’s Cooking Up A New Way To Wire Its Cars, Report Says</a>
                                                    </h5>
                                                    <div class="entry-meta meta-1 font-x-small mt-10 pr-5 pl-5 text-muted">
                                                        <span><span class="mr-5"><i class="fa fa-eye" aria-hidden="true"></i></span>5.8k</span>
                                                        <span class="ml-15"><span class="mr-5 text-muted"><i class="fa fa-comment" aria-hidden="true"></i></span>2.5k</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="post-thumb position-relative">
                                            <div class="thumb-overlay img-hover-slide border-radius-15 position-relative" style="background-image: url(assets/imgs/thumbnail-8.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <div class="post-content-overlay">
                                                    <div class="entry-meta meta-0 font-small mb-15">
                                                        <a href="category.html"><span class="post-cat bg-info color-white">Beauty</span></a>
                                                    </div>
                                                    <h5 class="post-title">
                                                        <a class="color-white" href="single.html">Ratcliffe to be Director of nation talent Trump ignored</a>
                                                    </h5>
                                                    <div class="entry-meta meta-1 font-x-small mt-10 pr-5 pl-5 text-muted">
                                                        <span><span class="mr-5"><i class="fa fa-eye" aria-hidden="true"></i></span>5.8k</span>
                                                        <span class="ml-15"><span class="mr-5 text-muted"><i class="fa fa-comment" aria-hidden="true"></i></span>2.5k</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="post-thumb position-relative">
                                            <div class="thumb-overlay img-hover-slide border-radius-15 position-relative" style="background-image: url(assets/imgs/thumbnail-10.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <div class="post-content-overlay">
                                                    <div class="entry-meta meta-0 font-small mb-15">
                                                        <a href="category.html"><span class="post-cat bg-danger color-white">Art</span></a>
                                                    </div>
                                                    <h5 class="post-title">
                                                        <a class="color-white" href="single.html">Countries seek ‘new history’ as figures are re-examined</a>
                                                    </h5>
                                                    <div class="entry-meta meta-1 font-x-small mt-10 pr-5 pl-5 text-muted">
                                                        <span><span class="mr-5"><i class="fa fa-eye" aria-hidden="true"></i></span>5.8k</span>
                                                        <span class="ml-15"><span class="mr-5 text-muted"><i class="fa fa-comment" aria-hidden="true"></i></span>2.5k</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="post-thumb position-relative">
                                            <div class="thumb-overlay img-hover-slide border-radius-15 position-relative" style="background-image: url(assets/imgs/thumbnail-15.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <div class="post-content-overlay">
                                                    <div class="entry-meta meta-0 font-small mb-10">
                                                        <a href="category.html"><span class="post-cat bg-warning color-white">Gaming</span></a>
                                                    </div>
                                                    <h5 class="post-title">
                                                        <a class="color-white" href="single.html">The secret to moving this ancient sphinx screening</a>
                                                    </h5>
                                                    <div class="entry-meta meta-1 font-x-small mt-10 pr-5 pl-5 text-muted">
                                                        <span><span class="mr-5"><i class="fa fa-eye" aria-hidden="true"></i></span>5.8k</span>
                                                        <span class="ml-15"><span class="mr-5 text-muted"><i class="fa fa-comment" aria-hidden="true"></i></span>2.5k</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="post-thumb position-relative">
                                            <div class="thumb-overlay img-hover-slide border-radius-15 position-relative" style="background-image: url(assets/imgs/thumbnail-16.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <div class="post-content-overlay">
                                                    <div class="entry-meta meta-0 font-small mb-10">
                                                        <a href="category.html"><span class="post-cat bg-primary color-white">Garden</span></a>
                                                    </div>
                                                    <h5 class="post-title">
                                                        <a class="color-white" href="single.html">Harbour amid a Slowen down in singer city screening</a>
                                                    </h5>
                                                    <div class="entry-meta meta-1 font-x-small mt-10 pr-5 pl-5 text-muted">
                                                        <span><span class="mr-5"><i class="fa fa-eye" aria-hidden="true"></i></span>5.8k</span>
                                                        <span class="ml-15"><span class="mr-5 text-muted"><i class="fa fa-comment" aria-hidden="true"></i></span>2.5k</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer Start-->
      @include('layout.footer')
    </div> <!-- Main Wrap End-->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
   @include('layout.scripts')
</body>

</html>