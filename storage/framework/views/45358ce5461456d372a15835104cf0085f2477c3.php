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
					<div class="panel-heading"></div>
					<div class="panel-body">						
						<table class="table">
						<thead>
      						<tr>
       							<th colspan="3"><?php echo Form::label('indicaciones', 'Se te pide que consideres los siguientes elementos para definir tu esándar de codificación, el cuál utilizarás a lo largo de este curso:'); ?></th>
       						</tr>
    					</thead>
    					<tbody>
    						<tr>
						       	<td><?php echo Form::label('variables', '1.- Declaración de variables.'); ?></td>
						        <td><?php echo Form::label('constantes','2.- Declaración de constantes.'); ?></td>
						        <td><?php echo Form::label('compilador', '3.- Directivas de compilador.'); ?></td>
     						 </tr> 
     						 <tr>
							      <td><?php echo Form::label('comentarios','4.- Declaración de constantes.'); ?></td>
							      <td><?php echo Form::label('variables','5.- Declaración de variables.'); ?></td>
							      <td><?php echo Form::label('sangrias', '6.- Sangrías, y espacios en blanco entre líneas.'); ?></td>
						    </tr>
						    <tr>
							     <td><?php echo Form::label('delimitadores', '7.- Delimitadores.'); ?></td>
								 <td><?php echo Form::label('llaves', 		'8.- Uso de llaves.'); ?></td>
								 <td><?php echo Form::label('sentencias', 	'9.- Sentencias.'); ?></td>
							<tr>
								<td><?php echo Form::label('flujos', 		'10.- Control de flujos.'); ?></td>
								<td><?php echo Form::label('encabezados', 	'11.- Encabezados.'); ?></td>
							</tr>
					    </tbody>
					    </table>
						<div class="col-md-10 col-md-offset-1">
							<div class="panel panel-default">
								<div class="panel-heading"></div>
									<div class="panel-body">
									
										<?php echo Form::open(['route' => 'regStdCodififica','method'=>'POST']); ?>

											<?php echo e(csrf_field()); ?>

											<input type="hidden" name="idEstudiante" value="{!$id = Auth::id()!}">
											<textarea  class="ckeditor" name="contenido" id="contenido" rows="10" cols="80"></textarea>
											
											<table class="table">
											<tr>
												<td>
													<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
												<?php echo Form::close(); ?>


												<?php echo Form::open(['route' => 'editStdCodififica',$id = Auth::id(),'method'=>'PUT']); ?>

											    <?php echo e(csrf_field()); ?>

												<!--<a href="editStdCodififica" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"> /&nbsp;<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span></a> -->

												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
												
														<?php echo Form::close(); ?>


												</td>
												</tr>
											
											</table>
                        				<?php echo $__env->make('Proyecto1.modales.modalEditStdCodifica', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    				</div>
                				</div>
            			</div>				
					</div>
					</div>
					</div>
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

<script src="<?php echo e(asset('/vendor/ckeditor/ckeditor.js')); ?>"></script>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>