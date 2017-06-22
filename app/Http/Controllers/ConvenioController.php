<?php

namespace App\Http\Controllers;
use App\convenio;
use App\Http\Requests\ConvenioRequest;
use Illuminate\Http\Request;

class ConvenioController extends Controller
{
    public function index(){
        $convenio = Convenio::all();
        return view('convenio.index', ['convenio'=> $convenio]);

    }

    public function create(){

        return view('convenio.create');


    }

    public function store(ConvenioRequest $request){

        $nv_conv = $request->all();
        Convenio::create($nv_conv);


        return redirect()->route('convenio');


    }

    public function destroy($id){
        Convenio::find($id)->delete();
        return redirect()->route('convenio');

    }

    public function edit($id){
        $convenio = Convenio::find($id);
        return view('convenio.edit', compact ('convenio'));

    }

    public function update(ConvenioRequest $request, $id){
        $convenio = Convenio::find($id)->update($request->all());
        return redirect()->route('convenio');

    }
}
