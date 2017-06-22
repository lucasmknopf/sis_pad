<?php

namespace App\Http\Controllers;
use App\fornecedores;
use App\Http\Requests\FornecedorRequest;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedor = Fornecedores::all();
        return view('fornecedor.index', ['fornecedor'=> $fornecedor]);

    }

    public function create(){

        return view('fornecedor.create');


    }

    public function store(FornecedorRequest $request){

        $nv_form = $request->all();
        Fornecedores::create($nv_form);


        return redirect()->route('fornecedor');


    }

    public function destroy($id){
        Fornecedores::find($id)->delete();
        return redirect()->route('fornecedor');

    }

    public function edit($id){
        $fornecedor = Fornecedores::find($id);
        return view('fornecedor.edit', compact ('fornecedor'));

    }

    public function update(FornecedorRequest $request, $id){
        $fornecedor = Fornecedores::find($id)->update($request->all());
        return redirect()->route('fornecedor');

    }
}
