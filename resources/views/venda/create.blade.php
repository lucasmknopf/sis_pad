@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>
        <h2>Cadastro Venda</h2>

        @if ($errors->any())

            <ul class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route'=>'venda.store'])!!}

        <div class="form-group">

            {!! Form::label ('valor_total','Valor Total:') !!}
            {!! Form::text ('valor_total', null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label ('forma_pag','Forma de Pagamento:') !!}
            {!! Form::text ('forma_pag', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('desc','Desconto:') !!}
            {!! Form::text ('desc', null, ['class'=>'form-control']) !!}

        </div>




        <div class="form-group">

            {!! Form::submit ('Cadastrar Venda',['class'=>'btn btn-primary' ]) !!}

        </div>

        {!! Form::close()!!}


</div>

