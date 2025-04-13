<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class NavItem extends Component
{
    public $titulo;
    public $ruta;
    public $active;

    public function __construct($titulo, $ruta)
    {
        $this->titulo = $titulo;
        $this->ruta = $ruta;
        $this->active = $this->isActiveRoute($ruta);
    }

    protected function isActiveRoute($routePattern)
    {
        $currentRoute = Route::currentRouteName();
        $currentPath = request()->path();

        // If using named routes (e.g., 'producto.index')
        if ($currentRoute) {
            // Exact match
            if ($currentRoute === $routePattern) return true;
            
            // Parent route match (e.g., 'producto' matches 'producto.create')
            if (strpos($currentRoute, $routePattern . '.') === 0) return true;
        }

        // If using URL paths (e.g., '/producto')
        $routePath = trim(parse_url(route($routePattern), PHP_URL_PATH), '/');
        if (strpos($currentPath, $routePath) === 0) {
            // Exact match or subpath match
            return $currentPath === $routePath || 
                   strpos($currentPath, $routePath . '/') === 0;
        }

        return false;
    }

    public function render()
    {
        return view('components.nav-item');
    }
}