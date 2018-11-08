<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;
use App\Http\Requests\crearProyectosRequest;
use App\Http\Requests\editarproyectosRequest;

use Illuminate\Http\Request;
use App\Proyectos;
use App\Ldc;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Iatstuti\Database\Support\NullableFields;


class ldcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ldc = Proyectos::all();
        return view('Ldc.regTam',compact('ldc'));
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
        $data['idProyecto']       = request()->get('idProyecto');
        $data['idUsuario']  =   request()->get('idUsuario');      
        $rules = ['idProyecto'       => 'required','idUsuario'=>'required'];
        $message= ['idProyecto.required'=>'El número de proyecto es obligatorio.'];
        $validate = Validator::make($data, $rules, $message)->validate();
                
        $PlanBase[ 'PlanBase' ] = ( Input::get( 'PlanBase' ) == '' ? null : Input::get( 'PlanBase' ) );
        $planEliminado[ 'planEliminado' ] = ( Input::get( 'planEliminado' ) == '' ? null : Input::get( 'planEliminado' ) );
        $planModificado[ 'planModificado' ] = ( Input::get( 'planModificado' ) == '' ? null : Input::get( 'planModificado' ) );
        $planAdicionado[ 'planAdicionado' ] = ( Input::get( 'planAdicionado' ) == '' ? null : Input::get( 'planAdicionado' ) );
        $planReusado[ 'planReusado' ] = ( Input::get( 'planReusado' ) == '' ? null : Input::get( 'planReusado' ) );
        $planNyC[ 'planNyC' ] = ( Input::get( 'planNyC' ) == '' ? null : Input::get( 'planNyC' ) );
        $planTotal[ 'planTotal' ] = ( Input::get( 'planTotal' ) == '' ? null : Input::get( 'planTotal' ) );
        $actualBase[ 'actualBase' ] = ( Input::get( 'actualBase' ) == '' ? null : Input::get( 'actualBase' ) );
         $actualEliminado[ 'actualEliminado' ] = ( Input::get( 'actualEliminado' ) == '' ? null : Input::get( 'actualEliminado' ) );

        $actualModificado[ 'actualModificado' ] = ( Input::get( 'actualModificado' ) == '' ? null : Input::get( 'actualModificado' ) );
        $actualAdicionado[ 'actualAdicionado' ] = ( Input::get( 'actualAdicionado' ) == '' ? null : Input::get( 'actualAdicionado' ) );
         $actualReusado[ 'actualReusado' ] = ( Input::get( 'actualReusado' ) == '' ? null : Input::get( 'actualReusado' ) );
         $actualNyC[ 'actualNyC' ] = ( Input::get( 'actualNyC' ) == '' ? null : Input::get( 'actualNyC' ) );
         $actualTotal[ 'actualTotal' ] = ( Input::get( 'actualTotal' ) == '' ? null : Input::get( 'actualTotal' ) );
        $fechaBase[ 'fechaBase' ] = ( Input::get( 'fechaBase' ) == '' ? null : Input::get( 'fechaBase' ) );

        $fechaEliminado[ 'fechaEliminado' ] = ( Input::get( 'fechaEliminado' ) == '' ? null : Input::get( 'fechaEliminado' ) );

        $fechaModificado[ 'fechaModificado' ] = ( Input::get( 'fechaModificado' ) == '' ? null : Input::get( 'fechaModificado' ) );
        $fechaAdicionado[ 'fechaAdicionado' ] = ( Input::get( 'fechaAdicionado' ) == '' ? null : Input::get( 'fechaAdicionado' ) );
        $fechaReusado[ 'fechaReusado' ] = ( Input::get( 'fechaReusado' ) == '' ? null : Input::get( 'fechaReusado' ) );
        $fechaTotal[ 'fechaTotal' ] = ( Input::get( 'fechaTotal' ) == '' ? null : Input::get( 'fechaTotal' ) );
        $fechaNyC[ 'fechaNyC' ] = ( Input::get( 'fechaNyC' ) == '' ? null : Input::get( 'fechaNyC' ) );
        $avgFechaBase[ 'avgFechaBase' ] = ( Input::get( 'avgFechaBase' ) == '' ? null : Input::get( 'avgFechaBase' ) );

        $avgFechaEliminado[ 'avgFechaEliminado' ] = ( Input::get( 'avgFechaEliminado' ) == '' ? null : Input::get( 'avgFechaBase' ) );
        $avgFechaModificado[ 'avgFechaModificado' ] = ( Input::get( 'avgFechaModificado' ) == '' ? null : Input::get( 'avgFechaModificado' ) );
        $avgFechaAdicionado[ 'avgFechaAdicionado' ] = ( Input::get( 'avgFechaAdicionado' ) == '' ? null : Input::get( 'avgFechaAdicionado' ) );
        $avgFechaReusado[ 'avgFechaReusado' ] = ( Input::get( 'avgFechaReusado' ) == '' ? null : Input::get( 'avgFechaReusado' ) );
        $avgFechaNyC[ 'avgFechaNyC' ] = ( Input::get( 'avgFechaNyC' ) == '' ? null : Input::get( 'avgFechaNyC' ) );
        $avgFechaTotal[ 'avgFechaTotal' ] = ( Input::get( 'avgFechaTotal' ) == '' ? null : Input::get( 'avgFechaTotal' ) );
      

        $ldc = new Ldc();
        $ldc->idProyecto = $request->input('idProyecto');
        $ldc->idUsuario = $request->input('idUsuario');

        $ldc ->PlanBase = $PlanBase[ 'PlanBase' ];
        $ldc ->planEliminado= $planEliminado[ 'planEliminado' ];
        $ldc ->planModificado = $planModificado[ 'planModificado' ]; 
        $ldc ->planAdicionado = $planAdicionado[ 'planAdicionado' ]; 
        $ldc ->planReusado = $planReusado[ 'planReusado' ]; 
        $ldc ->planNyC = $planNyC[ 'planNyC' ]; 
        $ldc ->planTotal = $planTotal[ 'planTotal' ];

        $ldc ->actualBase = $actualBase[ 'actualBase' ];
        $ldc ->actualEliminado = $actualEliminado[ 'actualEliminado' ]; 
        $ldc ->actualModificado = $actualModificado[ 'actualModificado' ]; 
        $ldc ->actualAdicionado = $actualAdicionado[ 'actualAdicionado' ]; 
        $ldc ->actualReusado = $actualReusado[ 'actualReusado' ]; 
        $ldc ->actualNyC = $actualNyC[ 'actualNyC' ]; 
        $ldc ->actualTotal = $actualTotal[ 'actualTotal' ]; 
        
        $ldc ->fechaBase = $fechaBase[ 'fechaBase' ];
        $ldc ->fechaEliminado = $fechaEliminado[ 'fechaEliminado' ]; 
        $ldc ->fechaModificado = $fechaModificado[ 'fechaModificado' ]; 
        $ldc ->fechaAdicionado = $fechaAdicionado[ 'fechaAdicionado' ]; 
        $ldc ->fechaReusado = $fechaReusado[ 'fechaReusado' ]; 
        $ldc ->fechaNyC = $fechaNyC[ 'fechaNyC' ]; 
        $ldc ->fechaTotal = $fechaTotal[ 'fechaTotal' ];

        $ldc ->avgFechaBase = $avgFechaBase[ 'avgFechaBase' ];
        $ldc ->avgFechaEliminado = $avgFechaEliminado[ 'avgFechaEliminado' ];
        $ldc ->avgFechaModificado = $avgFechaModificado[ 'avgFechaModificado' ]; 
        $ldc ->avgFechaAdicionado = $avgFechaAdicionado[ 'avgFechaAdicionado' ]; 
        $ldc ->avgFechaReusado = $avgFechaReusado[ 'avgFechaReusado' ];
        $ldc ->avgFechaNyC = $avgFechaNyC[ 'avgFechaNyC' ]; 
        $ldc ->avgFechaTotal = $avgFechaTotal[ 'avgFechaTotal' ]; 
        $success = $ldc->save(); 

        if ($success){
                Session::flash('message','Registro realizado con éxito.');
                return Redirect::to('/Usuarios');
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
        //
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
