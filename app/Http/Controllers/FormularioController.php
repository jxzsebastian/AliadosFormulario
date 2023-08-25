<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    //

    public function store(Request $request){

        $input = $request->all();

        $input['niveles_educacion_emprendedor'] = $request->input('niveles_educacion_emprendedor');
        dd($input);
    }
}
