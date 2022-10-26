<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];


    public function boot()
    {
        $this->registerPolicies();
        Gate::define('user',function($user){
            return $user->role == 'user';
        });
        Gate::define('admin',function($user){
            return $user->role == 'admin';
        });
        Gate::define('superadmin',function($user){
            return $user->role == 'superadmin';
        });
    }
}
