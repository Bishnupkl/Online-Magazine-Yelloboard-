@extends('admin.includes.layout')

@section('title', 'User Create')

@section('content')
{{--PAGE CONTENT BEGIN--}}



    <div class="col-lg-14">
        <div class="ibox float-e-margins">
            <div class="ibox-title" style="background: #7a43b6">
                <h3 style="color: #ffffff">Create User</h3>
            </div>
            <div class="ibox-content" style="background: #a0a6ad">
                <div class="row">

                        {!! Form::open([
                        'url' => route('admin.user.store'),
                        'enctype' => 'multipart/form-data',
                        ]) !!}


                        <div class="form-group">
                            <label class="white-text">Name</label>
                            {!! Form::text('name', null, [
                                'placeholder' => 'Enter New User Name',
                                'class' => 'form-control input-border',
                                ]) !!}
                        </div>

                        <div class="form-group">
                            <label class="white-text">Email</label>
                            {!! Form::text('email', null, [
                                'placeholder' => 'Enter email',
                                'class' => 'form-control input-border',
                                ]) !!}
                        </div>

                        <div class="form-group">
                            <label class="white-text">Password</label>
                            {!! Form::password('password', [
                            'placeholder' => 'Enter password',
                            'class' => 'form-control input-border',
                            ]) !!}
                        </div>


                        <div class="form-group">
                            <label class="white-text">Choose Roles</label>
                            <select class="form-control input-border" name="role_name">
                                <option value="">Select Role</option>
                                @foreach($roles as $r)
                                    <option value="{{$r->name}}">{{$r->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div>
                            {!! Form::submit('Create New User', [
                            'class' => 'btn btn-bg btn-primary pull-center',
                            ]) !!}
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>





{{--PAGE CONTENT END--}}
@endsection