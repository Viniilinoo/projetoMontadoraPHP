<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Montadora</title>
    <link rel="stylesheet" href="/css/style7.css">
</head>
<body>
<div class="header">
  <header>
    <a href="/cadastro_montadora">Cadastro Montadora</a>
    <a href="/montadora">Lista de Montadora</a>
    <a href="/">Página Inicial</a>
  </header>
  </div>

<div class="form">
<h1>Editar Montadora</h1>
<form id="montform" action="/editar_montadora/{{$montadora->id}}" method="post">
        @csrf
        {{ method_field("PATCH") }}
        <label for="nome">Nome</label>
        <input type="text" name="nome">

        <label for="nomeDoCarro">Nome Do Carro</label>
        <input type="text" name="nomeDoCarro">

        <label for="dtVenda">Data Venda</label>
        <input type="text" name="dtVenda">

        <label for="dtEntrega">Data Entrega</label>
        <input type="text" name="dtEntrega">

        <label for="preco">Preço</label>
        <input type="text" name="preco">

        <input id="btn" type="submit" value="Salvar">
    </form>
    </div>
</body>
</html>