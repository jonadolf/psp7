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
					<div class="panel-heading"> <a href="ListaTareasEstudiante"><strong>Terminar el proyecto 2	</a></strong>	</div>
					<div class="panel-body">

									   

					    <div class="col-xs-6 col-md-3">
					    	Reg. tamaños (LDC)
					    	    <button data-toggle="modal" data-target="#myModal"> <a href="#" class="thumbnail"><img src="<?php echo e(asset('img/Nuevas/drawing.png')); ?>"></a>	</button>
					    	     <?php echo $__env->make('TamLdc.modalInicio', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>		    	
					    	 

					   	</div>

					    <div class="col-xs-6 col-md-3">

					   <a href="#" class="thumbnail">
					   <img src="https://3.bp.blogspot.com/-kNa05SDhq3A/WBtHFyXZ1bI/AAAAAAAACm0/xsCl-FX6tuYQ00B6MMZeR8JwisIQIrFIgCEw/s1600/Sistema%2BVentas%2BLaravel%2B-%2BVentas%2BListado.JPG" alt="...">
					   </a>
					   </div>
					</div>
					
					<div class="row">

					<div class="col-xs-6 col-md-3">
					   <a href="#" class="thumbnail">
					   <img src="https://3.bp.blogspot.com/-kNa05SDhq3A/WBtHFyXZ1bI/AAAAAAAACm0/xsCl-FX6tuYQ00B6MMZeR8JwisIQIrFIgCEw/s1600/Sistema%2BVentas%2BLaravel%2B-%2BVentas%2BListado.JPG" alt="...">
					   </a>
					</div>
					<div class="col-xs-6 col-md-3">
					   <a href="#" class="thumbnail">
					   <img src="https://3.bp.blogspot.com/-kNa05SDhq3A/WBtHFyXZ1bI/AAAAAAAACm0/xsCl-FX6tuYQ00B6MMZeR8JwisIQIrFIgCEw/s1600/Sistema%2BVentas%2BLaravel%2B-%2BVentas%2BListado.JPG" alt="...">
					   </a>
					</div>

					<div class="col-xs-6 col-md-3">
					   <a href="#" class="thumbnail">
					   <img src="https://3.bp.blogspot.com/-kNa05SDhq3A/WBtHFyXZ1bI/AAAAAAAACm0/xsCl-FX6tuYQ00B6MMZeR8JwisIQIrFIgCEw/s1600/Sistema%2BVentas%2BLaravel%2B-%2BVentas%2BListado.JPG" alt="...">
					   </a>
					</div>
					<div class="col-xs-6 col-md-3">
					   <a href="#" class="thumbnail">
					   <img src="https://3.bp.blogspot.com/-kNa05SDhq3A/WBtHFyXZ1bI/AAAAAAAACm0/xsCl-FX6tuYQ00B6MMZeR8JwisIQIrFIgCEw/s1600/Sistema%2BVentas%2BLaravel%2B-%2BVentas%2BListado.JPG" alt="...">
					   </a>
					</div>

					



					</div>





					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>