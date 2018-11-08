<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
use App\stdCuantifica;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Iatstuti\Database\Support\NullableFields;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class stdCuantificaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $id = Auth::id();           
            $var = stdCuantifica::where('idEstudiante',$id)->first();
                       
            if($var){
                Session::flash('message','Ya tienes registrado un estándar de cuantificación');
                return Redirect::to('/StdCuantificacion/show')->with('var');
            }
            else{
                  return view('StdCuantificacion.stdCuant',compact('var'));
                
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $data['idEstudiante'] = request()->get('idEstudiante');
          $data['lenguaje'] =request()->get('lenguaje');
          $data['tipoConteo'] = request()->get('tipoConteo');
          $data['ejecutables'] = request()->get('ejecutables');
          $data['declaraciones'] = request()->get('declaraciones');
          $data['dCompilador'] = request()->get('dCompilador');
          $data['comentarios'] = request()->get('comentarios');
          $data['lineasBlanco'] = request()->get('lineasBlanco');
          $data['delimitadores'] = request()->get('delimitadores');
          $data['comentariosAd'] = request()->get('comentariosAd');

 $rules = ['tipoConteo'  => 'required',
                    'lenguaje' =>'required',
                    'ejecutables'=>'required',
                    'declaraciones'=>'required',
                    'dCompilador'=>'required',
                    'comentarios'=>'required',
                    'delimitadores'=>'required'
                     ];

          $messages= [  'tipoConteo.required'=>'El tipo de conteo es obligatorio',
                        'lenguaje.required'=>'El lenguaje de programación es obligatorio',
                        'ejecutables.required'=>'El campo de sentencias ejecutables es obligatorio',
                        'declaraciones.required'=>'El campo declaraciones es obligatorio',
                        'dCompilador.required'=>'El campo directivas del compilador es obligatorio',
                        'comentarios.required'=>'El campo comentarios es obligatorio',
                        'delimitadores.required'=>'El campo delimitadores es obligatorio',
                        ];
                         $validate = Validator::make($data, $rules,$messages)->validate();



          $query = DB::table ('stdCuantificas')->where('numeroProyecto','=',1)
                    ->where('idEstudiante','=', Auth::user()->id)->get();
            if(count($query)){
                Session::flash('message','Error, ya tienes registrado un estándar de codificación');
                return Redirect::to('/StdCuantificacion');;
            }
            else{
                 $user = Auth::user()->id;
                 $tareas = DB::table ('asignas')->where('numeroProyecto','=',1)
                                    ->where('idEstudiante','=', Auth::user()->id)->get();
                 if($tareas){
                    stdCuantifica::create([                      
                            'idEstudiante'=>$tareas[0]->idEstudiante,
                            'numeroProyecto'=>$tareas[0]->numeroProyecto,
                            'lenguaje'=>$data['lenguaje'],
                            'tipoConteo'=>$data['tipoConteo'],
                            'ejecutables'=>$data['ejecutables'],
                            'declaraciones'=>$data['declaraciones'],
                            'dCompilador'=>$data['dCompilador'],
                            'ejecutables'=>$data['ejecutables'],
                            'comentarios'=>$data['comentarios'],
                            'lineasBlanco'=>$data['lineasBlanco'],
                            'delimitadores'=>$data['delimitadores'],
                            'comentariosAd'=>$data['comentariosAd'],
                            ]);
                    return Redirect::to('/StdCuantificacion');
                    Session::flash('message','Estándar de cuantificación registrado con éxito.');
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
        $var = stdCuantifica::where('idEstudiante',$id)->first();
        return view('StdCuantificacion.editStdCuantifica',compact('var'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
          $data['idEstudiante'] = request()->get('idEstudiante');
          $data['numeroProyecto'] = request()->get('numeroProyecto');
          $data['lenguaje']=request()->get('lenguaje');
          $data['tipoConteo'] = request()->get('tipoConteo');
          $data['ejecutables'] = request()->get('ejecutables');
          $data['declaraciones'] = request()->get('declaraciones');
          $data['dCompilador'] = request()->get('dCompilador');
          $data['comentarios'] = request()->get('comentarios');
          $data['lineasBlanco'] = request()->get('lineasBlanco');
          $data['delimitadores'] = request()->get('delimitadores');
          $data['comentariosAd'] = request()->get('comentariosAd');



          $rules = ['tipoConteo'  => 'required',
                    'lenguaje' =>'required',
                    'ejecutables'=>'required',
                    'declaraciones'=>'required',
                    'dCompilador'=>'required',
                    'comentarios'=>'required',
                    'delimitadores'=>'required'
                     ];

          $messages= [  'tipoConteo.required'=>'El tipo de conteo es obligatorio',
                        'lenguaje.required'=>'El lenguaje de programación es obligatorio',
                        'ejecutables.required'=>'El campo de sentencias ejecutables es obligatorio',
                        'declaraciones.required'=>'El campo declaraciones es obligatorio',
                        'dCompilador.required'=>'El campo directivas del compilador es obligatorio',
                        'comentarios.required'=>'El campo comentarios es obligatorio',
                        'delimitadores.required'=>'El campo delimitadores es obligatorio',
                        ];

          $validate = Validator::make($data, $rules,$messages)->validate();
         $data = stdCuantifica::find($id);
         $data->idEstudiante = $request['idEstudiante'];
         $data->numeroProyecto = $request['numeroProyecto'];
         $data['lenguaje'] = $request['lenguaje'];
            $data['tipoConteo'] = $request['tipoConteo'];
            $data['ejecutables'] = $request['ejecutables'];
            $data['declaraciones'] = $request['declaraciones'];
            $data['dCompilador'] = $request['dCompilador'];
            $data['comentarios']= $request['comentarios'];
            $data['lineasBlanco'] = $request['lineasBlanco'];
            $data['delimitadores']=$request['delimitadores'];
            $data['comentariosAd']=$request['comentariosAd'];         
         $success = $data->save();
         if( $success){
        Session::flash('message','Actualizado con éxto');
            return Redirect::to('/StdCuantificacion/index');
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
