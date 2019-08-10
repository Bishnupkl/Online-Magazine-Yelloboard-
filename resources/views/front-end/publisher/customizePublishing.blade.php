
@section('content')
    <div class="wrapper wrapper-content animated  ">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h3 class="m-t-none m-b">You can publish your posts below here.</h3>

                    </div>

                    {{--march 5--}}
                    <div class="ibox-content">
                        <div class="row">


                            {!! Form::open([
                                    'route' => 'publisher.storePost',
                                    'method'=>'Post',
                                    'role'=>'form',
                                    'enctype'=>'multipart/form-data'
                                        ]) !!}

                            {{--<div class="form-group {{$errors->has('category_id') ? 'has-error': ''}}">--}}
                            {{--{!! Form::label('category_id','Category') !!}--}}
                            {{--{!! Form::select('category_id',App\Model\Category::pluck('title', 'id'),--}}
                            {{--null, ['class'=>'form-control','placeholder' => 'Choose Category']) !!}--}}
                            {{--@if($errors->has('category_id'))--}}
                            {{--<span class="help-block">{{$errors->first('category_id')}}</span>--}}
                            {{--@endif--}}
                            {{--`</div>--}}


                            <div class="form-group col-lg-6 {{$errors->has('category_id') ? 'has-error': ''}}">
                                {!! Form::label('category_id','Category') !!}
                                {!! Form::select('category_id',$category,
                                null, ['class'=>'form-control','placeholder' => 'Choose Category']) !!}
                                @if($errors->has('category_id'))
                                    <span class="help-block">{{$errors->first('category_id')}}</span>
                                @endif
                            </div>


                            <div class="form-group col-lg-6">
                                <label>Choose Sub Category</label>
                                <select class="form-control" name="sub_category_id" id="sub_category_id">
                                    <option value=" ">Choose Sub Category</option>

                                </select>
                            </div>



                            <div class="form-group {{$errors->has('title') ? 'has-error': ''}}">
                                {!! Form::label('Title',null,['class'=>'white-text']) !!}
                                {!! Form::text('title',null,['class'=>'form-control title input-border','id' => 'title','placeholder'=>'Type your title']) !!}
                                <span id="wordCount1" style="color: red"></span><br/>
                                @if($errors->has('title'))
                                    <span class="help-block">{{$errors->first('title')}}</span>
                                @endif
                            </div>

                            <div class="form-group {{$errors->has('slug') ? 'has-error': ''}}">
                                {!! Form::label('Slug',null,['class'=>'white-text']) !!}
                                {!! Form::text('slug',null,['class'=>'form-control input-border','placeholder'=>'Type your slug. e.g. my-first-name']) !!}

                                @if($errors->has('slug'))
                                    <span class="help-block">{{$errors->first('slug')}}</span>
                                @endif
                            </div>

                            <div class="form-group {{$errors->has('image') ? 'has-error': ''}}">
                                {!! Form::label('Image',null,['class'=>'white-text']) !!}
                                {!! Form::file('image',null,['class'=>'form-control input-border']) !!}

                                @if($errors->has('image'))
                                    <span class="help-block">{{$errors->first('image')}}</span>
                                @endif
                            </div>

                            <div class="form-group {{$errors->has('description') ? 'has-error': ''}}">
                                {!! Form::label('Description',null,['class'=>'white-text']) !!}
                                {!!  Form::textarea('description', null, ['size' => '30x5','class'=>'form-control','id'=>'ckeditor']) !!}
                                @if($errors->has('description'))
                                    <span class="help-block">{{$errors->first('description')}}</span>
                                @endif
                            </div>



                            <div class="form-group {{$errors->has('keywords') ? 'has-error': ''}}">
                                {!! Form::label('Keywords',null,['class'=>'white-text']) !!}
                                {!! Form::textarea('keywords',null,['size'=>'30x3','class'=>'form-control input-border','placeholder'=>'Type keywords seperated with commas']) !!}
                                @if($errors->has('keywords'))
                                    <span class="help-block">{{$errors->first('keywords')}}</span>
                                @endif
                            </div>

                            <div class="form-group {{$errors->has('excerpt') ? 'has-error': ''}}">
                                {!! Form::label('Excerpt',null,['class'=>'white-text']) !!}
                                {!!  Form::textarea('excerpt', null, ['size' => '30x3','class'=>'form-control input-border','id'=>'text','placeholder'=>'Enter excerpt']) !!}
                                <span id="wordCount" style="color: red"></span><br/>
                                @if($errors->has('excerpt'))
                                    <span class="help-block">{{$errors->first('excerpt')}}</span>
                                @endif
                            </div>


<div class="form-group">
    {{ Form::label('URL')}}
    {{ Form::text('url', null, ['class' => 'form-control'])}}
</div>

                            <div class="form-group ">
                                {!! Form::label('Status',null,['class'=>'white-text']) !!}
                                <br>
                                {{Form::radio('status',1)}} Active
                                {{Form::radio('status',0)}} De Active

                            </div>

                            <div class="form-group ">
                                {!! Form::label('sponsored',null,['class'=>'white-text']) !!}
                                <br>
                                {!!Form::radio('sponsored',1)!!}  Yes

                                {!!Form::radio('sponsored',0)!!} No

                            </div>

                            {!! Form::submit('Publish Your News',['class'=>'btn btn-sm btn-primary pull-left m-t-n-xs']) !!}
                            {!! Form::close() !!}


                        </div>

                    </div>

                    </div>
                    {{--dkn--}}


            </div>

        </div>

    </div>

    </div>



@endsection


@section('js')
    <script type="text/javascript">

        $(document).ready(function () {

            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('#category_id').change(function () {
                var id =$(this).val();
               // alert(id);

                $.ajax({


                    url:'/getSubcategories',
                    method:'POST',
                    data:{'id':id},
                    dataType:'text',

                    success:function (resp) {
                        console.log('adsf');
                        //console.log(resp);
                        $('#sub_category_id').empty();
                        $('#sub_category_id').append(resp);


                    }
                });
            });
        });
    </script>


@endsection


