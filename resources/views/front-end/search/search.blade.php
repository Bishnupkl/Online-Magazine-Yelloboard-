@extends('front-end.includes.layout')

@section('title')
    Yello-Board | Search Result
@endsection

@section('content')

    <div class="site-main-container">
        <!-- Start top-post Area -->

        <!-- End top-post Area -->



        <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-12 post-list">
                        <!-- Start latest-post Area -->
                        <div class="latest-post-wrap">
                            {{--<h4 class="cat-title">Latest {{$cat->title}} News</h4>--}}

                            @if(count($posts)>0)

                                @if($query = request('query'))
                                <div class="alert alert-info">
                                    <h3>Search Results For: {{$query}}</h3>
                                </div>
                                @endif

                            @foreach($posts as $p)

                                    <div class="single-latest-post row align-items-center">
                                        <div class="col-lg-5 post-left">
                                            <div class="feature-img relative">
                                                <div class="overlay overlay-bg"></div>
                                                <img class="img-fluid" src="{{asset('assets/admin/img/'.$p->image)}}"  style="height: 207px" >
                                            </div>
                                            <ul class="tags">
                                                <li><a href="{{route('subcategorydetail.index',$p->subcategory->id)}}">{{$p->subcategory->title}}</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-7 post-right">
                                            <a href="{{route('postdetail.index',$p->id)}}">
                                                <h4>{{$p->title}}</h4>
                                            </a>
                                            <ul class="meta">
                                                <li><a href="#"><span class="lnr lnr-user"></span>{{\App\User::find($p->created_by)->name}}</a></li>
                                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$p->created_at}}</a></li>
                                                <li><a href="#"><span class="lnr lnr-eye"></span>{{$p->view_count}}</a></li>
                                                {{--<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>--}}
                                            </ul>
                                            <p class="excert">
                                                {!! str_limit($p->description,100) !!} <a href="{{route('postdetail.index',$p->id)}}">...Read More</a>
                                            </p>
                                        </div>
                                    </div>

                            @endforeach
                                @else
                                <div class="alert alert-info">
                                    <h3 align="center">No Results</h3>
                                </div>


                                @endif


                            {{--Load More--}}

                        </div>
                        <!-- End latest-post Area -->
                    </div>

                </div>
        </section>
        <!-- End latest-post Area -->
    </div>

@endsection