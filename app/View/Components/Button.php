<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{ 
    public $type;
    public $text;
    public $class;

    public function __construct($type, $text, $class)
    {
        $this->type = $type;
        $this->text = $text;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.button');
    }
}
