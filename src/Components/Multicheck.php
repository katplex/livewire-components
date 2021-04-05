<?php

namespace Katplex\LivewireComponents\Components;

class Multicheck extends Field
{
    public $view = 'livewire-components::components.multicheck';

    public $model;
    public $value;
    public $key;

    public function relationship(String $model, String $value, String $key = 'id')
    {
        $this->model = $model;
        $this->value = $value;
        $this->key = $key;

        return $this;
    }

    public function getItems()
    {
        return ('App\\Models\\' . $this->model)::pluck($this->value, $this->key)->toArray();
    }
}
