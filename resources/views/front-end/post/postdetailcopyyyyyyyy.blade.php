@extends('front-end.includes.layout')

@section('title')
    Yello-Board | {{$post->subcategory->title}}
@endsection

@section('content')
    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-nav-area" style="background-image: url('{{asset('assets/admin/img/'.$post->category->image)}}');
                                background-repeat: no-repeat;object-fit: cover">
                            <h1 class="text-white">Standard Post</h1>
                            <p class="text-white link-nav"><a href="#">Home </a>
                                <span class="lnr lnr-arrow-right"></span><a href="#">{{$post->category->title}} </a>
                                <span class="lnr lnr-arrow-right"></span><a href="standard-post.html">{{$post->subcategory->title}}  </a></p>
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
                        <!-- Start single-post Area -->
                        <div class="single-post-wrap">
                            <div class="content-wrap">
                                <ul class="tags">
                                    <li><a href="{{route('subcategorydetail.index',$post->subcategory->id)}}">{{$post->subcategory->title}}</a></li>
                                </ul>
                                <a href="#">
                                    <h3>{{$post->title}}</h3>
                                </a>
                                <ul class="meta pb-20">
                                    <li>

                                        @if($post->visitor_id != 0)
                                            <a href="{{route('about_uploader.index',\App\Visitor::find($post->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                                {{\App\Visitor::find($post->visitor_id)->name}}
                                            </a>

                                        @else
                                            <a href="{{route('about_uploader.index',\App\User::find($post->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                                {{\App\User::find($post->user_id)->name}}
                                            </a>
                                        @endif

                                    </li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$post->created_at->format('d-m-Y')}}</a></li>
                                    <li><a href="#"><span class="lnr lnr-eye"></span>{{$post->view_count}}</a></li>
                                    {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>--}}
                                </ul>
                                <p>
                                    <img class="img-fluid" src="{{asset('assets/admin/img/'.$post->image)}}"  alt="">

                                    {{--for publisher logo--}}
                                    <a href="{{route('about_uploader.index',\App\User::find($post->user_id)->email)}}"><span style="position: relative; left: -1em;" >
                                        <img src="{{asset('assets/front-end/img/kantipur.png')}}" style="height: 65px; /* width: 43%; */ background: transparent;"></span>
                                        <span style="position: relative;left: -1em;font-size: large; bottom: 11px;font-family: fantasy;" class="small">
                                        @if($post->visitor_id != 0)

                                                {{\App\Visitor::find($post->visitor_id)->name}}
                                            @else

                                                {{\App\User::find($post->user_id)->name}}
                                            @endif
                                    </span>
                                        <span style="position: relative;left: -6em; top: 7px;" disabled="" class="small"> @admin.com</span>
                                    </a>

                                    {{--for publisher logo--}}


                                    {!! $post->description !!}
                                    {{--{{$post->description}}--}}
                                </p>
                                <div>
                                    <div class="addthis_inline_share_toolbox" ></div>
                                </div>
                                <div class="navigation-wrap justify-content-between d-flex">
                                    <a class="prev" href="#"><span class="lnr lnr-arrow-left"></span>Prev Post</a>
                                    <a class="next" href="#">Next Post<span class="lnr lnr-arrow-right"></span></a>
                                </div>

                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                <div class="comment-sec-area">
                                    <div class="container">
                                        @if(count($comm)>0)
                                            <h6>05 Comments</h6>
                                            @foreach($comm as $c)
                                                <div class="row flex-column">

                                                    <div class="comment-list">
                                                        <div class="single-comment justify-content-between d-flex" style="color:blue; border: 1px solid black; width: 60%">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="desc" >
                                                                    <h5><a href="#"></a></h5>

                                                                    <p class="comment" >
                                                                        {{$c->comment}}
                                                                    </p>
                                                                    <h5>Posted By:{{$c->email}}</h5>
                                                                    <p class="date">{{$c->created_at}} </p>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        {{--march--}}
                                                        @if(Auth::guard('visitor')->check() && Auth::guard('visitor')->user()->id==$post->visitor_id)
                                                            <div class="reply-btn  d-flex" >
                                                                <button  class="btn-reply text-uppercase btn-right" id="reply-btn">reply</button>
                                                            </div>

                                                        @elseif(Auth::check() && Auth::user()->id==$post->user_id)
                                                            @if(!isset($c->reply))

                                                                <div class="reply-btn  d-flex" >
                                                                    <button  class="btn-reply text-uppercase btn-right" type="button" data-toggle="collapse" data-target="#{{$c->id}}">reply</button>
                                                                </div>
                                                            @else
                                                                {{$c->reply->reply}}
                                                            @endif
                                                            {{--cmnt--}}
                                                            <div style="padding-top: 10px" class="collapse" id="{{$c->id}}">
                                                                <form method="post" action="{{route('commentReplyStore.store')}}">
                                                                    {{csrf_field()}}
                                                                    <input type="text"  name="reply" style="width: 60%">
                                                                    <input type="hidden"  value="{{$c->id}}" name="comment_id" style="width: 60%">
                                                                </form>
                                                            </div>
                                                        @else

                                                        @endif
                                                        {{--slkajdlkfasd--}}

                                                    </div>

                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{--COMMENTS SECTION BEGIN HERE--}}

                            <div class="comment-form">
                                <h4>Post Comment</h4>
                                <form role="form" action="{{route('front.comment.store',$post->id)}} " method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    <div class="form-group form-inline">
                                        <div class="form-group col-lg-6 col-md- 6name">
                                            @if(Auth::guard('visitor')->check())
                                                <input type="hidden" class="form-control" name="fullname" value="{{Auth::guard('visitor')->user()->name}}"

                                                       placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">

                                            @elseif( Auth::check())
                                                <input type="hidden" class="form-control" name="fullname" value="{{Auth::user()->name}}"

                                                       placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">

                                            @else
                                                <input type="text" class="form-control" name="fullname" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                            @endif


                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 email">

                                            @if(Auth::guard('visitor')->check() )
                                                <input type="hidden" class="form-control"
                                                       value="{{Auth::guard('visitor')->user()->email}}"
                                                       name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                            @elseif( Auth::check())
                                                <input type="hidden" class="form-control"
                                                       value="{{Auth::user()->email}}"
                                                       name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">

                                            @else

                                                <input type="email" class="form-control" name="email" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">

                                            @endif

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control mb-10" rows="5" name="comment" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                    </div>
                                    <button class="primary-btn text-uppercase" type="submit">Post Comment</button>
                                </form>
                            </div>

                            {{--COMMENTS SECTION END HERE--}}


                        </div>
                        <!-- End single-post Area -->
                    </div>


                    <div class="col-lg-4">
                        <div class="sidebars-area">


                            <!-- Start most popular news Area -->
                        {{ Widget::run('MostPopularNews') }}
                        <!-- End most popular news Area -->




                            {{--start latest news--}}

                            <div class="single-sidebar-widget editors-pick-widget">

                                <h6 class="title">{{$post->category->title}}</h6>


                                @foreach($data['posts'] as $p)

                                    <div class="editors-pick-post">
                                        <div class="feature-img-wrap relative">

                                            <div class="post-lists">
                                                <div class="single-post d-flex flex-row">
                                                    <div class="thumb">
                                                        <img src="{{asset('assets/admin/img/'.$p->image)}}" alt="" width="100px" height="100px">
                                                    </div>
                                                    <div class="detail">
                                                        <a href="{{route('postdetail.index',$p->id)}}"><h6>{{$p->title}}</h6></a>
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
                                                            {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>--}}
                                                            <li><a href="#"><span class="lnr lnr-eye"></span>{{$p->view_count}}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            {{--end latest news--}}



                            <div class="single-sidebar-widget ads-widget">
                                <img class="img-fluid" src="{{asset('assets/front-end/img/sidebar-ads.jpg')}}" alt="">
                            </div>


                            <!-- Start sidemiddle news Area -->
                        {{ Widget::run('LowerslideNews') }}
                        <!-- End sidemiddle news Area -->



                            <!-- Start sidemiddle news Area -->
                        {{ Widget::run('SidemiddleNews') }}
                        <!-- End sidemiddle news Area -->

                        </div>
                    </div>
                </div>
            </div>



        </section>
        <!-- End latest-post Area -->

        <!-- Start advertisement Area -->
    {{ Widget::run('Advertisement') }}
    <!-- End advertisement Area -->

    </div>
@endsection

