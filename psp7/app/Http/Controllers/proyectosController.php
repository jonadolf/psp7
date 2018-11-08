<?php

namespace App\Http\Controllers;

use App\Http\Requests\crearProyectosRequest;
use App\Http\Requests\editarproyectosRequest;

use Illuminate\Http\Request;
use App\Proyectos;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;







class proyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){



        $lee_proyectos = Proyectos::paginate(5);
        return view('Proyectos.indexProyectos',compact('lee_proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Proyectos.creaProyectos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */





    public function store(crearProyectosRequest $request)
    {

      $data['descripcion']     = request()->file('descripcion');
        if (request()->hasFile('descripcion')) {
           $nombre       = Carbon::now()->second.$data['descripcion']->getClientOriginalName();
           $ruta      = $data['descripcion']->storeAs('ArchivosProyectos',$nombre,'public');
        }
                    Proyectos::create([

                       'NumeroProyecto'=>$request['NumeroProyecto'],
                       'NombreProyecto'  =>$request['NombreProyecto'],
                       'ElementosDeEvaluacion'=>$request['ElementosDeEvaluacion'],
                       'NombreArchivo'=> $nombre,
                       'RutaArchivo'=> $ruta,
                       ]);


             if ($request){
                 Session::flash('message','Proyecto registrado con éxito.');
                 return Redirect::to('/Proyectos');

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

      $proyecto=Proyectos::find($id);
       return View('Proyectos.editarProyectos', ['proyecto' => $proyecto]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, editarproyectosRequest $request)
    {
        try {

            $proyecto = Proyectos::find($id);
            $proyecto->NumeroProyecto   =   $request['NumeroProyecto'];
            $proyecto->NombreProyecto   =   $request['NombreProyecto'];
            $proyecto->ElementosDeEvaluacion    =   $request['ElementosDeEvaluacion']; 
               
            if (request()->hasFile('descripcion')) {
                $nombre       = Carbon::now()->second.$request['descripcion']->getClientOriginalName();
                $ruta      = $request['descripcion']->storeAs('ArchivosProyectos',$nombre,'public');
                $proyecto->NombreArchivo    =   $nombre;
                $proyecto->RutaArchivo      =   $ruta;
                }       
           // $proyecto=  Proyectos::fill($request->all());
            $success = $proyecto->save();  

            if ($success){
                Session::flash('message','Proyecto actualizado con éxito.');
                return Redirect::to('/Proyectos');
            }
        } catch (Exception $e) {}
    }






    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
         $proyecto = Proyectos:: find($id);

         if(unlink($proyecto->RutaArchivo)){
            $proyecto->delete();
            return Redirect::to('/Proyectos');
             Session::flash('message','Proyecto eliminado con éxito.');
         }
         else
            return Redirect::to('/Proyectos');
  
         



    }
}
