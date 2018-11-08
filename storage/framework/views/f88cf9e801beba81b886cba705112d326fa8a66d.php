<?php $__env->startSection('htmlheader_title'); ?>
	Change Title here!
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo Form::label('encabezado', 'Lista de tareas por asignar'); ?></div>
					<div class="panel-body">
						<div class="table-responsive">
						
						<table class="table" id="tabla">
						
					 	<thead>
					 	<tr>
					 	<th><?php echo Form::label('numero', 'Número'); ?></th>
					 	<th><?php echo Form::label('comenzar', 'Asignar'); ?></th>
					 	
					 	</tr>
					 	</thead>
					 	
					 
					 	<?php $__currentLoopData = $proyecto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyectos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					 	<tbody>
					 		<div class="btn-group" role="group" aria-label="...">
					 		<tr>
					 			<td><?php echo $proyectos->NumeroProyecto; ?></td>
					 			<td> <?php echo Form::open(['route'=>['listaTarea'],'method'=>'POST']); ?>

					 			<input type="hidden" name="NumeroProyecto" value="<?php echo $proyectos->NumeroProyecto; ?>"><button type="submit" class="btn btn-primary"> <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></button></td>
					 			<?php echo Form::close(); ?>


					 		</tr>
					 		<div class="btn-group" role="group" aria-label="...">
					 	</tbody>
					 	
					 		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

					 	</table>
					 	
					 	</div>
					











					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>