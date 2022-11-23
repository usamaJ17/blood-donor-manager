<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Script extends Component
{
    public $load;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($load)
    {
        $this->load=$load;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.Script');
    }
}
