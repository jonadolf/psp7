<!-- inicia modal -->
<meta id="token" name="token" content="<?php echo e(csrf_token()); ?>" />
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span >       </button>
      		</div>
     	<div class="modal-body">
     	<!-- inicia lista de estudiantes--> 
      		<div class="table-responsive">
      			<table class="table" id="tabla">
      				<thead> 
      					<tr> 
      					    <td>Proyecto seleccionado: <strong><?php echo $data['NumeroProyecto']; ?></strong> </td>
					 	</tr>

					 		<td> Estado:  <input type="text" id="estado" name="estado" value="Abierto"/ >
					 		</td>
					 	</tr>
					 	<tr>
					 		<td><label><strong>Lista de estudiantes</strong></label></td>
					 	</tr>
					 	 </thead>		 			
					 		<tbody>
					 			<tr>
					 				<td>
					 					<select class="form-control" id="idEstudiante" name="idEstudiante">
					 						<option>--Selecione--</option>
					 						<?php $__currentLoopData = $usuario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					 						<?php if($usuario->tipoUsuario==2): ?>
					 						<option value="<?php echo e($usuario->id); ?>"><?php echo e($usuario->name); ?>

					 						<?php endif; ?>
					 						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>	
        								</select>
         								<input type="hidden" id="numProyecto" name="numProyecto" value="<?php echo $data['NumeroProyecto']; ?>" />      								

					 				</td>			 		  			
					 		 	</tr>
					 		 </tbody>
					 </table>
				</div>
      			<!--fin lista estudiantes-->
      		</div>
      	<div class="modal-footer">
        	<button type="button" class="btn btn-secondary" onclick="javascript:window.location.reload();">Cerrar</button>
        	<button type="button" class="btn btn-primary" id="asigna" name="asigna">Save changes</button>


        	 
        </div>
    </div>
  </div>
</div>
						
						<!--termina modal-->
					