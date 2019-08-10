@extends('front-end.includes.layoutforlogin')

<style>

    .input-container {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        width: 100%;
        height: 34px;
        margin-bottom: 15px;
    }

    .icon {
        padding: 10px;
        background: #f4425f;
        color: white;
        text-align: center;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        outline: none;
    }

    .input-field:focus {
        border: 2px solid dodgerblue;
    }
</style>
@section('content')

    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-40">
            <div class="container no-padding" >
                <div class="row"  >
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <section class="contact-page-area pt-10 pb-120">
                            <div class="container"  >

                                <div class=" row contact-wrap" >

                                    <div class="col-lg-12">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a href="{{route('user.publisher-register')}}" class="btn btn-primary" style="width: 60%;height: 40px;font-size: large;float: right">Publisher Sign-Up</a>
                                            </div>
                                            <div class="col-lg-6">

                                                {{--<a href="{{route('front.user.showLogin')}}" class="btn btn-primary" style="width: 40%;height: 40px;font-size: large" >Sign In</a>--}}
                                                <a href="{{route('user.login')}}" class="btn btn-primary" style="width: 40%;height: 40px;font-size: large" >Sign In</a>
                                                {{--<a href="{{route('publisherRegister.login')}}" class="btn btn-primary" style="width: 40%;height: 40px;font-size: large" >Sign In</a>--}}
                                            </div>
                                        </div>
                                        <br>
                                        <h1 style="text-align: center">Join YelloBoard</h1><br>
                                        <p style="text-align: center;font-size: larger"><strong>Sign up to see trustworthy stories for any interest
                                            </strong></p><br>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a href="#" class="btn btn-info" style="width: 100%;height: 40px;font-size: large">Sign up with Facebook</a>
                                            </div>

                                        </div>
                                        <br>


                                        <p style="text-align: center; color: black">or via email</p><br>

                                        {!! Form::open([
                                                'url' => route('user.data.register'),
                                                 'method'=>'post',
                                                 'class'=>'form-area contact-form text-right',
                                                  'id'=>'myForm',

                                                         ]) !!}

                                        <div class="row">
                                            <div class="col-lg-12 input-container {{$errors->has('name') ? 'has-error': ''}} ">
                                                <i class="fa fa-user icon"></i>
                                                {!! Form::text('name', null, [
                                                    'placeholder' => 'Enter name',
                                                    'class' => 'input-field common-input mb-20 form-control',
                                                    ]) !!}
                                                @if($errors->has('name'))
                                                    <span class="help-block">{{$errors->first('name')}}</span>
                                                @endif
                                            </div>



                                            <div class="col-lg-12 input-container {{$errors->has('email') ? 'has-error': ''}}">
                                                <i class="fa fa-envelope icon"></i>
                                                {!! Form::email('email', null, [
                                               'placeholder' => 'Enter email',
                                               'class' => 'input-field common-input mb-20 form-control',
                                               'pattern'=>'[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$',
                                               'onfocus'=>"this.placeholder = '' ",
                                               'onblur'=>"this.placeholder = 'Enter email address'",

                                               ]) !!}
                                                @if($errors->has('email'))
                                                    <span class="help-block" style="font-size: 2em">*</span>
                                                @endif
                                            </div>


                                            <div class="col-lg-12 input-container {{$errors->has('password') ? 'has-error': ''}}">
                                                <i class="fa fa-key icon"></i>
                                                {!! Form::password('password', [
                                                    'placeholder' => 'Enter password',
                                                    'class' => 'input-field common-input mb-20 form-control',
                                                    ]) !!}
                                                @if($errors->has('password'))
                                                    <span class="help-block">{{$errors->first('password')}}</span>
                                                @endif
                                            </div>

                                            <div class="col-lg-12 input-container {{$errors->has('password_conform') ? 'has-error': ''}}">
                                                <i class="fa fa-key icon"></i>
                                                {!! Form::password('password_conform', [
                                                         'placeholder' => 'Re-type password',
                                                          'class' => 'input-field common-input mb-20 form-control',
                                                               ]) !!}
                                                @if($errors->has('password_conform'))
                                                    <span class="help-block">{{$errors->first('password_conform')}}</span>
                                                @endif

                                            </div>

                                            <div class="col-lg-12 input-container {{$errors->has('phone') ? 'has-error': ''}}">
                                                <i class="fa fa-phone icon"> </i>
                                                {!! Form::number('phone', null, [
                                                    'placeholder' => 'Enter phone number',
                                                    'class' => 'input-field common-input mb-20 form-control',
                                                    ]) !!}
                                                @if($errors->has('phone'))
                                                    <span class="help-block">{{$errors->first('phone')}}</span>
                                                @endif
                                            </div>

                                            <div class="col-lg-12 input-container {{$errors->has('address') ? 'has-error': ''}}">
                                                <i class="fa fa-map-marker icon"></i>
                                                {!! Form::text('address', null, [
                                                        'placeholder' => 'Enter address',
                                                        'class' => 'input-field common-input mb-20 form-control',
                                                        ]) !!}
                                                @if($errors->has('address'))
                                                    <span class="help-block">{{$errors->first('address')}}</span>
                                                @endif
                                            </div>

                                            <div class="col-lg-12">


                                                {!! Form::button('Register', [
                                    'class' => 'primary-btn primary',
                                     'style'=>'float: left;width:100%;',
                                     'type'=>'submit'
                                    ]) !!}

                                            </div>


                                        </div>


                                        {!! Form::close() !!}
                                        <div class="col-sm-12">
                                            <p class="text-center">By continuing, you accept the&nbsp;<a href="#">Terms of Use and Privacy Policy.</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>

                </div>

            </div>
        </section>


    </div>

@endsection

