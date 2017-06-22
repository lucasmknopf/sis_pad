<?php

namespace App\Http\Controllers;
use App\funcionarios;
use App\Http\Requests\FuncionarioRequest;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index(){
        $funcionario = funcionarios::all();
        return view('funcionario.index', ['funcionario'=> $funcionario]);

    }

    public function create(){

        return view('funcionario.create');


    }

    public function store(FuncionarioRequest $request){

        $nv_func = $request->all();
        Funcionarios::create($nv_func);


        return redirect()->route('funcionario');


    }

    public function destroy($id){
        Funcionarios::find($id)->delete();
        return redirect()->route('funcionario');

    }

    public function edit($id){
        $funcionario = Funcionarios::find($id);
        return view('funcionario.edit', compact ('funcionario'));

    }

    public function update(FuncionarioRequest $request, $id){
        $funcionario = Funcionarios::find($id)->update($request->all());
        return redirect()->route('funcionario');

    }
}
