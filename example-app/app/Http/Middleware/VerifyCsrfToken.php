<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://127.0.0.1:8000/pullers/send',
        'http://127.0.0.1:8000/linearsupp/send',
        'http://127.0.0.1:8000/rte/send',
        'http://127.0.0.1:8000/induct/send',
    ];
}
