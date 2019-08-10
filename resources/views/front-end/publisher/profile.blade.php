
@if(Session::has('message'))
    <p class="alert alert-info" style="font-size: larger; color: #7a43b6; text-align: center">{{ Session::get('message')}}{{Auth::guard('visitor')->user()->user_type}}</p>
@endif

@extends('layouts.publisher.layout')

@section('title', 'Publisher Dashboard')



@if(request()->is('publisher_dashboard'))
    @section('main_title', 'Publisher Dashboard')
    @section('b_title', 'Publisher Dashboard')
    @section('content')
    PAGE CONTENT BEGIN




    <div class="wrapper wrapper-content">

        <div class="widget navy-bg p-lg text-center">
        <div class="m-b-md">
        <i class="fa fa-bell fa-4x" style="float: left"></i>

        <h1 class="m-xs">47</h1>
        <h3 class="font-bold no-margins">
        Notification
        </h3>

        </div>
        </div>

        <div class="widget style1 navy-bg p-lg">
            <div class="row">
                <div class="col-xs-2">
                    <i class="fa fa-bell fa-5x"></i>
                    <h3>News</h3>
                </div>

                <div class="col-xs-3 ">
                    <i class="fa  fa-5x">10</i>
                    <h3>Link Posts</h3>
                </div>
                <div class="col-xs-3 ">
                    <i class="fa  fa-5x">10</i>
                    <h3>Customize Posts</h3>
                </div>
                <div class="col-xs-4 ">
                    <i class="fa fa-2x">Published By:</i>

                    <h3> Yello board </h3>

                </div>
            </div>
        </div>
    </div>




    PAGE CONTENT END
@endsection

@elseif(request()->is('published_through_link'))
        @section('main_title', 'Published Through link')
        @section('b_title', 'Published Through Link')
        @section('content')
        <div class="wrapper wrapper-content">

            <div class="row" ng-app="MyApp" ng-controller="MyController">
                <div class="col-md-12 demo-github text-center">
                    <iframe src="https://ghbtns.com/github-btn.html?user=leonardocardoso&repo=link-preview&type=watch&count=true"
                            frameborder="0"
                            scrolling="0" width="170px" height="20px"></iframe>
                    <iframe src="https://ghbtns.com/github-btn.html?user=leonardocardoso&repo=link-preview&type=fork&count=true"
                            frameborder="0"
                            scrolling="0" width="170px" height="20px"></iframe>

                </div>

                <div class="col-sm-4 demo-col-padding">
                    <link-preview
                            tpage="%N ➜ %N"
                            btext="Post This Preview"
                            type="top"
                            cbtext="Go Back"
                            iamount="10"/>
                </div>
                <div class="col-sm-4 demo-col-padding">
                    <link-preview
                            placeholder="Placeholder"
                            limage="http://4.bp.blogspot.com/-L2Td-3QtUTo/UcbAvCQTYvI/AAAAAAAAAUM/Z4_GBilAu9g/s1600/spinner_64_3f4fa14117c586c002a98cd7c5fbb2d3.gif"
                            btext="Submit"
                            ltext=""
                            ttext=""
                            bclass="default"/>
                </div>
                <div class="col-sm-4 demo-col-padding">
                    <link-preview placeholder="What's in your mind?"
                                  type="left"
                                  limage="demo/img/loader.gif"
                                  bclass="success"/>
                </div>

                <!-- -->
                <div class="col-sm-4 demo-col-padding">
                </div>
                <!-- From Database -->
                <div class="col-sm-4 demo-col-padding">

                    <?php include public_path()."/assets/publisher/database-template.php"; ?>
                </div>
                <div class="col-sm-4 demo-col-padding">
                </div>


            </div>

        </div>


@endsection

@elseif(request()->is('customize_publishing'))
    @section('main_title', 'Customize Publishing')
@section('b_title', 'Customize Publishing')

{{--march 5--}}
@include('front-end.publisher.customizePublishing')
{{--shajdghfa--}}





@elseif(request()->is('publisher_posts_show'))
    @section('main_title', 'All Posts')
