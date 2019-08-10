<?php

namespace App\Widgets;

use App\Model\Bnews;
use App\Model\Category;
use App\Model\Post;
use App\Visitor;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;

class TopNews extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {

//        $post=Post::limit(3)->orderBy('created_at','desc')->get();
        $post=Post::limit(8)->orderBy('created_at','desc')->get();
        $bnews=Bnews::limit(7)->orderBy('created_at','desc')->pluck('bnews')->toArray();



// return view('widgets.top_news',compact('post','bnews','visitor'), [
        return view('widgets.top_news',compact('post','bnews'), [
            'config' => $this->config,
        ]);
    }
}
