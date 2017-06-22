<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionarios extends Model
{
    protected $fillable = ['nome', 'telefone', 'endereco', 'cpf', 'funcao'];
}
