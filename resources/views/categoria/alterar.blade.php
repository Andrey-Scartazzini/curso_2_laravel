@extends('templates.principal')
@section('conteudo')
<h1>Novo categoria</h1>
<form action="/categorias/atualizar" method="post">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <input type="hidden" name="id" value="{{$c->id}}">
    <div class="form-group">
        <label>Nome</label>
        <input name="nome" value="{{$c->nome}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
@stop