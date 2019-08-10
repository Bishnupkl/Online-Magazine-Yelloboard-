<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bnews extends Model
{
    protected $table='bnews';

    protected $fillable=['bnews','status','created_by','updated_by'];
}
