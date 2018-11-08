<?php

namespace App\Http\Controllers;



use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
use App\stdCodifica;
use App\User;
use App\Asiga;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Iatstuti\Database\Support\NullableFields;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class proyecto1Controller extends Controller
{
    
    public function index($numeroProyecto)

    {
      //dd($numeroProyecto);
     $query = DB:: table('asignas')
             ->select('idEstudiante','numeroProyecto','estado')
             ->where('idEstudiante','=',Auth::id())
             ->where('estado','=','Abierto')
             ->where('numeroProyecto','=',$numeroProyecto)
             ->first();
             if($query){
                $data = [
                    'query'  => $query,
                    'numeroProyecto'   => $numeroProyecto];

                    /*checar el arreglo*/
              return view('Proyecto1.index')->with('data',['query'=>$query,
                                                            'numeroProyecto'=>$numeroProyecto]);
             }else{
                   Session::flash('message','El proyecto ya se ha enviado para calificar.');
                   

                        return Redirect::to('/ListaTareasEstudiante')->with('numeroProyecto',$numeroProyecto);

             }
          

       
    }
  
    public function stdCodifica()
    {     
          
      }	
       
       public function regStdCodifica(Request $request)
    {
     
     }

     public function editStdCodififica(Request $request)
     {
     
     }


     public function stdCuantifica()
      {
            
      }
}
