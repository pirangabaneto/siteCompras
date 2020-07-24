<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

/*-------------------------------- C L I E N T E ----------------------------------------------*/

//home de cliente
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');;

//definindo pagina inicial de cliente
Route::get('/cliente', 'ClienteController@index');

//abrindo tela de cadastro de cliente
Route::get('/cliente/cadastro', 'ClienteController@createCliente');

//criando uma requisicao de cadastro de cliente
Route::post('/cliente/cadastro', 'ClienteController@storeCliente')->name('cadastro');

/*--------------------------------- P R O D U T O ---------------------------------------------*/

//abrindo tela de cadastro de produto
Route::get('/produto/cadastro', 'ProdutoController@index');

//criando uma requisição de cadastro de produto
Route::post('/produto/cadastro','ProdutoController@createProduto')->name('cadastrarproduto');

//listnado todos os produtos
Route::get('/produto/listar', 'ProdutoController@listarProduto');

//editando o produto
Route::get('/produto/editar/{id}','ProdutoController@editar');

//atualizando o produto
Route::post('/produto/atualizar','ProdutoController@atualizar')->name('atualizarproduto');

//removendo um produto 
Route::get('/produto/remover/{id}','ProdutoController@remover');

/*--------------------------------- A D M I N ---------------------------------------------*/

//abrindo a tela de criar admin
Route::get('/admin/cadastro','AdminController@index');

//criando um admin
Route::post('/admin/cadastro','AdminController@create')->name('criaradmin');

//ler os admins do sistema
Route::get('/admin/listar','AdminController@listar');

//editar um admin
Route::get('/admin/editar/{id}','AdminController@editar');

//atualizar um admin
Route::post('/admin/atualizar','AdminController@atualizar')->name('atualizaradmin');

//deletar um admin
Route::get('/admin/remover/{id}','AdminController@remover');

?>