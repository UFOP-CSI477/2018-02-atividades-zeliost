@extends('layout')

@section('conteudo')

  <h1>Inserir Cidades</h1>

  <form method="post" action="{{route('cidades.store')}}">

    @csrf

    <p>Nome: <input type="text" name="nome"></p>
    <P>Estado:</P>

    <select name="estado_id">
      @foreach($estados as $e)
        <option value="{{$e->id}}"> {{ $e->nome }} </option>

      @endforeach
    </select>

    <input type="submit" name="btnSalvar" value="Incluir">


  </form>

@endsection
