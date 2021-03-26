<?php

namespace Katplex\LivewireComponents\Components;;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $label;
    public $type = 'text';

    public static function make(String $name, String $label = '')
    {
        return new static($name, $label);
    }

    public function __construct(String $name, String $label = '')
    {
        $this->name = $name;
        $this->label = $label ?? $name;
    }

    public function type($type)
    {
        $this->type = $type;
        return $this;
    }

    public function render()
    {
        return view('livewire-components::components.input', ['component' => $this]);
    }
}
