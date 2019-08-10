<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Yello-Board | Uploader Info Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/rwd.table.min.css'>

    <link rel="stylesheet" href="{{asset('assets/front-end/userinfo/css/style.css')}}">


</head>

<body>
<h2>Uploader Information</h2>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive" data-pattern="priority-columns">
                <table summary="This table shows how to create responsive tables using RWD-Table-Patterns' functionality" class="table table-bordered table-hover">
                    {{--<caption class="text-center">An example of a responsive table based on RWD-Table-Patterns' <a href="http://gergeo.se/RWD-Table-Patterns/" target="_blank"> solution</a>:</caption>--}}
                    <thead>
                    <tr>
                        <th >S.N</th>
                        <th>User Type</th>
                        <th >Name</th>
                        <th >Email</th>
                        <th >Phone</th>
                        <th >Address</th>
                        <th>Status</th>
                        {{--<th>Publisher Status</th>--}}
                        {{--<th>Action</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @if($type=='admin')
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$admin->user_type}}</td>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                            <td>null</td>
                            <td>null</td>
                            <td>
                                @if($admin->status==1)
                                    <p class=" btn-info">Active</p>
                                @else
                                    <p class=" btn-warning">De Active</p>
                                @endif
                            </td>

                            {{--<td>--}}
                            {{--@if($admin->publisher_status==1)--}}
                            {{--<p class=" btn-info ">Active</p>--}}
                            {{--@else--}}
                            {{--<p class=" btn-warning">De Active</p>--}}
                            {{--@endif--}}

                            {{--</td>--}}

                            {{--<td>--}}
                            {{--@if($admin->user_type=='Publisher'&& $admin->status=='0')--}}
                            {{--<a href="{{route('admin.publisher.edit',$admin->verification_key)}}" class="btn btn-warning">Verify</a>--}}
                            {{--@else--}}
                            {{--<p class="btn-success">Verified</p>--}}
                            {{--@endif--}}
                            {{--</td>--}}
                        </tr>

                    @else

                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$visitor->user_type}}</td>
                            <td>{{$visitor->name}}</td>
                            <td>{{$visitor->email}}</td>
                            <td>{{$visitor->phone}}</td>
                            <td>{{$visitor->address}}</td>
                            <td>
                                @if($visitor->status==1)
                                    <p class=" btn-info">Active</p>
                                @else
                                    <p class=" btn-warning">De Active</p>
                                @endif
                            </td>

                            {{--<td>--}}
                            {{--@if($visitor->publisher_status==1)--}}
                            {{--<p class=" btn-info ">Active</p>--}}
                            {{--@else--}}
                            {{--<p class=" btn-warning">De Active</p>--}}
                            {{--@endif--}}

                            {{--</td>--}}

                            {{--<td>--}}
                            {{--@if($visitor->user_type=='Publisher'&& $visitor->status=='0')--}}
                            {{--<a href="{{route('admin.publisher.edit',$visitor->verification_key)}}" class="btn btn-warning">Verify</a>--}}
                            {{--@else--}}
                            {{--<p class="btn-success">Verified</p>--}}
                            {{--@endif--}}
                            {{--</td>--}}
                        </tr>
                    @endif

                    </tbody>
                    {{--<tfoot>--}}
                    {{--<tr>--}}
                    {{--<td colspan="5" class="text-center">Data retrieved from <a href="http://www.infoplease.com/ipa/A0855611.html" target="_blank">infoplease</a> and <a href="http://www.worldometers.info/world-population/population-by-country/" target="_blank">worldometers</a>.</td>--}}
                    {{--</tr>--}}
                    {{--</tfoot>--}}
                </table>
            </div><!--end of .table-responsive-->
        </div>
    </div>
</div>

{{--<p class="p">Demo by George Martsoukos. <a href="http://www.sitepoint.com/responsive-data-tables-comprehensive-list-solutions" target="_blank">See article</a>.</p>--}}
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/rwd-table-patterns.js'></script>

<script src="{{asset('assets/front-end/userinfo/js/index.js')}}"></script>

</body>
</html>
