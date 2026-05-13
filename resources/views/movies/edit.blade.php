<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Película</title>
    <style>
        body{ font-family: Arial; background:#f4f4f4; padding:30px; }
        form{ background:white; padding:25px; max-width:500px; margin:auto; border-radius:8px; }
        input, textarea{ width:100%; padding:10px; margin-bottom:15px; }
        button, a{ padding:10px 15px; border-radius:5px; text-decoration:none; }
        button{ background:#28a745; color:white; border:none; }
        a{ background:#555; color:white; }
    </style>
</head>
<body>

<h1>Editar Película</h1>

<form action="{{ route('movies.update', $movie->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Título</label>
    <input type="text" name="title" value="{{ $movie->title }}" required>

    <label>Sinopsis</label>
    <textarea name="synopsis" required>{{ $movie->synopsis }}</textarea>

    <label>Año</label>
    <input type="number" name="year" value="{{ $movie->year }}" required>

    <label>URL de portada</label>
    <input type="text" name="cover" value="{{ $movie->cover }}" required>

    <button type="submit">Actualizar</button>
    <a href="{{ route('movies.index') }}">Regresar</a>
</form>

</body>
</html>