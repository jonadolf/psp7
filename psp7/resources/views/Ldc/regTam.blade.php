@extends('adminlte::page')

@if(Session::has('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{Session::get('message')}}
	</div>
@endif


@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
@include('alertas.errors')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="box-title">Registro de tamaño en líneas de código (LDC)</h3>
					</div>
					<div class="panel-body">
					<div class="form-group">

					{!! Form::open(['route' => 'Ldc.store','method'=>'POST']) !!}
						{{ csrf_field() }}
						 <table class="table">
						 <thead>
						 <tr>
						 <th>{!!Form::label('numeroProyecto','Numero de Proyecto')!!}</th>
						 <th>{!!Form::label('usuario','Tu identificador de usuario:')!!}</th>
						 </tr>
						 </thead>
						 <tbody>
						 <tr>
						 <td>
						<select id="idProyecto" name="idProyecto">
						<option value="">-- Seleccione--</option>@foreach ($ldc as $lineas)<option value="{{ $lineas['NumeroProyecto'] }}"> {{ $lineas['NumeroProyecto'] }} </option>
						@endforeach
						</select>
						</td>
						<td>
						{!!Form::text('idUsuario',$id = Auth::id(),['class'=>'form-control','style'=>'color: black'])!!}
						</td>
						</tbody>
						</table>
						@include('Ldc.formsLdc.tamanio')	
						<button type="submit" class="btn btn-success">Registrar</button>
					</div>
				{!! Form::close() !!}
	

						</div>
						</div>

					</div>
				</div>
			</div>

@endsection
