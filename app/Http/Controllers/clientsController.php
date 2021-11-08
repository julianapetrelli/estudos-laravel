<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientsController extends Controller
{
    public function cadastrar() {
        $nome = 'Juliana';
        $sobrenome = 'Tangerino';
    
        return view('cliente.formulario', compact('nome', 'sobrenome'));     
    }

    public function escluir() {

    }

    public function editar() {

    }
}
