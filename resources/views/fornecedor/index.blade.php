@extends('app')

@section('content')

    <div class="container">
        <h1> SisPad</h1>

    <table class="table table-striped table-bordered table-hover">
        <div class="form-group">

            <a href="/fornecedor/create" class="btn-lg btn-success">Cadastrar Fornecedor</a>

        </div>
        <thead>

        <tr bgcolor="#d2691e">

            <th>Razão Social</th>
            <th>CNPJ</th>
            <th>Endereço</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Representante</th>
            <th/>


        </tr>

        </thead>

        <tbody>

        @foreach($fornecedor as $forn)
                <tr>
                    <td>{{$forn->razao_social}}</td>
                    <td>{{$forn->cnpj}}</td>
                    <td>{{$forn->endereco}}</td>
                    <td>{{$forn->email}}</td>
                    <td>{{$forn->telefone}}</td>
                    <td>{{$forn->representante}}</td>


                    <td>
                        <a href="{{route('fornecedor.edit',['id'=>$forn->id])}}
                                "class="btn-sm btn-success">Editar</a>

                        <a href="{{route('fornecedor.destroy',['id'=>$forn->id])}}
                                "class="btn-sm btn-danger">Remover</a>

                    </td>
                </tr>

        @endforeach

        </tbody>

    </table>

</div>

    @endsection