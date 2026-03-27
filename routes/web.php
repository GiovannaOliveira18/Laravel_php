<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form_contato', function () {
    return View("view_contatos");
});

Route::post('/salvar', ['uses' => 'App\Http\Controllers\ContatoController@salvarDados']
    /*dd($_POST); // mostra oq foi digitado no formulario
    return "os dados foram salvos";*/
);

Route::get('/cliente/{id}', function ($id = null){
    //necessário copiar o código no classroom
});
Route::get('/mostrando_nome_cel', ['uses' => 'App\Http\Controllers\ContatoController@index'] );