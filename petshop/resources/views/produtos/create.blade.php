@extends('welcome')

@section('conteudo')

  <form method="post" action="/produtos" enctype="multipart/form-data">

    @csrf
    <div class="container" style="width: 500px;">
      <h1>Acidionar um produto</h1>

      <div class="form-group">
        <label for="text">Nome do produto</label>
        <input class="form-control" type="text" name="nome"></p>
      </div>
      <div class="form-group">
        <label for="text">Preço do produto</label>
        <input class="form-control" type="text" name="preco"></p>
      </div>
      <div class="form-group">
        <label for="file">Imagem do produto</label>
        <input class="form-control" type="file" name="imagem"></p>
      </div>

      <div class="form-group">
        <input type="submit" name="btnSalvar" value="Incluir" class="btn btn-success">
        <a href="{{ route('produtos.index') }}" class="btn btn-primary">Voltar</a>
      </div>
    </div>

  </form>

@endsection
