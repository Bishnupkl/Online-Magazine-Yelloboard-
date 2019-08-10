

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


                        <div class="navbar" style="background-color: #f6214b; alignment: center">
                            <h3 class="text-white">New to Yello Board? </h3>

                            {{--<a class="a primary-btn primary" href="{{route('publisherRegister.create')}}">Sign up</a>--}}
                            <a class="a primary-btn primary" href="{{route('user.register')}}">Sign up</a>
                            {{--<a class="a primary-btn primary" href="{{route('front.user.signup')}}">Sign up</a>--}}
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>

                <div class="row"  >
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <section class="contact-page-area pt-10 pb-120">
                            <div class="container"  >

                                <div class=" row contact-wrap" >

                                    <div class="col-lg-12">

                                        @if(session('status'))
                                            <h6 class="alert alert-success">
                                                {{session('status')}}
                                            </h6>
                                        @endif


                                        <h1 style="text-align: center">Experience YelloBoard</h1><br>
                                        <p style="text-align: center;font-size: larger"><strong>Sign up to see trustworthy stories for any interest
                                            </strong></p><br>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="btn btn-info" style="width: 100%;height: 40px;font-size: large">Facebook</a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#" class="btn btn-info" style="width: 100%;height: 40px;font-size: large" >Twiter</a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#" class="btn btn-info" style="width: 100%;height: 40px;font-size: large" >Gmail</a>
                                            </div>
                                        </div>
                                        <br>


                                        <p style="text-align: center; color: black">or via email</p><br>

                                        {{--old send at== customer.login--}}
                                        {{--next front.user.login--}}

                                        {!! Form::open([
                                              'url' => route('user.login'),
                                                 'method'=>'post',
                                                 'class'=>'form-area contact-form text-right',
                                                  'id'=>'myForm',

                                                         ]) !!}
                                        <div class="row">
                                            <div class="col-lg-12 input-container {{$errors->has('email') ? 'has-error': ''}}">
                                                <i class="fa fa-envelope icon"></i>
                                                {!! Form::email('email', null, [
                                               'placeholder' => 'Enter email',
                                               'class' => 'input-field common-input mb-20 form-control',
                                               'pattern'=>'[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$',
                                               'onfocus'=>"this.placeholder = '' ",
                                               'onblur'=>"this.placeholder = 'Enter email address'",
                                                'required'=>''
                                               ]) !!}
                                                @if($errors->has('email'))
                                                    <span class="help-block">{{$errors->first('email')}}</span>
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

                                            <div class="col-lg-12">


                                                {!! Form::button('Login', [
                                    'class' => 'primary-btn primary',
                                     'style'=>'float: left;width:100%;',
                                     'type'=>'submit'
                                    ]) !!}

                                            </div>


                                        </div>


                                        {!! Form::close() !!}
                                        <div class="col-sm-12">
                                            <p class="text-center"><a href="{{route('user.password.request')}}"><strong>Forget username or password?</strong></a></p>
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