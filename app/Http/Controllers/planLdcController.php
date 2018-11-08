<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
use App\planLdc;
use App\Asigna;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Iatstuti\Database\Support\NullableFields;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class planLdcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $idUsuario = Auth::id();  
            
            /* trae a los usuarios que tienen proyectos abiertos de la tabla asignaciones
                  y de la tabla planLdcs*/
            $query = DB:: table('planLdcs')
             ->join('asignas','planLdcs.idproyecto', '=', 'asignas.numeroProyecto')
             ->select('planLdcs.idUsuario','planLdcs.idproyecto')
             ->where('planLdcs.idUsuario','=',$idUsuario)
             ->first();
                         
            if($query){
                
                Session::flash('message','Ya tienes un registro de líneas de código planeadas, para ese proyecto.');
                return Redirect::to('/planLdc/show');
            }
            else{
                $asigna = DB:: table('asignas')
                ->where('idEstudiante','=',$idUsuario)
                ->where('estado','=','Abierto')
                ->get();
                  return view('TamLdc.regPlanLdc', array('asigna'=>$asigna));                
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
        $data['idproyecto']       = request()->get('idProyecto');
        $data['idUsuario']  =   request()->get('idUsuario');      
        $rules = ['idproyecto'       => 'required','idUsuario'=>'required'];
        $message= ['idproyecto.required'=>'El número de proyecto es obligatorio.'];
        $validate = Validator::make($data, $rules, $message)->validate();

        $PlanBase[ 'PlanBase' ] = ( Input::get( 'PlanBase' ) == '' ?
         null : Input::get( 'PlanBase' ) );
        $planEliminado[ 'planEliminado' ] = ( Input::get( 'planEliminado' ) == '' ? null : Input::get( 'planEliminado' ) );
        $planModificado[ 'planModificado' ] = ( Input::get( 'planModificado' ) == '' ? null : Input::get( 'planModificado' ) );
        $planAdicionado[ 'planAdicionado' ] = ( Input::get( 'planAdicionado' ) == '' ? null : Input::get( 'planAdicionado' ) );
        $planReusado[ 'planReusado' ] = ( Input::get( 'planReusado' ) == '' ? null : Input::get( 'planReusado' ) );
        $planNyC[ 'planNyC' ] = ( Input::get( 'planNyC' ) == '' ? null : Input::get( 'planNyC' ) );
        $planTotal[ 'planTotal' ] = ( Input::get( 'planTotal' ) == '' ? null : Input::get( 'planTotal' ) );

        $ldc = new planLdc();
        $ldc->idProyecto = $request->input('idProyecto');
        $ldc->idUsuario = $request->input('idUsuario');
        
        $ldc ->PlanBase = $PlanBase[ 'PlanBase' ];
        $ldc ->planEliminado= $planEliminado[ 'planEliminado' ];
        $ldc ->planModificado = $planModificado[ 'planModificado' ]; 
        $ldc ->planAdicionado = $planAdicionado[ 'planAdicionado' ]; 
        //$ldc ->planReusado = $planReusado[ 'planReusado' ];
        $ldc ->planReusado = ($ldc->planEliminado + $ldc->planModificado) ;
        //$ldc ->planNyC = $planNyC[ 'planNyC' ]; 
        $ldc ->planNyC = ($ldc->planAdicionado + $ldc->planModificado); 
        //$ldc->planTotal=$planTotal['planTotal'];
        $ldc ->planTotal = ($ldc->planNyC+$ldc->planReusado);

        $success = $ldc->save(); 
        if ($success){
                Session::flash('message','Registro realizado con éxito.');
                return Redirect::to('/Proyecto1');
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
        $idUsuario = Auth::id();  
        $actualiza = DB::table('planLdcs')->where('idUsuario',$idUsuario)->first();
        return view('TamLdc.editPlanLdc',compact('actualiza'));
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

        $PlanBase[ 'PlanBase' ] = ( Input::get( 'PlanBase' ) == '' ?
         null : Input::get( 'PlanBase' ) );
        $planEliminado[ 'planEliminado' ] = ( Input::get( 'planEliminado' ) == '' ? null : Input::get( 'planEliminado' ) );
        $planModificado[ 'planModificado' ] = ( Input::get( 'planModificado' ) == '' ? null : Input::get( 'planModificado' ) );
        $planAdicionado[ 'planAdicionado' ] = ( Input::get( 'planAdicionado' ) == '' ? null : Input::get( 'planAdicionado' ) );
        $planReusado[ 'planReusado' ] = ( Input::get( 'planReusado' ) == '' ? null : Input::get( 'planReusado' ) );
        $planNyC[ 'planNyC' ] = ( Input::get( 'planNyC' ) == '' ? null : Input::get( 'planNyC' ) );
        $planTotal[ 'planTotal' ] = ( Input::get( 'planTotal' ) == '' ? null : Input::get( 'planTotal' ) );
        
        $ldc = planLdc::find($id);
        $ldc->idUsuario = $request['idUsuario'];
        $ldc->idProyecto = $request['numeroProyecto'];
        $ldc ->planBase = $PlanBase[ 'PlanBase' ];
        $ldc ->planEliminado= $planEliminado[ 'planEliminado' ];
        $ldc ->planModificado = $planModificado[ 'planModificado' ]; 
        $ldc ->planAdicionado = $planAdicionado[ 'planAdicionado' ]; 
        //$ldc ->planReusado = $planReusado[ 'planReusado' ];
        $ldc ->planReusado = ($ldc->planEliminado + $ldc->planModificado) ;
        //$ldc ->planNyC = $planNyC[ 'planNyC' ]; 
        $ldc ->planNyC = ($ldc->planAdicionado + $ldc->planModificado); 
        //$ldc->planTotal=$planTotal['planTotal'];
        $ldc ->planTotal = ($ldc->planNyC+$ldc->planReusado);
        $ldc->save();
        if ($ldc){
            Session::flash('message','Datos actualizados con éxito.');
            return Redirect::to('/Proyecto1');

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
