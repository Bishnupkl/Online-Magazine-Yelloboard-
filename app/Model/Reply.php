<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table='replies';

    protected $fillable=['comment_id','reply'];

    public function comment()
    {
       return $this->hasOne(Comment::class);
    }
}
