<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin {
    public function handle(Request $request, Closure $next) {
        // Verificar si el usuario está autenticado y tiene permiso 0 (admin)
        if (auth()->check() && auth()->user()->permiso === 0) {
            return $next($request);
        }

        // Redirigir a la página principal con error
        return redirect('/')->with('error', 'Acceso no autorizado');
    }
}