@section('b_title', 'Posts list')
@section('content')
    PAGE CONTENT BEGIN

    <div class="wrapper wrapper-content">

        @if(session('message'))
            <div class="alert alert-info"><i class="fa fa-check-square"></i><span>&nbsp;{{session('message')}}</span></div>
        @endif


        @if(count($post)<1)
            <div class="alert alert-danger "><i class="fa fa-exclamation-triangle"></i>
                <span>You do not have any post to show.</span></div>
            <div>
                <a href="{{route('publisher.publishing')}}" class="btn btn-info">Add New Post</a>
            </div>
        @else
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>

                        <tr>
                            <th >S.N</th>
                            <th >Title</th>
                            <th>Category ID</th>
                            <th >Status</th>
                            <th >Description</th>
                            {{--<th >Image</th>--}}
                            {{--<th >Created_By</th>--}}
                            {{--<th >Updated_By</th>--}}
                            <th>Action</th>
                            <th >Created_At</th>
                            <th >Updated_At</th>

                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)

                        @foreach($post as $m)
                            <tr>
                                <td>{{$i++}}</td>

                                <td>{{$m->title}}</td>
                                <td>{{\App\Model\Category::find($m->category_id)->title}}</td>

                                <td>
                                @if($m->status==1)
                                    <p class="btn-info">Active</p>
                                    @else
                                        <p class="btn-warning">De-Active</p>
                                    @endif

                                </td>
                                <td>{!! $m->description !!}</td>


                                {{--<td> <img src="{{asset('assets/admin/img/'.$m->image)}}"--}}
                                          {{--width="200px" height="100px"> </td>--}}

                                {{--<td>{{App\Visitor::find($m->created_by)->name}}</td>--}}
                                {{--<td>{{App\Visitor::find( $m->updated_by)->name}}</td>--}}
                                <td>
                                    {{-- for checking sponsored request   --}}
                                    @if($m->sponsor_request ==0 && $m->sponsored==0)
                                        <a href="{{route('publisher.post.sponsor',$m->id)}}" class="btn btn-info">Sponsor Now</a>
                                    @elseif($m->sponsor_request ==1 && $m->sponsored==1)
                                        <p class="btn disabled" style="background: green ; color: white">Request for Sponsor</p>
                                    @elseif($m->sponsor_request ==0 && $m->sponsored==1)
                                        <p class="btn disabled" style="background: green ; color: white ">Sponsored</p>
                                    @endif

                                    <a href="{{route('publisher_post.edit',$m->id)}}" class="btn btn-warning">Edit</a>

                                    <form method="post" action="{{route('publisher_post.delete',$m->id)}}">
                                        {{csrf_field()}}

                                        <input type="hidden" name="_method" value="delete" >
                                        <input type="submit" value="Delete" class="btn btn-danger">

                                        {{--@if($m->sponsor_request ==0 && $m->sponsored==1)--}}
                                            {{--<a href="{{route('publisher.post.sponsorCancel',$m->id)}}" class="btn btn-danger">Cancel Sponsored</a>--}}
                                            {{--<a href="{{route('admin.post.sponsorCancel',$m->id)}}" class="btn btn-danger">Cancel Sponsored</a>--}}
                                        {{--@endif--}}

                                    </form>


                                </td>
                                <td>{{$m->created_at}}</td>
                                <td>{{$m->updated_at}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
    PAGE CONTENT END
@endsection





{{--sijflkasj--}}

@elseif(request()->is('publisher_post.edit'))
    @section('main_title', 'All Posts')
@section('b_title', 'Posts list')
@section('content')
    PAGE CONTENT BEGIN

    <div class="wrapper wrapper-content">

        @if(session('message'))
            <div class="alert alert-info"><i class="fa fa-check-square"></i><span>&nbsp;{{session('message')}}</span></div>
        @endif


        @if(count($post)<1)
            <div class="alert alert-danger "><i class="fa fa-exclamation-triangle"></i>
                <span>You do not have any post to show.</span></div>
            <div>
                <a href="{{route('publisher.publishing')}}" class="btn btn-info">Add New Post</a>
            </div>
        @else
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>

                        <tr>
                            <th >S.N</th>
                            <th >Title</th>
                            <th>Category ID</th>
                            <th >Status</th>
                            <th >Description</th>
                            {{--<th >Image</th>--}}
                            {{--<th >Created_By</th>--}}
                            {{--<th >Updated_By</th>--}}
                            <th>Action</th>
                            <th >Created_At</th>
                            <th >Updated_At</th>

                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)

                        @foreach($post as $m)
                            <tr>
                                <td>{{$i++}}</td>

                                <td>{{$m->title}}</td>
                                <td>{{\App\Model\Category::find($m->category_id)->title}}</td>

                                <td>
                                    @if($m->status==1)
                                        <p class="btn-info">Active</p>
                                    @else
                                        <p class="btn-warning">De-Active</p>
                                    @endif

                                </td>
                                <td>{!! $m->description !!}</td>


                                {{--<td> <img src="{{asset('assets/admin/img/'.$m->image)}}"--}}
                                {{--width="200px" height="100px"> </td>--}}

                                {{--<td>{{App\Visitor::find($m->created_by)->name}}</td>--}}
                                {{--<td>{{App\Visitor::find( $m->updated_by)->name}}</td>--}}
                                <td>
                                    {{-- for checking sponsored request   --}}
                                    @if($m->sponsor_request ==0 && $m->sponsored==0)
                                        <a href="{{route('publisher.post.sponsor',$m->id)}}" class="btn btn-info">Sponsor Now</a>
                                    @elseif($m->sponsor_request ==1 && $m->sponsored==1)
                                        <p class="btn disabled" style="background: green ; color: white">Request for Sponsor</p>
                                    @elseif($m->sponsor_request ==0 && $m->sponsored==1)
                                        <p class="btn disabled" style="background: green ; color: white ">Sponsored</p>
                                    @endif

                                    <a href="{{route('publisher_post.edit',$m->id)}}" class="btn btn-warning">Edit</a>
                                    {{--<form method="post" action="#">--}}
                                    {{--{{csrf_field()}}--}}

                                    {{--<input type="hidden" name="_method" value="delete" >--}}
                                    {{--<input type="submit" value="Delete" class="btn btn-danger">--}}

                                    {{--@if($m->sponsor_request ==0 && $m->sponsored==1)--}}
                                    {{--<a href="{{route('publisher.post.sponsorCancel',$m->id)}}" class="btn btn-danger">Cancel Sponsored</a>--}}
                                    {{--<a href="{{route('admin.post.sponsorCancel',$m->id)}}" class="btn btn-danger">Cancel Sponsored</a>--}}
                                    {{--@endif--}}
                                    {{--</form>--}}


                                </td>
                                <td>{{$m->created_at}}</td>
                                <td>{{$m->updated_at}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
    PAGE CONTENT END
@endsection


{{--sjdflksa--}}







@elseif(request()->is('publisher_posts_recent'))
    @section('main_title', 'Recent Posts')
@section('b_title', 'Recent Posts list')
@section('content')
    PAGE CONTENT BEGIN

    <div class="wrapper wrapper-content">

        @if(session('message'))
            <div class="alert alert-info"><i class="fa fa-check-square"></i><span>&nbsp;{{session('message')}}</span></div>
        @endif


        @if(count($post)<1)
            <div class="alert alert-danger "><i class="fa fa-exclamation-triangle"></i>
                <span>You do not have any post to show.</span></div>
            <div>
                <a href="{{route('publisher.publishing')}}" class="btn btn-info">Add post</a>
            </div>
        @else
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>

                        <tr>
                            <th >S.N</th>
                            <th >Title</th>
                            <th>Category ID</th>
                            <th >Status</th>
                            {{--<th >Description</th>--}}
                            <th >Image</th>
                            <th >Created_By</th>
                            <th >Updated_By</th>
                            <th >Created_At</th>
                            <th >Updated_At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($post as $m)
                            <tr>
                                <td>{{$i++}}</td>

                                <td>{{$m->title}}</td>
                                <td>{{\App\Model\Category::find($m->category_id)->title}}</td>

                                <td>
                                    @if($m->status==1)
                                        <p class="btn-info">Active</p>
                                    @else
                                        <p class="btn-warning">De-Active</p>
                                    @endif

                                </td>
                                {{--<td>{{$m->description}}</td>--}}


                                <td> <img src="{{asset('assets/admin/img/'.$m->image)}}"
                                          width="200px" height="100px"> </td>



                                {{--<td>{{App\Visitor::find($m->created_by)->name}}</td>--}}
                                {{--<td>{{App\Visitor::find( $m->updated_by)->name}}</td>--}}
                                <td>{{$m->created_at}}</td>
                                <td>{{$m->updated_at}}</td>
                                <td>

                                    <a href="#" class="btn btn-warning">Edit</a>

                                    <form method="post" action="#">
                                        {{csrf_field()}}

                                        <input type="hidden" name="_method" value="delete" >
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
    PAGE CONTENT END


@endsection



{{--======================================================================================--}}
{{--profile start--}}

@elseif(request()->is('myprofile'))
    @section('main_title', 'User Profile')
@section('b_title', 'Profile')
@section('content')
    PAGE CONTENT BEGIN

    <div class="col-lg-14">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h3>My Profile</h3>
            </div>

            <div class="ibox-content">

                <table class="table table-bordered">

                    <tr>
                        <th>S.N</th>
                        <th>User Type</th>
                        <th >User Name</th>
                        <th >Email</th>
                        <th >Phone</th>
                        <th >Address</th>
                        {{--<th >Created_At</th>--}}
                        {{--<th >Updated_At</th>--}}
                        <th>Action</th>
                    </tr>

                    @php($i=1)
                    {{--@foreach($a as $u)--}}
                        <tr>
                            <td>{{$i++}}</td>
                            <td> {{$myprofile->user_type}}</td>
                            <td>{{$myprofile->user_name}}</td>
                            <td>{{$myprofile->email}}</td>
                            <td>{{$myprofile->phone}}</td>
                            <td>{{$myprofile->address}}</td>
                            {{--<td>{{$p->created_at}}</td>--}}
                            {{--<td>{{$p->updated_at}}</td>--}}
                            <td>

                                <a href="{{route('myprofile.edit',$myprofile->id)}}" class="btn btn-warning">Edit My Profile</a>

                                {{--<form method="post" action="{{route('delete',$p->id)}}">--}}
                                {{--{{csrf_field()}}--}}

                                {{--<input type="hidden" name="_method" value="delete" >--}}
                                {{--<input type="submit" value="Delete" class="btn btn-danger">--}}
                                {{--</form>--}}

                            </td>
                        </tr>
                    {{--@endforeach--}}
                </table>
            </div>
        </div>
    </div>

    PAGE CONTENT END


@endsection

{{--profile end--}}
{{--======================================================================================--}}
@endif







