<?php

namespace App\View\Components\Donasi;

use Illuminate\View\Component;

class NavPillsFrontendBantukami extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $active;
    public $id;

    public function __construct($active, $id)
    {
        //
        $this->active = $active;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.donasi.nav-pills-frontend-bantukami');
    }
}
