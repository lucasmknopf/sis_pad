<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $fillable = ['nome', 'fornecedor_id', 'dt_validade', 'quantidade', 'preco_custo', 'preco_venda'];

    public function fornecedor(){

        return $this->belongsTo('App\fornecedores');


    }

}
