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
					<div class="panel-heading">Redacción actual del estándar de codificación</div>
					<div class="panel-body">
					  <div class="col-xs-10 col-md-80">
					  <div>
					  	<h4 class="modal-title"></h4>
					  		{!!$var['contenido'];!!} 

					  		<!-- Modal actualizar stdCodificacion -->
					  		<table>
					  		<tbody>
					  			<tr>
					  				<td colspan="4"><button type="button" class="btn btn-success btn-md " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
					  				</td>
					  				
					  				
					  				<td colspan="4"><a href="/Proyecto1" class="btn btn-secondary btn-md" role="button" >Menú Proyecto 1</a>
					  									  				</td>
					  			</tr>

					  		</tbody>
					  		</table>
					  		
					  		
					  		 
					  	</div>
					  	@include('StdCodificacion.modales.modalEditStdCodifica')
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