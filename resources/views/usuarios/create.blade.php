<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header">
            <h3>Registrar Usuario</h3>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Se encontraron errores:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('usuarios.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">
                        Nombre <span class="text-danger">*</span>
                    </label>

                    <input
                        type="text"
                        name="nombre"
                        class="form-control"
                        value="{{ old('nombre') }}"
                        placeholder="Ingrese el nombre">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Email <span class="text-danger">*</span>
                    </label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        placeholder="correo@ejemplo.com">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Teléfono <span class="text-danger">*</span>
                    </label>

                    <input
                        type="text"
                        name="telefono"
                        class="form-control"
                        value="{{ old('telefono') }}"
                        placeholder="999999999">
                </div>

                <button type="submit" class="btn btn-success">
                    Guardar
                </button>

                <a href="{{ route('usuarios.index') }}"
                   class="btn btn-secondary">
                    Cancelar
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>