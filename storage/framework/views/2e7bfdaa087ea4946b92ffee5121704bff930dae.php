	<!-- Modal -->
<div class="modal fade"  data-backdrop="false" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Tamaño en líneas de código</h>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <table class="table"> 
                <th><a href="planlLdc">
                  <button type="button" class="btn btn-info btn-block">Planeado</button>
       		</a>
       	</th>
       	<th>
           
                <a href="<?php echo route('actual.index',$data['numeroProyecto']); ?>">
                  
                         <button type="button"  class="btn btn-success btn-block">Real</button> </a></th>
       <tr>
       		<td></td>
       		<td></td>
       </tr>
      </table>
      	 
      	  
      </div>
      
    </div>
  </div>
</div>