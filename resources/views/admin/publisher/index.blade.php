@extends('admin.includes.layout')

@section('title', 'Publisher Management')

@section('content')
{{--PAGE CONTENT BEGIN--}}




<div class="col-lg-14">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h3>Publisher List</h3>
        </div>

    <div class="ibox-content">

        <table class="table table-bordered">

            <tr>
                <th >S.N</th>
                <th>User Type</th>
                <th >Name</th>
                <th >Email</th>
                <th >Phone</th>
                <th >Address</th>
                <th>Status</th>
                <th>Publisher Status</th>
                <th>Action</th>
            </tr>

            @php($i=1)
            @foreach($user as $u)
                <tr>
                    <td>{{$i++}}</td>
                    <td> {{$u->user_type}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->phone}}</td>
                    <td>{{$u->address}}</td>
                    <td>
                        @if($u->status==1)
                            <p class=" btn-info">Active</p>
                        @else
                            <p class=" btn-warning">De Active</p>
                        @endif
                    </td>

                    <td>
                            @if($u->publisher_status==1)
                                    <p class=" btn-info ">Active</p>
                                @else
                            <p class=" btn-warning">De Active</p>
                        @endif

                    </td>

                    <td>
                        @if($u->user_type=='Publisher'&& $u->status=='0')
                            <a href="{{route('admin.publisher.edit',$u->verification_key)}}" class="btn btn-warning">Verify</a>
                        @else
                            <p class="btn-success">Verified</p>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    </div>
</div>




{{--PAGE CONTENT END--}}
@endsection





