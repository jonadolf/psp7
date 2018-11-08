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
					<div class="panel-heading">Indica Si o NO, las opciones que consideres 
												pertinentes para tu estándar de cuantificación.
												</div>

					<?php echo Form::open(['route' => 'StdCuantificacion.store','method'=>'POST']); ?>

					<?php echo e(csrf_field()); ?>

					<input type="hidden" name="idEstudiante" value="<?php echo $id = Auth::id(); ?>">
					<div class="panel-body">
					<table class="table">
					<tr>
						<td colspan="2">Lenguaje de programación:</td>
						<td><?php echo Form::text('lenguaje');; ?></td>
					</tr>
					
					<tr>
						<td colspan="2">tipo conteo (físico / lógico)</td>
						<td><?php echo Form::select('tipoConteo', array('logico' => 'Lógico','fisico'=>'Físico'));; ?></td>
					</tr>
					<tr>
						<td colspan="3" style="text-align: center;"> Tipo de instrucciones</td>
					</tr>

					<tr>
						<td colspan="2" style="align-content: center; ">Ejecutables:</td>
						<td><?php echo Form::select('ejecutables', array('si' => 'Si','no'=>'No'));; ?></td>
					</tr>
					<tr>
						<td rowspan="5" style="text-align: center; padding:70px; ">No ejecutables:</td>
					</tr>
						<tr><td>Declaraciones</td>
						<td><?php echo Form::select('declaraciones', array('si' => 'Si','no'=>'No'));; ?></td>
					</tr>
					<tr>	
						<td>Directivas del compilador</td>
						<td><?php echo Form::select('dCompilador', array('si' => 'Si','no'=>'No'));; ?></td>
					</tr>
					<tr>
						<td>Comentarios</td>
						<td><?php echo Form::select('comentarios', array('si' => 'Si','no'=>'No'));; ?></td>
					</tr>
					<tr>
						<td>Lineas en blanco</td>
						<td><?php echo Form::select('lineasBlanco', array('si' => 'Si','no'=>'No'));; ?></td>
					</tr>
					<tr>
						<td colspan="2" style="align-content: center;">Delimitadores { }</td>
						<td><?php echo Form::select('delimitadores', array('si' => 'Si','no'=>'No'));; ?></td>
					</tr>
					<tr>
						<td colspan="3" style="text-align: center;">Comentarios: 
						
					</tr>
					<tr>
						
					<td colspan="3"><textarea  class="ckeditor" name="comentariosAd" id="comentariosAd" rows="10" cols="80"></textarea> </td>
					</tr>

					<tr>
						<td colspan="3">
							<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
						</td>

					</tr>
					
					</table>
					<?php echo Form::close(); ?>

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