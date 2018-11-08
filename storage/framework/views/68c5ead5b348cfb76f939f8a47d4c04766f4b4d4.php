
<div class="modal fade" id="myModal" tabindex="-1" name="myModal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="well">
       <h4 class="modal-title" id="exampleModalLabel">Redacción actual:</h4>
      </div>
      <?php echo $tareas[0]->contenido; ?>

         
         <div class="modal-body">
            <div class="col-xs-10 col-md-80">         
             <textarea" name="" value="<?php echo $tareas[0]->contenido;; ?>" rows="10" cols="80"></textarea>
            </div>
            <div class="well">
                <h4 class="modal-title" id="exampleModalLabel">Nueva Redacción:</h4>
             </div>
             <?php echo Form::open( ['route' => ['editStdCodififica' ], 'method'=>'PUT']); ?>        
            <div class="col-xs-10 col-md-80"> 
              <textarea class="ckeditor" name="newContent" id="newContent" rows="10" cols="80"></textarea>
            </div>
      
      <div class="modal-footer">
        <table class="table">
          <tr>
            <td>
              <button type="button" class="btn btn-default" data-dismiss="modal"> Terminar </button>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
           </td>      
          </tr>
        </table>
    <?php echo Form::close(); ?>

    </div>
    </div>
  </div>
</div>