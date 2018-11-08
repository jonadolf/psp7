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
					<div class="panel-heading">Estándar de cuantificacion actual</div>
					<div class="panel-body">
						<table class="table">
					<tr>
						<td colspan="2">Lenguaje de programación:</td>
						<td>{!!$var->lenguaje!!}</td>
					</tr>
					
					<tr>
						<td colspan="2">tipo conteo:  </td>
						<td>{!!$var->tipoConteo!!}</td>
					</tr>
					<tr>
						<td colspan="3" style="text-align: center;"> Tipo de instrucciones:</td>
					</tr>

					<tr>
						<td colspan="2" style="align-content: center; ">Ejecutables</td>
						<td>{!!$var->ejecutables!!}</td>
						
					</tr>
					<tr>
						<td rowspan="5" style="text-align: center; padding:70px; ">No ejecutables:</td>
					</tr>
						<tr><td>Declaraciones</td>
						<td>{!!$var->declaraciones!!}</td>
					</tr>
					<tr>	
						<td>Directivas del compilador</td>
						<td>{!!$var->dCompilador!!}</td>
					</tr>
					<tr>
						<td>Comentarios</td>
						<td>{!!$var->comentarios!!}</td>
					</tr>
					<tr>
						<td>Lineas en blanco</td>
						<td>{!!$var->lineasBlanco!!}</td>
					</tr>
					<tr>
						<td colspan="2" style="align-content: center;">Delimitadores { }</td>
						<td>{!!$var->delimitadores!!}</td>
					</tr>
					<tr>
						<td colspan="3" style="text-align: center;">Comentarios adicionales: </td>
					</tr>
					<tr>
						<td  colspan="3">{!!$var->comentariosAd!!}</td>
					<tr>
					
					<tr>
						<td colspan="4"><button type="button" class="btn btn-primary btn-md " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
					  	</td>

					</tr>
					
					</table>
					</div>

					@include('StdCuantificacion.modales.modalEditStdCuantifica')
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