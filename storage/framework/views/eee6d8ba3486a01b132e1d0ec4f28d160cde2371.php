<?php $__env->startSection('htmlheader_title'); ?>
	Change Title here!
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Change Header</div>
					<div class="panel-body">

						<?php echo Form::model($fase, ['route' => ['Fases.update', $fase->id ], 'method'=>'PUT']); ?>


						<div class="form-group">

							<?php echo Form::label('Número de fase'); ?>

							<?php echo Form::text('numero',value($fase->Numero),['class'=>'form-control', 'style'=>'color: black']); ?>


						</div>


						<div class="form-group">

							<?php echo Form::label('Nombre de fase'); ?>

							<?php echo Form::text('nombre',value($fase->Nombre),['class'=>'form-control','placeholder'=>'Ingresa el nombre de fase', 'style'=>'color: black']); ?>


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
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>