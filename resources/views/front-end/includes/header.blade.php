<header>
    <style>
        a:active {
            color: yellow;
        }

    /*sdfkjas*/
        .modal-header,.mee, .close {
            background-color: #f6214b;
            color:white !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-footer {
            background-color: #f9f9f9;
        }

        /*login*/


    </style>
    <div class="header-top">
        <div class="container">



            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
-
                    <ul>
                        <li><a href="tel:+01-4154675"><span class="lnr lnr-phone-handset"></span><span>&nbsp;01-4154675</span></a></li>
                        <li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span><span>&nbsp;policynepal@gmail.com</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
                    <ul>

                        {{--march77--}}
                        @if(isset(Auth::guard('visitor')->user()->email))

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


                            @if(Auth::guard('visitor')->user()->user_type== 'Visitor')
                                <li><a href="{{route('visitor.home')}}">Go to my profile</a></li>
                            @else
                                <li><a href="{{route('publisher.dashboard')}}">Dashboard</a></li>
                                @endif

                            @else
                            <li>
                                <a href="" id="myBtn" data-toggle="modal" data-target="#login">Login</a>
                            </li>
                            {{--<li><a href="{{route('front.user.showLogin')}}">Login</a></li>--}}

                            {{--<li><a href="{{route('user.register')}}">Register</a></li>--}}
                            <li>
                                <a href="{{route('user.register')}}">Register</a>
                                {{--<a href="" id="regBtn" data-toggle="modal" data-target="#register">Register</a>--}}
                            </li>

                        @endif
                        {{--march 77--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                    <a href="{{route('front.index')}}">
                        <img class="img-fluid" src="{{asset('assets/front-end/img/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                    <h6 style="color: darkblue"><strong>Pure Media. Pure power.</strong></h6>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 logo-right no-padding">

                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu" id="main-menu">
        <div class="row align-items-center justify-content-between">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    {{--<li class="menu-active" class="{{ Request::is('blogs*') ? 'active' : '' }}" ><a href="{{route('front.index')}}" onMouseOver="this.style.color='#0F0'"--}}
                                               {{--onMouseOut="this.style.color='#FFF'" active="this.style.color='#00F'">--}}
                            {{--<i class="lnr lnr-home"></i></a></li>--}}

                    <li  class="{{ Request::is('/*') ? 'active' : '' }}" ><a href="{{route('front.index')}}" onMouseOver="this.style.color='#0F0'"
                    onMouseOut="this.style.color='#FFF'" >
                    <i class="lnr lnr-home"></i></a></li>

                    @foreach($category as $c)
                    <li class="{{ Request::is('categorypage/'.$c->id) ? 'active' : '' }}" ><a  href="{{route('categorydetail.index',$c->id)}} "  onMouseOver="this.style.color='#0F0'"
                             onMouseOut="this.style.color='#FFF'">{{$c->title}}</a></li>
                    @endforeach
                    <li class="{{ Request::is('about*') ? 'active' : '' }}"><a href="{{route('about.index')}}" onMouseOver="this.style.color='#0F0'"
                           onMouseOut="this.style.color='#FFF'" >About</a></li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}" ><a href="{{route('contact.index')}}" onMouseOver="this.style.color='#0F0'"
                           onMouseOut="this.style.color='#FFF'" >Contact</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
            <div class="navbar-right">
                <form method="get" class="Search" action="{{route('news_search.index')}}">
                    <input type="text" class="form-control Search-box" name="query" id="Search-box" placeholder="Search">
                    <label for="Search-box" class="Search-box-label">
                        <span class="lnr lnr-magnifier"></span>
                    </label>
                    <span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
                </form>
            </div>
        </div>
    </div>
</header>

<!-- Modal register -->

<div class="modal fade" id="register" role="dialog" style="background-color: hsla(0,0%,0%,0.6);">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="  margin-top: 150px">
                <h4 class="mee"><span class="glyphicon glyphicon-lock"></span> Register</h4>
            </div>

            <div class="modal-body" style="padding:40px 50px;">
                <form role="form">
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                        <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="password" class="form-control" id="psw" placeholder="Enter password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <p style="align-items: left;">Already member? <a href="" id="myBtn" data-toggle="modal" data-target="#login">Login</a> </p>
                <p>Forgot <a href="{{route('user.password.request')}}">Password?</a></p>
            </div>
        </div>

    </div>
</div>


{{--end register--}}

{{--login--}}
<div class="modal fade in" id="login" role="dialog" style="background-color: hsla(0,0%,0%,0.6);">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" style=" margin-top: 150px">
            <div class="modal-header" style="padding:35px 50px;">

                <h4 class="mee"><span class="glyphicon glyphicon-lock"></span> Login</h4>


            </div>
            <div class="modal-body" style="padding:40px 50px;">
                @if(session('status'))
                    <h6 class="alert alert-success">
                        {{session('status')}}
                    </h6>
                @endif
                {!! Form::open([
                            'url' => route('user.login'),
                             'method'=>'post',
                              'role'=>"form",
                 ]) !!}

                <div class="form-group {{$errors->has('email') ? 'has-error': ''}}">
                    <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Email</label>
                    {{--<input type="text" class="form-control" id="usrname" placeholder="Enter email">--}}

                    {!! Form::email('email', null, [
                   'placeholder' => 'Enter email',
                   'class' => 'form-control common-input mb-20',
                   'pattern'=>'[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$',
                   'onfocus'=>"this.placeholder = '' ",
                   'onblur'=>"this.placeholder = 'Enter email address'",
                    'required'=>''
                   ]) !!}
                    @if($errors->has('email'))
                        <span class="help-block">{{$errors->first('email')}}</span>
                    @endif
                </div>

                    <div class="form-group {{$errors->has('password') ? 'has-error': ''}}">
                        <label for="psw"><span class="glyphicon glyphicon-lock"></span> Password</label>
                        {{--<input type="password" class="form-control" id="psw" placeholder="Enter password">--}}
                        {!! Form::password('password', [
                        'placeholder' => 'Enter password',
                        'class' => 'common-input mb-20 form-control',
                        ]) !!}
                        @if($errors->has('password'))
                            <span class="help-block">{{$errors->first('password')}}</span>
                        @endif
                    </div>

                <div class="checkbox">
                        {{--<label><input type="checkbox" value="" checked>Remember me</label>--}}
                    </div>
                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <p style="align-items: left;">Not a member? <a href="{{route('user.register')}}">Sign Up</a></p>
                <p>Forgot <a href="{{route('user.password.request')}}">Password?</a></p>
            </div>
        </div>


    </div>
</div>



@section('login-js')
    @if($errors->count()>0)
    <script>
        // console.log('kjlasghdfjl');
        $(document).ready(function(){
           $("#myBtn").click();
        });
    </script>
    {{--@elseif(request()->is('/'))--}}
        {{--<script>--}}
        {{--$(document).ready(function(){--}}
            {{--$(window).on("load",function(){--}}
                {{--$("#myModal").modal();--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
    @endif

    {{--<script>--}}
        {{--// console.log('kjlasghdfjl');--}}
        {{--$(document).ready(function(){--}}
            {{--$("#regBtn").click();--}}
        {{--});--}}
    {{--</script>--}}

    @if(session('msg'))
        {{--<div class="alert alert-success">{!! session('msg') !!}</div>--}}
        {{--@php--}}
        {{--session()->flush();--}}
        {{--@endphp--}}
        <script>
            // console.log('kjlasghdfjl');
            $(document).ready(function(){
                $("#myBtn").click();
            });
        </script>
    @endif

@endsection