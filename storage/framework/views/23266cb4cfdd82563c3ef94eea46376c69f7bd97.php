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
						<label><strong>Nota: No es necesario caputar los campos "Reusado, Nuevo y Cambiando, Total.</strong></label>
					<?php echo Form::open( array('route' => 'regActLdc','method'=>'POST')); ?>

					
						<?php echo e(csrf_field()); ?>

						 <table class="table">
						 <thead>
						 <tr>
						 <th><?php echo Form::label('numeroProyecto','Número de Proyecto:  '.$numeroProyecto); ?></th>
						 </tr>
						 </thead>
						 <tbody>
						 <tr>
						 <td>
												
						</select>					
						</td>
						<td>
						<input type="hidden" name="idUsuario" value=""/>
						
						</td>
						</tbody>
						</table>
						<?php echo $__env->make('TamLdc.formActualLdc', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

						<input type="hidden" name="numeroProyecto" value="<?php echo $numeroProyecto; ?>">
						<input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">

						<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
					</div>
					<?php echo Form::close(); ?>

				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>