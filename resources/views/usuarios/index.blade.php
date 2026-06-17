<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>Lista de Usuarios</h2>

    <a href="{{ route('usuarios.create') }}"
       class="btn btn-primary mb-3">
       Nuevo Usuario
    </a>

    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>

        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->telefono }}</td>

            <td>
                <a href="{{ route('usuarios.edit', $usuario->id) }}"
                   class="btn btn-warning btn-sm">
                    Editar
                </a>

                <form action="{{ route('usuarios.destroy', $usuario->id) }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('¿Está seguro de eliminar este usuario?')">
                        Eliminar
                    </button>

                </form>
            </td>

        </tr>
        @endforeach

    </table>

</div>

</body>
</html>