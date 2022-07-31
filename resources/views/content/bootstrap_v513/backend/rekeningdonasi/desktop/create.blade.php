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
                        value       = "{{ $Rekeningdonasi }}" 
                        
                    />                            
                    @error('nama_bank')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>  
            </div>

            <div class="form-group row mb-3">
                <x-html.label-form title="Nama Bank" />    
                <div class="col-md-8">
                    <input type="text" 
                        name        = "nama_bank" 
                        class       = "form-control form-control-lg @error('nama_bank') is-invalid @enderror"  
                        
                    />                            
                    @error('nama_bank')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>  
            </div>
            
            <div class="form-group row mb-3">
                <x-html.label-form title="Nama Akun" />    
                <div class="col-md-8">
                    <input type="text" 
                        name        = "nama_akun" 
                        class       = "form-control form-control-lg @error('nama_akun') is-invalid @enderror"  
                        
                    />                            
                    @error('nama_akun')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>  
            </div>
            
            <div class="form-group row mb-3">
                <x-html.label-form title="No. Rekening" />    
                <div class="col-md-8">
                    <input type="number" 
                        name        = "nomor_rekening" 
                        class       = "form-control form-control-lg @error('nomor_rekening') is-invalid @enderror"  
                        
                    />                            
                    @error('nomor_rekening')
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