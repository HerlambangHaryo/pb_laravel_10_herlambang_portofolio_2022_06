<?php

namespace App\View\Components\Bootstrap_v513;

use Illuminate\View\Component;

class SidebarNav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;

    public function __construct($title)
    {
        //
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bootstrap_v513.sidebar-nav');
    }
}
