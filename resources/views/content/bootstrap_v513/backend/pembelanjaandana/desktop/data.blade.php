@extends('template.'.$template.'.backend')

@section('title', $panel_name)

@section('content')  


    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3"> 
            <x-donasi.nav-pills-backend-bantukami active="{{ $content }}"/>
        </div>
        <div class="card-body">
            
            <section class="timeline_area section_padding_130">
                <div class="container"> 
                    <div class="row">
                        <div class="col-12"> 
 
                        </div>
                    </div>
                </div>
            </section>
 
        </div>
    </div> 



 

@endsection