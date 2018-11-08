@extends('adminlte::page')
<meta id="token" name="token" content="{{ csrf_token() }}" />

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


	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">  <a href="/Tareas" class="btn-link" role="button">Terminar</a> <br>
						Proyecto seleccionado: {!!$data['NumeroProyecto']!!}
							
					</div>
					<div class="panel-body">
						<div class="form-group" >					
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miModal">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
								

						<!-- Modal asigna -->
						
						@include('Asignacion.forms.modalAsigna')

						<!--Tabla dinámica de asignacion-->
						<table class="table">
						<thead>
						<tr>
							<th>Identificador del estudiante</th>
							<th>Estado</th>
							<th>Accion</th>
						</tr>
						</thead>
						@foreach ($tareas as $tarea)
						<tbody>
							<tr>
						       	<td>{{$tarea->idEstudiante}}</td>
						       	<td>{{$tarea->estado}}</td>
						       	<td> {!!Form::open(['route'=>['eliminaTarea',$tarea->id],'method'=>'DELETE'])  !!}
							    	<input type="hidden" name="id" value="{{$tarea->id}}">
							    	<input type="hidden" id='NumeroProyecto' name="NumeroProyecto" value="{!!$data['NumeroProyecto']!!}">
									<button type="submit" class="btn btn-danger"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
									</td>
										{!! Form::close() !!}
							     </td>
      						</tr>
     
    					 </tbody>
    					@endforeach
    					</table>
    					<!--Termina tabla dinámica de asignacion-->
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

@endsection

	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="{{ asset('js/funciones.js') }}"></script>
