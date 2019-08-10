<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Model\Post;

class Advertisement extends AbstractWidget
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
        $post=Post::orderBy('created_at','desc')->get();

        return view('widgets.advertisement', compact('post'), [
            'config' => $this->config,
        ]);
    }
}
