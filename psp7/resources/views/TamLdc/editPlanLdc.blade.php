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
					<div class="panel-heading">Actualizar el registro de las líneas de código planeadas</div>
					<div class="panel-body">
					<label><strong>Nota: No es necesario caputar los campos "Reusado, Nuevo y Cambiando, Total.</strong></label>
						<div class="form-group" >
						 {!! Form::model($actualiza, ['route' => ['planLdc.update', $actualiza->id ], 'method'=>'PUT']) !!}
						 <table class="table">
						   
						    </thead>
						    <tbody>
						      <tr>
						        <td>{!!Form::label('nombre','Base:')!!}</td>
						        <td>{!!Form::text('PlanBase',$actualiza->planBase,['class'=>'form-control','style'=>'color: black'])!!}</td>

						      </tr> 

						      <tr>
						      <td>{!!Form::label('eliminado','Eliminado:')!!}</td>
						        <td>{!!Form::text('planEliminado',$actualiza->PlanEliminado,['class'=>'form-control','style'=>'color: black'])!!}</td>
						      </tr>

						      <tr>
						        <td>{!!Form::label('nombre','Modificado:')!!}</td>
						        <td>{!!Form::text('planModificado',$actualiza->planModificado,['class'=>'form-control','style'=>'color: black'])!!}</td>
						        
						      </tr>
						      <tr>
						        <td>{!!Form::label('nombre','Adicionado:')!!}</td>
						        <td>{!!Form::text('planAdicionado',$actualiza->planAdicionado,['class'=>'form-control','style'=>'color: black'])!!}</td>
						     
						      </tr>
						      <tr>
						        <td>{!!Form::label('nombre','Reusado:')!!}</td>
						        <td>{!!Form::text('planReusado',$actualiza->planReusado,['class'=>'form-control','style'=>'color: black'])!!}</td>
						     
						      </tr>
						      <tr>
						        <td> {!!Form::label('nombre','Nuevo y cambiado:')!!}</td>
						        <td>{!!Form::text('planNyC',$actualiza->planNyC,['class'=>'form-control','style'=>'color: black'])!!}</td>

						      </tr>
						      <tr>
						        <td>{!!Form::label('nombre','Total:')!!}</td>
						        <td>{!!Form::text('planTotal',$actualiza->planTotal,['class'=>'form-control','style'=>'color: black'])!!}</td>
						     </tr>
						     <tr>
						        <td>
						     	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
						        </td>
						     </tr> 
						    </tbody>
						  </table>
						    <input type="hidden" name="idUsuario" value="{{$actualiza->idUsuario	}}" >
						  <input type="hidden" name="numeroProyecto" value="{{$actualiza->idproyecto	}}" >
						   {!! Form::close() !!}
						 </div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
