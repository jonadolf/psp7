@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">{!!Form::label('encabezado', 'Control de proyectos PSP')!!}</div>
					<div class="panel-body">
					{!! Form::open(['route' => 'Tareas.store','method'=>'POST']) !!}
						{{ csrf_field() }}

						<div class="table-responsive">
						<table class="table" id="tabla">
					 	<thead>
					 	<tr> <td>Proyecto seleccionado: <strong>{!!	$data['NumeroProyecto']!!}</strong> <br> <label>Seleccionar a todos los estudiantes</label> <input type="checkbox" class="asignado" id="asignado" name="asignado"
        onclick="asigna(this,'proyecto')" />
					 	
					 	</td></tr>
					 	
					 	<tr>
					 		<td><label><strong>Lista de estudiantes</strong></label>
					 		</td>
					 		<td><label> <strong>Asignado</strong></label></th>

					 		</td>
					 		<td><label><strong>Operación</strong></label></td>
					 	</tr>
					 	</thead>
					 	@foreach($usuario as $usuario)
					 	@if($usuario->tipoUsuario==2)
					 	<tbody>
					 	<tr>
					 		<td>{!!$usuario->name!!}<input type="hidden" name="estudiante" value="{!!$usuario->name!!}"></td>
					 		<td><input type="checkbox" name="asignado[]" 
					 			id="p_{{$usuario->id}}"
					 			class="proyecto" 
					 			value="{{$usuario->id}}"> 

					 	     </td>
					 		  <td><a href="" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <br><a href="" > <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
					 		  @endif
					 		  @endforeach

					 		  <tr><td><button type="submit" class="btn btn-success">Registrar</button></td></tr>
					 	
					 
					 	</tr>
					 	
					 	
					 	</tbody>
					 	</table>						
					</div>
				</div>
			</div>
		</div>
	</div>
					{!! Form::close() !!}
@endsection

<script type="text/javascript">
function asigna(master,cn){
	var cbarray=document.getElementsByClassName(cn);
	for(var i=0; i<cbarray.length;i++){
		var cb=document.getElementById(cbarray[i].id);
		cb.checked = master.checked;
	}
}
 </script>