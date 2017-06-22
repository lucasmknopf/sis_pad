<?php

Route::get('', 'IndexController@index');

Route::group(['prefix'=>'padaria', 'where'=> ['id'=>'[0-9]+']], function (){
    Route::get  ('',            ['as'=>'padaria',                   'uses'=>'PadariaController@index']);
    Route::get  ('create',      ['as'=>'padaria.create',            'uses'=>'PadariaController@create']);
    Route::post ('store',       ['as'=>'padaria.store',             'uses'=>'PadariaController@store']);
    Route::get  ('{id}/destroy',['as'=>'padaria.destroy',           'uses'=>'PadariaController@destroy']);
    Route::get  ('{id}/edit',   ['as'=>'padaria.edit',              'uses'=>'PadariaController@edit']);
    Route::put  ('{id}/update', ['as'=>'padaria.update',            'uses'=>'PadariaController@update']);
});


Route::group(['prefix'=>'compra', 'where'=> ['id'=>'[0-9]+']], function (){
    Route::get  ('',            ['as'=>'compra',                   'uses'=>'CompraController@index']);
    Route::get  ('create',      ['as'=>'compra.create',            'uses'=>'CompraController@create']);
    Route::post ('store',       ['as'=>'compra.store',             'uses'=>'CompraController@store']);
    Route::get  ('{id}/destroy',['as'=>'compra.destroy',           'uses'=>'CompraController@destroy']);
    Route::get  ('{id}/edit',   ['as'=>'compra.edit',              'uses'=>'CompraController@edit']);
    Route::put  ('{id}/update', ['as'=>'compra.update',            'uses'=>'CompraController@update']);
});


Route::group(['prefix'=>'convenio', 'where'=> ['id'=>'[0-9]+']], function (){
    Route::get  ('',            ['as'=>'convenio',                   'uses'=>'ConvenioController@index']);
    Route::get  ('create',      ['as'=>'convenio.create',            'uses'=>'ConvenioController@create']);
    Route::post ('store',       ['as'=>'convenio.store',             'uses'=>'ConvenioController@store']);
    Route::get  ('{id}/destroy',['as'=>'convenio.destroy',           'uses'=>'ConvenioController@destroy']);
    Route::get  ('{id}/edit',   ['as'=>'convenio.edit',              'uses'=>'ConvenioController@edit']);
    Route::put  ('{id}/update', ['as'=>'convenio.update',            'uses'=>'ConvenioController@update']);
});

Route::group(['prefix'=>'fornecedor', 'where'=> ['id'=>'[0-9]+']], function (){
    Route::get  ('',            ['as'=>'fornecedor',                   'uses'=>'FornecedorController@index']);
    Route::get  ('create',      ['as'=>'fornecedor.create',            'uses'=>'FornecedorController@create']);
    Route::post ('store',       ['as'=>'fornecedor.store',             'uses'=>'FornecedorController@store']);
    Route::get  ('{id}/destroy',['as'=>'fornecedor.destroy',           'uses'=>'FornecedorController@destroy']);
    Route::get  ('{id}/edit',   ['as'=>'fornecedor.edit',              'uses'=>'FornecedorController@edit']);
    Route::put  ('{id}/update', ['as'=>'fornecedor.update',            'uses'=>'FornecedorController@update']);
});

Route::group(['prefix'=>'funcionario', 'where'=> ['id'=>'[0-9]+']], function (){
    Route::get  ('',            ['as'=>'funcionario',                   'uses'=>'FuncionarioController@index']);
    Route::get  ('create',      ['as'=>'funcionario.create',            'uses'=>'FuncionarioController@create']);
    Route::post ('store',       ['as'=>'funcionario.store',             'uses'=>'FuncionarioController@store']);
    Route::get  ('{id}/destroy',['as'=>'funcionario.destroy',           'uses'=>'FuncionarioController@destroy']);
    Route::get  ('{id}/edit',   ['as'=>'funcionario.edit',              'uses'=>'FuncionarioController@edit']);
    Route::put  ('{id}/update', ['as'=>'funcionario.update',            'uses'=>'FuncionarioController@update']);
});

Route::group(['prefix'=>'produto', 'where'=> ['id'=>'[0-9]+']], function (){
    Route::get  ('',            ['as'=>'produto',                   'uses'=>'ProdutoController@index']);
    Route::get  ('create',      ['as'=>'produto.create',            'uses'=>'ProdutoController@create']);
    Route::post ('store',       ['as'=>'produto.store',             'uses'=>'ProdutoController@store']);
    Route::get  ('{id}/destroy',['as'=>'produto.destroy',           'uses'=>'ProdutoController@destroy']);
    Route::get  ('{id}/edit',   ['as'=>'produto.edit',              'uses'=>'ProdutoController@edit']);
    Route::put  ('{id}/update', ['as'=>'produto.update',            'uses'=>'ProdutoController@update']);
});

Route::group(['prefix'=>'venda', 'where'=> ['id'=>'[0-9]+']], function (){
    Route::get  ('',            ['as'=>'venda',                   'uses'=>'VendaController@index']);
    Route::get  ('create',      ['as'=>'venda.create',            'uses'=>'VendaController@create']);
    Route::post ('store',       ['as'=>'venda.store',             'uses'=>'VendaController@store']);
    Route::get  ('{id}/destroy',['as'=>'venda.destroy',           'uses'=>'VendaController@destroy']);
    Route::get  ('{id}/edit',   ['as'=>'venda.edit',              'uses'=>'VendaController@edit']);
    Route::put  ('{id}/update', ['as'=>'venda.update',            'uses'=>'VendaController@update']);
});