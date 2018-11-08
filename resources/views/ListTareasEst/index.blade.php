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
					<div class="panel-heading">Lista de tareas/proyectos asignados</div>
					<div class="panel-body">
						<table class="table">
						<thead>
						<tr>
							<th>Tarea/Proyecto</th>
							<th>Comenzar</th>
							<th>Terminar</th>
						</tr>
						</thead>
						@foreach ($query as $tarea)

						<tbody>
							<tr> 
								@if($tarea->numeroProyecto==1)
						       		<td> {{$tarea->numeroProyecto}}</td>						       		
						       		<td>
						       		{!!link_to_route('Proyecto1',$title='',$tarea->numeroProyecto, $attributes = ['class'=>'btn btn-success btn-sm glyphicon glyphicon-open-file'])!!}	
									</td>	
							     	<td>
							     	{!! Form::model($tarea, ['route' => ['ListaTareasEstudiante.update', $tarea->numeroProyecto ], 'method'=>'PUT']) !!}
							    	<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
							    @endif
							    		
								@if($tarea->numeroProyecto==2)
								 	<td> {{$tarea->numeroProyecto}}</td>						       		
									<td>
										{!! link_to_route('Proyecto2',$title='',$tarea->numeroProyecto, $attributes = ['class'=>'btn btn-success btn-sm glyphicon glyphicon-open-file'])!!}	
									</td>
								 	<td>{!!Form::open(['route'=>['eliminaTarea'],'method'=>'DELETE'])  !!}
									<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
								@endif

								@if($tarea->numeroProyecto==3)
									<td> {{$tarea->numeroProyecto}}</td>						       		
									<td><a href="www.google.com" class="btn btn-success">
									<span class="glyphicon glyphicon-save-file" aria-hidden="true"></span></a>	
									</td>	
									<td>
									{!!Form::open(['route'=>['eliminaTarea'],'method'=>'DELETE'])  !!}
									<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
								@endif

								@if($tarea->numeroProyecto==4)
								  	<td> {{$tarea->numeroProyecto}}</td>						       		
								   	<td><a href="www.google.com" class="btn btn-success">
									<span class="glyphicon glyphicon-save-file" aria-hidden="true"></span></a>	
									</td>
									<td>
									{!!Form::open(['route'=>['eliminaTarea'],'method'=>'DELETE'])  !!}
									<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
								@endif
								
								@if($tarea->numeroProyecto==5)
								  	<td> {{$tarea->numeroProyecto}}</td>						       		
								   	<td><a href="www.google.com" class="btn btn-success">
								  	<span class="glyphicon glyphicon-save-file" aria-hidden="true"></span></a>	
									</td>	
									<td>
									{!!Form::open(['route'=>['eliminaTarea'],'method'=>'DELETE'])  !!}
									<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
								@endif

								@if($tarea->numeroProyecto==6)
								  	<td> {{$tarea->numeroProyecto}}</td>						       		
								   	<td><a href="www.google.com" class="btn btn-success">
								  	<span class="glyphicon glyphicon-save-file" aria-hidden="true"></span></a>	
									</td>	
									<td>
									{!!Form::open(['route'=>['eliminaTarea'],'method'=>'DELETE'])  !!}
									<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
								@endif
								
								@if($tarea->numeroProyecto==7)
								  	<td> {{$tarea->numeroProyecto}}</td>						       		
								   	<td><a href="www.google.com" class="btn btn-success">
								  	<span class="glyphicon glyphicon-save-file" aria-hidden="true"></span></a>	
									</td>	
									<td>
									{!!Form::open(['route'=>['eliminaTarea'],'method'=>'DELETE'])  !!}
									<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
								@endif



									{!! Form::close() !!}
								</td>
							     
      						</tr>
    
    					 </tbody>
    					 
    					@endforeach
    					</table>
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
