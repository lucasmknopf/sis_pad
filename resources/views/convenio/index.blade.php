@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>



    <table class="table table-striped table-bordered table-hover">
        <div class="form-group">

           <a href="/convenio/create" class="btn-lg btn-success">Cadastrar Convenio</a>

        </div>


        <thead>

        <tr bgcolor="#d2691e">

            <th>Cliente</th>
            <th>Valor a Pagar</th>
            <th>Limite</th>
            <th/>

        </tr>

        </thead>

        <tbody>

        @foreach($convenio as $conv)
                <tr>
                    <td>{{$conv->cliente}}</td>
                    <td>{{$conv->valor_devido}}</td>
                    <td>{{$conv->limite}}</td>

                    <td>
                        <a href="{{route('convenio.edit',['id'=>$conv->id])}}
                                "class="btn-sm btn-success">Editar</a>

                        <a href="{{route('convenio.destroy',['id'=>$conv->id])}}
                                "class="btn-sm btn-danger">Remover</a>

                    </td>

                </tr>

        @endforeach

        </tbody>

    </table>

</div>

    @endsection