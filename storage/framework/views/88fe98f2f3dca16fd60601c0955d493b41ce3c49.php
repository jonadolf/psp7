<?php echo $__env->make('alertas.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('alertas.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->startSection('htmlheader_title'); ?>
	Change Title here!
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Líneas de código planeadas</div>
					<div class="panel-body">
						<label><strong>Nota: No es necesario caputar los campos "Reusado, Nuevo y Cambiando, Total.</strong></label>
					<?php echo Form::open(['route' => 'planLdc.store','method'=>'POST']); ?>

						<?php echo e(csrf_field()); ?>

						 <table class="table">
						 <thead>
						 <tr>
						 <th><?php echo Form::label('numeroProyecto','Número de Proyecto'); ?></th>
						 </tr>
						 </thead>
						 <tbody>
						 <tr>
						 <td>
						 <select id="idProyecto" name="idProyecto">
						<option value="">-- Seleccione--</option><?php $__currentLoopData = $asigna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyectos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?><option value="<?php echo e($proyectos->numeroProyecto); ?>"> <?php echo e($proyectos->numeroProyecto); ?> </option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</select>					
						</td>
						<td>
						<input type="hidden" name="idUsuario" value="<?php echo $proyectos->idEstudiante; ?>"/>
						
						</td>
						</tbody>
						</table>
						<?php echo $__env->make('TamLdc.formPlanLdc', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
						<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
					</div>
				<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>