<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PadariaController extends Controller
{

    public function index(){
        $pao = "cacetinho";
        return view('padaria', ['pao'=> $pao]);

    }


}
