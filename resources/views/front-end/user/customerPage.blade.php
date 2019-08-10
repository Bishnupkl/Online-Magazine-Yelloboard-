@extends('front-end.includes.layoutForCustomerPage')

@section('content')

    <div class="site-main-container">
    @if(count($visitor->subcategories)>0 or count($visitor->subcategories)<4 )
        <!-- Start top-post Area -->
            <section class="top-post-area pt-10">
                <div class="container no-padding">
                    <div class="row small-gutters">
                        @if(count($visitor->subcategories)>0 )
                            <div class="col-lg-8 top-post-left">
                                <div class="feature-image-thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{asset('assets/admin/img/'.$visitor->subcategories[0]->posts[0]->image)}}" alt="">
                                </div>

                                <div class="top-post-details">
                                    <ul class="tags">
                                        <li><a href="#">{{$visitor->subcategories[0]->title}}</a></li>
                                    </ul>
                                    <a href="image-post.html">
                                        <h3>{{$visitor->subcategories[0]->posts[0]->title}}</h3>
                                    </a>
                                    <ul class="meta">
                                        <li>
                                            @if($visitor->subcategories[0]->posts[0]->visitor_id != 0)
                                                <a href="{{route('about_uploader.index',\App\Visitor::find($visitor->subcategories[0]->posts[0]->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                                    {{\App\Visitor::find($visitor->subcategories[0]->posts[0]->visitor_id)->name}}
                                                </a>

                                            @else
                                                <a href="{{route('about_uploader.index',\App\User::find($visitor->subcategories[0]->posts[0]->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                                    {{\App\User::find($visitor->subcategories[0]->posts[0]->user_id)->name}}
                                                </a>
                                            @endif

                                        </li>
                                        {{--<li><a href="#"><span class="lnr lnr-user"></span>{{\App\User::find($post[1]->created_by)->name}}</a></li>--}}
                                        <li><span class="lnr lnr-calendar-full"></span>{{$visitor->subcategories[0]->posts[0]->created_at->diffForHumans()}}</li>
                                        <li><span class="lnr lnr-eye"></span>{{$visitor->subcategories[0]->posts[0]->view_count}}</li>

                                    </ul>
                                </div>
                            </div>
                        @endif
                        @if(count($visitor->subcategories)>1 )
                            <div class="col-lg-4 top-post-right">
                                <div class="single-top-post">
                                    <div class="feature-image-thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{asset('assets/admin/img/'.$visitor->subcategories[1]->posts[0]->image)}}" alt="">
                                    </div>
                                    <div class="top-post-details">
                                        <ul class="tags">
                                            <li><a href="#">{{$visitor->subcategories[1]->title}}</a></li>
                                        </ul>
                                        <a href="image-post.html">
                                            <h3>{{$visitor->subcategories[1]->posts[0]->title}}</h3>
                                        </a>
                                        <ul class="meta">
                                            <li>
                                                @if($visitor->subcategories[1]->posts[0]->visitor_id != 0)
                                                    <a href="{{route('about_uploader.index',\App\Visitor::find($visitor->subcategories[1]->posts[0]->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                                        {{\App\Visitor::find($visitor->subcategories[1]->posts[0]->visitor_id)->name}}
                                                    </a>

                                                @else
                                                    <a href="{{route('about_uploader.index',\App\User::find($visitor->subcategories[1]->posts[0]->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                                        {{\App\User::find($visitor->subcategories[1]->posts[0]->user_id)->name}}
                                                    </a>
                                                @endif

                                            </li>
                                            {{--<li><a href="#"><span class="lnr lnr-user"></span>{{\App\User::find($post[1]->created_by)->name}}</a></li>--}}
                                            <li><span class="lnr lnr-calendar-full"></span>{{$visitor->subcategories[1]->posts[0]->created_at->diffForHumans()}}</li>
                                            <li><span class="lnr lnr-eye"></span>{{$visitor->subcategories[1]->posts[0]->view_count}}</li>

                                        </ul>
                                    </div>
                                </div>
                                @endif
                                @if(count($visitor->subcategories)>2)
                                    <div class="single-top-post mt-10">
                                        <div class="feature-image-thumb relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{asset('assets/admin/img/'.$visitor->subcategories[2]->posts[0]->image)}}" alt="">
                                        </div>
                                        <div class="top-post-details">
                                            <ul class="tags">
                                                <li><a href="#">{{$visitor->subcategories[2]->title}}</a></li>
                                            </ul>
                                            <a href="image-post.html">
                                                <h3>{{$visitor->subcategories[2]->posts[0]->title}}</h3>
                                            </a>
                                            <ul class="meta">
                                                <li>
                                                    @if($visitor->subcategories[2]->posts[0]->visitor_id != 0)
                                                        <a href="{{route('about_uploader.index',\App\Visitor::find($visitor->subcategories[2]->posts[0]->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                                            {{\App\Visitor::find($visitor->subcategories[2]->posts[0]->visitor_id)->name}}
                                                        </a>

                                                    @else
                                                        <a href="{{route('about_uploader.index',\App\User::find($visitor->subcategories[2]->posts[0]->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                                            {{\App\User::find($visitor->subcategories[2]->posts[0]->user_id)->name}}
                                                        </a>
                                                    @endif

                                                </li>
                                                {{--<li><a href="#"><span class="lnr lnr-user"></span>{{\App\User::find($post[1]->created_by)->name}}</a></li>--}}
                                                <li><span class="lnr lnr-calendar-full"></span>{{$visitor->subcategories[2]->posts[0]->created_at->diffForHumans()}}</li>
                                                <li><span class="lnr lnr-eye"></span>{{$visitor->subcategories[2]->posts[0]->view_count}}</li>

                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    <p>Nothing to show</p>
                                @endif
                            </div>



                            <div class="col-lg-12">
                                <div class="news-tracker-wrap">
                                    <h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
                                </div>
                            </div>
                    </div>
                </div>
            </section>
            <!-- End top-post Area -->
        @else
            <p>Nothing to show</p>
    @endif



    <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-8 post-list">
                        <!-- Start choose category Area -->
                        @if(count($visitor->subcategories)>0)

                            <div class="latest-post-wrap">

                                <!-- Start banner-ads Area -->

                                <img class="img-fluid" src="{{asset('assets/admin/img/'.$visitor->subcategories[0]->posts[0]->image)}}" alt="">

                                <!-- End banner-ads Area -->

                            </div>

                            <!-- End choose category Area -->



                            <!-- Start popular-post Area -->
                            <div class="popular-post-wrap">
                                <h4 class="title">{{$visitor->subcategories[0]->category->title}}</h4>
                                <div class="feature-post relative">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{asset('assets/admin/img/'.$visitor->subcategories[0]->posts[0]->image)}}" alt="">
                                    </div>
                                    <div class="details">
                                        <ul class="tags">
                                            <li><a href="#">{{$visitor->subcategories[0]->title}}</a></li>
                                        </ul>

                                        <h3>{{$visitor->subcategories[0]->posts[0]->description}}</h3>

                                        <ul class="meta">
                                            <li>
                                                @if($visitor->subcategories[0]->posts[0]->visitor_id != 0)
                                                    <a href="{{route('about_uploader.index',\App\Visitor::find($visitor->subcategories[0]->posts[0]->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                                        {{\App\Visitor::find($visitor->subcategories[0]->posts[0]->visitor_id)->name}}
                                                    </a>

                                                @else
                                                    <a href="{{route('about_uploader.index',\App\User::find($visitor->subcategories[0]->posts[0]->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                                        {{\App\User::find($visitor->subcategories[0]->posts[0]->user_id)->name}}
                                                    </a>
                                                @endif

                                            </li>
                                            {{--<li><a href="#"><span class="lnr lnr-user"></span>{{\App\User::find($post[1]->created_by)->name}}</a></li>--}}
                                            <li><span class="lnr lnr-calendar-full"></span>{{$visitor->subcategories[0]->posts[0]->created_at->diffForHumans()}}</li>
                                            <li><span class="lnr lnr-eye"></span>{{$visitor->subcategories[0]->posts[0]->view_count}}</li>

                                        </ul>
                                    </div>
                                </div>


                                <div class="row mt-20 medium-gutters">
                                    {{--@foreach($array as $sub)--}}
                                        {{--@if( $visitor->subcategories[0]->category->title ==$sub->title  )--}}

                                             {{--{{($sub->subcategories)}}--}}
                                        {{--{{($visitor->subcategories)}}--}}
                                                      {{--@if($sub->subcategories->id == $visitor->subcategories->id)--}}
                                                    {{--sushillllllllll--}}
                                            {{--@endif--}}

                                            {{--<div class="col-lg-6 single-popular-post">--}}
                                                {{--<div class="feature-img-wrap relative">--}}
                                                    {{--<div class="feature-img relative">--}}
                                                        {{--<div class="overlay overlay-bg"></div>--}}
                                                        {{--<img class="img-fluid" src="{{asset('assets/front-end/img/f2.jpg')}}" alt="">--}}
                                                    {{--</div>--}}
                                                    {{--<ul class="tags">--}}
                                                        {{--<li><a href="#">Travel</a></li>--}}
                                                    {{--</ul>--}}
                                                {{--</div>--}}
                                                {{--<div class="details">--}}
                                                    {{--<a href="image-post.html">--}}
                                                        {{--<h4>A Discount Toner Cartridge Is--}}
                                                            {{--Better Than Ever.</h4>--}}
                                                    {{--</a>--}}
                                                    {{--<ul class="meta">--}}
                                                        {{--<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>--}}
                                                        {{--<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>--}}
                                                        {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>--}}
                                                    {{--</ul>--}}
                                                    {{--<p class="excert">--}}
                                                        {{--Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                        {{--@else--}}




                                        {{--@endif--}}
                                    {{--@endforeach--}}


                                        @foreach($visitor->subcategories->slice(0,2) as $key=>$value)
                                            @if(isset($visitor->subcategories[$key+1]) and $visitor->subcategories[$key+1]->category->id == $visitor->subcategories[0]->category->id)
                                                <div class="col-lg-6 single-popular-post">
                                                    <div class="feature-img-wrap relative">
                                                        <div class="feature-img relative">
                                                            <div class="overlay overlay-bg"></div>
                                                            <img class="img-fluid" src="{{asset('assets/front-end/img/f2.jpg')}}" alt="">
                                                        </div>
                                                        <ul class="tags">
                                                            <li><a href="#">{{$visitor->subcategories[$key+1]->title}}</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="details">
                                                        <a href="image-post.html">
                                                            <h4>{{$visitor->subcategories[$key+1]->posts[0]->title}}</h4>
                                                        </a>
                                                        <ul class="meta">
                                                            <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                                        </ul>
                                                        <p class="excert">
                                                            Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach


                                </div>

                            </div>
                            <!-- End popular-post Area -->


                            <!-- Start relavent-story-post Area -->
                            <div class="relavent-story-post-wrap mt-30">
                                <h4 class="title">helooo</h4>

                                <div class="relavent-story-list-wrap">
                                    <div class="single-relavent-post row align-items-center">
                                        <div class="col-lg-5 post-left">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="{{asset('assets/front-end/img/r1.jpg')}}" alt="">
                                            </div>
                                            <ul class="tags">
                                                <li><a href="#">Lifestyle</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7 post-right">
                                            <a href="image-post.html">
                                                <h4>A Discount Toner Cartridge Is
                                                    Better Than Ever.</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                            </ul>
                                            <p class="excert">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                            </p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        {{--@endif--}}
                        <!-- End relavent-story-post Area -->
                    </div>
                    @endif

                    <div class="col-lg-4">
                        <div class="sidebars-area">
                            <div class="single-sidebar-widget editors-pick-widget">
                                <h6 class="title">{{$visitor->subcategories[1]->category->title}}</h6>
                                <div class="editors-pick-post">
                                    <div class="feature-img-wrap relative">
                                        <div class="feature-img relative">
                                            <div class="overlay overlay-bg"></div>
                                            <img class="img-fluid" src="{{asset('assets/front-end/img/e1.jpg')}}" alt="">
                                        </div>
                                        <ul class="tags">
                                            <li><a href="#">Travel</a></li>
                                        </ul>
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h4 class="mt-20">A Discount Toner Cartridge Is
                                                Better Than Ever.</h4>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                        </ul>
                                        <p class="excert">
                                            Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
                                        </p>
                                    </div>
                                    <div class="post-lists">
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <img src="{{asset('assets/front-end/img/e2.jpg')}}" alt="">
                                            </div>
                                            <div class="detail">
                                                <a href="image-post.html"><h6>Help Finding Information
                                                        Online is so easy</h6></a>
                                                <ul class="meta">
                                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <img src="{{asset('assets/front-end/img/e3.jpg')}}" alt="">
                                            </div>
                                            <div class="detail">
                                                <a href="image-post.html"><h6>Compatible Inkjet Cartr
                                                        world famous</h6></a>
                                                <ul class="meta">
                                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <img src="{{asset('assets/front-end/img/e4.jpg')}}" alt="">
                                            </div>
                                            <div class="detail">
                                                <a href="image-post.html"><h6>5 Tips For Offshore Soft
                                                        Development </h6></a>
                                                <ul class="meta">
                                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget ads-widget">
                                <img class="img-fluid" src="{{asset('assets/front-end/img/sidebar-ads.jpg')}}" alt="">
                            </div>

                            <div class="single-sidebar-widget most-popular-widget">
                                <h6 class="title">{{$visitor->subcategories[2]->category->title}}</h6>
                                <div class="single-list flex-row d-flex">
                                    <div class="thumb">
                                        <img src="{{asset('assets/front-end/img/m1.jpg')}}" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h6>Help Finding Information
                                                Online is so easy</h6>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-list flex-row d-flex">
                                    <div class="thumb">
                                        <img src="{{asset('assets/front-end/img/m2.jpg')}}" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h6>Compatible Inkjet Cartr
                                                world famous</h6>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-list flex-row d-flex">
                                    <div class="thumb">
                                        <img src="{{asset('assets/front-end/img/m3.jpg')}}" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h6>5 Tips For Offshore Soft
                                                Development </h6>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-list flex-row d-flex">
                                    <div class="thumb">
                                        <img src="{{asset('assets/front-end/img/m4.jpg')}}" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="image-post.html">
                                            <h6>5 Tips For Offshore Soft
                                                Development </h6>
                                        </a>
                                        <ul class="meta">
                                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End latest-post Area -->
    </div>
@endsection