<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['id','fullname','email','comment','post_id'];


    public function posts(){
            return $this->belongsTo(post::class);
        }

    public function reply()
    {
        return $this->hasOne(Reply::class);
        }
}
