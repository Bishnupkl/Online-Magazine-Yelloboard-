
@if(Session::has('message'))
    <p class="alert alert-info" style="font-size: larger; color: #7a43b6; text-align: center">{{ Session::get('message')  }}{{Auth::guard('visitor')->user()->user_type}}</p>
@endif

@extends('layouts.publisher.layout')

@section('title', 'Publisher Dashboard')



   @section('main_title', 'Edit Posts')
@section('b_title', 'Edit Posts')
@section('content')
    PAGE CONTENT BEGIN

    <div class="col-lg-14">
        <div class="ibox float-e-margins">
            <div class="ibox-title" style="background: #7a43b6">
                <h3 style="color: #ffffff">Edit Post</h3>
            </div>

            <div class="ibox-content" style="background: #a0a6ad">
                <div class="row">

                    <form role="form" action="{{route('publisher_post.update',$posts->id)}}" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="{{$posts->id}}">
                        {{csrf_field()}}

                        <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label class="white-text">Category</label>
                            <select class="form-control input-border"  name="category_id" disabled>
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            </select>
                            {{--<select class="form-control" name="category_id">--}}
                        </div>

                        <div class="form-group">
                            <label class="white-text">Sub Category</label>
                            <select class="form-control input-border"  name="sub_category_id" disabled >

                                <option value="{{$subcategory->id}}">{{$subcategory->title}}</option>
                            </select>

                        </div>


                        <div class="form-group">
                            <label class="white-text">Title</label>
                            <input type="text" name="title" value="{{$posts->title}}" class="form-control input-border">
                        </div>

                        <div class="form-group">
                            <label class="white-text">Slug</label>
                            <input type="text" name="slug" value="{{$posts->slug}}" class="form-control input-border">
                        </div>



                        <div class="form-group">
                            <label for="status" class="white-text">Status</label>
                            <div class="radio">
                                @if($posts->status==1)
                                    <label>
                                        <input type="radio" name="status" value="1" id="status" checked>
                                        Active

                                        <br>

                                        <input type="radio" name="status" value="0"   id="status">
                                        De-Active
                                    </label>

                                @else

                                    <label>
                                        <input type="radio" name="status" value="1"  id="status">
                                        Active

                                        <br>

                                        <input type="radio" name="status" value="0" id="status" checked>
                                        De-Active
                                    </label>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="sponsored" class="white-text">Sponsored</label>
                            <div class="radio">
                                @if($posts->sponsored==1)
                                    <label>
                                        <input type="radio" name="sponsored" value="1" id="sponsored" checked>
                                        Active

                                        <br>

                                        <input type="radio" name="sponsored" value="0"   id="sponsored">
                                        De-Active
                                    </label>

                                @else

                                    <label>
                                        <input type="radio" name="sponsored" value="1"  id="sponsored">
                                        Active

                                        <br>

                                        <input type="radio" name="sponsored" value="0" id="sponsored" checked>
                                        De-Active
                                    </label>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="white-text">Description</label>
                            <textarea name="description" id="ckeditor" class="form-control input-border" id="description">{{$posts->description}}</textarea>
                        </div>


                        <div class="form-group">
                            <label class="white-text">Keywords</label>
                            <input type="text" name="keywords" value="{{$posts->keywords}}" class="form-control input-border">
                        </div>


                        <div class="form-group">
                            <label class="white-text">Excerpt</label>
                            <input type="text" name="excerpt" value="{{$posts->excerpt}}" class="form-control input-border">
                        </div>



                        <div class="form-group">
                            <label class="white-text">Image</label>
                            <input type="file" name="image"  class="form-control input-border"> {{$posts->image}}
                        </div>

                        <div>
                            <button class="btn btn-bg btn-primary pull-center" type="submit"><strong>Update Post</strong></button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

    PAGE CONTENT END
@endsection









