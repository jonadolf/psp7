<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fases;
use App\Http\Requests\fasesRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class fasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fases=Fases::paginate(5);
        return view('Fases.indexFases',compact('fases'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Fases.crearFases');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(fasesRequest $request)
    {
        Fases::create([
           'Nombre'=>$request['nombre'],
            'Numero'=>$request['numero'],
        ]);
        if ($request) {
            Session::flash('message', 'Fase registrada con éxito.');
            return Redirect::to('/Fases');
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
        $fase = Fases::find($id);
        return View('Fases.editarFases')->with('fase' , $fase);


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



        $fase= Fases::find($id);

        $fase->Numero = $request['numero'];
        $fase->Nombre = (!empty($request['nombre'])) ? $request['nombre']: $fase->Nombre;
        $fase->save();

        if ($request){
            Session::flash('message','Fase actualizada con éxito.');
            return Redirect::to('/Fases');

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

       Fases::destroy($id);
        Session::flash('message','Fase eliminada con éxito.');
        return Redirect::to('/Fases');



    }
}
