@extends('front-end.includes.layout')

@section('title','Yello-Board | Contact Us')

@section('content')
{{-- Start Content Here--}}


<div class="site-main-container">
    <!-- Start top-post Area -->
    {{--<section class="top-post-area pt-10">--}}
        {{--<div class="container no-padding">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-12">--}}
                    {{--<div class="hero-nav-area">--}}
                        {{--<h1 class="text-white">Contact Us</h1>--}}
                        {{--<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="contact.html">Contact Us </a></p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End top-post Area -->
    <!-- Start contact-page Area -->
    <section class="contact-page-area pt-50 pb-120">
        <div class="container">
            <div class="row contact-wrap">

                <div class="map-wrap" style="width:100%; height: 445px;" id="map2">


                    <div class="mapouter" ><div class="gmap_canvas" style="width: 79em" ><iframe width="1200" height="445" id="gmap_canvas" src="https://maps.google.com/maps?q=Policy%20Nepal%20Pvt.%20Ltd%2C%20Kathmandu&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                </div>

                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>Sahayoginagar, Kathmandu, Nepal </h5>
                            {{--<p>Nepal--}}

                            {{--</p>--}}
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>01-4154675</h5>
                            <p>Sun to Fri 9am to 6 pm</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <h5>policynepal@outlook.com</h5>
                            <p>Send us your query</p>
                        </div>
                    </div>
                </div>
                {{--<div class="col-lg-9">--}}
                    {{--<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">--}}

                                {{--<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">--}}
                                {{--<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-12">--}}
                                {{--<div class="alert-msg" style="text-align: left;"></div>--}}
                                {{--<button class="primary-btn primary" style="float: right;">Send Message</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
    <!-- End contact-page Area -->
</div>





{{-- End Content Here--}}
@endsection

