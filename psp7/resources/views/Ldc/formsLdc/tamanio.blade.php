 <div class="form-group" >
 <table class="table">
    <thead>
      <tr>
        <th>{!!Form::label('nombre','Tamaño en LDC:')!!}</th>
        <th>{!!Form::label('nombre','Plan:')!!}</th>
        <th>{!!Form::label('nombre','Actual:')!!}</th>
        <th>{!!Form::label('nombre','A la fecha:')!!}</th>
        <th>{!!Form::label('nombre','% a la fecha:')!!}</th>
</tr>
    </thead>
    <tbody>
      <tr>
        <td>{!!Form::label('nombre','Base:')!!}</td>
        <td>{!!Form::text('PlanBase',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('actualBase',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('fechaBase',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('avgFechaBase',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
      </tr> 

      <tr>
      <td>{!!Form::label('eliminado','Eliminado:')!!}</td>
        <td>{!!Form::text('planEliminado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('actualEliminado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('fechaEliminado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('avgFechaEliminado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>



      </tr>



      <tr>
        <td>{!!Form::label('nombre','Modificado:')!!}</td>
        <td>{!!Form::text('planModificado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('actualModificado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('fechaModificado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('avgFechaModificado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        
      </tr>
      <tr>
        <td>{!!Form::label('nombre','Adicionado:')!!}</td>
        <td>{!!Form::text('planAdicionado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('actualAdicionado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
          <td>{!!Form::text('fechaAdicionado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
          <td>{!!Form::text('avgFechaAdicionado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
      </tr>
      <tr>
        <td>{!!Form::label('nombre','Reusado:')!!}</td>
        <td>{!!Form::text('planReusado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('actualReusado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('fechaReusado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('avgFechaReusado',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
      </tr>
      <tr>
        <td>Nuevo y cambiado:</td>
        <td>{!!Form::text('planNyC',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('actualNyC',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('fechaNyC',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('avgFechaNyC',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
      </tr>
      <tr>
        <td>{!!Form::label('nombre','Total:')!!}</td>
        <td>{!!Form::text('planTotal',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('actualTotal',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('fechaTotal',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
        <td>{!!Form::text('avgFechaTotal',null,['class'=>'form-control','style'=>'color: black'])!!}</td>
      </tr> 

    </tbody>
  </table>
 </div>