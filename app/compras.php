<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compras extends Model
{
    protected $fillable = ['valor_total', 'forma_pag', 'desc', 'fornecedor_id'];

    public function fornecedor(){

        return $this->belongsTo('App\fornecedores');


    }

}



