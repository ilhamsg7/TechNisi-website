<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<int, string>
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
     */
    protected $except = [
        //
    ];
}
