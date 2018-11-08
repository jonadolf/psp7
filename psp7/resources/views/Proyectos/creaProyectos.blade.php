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
						<h3 class="box-title">Registro de proyectos o asignaciones PSP</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

						{!! Form::open(['route' => 'Proyectos.store','method'=>'POST','files'=>'true','enctype'=>'multipart/form-data']) !!}
						{{ csrf_field() }}
						<div class="box-body">



									<label >Nombre</label>
									<input type="text" style="color: #0c0c0c" class="form-control" id="nombre" placeholder="Nombre del proyecto" name="NombreProyecto">


									<div class="form-group">

										<br>
										<label>Por favor, agregue al registro la descripción del ejercicio,	recuerde que el archivo debe estar en <strong>formato pdf</strong></label>
										<br>
										<input type="file" name="descripcion" accept=".pdf">
									</div>



									<div class="form-group">
										<label>Describa los elementos de evaluación para el ejercicio.</label>
										<textarea class="form-control" style="color: #0c0c0c" rows="3" id="evaluacion" name="ElementosDeEvaluacion" placeholder="Ingrese los elementos a evaluar..."></textarea>
									</div>

									<div class="form-group">

										<label >Número</label>
										<input type="text" style="color: #0c0c0c" class="form-control" id="numero" placeholder="Número del proyecto" name="NumeroProyecto">
									</div>



								</div>
								<!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-success">Registrar</button>
								</div>
					{!! Form::close() !!}


		</div>
	</section>


@endsection
