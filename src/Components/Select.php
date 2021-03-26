<?php

namespace Katplex\LivewireComponents\Components;;

use Illuminate\View\Component;

class Select extends Component
{
    public $name;
    public $label;
    public $items;

    public static function make(String $name, String $label = '')
    {
        return new static($name, $label);
    }

    public function __construct(String $name, String $label = '')
    {
        $this->name = $name;
        $this->label = $label ?? $name;
    }

    public function items($items)
    {
        $this->items = $items;

        return $this;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function render()
    {
        return view('livewire-components::components.select-relation', ['component' => $this]);
    }
}

