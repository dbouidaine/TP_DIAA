<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;
/*!
* Les fournisseurs de services sont le lieu central du démarrage de toutes les applications Laravel. Votre propre application, ainsi que tous les services de base de Laravel, sont initialisés via des fournisseurs de services.
*/
class AppServiceProvider extends ServiceProvider
{
    /**
     * Enregistrement de tous les services d'application.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }
    }

    /**
     * bootstrap tous les services d'application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
