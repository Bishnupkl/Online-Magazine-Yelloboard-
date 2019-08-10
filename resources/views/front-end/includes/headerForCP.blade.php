<header>

    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">

                    <ul>
                        <li><a href="tel:+01-4154675"><span class="lnr lnr-phone-handset"></span><span>&nbsp;01-4154675</span></a></li>
                        <li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span><span>&nbsp;policynepal@gmail.com</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
                    <ul>
                        <li style="color: white;font-size: large;text-transform: capitalize">
                            <strong >{{ Auth::guard('visitor')->user()->name }}</strong>
                        </li>
                        <li>
                            <a href="{{ route('user.logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-publisher').submit();">
                                Logout
                            </a>

                            <form id="logout-publisher" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
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
                <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding">

                    {{--<img class="img-fluid" src="{{asset('assets/front-end/img/advert.jpg')}}" alt="">--}}

                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu" id="main-menu">
        <div class="row align-items-center justify-content-between">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{route('front.index')}}">Home</a></li>

                @foreach($array as $sub)
                        <li>
                        <a href="{{route('categorydetail.index',$sub->id)}}">{{$sub->title}}
                        </a>
                    </li>
                    @endforeach
                    <li>
                        <a href="{{route('visitor.change')}}">Click to Add More..</a>
                    </li>

                </ul>
            </nav><!-- #nav-menu-container -->
            <div class="navbar-right">
                <form class="Search">
                    <input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
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