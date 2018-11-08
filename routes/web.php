<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

Route::get('/', function () {
    return view('adminlte::auth.login');
});



Route::group(['prefix'=>'Usuarios','middleware' => 'AdminMiddleware'], function () {



    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

//rota de proyectos
Route::resource('Proyectos','proyectosController');
//ruta de fases
Route::resource('Fases','fasesController');
//Ruta defectps
Route::resource('Defectos','defectosController');
//Ruta usuarios
Route::resource('Usuarios','UsuarioController');

//Ruta a la lista de proyectos para el estudiante
Route::resource('Ldc','ldcController');

//Asignación de proyectos
Route::group (['prefix'=>'Tareas'], function(){
		Route::get('/', 'tareasController@index')->name('indexTarea');
		Route::match(['GET','POST'],'/listaTarea', 'tareasController@show')->name('listaTarea');
		Route::delete('/elimina', 'tareasController@elimina')->name('eliminaTarea');
		Route::match(['GET','POST'], '/asignar', 'tareasController@asignar')->name('asignarTarea');
	});
//Proyecto 1 (menú)
Route::group (['prefix'=>'Proyecto1'], function(){
		Route::match(['GET','POST'], '/{numeroProyecto}','proyecto1Controller@index')->name('Proyecto1');
		
	});
//proyecto 2 (menú)
Route::group (['prefix'=>'Proyecto2'], function(){
		Route::match(['GET','POST'], '/{numeroProyecto}','proyecto2Controller@index')->name('Proyecto2');
	});

//Lista de tareas asignadas a los estudiantes
Route::resource('ListaTareasEstudiante','listTaskEstController');

// Estándar de codificación
Route::resource('StdCodificacion','stdCodificaController');

// Estándar de cuantificación
Route::resource('StdCuantificacion','stdCuantificaController');

//Route::resource('tamLdc','tamLdc');
//tamaños en líneas de código
Route::resource('planLdc','planLdcController');
//Route::resource('actualLdc','actualLdcController');


	Route::get('/{numeroProyecto}', 'actualLdcController@index')->name('actual.index');
	Route::match(['GET','POST'],'/show/{numeroProyecto}',
		[ 'uses'=>'actualLdcController@show'])->name('verActLdc');
	Route::match(['GET','POST'],'/store','actualLdcController@store')->name('regActLdc');
	
	Route::match(['GET','POST','PUT'],'/update/{id}/{numeroProyecto}',
		[ 'uses'=>'actualLdcController@update'])->name('updActLdc');