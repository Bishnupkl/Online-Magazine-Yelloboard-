<?php

namespace App\Widgets;

use App\Model\Post;
use Arrilot\Widgets\AbstractWidget;

class MostPopularNews extends AbstractWidget
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
        $post=Post::limit(5)->orderBy('view_count','desc')->get();

        return view('widgets.most_popular_news',compact('post'), [
            'config' => $this->config,
        ]);
    }
}
