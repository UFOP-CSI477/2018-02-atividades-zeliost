@extends('welcome')

@section('conteudo')
<head>
  <link rel="stylesheet" type="text/css" href="css/welcome.css">
</head>

<body style="background-color: #e6ffe6;">
  <h1 style="text-align:center; font-size: 50px;">Serviços</h1>

  @foreach($servicos as $e)

  <div class="card" width="500px;" style="text-align:center; margin-left: 45px; background-color: #e6ffe6; display: inline-block; padding: 30px;">
      <img class="card-img-top" alt="Card image"  style="margin-top: 20px;" width="300px;" src="../images/<?php echo $e->imgservico ?>" alt="<?php echo $e->imgservico?>">
      <div class="card-body">

        <h4 class="card-title" style="color: #F3213F; font-size: 30px;">{{$e->servico}}</h4>
        <p class="card-text" style="color: #132131; font-size: 20px;">{{$e->telefone}}</p>
        <p class="card-text" style="color: #132131; font-size: 20px;">{{$e->email}}</p>
        <p class="card-text" style="color: #000; font-size: 20px;">Distancia de {{$e->distancia}} Km</p>

        <a class="btn btn-success" href="/empresas/{{ $e->empresa['id']}}" role="button">Empresa Responsável</a>

      </div>
    </div>

</body>
  @endforeach
@endsection
