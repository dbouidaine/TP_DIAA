<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Les mappages de stratégie pour l'application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Enregistrement de tous les services d'authentification / autorisation.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
