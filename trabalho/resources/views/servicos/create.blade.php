@extends('welcome')

@section('conteudo')

  <form method="post" action="/servicos" enctype="multipart/form-data">

    @csrf
    <div class="container" style="width: 500px;">
      <h1>Acidionar um serviço</h1>


      <div class="form-group">
        <label for="text">User_id</label>
        <input class="form-control" type="unsignedInteger" name="user_id"></p>
      </div>
      <div class="form-group">
        <label for="text">Empresa_id</label>

        <input class="form-control" type="unsignedInteger" name="empresa_id"></p>
      </div>
      <div class="form-group">
        <label for="text">Tipo de serviço</label>
        <input class="form-control" type="text" name="servico"></p>
      </div>

      <div class="form-group">
        <label for="file">Imagem de serviço</label>
        <input class="form-control" type="file" name="imgservico"></p>
      </div>
      <div class="form-group">
        <label for="email">E-mail para contato</label>
        <input class="form-control" type="email" name="email"></p>
      </div>
      <div class="form-group">
        <label for="text">Telefone para contato</label>
        <input class="form-control" type="text" name="telefone"
        maxlength="16" placeholder="Utilize o formato (099) 1111-2222"></p>
      </div>

      <div class="form-group">
        <label for="text">Distancia.... ver como fazer aqui</label>
        <input class="form-control" type="text" name="distancia"></p>
      </div>

      <div class="form-group">
        <input type="submit" name="btnSalvar" value="Adicionar" class="btn btn-success">
        <a href="{{ route('empresas.index') }}" class="btn btn-primary">Voltar</a>
      </div>
    </div>

  </form>

@endsection
