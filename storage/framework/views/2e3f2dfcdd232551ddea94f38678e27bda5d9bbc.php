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
                        <!-- Inicia formulario crear proyectos-->

                        <!-- /.box-body -->



                        <!-- Termina formulario crear proyectos-->





                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>