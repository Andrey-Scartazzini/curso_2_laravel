@extends('templates.principal')
@section('conteudo')
            @if(empty($categorias))
                <div class="alert alert-danger">
                    Você nâo tem nenhum categoria cadastrado.
                </div>
            @else
                <h1>Listagem de categorias</h1>
                <table class="table table-bordered">
                    <tr>
                        <td>Nome</td>
                    </tr>
                    @foreach ($categorias as $c)
                        <tr>
                            <td>{{$c->nome}} </td>
                            <td><a href="{{action('CategoriaController@remove', $c->id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>
                            <td><a href="{{action('CategoriaController@alterar', $c->id)}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                        </tr>
                    @endforeach
                </table>
            @endif
            @if(old('nome'))
            <div class="alert alert-success">
                <strong>Sucesso!</strong> O categoria {{old('nome')}} foi adicionado.
            </div>
            @endif
            @if(old('id'))
            <div class="alert alert-success">
                <strong>Sucesso!</strong> O categoria {{old('id')}} foi alterado.
            </div>
            @endif
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    @if($error == "Deletado")
                        <div class="alert alert-danger">
                            <strong>O categoria foi removido com sucesso! :D</strong>.
                        </div>
                    @endif
                @endforeach
            @endif
@stop