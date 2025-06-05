<?php

namespace App\Http\Controllers;

use App\Models\SiteContato as ModelsSiteContato;
use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

       $motivo_contatos = [
           '1' => 'Dúvida',
           '2' => 'Elogio',
           '3' => 'Reclamação'
       ];
        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);

    }

    public function salvar(Request $request) {
        
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required'
        ]);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
