<?php

namespace App\Http\Controllers;
use App\Http\Requests\PadariaRequest;
use App\padaria;
use Illuminate\Http\Request;

class PadariaController extends Controller
{

    public function index(){
       $padaria = Padaria::all();
        return view('padaria.index', ['padaria'=> $padaria]);

    }

    public function create(){

        return view('padaria.create');


    }

    public function store(PadariaRequest $request){

        $nv_pad = $request->all();
        Padaria::create($nv_pad);


        return redirect()->route('padaria');


    }

    public function destroy($id){
        Padaria::find($id)->delete();
        return redirect()->route('padaria');

    }

    public function edit($id){
        $padaria = Padaria::find($id);
        return view('padaria.edit', compact ('padaria'));

    }

    public function update(PadariaRequest $request, $id){
        $padaria = Padaria::find($id)->update($request->all());
        return redirect()->route('padaria');

    }


}
