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

                            <div class="apland-timeline-area"> 
                                <div class="single-timeline-area">
                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                        <p>Near Future</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                <div class="timeline-icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                                                <div class="timeline-text">
                                                    <h6>Updated 5.0</h6>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>  
                            </div>

                        </div>
                    </div>
                </div>
            </section>
 
        </div>
    </div> 



 

@endsection