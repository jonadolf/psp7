<?php if(Session::has('message')): ?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo e(Session::get('message')); ?>

	</div>
<?php endif; ?>



<?php $__env->startSection('htmlheader_title'); ?>
	Change Title here!
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="/Defectos/create" class="btn btn-success">Nuevo registro</a>
					</div>

					<div class="panel-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>Numero</th>
								<th>Nombre</th>
								<th>Descripción</th>
							</tr>
							</thead>
							<?php $__currentLoopData = $defecto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $defectos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<tbody>
								<tr>
									<td><?php echo e($defectos->Numero); ?></td>
									<td><?php echo e($defectos->Nombre); ?></td>
									<td><?php echo e($defectos->Descripcion); ?></td>

									<td>
										<?php echo link_to_route('Defectos.edit', $title = 'Editar&nbsp;&nbsp;&nbsp;&nbsp;', $parameters = $defectos->id, $attributes = ['class'=>'btn btn-primary btn-sm']); ?>

										<?php echo Form::open(['route'=>['Defectos.destroy',$defectos->id],'method'=>'DELETE']); ?>

										<?php echo Form::submit('Eliminar',['class	'=>'btn btn-danger btn-sm']); ?>


										<?php echo Form::close(); ?>

									</td>
								</tr>
								</tbody>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo $defecto->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>