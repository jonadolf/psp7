@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Change Header</div>
					<div class="panel-body">
						<label><strong>Nota: No es necesario caputar los campos "Reusado, Nuevo y Cambiando, Total.</strong></label>
					{!! Form::open( array('route' => 'regActLdc','method'=>'POST')) !!}
					
						{{ csrf_field() }}
						 <table class="table">
						 <thead>
						 <tr>
						 <th>{!!Form::label('numeroProyecto','Número de Proyecto:  '.$numeroProyecto) !!}</th>
						 </tr>
						 </thead>
						 <tbody>
						 <tr>
						 <td>
												
						</select>					
						</td>
						<td>
						<input type="hidden" name="idUsuario" value=""/>
						
						</td>
						</tbody>
						</table>
						@include('TamLdc.formActualLdc')

						<input type="hidden" name="numeroProyecto" value="{!!$numeroProyecto!!}">
						<input type="hidden" name="idUsuario" value="{!!$idUsuario!!}">

						<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
