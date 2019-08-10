@extends('front-end.includes.layout')

@section('title','Yello-Board | Home')

@section('content')

    <div class="site-main-container">


        {{--for verification link--}}
        @if(session('success'))
            <div class="alert alert-success">{!! session('success') !!}</div>
                @php
                    session()->flush();
                @endphp
    @endif



        <!-- Start top-post Area -->
        {{ Widget::run('TopNews') }}
        <!-- End top-post Area -->


        <!-- Start latest-post Area -->
        {{ Widget::run('MiddleNews') }}
        <!-- End latest-post Area -->


        <!-- Start popular-post Area -->
        {{ Widget::run('BottomNews') }}
        <!-- End popular-post Area -->


        <!-- Start relavent-story-post Area -->
        {{ Widget::run('FooterNews') }}
        <!-- End relavent-story-post Area -->



    </div>

    <!-- Start recommended news Area -->
    {{ Widget::run('RecommendedNews') }}
    <!-- End recommended news Area -->

    <!-- Start advertisement Area -->
    {{ Widget::run('Advertisement') }}
    <!-- End advertisement Area -->


@endsection