<?php

namespace App\Widgets;

use App\Model\Category;
use Arrilot\Widgets\AbstractWidget;

class MostpopularCategoryNews extends AbstractWidget
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


        return view('widgets.mostpopular_category_news', [
            'config' => $this->config,
        ]);
    }
}
