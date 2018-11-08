<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;
Use App\Http\Controllers\UsuarioController;







class UsuarioController extends Controller
{

    //validar auth c
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('Usuarios');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Index del controlador

         $lee_usuarios = User::paginate(5);
        return view('Usuarios.indexUsuarios',compact('lee_usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Usuarios.creaUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_id['id']       = request()->get('id');
        $data['nombre']       = request()->get('nombre');
        $data['tipoUsuario']       = request()->get('tipoUsuario');
        $data['email']       = request()->get('email');
        $data['password']       = request()->get('password');
        $data['password_confirmado']       = request()->get('password_confirmado');
        
       $rules = [
            'nombre'       => 'required', 'max:150',
            'tipoUsuario' => 'required',
            'email' => 'required', 'email','unique:users',
            'password'    => 'required',
            'password_confirmado' => 'same:password',
            ];

        $mensages= [
        'nombre.required'=>'Nombre de usuario es obligatorio.',
        'tipoUsuario.required'=>'El tipo de usuario es obligatorio.',
        'mail.required'=>'El email que intenta registrar, ya fue registrado.',
        'password_confirmado.required'=>'Revíse las contrsaeñas, no coinciden.',
        ];


            $validate = Validator::make($data, $rules,$mensages)->validate();

        try{
             User::create([

                     'name'=>$request['nombre'],
                       'tipoUsuario'  =>$request['tipoUsuario'],
                       'email'=>$request['email'],
                       'password'=>bcrypt($request['password_confirmado']),
                       ]);
                          
             if ($request){
                Session::flash('message','Usuario registrado con éxito.');
                return Redirect::to('/Usuarios');
            }
            
        } catch (Exception $e) {}

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
        $user= User::find($id);
        return View('Usuarios.editarUsuarios', ['usuarios' => $user]);
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

      try{
            $user = User::find($id);
            $user->fill($request->all());

            $success = $user->save();
            if ($success){
                Session::flash('message','Usuario actualizado con éxito.');
            }else {
                Session::flash('message','No se pudo actualizar el usuario.');
            }
      }catch (Exception $e){
            Session::flash('message','No se pudo actualizar el usuario.');
      }
      return Redirect::to('/Usuarios');       
       }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         $asesor = User::where('id', '=', $id)->first();

        //Si asesor es null quiere decir que el id corresponde a estudiante
        if($asesor == null){
            //Se procede a eliminar al estudiante que coincide con el user
            $estudiante = User::where('id', '=', $id)->first();
            //Recep::destroy($recep);
            $estudiante->delete();
        }

        else //Si asesor no es null quiere decir que el id corresponde a un asesor
        {
            $asesor->delete(); //Se elimina el asesor correspondiente
        }
        
        User::destroy($id);
        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/Usuarios');
    }
}
