<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnologia extends Model
{
    protected $table = 'tecnologias';

    public function profissionais(){
        return $this->belongsToMany('App\Profissional','prof_tec','tec_id','prof_id'); //Modelo, tabela intermediaria, FK do modeo atual, FK do modelo ralacionado
    }
}
