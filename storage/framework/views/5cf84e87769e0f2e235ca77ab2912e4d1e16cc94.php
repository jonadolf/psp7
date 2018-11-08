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
					<div class="panel-heading">Estándar de cuantificacion actual</div>
					<div class="panel-body">
						<table class="table">
					<tr>
						<td colspan="2">Lenguaje de programación:</td>
						<td><?php echo $var->lenguaje; ?></td>
					</tr>
					
					<tr>
						<td colspan="2">tipo conteo:  </td>
						<td><?php echo $var->tipoConteo; ?></td>
					</tr>
					<tr>
						<td colspan="3" style="text-align: center;"> Tipo de instrucciones:</td>
					</tr>

					<tr>
						<td colspan="2" style="align-content: center; ">Ejecutables</td>
						<td><?php echo $var->ejecutables; ?></td>
						
					</tr>
					<tr>
						<td rowspan="5" style="text-align: center; padding:70px; ">No ejecutables:</td>
					</tr>
						<tr><td>Declaraciones</td>
						<td><?php echo $var->declaraciones; ?></td>
					</tr>
					<tr>	
						<td>Directivas del compilador</td>
						<td><?php echo $var->dCompilador; ?></td>
					</tr>
					<tr>
						<td>Comentarios</td>
						<td><?php echo $var->comentarios; ?></td>
					</tr>
					<tr>
						<td>Lineas en blanco</td>
						<td><?php echo $var->lineasBlanco; ?></td>
					</tr>
					<tr>
						<td colspan="2" style="align-content: center;">Delimitadores { }</td>
						<td><?php echo $var->delimitadores; ?></td>
					</tr>
					<tr>
						<td colspan="3" style="text-align: center;">Comentarios adicionales: </td>
					</tr>
					<tr>
						<td  colspan="3"><?php echo $var->comentariosAd; ?></td>
					<tr>
					
					<tr>
						<td colspan="4"><button type="button" class="btn btn-primary btn-md " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
					  	</td>

					</tr>
					
					</table>
					</div>

					<?php echo $__env->make('StdCuantificacion.modales.modalEditStdCuantifica', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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