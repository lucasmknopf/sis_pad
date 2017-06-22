<?php

namespace App\Http\Controllers;
use App\Http\Requests\VendaRequest;
use App\venda;
use Illuminate\Http\Request;

class vendaController extends Controller
{
    public function index(){
        $venda = Venda::all();
        return view('venda.index', ['venda'=> $venda]);

    }

    public function create(){

        return view('venda.create');


    }

    public function store(VendaRequest $request){

        $nv_vend = $request->all();
        Venda::create($nv_vend);


        return redirect()->route('venda');


    }

    public function destroy($id){
    Venda::find($id)->delete();
    return redirect()->route('venda');

}

    public function edit($id){
        $compra = Venda::find($id);
        return view('compra.edit', compact ('compra'));

    }

    public function update(VendaRequest $request, $id){
        $compra = Venda::find($id)->update($request->all());
        return redirect()->route('compra');

    }
}
