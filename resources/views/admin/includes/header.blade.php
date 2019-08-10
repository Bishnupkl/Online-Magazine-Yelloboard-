<div class="row border-bottom">
    <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.3/search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Welcome to Yello Board Dashboard.</span>
            </li>
            {{--march--}}
            <li class="dropdown">

                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>
                    @if(count($p)!=0)
                    <span class="label label-primary">
                        {{count($p)}}
                    </span>

                        @endif

                </a>
                <ul class="dropdown-menu dropdown-alerts" style="overflow: auto;height: 150px">
                    @foreach($p as $key=>$l)
                        @if($key<=12)
                        @if($l->postNotify==1)
                        <li>
                        <a href="{{route('admin.post.show',$l->id)}}">
                            <div class="small">
                                New post is added by
                                @if($l->user_id!=0)
                                {{$l->user->name}}
                                @else
                                    {{$l->visitor->name }}
                                    @endif
                                    in
                                {{$l->title}}
                                <br>
                                <span class="pull-right text-muted small">{{$l->created_at->diffForHumans()}}</span>

                            </div>
                        </a>
                    </li>
                                <li class="divider"></li>
                            @endif
                        @endif

                    @endforeach
                        @if(count($p)==0)
                        <li>
                            <div class="text-center link-block">
                                <strong>No New Posts</strong>
                            </div>
                        </li>
                            @else
                            {{--<li>--}}
                                {{--<div class="text-center link-block">--}}
                                    {{--<a href="notifications.html">--}}
                                        {{--<strong>See other new post</strong>--}}
                                        {{--<i class="fa fa-angle-right"></i>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            @endif


                </ul>
            </li>
                {{--march--}}

            <li>

                <a href="#"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>Log Out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            </li>
        </ul>

    </nav>
</div>