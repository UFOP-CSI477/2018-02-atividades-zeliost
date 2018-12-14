@extends('layout')

@section('conteudo')

  <h1>Cidade: {{$cidade->nome}}</h1>

  <p>Código: {{ $cidade->id}}</p>
  <p>Nome: {{ $cidade->nome}}</p>

  <!--<a href="/estados">Voltar</a> pega a rota relativa-->

  <a href="{{ route('cidades.index') }}">Voltar</a>
  <a href="{{ route('cidades.edit', $cidades->id) }}">Editar</a>

  <form method="post" action="{{route('cidades.destroy', $cidades->id)}}"
    onsubmit="return confirm('Confirma esclusão da Cidade: {{$cidades->nome}} ?')">
    @csrf
    @method('DELETE')
    <input type="submit" value="Excluir">


  </form>


@endsection
