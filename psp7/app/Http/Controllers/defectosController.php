<?php

namespace App\Http\Controllers;
use App\Defectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class defectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $defecto=Defectos::paginate(5);
        return view('Defectos.indexDefectos',compact('defecto'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Defectos.crearDefectos');

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

        $this->validate($request, [
            'numero' => 'required|integer',
            'nombre' => 'required|unique:Defectos',
            'descripcion'=>'required'
        ]);

        Defectos::create([

            'Nombre'=>$request['nombre'],
            'Numero'=>$request['numero'],
            'Descripcion'=>$request['descripcion'],
        ]);
        if ($request) {
            Session::flash('message', 'Defecto registrado con éxito.');
            return Redirect::to('/Defectos');
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
       $defecto = Defectos::find($id);
        return View('Defectos.editarDefectos')->with('defecto' , $defecto);
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

        $this->validate($request, [
            'numero' => 'required|numeric',
            'nombre' => 'required',
            'descripcion'=>'required'
        ]);

        $defecto= Defectos::find($id);
        $defecto->Numero = $request['numero'];
        $defecto->Nombre = $request['nombre'];
        $defecto->Descripcion = $request['descripcion'];

        $defecto->save();

        if ($request){
            Session::flash('message','Defecto actualizado con éxito.');
            return Redirect::to('/Defectos');

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
        Defectos::destroy($id);
        Session::flash('message','Defecto eliminado con éxito.');
        return Redirect::to('/Defectos');
    }
}
