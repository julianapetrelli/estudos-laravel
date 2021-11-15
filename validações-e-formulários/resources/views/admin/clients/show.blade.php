@extends('Layouts.layout')
@section('content')

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-dark" href="{{ route('clients.index') }}">Voltar</a>
        <a class="btn btn-dark" href="{{ route('clients.edit',['client' => $client->id]) }}">Editar</a>
        <a class="btn btn-danger" href="{{ route('clients.destroy',['client' => $client->id]) }}" onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}">Excluir</a>
        <form id="form-delete"style="display: none" action="{{ route('clients.destroy',['client' => $client->id]) }}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}>Excluir</a>
    </div>

    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $client->id }}</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>{{ $client->name }}</td>
            </tr>
            <tr>
                <th>Documento</th>
                <td>{{ $client->document_number }}</td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td>{{ $client->email}}</td>
            </tr>
            <tr>
                <th>Telefone</th>
                <td>{{ $client->phone}}</td>
            </tr>
            <tr>
                <th>Estado Civil</th>
                <td>
                    @switch($client->marital_status)
                        @case(1)
                            Solteiro
                            @break
                        @case(2)
                            Casado
                            @break
                        @case(3)
                            Divorciado
                            @break
                    @endswitch
                </td>
            </tr>
            <tr>
                <th>Sexo</th>
                <td>{{ $client->sex == 'm' ? "Masculino" : "Feminino"}} </td>
            </tr>
            <tr>
                <th>Deficiencias Fisica</th>
                <td>{{ $client->physical_disability }} </td>
            </tr>
            <tr>
                <th>Inadimplente</th>
                <td>{{ $client->defaulter ? "Sim" : "Não" }}</td>
            </tr>
        </tbody>
    </table>
@endsection
    
</body>
</html>