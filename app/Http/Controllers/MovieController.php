<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return \App\Models\Movie::all();
    }

    public function show($id)
    {
        $movie = \App\Models\Movie::find($id);

        if (!$movie) {
            return response()->json([
                'mensaje' => 'Película no encontrada'
            ], 404);
        }

        return $movie;
    }

    public function store(Request $request)
    {
        $movie = \App\Models\Movie::create($request->all());

        return response()->json([
            'mensaje' => 'Película creada',
            'data' => $movie
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $movie = \App\Models\Movie::find($id);

        if (!$movie) {
            return response()->json([
                'mensaje' => 'Película no encontrada'
            ], 404);
        }

        $movie->update($request->all());

        return response()->json([
            'mensaje' => 'Película actualizada',
            'data' => $movie
        ], 200);
    }

    public function destroy($id)
    {
        $movie = \App\Models\Movie::find($id);

        if (!$movie) {
            return response()->json([
                'mensaje' => 'Película no encontrada'
            ], 404);
        }

        $movie->delete();

        return response()->json([
            'mensaje' => 'Película eliminada correctamente'
        ], 200);
    }
}