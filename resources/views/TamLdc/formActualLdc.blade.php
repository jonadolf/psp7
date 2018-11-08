<div class="form-group" >
 <table class="table">
   
    </thead>
    <tbody>
      <tr>
        <td>{!!Form::label('nombre','Base:')!!}</td>
        <td>{!!Form::text('actualBase',null,['class'=>'form-control','style'=>'color: black'])!!}</td>

      </tr> 

      <tr>
      <td>{!!Form::label('eliminado','Eliminado:')!!}</td>
        <td>{!!Form::text('actualEliminado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
      </tr>

      <tr>
        <td>{!!Form::label('nombre','Modificado:')!!}</td>
        <td>{!!Form::text('actualModificado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        
      </tr>
      <tr>
        <td>{!!Form::label('nombre','Adicionado:')!!}</td>
        <td>{!!Form::text('actualAdicionado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
     
      </tr>
      <tr>
        <td>{!!Form::label('nombre','Reusado:')!!}</td>
        <td>{!!Form::text('actualReusado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
     
      </tr>
      <tr>
        <td>Nuevo y cambiado:</td>
        <td>{!!Form::text('actualNyC',null,['class'=>'form-control','style'=>'color: black'])!!}</td>

      </tr>
      <tr>
        <td>{!!Form::label('nombre','Total:')!!}</td>
        <td>{!!Form::text('actualTotal',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
      
      </tr> 

    </tbody>
  </table>
 </div>