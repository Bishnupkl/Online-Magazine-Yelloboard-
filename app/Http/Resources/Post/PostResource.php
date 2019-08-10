<?php

namespace App\Http\Resources\Post;

use App\Http\Resources\SubCategory\SubCategoryResourceCollection;
use Illuminate\Http\Resources\Json\Resource;

class PostResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->title,
            'status' => $this->status,
            'detail' => $this->description,
            'image' => $this->image,
//            'subcategories' => new SubCategoryResourceCollection($this->subcategories),
        ];
    }
}
