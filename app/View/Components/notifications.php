<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class notifications extends Component
{

    //var Notifications public

    /**
     * Create a new component instance.
     */
    public function __construct(/* var */)
    {
        //
        //this->var = var
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.notifications');
    }
}
