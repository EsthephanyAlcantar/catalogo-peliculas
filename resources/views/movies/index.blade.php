<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Películas</title>

    <style>
        body{
            font-family: Arial;
            background:#f4f4f4;
            margin:0;
            padding:30px;
        }

        h1{
            text-align:center;
        }

        table{
            width:100%;
            border-collapse: collapse;
            background:white;
        }

        th, td{
            padding:12px;
            border:1px solid #ccc;
            text-align:center;
        }

        th{
            background:#333;
            color:white;
        }

        a{
            text-decoration:none;
            padding:8px 12px;
            background:#007bff;
            color:white;
            border-radius:5px;
        }

        .btn-delete{
            background:red;
            border:none;
            color:white;
            padding:8px 12px;
            border-radius:5px;
            cursor:pointer;
        }

        .top-btn{
            margin-bottom:20px;
            display:inline-block;
        }

        img{
            width:100px;
        }
    </style>
</head>
<body>

<h1>Catálogo de Películas</h1>

<a class="top-btn" href="{{ route('movies.create') }}">
    Agregar Película
</a>

<table>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Sinopsis</th>
        <th>Año</th>
        <th>Portada</th>
        <th>Acciones</th>
    </tr>

    @foreach($movies as $movie)
    <tr>
        <td>{{ $movie->id }}</td>
        <td>{{ $movie->title }}</td>
        <td>{{ $movie->synopsis }}</td>
        <td>{{ $movie->year }}</td>

        <td>
            <img src="{{ $movie->cover }}">
        </td>

        <td>

            <a href="{{ route('movies.show', $movie->id) }}">
                Ver
            </a>

            <a href="{{ route('movies.edit', $movie->id) }}">
                Editar
            </a>

            <form action="{{ route('movies.destroy', $movie->id) }}"
                  method="POST"
                  style="display:inline;">

                @csrf
                @method('DELETE')

                <button class="btn-delete" type="submit">
                    Eliminar
                </button>

            </form>

        </td>
    </tr>
    @endforeach

</table>

</body>
</html>