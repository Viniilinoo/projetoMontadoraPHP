<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Carro</title>
    <link rel="stylesheet" href="/css/style4.css">
</head>
<body>
<div class="header">
  <header>
    <a href="/cadastro_carro">Cadastro Carro</a>
    <a href="/">Página Inicial</a>
  </header>
</div>

 <div class="form">
    <h1 class="p">Cadastro de Carros</h1>

    <form id="carform" action="/criar_carro" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="ano">Ano</label>
        <input type="text" name="ano">

        <label for="chassi">Chassi</label>
        <input type="text" name="chassi">
        
        <label for="placa">Placa</label>
        <input type="text" name="placa">
        
        <input id="btn" type="submit" value="Salvar">
    </form>
</div>
</body>
</html>

