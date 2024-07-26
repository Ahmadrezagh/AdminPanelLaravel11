<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        try{
            if (Schema::hasTable('permissions'))
            {
                Permission::all()->map(function ($permission) {
                    Gate::define($permission->key , function ($user) use ($permission) {
                        return $user->hasPermission($permission);
                    });
                });
            }
        }catch (\Exception $exception){

        }
    }
}
