<?php $__env->startSection('htmlheader_title'); ?>
	Change Title here!
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Asignación PSP 7</div>
					<div class="panel-body">
					<?php echo Form::open(['route' => 'Asigna.store','method'=>'POST']); ?>

						<?php echo e(csrf_field()); ?>




<div class="form-group" >
<div class="table-responsive">
 <table class="table" id="tabla">

    <thead>
      <tr>
        <th><?php echo Form::label('Lista estudiantes'); ?></th>
        <th><?php echo Form::label('id estudiantes'); ?></th>
       
        <th><?php $__currentLoopData = $proyecto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyectos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        	<select id="mySelect" name="mySelect" onchange="copia()">
        		<option value=""> Número proyecto-</option>
        		<option value="<?php echo e($proyectos['NumeroProyecto']); ?>"> 
        		<?php echo e($proyectos['NumeroProyecto']); ?> </option>
        	
        	</select>


          

        <th valign="center"><label>Asignar</label><br>
       

        <input type="checkbox" class="asignado" id="asignado" name="asignado"
        onclick="SeleccionProyecto(this,'proyecto')" /></th><label>
        
        </th>    
</tr>
    </thead>

    <tbody>

    <?php $__currentLoopData = $estudiante; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiantes): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <?php if($estudiantes->tipoUsuario==2): ?>
      <tr>
        <td>
        <input type="text" id="p_<?php echo e($estudiantes->nombreEstudiante); ?>" name="nombreEstudiante[]" value="<?php echo e($estudiantes->name); ?>"/> </td>
        <td>
        <input type="text" name="idEstudiante[]" value="<?php echo e($estudiantes->id); ?>"/> </td>
        <td>
        <input type="text" name="NumeroProyecto[]" class="asignado" id="p_<?php echo e($proyectos->NumeroProyecto); ?>" read_only="read_only" value="<?php echo e($proyectos->NumeroProyecto); ?>"> </td>
        <td>
        <input type="checkbox" name="asignado[]" id="p_<?php echo e($estudiantes->id); ?>"
        class="proyecto" value="<?php echo e($estudiantes->id); ?>" />
        </td>
     </tr>
   </tbody>
   			<?php endif; ?>
   			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
      
     		
     		
  </table>
 </div>
 <div class="box-footer">
		<button type="submit" class="btn btn-success">Registrar</button>
</div>
			<?php echo e(Form::close()); ?>

      </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php echo $estudiante->render(); ?>


<?php $__env->stopSection(); ?>

<script type="text/javascript">
function SeleccionProyecto(master,cn){
	var cbarray=document.getElementsByClassName(cn);
	for(var i=0; i<cbarray.length;i++){
		var cb=document.getElementById(cbarray[i].id);
		cb.checked = master.checked;
	}
}
  </script>

<script type="text/javascript">
	function copia() {
	var lista = document.getElementById('mySelect').value;
    var  iarray = document.getElementsByClassName('asignado');
    for(var i=0; i< iarray.length;i++){
    	iarray[i].value = lista;
    }
}

</script>

</head>
																																																																																																										
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>