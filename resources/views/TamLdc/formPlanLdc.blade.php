<div class="form-group" >
 <table class="table">
   
    </thead>
    <tbody>
      <tr>
        <td>{!!Form::label('nombre','Base:')!!}</td>
        <td>{!!Form::text('PlanBase',null,['class'=>'form-control','style'=>'color: black'])!!}</td>

      </tr> 

      <tr>
      <td>{!!Form::label('eliminado','Eliminado:')!!}</td>
        <td>{!!Form::text('planEliminado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
      </tr>

      <tr>
        <td>{!!Form::label('nombre','Modificado:')!!}</td>
        <td>{!!Form::text('planModificado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        
      </tr>
      <tr>
        <td>{!!Form::label('nombre','Adicionado:')!!}</td>
        <td>{!!Form::text('planAdicionado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
     
      </tr>
      <tr>
        <td>{!!Form::label('nombre','Reusado:')!!}</td>
        <td>{!!Form::text('planReusado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
     
      </tr>
      <tr>
        <td>Nuevo y cambiado:</td>
        <td>{!!Form::text('planNyC',null,['class'=>'form-control','style'=>'color: black'])!!}</td>

      </tr>
      <tr>
        <td>{!!Form::label('nombre','Total:')!!}</td>
        <td>{!!Form::text('planTotal',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
      
      </tr> 

    </tbody>
  </table>
 </div>