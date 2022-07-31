@extends('template.'.$template.'.main')

@section('title', $panel_name)

@section('content')  
     
  <div class="container px-4 py-5" id="custom-cards">  

    <div class="album py-5  ">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          @foreach($data as $row)
            <div class="col">
              <div class="card shadow-sm">
                <img src="{{ asset('/public/storage/bantukami/').'/'.$row->foto }}" height="250px"   >

                <div class="card-body">
                  <p class="card-text">
                    <h5>
                      {{ $row->bencana }}, di {{ $row->kota }}.
                    </h5>
                    <br/> 
                    {{ $row->deskripsi }}
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">
                      {{ $row->user->name }}, {{ $row->tanggal }}
                    </small>
                    <div class="btn-group"> 
                      <a type="button" 
                        href="{{ route('Detailbantukami.show', $row->id ) }}" 
                        class="btn btn-sm btn-info">
                        Bantukami
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>
    </div>
    
  </div> 
 
@endsection