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
						<h3 class="box-title">Registro de usuarios del sistema</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

						<?php echo Form::open(['route' => 'Usuarios.store','method'=>'POST','files'=>'true','enctype'=>'multipart/form-data']); ?>

						<?php echo e(csrf_field()); ?>

						<div class="box-body">

							<div class="form-group">
								<label >Nombre completo del usuario</label>
								<input type="text" style="color: #0c0c0c" class="form-control" id="nombre" placeholder="Nombre completo del usuario" name="nombre">
							</div>

							<div class="form-group">
									  <?php echo e(Form::label('tipoUsuario', 'Tipo de usuario', ['class' => 'control-label'])); ?>  <?php echo Form::select('tipoUsuario',  ['Seleccione...','Asesor','Estudiante']); ?>

							</div>


							<div class="form-group">
								<label >Correo electrónico</label>
								 <input type="email" class="form-control" id="email" name="email" style="color: #0c0c0c">
							</div>


							<div class="form-group">
								<label >Contraseña</label>
								<input id="pw1" type="password" style="color: #0c0c0c" class="form-control" name="password" placeholder="Password">
							</div>


								<div class="form-group">
								<label >Confirme Contraseña</label>
								<input id="pw2" type="password" style="color: #0c0c0c" class="form-control" name="password_confirmado" placeholder="Password">
							</div>

						</div><!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-success">Registrar</button>
								</div>
					<?php echo Form::close(); ?>



		</div>
	</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>