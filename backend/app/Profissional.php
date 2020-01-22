<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = 'profissionais';

    public function tecnologias(){
        return $this->hasMany('App\Tecnologia','prof_tec','prof_id','tec_id'); //Modelo, tabela intermediaria, FK do modeo atual, FK do modelo ralacionado
    }
}
