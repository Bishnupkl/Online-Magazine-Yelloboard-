<?php

namespace App\Http\Resources\SubCategory;

use App\Http\Resources\Post\PostResourceCollection;
use Illuminate\Http\Resources\Json\Resource;

class SubCategoryResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $items = [];

        if($this->posts->count() > 0) {

            $items[$this->title] = $this->posts?['Posts'=> new PostResourceCollection($this->posts)]: '';
        }
        return $items;
    }
}
