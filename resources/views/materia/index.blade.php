<!DOCTYPE html>
<html>
<head>
    <title>Materias</title>
</head>
<body>
    <h1>Materias</h1>
    <a href="{{ route('materia.create') }}">Crear Nueva Materia</a>

    <ul>
        @foreach($materias as $materia)
            <li>
                <!-- Enlace para ver los detalles de la materia -->
                <a href="{{ route('materia.show', $materia->id) }}">{{ $materia->name }}</a>
                <!-- Enlace para editar la materia -->
                <a href="{{ route('materia.edit', $materia->id) }}">Editar</a>

                <!-- Formulario para eliminar la materia -->
                <form action="{{ route('materia.destroy', $materia->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
