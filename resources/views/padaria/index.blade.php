@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>

    <table class="table table-striped table-bordered table-hover">
        <div class="form-group">

            <a href="/padaria/create" class="btn-lg btn-success">Cadastrar Padaria</a>

        </div>
        <thead>

        <tr bgcolor="#d2691e">

            <th>Razão Social</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Cnpj</th>
            <th/>


        </tr>

        </thead>

        <tbody>

        @foreach($padaria as $pad)
                <tr>
                    <td>{{$pad->razao_social}}</td>
                    <td>{{$pad->telefone}}</td>
                    <td>{{$pad->endereco}}</td>
                    <td>{{$pad->cnpj}}</td>


                    <td>
                        <a href="{{route('padaria.edit',['id'=>$pad->id])}}
                                "class="btn-sm btn-success">Editar</a>

                        <a href="{{route('padaria.destroy',['id'=>$pad->id])}}
                                "class="btn-sm btn-danger">Remover</a>

                    </td>
                </tr>

        @endforeach

        </tbody>

    </table>

</div>

    @endsection