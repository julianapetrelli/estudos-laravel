<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'admin',
    'namespace' => '\App\Http\Controllers\Admin'
], function(){
    Route::resource('clients', 'ClientsController');
    # localhost:8000/admin/clients
});