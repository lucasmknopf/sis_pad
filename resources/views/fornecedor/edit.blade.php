@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>
        <h2>Editar Fornecedor: {{$fornecedor->id}}</h2>

        @if ($errors->any())

            <ul class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route'=>["fornecedor.update", $fornecedor->id], 'method'=>'put'])!!}

        <div class="form-group">

            {!! Form::label ('razao_social','Razão Social:') !!}
            {!! Form::text ('razao_social', $fornecedor->razao_social, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label ('cnpj','CNPJ:') !!}
            {!! Form::text ('cnpj', $fornecedor->cnpj, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('endereco','Endereço:') !!}
            {!! Form::text ('endereco', $fornecedor->endereco, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('email','E-mail:') !!}
            {!! Form::text ('email', $fornecedor->email, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('telefone','Telefone:') !!}
            {!! Form::text ('telefone', $fornecedor->telefone, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('representante','Representante:') !!}
            {!! Form::text ('representante', $fornecedor->representante, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::submit ('Editar Fornecedor',['class'=>'btn btn-primary' ]) !!}

        </div>

        {!! Form::close()!!}


</div>

