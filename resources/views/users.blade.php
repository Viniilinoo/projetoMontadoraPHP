

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Usuarios</title>
</head>
<body>
@if ($users->isEmpty())
    <h1>Usuarios não encontrado</h1>
  @else
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>CPF</th>
      <th>E-mail</th>
      <th>Ações</th>
    </tr>
    @foreach ($users as $user)
    <tr>
      <td>{{($user->name)}}</td>
      <td>{{($user->cpf)}}</td>
      <td>{{($user->email)}}</td>
      <td>
      <form method="POST" action="/deletar_usuario/{{$user->id}}">
      <a href="/editar_usuario/{{$user->id}}">Editar</a>
        @csrf
        {{ method_field("DELETE") }}
        <input type="submit" value="delete user">
      </form>
      </td>
    </tr>
    @endforeach
  </table>
  @endif
</body>
</html>