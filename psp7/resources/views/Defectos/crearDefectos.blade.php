@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	@include('alertas.errors')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Registrar Defectos de proyecto</div>
					<div class="panel-body">

						{!! Form::open(['route' => 'Defectos.store','method'=>'POST']) !!}


						<div class="form-group">

							{!!Form::label('Número de defecto') !!}
							{!!Form::text('numero',null,['class'=>'form-control','placeholder'=>'Ingresa el número del defecto.', 'style'=>'color: black'])  !!}

						</div>


						<div class="form-group">

							{!!Form::label('Nombre de defecto') !!}
							{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del defecto.', 'style'=>'color: black'])  !!}

						</div>
						<div class="form-group">

							{!!Form::label('Descripón de defecto') !!}
							{!!Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa la descripción para el defecto.', 'style'=>'color: black'])  !!}

						</div>

						<div class="form-group">

							{!!Form::submit('Registrar',['class'=>'btn btn-primary'])  !!}

						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
