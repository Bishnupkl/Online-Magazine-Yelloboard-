@extends('admin.includes.layout')

@section('title', 'Category Edit')

@section('content')
{{--PAGE CONTENT BEGIN--}}


<div class="col-lg-14">
    <div class="ibox float-e-margins">
        <div class="ibox-title" style="background: #7a43b6">
            <h3 style="color: #ffffff">Edit Category</h3>
        </div>
<div class="ibox-content" style="background: #a0a6ad">
    <div class="row">

            <form role="form" action="{{route('admin.category.update',$category->id)}} " method="post" enctype="multipart/form-data">

                {{csrf_field()}}

                <input type="hidden" name="_method" value="put">



                <div class="form-group">
                    <label class="white-text">Title</label>
                    <input type="text" name="title" value="{{$category->title}}" placeholder="{{$category->title}}" class="form-control input-border">
                </div>

                <div class="form-group">
                    <label for="status" class="white-text">Status</label>
                    <div class="radio">
                    @if($category->status==1)
                        <label>
                        <input type="radio" class="checkbox-inline" name="status" value="1"  id="status" checked >
                        Active

                        <br>

                        <input type="radio" class="checkbox-inline" name="status" value="0"   id="status" >
                        De-Active
                        </label>
                    @else
                        <label>
                        <input type="radio" class="checkbox-inline" name="status" value="1"  id="status" >
                        Active

                        <br>

                        <input type="radio" class="checkbox-inline" name="status" value="0" checked  id="status" >
                        De-Active
                        </label>
                    @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="white-text">Description</label>
                    <textarea name="description" id="ckeditor" class="form-control input-border">
                        {{$category->description}}
                    </textarea>
                </div>

                <div class="form-group">
                    <label class="white-text">Image</label>
                    <input type="file" name="image" class="form-control input-border"> {{$category->image}}
                </div>

                <div  class="form-group">
                    <button class="btn btn-bg btn-primary pull-center" type="submit"><strong>Update Category</strong></button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
</div>




{{--PAGE CONTENT END--}}
@endsection