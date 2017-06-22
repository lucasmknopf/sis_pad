@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>
        <h2>Cadastro Convenio</h2>

        @if ($errors->any())

            <ul class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route'=>'convenio.store'])!!}

        <div class="form-group">

            {!! Form::label ('cliente','Cliente:') !!}
            {!! Form::text ('cliente', null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label ('valor_devido','Valor A Pagar:') !!}
            {!! Form::text ('valor_devido', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('limite','Limite:') !!}
            {!! Form::text ('limite', null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::submit ('Cadastrar Convenio',['class'=>'btn btn-primary' ]) !!}

        </div>

        {!! Form::close()!!}


</div>

