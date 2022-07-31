@extends('template.'.$template.'.backend')

@section('title', $panel_name)

@section('content')  


    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3"> 
            <x-donasi.nav-pills-backend-bantukami active="{{ $content }}" id="{{ $Bantukami->id }}"/>
        </div>
        <div class="card-body">
            
            <section class="timeline_area section_padding_130">
                <div class="container"> 
                    <div class="row">
                        <div class="col-12"> 

                            <div class="apland-timeline-area"> 

                                @foreach($Timeline as $row)
                                    <div class="single-timeline-area">
                                        <div class="timeline-date wow fadeInLeft"  >
                                            <p>
                                                {{ $row->created_at }}
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 ">
                                                <div class="single-timeline-content d-flex wow fadeInLeft"  >
                                                    <div class="timeline-icon">
                                                    </div>
                                                    <div class="timeline-text">
                                                        <h6>
                                                            {{ $row->user->name }}
                                                        </h6>
                                                        <p> 
                                                            {{ $row->deskripsi }} 
                                                        </p>
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
            </section>
 
        </div>
    </div> 



 

@endsection