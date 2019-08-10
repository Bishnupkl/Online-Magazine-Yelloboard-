<!-- Mainly scripts -->
<script src="{{asset('assets/front-end/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('assets/front-end/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front-end/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('assets/front-end/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('assets/front-end/js/inspinia.js')}}"></script>
<script src="{{asset('assets/front-end/js/plugins/pace/pace.min.js')}}"></script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'ckeditor' );
</script>

@yield('js')
