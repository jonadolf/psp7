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
						<a href="/Proyectos/create" class="btn btn-success">Nuevo registro</a>
					</div>
					<div class="panel-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>Nombre</th>
								<th>Descripción</th>
								<th>Elementos de evaluación</th>
								<th>Número de proyecto</th>
								<th>Operación</th>
							</tr>
							</thead>
							<?php $__currentLoopData = $lee_proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyectos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<tbody>
							<tr>
								<td><?php echo e($proyectos->NombreProyecto); ?></td>
								<td>
									<a href="<?php echo e($proyectos->RutaArchivo); ?>" download="<?php echo e($proyectos->RutaArchivo); ?>">documento</a>
								</td>
								<td><?php echo e($proyectos->ElementosDeEvaluacion); ?></td>
								<td><?php echo e($proyectos->NumeroProyecto); ?></td>
								<td>
									<a href="<?php echo e(action('proyectosController@edit', $proyectos->id)); ?>" class="btn btn-primary btn-sm">Editar&nbsp;&nbsp;&nbsp;&nbsp; </a>
									<form role="form" method="POST" action="<?php echo e(action('proyectosController@destroy',$proyectos->id)); ?>" >
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
										<input type="hidden" name="id" value="<?php echo e($proyectos->id); ?>">
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
    <?php echo $lee_proyectos->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>