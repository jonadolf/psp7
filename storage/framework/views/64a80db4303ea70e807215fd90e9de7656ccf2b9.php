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
<?php echo $__env->make('alertas.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="box-title">Registro de tamaño en líneas de código (LDC)</h3>
					</div>
					<div class="panel-body">
					<div class="form-group">

					<?php echo Form::open(['route' => 'Ldc.store','method'=>'POST']); ?>

						<?php echo e(csrf_field()); ?>

						 <table class="table">
						 <thead>
						 <tr>
						 <th><?php echo Form::label('numeroProyecto','Numero de Proyecto'); ?></th>
						 <th><?php echo Form::label('usuario','Tu identificador de usuario:'); ?></th>
						 </tr>
						 </thead>
						 <tbody>
						 <tr>
						 <td>
						<select id="idProyecto" name="idProyecto">
						<option value="">-- Seleccione--</option><?php $__currentLoopData = $ldc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lineas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?><option value="<?php echo e($lineas['NumeroProyecto']); ?>"> <?php echo e($lineas['NumeroProyecto']); ?> </option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</select>
						</td>
						<td>
						<?php echo Form::text('idUsuario',$id = Auth::id(),['class'=>'form-control','style'=>'color: black']); ?>

						</td>
						</tbody>
						</table>
						<?php echo $__env->make('Ldc.formsLdc.tamanio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
						<button type="submit" class="btn btn-success">Registrar</button>
					</div>
				<?php echo Form::close(); ?>

	

						</div>
						</div>

					</div>
				</div>
			</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>