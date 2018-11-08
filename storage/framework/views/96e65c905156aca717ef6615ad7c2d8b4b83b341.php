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
					<div class="panel-heading">Lista de tareas/proyectos asignados</div>
					<div class="panel-body">
						<table class="table">
						<thead>
						<tr>
							<th>Tarea/Proyecto</th>
							<th>Comenzar</th>
							<th>Terminar</th>
						</tr>
						</thead>
						<?php $__currentLoopData = $query; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

						<tbody>
							<tr> 
								<?php if($tarea->numeroProyecto==1): ?>
						       		<td> <?php echo e($tarea->numeroProyecto); ?></td>						       		
						       		<td>
						       		<?php echo link_to_route('Proyecto1',$title='',$tarea->numeroProyecto, $attributes = ['class'=>'btn btn-success btn-sm glyphicon glyphicon-open-file']); ?>	
									</td>	
							     	<td>
							     	<?php echo Form::model($tarea, ['route' => ['ListaTareasEstudiante.update', $tarea->numeroProyecto ], 'method'=>'PUT']); ?>

							    	<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
							    <?php endif; ?>
							    		
								<?php if($tarea->numeroProyecto==2): ?>
								 	<td> <?php echo e($tarea->numeroProyecto); ?></td>						       		
									<td>
										<?php echo link_to_route('Proyecto2',$title='',$tarea->numeroProyecto, $attributes = ['class'=>'btn btn-success btn-sm glyphicon glyphicon-open-file']); ?>	
									</td>
								 	<td><?php echo Form::open(['route'=>['eliminaTarea'],'method'=>'DELETE']); ?>

									<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
								<?php endif; ?>

								<?php if($tarea->numeroProyecto==3): ?>
									<td> <?php echo e($tarea->numeroProyecto); ?></td>						       		
									<td><a href="www.google.com" class="btn btn-success">
									<span class="glyphicon glyphicon-save-file" aria-hidden="true"></span></a>	
									</td>	
									<td>
									<?php echo Form::open(['route'=>['eliminaTarea'],'method'=>'DELETE']); ?>

									<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
								<?php endif; ?>

								<?php if($tarea->numeroProyecto==4): ?>
								  	<td> <?php echo e($tarea->numeroProyecto); ?></td>						       		
								   	<td><a href="www.google.com" class="btn btn-success">
									<span class="glyphicon glyphicon-save-file" aria-hidden="true"></span></a>	
									</td>
									<td>
									<?php echo Form::open(['route'=>['eliminaTarea'],'method'=>'DELETE']); ?>

									<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
								<?php endif; ?>
								
								<?php if($tarea->numeroProyecto==5): ?>
								  	<td> <?php echo e($tarea->numeroProyecto); ?></td>						       		
								   	<td><a href="www.google.com" class="btn btn-success">
								  	<span class="glyphicon glyphicon-save-file" aria-hidden="true"></span></a>	
									</td>	
									<td>
									<?php echo Form::open(['route'=>['eliminaTarea'],'method'=>'DELETE']); ?>

									<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
								<?php endif; ?>

								<?php if($tarea->numeroProyecto==6): ?>
								  	<td> <?php echo e($tarea->numeroProyecto); ?></td>						       		
								   	<td><a href="www.google.com" class="btn btn-success">
								  	<span class="glyphicon glyphicon-save-file" aria-hidden="true"></span></a>	
									</td>	
									<td>
									<?php echo Form::open(['route'=>['eliminaTarea'],'method'=>'DELETE']); ?>

									<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
								<?php endif; ?>
								
								<?php if($tarea->numeroProyecto==7): ?>
								  	<td> <?php echo e($tarea->numeroProyecto); ?></td>						       		
								   	<td><a href="www.google.com" class="btn btn-success">
								  	<span class="glyphicon glyphicon-save-file" aria-hidden="true"></span></a>	
									</td>	
									<td>
									<?php echo Form::open(['route'=>['eliminaTarea'],'method'=>'DELETE']); ?>

									<button type="submit" class="btn btn-warning"> <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button>
								<?php endif; ?>



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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>