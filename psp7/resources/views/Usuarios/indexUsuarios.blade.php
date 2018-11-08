@extends('adminlte::page')

@if(Session::has('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{Session::get('message')}}
	</div>
@endif


@section('Listado de usuarios registrados en el sistema')
	Listado de usuarios registrados en el sistema'
@endsection


@section('main-content')


	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="/Usuarios/create" class="btn btn-success">Nuevo registro</a>
					</div>
					<div class="panel-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>Nombre</th>
								<th>Tipo usario<br> 
								(1= Asesor, 2= Estudiante)</th>
								<th>Correo electrónico</th>
								
								<th>Operación</th>
							</tr>
							</thead>
							@foreach($lee_usuarios as $usuarios)
							<tbody>
							<tr>
								<td>{{$usuarios->name}}</td>
								<td>{{$usuarios->tipoUsuario}}</td>
								<td>{{$usuarios->email}}</td>
								
								<td>
								{!!link_to_route('Usuarios.edit', $title = 'Editar&nbsp;&nbsp;&nbsp;&nbsp;', $parameters = $usuarios->id, $attributes = ['class'=>'btn btn-primary btn-sm']) !!}
								{!!Form::open(['route'=>['Usuarios.destroy',$usuarios->id],'method'=>'DELETE'])  !!}
								{!!Form::submit('Eliminar',['class	'=>'btn btn-danger btn-sm']) !!}
									{!! Form::close() !!}

								</td>
							</tr></tbody>
                            @endforeach
						</table>
						</div>
						</div>

					</div>
				</div>
			</div>
    

 {!! $lee_usuarios->render()!!}
 
@endsection
