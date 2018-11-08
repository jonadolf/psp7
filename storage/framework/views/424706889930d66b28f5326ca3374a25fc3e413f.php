<?php $__env->startSection('htmlheader_title'); ?>
	Fases de un proyecto!
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
	<?php echo $__env->make('alertas.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Registrar fases de proyecto</div>
					<div class="panel-body">

						<?php echo Form::open(['route' => 'Fases.store','method'=>'POST']); ?>



						<div class="form-group">

							<?php echo Form::label('Número de fase'); ?>

							<?php echo Form::text('numero',null,['class'=>'form-control','placeholder'=>'Ingresa el número de fase', 'style'=>'color: black']); ?>


						</div>


						<div class="form-group">

							<?php echo Form::label('Nombre de fase'); ?>

							<?php echo Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de fase', 'style'=>'color: black']); ?>


						</div>

						<div class="form-group">

							<?php echo Form::submit('Registrar',['class'=>'btn btn-primary']); ?>


						</div>
						<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>