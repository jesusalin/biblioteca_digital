<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>Editar Usuario</h2>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text"
                   name="nombre"
                   class="form-control"
                   value="{{ $usuario->nombre }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   value="{{ $usuario->email }}">
        </div>

        <div class="mb-3">
            <label>Teléfono</label>
            <input type="text"
                   name="telefono"
                   class="form-control"
                   value="{{ $usuario->telefono }}">
        </div>

        <button type="submit" class="btn btn-warning">
            Actualizar
        </button>

        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">
            Volver
        </a>

    </form>

</div>

</body>
</html>