@extends('adminlte::page')

@section('htmlheader_title')
	Change Title here!
@endsection


@section('main-content')

@include('alertas.errors')


	<!-- Main content -->
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-6">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Edición de proyectos o asignaciones PSP</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

					{!! Form::model($proyecto, ['route' => ['Proyectos.update', $proyecto->id ], 'method'=>'PUT','files'=>'true','enctype'=>'multipart/form-data']) !!}
						{{ csrf_field() }}

						<div class="box-body">
							<div class="form-group">
								<label for="">Nombre</label>
								<input type="text" value="{{$proyecto->NombreProyecto}}"
									  id="NombreProyecto"  name="NombreProyecto">
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Número</label>
								<input type="text" value=" {{$proyecto->NumeroProyecto }}"
									   id="NumeroProyecto"  name="NumeroProyecto">
							</div>

							<div class="form-group">
								<label>Por favor, agregue al registro la descripción del ejercicio, recuerde que el archivo debe estar en <strong>formato pdf</strong></label>
							<br>
								<input type="file" name="descripcion" value="Subir archivo">

							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Evaluación</label>
								<textarea class="form-control" style="color: #0c0c0c" rows="3" id="ElementosDeEvaluacion" name="ElementosDeEvaluacion">{{$proyecto->ElementosDeEvaluacion}}</textarea>

							</div>
						</div>
						<!-- /.box-body -->

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Actualizar</button>
						</div>
						{!! Form::close() !!}


						<div class="form-group">






				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>


@endsection
