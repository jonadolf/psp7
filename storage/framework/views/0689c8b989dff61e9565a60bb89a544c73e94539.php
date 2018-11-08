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
					<div class="panel-heading">Redacción actual del estándar de codificación</div>
					<div class="panel-body">
					  <div class="col-xs-10 col-md-80">
					  <div>
					  	<h4 class="modal-title"></h4>
					  		<?php echo $var['contenido'];; ?> 

					  		<!-- Modal actualizar stdCodificacion -->
					  		<table>
					  		<tbody>
					  			<tr>
					  				<td colspan="4"><button type="button" class="btn btn-success btn-md " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
					  				</td>
					  				
					  				
					  				<td colspan="4"><a href="/Proyecto1" class="btn btn-secondary btn-md" role="button" >Menú Proyecto 1</a>
					  									  				</td>
					  			</tr>

					  		</tbody>
					  		</table>
					  		
					  		
					  		 
					  	</div>
					  	<?php echo $__env->make('StdCodificacion.modales.modalEditStdCodifica', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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