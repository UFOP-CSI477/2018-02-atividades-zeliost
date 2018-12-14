@extends('welcome')

@section('conteudo')

<form method="post" action="/empresas" enctype="multipart/form-data">

  @csrf
<div class="container" style="width: 500px;">
  <h1>Acidionar uma empresa</h1>
  <div class="form-group">
    <label for="text">Nome da empresa</label>
    <input class="form-control" type="text" name="nome"></p>
  </div>

  <div class="form-group">
    <label for="file">Imagem</label>
    <input class="form-control" type="file" name="imagem"></p>
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input class="form-control" type="email" name="email"></p>
  </div>
  <div class="form-group">
    <label for="text">Telefone</label>
    <input class="form-control" type="text" name="telefone" maxlength="16"
    placeholder="Utilize o formato (099) 1111-2222"></p>
  </div>

  <div class="form-group">
    <label for="text">Endereço</label>
    <input class="form-control" type="text" name="endereco"></p>
  </div>

  <div class="form-group">
    <input type="submit" name="btnSalvar" value="Adicionar" class="btn btn-success">
    <a href="{{ route('empresas.index') }}" class="btn btn-primary">Voltar</a>
  </div>
  <div class="container">

</form>

@endsection
