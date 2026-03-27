<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /*public function salvarDados(Request $req)
    {
        //dd($req);
        return "Nessa parte que chama o banco e salva os dados".$req['nome_aluno'];
    }*/

    public function index() {
        $contatos = [ 
        [ "nome" => "maria", "cel" => "199993342"],
        [ "nome" => "joao",  "cel" => "992837434"] ];

        return view("contatos.index",
        compact('contatos'));
    }
    public function salvarDados(Request $req)
    {
         $contatos = 
         [ 
            [ "nome" => $req['nome'],"cel" => $req['cel'] ]
         ];
        return view("contatos.index",
        compact('contatos'));
    }


}