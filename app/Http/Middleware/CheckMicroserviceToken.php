<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckMicroserviceToken
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
        if (session('Authentication')) {
            // El token está presente, permitir el acceso
            return $next($request);
        } else {
            // Redirigir al inicio de sesión si no hay token
            return redirect()->route('login')->with('error', 'Acceso no autorizado. Inicia sesión.');
        }
    }
}
