<!DOCTYPE html>
<html>
<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:14:14 GMT -->
@include('front-end.includes.head')

<body class="">
<div id="wrapper">

    <div id="page-wrapper" class="gray-bg">
        @include('front-end.includes.header')

        @yield('content')

        @include('front-end.includes.footer')

        @yield('js')

    </div>
</div>

@include('front-end.includes.script')
</body>
<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:14:14 GMT -->
</html>
