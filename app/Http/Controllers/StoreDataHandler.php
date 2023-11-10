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

            $users = DB::select('select * from car_stores where 1');

            foreach($Brands as $brand)
            {
                dd($users);
            }
        }
    }
}
