@extends('app')

@section('content')			                
<div class="container">
	<div class="row">
		<div class="col-md-12">
					<table id="sch_import2" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>Shipment</th>
				                <th>Supplier</th>
				                <th>Category</th>
				                <th>Desc Of Good</th>
				                <th>Invoice</th>
				                <th>Currency</th>
				                <th>Amount</th>
				                <th>Origin</th>
				                <th>Ship</th>
				                <th>Container Number</th>
				                <th>Nama Alat Angkut</th>				                
				            </tr>
				        </thead>
				        <tbody>
				        @foreach($row as $row)
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
				                data-source="{{ action('HomeController@data5') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="id_category">
								{{$row->category}}
								</a>	
				                </td>
				                <td>
				                <a href="#" class="remark" data-type='text' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="desc_of_good">
								{{$row->desc_of_good}}
								</a>	
				                </td>
				                <td>
				                <a href="#" class="remark" data-type='text' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="invoice">
								{{$row->invoice}}
								</a>	
				                </td>
				                <td>
				                <a href="#" class="remark" data-type='select' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data6') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="id_currency">
								{{$row->currency}}
								</a>	
				                </td>
				                <td>
				                <a href="#" class="remark" data-type='text' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data6') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="amount">
								{{$row->amount}}
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
				                <a href="#" class="remark" data-type='text' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-pk="{{ $row->id_sch_imp }}" data-name="nama_alat_angkut">
								{{$row->nama_alat_angkut}}
								</a>	
				                </td>				                		                
				            </tr>
				         
				        </tbody>
    				</table>					
				</div>
			</div>
			<div class="row">
				<div class="panel-body">
					<table id="sch_import3" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>MAWB/MBL</th>
				                <th>MBL/BL</th>
				                <th>Forwader</th>
				                <th>Pay Duty & Tax</th>
				                <th>CC Plan</th>
				                <th>GW</th>
				                <th>Fubikasi</th>
				                <th>Kemasan</th>				                
				                <th>ETD</th>
				                <th>ETA JKT</th>
				                <th>ETA AIIA</th>
				                <th>ATA AIIA</th>
				                <th>Remarks</th>
				            </tr>
				        </thead>
				        <tbody>				        
				            <tr>
				                <td>
				                <a href="#" class="remark" data-type='text' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="mbl">
								{{$row->mbl}}
								</a>				                	
				                </td>
				                <td>
				                <a href="#" class="remark" data-type='text' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="hbl">
								{{$row->hbl}}
								</a>				                	
				                </td>
				                <td>
				                <a href="#" class="remark" data-type='select' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data7') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="id_forwader">
								{{$row->forwader}}
								</a>	
				                </td>
				                <td>
				                <a href="#" class="ata_aiia" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-type='combodate' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-pk="{{ $row->id_sch_imp }}" data-name="duty">
								@if($row->duty == 0000-00-00)
								@else
								{{date($row->duty)}}
								@endif
								</a>
				                </td>
				                <td>
				                <a href="#" class="ata_aiia" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-type='combodate' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-pk="{{ $row->id_sch_imp }}" data-name="cc">
								@if($row->cc == 0000-00-00)
								@else
								{{date($row->cc)}}
								@endif
								</a>				                	
				                </td>
				                <td>
				                <a href="#" class="remark" data-type='text' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="gw">
								{{$row->gw}}
								</a>	
				                </td>
				                <td>
				                <a href="#" class="remark" data-type='text' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="fubikasi">
								{{$row->fubikasi}}
								</a>					                	
				                </td>
				                <td>
				                <a href="#" class="remark" data-type='text' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-source="{{ action('HomeController@data') }}"
				                data-pk="{{ $row->id_sch_imp }}" data-name="kemasan">
								{{$row->kemasan}}
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
								<a href="#" class="remark" data-type='text' 
				                data-url="{{ action('HomeController@update', $row->id_sch_imp) }}" 
				                data-pk="{{ $row->id_sch_imp }}" data-name="remark">
								{{$row->remark}}
								</a>
				                </td>				                
				            </tr>
				         @endforeach
				        </tbody>
    				</table>					
				</div>
			</div>			
		</div>
@endsection
