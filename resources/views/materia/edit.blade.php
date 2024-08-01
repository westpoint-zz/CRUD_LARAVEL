<!DOCTYPE html>
<html>
<head>
    <title>Editar Materia</title>
</head>
<body>
    <h1>Editar Materia</h1>
    <form action="{{ route('materia.update', $materia->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="name" value="{{ old('name', $materia->name) }}" required>
        <br>
        <label>Descripción:</label>
        <textarea name="description">{{ old('description', $materia->description) }}</textarea>
        <br>
        <label>Créditos:</label>
        <input type="number" name="creditos" value="{{ old('creditos', $materia->creditos) }}" required>
        <br>
        <label>Tipo:</label>
        <select name="tipo" required>
            <option value="Basica" {{ $materia->tipo == 'Basica' ? 'selected' : '' }}>Básica</option>
            <option value="Formacion" {{ $materia->tipo == 'Formacion' ? 'selected' : '' }}>Formación</option>
            <option value="Titulacion" {{ $materia->tipo == 'Titulacion' ? 'selected' : '' }}>Titulación</option>
        </select>
        <br>
        <label>Valor por Hora:</label>
        <input type="number" step="0.01" name="valor_hora" value="{{ old('valor_hora', $materia->valor_hora) }}" required>
        <br>
        <label>Estado:</label>
        <select name="estado" required>
            <option value="activo" {{ $materia->estado == 'activo' ? 'selected' : '' }}>Activo</option>
            <option value="inactivo" {{ $materia->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
        </select>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
