<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
use App\Permission;

class AuthServiceProvider extends ServiceProvider {

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
<<<<<<< HEAD
  /*  public function boot() {
        $this->registerPolicies();
=======
    public function boot() {
       $this->registerPolicies();
>>>>>>> Pedro

        $permissions = Permission::with('roles')->get();

        foreach ($permissions as $permission) {
            
            Gate::define($permission->name, function(User $user)
                    use ($permission) {
                return $user->hasPermission($permission);
            });
        }

        Gate::before(function(User $user, $hability) {
            if ($user->hasAnyroles('Admin'))
                return true;
        });
    }*/

}
