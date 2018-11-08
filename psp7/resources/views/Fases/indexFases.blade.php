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
						<a href="/Fases/create" class="btn btn-success">Nuevo registro</a>
					</div>
					<div class="panel-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
							<th>Numero</th>
							<th>Nombre</th>
							<th>Operación</th>
							</tr>
							</thead>
							@foreach($fases as $fase)
							<tbody>
							<tr>
							<td>{{$fase->Numero}}</td>
							<td>{{$fase->Nombre}}</td>
							<td>
								{!!link_to_route('Fases.edit', $title = 'Editar&nbsp;&nbsp;&nbsp;&nbsp;', $parameters = $fase->id, $attributes = ['class'=>'btn btn-primary btn-sm']) !!}
								{!!Form::open(['route'=>['Fases.destroy',$fase->id],'method'=>'DELETE'])  !!}
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
	{!! $fases->render() !!}
@endsection
