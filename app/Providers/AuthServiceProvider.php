<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        Passport::routes();

        $this->registerPolicies($gate);
        $gate->define('IsAdmin',function($user){
            return $user->user_type =='Admin';

        });

        $gate->define('IsPublisher',function($user){
            return $user->user_type =='Publisher';

        });

        $gate->define('IsVisitor',function($user){
            return $user->user_type =='Visitor';
        });

        $gate->define('IsAuthor',function($user){
            return $user->user_type =='author';
        });

    }

}
