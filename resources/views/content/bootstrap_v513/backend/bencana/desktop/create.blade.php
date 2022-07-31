@extends('template.'.$template.'.backend')

@section('title', $panel_name)

@section('content')  
 
<form class="col-12" action="{{ route($content.'.store' ) }}" method="POST">
    @csrf 
    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
            Form 
        </div>
        <div class="card-body">
            
                <div class="form-group row mb-3">
                    <x-html.label-form title="Nama" />    
                    <div class="col-md-8">
                        <input type="text" 
                            name        = "nama" 
                            class       = "form-control form-control-lg @error('nama') is-invalid @enderror"  
                            
                        />                            
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>  
                </div>

 
        </div>
    </div> 

    <x-bootstrap_v513.button-submit/>
        
</form>

 

@endsection