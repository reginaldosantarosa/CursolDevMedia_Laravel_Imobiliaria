<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    
    protected $table="cidades";

    public function imoveis(){
        return $this->hasMany('App\Imovel','cidade_id');
    }
}
