<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>

    @extends('Layouts.layout')
    @section('content')
        
        <h3>Listagem de clientes</h3>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-dark" href="clients/create">Novo cliente</a>
        </div>
        
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CNPJ/CPF</th>
                        <th>Data Nasc</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Sexo</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->document_number }}</td>
                            <td>{{ $client->date_birth }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>{{ $client->sex }}</td>
                            <td>
                                <a href="{{ route('clients.edit', ['client' => $client->id]) }}">Editar</a>
                                <a href="{{ route('clients.show', ['client' => $client->id]) }}">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @endsection

</body>
</html>