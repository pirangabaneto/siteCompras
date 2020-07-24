<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;

class ProdutoController extends Controller
{
    public function index(){
    	return view('autenticacao.produto');
    }

    public function createProduto(Request $request){
    	$request->validate([
    	'nome' => ['required', 'max:255'],
    	'marca' => ['required'],
    	'lote' => ['required'],
	]);
	    //criando produto
	    $produto = new Produto();
	    $produto->nome = $request->input('nome');
	    $produto->marca = $request->input('marca');
	    $produto->lote = $request->input('lote');
	    $produto->save();
	    return redirect('/produto/listar')->with('success', 'Cadastrado com sucesso!');
	}

	public function listarProduto(){
		$produtos = \App\Produto::all();
		return view('autenticacao.listarprodutos',['produtos' => $produtos]);
	}

	public function editar(Request $request){
		$produto = \App\Produto::find($request->id);
		return view('autenticacao.editarproduto',['produto' => $produto]);
	}

	public function atualizar(Request $request){
		$produto = \App\Produto::find($request->id);
		$produto->nome = $request->nome;
		$produto->update();
		return redirect('/produto/listar');
	}

	public function remover(Request $request){
		$produto = \App\Produto::find($request->id);
		$produto->delete();
		return redirect('/produto/listar');
	}

}
?>