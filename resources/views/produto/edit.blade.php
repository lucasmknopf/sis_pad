@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>
        <h2>Editar Produto: {{$produto->id}}</h2>

        @if ($errors->any())

            <ul class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route'=>["produto.update", $produto->id], 'method'=>'put'])!!}

        <div class="form-group">

            {!! Form::label ('nome','Nome:') !!}
            {!! Form::text ('nome', $produto->nome, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label ('fornecedor_id','Fornecedor:') !!}
            {!! Form::select('fornecedor_id', \App\fornecedores::orderBy('razao_social')->
            pluck('razao_social','id')->toArray(), null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('dt_validade','Data Validade:') !!}
            {!! Form::text ('dt_validade', $produto->dt_validade, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('quantidade','Quantidade:') !!}
            {!! Form::text ('quantidade', $produto->quantidade, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('preco_custo','Preço Custo:') !!}
            {!! Form::text ('preco_custo', $produto->preco_custo, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('preco_venda','Preço Venda:') !!}
            {!! Form::text ('preco_venda', $produto->preco_venda, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::submit ('Editar Produto',['class'=>'btn btn-primary' ]) !!}

        </div>

        {!! Form::close()!!}


</div>

