@extends('adminlte::page')


@include('alertas.success')

@include('alertas.errors')


@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Líneas de código planeadas</div>
					<div class="panel-body">
						<label><strong>Nota: No es necesario caputar los campos "Reusado, Nuevo y Cambiando, Total.</strong></label>
					{!! Form::open(['route' => 'planLdc.store','method'=>'POST']) !!}
						{{ csrf_field() }}
						 <table class="table">
						 <thead>
						 <tr>
						 <th>{!!Form::label('numeroProyecto','Número de Proyecto')!!}</th>
						 </tr>
						 </thead>
						 <tbody>
						 <tr>
						 <td>
						 <select id="idProyecto" name="idProyecto">
						<option value="">-- Seleccione--</option>@foreach ($asigna as $proyectos)<option value="{{ $proyectos->numeroProyecto }}"> {{ $proyectos->numeroProyecto }} </option>
						@endforeach
						</select>					
						</td>
						<td>
						<input type="hidden" name="idUsuario" value="{!!$proyectos->idEstudiante!!}"/>
						
						</td>
						</tbody>
						</table>
						@include('TamLdc.formPlanLdc')	
						<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
					</div>
				{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
