@extends('welcome')

@section('conteudo')
<head>
  <link rel="stylesheet" type="text/css" href="css/welcome.css">
</head>

  <body style="background-color: #e6ffe6;">
    <h1 style="text-align:center; font-size: 50px;">Empresa</h1>

    <div class="card" width="300px;" style="text-align:center; background-color: #e6ffe6; display: contents; padding: 40px; margin-right: 230px;">
        <img class="card-img-top" alt="Card image"  style="margin-top: 20px; margin-left:535px;" width="200px;" src="../images/<?php echo $empresas->imagem ?>" alt="<?php echo $empresas->imagem?>">
        <div class="card-body">

          <h4 class="card-title" style="color: #F3213F; font-size: 30px;">{{$empresas->nome}}</h4>
          <p class="card-text" style="color: #132131; font-size: 20px;">{{$empresas->telefone}}</p>
          <p class="card-text" style="color: #132131; font-size: 20px;">{{$empresas->email}}</p>
          <p class="card-text" style="color: #000; font-size: 20px;">Endereço: {{$empresas->endereco}}</p>

        </div>
      </div>
  </body>

  </form>

@endsection
