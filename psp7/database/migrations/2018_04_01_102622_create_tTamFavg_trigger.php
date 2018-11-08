<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Http\Request;
use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
use App\actualLdc;
use App\Asigna;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Iatstuti\Database\Support\NullableFields;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CreateTTamFavgTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       

         DB::unprepared('
            
            CREATE TRIGGER insertTamFavg AFTER INSERT ON actualLdcs
            FOR EACH ROW BEGIN
                 $aLaFechaReusado = DB::table('actualLdcs')
                ->select('actualReusado', DB::raw('SUM(actualReusado) as actual_Reusado'))
                ->where(Auth::id())->first();
            
                
            END


            ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
