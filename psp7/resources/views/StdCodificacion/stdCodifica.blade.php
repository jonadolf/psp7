
@extends('adminlte::page')


@include('alertas.success')

@include('alertas.errors')


@section('htmlheader_title')


	Change Title here!
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">						
						<table class="table">
						<thead>
      						<tr>
       							<th colspan="3">{!!Form::label('indicaciones', 'Se te pide que consideres los siguientes elementos para definir tu esándar de codificación, el cuál utilizarás a lo largo de este curso:')!!}</th>
       						</tr>
    					</thead>
    					<tbody>
    						<tr>
						       	<td>{!!Form::label('variables', '1.- Declaración de variables.')!!}</td>
						        <td>{!!Form::label('constantes','2.- Declaración de constantes.')!!}</td>
						        <td>{!!Form::label('compilador', '3.- Directivas de compilador.')!!}</td>
     						 </tr> 
     						 <tr>
							      <td>{!!Form::label('comentarios','4.- Declaración de constantes.')!!}</td>
							      <td>{!!Form::label('variables','5.- Declaración de variables.')!!}</td>
							      <td>{!!Form::label('sangrias', '6.- Sangrías, y espacios en blanco entre líneas.')!!}</td>
						    </tr>
						    <tr>
							     <td>{!!Form::label('delimitadores', '7.- Delimitadores.')!!}</td>
								 <td>{!!Form::label('llaves', 		'8.- Uso de llaves.')!!}</td>
								 <td>{!!Form::label('sentencias', 	'9.- Sentencias.')!!}</td>
							<tr>
								<td>{!!Form::label('flujos', 		'10.- Control de flujos.')!!}</td>
								<td>{!!Form::label('encabezados', 	'11.- Encabezados.')!!}</td>
							</tr>
					    </tbody>
					    </table>
						<div class="col-md-10 col-md-offset-1">
							<div class="panel panel-default">
								<div class="panel-heading"></div>
									<div class="panel-body">
											{!! Form::open(['route' => 'StdCodificacion.store','method'=>'POST']) !!}
											{{ csrf_field() }}
											<input type="hidden" name="idEstudiante" value="{!$id = Auth::id()!}">
											<textarea  class="ckeditor" name="contenido" id="contenido" rows="10" cols="80"></textarea>
											
											<table class="table">
											<tr>
												<td>
													<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
												{!! Form::close() !!}

												{!! Form::open(['route' => ['StdCodificacion.edit',$id	 = Auth::id()],'method'=>'PUT']) !!}

												
											    {{ csrf_field() }}
											
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
												
														{!! Form::close() !!}

												</td>
												</tr>
											
											</table>
                        				<!--@include('StdCodificacion.modales.modalEditStdCodifica')-->
                    				</div>
                				</div>
            			</div>				
					</div>
					</div>
					</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>