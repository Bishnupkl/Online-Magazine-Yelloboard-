@extends('admin.includes.layout')

@section('title', 'Breaking News')

@section('content')
{{--PAGE CONTENT BEGIN--}}



<div class="col-lg-14">
    <div class="ibox float-e-margins">
        <div class="ibox-title" style="background: #7a43b6">
            <h3 style="color: #f0fff0">Breaking News</h3>
        </div>

<div class="ibox-content" style="background: #a0a6ad">
    <div class="row">

            <form role="form" action="{{route('admin.bnews.store')}} " method="post" enctype="multipart/form-data">

                {{csrf_field()}}


                <div class="form-group">
                    <label style="color: #f0fff0">Breaking News</label>
                    <input type="text" style="border:1px solid #0b0b0b" name="bnews" placeholder="Enter Breaking News Here" class="form-control">
                </div>


                <div class="form-group">
                    <label for="status" style="color: #f0fff0">Status </label>
                    <br>
                    <input type="radio" class="checkbox-inline" name="status" value="1"  id="status" >
                    Active

                    <br>

                    <input type="radio" class="checkbox-inline" name="status" value="0" checked  id="status" >
                    De-Active
                </div>


                <div>
                    <button class="btn btn-bg btn-primary pull-center" type="submit"><strong>Update</strong></button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
</div>




{{--PAGE CONTENT END--}}
@endsection