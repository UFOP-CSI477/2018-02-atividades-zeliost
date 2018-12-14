@extends('layout')

@section('titulo', 'Lista  de pessoas da turma')

@section('conteudo')
  <h1>Lista da Turma</h1>

  @foreach($alunos as $a) <!--usando notação do blade-->
    <li>{{$a}}</li>
  @endforeach

@endsection
