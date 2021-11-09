<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function listar() {

        #visualizando todos os clientes
        $clients = Client::all();
        return view('cliente.list', compact('clients'));
    }

    public function formCadastrar(){

        # Visualizar a tela de cadastro

        return view('cliente.create');

    }

    public function cadastrar(Request $request ){
        # Pegando as informações via request do formulário de cadastro

        # Instanciando a classe cliente, do model
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->save();

        # Redirecionando para a página home
        return redirect()->to('/clientes');
    }

    public function formEditar($id){

        # Recolhendo o id
        $client = Client::find($id);

        #Verificando o ID
        if(!$client) {
            abort(404);
        }

        # Visualizar a tela de Edição e retornar o id
        return view('cliente.edit', compact('client'));

    }

    public function editar(Request $request, $id){
        # Pegando as informações via request do formulário de cadastro


        # Recolhendo o id
        $client = Client::find($id);

        # Verificando o ID
        if(!$client) {
            abort(404);
        }

        # Alterando o valor 
        $client->name = $request->name;
        $client->email = $request->email;
        $client->save();

        # Redirecionando para a página home
        return redirect()->to('/clientes');
    }

    public function excluir(Request $request, $id) {

         # Recolhendo o id
         $client = Client::find($id);

        # Verificando o ID
        if(!$client) {
            abort(404);
        }

        $client->delete();

        return redirect()->to('/clientes');

    }

   /*
        public function cadastrar() {
        $nome = 'Juliana';
        $sobrenome = 'Tangerino';
    
        return view('cliente.formulario', compact('nome', 'sobrenome'));     
    }
   */
}
