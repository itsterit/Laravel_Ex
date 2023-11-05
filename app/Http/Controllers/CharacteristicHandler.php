<?php

namespace App\Http\Controllers;

use App\enginetypes;
use Illuminate\Http\Request;

class CharacteristicHandler extends Controller
{
    public function SearchCharacteristic()
    {
        $Character = enginetypes::all();      
        dd($Character);
    }
}
