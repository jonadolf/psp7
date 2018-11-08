@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Asignación PSP 7</div>
					<div class="panel-body">
					{!! Form::open(['route' => 'Asigna.store','method'=>'POST']) !!}
						{{ csrf_field() }}



<div class="form-group" >
<div class="table-responsive">
 <table class="table" id="tabla">

    <thead>
      <tr>
        <th>{!!Form::label('Lista estudiantes')!!}</th>
        <th>{!!Form::label('id estudiantes')!!}</th>
       
        <th>@foreach ($proyecto as $proyectos)
        	<select id="mySelect" name="mySelect" onchange="copia()">
        		<option value=""> Número proyecto-</option>
        		<option value="{{ $proyectos['NumeroProyecto'] }}"> 
        		{{ $proyectos['NumeroProyecto'] }} </option>
        	
        	</select>


          

        <th valign="center"><label>Asignar</label><br>
       

        <input type="checkbox" class="asignado" id="asignado" name="asignado"
        onclick="SeleccionProyecto(this,'proyecto')" /></th><label>
        
        </th>    
</tr>
    </thead>

    <tbody>

    @foreach($estudiante as $estudiantes)
    @if($estudiantes->tipoUsuario==2)
      <tr>
        <td>
        <input type="text" id="p_{{$estudiantes->nombreEstudiante}}" name="nombreEstudiante[]" value="{{$estudiantes->name}}"/> </td>
        <td>
        <input type="text" name="idEstudiante[]" value="{{$estudiantes->id}}"/> </td>
        <td>
        <input type="text" name="NumeroProyecto[]" class="asignado" id="p_{{$proyectos->NumeroProyecto}}" read_only="read_only" value="{{$proyectos->NumeroProyecto}}"> </td>
        <td>
        <input type="checkbox" name="asignado[]" id="p_{{$estudiantes->id}}"
        class="proyecto" value="{{$estudiantes->id}}" />
        </td>
     </tr>
   </tbody>
   			@endif
   			@endforeach
        @endforeach
      
     		
     		
  </table>
 </div>
 <div class="box-footer">
		<button type="submit" class="btn btn-success">Registrar</button>
</div>
			{{ Form::close() }}
      </div>
					</div>
				</div>
			</div>
		</div>
	</div>
{!! $estudiante->render()!!}

@endsection

<script type="text/javascript">
function SeleccionProyecto(master,cn){
	var cbarray=document.getElementsByClassName(cn);
	for(var i=0; i<cbarray.length;i++){
		var cb=document.getElementById(cbarray[i].id);
		cb.checked = master.checked;
	}
}
  </script>

<script type="text/javascript">
	function copia() {
	var lista = document.getElementById('mySelect').value;
    var  iarray = document.getElementsByClassName('asignado');
    for(var i=0; i< iarray.length;i++){
    	iarray[i].value = lista;
    }
}

</script>

</head>
																																																																																																										