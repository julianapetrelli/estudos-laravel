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
        {{ method_field('PUT') }}

        @include('admin.clients._form')

    </form>

@endsection
