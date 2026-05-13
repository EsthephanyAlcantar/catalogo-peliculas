<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Película</title>
    <style>
        body{ font-family: Arial; background:#f4f4f4; padding:30px; }
        form{ background:white; padding:25px; max-width:500px; margin:auto; border-radius:8px; }
        input, textarea{ width:100%; padding:10px; margin-bottom:15px; }
        button, a{ padding:10px 15px; border-radius:5px; text-decoration:none; }
        button{ background:#007bff; color:white; border:none; }
        a{ background:#555; color:white; }
    </style>
</head>
<body>

<h1>Agregar Película</h1>

<form action="{{ route('movies.store') }}" method="POST">
    @csrf

    <label>Título</label>
    <input type="text" name="title" required>

    <label>Sinopsis</label>
    <textarea name="synopsis" required></textarea>

    <label>Año</label>
    <input type="number" name="year" required>

    <label>URL de portada</label>
    <input type="text" name="cover">

    <button type="submit">Guardar</button>
    <a href="{{ route('movies.index') }}">Regresar</a>
</form>

</body>
</html>