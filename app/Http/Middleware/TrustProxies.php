<?php

namespace App\Http\Middleware;

use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * Les mandataires de confiance pour cette application.
     *
     * @var array|string
     */
    protected $proxies;

    /**
     * Les en-têtes devant être utilisés pour détecter les mandataires.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
