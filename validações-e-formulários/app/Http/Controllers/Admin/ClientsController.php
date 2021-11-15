<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
  
    public function index()
    {
       $clients = \App\Models\Client::all(); 

       return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create', ['client' => new Client()]);
    }

  
    public function store(Request $request)
    {

        $this->_validade($request);

        # Definindo o nosso campo defaulter com o valor padrão 0
        $data = $request->all();
        $data['defaulter'] = $request->has('defaulter'); // Retorna um valor boolen para a verificação do dado 

        # Pegando todas as informações que vieram da requisição || Create: Pegando somente as informações inseridas no array informado no controller Client
        Client::create($data);

        #voltando pra a home
        return redirect()->route('clients.index');
    }

    public function show(Client $client)
    {
        return view('admin.clients.show', compact('client'));
    }


    public function edit(Client $client) // Route Model binding - Implicito
    {
        # Client $cliente
        #Recebendo o ID, buscando no banco e validando automaticamente

        # findfaill verifica a existencia do id, caso não tenha, será retornada uma página 404
        # Recolhendo o id no cliente do nosso model
    
        # $client = Client::FindOrFail($id);

        return view('admin.clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        
        $client = Client::FindOrFail($id);


        $this->_validade($request);

        $data = $request->all();
        $data['defaulter'] = $request->has('defaulter'); 

        # Pegando somente os dados informados no nosso array fillable na classe Client
        $client->fill($data);

        # Pegando nossos dados recolhidos e inserindo no banco
        $client->save();

        #voltando pra a home
        return redirect()->route('clients.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }

    protected function _validade (Request $request) {

            
        # Cada item do array será uma string, dividida por vírgulas
        $marital_status = implode(',',array_keys(Client::MARITAL_STATUS));

        $this->validate($request, [
            'name' => 'required|max:255',
            'document_number' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date_birth' => 'required|date',
            'sex' => 'required|in:m,f',
            'marital_status' => "required|in:$marital_status",
            'physical_disability' => 'max:255'
        ]);

    }
}
