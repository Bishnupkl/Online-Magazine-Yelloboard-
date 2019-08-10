<!-- Start most popular news Area -->

<div class="single-sidebar-widget most-popular-widget">
    <h6 class="title">Most Popular</h6>

    @foreach($post as $p)

        <div class="single-list flex-row d-flex">
            <div class="thumb">
                <img src="{{asset('assets/admin/img/'.$p->image)}}" alt="" width="100px" height="100px">
            </div>
            <div class="details">
                <a href="{{route('postdetail.index',$p->id)}}">
                    <h6>{{$p->title}}</h6>
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
                    {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>--}}
                </ul>

                {{--{!! $p->excerpt !!}--}}

            </div>
        </div>


        {{--<div class="single-list flex-row d-flex">--}}
        {{--<div class="thumb">--}}
        {{--<img src="{{asset('assets/front-end/img/m2.jpg')}}" alt="">--}}
        {{--</div>--}}
        {{--<div class="details">--}}
        {{--<a href="image-post.html">--}}
        {{--<h6>Compatible Inkjet Cartr--}}
        {{--world famous</h6>--}}
        {{--</a>--}}
        {{--<ul class="meta">--}}
        {{--<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>--}}
        {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="single-list flex-row d-flex">--}}
        {{--<div class="thumb">--}}
        {{--<img src="{{asset('assets/front-end/img/m3.jpg')}}" alt="">--}}
        {{--</div>--}}
        {{--<div class="details">--}}
        {{--<a href="image-post.html">--}}
        {{--<h6>5 Tips For Offshore Soft--}}
        {{--Development </h6>--}}
        {{--</a>--}}
        {{--<ul class="meta">--}}
        {{--<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>--}}
        {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="single-list flex-row d-flex">--}}
        {{--<div class="thumb">--}}
        {{--<img src="{{asset('assets/front-end/img/m4.jpg')}}" alt="">--}}
        {{--</div>--}}
        {{--<div class="details">--}}
        {{--<a href="image-post.html">--}}
        {{--<h6>5 Tips For Offshore Soft--}}
        {{--Development </h6>--}}
        {{--</a>--}}
        {{--<ul class="meta">--}}
        {{--<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>--}}
        {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</div>--}}

    @endforeach


</div>

<!-- End most popular news Area -->