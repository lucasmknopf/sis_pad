@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>

    <table class="table table-striped table-bordered table-hover">
        <div class="form-group">

            <a href="/compra/create" class="btn-lg btn-success">Cadastrar Compra</a>

        </div>
        <thead>

        <tr bgcolor="#d2691e">

            <th>Valor Total</th>
            <th>Forma de Pagamento</th>
            <th>Desconto</th>
            <th>Fornecedor</th>
            <th></th>


        </tr>

        </thead>

        <tbody>

        @foreach($compra as $comp)
                <tr>
                    <td>{{$comp->valor_total}}</td>
                    <td>{{$comp->forma_pag}}</td>
                    <td>{{$comp->desc}}</td>
                    <td>{{$comp->fornecedor->razao_social}}</td>

                        <td>
                            <a href="{{route('compra.edit',['id'=>$comp->id])}}
                                    "class="btn-sm btn-success">Editar</a>

                            <a href="{{route('compra.destroy',['id'=>$comp->id])}}
                                    "class="btn-sm btn-danger">Remover</a>

                        </td>

                </tr>

        @endforeach

        </tbody>

    </table>

</div>

    @endsection