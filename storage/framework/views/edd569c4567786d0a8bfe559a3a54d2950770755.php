 <div class="form-group" >
 <table class="table">
    <thead>
      <tr>
        <th><?php echo Form::label('nombre','Tamaño en LDC:'); ?></th>
        <th><?php echo Form::label('nombre','Plan:'); ?></th>
        <th><?php echo Form::label('nombre','Actual:'); ?></th>
        <th><?php echo Form::label('nombre','A la fecha:'); ?></th>
        <th><?php echo Form::label('nombre','% a la fecha:'); ?></th>
</tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo Form::label('nombre','Base:'); ?></td>
        <td><?php echo Form::text('PlanBase',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('actualBase',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('fechaBase',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('avgFechaBase',null,['class'=>'form-control','style'=>'color: black']); ?></td>
      </tr> 

      <tr>
      <td><?php echo Form::label('eliminado','Eliminado:'); ?></td>
        <td><?php echo Form::text('planEliminado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('actualEliminado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('fechaEliminado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('avgFechaEliminado',null,['class'=>'form-control','style'=>'color: black']); ?></td>



      </tr>



      <tr>
        <td><?php echo Form::label('nombre','Modificado:'); ?></td>
        <td><?php echo Form::text('planModificado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('actualModificado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('fechaModificado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('avgFechaModificado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        
      </tr>
      <tr>
        <td><?php echo Form::label('nombre','Adicionado:'); ?></td>
        <td><?php echo Form::text('planAdicionado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('actualAdicionado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
          <td><?php echo Form::text('fechaAdicionado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
          <td><?php echo Form::text('avgFechaAdicionado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
      </tr>
      <tr>
        <td><?php echo Form::label('nombre','Reusado:'); ?></td>
        <td><?php echo Form::text('planReusado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('actualReusado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('fechaReusado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('avgFechaReusado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
      </tr>
      <tr>
        <td>Nuevo y cambiado:</td>
        <td><?php echo Form::text('planNyC',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('actualNyC',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('fechaNyC',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('avgFechaNyC',null,['class'=>'form-control','style'=>'color: black']); ?></td>
      </tr>
      <tr>
        <td><?php echo Form::label('nombre','Total:'); ?></td>
        <td><?php echo Form::text('planTotal',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('actualTotal',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('fechaTotal',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        <td><?php echo Form::text('avgFechaTotal',null,['class'=>'form-control','style'=>'color: black']); ?></td>
      </tr> 

    </tbody>
  </table>
 </div>