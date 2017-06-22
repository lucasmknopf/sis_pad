@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>
        <h2>Cadastro Produto</h2>

        @if ($errors->any())

            <ul class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route'=>'produto.store'])!!}

        <div class="form-group">

            {!! Form::label ('nome','Nome:') !!}
            {!! Form::text ('nome', null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label ('fornecedor_id','Fornecedor:') !!}
            {!! Form::select('fornecedor_id', \App\fornecedores::orderBy('razao_social')->
            pluck('razao_social','id')->toArray(), null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('dt_validade','Data Validade:') !!}
            {!! Form::text ('dt_validade', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('quantidade','Quantidade:') !!}
            {!! Form::text ('quantidade', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('preco_custo','Preço Custo:') !!}
            {!! Form::text ('preco_custo', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('preco_venda','Preço Venda:') !!}
            {!! Form::text ('preco_venda', null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::submit ('Cadastrar Produto',['class'=>'btn btn-primary' ]) !!}

        </div>

        {!! Form::close()!!}


</div>

