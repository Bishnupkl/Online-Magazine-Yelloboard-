@extends('front-end.includes.layout')

@section('title','Yello-Board | About')

@section('content')


    <div class="site-main-container">
        <!-- Start top-post Area -->
        <section class="top-post-area pt-10">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-nav-area">
                            <h1 class="text-white">About Us</h1>
                            <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="about.html">About Us </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End top-post Area -->
    </div>

    <div class="container">
        <div class="row small-gutters">

            <div class="col-lg-12 ">
                <h3 style="color:#fd7e14;font-size: xx-large"><strong>Our mission</strong></h3>
                <p style="margin-left: 30px;color: darkorchid;font-size: xx-large">"<i>Bringing you a platform for your voices and need for information.</i>"</p>
                <p style="text-align: justify;font-size: x-large;font-family: 'Helvetica Neue'">
                    &nbsp;&nbsp;&nbsp;With the sole purpose of connecting news and information with creativity, we bring together a website to find all your requirements for staying updated with the current situations of the world in a single site. Along with this, we bring you a platform for expression of your views and creativity.<br>
                    &nbsp;&nbsp;Yelloboard is a national website with international standards aiding in the constant growth of Nepalese citizens and finding a common place to explore your favorite news sources with inclusion of various categories. We have partnered with the nation’s top publishers as well as independent bloggers to bring you the best experience while browsing through the daily news. Offering you with a unique scheme, we believe in providing you with exposure to the contents of your interest.<br>
                    &nbsp;&nbsp;Finally, with easy accessibility and reach, we help publishers, bloggers and viewers to encounter an extra-ordinary experience. We aspire to influence and bring together the great stories and the truth with just a click.
                </p>
            </div>
        </div>
    </div>




    <!-- Start recommended news Area -->
    {{ Widget::run('RecommendedNews') }}
    <!-- End recommended news Area -->


    <!-- Start advertisement Area -->
    {{ Widget::run('Advertisement') }}
    <!-- End advertisement Area -->


@endsection