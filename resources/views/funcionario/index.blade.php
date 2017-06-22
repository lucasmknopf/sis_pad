@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>

    <table class="table table-striped table-bordered table-hover">
        <div class="form-group">

            <a href="/funcionario/create" class="btn-lg btn-success">Cadastrar Funcionario</a>

        </div>
        <thead>

        <tr bgcolor="#d2691e">

            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th>Função</th>
            <th/>




        </tr>

        </thead>

        <tbody>

        @foreach($funcionario as $func)
                <tr>
                    <td>{{$func->nome}}</td>
                    <td>{{$func->endereco}}</td>
                    <td>{{$func->telefone}}</td>
                    <td>{{$func->cpf}}</td>
                    <td>{{$func->funcao}}</td>


                    <td>
                        <a href="{{route('funcionario.edit',['id'=>$func->id])}}
                                "class="btn-sm btn-success">Editar</a>

                        <a href="{{route('funcionario.destroy',['id'=>$func->id])}}
                                "class="btn-sm btn-danger">Remover</a>

                    </td>

                </tr>

        @endforeach

        </tbody>

    </table>

</div>

    @endsection