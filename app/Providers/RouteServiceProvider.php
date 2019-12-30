<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Cet espace de noms est appliqué aux routes de votre contrôleur.
     *
     * En outre, il est défini comme espace de noms racine du générateur d'URL.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Définir les liaisons de votre modèle d'itinéraire, les filtres de modèle, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Définissez les itinéraires pour l'application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Définir les itinéraires "web" pour l'application.
     *
     * Ces routes reçoivent toutes l’état de la session, la protection CSRF, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Définir les routes "api" pour l'application.
     *
     * Ces routes sont généralement sans état.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
