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
            
            <div class="form-group row mb-3 d-none">
                <x-html.label-form title="bantukami_id" />    
                <div class="col-md-8">
                    <input type="text" 
                        name        = "bantukami_id" 
                        class       = "form-control form-control-lg @error('nama_bank') is-invalid @enderror"  
                        value       = "{{ $Korbanbencana }}" 
                        
                    />                            
                    @error('nama_bank')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>  
            </div>

            <div class="form-group row mb-3">
                <x-html.label-form title="Status" />    
                <div class="col-md-8">
                    <input type="text" 
                        name        = "status" 
                        class       = "form-control form-control-lg @error('status') is-invalid @enderror"  
                        
                    />                            
                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>  
            </div>
            
            <div class="form-group row mb-3">
                <x-html.label-form title="Jumlah" />    
                <div class="col-md-8">
                    <input type="number" 
                        name        = " jumlah" 
                        class       = "form-control form-control-lg @error('    jumlah') is-invalid @enderror"  
                        
                    />                            
                    @error('    jumlah')
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