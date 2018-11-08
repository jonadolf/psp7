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
					<div class="panel-heading"> estas en el proyecto {!!$data['numeroProyecto']!!}<a href="ListaTareasEstudiante"><strong>Regresar a la lista de tareas</a></strong></div>
					<div class="panel-body">

					<div class="row">
											
						<div class="col-xs-6 col-md-3">
							Std. Codificación
						<a href="StdCodificacion" class="thumbnail"> <img src=" {{asset('img/Nuevas/DOC1.ico')}}"/></a>
					   </div>


					   <div class="col-xs-6 col-md-3">
					   		Std. Cuantificación
					   	<a href="StdCuantificacion" class="thumbnail"><img src=" {{asset('img/Nuevas/google1_7.png')}}"/>
					   </a>
					   </div>
					   

					    <div class="col-xs-6 col-md-3">
					    	Reg. tamaños (LDC)
					    	    <button data-toggle="modal" data-target="#myModal"> <a href="#" class="thumbnail"><img src="{{asset('img/Nuevas/drawing.png')}}"></a>	</button>
					    	     @include('TamLdc.modalInicio')		    	
					    	 

					   	</div>

					    <div class="col-xs-6 col-md-3">

					   <a href="#" class="thumbnail">
					   <img src="https://3.bp.blogspot.com/-kNa05SDhq3A/WBtHFyXZ1bI/AAAAAAAACm0/xsCl-FX6tuYQ00B6MMZeR8JwisIQIrFIgCEw/s1600/Sistema%2BVentas%2BLaravel%2B-%2BVentas%2BListado.JPG" alt="...">
					   </a>
					   </div>
					</div>
					
					<div class="row">

					<div class="col-xs-6 col-md-3">
					   <a href="#" class="thumbnail">
					   <img src="https://3.bp.blogspot.com/-kNa05SDhq3A/WBtHFyXZ1bI/AAAAAAAACm0/xsCl-FX6tuYQ00B6MMZeR8JwisIQIrFIgCEw/s1600/Sistema%2BVentas%2BLaravel%2B-%2BVentas%2BListado.JPG" alt="...">
					   </a>
					</div>
					<div class="col-xs-6 col-md-3">
					   <a href="#" class="thumbnail">
					   <img src="https://3.bp.blogspot.com/-kNa05SDhq3A/WBtHFyXZ1bI/AAAAAAAACm0/xsCl-FX6tuYQ00B6MMZeR8JwisIQIrFIgCEw/s1600/Sistema%2BVentas%2BLaravel%2B-%2BVentas%2BListado.JPG" alt="...">
					   </a>
					</div>

					<div class="col-xs-6 col-md-3">
					   <a href="#" class="thumbnail">
					   <img src="https://3.bp.blogspot.com/-kNa05SDhq3A/WBtHFyXZ1bI/AAAAAAAACm0/xsCl-FX6tuYQ00B6MMZeR8JwisIQIrFIgCEw/s1600/Sistema%2BVentas%2BLaravel%2B-%2BVentas%2BListado.JPG" alt="...">
					   </a>
					</div>
					<div class="col-xs-6 col-md-3">
					   <a href="#" class="thumbnail">
					   <img src="https://3.bp.blogspot.com/-kNa05SDhq3A/WBtHFyXZ1bI/AAAAAAAACm0/xsCl-FX6tuYQ00B6MMZeR8JwisIQIrFIgCEw/s1600/Sistema%2BVentas%2BLaravel%2B-%2BVentas%2BListado.JPG" alt="...">
					   </a>
					</div>

					



					</div>





					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
