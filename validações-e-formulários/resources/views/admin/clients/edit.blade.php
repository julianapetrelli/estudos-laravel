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

    <form action="{{ route('clients.update', ['client' => $client->id] ) }}" method="post">
     {{ csrf_field() }}
     {{ method_field('PUT') }}

        <div class="d-grid gap-4">
            <div>
                <label for="name" class="form-label">*Nome:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome completo" value="{{ $client->name }}">
            </div>
        
            <div>
                <label for="document_number" class="form-label">*Documento:</label>
                <input type="text" class="form-control" id="document_number" name="document_number" placeholder="Digite seu documento" value="{{ $client->document_number }}">
            </div>  
            <div>
                <label for="email" class="form-label">*E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" value="{{ $client->email }}">
            </div>  
            <div>
                <label for="phone" class="form-label">*Telefone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Digite seu telefone" value="{{ $client->phone }}">
            </div>  
            <div>
                <label for="marital_status" class="form-label">*Estado civil:</label>
                <select id="marital_status" class="form-select" name="marital_status" value="{{ $client->marital_status }}">
                    <option selected>Selecione o estado civil</option>
                    <option value="1" {{ $client->marital_status == '1' ? 'selected="selected"': '' }}>Solteiro(a)</option>
                    <option value="2" {{ $client->marital_status == '2' ? 'selected="selected"': '' }}>Casado(a)</option>
                    <option value="3" {{ $client->marital_status == '3' ? 'selected="selected"': '' }}>Viuvo(a)</option>
                </select>
            </div> 

            <div>
                <label for="date_birth" class="date_birth">*Data de nascimento:</label>
                <input type="date" class="form-control" id="date_birth" name="date_birth" value="{{ $client->date_birth }}">
            </div> 

            <div>
                <input type="radio" id="f" name="sex" value="f" {{ $client->sex == 'f' ? 'checked="checked"' : '' }}>
                <label for="f">Feminino</label><br>

                <input type="radio" id="m" name="sex" value="m" {{ $client->sex == 'm' ? 'checked="checked"': '' }}>
                <label for="m">Masculino</label><br>
            </div>
        
            <div>
                <label for="physical_disability" class="form-label">Deficiência fisica:</label>
                <input type="text" class="form-control" id="physical_disability" name="physical_disability" value="{{ $client->physical_disability }}">
            </div> 

            <div>
                <input type="checkbox" id="defaulter" name="defaulter" {{ $client->defaulter ? 'checked="checked"' : '' }}>
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