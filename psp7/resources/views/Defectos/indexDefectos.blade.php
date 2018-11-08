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
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="/Defectos/create" class="btn btn-success">Nuevo registro</a>
					</div>

					<div class="panel-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>Numero</th>
								<th>Nombre</th>
								<th>Descripción</th>
							</tr>
							</thead>
							@foreach($defecto as $defectos)
								<tbody>
								<tr>
									<td>{{$defectos->Numero}}</td>
									<td>{{$defectos->Nombre}}</td>
									<td>{{$defectos->Descripcion}}</td>

									<td>
										{!!link_to_route('Defectos.edit', $title = 'Editar&nbsp;&nbsp;&nbsp;&nbsp;', $parameters = $defectos->id, $attributes = ['class'=>'btn btn-primary btn-sm']) !!}
										{!!Form::open(['route'=>['Defectos.destroy',$defectos->id],'method'=>'DELETE'])  !!}
										{!! Form::submit('Eliminar',['class	'=>'btn btn-danger btn-sm']) !!}

										{!! Form::close()!!}
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
	{!! $defecto->render() !!}
@endsection
