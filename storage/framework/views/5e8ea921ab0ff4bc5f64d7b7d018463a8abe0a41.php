<?php $__env->startSection('htmlheader_title'); ?>
	Change Title here!
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>

<?php echo $__env->make('alertas.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


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

					<?php echo Form::model($usuarios, ['route' => ['Usuarios.update', $usuarios->id ], 'method'=>'PUT','files'=>'true','enctype'=>'multipart/form-data']); ?>

						<?php echo e(csrf_field()); ?>



						<div class="box-body">

							<div class="form-group">
								<?php echo Form::label('Nombre completo'); ?>

								<?php echo Form::text('name',value($usuarios->name),['class'=>'form-control', 'style'=>'color: black']); ?>

							</div>

							<div class="form-group">
								<?php echo Form::label('Tipo de usuario'); ?>

								<?php echo Form::text('tipoUsuario',value($usuarios->tipoUsuario),['class'=>'form-control', 'style'=>'color: black']); ?>

							</div>
							<div class="form-group">
								<?php echo Form::label('Correo electrónico'); ?>

								<?php echo Form::email('email',value($usuarios->email),['class'=>'form-control', 'style'=>'color: black']); ?>

							</div>


							<div class="form-group">
								<?php echo Form::label('Contraseña'); ?>

								<?php echo Form::password('password',['class'=>'form-control', 'style'=>'color: black']); ?>

								
							</div>
							<div class="form-group">
								<?php echo Form::label('Confirme Contraseña'); ?>

								<?php echo Form::password('password_confirmado',['class'=>'form-control', 'style'=>'color: black']); ?>

								
							</div>
							<div class="form-group">
								<?php echo Form::submit('Editar',['class'=>'btn btn-primary']); ?>

								</div>

							
						</div><!-- /.box-body -->

										
						<?php echo Form::close(); ?>


				<!-- /.box -->
			</div>
		</div>
	</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>