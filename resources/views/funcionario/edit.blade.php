@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>
        <h2>Editar Funcionario: {{$funcionario->id}}</h2>

        @if ($errors->any())

            <ul class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>["funcionario.update", $funcionario->id], 'method'=>'put'])!!}

        <div class="form-group">

            {!! Form::label ('nome','Nome:') !!}
            {!! Form::text ('nome', $funcionario->nome, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label ('endereco','Endereço:') !!}
            {!! Form::text ('endereco', $funcionario->endereco, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('telefone','Telefone:') !!}
            {!! Form::text ('telefone', $funcionario->telefone, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('cpf','CPF:') !!}
            {!! Form::text ('cpf', $funcionario->cpf, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('funcao','Função:') !!}
            {!! Form::text ('funcao', $funcionario->funcao, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::submit ('Editar funcionario',['class'=>'btn btn-primary' ]) !!}

        </div>

        {!! Form::close()!!}


</div>

