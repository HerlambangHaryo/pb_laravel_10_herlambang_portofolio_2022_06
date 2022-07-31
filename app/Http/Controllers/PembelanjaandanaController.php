<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;
use Illuminate\Support\Facades\Storage;

use App\Models\Bantukami;
use App\Models\Timeline;

class PembelanjaandanaController extends Controller
{
    //
    public $template    = 'bootstrap_v513';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Pembelanjaandana';

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

            $view_file      = 'data';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 
            $data = Bantukami::get();

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

    public function createsub(Rekeningdonasi $Rekeningdonasi)
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

            $view_file      = 'create';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 

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
                )
            );
        ///////////////////////////////////////////////////////////////
    }
    
    public function store(Request $request)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  
            
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action 
            $this->validate($request, [ 
                'nama_bank'         => 'required', 
                'nama_akun'         => 'required', 
                'nomor_rekening'    => 'required',  
            ]);
 
            $data = Rekeningdonasi::create([ 
                'bantukami_id'      => 1, 
                'nama_bank'         => $request->nama_bank, 
                'nama_akun'         => $request->nama_akun, 
                'nomor_rekening'    => $request->nomor_rekening, 
            ]);

            Timeline::create([ 
                'bantukami_id'      => 1, 
                'user_id'           => $user->id, 
                'deskripsi'         => 'Menambahkan Rekening bantukami',  
            ]);

        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }

    public function show(Pembelanjaandana $Pembelanjaandana)
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

            $view_file      = 'show';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 
            $Timeline       = Timeline::where('bantukami_id', '=', $Pembelanjaandana->id)
                                        ->get();

            $data           = Pembelanjaandana::where('bantukami_id', '=', $Pembelanjaandana->id)
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
                    'Pembelanjaandana', 
                    'Timeline', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }
}
