@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>
        <h2>Editar Padaria: {{$padaria->id}}</h2>

        @if ($errors->any())

            <ul class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route'=>["padaria.update", $padaria->id], 'method'=>'put'])!!}

        <div class="form-group">

            {!! Form::label ('razao_social','Razão Social:') !!}
            {!! Form::text ('razao_social', $padaria->razao_social, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label ('telefone','Telefone:') !!}
            {!! Form::text ('telefone', $padaria->telefone, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('endereco','Endereço:') !!}
            {!! Form::text ('endereco', $padaria->endereco, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('cnpj','CNPJ:') !!}
            {!! Form::text ('cnpj', $padaria->cnpj, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::submit ('Editar Padaria',['class'=>'btn btn-primary' ]) !!}

        </div>

        {!! Form::close()!!}


</div>

