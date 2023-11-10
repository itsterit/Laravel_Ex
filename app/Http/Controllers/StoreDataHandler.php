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
            $EngineTypes = enginetypes::all();
            $BodyTypes   = bodytypes::all();
            $Brands      = brands::all();
            $Model       = car_model::all();

            $Cars      = DB::select('select * from car_stores where 1');
            $CarsParam = DB::select('SELECT `car_model_id` FROM `car_stores` WHERE 1');

            if(($GET_Brands != "" && $GET_Brands != -1)   ||   ($GET_BodyTypes != "" && $GET_BodyTypes != -1)    ||   ($GET_Engine != "" && $GET_Engine != -1))
            {
                /**
                 * Вывод авто с "витрины"
                 */
                foreach($CarsParam as $Cars_Param)
                {
                    echo($Cars_Param->car_model_id);
                    echo("(");                    
                        /**
                        * бренд авто
                        */
                        $CarsModelParam = DB::select('SELECT `car_brand_id`, `car_body_id`, `car_engine_id` FROM `car_models` WHERE model_id = ?', [$Cars_Param->car_model_id]);
                        foreach($CarsModelParam as $CarsModelParam_list)
                        {
                            echo($CarsModelParam_list->car_brand_id);
                            break;
                        }
                    echo(")");

                    echo("(");                    
                        /**
                        * кузов авто
                        */
                        $CarsModelParam = DB::select('SELECT `car_brand_id`, `car_body_id`, `car_engine_id` FROM `car_models` WHERE model_id = ?', [$Cars_Param->car_model_id]);
                        foreach($CarsModelParam as $CarsModelParam_list)
                        {
                            echo($CarsModelParam_list->car_body_id);
                            break;
                        }
                    echo(")");

                    echo("(");                    
                        /**
                        * двигатель авто
                        */
                        $CarsModelParam = DB::select('SELECT `car_brand_id`, `car_body_id`, `car_engine_id` FROM `car_models` WHERE model_id = ?', [$Cars_Param->car_model_id]);
                        foreach($CarsModelParam as $CarsModelParam_list)
                        {
                            echo($CarsModelParam_list->car_engine_id);
                            break;
                        }
                    echo(")");

                    echo("<br>");
                }

                // dd($CarsParam);
                // $CarsParam = DB::select('SELECT `car_model_id` FROM `car_stores` WHERE 1');
                // foreach($Cars as $Cars_card)
                // {
                //     if(    
                //         (($GET_Brands    == $Cars_card->car_id)       || ($GET_Brands    == "" || $GET_Brands    == -1)) &&
                //         (($GET_BodyTypes == $Cars_card->car_body_id)        || ($GET_BodyTypes == "" || $GET_BodyTypes == -1)) &&
                //         (($GET_Engine    == $Cars_card->car_engine_id)      || ($GET_Engine    == "" || $GET_Engine    == -1))
                //     )
                //     {
                //         dd($Cars);
                //     }
                // }
            }
            else
            {
                dd($Cars);
            }

        }
    }
}
