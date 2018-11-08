<table class="table">
					<tr>
						<td>Lenguaje de programación</td>
						<td><?php echo Form::text('lenguaje', $var->lenguaje);; ?></td>
					</tr>
					<tr>
						<td>tipo conteo (físico / lógico)</td>
						<td><?php echo Form::select('tipoConteo', array('anterior'=>$var->tipoConteo,'si' => 'Si','no'=>'No'));; ?>

							
					</tr>
					<tr>
						<td  style="text-align: center;"> Tipo de instrucciones</td>
					</tr>

					<tr>
						<td  style="align-content: center; ">Ejecutables:</td>
						<td><?php echo Form::select('ejecutables', array('anterior'=>$var->ejecutables,'si' => 'Si','no'=>'No')); ?></td>
						
					</tr>
					<tr>
						<td rowspan="5" style="text-align: center; padding:70px; ">No ejecutables:</td>
					</tr>
						<tr><td>Declaraciones</td>
						<td><?php echo Form::select('declaraciones', array('anterior'=>$var->declaraciones,'si' => 'Si','no'=>'No'));; ?></td>
					</tr>
					<tr>	
						<td>Directivas del compilador</td>
						<td><?php echo Form::select('dCompilador', array('anterior'=>$var->dCompilador,'si' => 'Si','no'=>'No'));; ?></td>
					</tr>
					<tr>
						<td>Comentarios</td>
						<td><?php echo Form::select('comentarios', array('anterior'=>$var->comentarios,'si' => 'Si','no'=>'No'));; ?></td>
					</tr>
					<tr>
						<td>Lineas en blanco</td>
						<td><?php echo Form::select('lineasBlanco', array('anterior'=>$var->lineasBlanco,'si' => 'Si','no'=>'No'));; ?></td>
					</tr>
					<tr>
						<td  style="align-content: center;">Delimitadores { }</td>
						<td><?php echo Form::select('delimitadores', array('anterior'=>$var->delimitadores,'si' => 'Si','no'=>'No'));; ?></td>
					</tr>
					<tr>
						<td  style="text-align: center;">Comentarios: 
						
					</tr>
					<tr>
						
					<td><textarea class="ckeditor" name="comentariosAd" id="comentariosAd" rows="10" cols="60"></textarea> </td>
					</tr>

					<tr>
						<td>
							<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
						</td>

					</tr>
					
					</table>