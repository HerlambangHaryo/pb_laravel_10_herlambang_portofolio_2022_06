<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

class HomeController extends Controller
{
    //
    public $template    = 'bootstrap_v513';
    public $mode        = '';
    public $content     = 'Home';

    public function index()
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isMobile());

        // ----------------------------------------------------------- Initialize
            $panel_name     = $this->content;
            
            $template       = $this->template;
            $mode           = $this->mode;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'index';
            $view           = 'content.'.$this->template.'.frontend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            

        // ----------------------------------------------------------- Action
            $data           = array();

        // ----------------------------------------------------------- Send
            return view($view, 
                compact(
                    'user', 
                    'data', 
                    'content', 
                    'panel_name', 
                    'active_as', 
                    'view_file', 
                    'template',
                    'mode'
                )
            );
        ///////////////////////////////////////////////////////////////
    }
}
