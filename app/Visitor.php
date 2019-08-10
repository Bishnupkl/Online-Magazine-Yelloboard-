<?php

namespace App;

use App\Model\Category;
use App\Model\Categoryusers;
use App\Model\Subcategory;
use App\Notifications\UserResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Visitor extends Authenticatable
{
    use Notifiable, HasApiTokens;

    protected $gaurd ='visitor';


    protected $fillable = ['user_name','name','email','password','password_conform','phone','term','address','verification_key','status',
        'user_type','publisher_status','created_by','updated_by','category_id','publisher_id'];

    protected $table = 'visitors'; //in order to check table in data base


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function posts()
    {
        return $this->hasMany(Visitor::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class);
    }


//    today donee

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserResetPasswordNotification($token));
    }



}

