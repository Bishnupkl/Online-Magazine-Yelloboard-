@extends('layouts.publisher.layout')

@section('title', 'Publisher Dashboard')

@section('content')
    {{--PAGE CONTENT BEGIN--}}




    <div class="col-lg-14">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h3>User List</h3>
            </div>

            <div class="ibox-content">

                <table class="table table-bordered">

                    <tr>
                        <th >S.N</th>
                        <th>User Type</th>
                        <th >Name</th>
                        <th >Email</th>
                        <th >Created_At</th>
                        <th >Updated_At</th>
                        <th>Action</th>
                    </tr>

                    @php($i=1)
                    @foreach($author as $a)
                        <tr>
                            <td>{{$i++}}</td>
                            <td> {{$a->user_type}}</td>
                            <td>{{$a->name}}</td>
                            <td>{{$a->email}}</td>
                            <td>{{$a->created_at}}</td>
                            <td>{{$a->updated_at}}</td>
                            <td>

                                <a href="{{route('publisher.authoredit',$a->id)}}" class="btn btn-warning">Edit Author</a>

                                {{--<form method="post" action="{{route('delete',$m->id)}}">--}}
                                {{--{{csrf_field()}}--}}

                                {{--<input type="hidden" name="_method" value="delete" >--}}
                                {{--<input type="submit" value="Delete" class="btn btn-danger">--}}
                                {{--</form>--}}

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>




    {{--PAGE CONTENT END--}}
@endsection





