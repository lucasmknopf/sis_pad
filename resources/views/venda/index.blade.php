@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>

    <table class="table table-striped table-bordered table-hover">
        <div class="form-group">

            <a href="/venda/create" class="btn-lg btn-success">Cadastrar Venda</a>

        </div>
        <thead>

        <tr bgcolor="#d2691e">

            <th>Valor Total</th>
            <th>Forma de Pagamento</th>
            <th>Desconto</th>
            <th/>



        </tr>

        </thead>

        <tbody>

        @foreach($venda as $vend)
                <tr>
                    <td>{{$vend->valor_total}}</td>
                    <td>{{$vend->forma_pag}}</td>
                    <td>{{$vend->desc}}</td>

                    <td>
                        <a href="{{route('venda.edit',['id'=>$vend->id])}}
                                "class="btn-sm btn-success">Editar</a>

                        <a href="{{route('venda.destroy',['id'=>$vend->id])}}
                                "class="btn-sm btn-danger">Remover</a>

                    </td>

                </tr>

        @endforeach

        </tbody>

    </table>

</div>

    @endsection