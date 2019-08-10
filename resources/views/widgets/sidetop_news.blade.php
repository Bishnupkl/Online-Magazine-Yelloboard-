
@if(count($post)>0)
    {
    <!-- Start sidetop news Area -->

    <div class="single-sidebar-widget editors-pick-widget">
        <h6 class="title">Lifestyle</h6>

        <div class="editors-pick-post">
            <div class="feature-img-wrap relative">
                <div class="feature-img relative">
                    <div class="overlay overlay-bg"></div>
                    <img class="img-fluid" src="{{asset('assets/admin/img/'.$post[0]->image)}}" alt="">
                </div>
                <ul class="tags">
                    <li><a href="{{route('subcategorydetail.index',$post[0]->subcategory->id)}}">{{$post[0]->subcategory->title}}</a></li>
                </ul>
            </div>
            <div class="details">
                <a href="{{route('postdetail.index',$post[0]->id)}}">
                    <h4 class="mt-20">{{$post[0]->title}}</h4>
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
                    {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>--}}
                </ul>
                {{$post[0]->excerpt}}
            </div>



            <div class="post-lists">

                <div class="single-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{asset('assets/admin/img/'.$post[1]->image)}}" alt="" width="100px" height="100px">
                    </div>
                    <div class="detail">
                        <a href="{{route('postdetail.index',$post[1]->id)}}"><h6>{{$post[1]->title}}</h6></a>
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
                            {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>


            <div class="post-lists">

                <div class="single-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{asset('assets/admin/img/'.$post[2]->image)}}" alt="" width="100px" height="100px">
                    </div>
                    <div class="detail">
                        <a href="{{route('postdetail.index',$post[2]->id)}}"><h6>{{$post[2]->title}}</h6></a>
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
                            {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>--}}
                        </ul>

                        {!! $post[2]->excerpt !!}

                    </div>
                </div>
            </div>


            <div class="post-lists">

                <div class="single-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{asset('assets/admin/img/'.$post[3]->image)}}" alt="" width="100px" height="100px">
                    </div>
                    <div class="detail">
                        <a href="{{route('postdetail.index',$post[3]->id)}}"><h6>{{$post[3]->title}}</h6></a>
                        <ul class="meta">
                            <li>

                                @if($post[3]->visitor_id != 0)
                                    <a href="{{route('about_uploader.index',\App\Visitor::find($post[3]->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                        {{\App\Visitor::find($post[3]->visitor_id)->name}}
                                    </a>

                                @else
                                    <a href="{{route('about_uploader.index',\App\User::find($post[3]->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                        {{\App\User::find($post[3]->user_id)->name}}
                                    </a>
                                @endif

                            </li>
                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$post[3]->created_at->diffForHumans()}}</a></li>
                            <li><a href="#"><span class="lnr lnr-eye"></span>{{$post[3]->view_count}}</a></li>
                            {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>--}}
                        </ul>
                        {{$post[3]->excerpt}}
                    </div>
                </div>
            </div>




        </div>



    </div>

    <!-- End sidetop news Area -->



@endif



