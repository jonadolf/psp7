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
					<div class="panel-heading">Actualizar el registro de las líneas de código actualeadas</div>
					<div class="panel-body">
					<label><strong>Nota: No es necesario caputar los campos "Reusado, Nuevo y Cambiando, Total.</strong></label>
						<div class="form-group" >
						 <?php echo Form::model($actualiza, ['route' => ['updActLdc', $actualiza->id ], 'method'=>'PUT']); ?>

						 <table class="table">
						   
						    </thead>
						    <tbody>
						      <tr>
						        <td><?php echo Form::label('nombre','Base:'); ?></td>
						        <td><?php echo Form::text('actualBase',$actualiza->actualBase,['class'=>'form-control','style'=>'color: black']); ?></td>

						      </tr> 

						      <tr>
						      <td><?php echo Form::label('eliminado','Eliminado:'); ?></td>
						        <td><?php echo Form::text('actualEliminado',$actualiza->actualEliminado,['class'=>'form-control','style'=>'color: black']); ?></td>
						      </tr>

						      <tr>
						        <td><?php echo Form::label('nombre','Modificado:'); ?></td>
						        <td><?php echo Form::text('actualModificado',$actualiza->actualModificado,['class'=>'form-control','style'=>'color: black']); ?></td>
						        
						      </tr>
						      <tr>
						        <td><?php echo Form::label('nombre','Adicionado:'); ?></td>
						        <td><?php echo Form::text('actualAdicionado',$actualiza->actualAdicionado,['class'=>'form-control','style'=>'color: black']); ?></td>
						     
						      </tr>
						      <tr>
						        <td><?php echo Form::label('nombre','Reusado:'); ?></td>
						        <td><?php echo Form::text('actualReusado',$actualiza->actualReusado,['class'=>'form-control','style'=>'color: black']); ?></td>
						     
						      </tr>
						      <tr>
						        <td> <?php echo Form::label('nombre','Nuevo y cambiado:'); ?></td>
						        <td><?php echo Form::text('actualNyC',$actualiza->actualNyC,['class'=>'form-control','style'=>'color: black']); ?></td>

						      </tr>
						      <tr>
						        <td><?php echo Form::label('nombre','Total:'); ?></td>
						        <td><?php echo Form::text('actualTotal',$actualiza->actualTotal,['class'=>'form-control','style'=>'color: black']); ?></td>
						     </tr>
						     <tr>
						        <td>
						     	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
						        </td>
						     </tr> 
						    </tbody>
						  </table>
						    <input type="hidden" name="idUsuario" value="<?php echo e($actualiza->idUsuario); ?>" >
						  <input type="hidden" name="numeroProyecto" value="<?php echo e($actualiza->idproyecto); ?>" >
						   <?php echo Form::close(); ?>

						 </div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>