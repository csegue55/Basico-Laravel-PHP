<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use Illuminate\Http\Request;

class CocheController extends Controller
{
    public function edit(){

        $coches= Coche::all();
        //return response()->json($coches);
        return view('coches.edit', compact('coches'));
        
    }
}
