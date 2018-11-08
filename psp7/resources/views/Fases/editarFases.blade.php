@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Change Header</div>
					<div class="panel-body">

						{!! Form::model($fase, ['route' => ['Fases.update', $fase->id ], 'method'=>'PUT']) !!}

						<div class="form-group">

							{!!Form::label('Número de fase') !!}
							{!!Form::text('numero',value($fase->Numero),['class'=>'form-control', 'style'=>'color: black'])  !!}

						</div>


						<div class="form-group">

							{!!Form::label('Nombre de fase') !!}
							{!!Form::text('nombre',value($fase->Nombre),['class'=>'form-control','placeholder'=>'Ingresa el nombre de fase', 'style'=>'color: black'])  !!}

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
	</div>
@endsection
