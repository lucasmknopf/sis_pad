@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>
        <h2>Cadastro Funcionario</h2>

        @if ($errors->any())

            <ul class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>'funcionario.store'])!!}

        <div class="form-group">

            {!! Form::label ('nome','Nome:') !!}
            {!! Form::text ('nome', null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label ('endereco','Endereço:') !!}
            {!! Form::text ('endereco', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('telefone','Telefone:') !!}
            {!! Form::text ('telefone', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('cpf','CPF:') !!}
            {!! Form::text ('cpf', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('funcao','Função:') !!}
            {!! Form::text ('funcao', null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::submit ('funcionario',['class'=>'btn btn-primary' ]) !!}

        </div>

        {!! Form::close()!!}


</div>

