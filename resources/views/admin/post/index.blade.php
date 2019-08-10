@extends('admin.includes.layout')

@section('title', 'Post List')

@section('content')
{{--PAGE CONTENT BEGIN--}}



<div class="col-lg-14">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h3>List Post</h3>
        </div>

        @if(count($post)<1)
            <div class="alert alert-danger "><i class="fa fa-exclamation-triangle"></i>
                <span>You do not have any post to show.</span></div>
            <div>
                <a href="{{route('admin.post.create')}}" class="btn btn-info">Add post</a>
            </div>
        @else
          <div class="ibox-content">

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th >S.N</th>
                <th>Category</th>
                <th>SubCategory</th>
                <th >Title</th>
                <th >Status</th>
                <th >Sponsored</th>
                {{--<th >Description</th>--}}
                <th >Image</th>
                <th >Created_By</th>
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
                    <td>

                        {{\App\Model\Category::find($m->category_id)->title}}

                    </td>
                    <td>
                        {{\App\Model\Subcategory::find($m->subcategory_id)->title}}
                        {{--@if(\App\Model\Subcategory::find($m->subcategory_id) !== null)--}}
                        {{--{{\App\Model\Subcategory::find($m->subcategory_id)->title}}--}}
                            {{--@else--}}
                            {{--No SubCat--}}
                        {{--@endif--}}
                    </td>
                    <td>{{$m->title}}</td>
                    <td>
                        @if($m->status != 0)
                        Active
                            @else
                        De-Active
                            @endif

                    </td>
                    <td>
                        @if($m->sponsored !=0)
                        Yes
                        @else
                        No
                        @endif

                    </td>

                    <td> <img src="{{asset('assets/admin/img/'.$m->image)}}" width="200px" height="100px"> </td>

                    <td>
                        @if($m->user_id !== 0)
                        {{$m->user->name }}

                        @else
                        {{$m->visitor->name}}

                        @endif
                    </td>

                    <td>
                        @if($m->sponsor_request ==0 && $m->sponsored==0)
                            <p class="btn disabled" style="background: green ; color: white">Waiting for Sponsored</p>
                        @elseif($m->sponsor_request ==1 && $m->sponsored==1)
                            <a href="{{route('admin.post.sponsor',$m->id)}}" class="btn btn-info">Approved for Sponsor</a>
                        @elseif($m->sponsor_request ==0 && $m->sponsored==1)
                            <a href="{{route('admin.post.sponsorCancel',$m->id)}}" class="btn btn-danger">Cancel Sponsored</a>
                        @endif


                        <a href="{{route('admin.post.edit',$m->id)}}" class="btn btn-warning">Edit</a>
                        <form method="post" action="{{route('admin.post.delete',$m->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="delete">
                            <input type="submit" value="Delete" class="btn btn-danger">
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
</div>



{{--PAGE CONTENT END--}}
@endsection
