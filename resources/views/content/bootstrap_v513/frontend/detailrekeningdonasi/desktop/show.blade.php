@extends('template.'.$template.'.main')

@section('title', $panel_name)

@section('content')  
      
  <div class="card mb-4 rounded-3 shadow-sm">
    <div class="card-header py-3">  

      <x-donasi.nav-pills-frontend-bantukami active="{{ $content }}" id="{{ $id }}"/>

    </div>
    <div class="card-body">
         
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 justify-content-center"> 
          @foreach($data as $row)
            <div class="col">
              <div class="card shadow-sm"> 

                <div class="card-body">
                  <table>
                    <tr>
                      <td>
                        Nama Bank
                      </td>
                      <td>:</td>
                      <td>
                        {{ $row->nama_bank }}
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Nama Akun
                      </td>
                      <td>:</td>
                      <td>
                        {{ $row->nama_akun }}
                      </td>
                    </tr>
                    <tr>
                      <td>
                        No. Rekening
                      </td>
                      <td>:</td>
                      <td>
                        {{ $row->nomor_rekening }}
                      </td>
                    </tr>
                  </table> 
                </div>
              </div>
            </div>
          @endforeach

        </div>

    </div>
  </div>
  
 
@endsection