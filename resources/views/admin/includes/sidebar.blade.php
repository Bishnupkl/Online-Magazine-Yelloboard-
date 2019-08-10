
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{asset('assets/admin/img/profile_small.jpg')}}" />
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                             </span> <span class="text-muted text-xs block">{{ Auth::user()->user_type }} <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>


                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

            @can('IsAdmin')
            <li {!! request()->is('admin/dashboard')?'class="active"':'' !!}>

                <a href="{{route('admin.dashboard.index')}}"><i class="fa fa-th-large"></i>
                    <span class="nav-label"> Dashboard</span></a>

            </li>


            <li {!! request()->is('admin/category/*')?'class="active"':'' !!}>

                <a>
                    <i class="fa fa-list-alt"></i> <span class="nav-label">Category</span> <span class="fa arrow"></span>
                </a>

                <ul class="nav nav-second-level collapse">

                    <li {!! request()->is('category/create')?'class="active"':'' !!} ><a href="{{route('admin.category.create')}}">Create</a></li>
                    <li {!! request()->is('category/index')?'class="active"':'' !!}><a href="{{route('admin.category.index')}}">List</a></li>

                </ul>
            </li>

            <li {!! request()->is('admin/category/*')?'class="active"':'' !!}>

                <a>
                    <i class="fa fa-list-alt"></i> <span class="nav-label">Sub Category</span> <span class="fa arrow"></span>
                </a>

                <ul class="nav nav-second-level collapse">

                    <li {!! request()->is('subcategory/create')?'class="active"':'' !!} ><a href="{{route('admin.subcategory.create')}}">Create</a></li>
                    <li {!! request()->is('subcategory/index')?'class="active"':'' !!}><a href="{{route('admin.subcategory.index')}}">List</a></li>

                </ul>
            </li>



            <li {!! request()->is('admin/post/*')?'class="active"':'' !!}>
                <a>
                    <i class="fa fa-paste"></i>
                    <span class="nav-label">Post</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li {!! request()->is('post/create')?'class="active"':'' !!} ><a href="{{route('admin.post.create')}}">Create</a></li>
                    <li {!! request()->is('post/index')?'class="active"':'' !!}><a href="{{route('admin.post.index')}}">List</a></li>
                </ul>
            </li>


            <li {!! request()->is('admin/post/*')?'class="active"':'' !!}>
                <a>
                    <i class="fa fa-paste"></i>
                    <span class="nav-label">Breaking News</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li {!! request()->is('breakingnews/create')?'class="active"':'' !!} ><a href="{{route('admin.bnews.create')}}">Create</a></li>

                </ul>
            </li>



            <li {!! request()->is('admin/user/*')?'class="active"':'' !!}>
                <a>
                    <i class="fa fa-users"></i> <span class="nav-label">User </span><span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li {!! request()->is('user/create')?'class="active"':'' !!} ><a href="{{route('admin.user.create')}}">Create User</a></li>
                    <li {!! request()->is('user/index')?'class="active"':'' !!}><a href="{{route('admin.user.index')}}">List</a></li>
                </ul>
            </li>

                <li {!! request()->is('admin/publisher/*')?'class="active"':'' !!}>
                    <a>
                        <i class="fa fa-user"></i> <span class="nav-label">Publisher Management </span><span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li {!! request()->is('publisher/index')?'class="active"':'' !!}><a href="{{route('admin.publisher.index')}}">List</a></li>
                    </ul>
                </li>



            @endcan     {{--closing for IsAdmin from top--}}


        </ul>

    </div>
</nav>