<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    // Obtener todas las películas
    public function index()
    {
        $movies = Movie::all();
        return $movies;
    }

    // Obtener una película específica
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return $movie;
    }

    // Insertar una nueva película con POST
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'year' => 'required|integer',
            'cover' => 'required|string'
        ]);

        Movie::create($validatedData);

        return "Pelicula Creada Correctamente";
    }

      public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'year' => 'required|integer',
            'cover' => 'required|string'
        ]);

        $movie->update($validatedData);

        return response()->json(['message' => 'Película actualizada con éxito', 'movie' => $movie], 200);
    }

    // Eliminar una película
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return response()->json(['message' => 'Película eliminada con éxito'], 200);
    }


}
