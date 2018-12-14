<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Sistema Acadêmico')</title> <!--se titulo for vazio coloca Sistema academico-->
  </head>
  <body>
    <!--Flash: mensagem //-->
    @if( Session::has('mensagem'))
      <p><strong>{{ Session::get('mensagem') }}</strong></p>
    @endif

    <ul><!--Lista nao numerada-->
      <li><a href="/">Principal</a></li>
      <li><a href="/lista">Lista</a></li>
      <li><a href="/info">Informações</a></li>
      <li><a href="/contato">Contato</a></li>
    </ul>

    @yield('conteudo')

  </body>
</html>
