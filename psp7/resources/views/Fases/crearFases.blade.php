@extends('adminlte::page')

@section('htmlheader_title')
	Fases de un proyecto!
@endsection


@section('main-content')
	@include('alertas.errors')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Registrar fases de proyecto</div>
					<div class="panel-body">

						{!! Form::open(['route' => 'Fases.store','method'=>'POST']) !!}


						<div class="form-group">

							{!!Form::label('Número de fase') !!}
							{!!Form::text('numero',null,['class'=>'form-control','placeholder'=>'Ingresa el número de fase', 'style'=>'color: black'])  !!}

						</div>


						<div class="form-group">

							{!!Form::label('Nombre de fase') !!}
							{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de fase', 'style'=>'color: black'])  !!}

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
