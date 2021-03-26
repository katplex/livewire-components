<?php

namespace Katplex\LivewireComponents\Components;;

use Illuminate\View\Component;

class Teams extends Component
{
    public static function make()
    {
        return new static();
    }

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire-components::components.teams');
    }
}
