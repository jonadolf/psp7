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
						<h3 class="box-title">Edición de usuarios</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

					{!! Form::model($usuarios, ['route' => ['Usuarios.update', $usuarios->id ], 'method'=>'PUT','files'=>'true','enctype'=>'multipart/form-data']) !!}
						{{ csrf_field() }}


						<div class="box-body">

							<div class="form-group">
								{!!Form::label('Nombre completo') !!}
								{!!Form::text('name',value($usuarios->name),['class'=>'form-control', 'style'=>'color: black'])  !!}
							</div>

							<div class="form-group">
								{!!Form::label('Tipo de usuario') !!}
								{!!Form::text('tipoUsuario',value($usuarios->tipoUsuario),['class'=>'form-control', 'style'=>'color: black'])  !!}
							</div>
							<div class="form-group">
								{!!Form::label('Correo electrónico') !!}
								{!!Form::email('email',value($usuarios->email),['class'=>'form-control', 'style'=>'color: black'])  !!}
							</div>


							<div class="form-group">
								{!!Form::label('Contraseña') !!}
								{!!Form::password('password',['class'=>'form-control', 'style'=>'color: black'])  !!}
								
							</div>
							<div class="form-group">
								{!!Form::label('Confirme Contraseña') !!}
								{!!Form::password('password_confirmado',['class'=>'form-control', 'style'=>'color: black'])  !!}
								
							</div>
							<div class="form-group">
								{!!Form::submit('Editar',['class'=>'btn btn-primary'])  !!}
								</div>

							
						</div><!-- /.box-body -->

										
						{!! Form::close() !!}

				<!-- /.box -->
			</div>
		</div>
	</section>


@endsection
