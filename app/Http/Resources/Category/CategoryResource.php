<?php

namespace App\Http\Resources\Category;

use App\Http\Controllers\Api\SubCategoryController;
use App\Http\Resources\SubCategory\SubCategoryResourceCollection;
use Illuminate\Http\Resources\Json\Resource;

class CategoryResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'name' => $this->title,
            'status' => $this->status,
            'detail' => $this->description,
            //'image' => $this->image,
            'bannerImage' => env('APP_URL').'/admin/img/'.$this->image,
            'subcategories' => new SubCategoryResourceCollection($this->subcategories),
        ];
    }
}
