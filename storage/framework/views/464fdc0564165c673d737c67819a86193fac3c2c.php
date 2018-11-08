<div class="form-group" >
 <table class="table">
   
    </thead>
    <tbody>
      <tr>
        <td><?php echo Form::label('nombre','Base:'); ?></td>
        <td><?php echo Form::text('PlanBase',null,['class'=>'form-control','style'=>'color: black']); ?></td>

      </tr> 

      <tr>
      <td><?php echo Form::label('eliminado','Eliminado:'); ?></td>
        <td><?php echo Form::text('planEliminado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
      </tr>

      <tr>
        <td><?php echo Form::label('nombre','Modificado:'); ?></td>
        <td><?php echo Form::text('planModificado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        
      </tr>
      <tr>
        <td><?php echo Form::label('nombre','Adicionado:'); ?></td>
        <td><?php echo Form::text('planAdicionado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
     
      </tr>
      <tr>
        <td><?php echo Form::label('nombre','Reusado:'); ?></td>
        <td><?php echo Form::text('planReusado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
     
      </tr>
      <tr>
        <td>Nuevo y cambiado:</td>
        <td><?php echo Form::text('planNyC',null,['class'=>'form-control','style'=>'color: black']); ?></td>

      </tr>
      <tr>
        <td><?php echo Form::label('nombre','Total:'); ?></td>
        <td><?php echo Form::text('planTotal',null,['class'=>'form-control','style'=>'color: black']); ?></td>
      
      </tr> 

    </tbody>
  </table>
 </div>