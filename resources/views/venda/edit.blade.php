@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>
        <h2>Editar Venda: {{$venda->id}}</h2>

        @if ($errors->any())

            <ul class="alert alert-danger">

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif


        {!! Form::open(['route'=>["venda.update", $venda->id], 'method'=>'put'])!!}

        <div class="form-group">

            {!! Form::label ('valor_total','Valor Total:') !!}
            {!! Form::text ('valor_total', $venda->valor_total, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">

            {!! Form::label ('forma_pag','Forma de Pagamento:') !!}
            {!! Form::text ('forma_pag', $venda->forma_pag, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label ('desc','Desconto:') !!}
            {!! Form::text ('desc', $venda->desc, ['class'=>'form-control']) !!}

        </div>




        <div class="form-group">

            {!! Form::submit ('Editar Venda',['class'=>'btn btn-primary' ]) !!}

        </div>

        {!! Form::close()!!}


</div>

