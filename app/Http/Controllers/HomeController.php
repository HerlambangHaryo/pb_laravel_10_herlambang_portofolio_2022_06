<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Bantukami;

class HomeController extends Controller
{
    //
    public $template    = 'bootstrap_v513';
    public $mode        = '';
    public $themecolor  = '';
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
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'index';
            $view           = 'content.'.$this->template.'.frontend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            

        // ----------------------------------------------------------- Action
            $data           = Bantukami::whereNotNull('is_approval')
                                        ->get();

        // ----------------------------------------------------------- Send
            return view($view, 
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }
}
