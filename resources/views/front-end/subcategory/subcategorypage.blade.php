@extends('front-end.includes.layout')

@section('title')
    Yello-Board | {{$subcat->title}}
@endsection

@section('content')

    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-nav-area" style="background-image: url('{{asset('assets/admin/img/'.$subcat->image)}}');
                                background-repeat: no-repeat;object-fit:fill" >
                            <h1 class="text-white" >
                                {{$subcat->title}}
                            </h1>
                            {{--<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="category.html">Posts Category</a></p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End top-post Area -->



        <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-8 post-list">
                        <!-- Start latest-post Area -->
                        <div class="latest-post-wrap">
                            <h4 class="cat-title">Latest {{$subcat->title}} News</h4>

                            @foreach($data['posts'] as $p)
                                @if($p !== null)

                                    <div class="single-latest-post row align-items-center">
                                        <div class="col-lg-5 post-left">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="{{asset('assets/admin/img/'.$p->image)}}"  style="height: 207px" >
                                            </div>
                                            <ul class="tags">
                                                <li><a href="{{route('subcategorydetail.index',$p->subcategory->id)}}">{{$p->subcategory->title}}</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7 post-right">
                                            <a href="{{route('postdetail.index',$p->id)}}">
                                                <h4>{{$p->title}}</h4>
                                            </a>
                                            <ul class="meta">
                                                <li>

                                                    @if($p->visitor_id != 0)
                                                        <a href="{{route('about_uploader.index',\App\Visitor::find($p->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                                            {{\App\Visitor::find($p->visitor_id)->name}}
                                                        </a>

                                                    @else
                                                        <a href="{{route('about_uploader.index',\App\User::find($p->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                                            {{\App\User::find($p->user_id)->name}}
                                                        </a>
                                                    @endif

                                                </li>
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$p->created_at->diffForHumans()}}</a></li>
                                                {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>--}}
                                            </ul>
                                            <p class="excert">
                                                {!! str_limit($p->description,100) !!} <a href="{{route('postdetail.index',$p->id)}}">...Read More</a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach


                            {{--Load More--}}

                            <div class="load-more">
                                <a href="#" class="primary-btn">Load More Posts</a>
                            </div>

                            {{--Load More--}}

                        </div>
                        <!-- End latest-post Area -->
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebars-area">
                            <div class="single-sidebar-widget editors-pick-widget">




                                <!-- Start mostpopular category news Area -->

                                <div class="single-sidebar-widget most-popular-widget">
                                    <h6 class="title">Most Popular</h6>

                                    @foreach($mostpopularsubcategory as $mps)

                                        <div class="single-list flex-row d-flex">
                                            <div class="thumb">
                                                <img src="{{asset('assets/admin/img/'.$mps->image)}}" alt="" width="100px" height="100px">
                                            </div>
                                            <div class="details">
                                                <a href="{{route('postdetail.index',$mps->id)}}">
                                                    <h6>{{$mps->title}}</h6>
                                                </a>
                                                <ul class="meta">
                                                    <li>

                                                        @if($mps->visitor_id != 0)
                                                            <a href="{{route('about_uploader.index',\App\Visitor::find($mps->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                                                {{\App\Visitor::find($mps->visitor_id)->name}}
                                                            </a>

                                                        @else
                                                            <a href="{{route('about_uploader.index',\App\User::find($mps->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                                                {{\App\User::find($mps->user_id)->name}}
                                                            </a>
                                                        @endif

                                                    </li>
                                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$mps->created_at->diffForHumans()}}</a></li>
                                                    <li><a href="#"><span class="lnr lnr-eye"></span>{{$mps->view_count}}</a></li>
                                                    {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>--}}
                                                </ul>
                                            </div>
                                        </div>

                                    @endforeach


                                </div>

                                <!-- End mostpopular category news Area -->



                                <!-- Start top-post Area -->
                                {{ Widget::run('SidetopNews') }}
                                <!-- End top-post Area -->



                                {{--ad start--}}
                                <div class="single-sidebar-widget ads-widget">
                                    <img class="img-fluid" src="img/sidebar-ads.jpg" alt="">
                                </div>
                                {{--ad end--}}



                                <div class="single-sidebar-widget most-popular-widget">

                                <!-- Start sidemiddle news Area -->
                                {{ Widget::run('SidemiddleNews') }}
                                <!-- End sidemiddle news Area -->

                                </div>



{{--Social Networks Begin--}}

                                {{--<div class="single-sidebar-widget social-network-widget">--}}
                                    {{--<h6 class="title">Social Networks</h6>--}}
                                    {{--<ul class="social-list">--}}
                                        {{--<li class="d-flex justify-content-between align-items-center fb">--}}
                                            {{--<div class="icons d-flex flex-row align-items-center">--}}
                                                {{--<i class="fa fa-facebook" aria-hidden="true"></i>--}}
                                                {{--<p>983 Likes</p>--}}
                                            {{--</div>--}}
                                            {{--<a href="#">Like our page</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="d-flex justify-content-between align-items-center tw">--}}
                                            {{--<div class="icons d-flex flex-row align-items-center">--}}
                                                {{--<i class="fa fa-twitter" aria-hidden="true"></i>--}}
                                                {{--<p>983 Followers</p>--}}
                                            {{--</div>--}}
                                            {{--<a href="#">Follow Us</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="d-flex justify-content-between align-items-center yt">--}}
                                            {{--<div class="icons d-flex flex-row align-items-center">--}}
                                                {{--<i class="fa fa-youtube-play" aria-hidden="true"></i>--}}
                                                {{--<p>983 Subscriber</p>--}}
                                            {{--</div>--}}
                                            {{--<a href="#">Subscribe</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="d-flex justify-content-between align-items-center rs">--}}
                                            {{--<div class="icons d-flex flex-row align-items-center">--}}
                                                {{--<i class="fa fa-rss" aria-hidden="true"></i>--}}
                                                {{--<p>983 Subscribe</p>--}}
                                            {{--</div>--}}
                                            {{--<a href="#">Subscribe</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}

{{--Social Networks End--}}


                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- End latest-post Area -->
    </div>

@endsection