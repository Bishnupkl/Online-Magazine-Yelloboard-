<!-- Start relavent-story-post Area -->
<div class="relavent-story-post-wrap mt-30">
    <h4 class="title">Sports <a  href="{{route('categorydetail.index',$category[4]->id)}}" class="pull-right">Load More>></a></h4>

        @foreach($post as $p)

    <div class="relavent-story-list-wrap">
        <div class="single-relavent-post row align-items-center">
            <div class="col-lg-5 post-left">
                <div class="feature-img relative">
                    <div class="overlay overlay-bg"></div>
                    <img class="img-fluid" src="{{asset('assets/admin/img/'.$p->image)}}" alt="">
                </div>
                <ul class="tags">
                    <li><a href="{{route('subcategorydetail.index',$p->subcategory->id)}}">{{$p->subcategory->title}}</a></li>
                </ul>


                {{--for publisher logo--}}
                {{--<ul class="image" style="position: absolute; bottom: 8em; left: 0px;">--}}
                    {{--<li style="display: inline-block; background: transparent; color: #fff;">--}}
                        {{--<img src="{{asset('assets/front-end/img/kantipur.png')}}" style="height: 65px; /* width: 43%; */ background: transparent;">--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--for publisher logo--}}

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
                    <li><a href="#"><span class="lnr lnr-eye"></span>{{$p->view_count}}</a></li>
                </ul>

                    {!! $p->excerpt !!}

            </div>
        </div>
    </div>
@endforeach


</div>
<!-- End relavent-story-post Area -->
</div>
<div class="col-lg-4">
    <div class="sidebars-area">



        <!-- Start most popular news Area -->
        {{ Widget::run('MostPopularNews') }}
        <!-- End most popular news Area -->






        {{--Ad start--}}
        <div class="single-sidebar-widget ads-widget">
            <img class="img-fluid" src="{{asset('assets/front-end/img/add.gif')}}" alt="">
        </div>
        {{--Ad end--}}




    <!-- Start sidetop news Area -->
    {{ Widget::run('SidetopNews') }}
    <!-- End sidetop news Area -->




        <!-- Start sidemiddle news Area -->
        {{ Widget::run('SidemiddleNews') }}
        <!-- End sidemiddle news Area -->



    <!-- Start sidemiddle news Area -->
    {{ Widget::run('LowerslideNews') }}
    <!-- End sidemiddle news Area -->



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