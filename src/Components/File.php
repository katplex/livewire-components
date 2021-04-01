<?php

namespace Katplex\LivewireComponents\Components;

class File extends Field
{
    public $accept = 'image/jpg,image/jpeg,image/png';

    public function accept($accept)
    {
        $this->accept = $accept;
        return $this;   
    }

    public $view = 'livewire-components::components.file';

}
