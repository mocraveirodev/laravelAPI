<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profissional;
use App\Tecnologia;

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

        $tecnologiaID = $request->tecnologia;

        foreach(Tecnologia::all() as $chave => $valor){
            if($valor['name'] == $tecnologiaID){
                $tecnologiaID = $valor['id'];
            }
        }

        $tecnologia = Tecnologia::find($tecnologiaID);
        if($tecnologia){
            $tecnologia->profissionais()->attach($newProfissional->id);
        }else{
            return response()->json(["error" => "A tecnologia não existe!"]);
        }
        
        return response()->json($newProfissional);
    }
}
