<?php

namespace App\Http\Controllers;

use App\bodytypes;
use App\enginetypes;
use App\brands;
use App\car_model;
use Illuminate\Http\Request;

class CharacteristicHandler extends Controller
{
    public function SearchCharacteristic()
    {
        $EngineTypes = enginetypes::all();      
        $BodyTypes = bodytypes::all();      
        $Brands = brands::all();      
        $Model = car_model::all();      
        return view('home', compact('EngineTypes', 'BodyTypes', 'Brands', 'Model'));
    }
}
