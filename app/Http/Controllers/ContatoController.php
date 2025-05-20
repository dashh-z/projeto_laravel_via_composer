<?php

namespace App\Http\Controllers;

use App\Models\SiteContato as ModelsSiteContato;
use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        /*  
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        $contato->save();
        */
        
        //$contato = new SiteContato();
        //$contato->create($request->all());
        //$contato->save();

        //print_r($contato->getAttributes());
    
        return view('site.contato', ['titulo' => 'Contato (teste)']);

    }

    public function salvar(Request $request) {
        
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);
        //SiteContato::create($request->all()):
    }
}
