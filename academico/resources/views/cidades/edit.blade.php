@extends('layout')

@section('conteudo')

  <h1>Editar Cidades</h1>

  <form method="post" action="{{ route('cidades.update', $cidade->id) }}">

    @csrf
    @method('PATCH')


    <p>Nome: <input type="text" name="nome" value="{{ $cidade->nome }}"></p>

    <p>Estado:</p>

        <select name="estado_id">
          @foreach($estados as $e)
          <option value="{{$e->id}}"
            @if( $e->id == $cidade->estado_id)
                selected
            @endif

            >{{ $e->nome }}</option>

            @endforeach
          </select>

    <input type="submit" name="btnSalvar" value="Salvar (no githut ta editar)">


  </form>

@endsection
