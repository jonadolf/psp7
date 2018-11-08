<?php $__env->startSection('main-content'); ?>
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Change Header</div>
					<div class="panel-body">

						<ul class="nav nav-tabs">



							<li role="presentation" class="active"><a href="#">Home</a>
							</li>

							hola





							<li role="presentation"><a href="#">Profile</a>
							

							</li> hola2
							<li role="presentation"><a href="#">Messages</a></li>
						</ul>
																</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>