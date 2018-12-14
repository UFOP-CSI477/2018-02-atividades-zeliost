@extends('layout')

@section('conteudo')

  <h1>Estados</h1>

  @foreach($estados as $e)

  <div class="container">

    <p></p>
    <p> <a href="{{ route('estados.show', $e->id) }}"> {{ $e->nome }} - {{ $e->sigla }}</a></p> <!--  /estados/{{$e->id}}  /estados/id... eh a view-->

  @endforeach

@endsection
