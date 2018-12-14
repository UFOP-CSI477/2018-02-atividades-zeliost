<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('titulo', 'Petshop Ltda')</title> <!--se titulo for vazio coloca Sistema academico-->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>


  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('produtos.index') }}">PetShop Ltda</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('produtos.index') }}">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Área geral <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li> <a href="{{ route('produtos.index') }}">Relatorio</a></li>
          <li>Teste 2</li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Área do cliente <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li>Teste 1</li>
          <li>Teste 2</li>

          <li><a href="/registros">Relatorio de manutenção</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Área adminstrativa <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li> <a href="{{ route('produtos.create') }}">Adicionar produto</a></li>
          <li> <a href="{{ route('produtos.index') }}">Relatorio</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
  @yield('conteudo')

</body>
</html>
