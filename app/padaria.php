<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class padaria extends Model
{

    protected $fillable = ['razao_social', 'telefone', 'endereco', 'cnpj'];

}
