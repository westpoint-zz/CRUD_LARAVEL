<!DOCTYPE html>
<html>
<head>
    <title>Crear Materia</title>
</head>
<body>
    <h1>Crear Materia</h1>
    <form action="{{ route('materia.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name" required>
        <br>
        <label>Descripción:</label>
        <textarea name="description" required></textarea>
        <br>
        <label>Créditos:</label>
        <input type="number" name="creditos" required>
        <br>
        <label>Tipo:</label>
        <select name="tipo" required>
            <option value="Basica">Básica</option>
            <option value="Formacion">Formación</option>
            <option value="Titulacion">Titulación</option>
        </select>
        <br>
        <label>Valor por Hora:</label>
        <input type="number" step="0.01" name="valor_hora" required>
        <br>
        <label>Estado:</label>
        <select name="estado" required>
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
        </select>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
