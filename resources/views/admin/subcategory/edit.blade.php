@extends('admin.includes.layout')

@section('title', 'Subcategory Edit')

@section('content')
{{--PAGE CONTENT BEGIN--}}


<div class="col-lg-14">
    <div class="ibox float-e-margins">
        <div class="ibox-title" style="background: #7a43b6">
            <h3 style="color: #ffffff">Edit Subcategory</h3>
        </div>
<div class="ibox-content" style="background: #a0a6ad">
    <div class="row">

            <form role="form" action="{{route('admin.subcategory.update',$subcategory->id)}} " method="post" enctype="multipart/form-data">

                {{csrf_field()}}

                <input type="hidden" name="_method" value="put">



                <div class="form-group">
                    <label class="white-text">Choose Category</label>
                    <select class="form-control input-border"  name="category_id">
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    </select>
                </div>



                <div class="form-group">
                    <label class="white-text">Title</label>
                    <input type="text" name="title" value="{{$subcategory->title}}" placeholder="{{$subcategory->title}}" class="form-control input-border">
                </div>

                <div class="form-group">
                    <label for="status" class="white-text">Status </label><br>

                    @if($subcategory->status==1)
                        <input type="radio" class="checkbox-inline" name="status" value="1"  id="status" checked >
                        Active
                        <input type="radio" class="checkbox-inline" name="status" value="0"   id="status" >
                        De-Active
                    @else
                        <input type="radio" class="checkbox-inline" name="status" value="1"  id="status" >
                        Active
                        <input type="radio" class="checkbox-inline" name="status" value="0" checked  id="status" >
                        De-Active
                    @endif
                </div>


                <div  class="form-group">
                    <button class="btn btn-bg btn-primary pull-center" type="submit"><strong>Update Subcategory</strong></button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
</div>




{{--PAGE CONTENT END--}}
@endsection