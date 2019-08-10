
<!-- Mainly scripts -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.js" type="text/javascript"></script>
{{--<script src="{{asset('assets/publisher/js/jquery-2.1.1.js')}}"></script>--}}
<script src="{{asset('assets/publisher/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/publisher/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('assets/publisher/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('assets/publisher/js/inspinia.js')}}"></script>
<script src="{{asset('assets/publisher/js/plugins/pace/pace.min.js')}}"></script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'ckeditor' );
</script>

{{--sagar vai--}}

{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}

<!--    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js" type="text/javascript"></script>-->

<script src="{{asset('assets/publisher/js/link/app.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/publisher/js/link/controller.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/publisher/js/link/link-preview.js')}}" type="text/javascript"></script>

<!-- Include this script below if you want to retrieve the posts inserted to database -->
<script src="{{asset('assets/publisher/js/link/link-preview-database.js')}}" type="text/javascript"></script>

@yield('js')


