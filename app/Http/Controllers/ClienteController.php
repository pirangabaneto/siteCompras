<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Cliente;

class ClienteController extends Controller
{
	//definindo funcao da pagina inicial de cliente
    public function index(){
    	
    	return view('autenticacao.login');
    }

    //redireciona para a view de cadastro de cliente
    public function createCliente(){
    	return view('autenticacao.cadastro');
    }

    //definindo funcao que regista um novo cliente
    public function storeCliente(Request $request){

    //adicionando regras de validacao aos campos 
    $request->validate([
    	'name' => ['required', 'max:255'],
    	'email' => ['required'],
    	'endereco' => ['required'],
    	'telefone' => ['required'],
    	'cpf' => ['required'],
    	'password' => ['required'],
	]);

    //criando usuario
    $usuario = new User();
    $usuario->name = $request->input('name');
    $usuario->email = $request->input('email');
    $usuario->endereco = $request->input('endereco');
    $usuario->telefone = $request->input('telefone');
    $usuario->status = true;
    $usuario->tipo = 'cliente';
    $usuario->password = Hash::make($request->input('password'));
    $usuario->save();


    //criando cliente
    $cliente = new Cliente();
    $cliente->cpf = $request->input('cpf');
    $cliente->user_id = $usuario->id;
    $cliente->save();
    return redirect('/')->with('success', 'Cadastrado com sucesso!');
    }

}
