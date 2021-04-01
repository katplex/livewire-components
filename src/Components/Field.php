<?php

namespace Katplex\LivewireComponents\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Field extends Component
{
    public $name;
    public $label;

    public $view;

    public static function make($label, $name = '')
    {
        return new static($label, $name);
    }

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name = '')
    {
        $this->label = $label;
        $this->name = $name == '' ? Str::snake($label) : $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view($this->view, ['component' => $this]);
    }
}
