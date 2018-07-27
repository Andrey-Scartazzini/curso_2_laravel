<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Categoria;
use estoque\Http\Requests\CategoriasRequest;
use Request;

class CategoriaController extends Controller{
    public function lista(){
        $categoria = Categoria::all();
        return view('categoria.listagem')
            ->with('categorias', $categoria);
    }
    public function novo(){
        return view('categoria.formulario');
    }
    public function adiciona(CategoriasRequest $request){
        Categoria::create($request->all());
        return redirect()
            ->action('CategoriaController@lista')
            ->withInput(Request::only('nome'));
}
    public function remove($id){
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()
            ->action('CategoriaController@lista')
            ->withErrors(array('Deletado'));
    }
    public function listaJson(){
        $categorias = Categoria::all();
        return response()
            ->json($categorias);
    }
    public function alterar($id){
        $categoria = Categoria::find($id);
        if(empty($categoria)) {
            return "Esse categoria não existe";
        }
        return view('categoria.alterar')
            ->with('c', $categoria);
    }
    public function atualizar(){
        $categoriaad = Request::all();
        $categoria = Categoria::find($categoriaad['id']);
        $categoria->fill($categoriaad);
        $categoria->save();
        return redirect()
            ->action('CategoriaController@lista')
            ->withInput(Request::only('id'));
    }
}