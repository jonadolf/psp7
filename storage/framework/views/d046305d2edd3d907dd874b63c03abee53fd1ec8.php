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
					  	<h4 class="modal-title" id="exampleModalLabel"></h4>
					  		<?php echo $query[0]->contenido; ?>


					  	</div>
					  	
					  	<textarea id="newContent" name="newContent" class="ckeditor" rows="10" cols="80"></textarea>
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