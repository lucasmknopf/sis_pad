<?php

namespace App\Http\Controllers;
use App\compras;
use App\Http\Requests\CompraRequest;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index(){
        $compra = Compras::all();
        return view('compra.index', ['compra'=> $compra]);

    }

    public function create(){

        return view('compra.create');


    }

    public function store(CompraRequest $request){

        $nv_compr = $request->all();
        Compras::create($nv_compr);


        return redirect()->route('compra');


    }

    public function destroy($id){
        Compras::find($id)->delete();
        return redirect()->route('compra');

    }

    public function edit($id){
        $compra = Compras::find($id);
        return view('compra.edit', compact ('compra'));

    }

    public function update(CompraRequest $request, $id){
        $compra = Compras::find($id)->update($request->all());
        return redirect()->route('compra');

    }
}

