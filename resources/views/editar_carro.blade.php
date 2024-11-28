<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carros</title>
    <link rel="stylesheet" href="/css/style3.css">
</head>
<body>
<div class="header">
  <header>
    <a href="/cadastro_carro">Cadastro Carro</a>
    <a href="/cars">Lista de Carro</a>
    <a href="/pagina_inicial">Página Inicial</a>
  </header>
  </div>
  
  <div class="form">
        <h1>Editar Carros</h1>
<form id="carform" action="/editar_carro/{{$car->id}}" method="post">
        @csrf
        {{ method_field("PATCH") }}
        <label for="name">Nome</label>
        <input type="text" name="name" value="{{$car->name}}">

        <label for="ano">Ano</label>
        <input type="text" name="ano" value="{{$car->ano}}">

        <label for="chassi">Chassi</label>
        <input type="text" name="chassi" value="{{$car->chassi}}">

        <label for="placa">Placa</label>
        <input type="text" name="placa" value="{{$car->placa}}">

        <input id="btn" type="submit" value="Salvar">
    </form>
    </div>
</body>
</html>