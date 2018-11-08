<meta id="token" name="token" content="<?php echo e(csrf_token()); ?>" />

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
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">  <a href="/Tareas" class="btn-link" role="button">Terminar</a> <br>
						Proyecto seleccionado: <?php echo $data['NumeroProyecto']; ?>

							
					</div>
					<div class="panel-body">
						<div class="form-group" >					
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miModal">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
								

						<!-- Modal asigna -->
						
						<?php echo $__env->make('Asignacion.forms.modalAsigna', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

						<!--Tabla dinámica de asignacion-->
						<table class="table">
						<thead>
						<tr>
							<th>Identificador del estudiante</th>
							<th>Estado</th>
							<th>Accion</th>
						</tr>
						</thead>
						<?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<tbody>
							<tr>
						       	<td><?php echo e($tarea->idEstudiante); ?></td>
						       	<td><?php echo e($tarea->estado); ?></td>
						       	<td> <?php echo Form::open(['route'=>['eliminaTarea',$tarea->id],'method'=>'DELETE']); ?>

							    	<input type="hidden" name="id" value="<?php echo e($tarea->id); ?>">
							    	<input type="hidden" id='NumeroProyecto' name="NumeroProyecto" value="<?php echo $data['NumeroProyecto']; ?>">
									<button type="submit" class="btn btn-danger"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
									</td>
										<?php echo Form::close(); ?>

							     </td>
      						</tr>
     
    					 </tbody>
    					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    					</table>
    					<!--Termina tabla dinámica de asignacion-->
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

<?php $__env->stopSection(); ?>

	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="<?php echo e(asset('js/funciones.js')); ?>"></script>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>