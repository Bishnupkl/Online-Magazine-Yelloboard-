
@if(count($post)>0 && isset($post[0]))

    <!-- Start popular-post Area -->
    <div class="popular-post-wrap">
        <h4 class="title">Political <a  href="{{route('categorydetail.index',$category[1]->id)}}" class="pull-right">Load More>></a></h4>
        <div class="feature-post relative">

            <div class="feature-img relative">
                <div class="overlay overlay-bg"></div>
                <img class="img-fluid" src="{{asset('assets/admin/img/'.$post[0]->image)}}" alt="">
            </div>
            <div class="details">
                <ul class="tags">
                    <li><a href="{{route('subcategorydetail.index',$post[0]->subcategory->id)}}">{{$post[0]->subcategory->title}}</a></li>
                </ul>

                {{--for publisher logo--}}
                {{--<ul class="image" style="position: absolute; bottom: 22em; left: -52px;">--}}
                    {{--<li style="display: inline-block; background: transparent; color: #fff;">--}}
                        {{--<img src="{{asset('assets/front-end/img/kantipur.png')}}" style="height: 65px; /* width: 43%; */ background: transparent;">--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--for publisher logo--}}

                <a href="{{route('postdetail.index',$post[0]->id)}}">
                    <h3>{{$post[0]->title}}</h3>
                </a>
                <ul class="meta">
                    <li>

                        @if($post[0]->visitor_id != 0)
                            <a href="{{route('about_uploader.index',\App\Visitor::find($post[0]->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                {{\App\Visitor::find($post[0]->visitor_id)->name}}
                            </a>

                        @else
                            <a href="{{route('about_uploader.index',\App\User::find($post[0]->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                {{\App\User::find($post[0]->user_id)->name}}
                            </a>
                        @endif

                    </li>
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$post[0]->created_at->diffForHumans()}}</a></li>
                    <li><a href="#"><span class="lnr lnr-eye"></span>{{$post[0]->view_count}}</a></li>
                </ul>

                    {!! $post[0]->excerpt !!}

            </div>
        </div>

        @if(isset($post[1]))

        <div class="row mt-20 medium-gutters">
            <div class="col-lg-6 single-popular-post">
                <div class="feature-img-wrap relative">
                    <div class="feature-img relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="{{asset('assets/admin/img/'.$post[1]->image)}}" style="height: 317.53px" alt="">
                    </div>
                    <ul class="tags">
                        <li><a href="{{route('subcategorydetail.index',$post[1]->subcategory->id)}}">{{$post[1]->subcategory->title}}</a></li>
                    </ul>

                    {{--for publisher logo--}}
                    {{--<ul class="image" style="position: absolute; bottom: 18.5em; left: -13px;">--}}
                        {{--<li style="display: inline-block; background: transparent; color: #fff;">--}}
                            {{--<img src="{{asset('assets/front-end/img/kantipur.png')}}" style="height: 65px; /* width: 43%; */ background: transparent;">--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    {{--for publisher logo--}}

                </div>
                <div class="details">
                    <a href="{{route('postdetail.index',$post[1]->id)}}">
                        <h4>{{$post[1]->title}}</h4>
                    </a>
                    <ul class="meta">
                        <li>

                            @if($post[1]->visitor_id != 0)
                                <a href="{{route('about_uploader.index',\App\Visitor::find($post[1]->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                    {{\App\Visitor::find($post[1]->visitor_id)->name}}
                                </a>

                            @else
                                <a href="{{route('about_uploader.index',\App\User::find($post[1]->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                    {{\App\User::find($post[1]->user_id)->name}}
                                </a>
                            @endif

                        </li>
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$post[1]->created_at->diffForHumans()}}</a></li>
                        <li><a href="#"><span class="lnr lnr-eye"></span>{{$post[1]->view_count}}</a></li>
                    </ul>


                        {!! $post[1]->excerpt !!}


                </div>
            </div>
            @endif


            @if(isset($post[2]))
            <div class="col-lg-6 single-popular-post">
                <div class="feature-img-wrap relative">
                    <div class="feature-img relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="{{asset('assets/admin/img/'.$post[2]->image)}}" style="height: 317.53px"  alt="">
                    </div>
                    <ul class="tags">
                        <li><a href="{{route('subcategorydetail.index',$post[2]->subcategory->id)}}">{{$post[2]->subcategory->title}}</a></li>
                    </ul>

                    {{--for publisher logo--}}
                    {{--<ul class="image" style="position: absolute; bottom: 18.5em; left: -13px;">--}}
                        {{--<li style="display: inline-block; background: transparent; color: #fff;">--}}
                            {{--<img src="{{asset('assets/front-end/img/kantipur.png')}}" style="height: 65px; /* width: 43%; */ background: transparent;">--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    {{--for publisher logo--}}

                </div>
                <div class="details">
                    <a href="{{route('postdetail.index',$post[2]->id)}}">
                        <h4>{{$post[2]->title}}</h4>
                    </a>
                    <ul class="meta">
                        <li>
                            @if($post[2]->visitor_id != 0)
                                <a href="{{route('about_uploader.index',\App\Visitor::find($post[2]->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                    {{\App\Visitor::find($post[2]->visitor_id)->name}}
                                </a>

                            @else
                                <a href="{{route('about_uploader.index',\App\User::find($post[2]->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                    {{\App\User::find($post[2]->user_id)->name}}
                                </a>
                            @endif
                        </li>
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$post[2]->created_at->diffForHumans()}}</a></li>
                        <li><a href="#"><span class="lnr lnr-eye"></span>{{$post[2]->view_count}}</a></li>
                    </ul>


                        {!! $post[2]->excerpt !!}

                </div>
            </div>

                @endif
        </div>
    </div>
    <!-- End popular-post Area -->




@endif


