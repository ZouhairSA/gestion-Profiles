<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class medl1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //----------------------- est juste un code de verification pour accès a la page dans le Route .
        $nbr = 12;
        if ($nbr < 17) {
            //------------------- Affichage de la page cas Nominale .
            return $next($request);
        } else {
            // -------------------Affichage de la page 404.
            abort(404);
        }
    }
}
