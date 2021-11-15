<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar novo usuário</title>
</head>
<body class="bg-light.bg-gradient">

    @extends('Layouts.layout')
    @section('content')

    <h3>Cadastro - Novo cliente</h3>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li class="ms-4"> {{ $error }} </li> 
             @endforeach    
        </ul>
    @endif

    <form action="/admin/clients" method="post">
        @include('admin.clients._form')
    </form>

    @endsection
    
</body>
</html>