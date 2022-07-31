@extends('template.'.$template.'.backend')

@section('title', $panel_name)

@section('content')  
 
    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3"> 
            <x-donasi.nav-pills-backend-bantukami active="{{ $content }}"/>
        </div>
        <div class="card-body">
            
            <x-bootstrap_v513.nav-pills-backend-create-sub route="{{ $content }}" id="{{ $content }}"/>

            <section class="timeline_area section_padding_130">
                <div class="container"> 
                    <div class="row">
                        <div class="col-12"> 

                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <x-bootstrap_v513.thead-default/>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">
                                                Bantuan
                                            </th>
                                            <th scope="col"></th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $row)
                                        <tr>
                                            <td>
                                                {{$row->id}}
                                            </td>
                                            <td>
                                                {{$row->nama}}
                                            </td>
                                            <td> 
                                            </td>
                                        </tr> 
                                        @endforeach
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