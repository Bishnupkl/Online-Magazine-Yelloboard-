@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Publisher Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('message'))
                                <div class="alert alert-success">{{session('message')}}</div>
                        @endif

                    You are logged in as user as publisher!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
