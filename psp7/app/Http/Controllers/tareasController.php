<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use App\Http\Requests\crearProyectosRequest;
use App\Http\Requests\editarproyectosRequest;
use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
use App\Proyectos;
use App\Asigna;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Iatstuti\Database\Support\NullableFields;
use Illuminate\Support\Facades\DB;


/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class tareasController extends Controller
{

     public function index()
    {
        $proyecto = Proyectos::all();
        return view('Asignacion.indexTareas',compact('proyecto'));
    }
    
     public function show(Request $request)
    {
       
      $data['NumeroProyecto'] = request()->get('NumeroProyecto');
      $usuario = User::all(); 
      $tareas = DB::table ('asignas')->where('numeroProyecto','=',$data['NumeroProyecto'])->get();
       return view('Asignacion.ListaTareas', array('usuario' => $usuario,
                'data' => $data,'tareas'=>$tareas));

       }

    public function asignar(Request $request)
    {
       
        $data['idEstudiante'] = request()->get('idEstudiante');
        $data['numProyecto'] = request()->get('numProyecto');
        $data['estado'] = request()->get('estado');
        $query = DB::table ('asignas')->where('idEstudiante', '=', $data['idEstudiante'])
                                              ->where('numeroProyecto','=',$data['numProyecto'])->get();

         if(count($query) > 0){
            Session::flash('message','Error, algún usuario ya tiene asignada ésta tarea');
          }

        else{          
           Asigna::create([                      
                      'idEstudiante'=>$request['idEstudiante'],
                      'numeroProyecto'=>$request['numProyecto'],
                      'estado'=>$request['estado'],
                       ]);
            if($request){
               Session::flash('message','Usuario asignado con éxito.');
                $tareas = Asigna::all();   
            }

        }

  }
                 
    public function elimina(){
        $id['id'] = request()->get('id');
        $data['NumeroProyecto'] = request()->get('NumeroProyecto');    
        Asigna::destroy($id);
        $usuario = User::all(); 
        $tareas = DB::table ('asignas')->where('numeroProyecto','=',$data['NumeroProyecto'])->get();
        return view('Asignacion.ListaTareas', array('usuario' => $usuario,
                'data' => $data,'tareas'=>$tareas));


    }    
    
        
}