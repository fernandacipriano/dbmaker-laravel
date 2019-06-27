<?php

namespace App\Http\Controllers;

use App\WesAutenticacao;
use Illuminate\Http\Request;


class WesAutenticacaoController extends Controller
{


    public function index()
    {
        $logins = WesAutenticacao::orderBy('dep_descricao', 'asc')->paginate(100);
        // $logins = WesAutenticacao::orderBy('nome', 'asc')->paginate(100);


        return view('index',['logins' => $logins]);
    }
}
