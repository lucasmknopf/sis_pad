@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>
        <h2>Cadastro Padaria</h2>

        @if ($errors->any())

            <ul class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route'=>'padaria.store'])!!}

        <div class="form-group">

            {!! Form::label ('razao_social','Razão Social:') !!}
            {!! Form::text ('razao_social', null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label ('telefone','Telefone:') !!}
            {!! Form::text ('telefone', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('endereco','Endereço:') !!}
            {!! Form::text ('endereco', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('cnpj','CNPJ:') !!}
            {!! Form::text ('cnpj', null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::submit ('Cadastrar Padaria',['class'=>'btn btn-primary' ]) !!}

        </div>

        {!! Form::close()!!}


</div>

