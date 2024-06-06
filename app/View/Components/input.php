<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public $name, $type, $lable, $value;
    public function __construct($name, $type, $lable, $value)
    {
        $this->name = $name;
        $this->type = $type;
        $this->lable = $lable;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}