<?php

namespace estoque\Http\Controllers;

use estoque\Categoria;
use Illuminate\Support\Facades\DB;
use estoque\Produto;
use estoque\Http\Requests\ProdutosRequest;
use Request;

class ProdutoController extends Controller{
    public function lista()
    {
        $produtos = Produto::all();

        foreach ($produtos as $produto) {
            $produto->categoria = Categoria::find($produto->categoria_id);
        }
        return view('produto.listagem')
            ->with('produtos', $produtos);
    }
    public function mostra($id){
        $produtos = Produto::find($id);
        $produtos->categoria = Categoria::find($produtos->categoria_id);
        if(empty($produtos)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')
            ->with('p', $produtos);
    }
    public function novo(){
        $categoria = Categoria::all();
        return view('produto.formulario')
            ->with('categorias', $categoria);
    }
    public function adiciona(ProdutosRequest $request){
        Produto::create($request->all());
        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
}
    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()
            ->action('ProdutoController@lista')
            ->withErrors(array('Deletado'));
    }
    public function listaJson(){
        $produtos = Produto::all();
        return response()
            ->json($produtos);
    }
    public function alterar($id){
        $produto = Produto::find($id);
        $produto->categoria = Categoria::find($produto->categoria_id);
        $categorias = Categoria::all();
        if(empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.alterar')
            ->with('p', $produto)
            ->with('categorias', $categorias);
    }
    public function atualizar(){
        $produtoad = Request::all();
        $produto = Produto::find($produtoad['id']);
        $produto->fill($produtoad);
        $produto->save();
        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('id'));
    }
}