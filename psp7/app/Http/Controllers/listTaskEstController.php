<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use App\Http\Requests\crearProyectosRequest;
use App\Http\Requests\editarproyectosRequest;
use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
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
use Illuminate\Support\Facades\Auth;

class listTaskEstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       

        $idUsuario = Auth::user()->id;
        $query = DB::table ('asignas')
                    ->where('idEstudiante','=',$idUsuario)
                    ->where('Estado','=','Abierto')
                    ->get();
        if($query){

            return view(('ListTareasEst.index'),compact('query'));
        }
        else{
            return view('ListTareasEst.indexAlternativo');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $update=Asigna::where('idEstudiante', '=',Auth::user()->id)
                        ->where('Estado','=','Abierto')->first();
                    if(count($update)>=1){
   // Seteamos un nuevo Estado
                        $update->Estado = 'Cerrado';
                        // Guardamos en base de datos
                        $update->save();
                    }

                    if($update){
                        Session::flash('message','El proyecto ya se ha enviado para calificar.');
                        return Redirect::to('/ListaTareasEstudiante');
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
