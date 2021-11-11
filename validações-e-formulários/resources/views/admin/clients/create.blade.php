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
     {{ csrf_field() }}

        <div class="d-grid gap-4">
            <div>
                <label for="name" class="form-label">*Nome:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome completo">
            </div>
        
            <div>
                <label for="document_number" class="form-label">*Documento:</label>
                <input type="text" class="form-control" id="document_number" name="document_number" placeholder="Digite seu documento">
            </div>  
            <div>
                <label for="email" class="form-label">*E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
            </div>  
            <div>
                <label for="phone" class="form-label">*Telefone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Digite seu telefone">
            </div>  
            <div>
                <label for="marital_status" class="form-label">*Estado civil:</label>
                <select id="marital_status" class="form-select" name="marital_status">
                    <option selected>Selecione o estado civil</option>
                    <option value="1">Solteiro(a)</option>
                    <option value="2">Casado(a)</option>
                    <option value="3">Viuvo(a)</option>
                </select>
            </div> 

            <div>
                <label for="date_birth" class="date_birth">*Data de nascimento:</label>
                <input type="date" class="form-control" id="date_birth" name="date_birth">
            </div> 

            <div>
                <input type="radio" id="f" name="sex" value="f">
                <label for="f">Feminino</label><br>

                <input type="radio" id="m" name="sex" value="m">
                <label for="m">Masculino</label><br>
            </div>
        
            <div>
                <label for="physical_disability" class="form-label">Deficiência fisica:</label>
                <input type="text" class="form-control" id="physical_disability" name="physical_disability">
            </div> 

            <div>
                <input type="checkbox" id="defaulter" name="defaulter">
                <label for="defaulter">Inadimplente?</label><br>
            </div> 
            
            <div>
                <button type="submit" class="btn btn-secondary">Enviar</button>
            </div>
        </div>
    </form>

    @endsection
    
</body>
</html>