@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>

    <table class="table table-striped table-bordered table-hover">
        <div class="form-group">

            <a href="/produto/create" class="btn-lg btn-success">Cadastrar Produto</a>

        </div>
        <thead>

        <tr bgcolor="#d2691e">

            <th>Nome</th>
            <th>Fornecedor</th>
            <th>Data Validade</th>
            <th>Quantidade</th>
            <th>Preço Custo</th>
            <th>Preço Venda</th>
            <th/>


        </tr>

        </thead>

        <tbody>

        @foreach($produto as $prod)
                <tr>
                    <td>{{$prod->nome}}</td>
                    <td>{{$prod->fornecedor->razao_social}}</td>
                    <td>{{$prod->dt_validade}}</td>
                    <td>{{$prod->quantidade}}</td>
                    <td>{{$prod->preco_custo}}</td>
                    <td>{{$prod->preco_venda}}</td>

                    <td>
                        <a href="{{route('produto.edit',['id'=>$prod->id])}}
                                "class="btn-sm btn-success">Editar</a>

                        <a href="{{route('produto.destroy',['id'=>$prod->id])}}
                                "class="btn-sm btn-danger">Remover</a>

                    </td>
                </tr>

        @endforeach

        </tbody>

    </table>

</div>

    @endsection