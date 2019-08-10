<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>@yield('main_title')</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('publisher.dashboard')}}">Home</a>
            </li>
            <li {!! request()->is('publisher_dashboard')?'class="active"':'','style="color:green"'!!}>
                <strong>@yield('b_title')</strong>
            </li>
        </ol>
    </div>

    {{--<div class="col-sm-8">--}}
        {{--<div class="title-action">--}}
            {{--<a href="#" class="btn btn-primary">This is action area</a>--}}
        {{--</div>--}}
    {{--</div>--}}

</div>