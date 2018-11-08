<?php $__env->startSection('htmlheader_title'); ?>
	Change Title here!
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo Form::label('encabezado', 'Control de proyectos PSP'); ?></div>
					<div class="panel-body">
					<?php echo Form::open(['route' => 'Tareas.store','method'=>'POST']); ?>

						<?php echo e(csrf_field()); ?>


						<div class="table-responsive">
						<table class="table" id="tabla">
					 	<thead>
					 	<tr> <td>Proyecto seleccionado: <strong><?php echo $data['NumeroProyecto']; ?></strong> <br> <label>Seleccionar a todos los estudiantes</label> <input type="checkbox" class="asignado" id="asignado" name="asignado"
        onclick="asigna(this,'proyecto')" />
					 	
					 	</td></tr>
					 	
					 	<tr>
					 		<td><label><strong>Lista de estudiantes</strong></label>
					 		</td>
					 		<td><label> <strong>Asignado</strong></label></th>

					 		</td>
					 		<td><label><strong>Operación</strong></label></td>
					 	</tr>
					 	</thead>
					 	<?php $__currentLoopData = $usuario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					 	<?php if($usuario->tipoUsuario==2): ?>
					 	<tbody>
					 	<tr>
					 		<td><?php echo $usuario->name; ?><input type="hidden" name="estudiante" value="<?php echo $usuario->name; ?>"></td>
					 		<td><input type="checkbox" name="asignado[]" 
					 			id="p_<?php echo e($usuario->id); ?>"
					 			class="proyecto" 
					 			value="<?php echo e($usuario->id); ?>"> 

					 	     </td>
					 		  <td><a href="" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <br><a href="" > <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></td>
					 		  <?php endif; ?>
					 		  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

					 		  <tr><td><button type="submit" class="btn btn-success">Registrar</button></td></tr>
					 	
					 
					 	</tr>
					 	
					 	
					 	</tbody>
					 	</table>						
					</div>
				</div>
			</div>
		</div>
	</div>
					<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<script type="text/javascript">
function asigna(master,cn){
	var cbarray=document.getElementsByClassName(cn);
	for(var i=0; i<cbarray.length;i++){
		var cb=document.getElementById(cbarray[i].id);
		cb.checked = master.checked;
	}
}
 </script>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>