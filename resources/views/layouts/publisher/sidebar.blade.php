
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{asset('assets/admin/img/profile_small.jpg')}}" />
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">

                                        {{ Auth::guard('visitor')->user()->name }}
                                    </strong>
                             </span> <span class="text-muted text-xs block">{{ Auth::guard('visitor')->user()->user_type }} <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li {!! request()->is('myprofile')?'class="active"':'' !!}><a href="{{route('user.profile')}}">Profile<i class="fa fa-user" style="float: right; margin-top: 6px;"></i></a></li>
                        <li><a href="contacts.html">Details<i class="fa fa-info" style="float: right; margin-top: 6px;"></i></a></li>
                        <li><a href="mailbox.html">Setting<i class="fa fa-cogs" style="float: right; margin-top: 6px;"></i></a></li>
                        <li class="divider"></li>
                        <li>
                                    <a href="{{ route('user.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                        </li>

                    </ul>
                </div>
                <div class="logo-element">
                    YB+
                </div>
            </li>

            <li {!! request()->is('publisher_dashboard')?'class="active"':'' !!}>
                <a href="{{route('publisher.dashboard')}}"><i class="fa fa-th-large"></i>
                    <span class="nav-label"> Dashboard</span></a>
            </li>

            <hr style="margin-top: 0px; margin-bottom:2px; " >

                <li {!! request()->is('published_through_link')?'class="active"':'' !!}>
                    <a href="{{route('publisher.link')}}"><i class="fa fa-upload"></i>
                        <span class="nav-label"> Publish Through Link</span></a>
                </li>
            <li {!! request()->is('customize_publishing')?'class="active"':'' !!}>
                <a href="{{route('publisher.publishing')}}"><i class="fa fa-plus"></i>
                    <span class="nav-label"> Customize Publishing</span></a>
            </li>

            <hr style="margin-top: 0px; margin-bottom:2px; " >
            <li {!! request()->is('publisher_posts_show')?'class="active"':'' !!}>
                <a href="{{route('publisher.show')}}"><i class="fa fa-th-list"></i>
                    <span class="nav-label"> All Posts</span></a>
            </li>

    @if(\Illuminate\Support\Facades\Auth::user()->user_type == 'Publisher')

            <li {!! request()->is('publisher_posts_recent')?'class="active"':'' !!}>
                <a href="{{route('publisher.recent')}}"><i class="fa fa-bell"></i>
                    <span class="nav-label"> Recent</span></a>
            </li>
            <li {!! request()->is('admin/dashboard')?'class="active"':'' !!}>
                <a href="{{route('publisher.dashboard')}}"><i class="fa fa-bullhorn"></i>
                    <span class="nav-label"> Feedback</span></a>
            </li>
            <li {!! request()->is('admin/dashboard')?'class="active"':'' !!}>
                <a href="{{route('publisher.dashboard')}}"><i class="fa fa-comments"></i>
                    <span class="nav-label"> Comments</span></a>
            </li>


            <hr style="margin-top: 0px; margin-bottom:2px; ">
            <li {!! request()->is('admin/dashboard')?'class="active"':'' !!}>
                <a href="{{route('publisher.add')}}"><i class="fa fa-user-plus"></i>
                    <span class="nav-label"> Add User</span></a>
            </li>


            <li {!! request()->is('admin/dashboard')?'class="active"':'' !!}>
                <a href="{{route('publisher.authors')}}"><i class="fa fa-user-plus"></i>
                    <span class="nav-label"> Author List </span></a>
            </li>


            <hr style="margin-top: 0px; margin-bottom:2px; ">
            <li {!! request()->is('admin/dashboard')?'class="active"':'' !!}>
                <a href="{{route('publisher.dashboard')}}"><i class="fa fa-cogs"></i>
                    <span class="nav-label"> Setting</span></a>
            </li>

    @endif

            <li {!! request()->is('admin/dashboard')?'class="active"':'' !!}>
                <a href="{{route('publisher.dashboard')}}"><i class="fa fa-medkit"></i>
                    <span class="nav-label"> Help</span></a>
            </li>

            <hr style="margin-top: 0px">

        </ul>

    </div>
</nav>