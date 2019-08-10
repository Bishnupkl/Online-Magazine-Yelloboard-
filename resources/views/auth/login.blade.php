<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:12:22 GMT -->
<head>

    <title>Yello Board | Login</title>
    @extends('admin.includes.head')

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">Y-B</h1>

        </div>
        <h3>Welcome to Backend Login Page</h3>

        <p>Log In to Access Backend</p>
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

            <button type="submit" class="btn btn-danger full-width m-b">Log In</button>

        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('assets/admin/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:12:22 GMT -->
</html>
