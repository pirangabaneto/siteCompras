<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;

class AdminController extends Controller
{

	public function index(){
    	return view('autenticacao.criaradmin');
    }

    public function create(Request $request){
    	$request->validate([
    	'nome' => ['required', 'max:255'],
    	'endereco' => ['required'],
    	'telefone' => ['required'],
	]);
    	//criando admin
    	$admin = new Admin();
    	$admin->nome = $request->input('nome');
    	$admin->endereco = $request->input('endereco');
    	$admin->telefone = $request->input('telefone');
    	$admin->status = true;
    	$admin->save();
    	return redirect('/admin/listar');
    }

    public function listar(){
    	$admins = \App\Admin::all();
    	return view('autenticacao.listaradmins',['admins' => $admins]);
    }

    public function atualizar(Request $request){
    	$admin = \App\Admin::find($request->id);
    	$admin->nome = $request->input('nome');
    	$admin->update();
    	return redirect('/admin/listar');
    }

    public function editar(Request $request){
    	$admin = \App\Admin::find($request->id);
    	return view('autenticacao.editaradmin',['admin'=>$admin]);
    }

    public function remover(Request $request){
    	$admin = \App\Admin::find($request->id);
    	$admin->delete();
    	return redirect('/admin/listar');
    }
}
