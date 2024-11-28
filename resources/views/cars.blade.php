

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Usuarios</title>
  <link rel="stylesheet" href="/css/style2.css">
</head>
<body>
  <div class="header">
  <header>
    <a href="/cadastro_carro">Cadastro Carro</a>
    <a href="/">Página Inicial</a>
  </header>
  </div>
  
  <div class="container">
  
  @if ($cars->isEmpty())
    <h1>Carros não encontrado</h1>
  @else
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>Ano</th>
      <th>Chassi</th>
      <th>Placa</th>
      <th>Ações</th>
    </tr>
    @foreach ($cars as $car)
    <tr>
      <td>{{($car->name)}}</td>
      <td>{{($car->ano)}}</td>
      <td>{{($car->chassi)}}</td>
      <td>{{($car->placa)}}</td>
      <td>
      <form method="POST" action="/deletar_carro/{{$car->id}}">
      <div class="edit">
      <a href="/editar_carro/{{$car->id}}">Editar</a>
      </div>
        @csrf
        {{ method_field("DELETE") }}
        <input type="submit" value="delete car">
      </form>
      </td>
    </tr>
    @endforeach
  </table>
  @endif
  </div>
</body>
</html>