<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {

        $produtos = [
            'Limão' => '50 R$',
            'Maçã' => '30 R$',
            'Banana' => '50 R$'
        ];

        echo 'Fruta &nbsp Preço</br></br>';

        foreach ($produtos as $k => $v){
            echo "$k\t$v</br>";
        }
        return;
    }

    public function show($id)
    {
        return "Exibindo detalhes do produto de id : {$id}";
    }
}
