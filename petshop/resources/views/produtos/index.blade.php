@extends('welcome')
@section('conteudo')
<head>
  <link rel="stylesheet" type="text/css" href="css/welcome.css">
</head>

<body style="background-color: #e6ffe6;">
  <h1 style="text-align:center; font-size: 50px;">Produtos</h1>

  @foreach($produtos as $e)

  <div class="card" width="500px;" style="text-align:center; margin-left: 45px; background-color: #e6ffe6; display: inline-block; padding: 30px;">
      <img class="card-img-top" alt="Card image"  style="margin-top: 20px;" width="300px;" src="../images/<?php echo $e->imagem ?>" alt="<?php echo $e->imagem?>">
      <div class="card-body">

        <h4 class="card-title" style="color: #F3213F; font-size: 30px;">{{$e->nome}}</h4>
        <p class="card-text" style="color: #132131; font-size: 20px;">R$ {{$e->preco}}</p>
        <p> <button class="btn btn-success" type="submit">Comprar</button></p>

      </div>
    </div>

</body>
  @endforeach
@endsection
