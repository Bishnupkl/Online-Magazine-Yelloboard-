<section class="latest-post-area pb-120">
    <div class="container no-padding">
        <div class="row">
            <div class="col-lg-8 post-list">
                <!-- Start latest-post Area -->
                <div class="latest-post-wrap" style="background: 0; box-shadow: 0">
                    <h4 class="cat-title">{{$category[0]->title}}
                        <a  href="{{route('categorydetail.index',$category[0]->id)}}" class="pull-right">  Load More>> </a>
                    </h4>

                    @foreach($post as $p)

                    <div class="single-latest-post row align-items-center">

                        <div class="col-lg-5 post-left">
                            <div class="feature-img relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="{{asset('assets/admin/img/'.$p->image)}}" style="height: 156.33px"  alt="">
                            </div>

                            <ul class="tags">
                                <li><a href="{{route('subcategorydetail.index',$p->subcategory->id)}}">{{$p->subcategory->title}}</a></li>
                            </ul>

                            {{--for publisher logo--}}
                            {{--<ul class="image" style="position: absolute; bottom: 7.2em; left: 0px;">--}}
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
                    @endforeach
                </div>
                <!-- End latest-post Area -->





