@extends('layouts.app')
@section('estilos')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-lg-3">
						<button class="btn btn-success btn-lg" id="btnExcel">
							XML
						</button>
					</div>
					<div class="col-lg-6">
						<h2 class="text-center">Facturas (Cuentas por pagar)</h2>
					</div>
					<div class="col-lg-3">
						<button class="btn btn-primary btn-block btn-lg" data-target="#ventana" data-toggle="modal" id="btnAgregar">
							Nueva Factura
							<img alt="" src="{{asset('imagenes/agregar.png')}}" />
						</button>
					</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive-lg col-lg-12">
							<table class="table table-striped table-bordered table-sm" id="tblTabla">
								<thead>
									<th class="text-center">Numero Factura</th>
									<th class="text-center">Movimiento</th>
									<th class="text-center">Fecha de creacion</th>
									<th class="text-center">Fecha de la factura</th>
									<th class="text-center">Total</th>
									<th class="text-center">Saldo</th>
									<th class="text-center">Editar</th>
									<th class="text-center">Eliminar</th>
								</thead>
								<tbody>
									@foreach($facturas as $factura)
									<tr>
										<td class="text-center">{{$factura->FacCxpNum}}</td>
										<td class="text-center">{{$factura->movimiento->RefCli}}</td>
										<td class="text-center">{{$factura->FecCreFac}}</td>
										<td class="text-center">{{$factura->FecFac}}</td>
										<td class="text-center">{{$factura->TotFac}}</td>
										<td class="text-center">{{$factura->SalFac}}</td>
										<td class="text-center">
											<button class="btn btn-info btnEditar" value="{{$factura->FacCxpId}}" data-target="#ventana" data-toggle="modal" >Editar</button>
										</td>
										<td class="text-center">
											<a href="{{url('FacturaCxp/eliminar/')}}/{{$factura->FacCxpId}}"><button class="btn btn-danger" onclick="return confirm('¿Seguro de que desea eliminar este registro?')">Eliminar</button></a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			@if(Session::has('message'))
			<div class="card-footer">
				<div class="alert alert-{{Session::get('class')}} alert-dismissable">
				<button type="button" class="close" data-dismiss="alert">&times;</button>{{Session::get('message')}}</div>
			</div>
			@endif
		</div>
	</div>
</div>
@endsection
@include('FacturaCxp.modal')
@section('scripts')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
</script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js">
</script>
<script src="{{asset('js/tabla.js')}}"></script>
<script type="text/javascript" src="{{asset('js/facturacxp/data.js')}}">
</script>
<script src="{{asset('js/facturacxp/editar.js')}}">
</script>
@endsection
