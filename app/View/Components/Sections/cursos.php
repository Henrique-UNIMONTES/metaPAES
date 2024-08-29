<?php

namespace App\View\Components\Sections;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cursos extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $cursos
    ) { }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('sections.cursos');
    }
}
