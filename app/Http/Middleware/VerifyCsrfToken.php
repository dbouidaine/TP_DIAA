<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indique si le cookie XSRF-TOKEN doit être défini sur la réponse.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * Les URI devant être exclus de la vérification CSRF.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
