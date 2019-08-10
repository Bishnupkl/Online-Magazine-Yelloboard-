@extends('layouts.app1')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Customer Dashboard</div>

                    <div class="panel-body">
                        You are logged in as <strong>Customer</strong>

                        <p>hello sus</p>
                        <ul>
                            @foreach($list as $r)
                            <li>{{$r->title}}</li>
                                @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection