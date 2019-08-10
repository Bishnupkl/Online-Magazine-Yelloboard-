<?php

namespace App\Model;

use App\User;
use App\Visitor;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';

    protected $fillable=['title','slug','status','image','description','keywords','excerpt','category_id','subcategory_id','user_id','visitor_id','sponsored','sponsor_request', 'url'];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }


    public function visitor()
    {
        return $this->belongsTo(Visitor::class,'visitor_id');
    }

    public function category(){
        return $this->belongsTo('App\Model\Category');
    }
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }


}
