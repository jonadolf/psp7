<div class="form-group" >
 <table class="table">
   
    </thead>
    <tbody>
      <tr>
        <td><?php echo Form::label('nombre','Base:'); ?></td>
        <td><?php echo Form::text('actualBase',null,['class'=>'form-control','style'=>'color: black']); ?></td>

      </tr> 

      <tr>
      <td><?php echo Form::label('eliminado','Eliminado:'); ?></td>
        <td><?php echo Form::text('actualEliminado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
      </tr>

      <tr>
        <td><?php echo Form::label('nombre','Modificado:'); ?></td>
        <td><?php echo Form::text('actualModificado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
        
      </tr>
      <tr>
        <td><?php echo Form::label('nombre','Adicionado:'); ?></td>
        <td><?php echo Form::text('actualAdicionado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
     
      </tr>
      <tr>
        <td><?php echo Form::label('nombre','Reusado:'); ?></td>
        <td><?php echo Form::text('actualReusado',null,['class'=>'form-control','style'=>'color: black']); ?></td>
     
      </tr>
      <tr>
        <td>Nuevo y cambiado:</td>
        <td><?php echo Form::text('actualNyC',null,['class'=>'form-control','style'=>'color: black']); ?></td>

      </tr>
      <tr>
        <td><?php echo Form::label('nombre','Total:'); ?></td>
        <td><?php echo Form::text('actualTotal',null,['class'=>'form-control','style'=>'color: black']); ?></td>
      
      </tr> 

    </tbody>
  </table>
 </div>