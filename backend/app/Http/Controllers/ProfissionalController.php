<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profissional;

class ProfissionalController extends Controller
{
    public function listarProfissionais(Request $request){
        $profissionais = Profissional::all();
    
        return response()->json($profissionais);
    }

    public function criarProfissional(Request $request){
        $newProfissional = new Profissional();
        $newProfissional->name = $request->name;
        $newProfissional->github = $request->github;
        $result = $newProfissional->save();

        return response()->json($newProfissional);
    }
}
