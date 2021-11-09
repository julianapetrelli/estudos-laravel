<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listar clientes</h1>

    <div>
        <a href="/clientes/cadastro">Novo cliente</a>
    </div>

    <div>
        <table>
            <thead>
                <tr>ID</tr>
                <tr>Nome</tr>
                <tr>E-mail</tr>
                <tr>Ações</tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->email}}</td>
                    <td><a href="{{ "/clientes/{$client->id}/editar-cadastro" }}">Editar</a></td>
                    <td><a href="{{ "/clientes/{$client->id}/excluir" }}" 
                        onclick="event.preventDefault();if(confirm('Deseja excluir este registro?')){window.location.href='{{"/admin/client/{$client->id}/excluir"}}'}">Excluir</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>