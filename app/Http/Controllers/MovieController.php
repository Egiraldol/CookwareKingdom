<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index()
    {
        
        $url = 'http://34.29.226.153/api/movies';
        $response = Http::get($url);
        $movies = $response->json();

        // Pasar datos a la vista
        return view('movies.index', [
            'viewData' => [
                'title' => 'Películas',
                'movies' => $movies
            ]
        ]);
    }

    public function show($id)
    {
        $url = 'http://34.29.226.153/api/movies';
        $response = Http::get($url);
        $movies = $response->json();

        // Buscar la película por ID
        foreach ($movies as $m) {
            if ($m['id'] == $id) {
                $movie = $m;
                break;
            }
        }

        // Si no se encuentra la película, redirigir a la página de películas
        if (!$movies) {
            return redirect()->route('movies.index')->with('error', 'Película no encontrada');
        }

        // Pasar datos a la vista
        return view('movies.show', [
            'viewData' => [
                'title' => $movie['title'],
                'movie' => $movie
            ]
        ]);
    }
}
