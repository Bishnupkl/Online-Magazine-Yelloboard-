
<div class="comment-sec-area">
    <div class="container">
        @if(count($comm)>0)
            <h4>Responses</h4>
            @foreach($comm as $c)
                <div class="row flex-column">

                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex" style="color:blue; border: 1px solid black; width: 60%">
                            <div class="user justify-content-between d-flex">
                                <div class="desc" >
                                    <h5><a href="#"></a></h5>

                                    <p class="comment" >
                                        {{$c->comment}}
                                    </p>
                                    <h5>Posted By:{{$c->email}}</h5>
                                    <p class="date">{{$c->created_at->diffForHumans()}}</p>
                                </div>
                            </div>

                        </div>

                        {{--march--}}
                        @if(Auth::guard('visitor')->check() && Auth::guard('visitor')->user()->id==$post->visitor_id)
                            <div class="reply-btn  d-flex" >
                                <button  class="btn-reply text-uppercase btn-right" id="reply-btn">reply</button>
                            </div>

                        @elseif(Auth::check() && Auth::user()->id==$post->user_id)
                            @if(!isset($c->reply))

                                <div class="reply-btn  d-flex" >
                                    <button  class="btn-reply text-uppercase btn-right" type="button" data-toggle="collapse" data-target="#{{$c->id}}">reply</button>
                                </div>
                            @else
                                {{$c->reply->reply}}
                            @endif
                            {{--cmnt--}}
                            <div style="padding-top: 10px" class="collapse" id="{{$c->id}}">
                                <form method="post" action="{{route('commentReplyStore.store')}}">
                                    {{csrf_field()}}
                                    <input type="text"  name="reply" style="width: 60%">
                                    <input type="hidden"  value="{{$c->id}}" name="comment_id" style="width: 60%">
                                </form>
                            </div>
                        @else

                        @endif


                    </div>

                </div>
            @endforeach
        @endif
    </div>
</div>
</div>

