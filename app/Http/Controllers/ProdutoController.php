<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProdutoRequest;
use App\produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produto = produtos::all();
        return view('produto.index', ['produto'=> $produto]);

    }

    public function create(){

        return view('produto.create');


    }

    public function store(ProdutoRequest $request){

        $nv_prod = $request->all();
        Produtos::create($nv_prod);


        return redirect()->route('produto');


    }

    public function destroy($id){
        Produtos::find($id)->delete();
        return redirect()->route('produto');

    }
    public function edit($id){
        $produto = Produtos::find($id);
        return view('produto.edit', compact ('produto'));

    }

    public function update(ProdutoRequest $request, $id){
        $produto = Produtos::find($id)->update($request->all());
        return redirect()->route('produto');

    }

}
