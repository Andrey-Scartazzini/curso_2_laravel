@extends('templates.principal')
@section('conteudo')
    <h1>Novo categoria</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/categorias/adiciona" method="post">
        <input type="hidden"
               name="_token" value="{{{ csrf_token() }}}" />
        <div class="form-group">
            <label>Nome</label>
            <input name="nome"
                   class="form-control" value="{{ old('nome') }}" />
        </div>
        <button type="submit" class="btn
btn-primary btn-block">Adicionar</button>
    </form>
@stop
