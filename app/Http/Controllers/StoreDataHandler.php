<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CharacteristicHandler;
use Illuminate\Http\Request;

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
            dd($GET_IsGoStoreView);
        }
    }
}
