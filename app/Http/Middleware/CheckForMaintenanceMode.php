<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceMode extends Middleware
{
    /**
     * Les URI qui doivent être accessibles lorsque le mode de maintenance est activé.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
