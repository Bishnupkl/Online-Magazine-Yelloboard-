@extends('admin.includes.layout')

@section('title', 'Sub Category Create')

@section('content')
    {{--PAGE CONTENT BEGIN--}}


    <div class="col-lg-14">
        <div class="ibox float-e-margins">
            <div class="ibox-title" style="background: #7a43b6">
                <h3 style="color: #ffffff">Create Subcategory</h3>
            </div>

            <div class="ibox-content" style="background: #a0a6ad">
                <div class="row">

                    <form role="form" action="{{route('admin.subcategory.store')}} " method="post" enctype="multipart/form-data">

                        {{csrf_field()}}



                        <div class="form-group">
                            <label class="white-text">Choose Category</label>
                            <select class="form-control input-border" name="category_id">
                                <option value="">Choose Category</option>
                                @foreach($category as $c)
                                    <option value="{{$c->id}}">{{$c->title}}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="form-group">
                            <label class="white-text">Title</label>
                            <input type="text" name="title" placeholder="Enter subcategory title" class="form-control input-border">
                        </div>


                        <div class="form-group">
                            <label for="status" class="white-text">Status </label><br>
                            <input type="radio" class="checkbox-inline" name="status" value="1"  id="status" >
                            Active
                            <input type="radio" class="checkbox-inline" name="status" value="0" checked  id="status" >
                            De-Active
                        </div>


                        <div>
                            <button class="btn btn-bg btn-primary pull-center" type="submit"><strong>Create Subcategory</strong></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>




    {{--PAGE CONTENT END--}}
@endsection