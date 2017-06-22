<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fornecedores extends Model
{
    protected $fillable = ['razao_social', 'telefone', 'endereco', 'cnpj','email', 'representante'];

    public function forne(){

        return $this->hasMany('App\fornecedores');


    }

}

