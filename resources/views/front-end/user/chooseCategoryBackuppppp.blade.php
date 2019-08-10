
@if(Session::has('message'))
        <p class="alert alert-info">{{Session::get('message')}}</p>
    @endif
@extends('front-end.includes.layoutChoosingCat')

@section('content')


    <div class="site-main-container">

        <section class="contact-page-area pt-50 pb-120">
            <div class="container">
                <div class="row contact-wrap">

                    <div class="col-lg-12">
                        <div class="ibox-content">
                            <div class="row">

                                <div class="col-lg-12 b-r">

                                    <form role="form" method="post" action="{{route('visitor.profile')}}">
                                    {{--<form role="form" method="post" action="{{route('show')}}">--}}
                                        {{csrf_field()}}
                                        {{----}}
                               <div class="row">
                                    @foreach($category as $m)
                                        <div class="align-self-auto" style="line-height: 10px">
                                            <div class="box box-default collapsed-box">
                                                <div class="box-header with-border" style="padding: 10px">
                                                  <button class="btn btn-primary" data-widget="collapse" id="btn_category" value="{{$m->id}}">
                                                        {{$m->title}}
                                                  </button>
                                                </div>
                                                {{--<br>--}}
                                                {{--start test here--}}
                                                <div class="checkboxcontainer">

                                                    {{--march--}}
                                                    @foreach($m->subcategories as $a)
                                                        <ul class="ks-cboxtags">
                                                            <li>
                                                                @if(in_array($a->title,$subList))
                                                                <input type="checkbox" name="sub[]" id="{{$a->id}}" value="{{$a->id}}" checked>
                                                                <label for="{{$a->id}}">{{$a->title}}</label>
                                                                   @else
                                                                    <input type="checkbox" name="sub[]" id="{{$a->id}}" value="{{$a->id}}" >
                                                                    <label for="{{$a->id}}">{{$a->title}}</label>
                                                                @endif
                                                            </li>

                                                        </ul>
                                                    @endforeach
                                                    {{--march--}}
                                                </div>

                                                {{--end test here--}}

                                            </div>
                                                <!-- /.box -->
                                        </div>
                                    @endforeach
                                            <!-- /.col -->
                                            <!-- /.col -->
                                </div>
                                            {{----}}

                                        <div class="form-control-lg">
                                            <button class="btn btn-bg btn-danger pull-center col-lg-12">
                                                Submit
                                            </button>
                                        </div>
                                    </form>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End contact-page Area -->
    </div>


    {{----}}
    <script src="{{asset('assets/front-end/expand_btn/components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->

    <script src="{{asset('assets/front-end/expand_btn/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets/front-end/expand_btn/dist/js/demo.js')}}"></script>



@endsection

@section('js')
    <script type="text/javascript">

        $(document).ready(function(){

            $( ".box-title" ).click(function() {
                var id = $(this).val();
                //alert(id);

            });


        });

    </script>

@endsection

