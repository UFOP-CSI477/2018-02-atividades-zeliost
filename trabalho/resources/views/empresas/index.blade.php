@extends('welcome')

@section('conteudo')
<head>
  <link rel="stylesheet" type="text/css" href="css/welcome.css">
</head>

  <body style="background-color: #e6ffe6;">
    <h1 style="text-align:center; font-size: 50px;">Empresa</h1>

    @foreach($empresas as $e)

    <div class="card" width="300px;" style="text-align:center; background-color: #e6ffe6; display: inline-block; padding: 40px; margin-right: 30px;">
        <img class="card-img-top" alt="Card image"  style="margin-top: 20px;" width="200px;" src="../images/<?php echo $e->imagem ?>" alt="<?php echo $e->imagem?>">
        <div class="card-body">

          <h4 class="card-title" style="color: #F3213F; font-size: 30px;">{{$e->nome}}</h4>
          <p class="card-text" style="color: #132131; font-size: 20px;">{{$e->telefone}}</p>
          <p class="card-text" style="color: #132131; font-size: 20px;">{{$e->email}}</p>
          <p class="card-text" style="color: #000; font-size: 20px;">Endereço: {{$e->endereco}}</p>

        </div>
      </div>
  </body>
  @endforeach
@endsection
