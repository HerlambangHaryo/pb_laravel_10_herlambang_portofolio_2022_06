<?php

namespace App\View\Components\Bootstrap_v513;

use Illuminate\View\Component;

class NavPillsBackendCreateSub extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $route;
    public $id;

    public function __construct($route, $id)
    {
        //
        $this->route = $route;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bootstrap_v513.nav-pills-backend-create-sub');
    }
}
