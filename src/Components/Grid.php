<?php

namespace Katplex\LivewireComponents\Components;

use Illuminate\View\Component;

class Grid extends Component
{

    public $elements = [];

    public static function make($elements)
    {
        return new static($elements);
    }

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($elements)
    {
        $this->elements = $elements;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire-components::components.grid', ['component' => $this]);
    }
}
