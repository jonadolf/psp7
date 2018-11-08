
<div class="modal fade" id="myModal" tabindex="-1" name="myModal"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   
     
         <div class="modal-body">
             <div class="well">
                <h4 class="modal-title" id="exampleModalLabel">Nueva Redacción:</h4>
             </div>
             {!! Form::model($var, ['route' => ['StdCodificacion.update', $var['id'] ], 'method'=>'PUT']) !!}
              
              <div class="col-xs-10 col-md-80"> 
              <textarea class="ckeditor" name="newContent" id="newContent" rows="10" cols="80"></textarea>
            </div>
            <input type="hidden" name="idEstudiante" value="{!!$var['idEstudiante']!!}"/>
            <input type="hidden" name="numeroProyecto" value="{!!$var['numeroProyecto']!!}"/>

    
      
      <div class="modal-footer">
        <table class="table">
          <tr>
            <td>
              <button type="submit" class="btn btn-success btn-md"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
             
             <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cerrar</button>
           </td>      
          </tr>
        </table>
    {!! Form::close() !!}
    </div>
    </div>
  </div>
</div>