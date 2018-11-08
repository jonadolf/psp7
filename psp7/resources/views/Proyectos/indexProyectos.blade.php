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
			<div class="col-md-12 ">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="/Proyectos/create" class="btn btn-success">Nuevo registro</a>
					</div>
					<div class="panel-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>Nombre</th>
								<th>Descripción</th>
								<th>Elementos de evaluación</th>
								<th>Número de proyecto</th>
								<th>Operación</th>
							</tr>
							</thead>
							@foreach($lee_proyectos as $proyectos)
							<tbody>
							<tr>
								<td>{{$proyectos->NombreProyecto}}</td>
								<td>
									<a href="{{$proyectos->RutaArchivo}}" download="{{$proyectos->RutaArchivo}}">documento</a>
								</td>
								<td>{{$proyectos->ElementosDeEvaluacion}}</td>
								<td>{{$proyectos->NumeroProyecto}}</td>
								<td>
									<a href="{{ action('proyectosController@edit', $proyectos->id) }}" class="btn btn-primary btn-sm">Editar&nbsp;&nbsp;&nbsp;&nbsp; </a>
									<form role="form" method="POST" action="{{action('proyectosController@destroy',$proyectos->id) }}" >
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="id" value="{{ $proyectos->id }}">
										<button type="submit"  class="btn btn-danger btn-sm">Eliminar </button>
									</form>
								</td>
							</tr></tbody>
                            @endforeach
						</table>
						</div>
						</div>

					</div>
				</div>
			</div>
    {!! $lee_proyectos->render()!!}
@endsection
