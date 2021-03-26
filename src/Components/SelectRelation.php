<?php

namespace Katplex\LivewireComponents\Components;;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class SelectRelation extends Component
{
    public $name;
    public $label;
    public $model;
    public $value;
    public $key;

    public static function make(String $name, String $label = '')
    {
        return new static($name, $label);
    }

    public function __construct(String $name, String $label = '')
    {
        $this->name = $name;
        $this->label = $label ?? $name;
    }

    public function relationship(String $model, String $value, String $key = 'id')
    {
        $this->model = $model;
        $this->value = $value;
        $this->key = $key;

        return $this;
    }

    public function getItems()
    {
        return ('App\\Models\\'.$this->model)::pluck($this->value, $this->key)->toArray();
    }

    public function render()
    {
        return view('livewire-components::components.select-relation', ['component' => $this]);
    }
}
