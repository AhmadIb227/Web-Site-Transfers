<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use App\Policies\TransferPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Prompts\Note;
use App\Models\Transfer;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Transfer::class=>TransferPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
       $this->registerPolicies();    

        Gate::define('create', function (User $user) {
            return $user->statues === 'admin' || $user->statues === 'manager';
        });  
        Gate::define('createCurrency', function (User $user) {
            return $user->statues === 'admin' || $user->statues === 'manager';
           });   
           // });  
        Gate::define('viewaddofice', function (User $user) {
            return $user->statues === 'admin' || $user->statues === 'manager';
           });                                               
    }
}
