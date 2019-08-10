@extends('admin.includes.layout')

@section('title', 'User  Edit')

@section('content')
{{--PAGE CONTENT BEGIN--}}



    <div class="col-lg-14">
        <div class="ibox float-e-margins">
            <div class="ibox-title" style="background: #7a43b6">
                <h3 style="color: #ffffff">User Edit</h3>
            </div>
            <div class="ibox-content" style="background: #a0a6ad">
                <div class="row">

                        {{--<form role="form" class="" action="{{route('admin.user.update',$user->id)}} " method="post">--}}
                            {{--<input type="hidden" name="id" value="{{$user->id}}">--}}
                            {{--{{csrf_field()}}--}}

                            {{--<input type="hidden" name="_method" value="put">--}}

                        {!! Form::open([
                        'url' => route('admin.user.update',$user->id),
                        'enctype' => 'multipart/form-data',
                        ]) !!}


                    <div class="form-group">

                        {!! Form::label('Choose Roles',null,['class'=>'white-text']) !!}
                        {!! Form::select('role_name',

                               $role->pluck('name','id'),null,['class' =>'form-control input-border']);
                                !!}


                    </div>



                            <div class="form-group">
                                {!! Form::submit('Update', [
                                'class' => 'btn btn-bg btn-primary pull-center',
                                ]) !!}
                            </div>



                            <div class="form-group" style="visibility: hidden">
                                <label>Name</label>
                                {!! Form::text('name', $user->name, [
                                    'placeholder' => 'Enter New User Name',
                                    'class' => 'form-control',
                                    ]) !!}
                            </div>

                            <div class="form-group" style="visibility: hidden">
                                <label>Email</label>
                                {!! Form::text('email', $user->email, [
                                    'placeholder' => 'Enter email',
                                    'class' => 'form-control',
                                    ]) !!}
                            </div>

                            {{--<div class="form-group">--}}
                                {{--<label>Password</label>--}}
                                {{--{!! Form::password('password', $user->password, [--}}
                                {{--'placeholder' => 'Enter password',--}}
                                {{--'class' => 'form-control',--}}
                                {{--]) !!}--}}
                            {{--</div>--}}

                        </form>
                        {{--{!! Form::close() !!}--}}

                    </div>
                </div>
            </div>
        </div>




{{--PAGE CONTENT END--}}
@endsection