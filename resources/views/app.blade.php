<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GO-EXIM</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap.css')}}">
	<link href="{{asset('css/bootstrap-editable.css')}}" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="{{asset('css/select2.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/select2-bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.bootstrap.min.css')}}">

	<!-- Fonts -->
	<link href="{{asset('Fonts/glyphicons-halflings-regular.ttf')}}" rel='stylesheet' type='text/css'>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style type="text/css">
	* {
	font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
	}
	body {
    background-image: url("img/bg.jpg");
    background-repeat: repeat;
	}
	/* Sticky footer styles
	-------------------------------------------------- */
	html {
	  position: relative;
	  min-height: 100%;
	}
	body {
	  /* Margin bottom by footer height */
	  margin-bottom: 0px;
	}
	.footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  /* Set the fixed height of the footer here */
	  height: 60px;
	  background-color: #f5f5f5;
	}
	/* Custom page CSS
	-------------------------------------------------- */
	/* Not required for template or sticky footer method. */

	body > .container {
	  padding: 60px 15px 0;
	}
	.container .text-muted {
	  margin: 20px 0;
	}

	.footer > .container {
	  padding-right: 15px;
	  padding-left: 15px;
	}

	code {
	  font-size: 80%;
	}
	
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><i class="fa fa-television" aria-hidden="true"></i> <big><b>GO-EXIM</b></big></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				@if (Auth::guest())
				@else
				<ul class="nav navbar-nav navbar-left">
					<li><a href="{{ url('/') }}"><b>Home</b></a></li>
					<li><a href="{{ url('/sch_imp') }}"><b>Schedule Import</b></a></li>
					<li><a href="{{ url('/') }}"><b>Report Import</b></a></li>
				</ul>
				@endif
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
					@else						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hi {{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')
    <footer class="footer">
      <div class="container">
        <p align="center" class="text-muted"><b>Created By Teguh.</b></p>
      </div>
    </footer>
	<!-- Scripts -->
	<script src="{{asset('js/jquery-2.1.3.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('js/dataTables.bootstrap.js')}}"></script>
	<script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('js/responsive.bootstrap.min.js')}}"></script>
	<script src="{{asset('js/bootstrap-editable.js')}}"></script>
	<script src="{{asset('js/select2.full.js')}}"></script>
	<script src="{{asset('js/moment.js')}}"></script>
	<script type="text/javascript">
       $(document).ready(function() {
       $(".js-example-basic-single").select2();
      });
    </script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#sch_import').DataTable( {
		        responsive: {
		            details: {
		                display: $.fn.dataTable.Responsive.display.modal( {
		                    header: function ( row ) {
		                        var data = row.data();
		                        return 'Details for '+data[0]+' '+data[1];
		                    }
		                } ),
		                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
		                    tableClass: 'table'
		                } )
		            }
		        }
		    } );
		    $('#sch_import4').DataTable( {
		        responsive: {
		            details: {
		                display: $.fn.dataTable.Responsive.display.modal( {
		                    header: function ( row ) {
		                        var data = row.data();
		                        return 'Details for '+data[0]+' '+data[1];
		                    }
		                } ),
		                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
		                    tableClass: 'table'
		                } )
		            }
		        }
		    } );
		    $('#sch_import5').DataTable( {
		    	processing: true,
		        serverSide: true,
		        ajax: 'http://localhost/goexim/public/data1',
		        columns: [
	            {data: 'shipment_name', name: 'shipment_name.shipment_name'},
	            {data: 'supplier', name: 'supplier.supplier'},
	            {data: 'origin', name: 'origin.origin'},
	            {data: 'ship', name: 'ship.ship'},
	            {data: 'cont_number', name: 'sch_imp.cont_number'},
	            {data: 'etd', name: 'sch_imp.etd'},
	            {data: 'eta', name: 'sch_imp.eta'},
	            {data: 'eta_aiia', name: 'sch_imp.eta_aiia'},
	            {data: 'ata_aiia', name: 'sch_imp.ata_aiia'},
	            {data: 'remark', name: 'sch_imp.remark'},
	        	],
		        responsive: {
		            details: {
		                display: $.fn.dataTable.Responsive.display.modal( {
		                    header: function ( row ) {
		                        var data = row.data();
		                        return 'Details for '+data[0]+' '+data[1];
		                    }
		                } ),
		                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
		                    tableClass: 'table'
		                } )
		            }
		        }
		    } );
		$('#sch_import2').DataTable({
		"paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false
		});
		$('#sch_import3').DataTable({
		"paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false
		});		
		} );
	</script>
	<script type="text/javascript">	
	$(document).ready(function() {
    $.fn.editable.defaults.mode = 'popup';
	$(".ata_aiia").editable({
		combodate: {
                minYear: 2014,
                maxYear: 2020,
                minuteStep: 1
        }
	});
	$(".remark").editable();
	});
	</script>
</body>
</html>
