<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Película</title>
    <style>
        body{ font-family: Arial; background:#f4f4f4; padding:30px; }
        .card{ background:white; padding:25px; max-width:600px; margin:auto; border-radius:8px; text-align:center; }
        img{ width:180px; margin:15px 0; }
        a{ display:inline-block; margin-top:15px; padding:10px 15px; background:#007bff; color:white; text-decoration:none; border-radius:5px; }
    </style>
</head>
<body>

<div class="card">
    <h1>{{ $movie->title }}</h1>

    <img src="{{ $movie->cover }}" alt="Portada">

    <p><strong>Año:</strong> {{ $movie->year }}</p>
    <p><strong>Sinopsis:</strong> {{ $movie->synopsis }}</p>

    <a href="{{ route('movies.index') }}">Regresar</a>
</div>

</body>
</html>