
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        .body{
            background-color :#cec6c7;
        }

        .input-container {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }



        .icon {
            padding: 10px;
            background: #f4425f;
            color: white;
            min-width: 50px;
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

        /* Set a style for the submit button */
        .btn {
            background-color: #f4425f;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }

        #register_form{
            text-align: center;
            color: #f4425f;
            padding-top: 50px;
            margin-bottom: 40px;
        }

        .btn1 {
            background-color: #0b2f56;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
        .btn1:hover {
            opacity: 1;
        }

        a{
            text-decoration: none;
            color: #f4425f;
        }
        .two{
            float: left;
        }


    </style>
</head>
<body class="body">

{!! Form::open([
'url' => route('customer.login'),
'enctype' => 'multipart/form-data',
'method'=>'post',
'style'=>"max-width:500px;margin:auto",
]) !!}


<h2 id="register_form">Already Register!!! Login Here!</h2>

<div class="input-container">
    <i class="fa fa-envelope icon"></i>

    {!! Form::text('email', null, [
   'placeholder' => 'Enter email',
   'class' => 'input-field',
   ]) !!}
</div>

<div class="input-container">
    <i class="fa fa-key icon"></i>
    {!! Form::password('password', [
    'placeholder' => 'Enter password',
    'class' => 'input-field',
    ]) !!}
</div>


{!! Form::submit('Login', [
'class' => 'btn',
]) !!}

<div class="input-container">
    <p class=" btn1">Not sign up. <a href="{{route('front.user.signup')}}">Sign up</a></p>
</div>
<div class="input-container">
    <p class="input-field btn1">Want to b a publisher? <a href="{{route('front.user.signup')}}">Sign up as publisher</a></p>
</div>

{!! Form::close() !!}






</body>
</html>






























