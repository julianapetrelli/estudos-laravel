<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Criar novo cliente</h1>

    <form action="/clientes/cadastro" method="post">

        {{-- Realizando o envio do token  --}}
        {!! csrf_field() !!}

        <label for="name">Nome:</label>
        <input name="name" type="text" placeholder="nome" id="name">
        <br>
        <label for="email">Email:</label>
        <input name="email" type="text" placeholder="email" id="email">
        <button type="submit">Enviar</button>

    </form>
</body>
</html>