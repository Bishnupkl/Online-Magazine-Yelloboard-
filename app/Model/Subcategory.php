<?php

namespace App\Model;

use App\Visitor;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories';
    protected $fillable = ['category_id','title','status','created_by','updated_by'];

    public function category(){
        return $this->belongsTo(Category::class);
        }

    public function posts(){
        return $this->hasMany(Post::class);

    }

    public function visitors()
    {
        return $this->belongsToMany(Visitor::class);
    }
}
