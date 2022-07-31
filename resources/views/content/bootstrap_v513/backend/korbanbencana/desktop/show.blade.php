@extends('template.'.$template.'.backend')

@section('title', $panel_name)

@section('content')  


    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3"> 
            <x-donasi.nav-pills-backend-bantukami active="{{ $content }}" id="{{ $Korbanbencana->id }}"/>
        </div>
        <div class="card-body">
            
            
            <x-bootstrap_v513.nav-pills-backend-create-sub route="{{ $content }}" id="{{ $Korbanbencana->id }}"/>

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
                                                Status
                                            </th>
                                            <th scope="col">
                                                Jumlah
                                            </th> 
                                            <th scope="col"></th> 
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @forelse ($data as $row)
                                            <tr>
                                                <td>
                                                    {{$row->id}}
                                                </td>
                                                <td>
                                                    {{$row->status }}
                                                </td>
                                                <td>
                                                    {{$row->jumlah }}
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