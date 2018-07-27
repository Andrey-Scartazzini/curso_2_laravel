
<html>
    <head>
        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        <title>Controle de estoque</title>
    </head>
    <body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{action('HomeController@index')}}">
                        Estoque Laravel
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-link" href="{{action('ProdutoController@lista')}}">Listage dos produtos</a></li>
                    <li><a class="nav-link" href="{{action('CategoriaController@lista')}}">Listage das categorias</a></li>
                    <li><a class="nav-link" href="{{action('ProdutoController@novo')}}">Novo produto</a></li>
                    <li><a class="nav-link" href="{{action('CategoriaController@novo')}}">Novo categoria</a></li>
                </ul>
            </div>
        </nav>
        @yield('conteudo')
        <footer class="footer">
            <p>© Livro de Laravel da Casa do Código.</p>
        </footer>
    </div>
    </body>
</html>