
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
             {!! Form::model($var, ['route' => ['StdCuantificacion.update', $var['id'] ], 'method'=>'PUT']) !!}
             @include('StdCuantificacion.formStdCuantifica')            
                  <input type="hidden" name="idEstudiante" value="{!!$var['idEstudiante']!!}"/>
                  <input type="hidden" name="numeroProyecto" value="{!!$var['numeroProyecto']!!}"/>  
   
    {!! Form::close() !!}
    
    </div>
  </div>
</div>