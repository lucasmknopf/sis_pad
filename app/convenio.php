<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class convenio extends Model
{
    protected $fillable = ['cliente', 'valor_devido', 'limite'];
}
