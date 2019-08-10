<link rel="stylesheet" href="{{asset('assets/front-end/css/_main.css')}}">
<section class="top-post-area pt-10">
    <div class="container no-padding">
        <div class="row small-gutters">

            <div class="col-lg-8 top-post-left">
                <div class="feature-image-thumb relative">
                    <div class="overlay overlay-bg"></div>
                    <a href="{{route('categorydetail.index',$post[0]->category->id)}}">
                    <img class="img-fluid" src="{{asset('assets/admin/img/'.$post[0]->image)}}" style="height: 430px" alt="">
                    </a>
                </div>

                <div class="top-post-details">
                    <ul class="tags">
                        <li><a href="{{route('categorydetail.index',$post[0]->category->id)}}">{{$post[0]->category->title}}</a></li>
                    </ul>

                    {{--for publisher logo--}}
                    {{--<ul class="image" style="position: absolute; bottom: 24.5em; left: -47px;">--}}
                        {{--<li style="display: inline-block; background: transparent; color: #fff;">--}}
                            {{--<img src="{{asset('assets/front-end/img/kantipur.png')}}" style="height: 65px; /* width: 43%; */ background: transparent;">--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    {{--for publisher logo--}}

                    <a href="{{route('postdetail.index',$post[0]->id)}}">
                        <h3>{{$post[0]->title}}</h3>
                    </a>


                    <ul class="meta">
                        <li>

                                @if($post[0]->visitor_id != 0)
                                <a href="{{route('about_uploader.index',\App\Visitor::find($post[0]->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                    {{\App\Visitor::find($post[0]->visitor_id)->name}}
                                </a>

                                @else
                                <a href="{{route('about_uploader.index',\App\User::find($post[0]->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                    {{\App\User::find($post[0]->user_id)->name}}
                                </a>
                                @endif

                        </li>
                        {{--<li><a href="#"><span class="lnr lnr-user"></span>{{\App\User::find($post[0]->created_by)->name}}</a></li>--}}
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$post[0]->created_at->diffForHumans()}}</a></li>
                        <li><a href="#"><span class="lnr lnr-eye"></span>{{$post[0]->view_count}}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 top-post-right">
                <div class="single-top-post">
                    <div class="feature-image-thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <a href="{{route('categorydetail.index',$post[1]->category->id)}}">
                        <img class="img-fluid" src="{{asset('assets/admin/img/'.$post[1]->image)}}" style="height: 210.33px" alt="">
                        </a>
                    </div>
                    <div class="top-post-details">
                        <ul class="tags">
                            <li><a href="{{route('categorydetail.index',$post[1]->category->id)}}">{{$post[1]->category->title}}</a></li>
                        </ul>

                        {{--for publisher logo--}}
                        {{--<ul class="image" style="position: absolute; bottom: 10em; left: -25px;">--}}
                            {{--<li style="display: inline-block; background: transparent; color: #fff;">--}}
                                {{--<img src="{{asset('assets/front-end/img/kantipur.png')}}" style="height: 65px; /* width: 43%; */ background: transparent;">--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--for publisher logo--}}


                        <a href="{{route('postdetail.index',$post[1]->id)}}">
                            <h4>{{$post[1]->title}}</h4>
                        </a>
                        <ul class="meta">
                            <li>

                                @if($post[1]->visitor_id != 0)
                                    <a href="{{route('about_uploader.index',\App\Visitor::find($post[1]->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                        {{\App\Visitor::find($post[1]->visitor_id)->name}}
                                    </a>

                                @else
                                    <a href="{{route('about_uploader.index',\App\User::find($post[1]->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                        {{\App\User::find($post[1]->user_id)->name}}
                                    </a>
                                @endif

                            </li>
                            {{--<li><a href="#"><span class="lnr lnr-user"></span>{{\App\User::find($post[1]->created_by)->name}}</a></li>--}}
                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$post[1]->created_at->diffForHumans()}}</a></li>
                            <li><a href="#"><span class="lnr lnr-eye"></span>{{$post[1]->view_count}}</a></li>

                        </ul>
                    </div>
                </div>
                <div class="single-top-post mt-10">
                    <div class="feature-image-thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <a href="{{route('categorydetail.index',$post[2]->category->id)}}">
                        <img class="img-fluid" src="{{asset('assets/admin/img/'.$post[2]->image)}}" style="height: 210.33px"  alt="">
                        </a>
                    </div>
                    <div class="top-post-details">
                        <ul class="tags">
                            <li><a href="{{route('categorydetail.index',$post[2]->category->id)}}">{{$post[2]->category->title}}</a></li>
                        </ul>

                        {{--for publisher logo--}}
                        {{--<ul class="image" style="position: absolute; bottom: 10em; left: -25px;">--}}
                            {{--<li style="display: inline-block; background: transparent; color: #fff;">--}}
                                {{--<img src="{{asset('assets/front-end/img/kantipur.png')}}" style="height: 65px; /* width: 43%; */ background: transparent;">--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--for publisher logo--}}


                        <a href="{{route('postdetail.index',$post[2]->id)}}">
                            <h4>{{$post[2]->title}}</h4>
                        </a>
                        <ul class="meta">
                            <li>

                                @if($post[2]->visitor_id != 0)
                                    <a href="{{route('about_uploader.index',\App\Visitor::find($post[2]->visitor_id)->email)}}"><span class="lnr lnr-user"></span>
                                        {{\App\Visitor::find($post[2]->visitor_id)->name}}
                                    </a>

                                @else
                                    <a href="{{route('about_uploader.index',\App\User::find($post[2]->user_id)->email)}}"><span class="lnr lnr-user"></span>
                                        {{\App\User::find($post[2]->user_id)->name}}
                                    </a>
                                @endif

                            </li>
                            {{--<li><a href="#"><span class="lnr lnr-user"></span>{{\App\User::find($post[2]->created_by)->name}}</a></li>--}}
                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>{{$post[2]->created_at->diffForHumans()}}</a></li>
                            <li><a href="#"><span class="lnr lnr-eye"></span>{{$post[2]->view_count}}</a></li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="news-tracker-wrap typewriter">
                    <h5><span>Breaking News:</span>
                        <h6>
                        <span class="txt-rotate" data-period="2000" data-rotate='[@foreach($bnews as $p )"{{$p}}" @if(!$loop->last) , @endif @endforeach]'>

                        </span>
                        </h6>
                    </h5>
                </div>
            </div>
        </div>
    </div>



    <!-- Start brands Area -->
    <section class="brands-area pb-60 pt-60" style="margin-top: 0px; border-top: 0px; padding-bottom: 1px; padding-top: 30px">
        <div class="container no-padding" >
            <h2 style="color: darkblue">Recent Stories</h2>
            <div class="brand-wrap border">

                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                    <div class="col single-brand">
                        <a href="{{route('postdetail.index',$post[3]->id)}}"><img class="mx-auto" style="height: 200px; max-width: 200px" src="{{asset('assets/admin/img/'.$post[3]->image)}}" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="{{route('postdetail.index',$post[4]->id)}}"><img class="mx-auto" style="height: 200px; max-width: 200px" src="{{asset('assets/admin/img/'.$post[4]->image)}}" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="{{route('postdetail.index',$post[5]->id)}}"><img class="mx-auto" style="height: 200px; max-width: 200px" src="{{asset('assets/admin/img/'.$post[5]->image)}}" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="{{route('postdetail.index',$post[6]->id)}}"><img class="mx-auto" style="height: 200px; max-width: 200px" src="{{asset('assets/admin/img/'.$post[6]->image)}}" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="{{route('postdetail.index',$post[7]->id)}}"><img class="mx-auto" style="height: 200px; max-width: 200px" src="{{asset('assets/admin/img/'.$post[7]->image)}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div >

    </section>
    <!-- End brands Area -->

    <section class="brands-area pb-60 pt-60" style="margin-top: 0px; border-top: 0px; padding-bottom: 1px; padding-top: 30px">
        <div class="container no-padding" style="background-color: lightsteelblue" >
            <h2 style="color: darkblue; text-align: center"><strong>Nepal's first digital media collective</strong> </h2>

        </div >


    </section>



</section>



<script>
    var TxtRotate = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtRotate.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 100 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('txt-rotate');
        console.log(elements);
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-rotate');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtRotate(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
        document.body.appendChild(css);
    };

</script>

<script src="{{asset('assets/front-end/js/typewriting.js')}}"></script>
<script src="{{asset('assets/front-end/js/typewriting.min.js')}}"></script>

