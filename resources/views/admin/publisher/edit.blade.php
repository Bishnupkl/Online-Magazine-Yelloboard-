@extends('layouts.publisher.layout')

@section('title', 'Profile Edit')

@section('content')
    {{--PAGE CONTENT BEGIN--}}


    <div class="ibox-title col-lg-14 text-center" style="background: #7a43b6">
        <h3 style="color: #ffffff">Edit Profile</h3>
    </div>

    <div class="col-lg-7" style="position: relative; left: 15em">
        <div class="ibox float-e-margins">


            <div class="ibox-content" style="background: #ffffff">
                <div class="row">


                    {!! Form::model($myprofile,[
                        'url' => route('myprofile.update',$myprofile->id),
                        'enctype' => 'multipart/form-data',
                    ]) !!}



                    <div class="form-group col-lg-6">
                        <label class="white-text">Username</label>
                        {!! Form::text('user_name', null, [
                            'placeholder' => 'Enter Username',
                            'class' => 'form-control input-border',
                            ]) !!}
                    </div>

                    {{--<div class="form-group col-lg-6">--}}
                        {{--<label class="white-text">Email</label>--}}
                        {{--{!! Form::text('email', null, [--}}
                            {{--'placeholder' => 'Enter email',--}}
                            {{--'class' => 'form-control input-border',--}}
                            {{--]) !!}--}}
                    {{--</div>--}}

                    {{--<div class="form-group col-lg-6">--}}
                        {{--<label class="white-text">Password</label>--}}
                        {{--{!! Form::password('password', [--}}
                        {{--'placeholder' => 'Enter password',--}}
                        {{--'class' => 'form-control input-border',--}}
                        {{--]) !!}--}}
                    {{--</div>--}}

                    <div class="form-group col-lg-6">
                        <label class="white-text">Phone</label>
                        {!! Form::number('phone', null, [
                            'placeholder' => 'Enter Phone',
                            'class' => 'form-control input-border',
                            ]) !!}
                    </div>

                    <div class="form-group col-lg-12">
                        <label class="white-text">Address</label>
                        {!! Form::text('address', null, [
                            'placeholder' => 'Enter Address',
                            'class' => 'form-control input-border',
                            ]) !!}
                    </div>




                    {{--<div class="form-group col-lg-12">--}}
                        {{--{!! Form::label('Category',null,['class'=>'white-text']) !!}--}}
                        {{--<br>--}}
                        {{--@foreach($categories as $cat)--}}
                            {{--{{Form::checkbox('category[]',$cat->id)}} {{$cat->title}} &nbsp;&nbsp;--}}
                        {{--@endforeach--}}

                    {{--</div>--}}


                    {{--<div class="form-group col-lg-6">--}}
                        {{--{!! Form::label('Status',null,['class'=>'white-text']) !!}--}}
                        {{--<br>--}}
                        {{--{{Form::radio('status',1)}} Active--}}
                        {{--{{Form::radio('status',0)}} De Active--}}
                    {{--</div>--}}

                    {{--<div class="form-group col-lg-12">--}}
                        {{--{!! Form::label('Publisher Status',null,['class'=>'white-text']) !!}--}}
                        {{--<br>--}}
                        {{--{{Form::radio('pubisherstatus',1)}} Active--}}
                        {{--{{Form::radio('pubisherstatus',0)}} De Active--}}
                    {{--</div>--}}



                    <div>
                        {!! Form::submit('Update My Profile', [
                        'class' => 'btn btn-bg btn-primary pull-center col-lg-12',
                        ]) !!}
                    </div>

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
    </div>




    {{--PAGE CONTENT END--}}
@endsection