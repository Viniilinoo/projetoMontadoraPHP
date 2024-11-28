<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Montadora de Carros</title>
  <link rel="stylesheet" href="/css/style6.css">
</head>
<body>
<div class="header">
  <header>
    <a href="/cadastro_montadora">Cadastro Montadora</a>
    <a href="/">Página Inicial</a>
  </header>
  </div>


  @if ($montadoras->isEmpty())
    <h1>montadora não encontrado</h1>
  @else
    <table border="1">
      <tr>
        <th>Nome</th>
        <th>NomeDoCarro</th>
        <th>Dt Venda</th>
        <th>Dt Entrega</th>
        <th>Preço</th>
        <th>Ações</th>
      </tr>
      @foreach ($montadoras as $montadora)
      <tr>
        <td>{{ $montadora->nome }}</td>
        <td>{{ $montadora->nomeDoCarro }}</td>
        <td>{{ $montadora->dtVenda }}</td>
        <td>{{ $montadora->dtEntrega }}</td>
        <td>{{ $montadora->preco }}</td>
        <td>
          <form method="POST" action="/deletar_montadora/{{$montadora->id}}">
            <div class="edit">
            <a href="/editar_montadora/{{$montadora->id}}">Editar</a>
            </div>
            @csrf
            {{ method_field("DELETE") }}
            <input type="submit" value="Deletar Montadora">
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  @endif
</body>
</html>