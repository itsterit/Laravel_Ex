<?php

namespace App\Http\Controllers;

use App\bodytypes;
use App\enginetypes;
use Illuminate\Http\Request;

class CharacteristicHandler extends Controller
{
    public function SearchCharacteristic()
    {
        $Enginetypes = enginetypes::all();      
        return view('home', compact('Enginetypes'));
    }
}
