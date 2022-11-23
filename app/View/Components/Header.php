<?php

namespace App\View\Components;

use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\This;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     * 
     * 
     */
    public $title;
    public $head;
    public $load=false;
    public function __construct($title,$load,$head="")
    {
        $this->title=$title;
        $this->load=$load;
        $this->head=$head;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.Header');
    }
}
