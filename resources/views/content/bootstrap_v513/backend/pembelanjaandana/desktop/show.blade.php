@extends('template.'.$template.'.backend')

@section('title', $panel_name)

@section('content')  


    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3"> 
            <x-donasi.nav-pills-backend-bantukami active="{{ $content }}" id="{{ $Pembelanjaandana->id }}"/>
        </div>
        <div class="card-body">
            
            
            <x-bootstrap_v513.nav-pills-backend-create-sub route="{{ $content }}" id="{{ $Pembelanjaandana->id }}"/>

            <section class="timeline_area section_padding_130 mt-4">
                <div class="container"> 
                    <div class="row">
                        <div class="col-12"> 

                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <x-bootstrap_v513.thead-default/>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">
                                                Nama Bank
                                            </th>
                                            <th scope="col">
                                                Nomor Rekening
                                            </th>
                                            <th scope="col">
                                                Nama Akun
                                            </th>
                                            <th scope="col"></th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $row)
                                            <tr>
                                                <td>
                                                    {{$row->id}}
                                                </td>
                                                <td>
                                                    {{$row->nama_bank }}
                                                </td>
                                                <td>
                                                    {{$row->nama_akun }}
                                                </td>
                                                <td>
                                                    {{$row->nomor_rekening }}
                                                </td>
                                                <td>
                                                    <x-bootstrap_v513.button-dropdown-action route="{!!$content!!}" id="{!!$row->id!!}"/> 
                                                </td>
                                            </tr> 
                                        @empty
                                            <tr class="text-center"> 
                                                <x-message.tr-no-record-data col="5" />  
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
 
        </div>
    </div> 



 

@endsection