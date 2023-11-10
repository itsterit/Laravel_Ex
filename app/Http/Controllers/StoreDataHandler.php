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

            if(($GET_Brands != "" && $GET_Brands != -1)   ||   ($GET_BodyTypes != "" && $GET_BodyTypes != -1)    ||   ($GET_Engine != "" && $GET_Engine != -1))
            {
                return view('OutCars', compact('EngineTypes', 'BodyTypes', 'Brands', 'Model'));
            }
            else
            {
                return view('OutCars', compact('EngineTypes', 'BodyTypes', 'Brands', 'Model'));
            }

        }
    }
}
