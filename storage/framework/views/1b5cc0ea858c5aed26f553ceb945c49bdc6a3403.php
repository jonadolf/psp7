
<div class="modal fade" id="myModal" tabindex="-1" name="myModal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   
     
         <div class="modal-body">
             <div class="well">
                <h4 class="modal-title" id="exampleModalLabel">Nuevo Estándar de Cuantificación:</h4>
             </div>
             <?php echo Form::model($var, ['route' => ['StdCuantificacion.update', $var['id'] ], 'method'=>'PUT']); ?>

             <?php echo $__env->make('StdCuantificacion.formStdCuantifica', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>            
                  <input type="hidden" name="idEstudiante" value="<?php echo $var['idEstudiante']; ?>"/>
                  <input type="hidden" name="numeroProyecto" value="<?php echo $var['numeroProyecto']; ?>"/>  
   
    <?php echo Form::close(); ?>

    
    </div>
  </div>
</div>