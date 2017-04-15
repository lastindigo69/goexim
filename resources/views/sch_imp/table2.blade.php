<table id="sch_import4" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>Shipment</th>
				                <th>Supplier</th>
				                <th>Origin</th>
				                <th>Ship</th>
				                <th>Container Number</th>
				                <th>ETD</th>
				                <th>ETA JKT</th>
				                <th>ETA AIIA</th>
				                <th>ATA AIIA</th>
				                <th>Status</th>
				                <th>Remarks</th>
				                <th></th>
				            </tr>
				        </thead>
				        <tbody>
				        @foreach($row_tabel2 as $row)
				            <tr>
				                <td>
				                <a href="#" class="remark" data-type='select' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="id_shipment_name">
								{{$row->shipment_name}}
								</a>	
				                </td>
				                <td>
				                <a href="#" class="remark" data-type='select' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data2') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="id_supplier">
								{{$row->supplier}}
								</a>
				                </td>
				                <td>
				                <a href="#" class="remark" data-type='select' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data3') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="id_origin">
								{{$row->origin}}
								</a>
				                </td>
				                <td>
				                <a href="#" class="remark" data-type='select' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data4') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="id_ship">
								{{$row->ship}}
								</a>	
				                </td>
				                <td>
				                <a href="#" class="remark" data-type='text' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-pk="{{ $row->id_sch_imp }}" data-name="cont_number">
								{{$row->cont_number}}
								</a>
				                </td>
				                <td>
				                <a href="#" class="ata_aiia" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-type='combodate' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-pk="{{ $row->id_sch_imp }}" data-name="etd">
								@if($row->etd == 0000-00-00)
								@else
								{{date($row->etd)}}
								@endif
								</a>
				                </td>
				                <td>
				                <a href="#" class="ata_aiia" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-type='combodate' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-pk="{{ $row->id_sch_imp }}" data-name="eta">
								@if($row->eta == 0000-00-00)
								@else
								{{date($row->eta)}}
								@endif
								</a>
				                </td>
				                <td>
				                <a href="#" class="ata_aiia" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-type='combodate' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-pk="{{ $row->id_sch_imp }}" data-name="eta_aiia">
								@if($row->eta_aiia == 0000-00-00)
								@else
								{{date($row->eta_aiia)}}
								@endif
								</a>
				                </td>
				                <td>
				                <a href="#" class="ata_aiia" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-type='combodate' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-pk="{{ $row->id_sch_imp }}" data-name="ata_aiia">
								@if($row->ata_aiia == 0000-00-00)
								@else
								{{date($row->ata_aiia)}}
								@endif
								</a>
				                </td>
				                <td>
				                @if($row->eta > \Carbon\Carbon::now() )
				                On Vessel
				                @elseif($row->eta < \Carbon\Carbon::now() && $row->ata_aiia == null)
				                On Custom Bea Cukai
				                @elseif($row->ata_aiia != null)
				                Already Arrive AIIA
				                @endif
				                </td>
				                <td>
								<a href="#" class="remark" data-type='text' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-pk="{{ $row->id_sch_imp }}" data-name="remark">
								{{$row->remark}}
								</a>
				                </td>				                
				                <td width="10%">
					                <a href="{{ url ('emailreminder')}}" class="btn btn-xs btn-success">
				                	<i class="fa fa-envelope-o" aria-hidden="true"></i></a>
				                	<a href="{{ url ('edit/sch_imp/'.$row->id_sch_imp)}}" class="btn btn-xs btn-warning">
				                	<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
									<a href="{{ url ('del/sch_imp/'.$row->id_sch_imp)}}" class="btn btn-xs btn-danger">
									<i class="fa fa-trash" aria-hidden="true"></i></a>
				                </td>
				            </tr>
				         @endforeach
				        </tbody>
    				</table>