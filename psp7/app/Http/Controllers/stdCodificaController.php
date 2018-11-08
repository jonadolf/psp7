<?php

namespace App\Http\Controllers;

use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
use App\stdCodifica;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Iatstuti\Database\Support\NullableFields;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class stdCodificaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $id = Auth::id();           
            $var = stdCodifica::where('idEstudiante',$id)->first();
                       
            if($var){
                Session::flash('message','Ya tienes registrado un estándar de codificación');
                return Redirect::to('/StdCodificacion/show')->with('var');
            }
            else{
                  return view('StdCodificacion.stdCodifica',compact('var'));
                
            }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['contenido'] = request()->get('contenido');
      $mensages= ['contenido.required'=>'El contenido es obligatorio.'];
      $this->validate(request(),['contenido' => 'required']);
      $query = DB::table ('stdCodificas')->where('numeroProyecto','=',1)
                    ->where('idEstudiante','=', Auth::user()->id)->get();
      if(count($query) > 0){
            Session::flash('message','Error, ya tienes registrado un estándar de codificación');
            return Redirect::to('/StdCodificacion');
          }else{
                 $user = Auth::user()->id;
                 $tareas = DB::table ('asignas')->where('numeroProyecto','=',1)
                                    ->where('idEstudiante','=', Auth::user()->id)->get();
                if($tareas){
          
                            stdCodifica::create([                      
                            'idEstudiante'=>$tareas[0]->idEstudiante,
                            'numeroProyecto'=>$tareas[0]->numeroProyecto,
                            'contenido'=>$data['contenido']
                            ]);
                            return Redirect::to('/StdCodificacion');
                            Session::flash('message','Estándar de codificación registrado con éxito.');
              
                } else{
                    Session::flash('message','Hubo un error, intenta de nuevo');
                  return Redirect::to('/StdCodificacion');
                }
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = Auth::id();           
        $var = stdCodifica::where('idEstudiante',$id)->first();
        return view('StdCodificacion.editStdCodifica',compact('var'));

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
              
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {          
        $data['contenido'] = request()->get('newContent');
        //dd($data);
        $mensages= ['newContent.required'=>'El contenido es obligatorio.'];
        $this->validate(request(),['newContent' => 'required']);
         $data = stdCodifica::find($id);
         $data->idEstudiante = $request['idEstudiante'];
         $data->numeroProyecto = $request['numeroProyecto'];
         $data->contenido= $request['newContent'];
         $success = $data->save();
         if( $success){
        Session::flash('message','Actualizado con éxto');
            return Redirect::to('/StdCodificacion/index');
        }else{
            Session::flash('message','Ocurrió un error al intentar actualizar el contenido');
        }

          
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
