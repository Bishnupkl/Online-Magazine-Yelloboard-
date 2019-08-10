<?php

namespace App\Model;

use App\Visitor;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['title','status','description','image','created_by','updated_by'];




    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }


    public function posts(){
        return $this->belongsToMany('App\Model\Post');
    }

    public function visitors()
    {
        return $this->belongsToMany(Visitor::class);
    }


}
