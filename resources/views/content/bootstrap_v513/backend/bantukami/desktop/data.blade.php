@extends('template.'.$template.'.backend')

@section('title', $panel_name)

@section('content')  

 
    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3"> 
        	<x-bootstrap_v513.nav-pills-backend-create route="{!!$content!!}" /> 
        </div>
        <div class="card-body">
            
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
												Gambar
											</th>
											<th scope="col">
												Bencana
											</th>
											<th scope="col">
												Tanggal
											</th> 
											<th scope="col">
												Lokasi
											</th> 
											<th scope="col">
												User
											</th> 
											<th scope="col">
												Status
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
													<img 
													 	src="{{ asset('/public/storage/bantukami/').'/'.$row->foto }}" 
													 	class="rounded mx-auto d-block" 
													 	width="100" >
												</td>
												<td>
													{{$row->bencana}}
												</td>
												<td>
													{{$row->tanggal}}
												</td>
												<td>
													{{$row->kota}},
													{{$row->kecamatan}},
													{{$row->kelurahan}}
												</td>
												<td>
													{{$row->user->name}}
												</td>
												<td>
													@if(is_null($row->is_approval) )
														Menunggu Approval
													@elseif($row->is_approval == 1 )
														Approved
													@endif 
												</td>
												<td>
								    				<x-bootstrap_v513.button-dropdown-action route="{!!$content!!}" id="{!!$row->id!!}"/> 
												</td>
											</tr> 
										@empty
                                            <tr class="text-center"> 
                                                <x-message.tr-no-record-data col="7" />   
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