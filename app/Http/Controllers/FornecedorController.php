<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecdor 1', 
                'status' => 'N',
                'cnpj' => '00.000.000/000-00', 
                'ddd'  => '11',
                'Telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecdor 2', 
                'status' => 'S',
                'cnpj' => null, 
                'ddd'  => '85',
                'Telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecdor 3', 
                'status' => 'S',
                'cnpj' => null, 
                'ddd'  => '32',
                'Telefone' => '0000-0000'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
