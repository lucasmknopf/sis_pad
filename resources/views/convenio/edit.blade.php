@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>
        <h2>Editar Convenio:{{$convenio->id}}</h2>

        @if ($errors->any())

            <ul class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route'=>["convenio.update", $convenio->id], 'method'=>'put'])!!}

        <div class="form-group">

            {!! Form::label ('cliente','Cliente:') !!}
            {!! Form::text ('cliente', $convenio->cliente, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label ('valor_devido','Valor A Pagar:') !!}
            {!! Form::text ('valor_devido', $convenio->valor_devido, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('limite','Limite:') !!}
            {!! Form::text ('limite', $convenio->limite, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::submit ('Editar Convenio',['class'=>'btn btn-primary' ]) !!}

        </div>

        {!! Form::close()!!}


</div>

