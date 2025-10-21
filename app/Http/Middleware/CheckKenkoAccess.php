<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckKenkoAccess
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Vérifie si la session "kenko_access" est active
        if (!$request->session()->has('kenko_access') || $request->session()->get('kenko_access') !== true) {
            // Si non, redirige vers la page de connexion Kenko-Ho (ou une autre selon ton projet)
            return redirect('/kenko-ho-login')->with('error', 'Accès refusé. Veuillez entrer le mot de passe.');
        }

        return $next($request);
    }
}
