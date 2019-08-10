@extends('admin.includes.layout')

@section('title', 'Category List')

@section('content')
{{--PAGE CONTENT BEGIN--}}

<div class="col-lg-14">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h3>List Category</h3>
        </div>

        @if(count($array['category'])<1)
            <div class="alert alert-danger "><i class="fa fa-exclamation-triangle"></i>
                <span>You do not have any category to show.</span></div>
            <div>
                <a href="{{route('admin.category.create')}}" class="btn btn-info">Add category</a>
            </div>
        @else
            <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>

                            <tr>
                                <th >S.N</th>
                                <th >Title</th>
                                <th >Status</th>
                                <th >Description</th>
                                <th >Image</th>
                                <th >Created_By</th>
                                {{--<th >Updated_By</th>--}}
                                <th>Action</th>
                                {{--<th >Created_At</th>--}}
                                {{--<th >Updated_At</th>--}}

                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($array['category'] as $m)
                                <tr>
                                    <td>{{$i++}}</td>

                                    <td>{{$m->title}}</td>
                                    <td>
                                        @if($m->status != 0)
                                            <p class="btn-info">Active</p>
                                        @else
                                            <p class="btn-warning">De-Active</p>
                                        @endif
                                    </td>
                                    <td>{!! $m->description !!}</td>


                                    <td> <img src="{{asset('assets/admin/img/'.$m->image)}}"
                                              width="200px" height="100px"> </td>

                                    <td>{{App\User::find($m->created_by)->name}}</td>
                                    {{--<td>{{App\User::find( $m->updated_by)->name}}</td>--}}
                                    <td>
                                        <a href="{{route('admin.category.edit',$m->id)}}" class="btn btn-warning">Edit</a>
                                        <form method="post" action="{{route('admin.category.delete',$m->id)}}">
                                            {{csrf_field()}}

                                            <input type="hidden" name="_method" value="delete" >
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </td>
                                    {{--<td>{{$m->created_at}}</td>--}}
                                    {{--<td>{{$m->updated_at}}</td>--}}

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
    </div>

</div>






{{--PAGE CONTENT END--}}
@endsection
