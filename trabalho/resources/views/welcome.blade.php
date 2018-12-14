<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('titulo', 'Prestação de Serviço')</title> <!--se titulo for vazio coloca Sistema academico-->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/welcome.css">

</head>

<body>
  <nav class="navbar navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{url('/servicos')}}">Serviços Ltda</a>
      </div>
      <ul class="navbar-nav navbar-right">
        <a href="{{ route('servicos.create') }}">+ Serviço</a>
        <a href="{{ route('empresas.create') }}">+ Empresa</a>
        <a href="/register">Cadastrar</a>
        <a <div id="registros" class="pull-right">
          <form class="form-group" method="get"
          action="/search">
          <input type="text" name="pesquisar"
          class="form-control input-sm pull-left" style="width: 200px;"
          placeholder="Pesquisar..." required>
          <button class="btn btn-default btn-sm pull-righ" style="margin-top: -8px;"
          id="color">
          <span class="glyphicon glyphicon-search"></span>
        </button>
      </form>
    </div></a>

  </ul>
</div>
</nav>

@yield('conteudo')

</body>
