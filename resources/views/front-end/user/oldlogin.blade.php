<!DOCTYPE html>
<html lang="zxx" class="no-js">
@include('front-end.includes.head')
<body>

<div class="site-main-container">
    <!-- Start top-post Area -->
    <section class="top-post-area pt-10">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-nav-area">
                        <h1 class="text-white">Login</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-post Area -->
    <!-- Start contact-page Area -->
    <section class="contact-page-area pt-50 pb-120">
        <div class="container">
            <div class="row contact-wrap">
                <form class="m-t" role="form" action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}



                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>



                </form>

            </div>
        </div>
    </section>
    <!-- End contact-page Area -->
</div>

</body>
</html>