<?php $__env->startSection('htmlheader_title'); ?>
	<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
	<?php echo $__env->make('alertas.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Editar defectos</div>
					<div class="panel-body">

						<?php echo Form::model($defecto, ['route' => ['Defectos.update', $defecto->id ], 'method'=>'PUT']); ?>


						<div class="form-group">

							<?php echo Form::label('Número defecto'); ?>

							<?php echo Form::text('numero',value($defecto->Numero),['class'=>'form-control', 'style'=>'color: black']); ?>


						</div>


						<div class="form-group">

							<?php echo Form::label('Nombre defecto'); ?>

							<?php echo Form::text('nombre',value($defecto->Nombre),['class'=>'form-control','placeholder'=>'Ingresa el nombre de fase', 'style'=>'color: black']); ?>


						</div>

						<div class="form-group">

							<?php echo Form::label('Descripcion defecto'); ?>

							<?php echo Form::text('descripcion',value($defecto->Descripcion),['class'=>'form-control','placeholder'=>'Ingresa el nombre de fase', 'style'=>'color: black']); ?>


						</div>


						<div class="form-group">

							<?php echo Form::submit('Editar',['class'=>'btn btn-primary']); ?>


						</div>
						<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>