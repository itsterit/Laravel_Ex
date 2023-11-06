<?php

namespace App\Http\Controllers;

use App\bodytypes;
use App\enginetypes;
use App\brands;
use Illuminate\Http\Request;

class CharacteristicHandler extends Controller
{
    public function SearchCharacteristic()
    {
        $EngineTypes = enginetypes::all();      
        $BodyTypes = bodytypes::all();      
        $Brands = brands::all();      
        return view('home', compact('EngineTypes', 'BodyTypes', 'Brands'));
    }
}
