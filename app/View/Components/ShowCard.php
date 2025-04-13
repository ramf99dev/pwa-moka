<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowCard extends Component
{
    public $contexto;
    public $titulo;
    /**
     * Create a new component instance.
     */
    public function __construct($contexto, $titulo)
    {
        $this->contexto = $contexto;
        $this->titulo = $titulo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.show-card');
    }
}
