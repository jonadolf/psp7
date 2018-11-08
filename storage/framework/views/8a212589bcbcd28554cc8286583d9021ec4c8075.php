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
			<div class="col-md-12 ">
				<div class="panel panel-default">
					<div class="panel-heading">
						
					</div>
					<div class="panel-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>Número proyecto</th>
								<th>Tamaño Plan</th>
								<th>Tiempo Revisiones</th>
								<th>Estándares</th>
								<th>Registros</th>
							</tr>	
							</thead>
							<tbody>
							<?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<tr>
								<td><?php echo e($proyecto->NombreProyecto); ?></td>
								<td><a href="#" class="badge badge-primary">Ir</a></td>
								<td></td>
								<td></td>
								<td>
									<a href="" class="btn btn-primary btn-sm">Editar&nbsp;&nbsp;&nbsp;&nbsp; </a>
									<form role="form" method="POST" action="" >
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
										<input type="hidden" name="id" value="">
										<button type="submit"  class="btn btn-danger btn-sm">Eliminar </button>
									</form>
								</td>
							</tr></tbody>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           
						</table>
						</div>
						</div>

					</div>
				</div>
			</div>
 <?php echo $proyectos->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>