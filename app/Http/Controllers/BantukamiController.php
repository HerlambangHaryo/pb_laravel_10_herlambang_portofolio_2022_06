<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;
use Illuminate\Support\Facades\Storage;

use App\Models\Bantukami;
use App\Models\Timeline;

class BantukamiController extends Controller
{
    //
    public $template    = 'bootstrap_v513';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Bantukami';

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
            $data = Bantukami::where('user_id','=', $user->id) 
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

    public function create()
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
                'bencana'           => 'required', 
                'provinsi'          => 'required', 
                'kota'              => 'required', 
                'kecamatan'         => 'required', 
                'kelurahan'         => 'required', 
                'foto'              => 'required|image|mimes:png,jpg,jpeg',
                'deskripsi'         => 'required', 
                'tanggal'           => 'required', 
            ]);

            $image = $request->file('foto');
            $image->storeAs('public/bantukami', $image->hashName());

            $data = Bantukami::create([ 
                'bencana'           => $request->bencana, 
                'provinsi'          => $request->provinsi, 
                'kota'              => $request->kota, 
                'kecamatan'         => $request->kecamatan, 
                'kelurahan'         => $request->kelurahan,  
                'foto'              => $image->hashName(),
                'deskripsi'         => $request->deskripsi, 
                'tanggal'           => $request->tanggal, 
                'user_id'           => $user->id,
            ]);

            Timeline::create([ 
                'bantukami_id'      => 1, 
                'user_id'           => 1, 
                'deskripsi'         => 'Menambahkan bantukami',  
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

    public function edit(Bantukami $Bantukami)
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

            $view_file      = 'edit';
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
                    'Bantukami', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function update(Request $request, Bantukami $Bantukami)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            $this->validate($request, [
                'bencana'           => 'required', 
                'provinsi'          => 'required', 
                'kota'              => 'required', 
                'kecamatan'         => 'required', 
                'kelurahan'         => 'required',
                'tanggal'           => 'required',    
                'deskripsi'         => 'required',  
            ]);
 
            $Bantukami = Bantukami::findOrFail($Bantukami->id);
            
            if($request->foto != '')
            {
                $image = $request->file('foto');
                $image->storeAs('public/bantukami', $image->hashName());

                $Bantukami->update([
                    'bencana'           => $request->bencana, 
                    'provinsi'          => $request->provinsi, 
                    'kota'              => $request->kota, 
                    'kecamatan'         => $request->kecamatan, 
                    'kelurahan'         => $request->kelurahan,  
                    'tanggal'           => $request->tanggal, 
                    'foto'              => $image->hashName(),
                    'deskripsi'         => $request->deskripsi,  
                ]);
            }
            else
            {
                $Bantukami->update([
                    'bencana'           => $request->bencana, 
                    'provinsi'          => $request->provinsi, 
                    'kota'              => $request->kota, 
                    'kecamatan'         => $request->kecamatan, 
                    'kelurahan'         => $request->kelurahan,  
                    'deskripsi'         => $request->deskripsi, 
                    'tanggal'           => $request->tanggal,  
                ]);
            }

            Timeline::create([ 
                'bantukami_id'      => $Bantukami->id, 
                'user_id'           => $user->id, 
                'deskripsi'         => 'Merubah bantukami',  
            ]);

        // ----------------------------------------------------------- Send
            if($Bantukami)
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

    public function show(Bantukami $Bantukami)
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
            $Timeline       = Timeline::where('bantukami_id', '=', $Bantukami->id)
                                        ->orderBy('created_at', 'Desc')
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
                    'Bantukami', 
                    'Timeline', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function deletedata(Bantukami $Bantukami)
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

            $view_file      = 'deletedata';
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
                    'Bantukami', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function destroy($id)
    {
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action  
            $data = Bantukami::findOrFail($id);
            $data->delete();

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
}
