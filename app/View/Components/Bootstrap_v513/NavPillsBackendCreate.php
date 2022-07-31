<?php

namespace App\View\Components\Bootstrap_v513;

use Illuminate\View\Component;

class NavPillsBackendCreate extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $route;

    public function __construct($route)
    {
        //
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bootstrap_v513.nav-pills-backend-create');
    }
}
