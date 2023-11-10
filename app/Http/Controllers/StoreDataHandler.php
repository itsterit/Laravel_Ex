<?php

namespace App\Http\Controllers;

use App\bodytypes;
use App\enginetypes;
use App\brands;
use App\car_model;
use App\Http\Controllers\CharacteristicHandler;
use Illuminate\Http\Request;
use DB;

class StoreDataHandler extends Controller
{
    public function index()
    {
        $GET_BodyTypes         = $_GET['BodyTypes']           ?? "";
        $GET_Brands            = $_GET['Brands']              ?? "";
        $GET_Engine            = $_GET['EngineTypes']         ?? "";
        $GET_Model             = $_GET['Model']               ?? "";
        $GET_IsGoStoreView     = $_GET['IsGoStoreView']       ?? "";

        if($GET_IsGoStoreView != 1)
        {
            return app('App\Http\Controllers\CharacteristicHandler')->SearchCharacteristic();
        }
        else
        {
            $DB_EngineTypes = "";
            $DB_BodyTypes   = "";
            $DB_Brands      = "";

            $EngineTypes = enginetypes::all();
            $BodyTypes   = bodytypes::all();
            $Brands      = brands::all();
            $Model       = car_model::all();

            $Cars      = DB::select('select * from car_stores where 1');
            $CarsParam = DB::select('SELECT `car_model_id`, `car_info`, `was_rented`, `rent_price`, `img_patch`  FROM `car_stores` WHERE 1');

            if(($GET_Brands != "" && $GET_Brands != -1)   ||   ($GET_BodyTypes != "" && $GET_BodyTypes != -1)    ||   ($GET_Engine != "" && $GET_Engine != -1))
            {
                /**
                 * Вывод авто с "витрины"
                 */
                foreach($CarsParam as $Cars_Param)
                {                  
                    /**
                    * бренд авто
                    */
                    $CarsModelParam = DB::select('SELECT `car_brand_id`, `car_body_id`, `car_engine_id` FROM `car_models` WHERE model_id = ?', [$Cars_Param->car_model_id]);
                    foreach($CarsModelParam as $CarsModelParam_list)
                    {
                        $DB_Brands = $CarsModelParam_list->car_brand_id;
                        break;
                    }

                    /**
                    * кузов авто
                    */
                    $CarsModelParam = DB::select('SELECT `car_brand_id`, `car_body_id`, `car_engine_id` FROM `car_models` WHERE model_id = ?', [$Cars_Param->car_model_id]);
                    foreach($CarsModelParam as $CarsModelParam_list)
                    {
                        $DB_BodyTypes = $CarsModelParam_list->car_body_id;
                        break;
                    }

                    /**
                    * двигатель авто
                    */
                    $CarsModelParam = DB::select('SELECT `car_brand_id`, `car_body_id`, `car_engine_id` FROM `car_models` WHERE model_id = ?', [$Cars_Param->car_model_id]);
                    foreach($CarsModelParam as $CarsModelParam_list)
                    {
                        $DB_EngineTypes = $CarsModelParam_list->car_engine_id;
                        break;
                    }
                    
                    if(    
                        (($GET_Brands    == $DB_Brands)      || ($GET_Brands    == "" || $GET_Brands    == -1)) &&
                        (($GET_BodyTypes == $DB_BodyTypes)   || ($GET_BodyTypes == "" || $GET_BodyTypes == -1)) &&
                        (($GET_Engine    == $DB_EngineTypes) || ($GET_Engine    == "" || $GET_Engine    == -1))
                    )
                    {
                        echo($Cars_Param->car_model_id);
                        echo("| ");                    
                        echo($Cars_Param->car_info);
                        echo(" |");                    
                        echo($Cars_Param->was_rented);
                        echo("|");                    
                        echo($Cars_Param->rent_price);
                        echo("|");                    
                        echo($Cars_Param->img_patch);
                        echo("("); 
                        
                        echo($DB_Brands);
                        echo($DB_BodyTypes);
                        echo($DB_EngineTypes);
                        echo(")"); 
                    }

                    echo("<br>");
                }

            }
            else
            {
                dd($Cars);
            }

        }
    }
}
