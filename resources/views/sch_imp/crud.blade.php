@extends('app')

@section('content')			                
<div class="container-fluit">
	<div class="row">
		@include('modal')
		<div class="col-md-10 col-md-offset-1">
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					  <li class="active"><a data-toggle="tab" href="#on_progress">On Progress</a></li>
					  <li><a data-toggle="tab" href="#menu1">Arrival</a></li>
					  <li><a data-toggle="tab" href="#menu2">List All</a></li>
					  <button class='btn btn-success pull-right' data-toggle="modal" data-target="#sch_imp"><i class="fa fa-plus" aria-hidden="true"></i> Create</button>
					</ul>
					<div class="tab-content">
			<div id="on_progress" class="tab-pane fade in active">
				<div class="panel-body">
					@include('sch_imp/table1')					
				</div>
				</div>
				<div id="menu1" class="tab-pane fade">
				<div class="panel-body">
					@include('sch_imp/table2')					
				</div>
				</div>
				<div id="menu2" class="tab-pane fade">
				<div class="panel-body">
					@include('sch_imp/table3')					
				</div>    
				</div>
				</div>				
			</div>
		</div>
	</div>
</div>

@endsection
