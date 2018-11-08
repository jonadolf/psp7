<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
use App\actualLdc;
use App\Asigna;
use App\User;
use App\tamFavg;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Iatstuti\Database\Support\NullableFields;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class actualLdcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($numeroProyecto){
              
            $idUsuario = Auth::id();  
           
            /* trae a los usuarios que tienen proyectos abiertos de la tabla asignaciones
                  y de la tabla actualLdcs*/
            $query = DB:: table('actualLdcs')
             ->join('asignas','actualLdcs.idproyecto', '=', 'asignas.numeroProyecto')
             ->select('actualLdcs.idUsuario','actualLdcs.idproyecto')
             ->where('actualLdcs.idUsuario','=',$idUsuario)
             ->where('asignas.estado','=','Abierto')
             ->first();
             
            if($query){
                Session::flash('message','Ya tienes un registro de líneas de código actualeadas, para ese proyecto.');
              // dd($query->idproyecto);
             return redirect::route('verActLdc',$query->idproyecto);
              
             
            }

            else{
                return view('TamLdc.regActualLdc', compact('numeroProyecto','idUsuario'));                   
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
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
                $data['idproyecto']       = request()->get('numeroProyecto');
                $data['idUsuario']  =   request()->get('idUsuario');      
                $rules = ['idproyecto'       => 'required','idUsuario'=>'required'];
                $message= ['idproyecto.required'=>'El número de proyecto es obligatorio.'];
                $validate = Validator::make($data, $rules, $message)->validate();

                $actualBase[ 'actualBase' ] = ( Input::get( 'actualBase' ) == '' ?
                 null : Input::get( 'actualBase' ) );
                $actualEliminado[ 'actualEliminado' ] = ( Input::get( 'actualEliminado' ) == '' ? null : Input::get( 'actualEliminado' ) );
                $actualModificado[ 'actualModificado' ] = ( Input::get( 'actualModificado' ) == '' ? null : Input::get( 'actualModificado' ) );
                $actualAdicionado[ 'actualAdicionado' ] = ( Input::get( 'actualAdicionado' ) == '' ? null : Input::get( 'actualAdicionado' ) );
                $actualReusado[ 'actualReusado' ] = ( Input::get( 'actualReusado' ) == '' ? null : Input::get( 'actualReusado' ) );
                $actualNyC[ 'actualNyC' ] = ( Input::get( 'actualNyC' ) == '' ? null : Input::get( 'actualNyC' ) );
                ;
                $actualTotal[ 'actualTotal' ] = ( Input::get( 'actualTotal' ) == '' ? null : Input::get( 'actualTotal' ) );

                /*Se valida el proyecto 1*/
                if($data['idproyecto']==1){
                    $ldc = new actualLdc();
                    $ldc->idProyecto = $request->input('numeroProyecto');
                    $ldc->idUsuario = $request->input('idUsuario');
                    $ldc->actualTotal=$actualTotal['actualTotal'];
                    $success = $ldc->save();

                    /*Se obtiene el total a la fecha del proyecto 1*/
                    $varActualTotal= DB::table('actualLdcs')
                        ->selectRaw('actualTotal as actual_total')
                        ->where('idUsuario','=',Auth::id())
                                        ->orderby('id','asc')
                                        ->take(1)->first();
                                        $s1 = $varActualTotal->actual_total;

                    /*Se obtiene el porcentaje a la fecha actual del proyecto 1*/
                    $paLaFechaTotal = (($s1*100)/$s1);

                   // dd($paLaFechaTotal);
                    /*se guardan los datos en la tabla tamFavg*/
                    tamFavg::create([
                        'idProyecto'=> $data['idproyecto'],
                        'idUsuario'=>$data['idUsuario'],    
                        'fTotal'=>  $s1,
                        'avgfTotal' => $paLaFechaTotal,                    
                    ]);
                    Session::flash('message','Registro realizado con éxito.');
                    return Redirect::to('/Proyecto1', array('data' => $data));
                    
                }
                /*Se ejecuta si no se trata del proyecto 1*/
                else{
                    $ldc->idProyecto = $request->input('numeroProyecto');
                    $ldc->idUsuario = $request->input('idUsuario');
                    $ldc ->actualBase = $actualBase[ 'actualBase' ];
                    $ldc ->actualEliminado= $actualEliminado[ 'actualEliminado' ];
                    $ldc ->actualModificado = $actualModificado[ 'actualModificado' ]; 
                    $ldc ->actualAdicionado = $actualAdicionado[ 'actualAdicionado' ];
                    $ldc ->actualReusado = $actualReusado[ 'actualReusado' ];
                    $ldc ->actualNyC = $actualNyC[ 'actualNyC' ]; 
                    $ldc->actualTotal=$actualTotal['actualTotal'];
                    $ldc ->actualReusado = ($ldc->actualEliminado + $ldc->actualModificado) ;
                    $ldc ->actualNyC = ($ldc->actualAdicionado + $ldc->actualModificado); 
                    $ldc ->actualTotal = ($ldc->actualNyC+$ldc->actualReusado);          
                    $success = $ldc->save();
                    $ldc = new actualLdc();
                    if ($success){
                        /* valores enteros a la fecha*/
                    $aLaFechaReusado = DB::table ('actualLdcs')
                                        ->select('actualReusado',DB::raw('SUM(actualReusado) as Actual_Reusado'))
                                        ->groupBy('actualReusado')
                                        ->Where ('idUsuario','=',Auth::id())->first();
                        
                    /*$varUno = (select actualTotal from actualLdcs where idUsuario = 3 order by id asc limit 1);*/
                    $varActualTotal= DB::table('actualLdcs')
                        ->selectRaw('actualTotal as actual_total')
                        ->where('idUsuario','=',Auth::id())
                                        ->orderby('id','asc')
                                        ->take(1)->first();
                                        $s1 = $varActualTotal->actual_total;  
                                                                         

                     //$varDos = (select actualNyC from actualLdcs where idUsuario = 3 order by id desc limit 1);
                     $varActualNyC = DB::table ('actualLdcs')
                                        ->selectRaw('actualNyC as actual_NyC')
                                        ->where('idUsuario','=',Auth::id())
                                        ->orderby('id','desc')
                                        ->take(1)->first();
                                        $s2= $varActualNyC->actual_NyC;

                    /* Se obtiene el total a la fecha nuevo y cambiado, así como el total a la fecha */              
                    $aLaFechaNyC = (int)$s1+(int)$s2;
                    $aLaFechaTotal = (int)$aLaFechaReusado->Actual_Reusado + $aLaFechaNyC;

                   /*Cálculo porcentaje de los valores enteros a la fecha*/
                    $paLaFechaReusado = (int)$aLaFechaReusado->Actual_Reusado * 100 /$aLaFechaTotal;
                    $paLaFechaNyC = (int)$aLaFechaNyC * 100 / (int)$aLaFechaTotal;
                    $paLaFechaTotal = $paLaFechaReusado + $paLaFechaNyC;

                    /* cadena de inserción a la tabla tamFavgs*/
                    tamFavg::create([
                       
                        'idProyecto'=>$request['idProyecto'],
                        'idUsuario'=>$request['idUsuario'],
                        'fReusado'=>  $aLaFechaReusado->Actual_Reusado,
                        'fNyC' => $aLaFechaNyC,
                        'fTotal'=>  $aLaFechaTotal,
                        'avgfReusado' => $paLaFechaReusado,
                        'avgfNyC' => $paLaFechaNyC,
                        'avgfTotal' => $paLaFechaTotal,                    
                    ]);
                    
                      Session::flash('message','Registro realizado con éxito.');
                       // return Redirect::to('/Proyecto1')->with('data', $data->idproyecto );
                        return Redirect::to('/Proyecto1', array('data' => $data));
                }

                    
            }             
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $numeroProyecto)
    {
       $idUsuario = Auth::id();
      
       $actualiza = DB::table('actualLdcs')->where('idUsuario','=',$idUsuario)
                                            ->where('idProyecto','=',$numeroProyecto)
                                            ->first();
        return view('TamLdc.editActualLdc',compact('actualiza'));  
    }
        

    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($numeroProyecto, Request $request)
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
         $actualBase[ 'actualBase' ] = ( Input::get( 'actualBase' ) == '' ?
         null : Input::get( 'actualBase' ) );
        $actualEliminado[ 'actualEliminado' ] = ( Input::get( 'actualEliminado' ) == '' ? null : Input::get( 'actualEliminado' ) );
        $actualModificado[ 'actualModificado' ] = ( Input::get( 'actualModificado' ) == '' ? null : Input::get( 'actualModificado' ) );
        $actualAdicionado[ 'actualAdicionado' ] = ( Input::get( 'actualAdicionado' ) == '' ? null : Input::get( 'actualAdicionado' ) );
        $actualReusado[ 'actualReusado' ] = ( Input::get( 'actualReusado' ) == '' ? null : Input::get( 'actualReusado' ) );
        $actualNyC[ 'actualNyC' ] = ( Input::get( 'actualNyC' ) == '' ? null : Input::get( 'actualNyC' ) );
        $actualTotal[ 'actualTotal' ] = ( Input::get( 'actualTotal' ) == '' ? null : Input::get( 'actualTotal' ) );
        
        $ldc = actualLdc::find($id);
        $ldc->idUsuario = $request['idUsuario'];
        $ldc->idProyecto = $request['numeroProyecto'];
        $ldc ->actualBase = $actualBase[ 'actualBase' ];
        $ldc ->actualEliminado= $actualEliminado[ 'actualEliminado' ];
        $ldc ->actualModificado = $actualModificado[ 'actualModificado' ]; 
        $ldc ->actualAdicionado = $actualAdicionado[ 'actualAdicionado' ]; 
        //$ldc ->actualReusado = $actualReusado[ 'actualReusado' ];
        $ldc ->actualReusado = ($ldc->actualEliminado + $ldc->actualModificado) ;
        //$ldc ->actualNyC = $actualNyC[ 'actualNyC' ]; 
        $ldc ->actualNyC = ($ldc->actualAdicionado + $ldc->actualModificado); 
        //$ldc->actualTotal=$actualTotal['actualTotal'];
        $ldc ->actualTotal = ($ldc->actualNyC+$ldc->actualReusado);
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
