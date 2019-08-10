<?php

namespace App\Widgets;

use App\Model\Category;
use App\Model\Post;
use App\Model\Subcategory;
use Arrilot\Widgets\AbstractWidget;

class FooterNews extends AbstractWidget
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
        $category=Category::all();
        $subcategory=Subcategory::all();
        //dd($subcategory);
        $post=Post::where('category_id',5)->limit(3)->orderBy('created_at','desc')->get();
        //dd($post);

        return view('widgets.footer_news',compact('category','subcategory','post'), [
            'config' => $this->config,
        ]);
    }
}
