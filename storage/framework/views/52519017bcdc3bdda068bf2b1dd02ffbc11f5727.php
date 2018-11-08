<?php if(Session::has('message')): ?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<?php echo e(Session::get('message')); ?>

	</div>
<?php endif; ?>


<?php $__env->startSection('Listado de usuarios registrados en el sistema'); ?>
	Listado de usuarios registrados en el sistema'
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>


	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="/Usuarios/create" class="btn btn-success">Nuevo registro</a>
					</div>
					<div class="panel-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>Nombre</th>
								<th>Tipo usario<br> 
								(1= Asesor, 2= Estudiante)</th>
								<th>Correo electrónico</th>
								
								<th>Operación</th>
							</tr>
							</thead>
							<?php $__currentLoopData = $lee_usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuarios): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<tbody>
							<tr>
								<td><?php echo e($usuarios->name); ?></td>
								<td><?php echo e($usuarios->tipoUsuario); ?></td>
								<td><?php echo e($usuarios->email); ?></td>
								
								<td>
								<?php echo link_to_route('Usuarios.edit', $title = 'Editar&nbsp;&nbsp;&nbsp;&nbsp;', $parameters = $usuarios->id, $attributes = ['class'=>'btn btn-primary btn-sm']); ?>

								<?php echo Form::open(['route'=>['Usuarios.destroy',$usuarios->id],'method'=>'DELETE']); ?>

								<?php echo Form::submit('Eliminar',['class	'=>'btn btn-danger btn-sm']); ?>

									<?php echo Form::close(); ?>


								</td>
							</tr></tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</table>
						</div>
						</div>

					</div>
				</div>
			</div>
    

 <?php echo $lee_usuarios->render(); ?>

 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>