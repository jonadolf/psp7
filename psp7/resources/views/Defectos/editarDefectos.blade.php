@extends('adminlte::page')

@section('htmlheader_title')
	@endsection


@section('main-content')
	@include('alertas.errors')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Editar defectos</div>
					<div class="panel-body">

						{!! Form::model($defecto, ['route' => ['Defectos.update', $defecto->id ], 'method'=>'PUT']) !!}

						<div class="form-group">

							{!!Form::label('Número defecto') !!}
							{!!Form::text('numero',value($defecto->Numero),['class'=>'form-control', 'style'=>'color: black'])  !!}

						</div>


						<div class="form-group">

							{!!Form::label('Nombre defecto') !!}
							{!!Form::text('nombre',value($defecto->Nombre),['class'=>'form-control','placeholder'=>'Ingresa el nombre de fase', 'style'=>'color: black'])  !!}

						</div>

						<div class="form-group">

							{!!Form::label('Descripcion defecto') !!}
							{!!Form::text('descripcion',value($defecto->Descripcion),['class'=>'form-control','placeholder'=>'Ingresa el nombre de fase', 'style'=>'color: black'])  !!}

						</div>


						<div class="form-group">

							{!!Form::submit('Editar',['class'=>'btn btn-primary'])  !!}

						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
