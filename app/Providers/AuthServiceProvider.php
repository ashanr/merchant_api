<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Laravel\Passport\Passport;
use Spatie\Permission\Models\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        if (Schema::hasTable('permissions')) {
            $permission  = Permission::all()->pluck('name', 'name')->toArray();
            Passport::tokensCan(
                $permission
            );
            if (!$this->app->routesAreCached()) {
                Passport::routes();
                Passport::refreshTokensExpireIn(now()->addDays(30));
            }
        }
        //
    }
}
