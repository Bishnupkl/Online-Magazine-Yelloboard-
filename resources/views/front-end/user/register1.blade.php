@extends('admin.includes.layout')

@section('title', 'User Create')

@section('content')
    {{--PAGE CONTENT BEGIN--}}



    <div class="col-lg-14">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h3>Register here</h3>
            </div>
            <div class="ibox-content">
                <div class="row">

                    {!! Form::open([
                    'url' => route('customer.register'),
                    'enctype' => 'multipart/form-data',
                    ]) !!}


                    <div class="form-group">
                        <label>Name</label>
                        {!! Form::text('name', null, [
                            'placeholder' => 'Enter New User Name',
                            'class' => 'form-control',
                            ]) !!}
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        {!! Form::text('email', null, [
                            'placeholder' => 'Enter email',
                            'class' => 'form-control',
                            ]) !!}
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        {!! Form::password('password', [
                        'placeholder' => 'Enter password',
                        'class' => 'form-control',
                        ]) !!}
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        {!! Form::number('phone', null, [
                            'placeholder' => 'Enter phone number',
                            'class' => 'form-control',
                            ]) !!}
                    </div>


                    <div class="form-group">
                        <label>Choose Roles</label>
                        <select class="form-control" name="role_name">
                            <option value="">Select Role</option>
                            @foreach($role as $r)
                                <option value="{{$r->id}}">{{$r->name}}</option>
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