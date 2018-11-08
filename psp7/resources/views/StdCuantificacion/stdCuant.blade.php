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
					<div class="panel-heading">Indica Si o NO, las opciones que consideres 
												pertinentes para tu estándar de cuantificación.
												</div>

					{!! Form::open(['route' => 'StdCuantificacion.store','method'=>'POST']) !!}
					{{ csrf_field() }}
					<input type="hidden" name="idEstudiante" value="{!!$id = Auth::id()!!}">
					<div class="panel-body">
					<table class="table">
					<tr>
						<td colspan="2">Lenguaje de programación:</td>
						<td>{!!Form::text('lenguaje');!!}</td>
					</tr>
					
					<tr>
						<td colspan="2">tipo conteo (físico / lógico)</td>
						<td>{!!Form::select('tipoConteo', array('logico' => 'Lógico','fisico'=>'Físico'));!!}</td>
					</tr>
					<tr>
						<td colspan="3" style="text-align: center;"> Tipo de instrucciones</td>
					</tr>

					<tr>
						<td colspan="2" style="align-content: center; ">Ejecutables:</td>
						<td>{!!Form::select('ejecutables', array('si' => 'Si','no'=>'No'));!!}</td>
					</tr>
					<tr>
						<td rowspan="5" style="text-align: center; padding:70px; ">No ejecutables:</td>
					</tr>
						<tr><td>Declaraciones</td>
						<td>{!!Form::select('declaraciones', array('si' => 'Si','no'=>'No'));!!}</td>
					</tr>
					<tr>	
						<td>Directivas del compilador</td>
						<td>{!!Form::select('dCompilador', array('si' => 'Si','no'=>'No'));!!}</td>
					</tr>
					<tr>
						<td>Comentarios</td>
						<td>{!!Form::select('comentarios', array('si' => 'Si','no'=>'No'));!!}</td>
					</tr>
					<tr>
						<td>Lineas en blanco</td>
						<td>{!!Form::select('lineasBlanco', array('si' => 'Si','no'=>'No'));!!}</td>
					</tr>
					<tr>
						<td colspan="2" style="align-content: center;">Delimitadores { }</td>
						<td>{!!Form::select('delimitadores', array('si' => 'Si','no'=>'No'));!!}</td>
					</tr>
					<tr>
						<td colspan="3" style="text-align: center;">Comentarios: 
						
					</tr>
					<tr>
						
					<td colspan="3"><textarea  class="ckeditor" name="comentariosAd" id="comentariosAd" rows="10" cols="80"></textarea> </td>
					</tr>

					<tr>
						<td colspan="3">
							<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
						</td>

					</tr>
					
					</table>
					{!! Form::close() !!}
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