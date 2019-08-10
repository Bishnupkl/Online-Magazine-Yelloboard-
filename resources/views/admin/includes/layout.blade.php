<!DOCTYPE html>
<html>
<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:14:14 GMT -->
@include('admin.includes.head')
<body class="">
<div id="wrapper">
    @include('admin.includes.sidebar')
    <div id="page-wrapper" class="gray-bg">
        @include('admin.includes.header')
        @include('admin.includes.breadcrumb')
        @yield('content')
        {{--@include('admin.includes.footer')--}}
    </div>
</div>
@include('admin.includes.script')
</body>
<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2015 13:14:14 GMT -->
</html>

