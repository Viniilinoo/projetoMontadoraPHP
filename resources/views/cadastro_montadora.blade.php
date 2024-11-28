<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Montadora </title>
    <link rel="stylesheet" href="/css/style8.css">
</head>
<body>
<div class="header">
  <header>
    <a href="/cadastro_montadora">Cadastro Montadora</a>
    <a href="/">Página Inicial</a>
  </header>
</div>  
    
    <div class="form">
        <h1 class="p">Cadastro de Montadora</h1>
    <form id="montform" action="/criar_montadora" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">

        <label for="nomeDoCarro">Nome Do Carro</label>
        <input type="text" name="nomeDoCarro">

        <label for="dtVenda">Data Venda</label>
        <input type="date" name="dtVenda">

        <label for="dtEntrega">Data Entrega</label>
        <input type="date" name="dtEntrega">

        <label for="preco">Preço</label>
        <input type="text" name="preco">

        <input id="btn" type="submit" value="Salvar">
    </form>
    </div>
</body>
</html>