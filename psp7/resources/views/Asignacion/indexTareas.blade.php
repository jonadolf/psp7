@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">{!!Form::label('encabezado', 'Lista de tareas por asignar')!!}</div>
					<div class="panel-body">
						<div class="table-responsive">
						
						<table class="table" id="tabla">
						
					 	<thead>
					 	<tr>
					 	<th>{!!Form::label('numero', 'Número')!!}</th>
					 	<th>{!!Form::label('comenzar', 'Asignar')!!}</th>
					 	
					 	</tr>
					 	</thead>
					 	
					 
					 	@foreach ($proyecto as $proyectos)
					 	<tbody>
					 		<div class="btn-group" role="group" aria-label="...">
					 		<tr>
					 			<td>{!!$proyectos->NumeroProyecto!!}</td>
					 			<td> {!!Form::open(['route'=>['listaTarea'],'method'=>'POST'])  !!}
					 			<input type="hidden" name="NumeroProyecto" value="{!!$proyectos->NumeroProyecto!!}"><button type="submit" class="btn btn-primary"> <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></button></td>
					 			{!!Form::close()!!}

					 		</tr>
					 		<div class="btn-group" role="group" aria-label="...">
					 	</tbody>
					 	
					 		@endforeach

					 	</table>
					 	
					 	</div>
					











					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
