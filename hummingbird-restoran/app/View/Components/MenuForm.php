<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MenuForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name, $price, $desc, $action, $put, $btn;

    public function __construct($name, $price, $desc, $action, $put, $btn)
    {
        $this->name = $name;
        $this->price = $price;
        $this->desc = $desc;
        $this->action = $action;
        $this->put = $put;
        $this->btn = $btn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu-form');
    }
}
