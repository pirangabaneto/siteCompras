<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
	//definindo funcao da pagina inicial de cliente
    public function index(){
    	return view('autenticacao.login');
    }
}
