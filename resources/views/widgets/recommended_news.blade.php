<!-- Start testimonial Area -->
{{--<section class="testimonial-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="myCarousel" class="carousel slide">
                    <!-- Indicators -->
                    <!--  <ol class="carousel-indicators">
                       <li class="item1 active"></li>
                       <li class="item2"></li>
                       <li class="item3"></li>
                       <li class="item4"></li>
                     </ol>
                  -->
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-4" >
                                    <div class="new"style="background: green; height: 200px;">

                                    </div>
                                </div>
                                <div class="col-sm-4"  >
                                    <div class="new" style="background: yellow; height: 200px;">

                                    </div>
                                </div>
                                <div class="col-sm-4" >
                                    <div class="new" style="background: red; height: 200px;">

                                    </div>
                                </div>
                            </div>

                            <!-- <div class="carousel-caption">
                              <h3>Chania</h3>
                              <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                            </div> -->
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4" >
                                    <div class="new"style="background: green; height: 200px;">

                                    </div>
                                </div>
                                <div class="col-sm-4"  >
                                    <div class="new" style="background: yellow; height: 200px;">

                                    </div>
                                </div>
                                <div class="col-sm-4" >
                                    <div class="new" style="background: red; height: 200px;">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  <div class="item">
                          <div class="row">
                             <div class="col-sm-4">
                               <div class="color cyan" style="background: cyan;"></div>
                             </div>
                             <div class="col-sm-4">
                               <div class="color pink" style="background: pink;"></div>
                             </div>
                             <div class="col-sm-4">
                               <div class="color blue" style="background: blue"></div>
                             </div>
                           </div>
                           <!-- <img src="img_chania2.jpg" alt="Chania" width="460" height="345"> -->
                        <!-- <div class="carousel-caption">
                          <h3>Chania</h3>
                          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                        </div> -->
                    </div>


                </div>

                <!-- Left and right controls -->

            </div>
            </div>
        </div>
</section>--}}

<div class="container">
    <h2>Recommended News</h2>
    <div id="myCarousel" class="carousel slide" style="margin-bottom: 20px;">

        <!-- Indicators -->
        <!--  <ol class="carousel-indicators">
           <li class="item1 active"></li>
           <li class="item2"></li>
           <li class="item3"></li>
           <li class="item4"></li>
         </ol>
      -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="all">
                        <div class="property">
                            <!-- Property img -->
                            <a href="properties-details.html" class="property-img">
                                <div class="property-tag button alt featured">{{$post[0]->category->title}}</div>

                                <img src="{{asset('assets/admin/img/'.$post[0]->image)}}" alt="properties-1" class="img-responsive">
                            </a>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">{{$post[0]->title}}</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <div class="facilities-list clearfix">
                                    <p>{!! str_limit(strip_tags($post[0]->description ),100) !!}</p>
                                </div>
                                <!-- Property footer -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="all">
                        <div class="property">
                            <!-- Property img -->
                            <a href="properties-details.html" class="property-img">
                                <div class="property-tag button alt featured">{{$post[1]->category->title}}</div>

                                <img src="{{asset('assets/admin/img/'.$post[1]->image)}}" alt="properties-1" class="img-responsive">
                            </a>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">{{$post[1]->title}}</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <div class="facilities-list clearfix">
                                    <p>{!! str_limit(strip_tags($post[1]->description ),100) !!}</p>
                                </div>
                                <!-- Property footer -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="all">
                        <div class="property">
                            <!-- Property img -->
                            <a href="properties-details.html" class="property-img">
                                <div class="property-tag button alt featured">{{$post[2]->category->title}}</div>

                                <img src="{{asset('assets/admin/img/'.$post[2]->image)}}" alt="properties-1" class="img-responsive">
                            </a>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">{{$post[2]->title}}</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <div class="facilities-list clearfix">
                                    <p>{!! str_limit(strip_tags($post[2]->description ),100) !!}</p>
                                </div>
                                <!-- Property footer -->

                            </div>
                        </div>
                    </div>


                </div>

                <!-- <div class="carousel-caption">
                  <h3>Chania</h3>
                  <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div> -->

            </div>

            <div class="item ">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="all">
                        <div class="property">
                            <!-- Property img -->
                            <a href="properties-details.html" class="property-img">
                                <div class="property-tag button alt featured">{{$post[3]->category->title}}</div>

                                <img src="{{asset('assets/admin/img/'.$post[3]->image)}}" alt="properties-1" class="img-responsive">
                            </a>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">{{$post[3]->title}}</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <div class="facilities-list clearfix">
                                    <p>{!! str_limit(strip_tags($post[3]->description ),100) !!}</p>
                                </div>
                                <!-- Property footer -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="all">
                        <div class="property">
                            <!-- Property img -->
                            <a href="properties-details.html" class="property-img">
                                <div class="property-tag button alt featured">{{$post[4]->category->title}}</div>

                                <img src="{{asset('assets/admin/img/'.$post[4]->image)}}" alt="properties-1" class="img-responsive">
                            </a>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">{{$post[4]->title}}</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <div class="facilities-list clearfix">
                                    <p>{!! str_limit(strip_tags($post[4]->description ),100) !!}</p>
                                </div>
                                <!-- Property footer -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="all">
                        <div class="property">
                            <!-- Property img -->
                            <a href="properties-details.html" class="property-img">
                                <div class="property-tag button alt featured">{{$post[5]->category->title}}</div>

                                <img src="{{asset('assets/admin/img/'.$post[5]->image)}}" alt="properties-1" class="img-responsive">
                            </a>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">{{$post[5]->title}}</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <div class="facilities-list clearfix">
                                    <p>{!! str_limit(strip_tags($post[5]->description ),100) !!}</p>
                                </div>
                                <!-- Property footer -->

                            </div>
                        </div>
                    </div>





                </div>
            </div>

        </div>


    </div>

    <!-- Left and right controls -->

</div>


@section('js')
    <script>
        $(document).ready(function(){
            // Activate Carousel
            $("#myCarousel").carousel();

            // Enable Carousel Indicators
            $(".item1").click(function(){
                $("#myCarousel").carousel(0);
            });
            $(".item2").click(function(){
                $("#myCarousel").carousel(1);
            });
            $(".item3").click(function(){
                $("#myCarousel").carousel(2);
            });
            $(".item4").click(function(){
                $("#myCarousel").carousel(3);
            });

            // Enable Carousel Controls
            $(".left").click(function(){
                $("#myCarousel").carousel("prev");
            });
            $(".right").click(function(){
                $("#myCarousel").carousel("next");
            });
        });
    </script>
@endsection
<!-- End testimonial Area -->