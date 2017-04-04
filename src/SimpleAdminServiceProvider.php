<?php

namespace Ridrog\SimpleAdmin;

use Illuminate\Support\ServiceProvider;
use Ridrog\Adminarea\Http\Middleware\MustBeAdmin;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

class SimpleAdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $gate->define('admin-access', function($user){
            return $user->admin;
        });

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/config.php' => config_path('simpleadmin.php'),
        ], 'simpleadmin-config');

        $this->publishes([
            __DIR__.'/database/migrations/' => database_path('migrations')
        ], 'simpleadmin-migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        app('router')->aliasMiddleware('admin', MustBeAdmin::class);

        $this->mergeConfigFrom(
            __DIR__.'/config.php', 'simpleadmin'
        );
    }
}
