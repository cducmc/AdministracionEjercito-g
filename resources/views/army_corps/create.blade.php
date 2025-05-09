<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuerpo de Ejército</title>
</head>
<body>

    <h1>Crear Cuerpo de Ejército</h1>

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <!-- El formulario para crear un cuerpo de ejército -->
 <form action="{{ route('army_corps.store') }}" method="POST">
        @csrf
        <div>
            <label for="denomination">Denominación:</label>
            <input type="text" name="denomination" id="denomination" required>
        </div>
        <button type="submit">Guardar</button>
    </form>

</body>
</html>