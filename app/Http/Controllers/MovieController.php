<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index()
    {
        //Codigo cuando ya este el microservicio desplegado y funcionando
        // $url = 'http://130.211.224.74/api/movies';
        //$response = Http::get($url);

        // Datos simulados
        $response = [
            ["id" => 1, "title" => "Interstellar", "price" => 20, "stock" => 4, "plot" => "In the near future around the American Midwest...", "rating" => 3.6],
            ["id" => 2, "title" => "E.T. the Extra-Terrestrial", "price" => 10, "stock" => 13, "plot" => "Left behind by his group of secret visitors...", "rating" => 0],
            ["id" => 3, "title" => "The Matrix", "price" => 20, "stock" => 19, "plot" => "Thomas A. Anderson is a man living two lives...", "rating" => 0],
            ["id" => 4, "title" => "Titanic", "price" => 30, "stock" => 11, "plot" => "After winning a trip on the RMS Titanic during...", "rating" => 0],
            ["id" => 5, "title" => "Perfume: The Story of a Murderer", "price" => 25, "stock" => 21, "plot" => "In the squalid slums of eighteenth-century Paris...", "rating" => 0],
            ["id" => 7, "title" => "The Parent Trap", "price" => 15, "stock" => 13, "plot" => "When two pre-teens named Hallie and Annie meet...", "rating" => 0],
            ["id" => 8, "title" => "Kill Bill", "price" => 40, "stock" => 5, "plot" => "A young woman in El Paso, Texas, awakens after a four year long coma...", "rating" => 0],
            ["id" => 12, "title" => "The Lord of the Rings: The Rings of Power", "price" => 15, "stock" => 8, "plot" => "The Rings of Power, as the name suggests, is the story leading up to the creation of Sauron's ring...", "rating" => 0]
        ];

        //Codigo cuando ya este el microservicio desplegado y funcionando
        //$movies = $response->json();
        $movies = collect($response);

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
        // Simulación del microservicio
        $response = [
            ["id" => 1, "title" => "Interstellar", "price" => 20, "stock" => 4, "plot" => "In the near future around the American Midwest...", "rating" => 3.6],
            ["id" => 2, "title" => "E.T. the Extra-Terrestrial", "price" => 10, "stock" => 13, "plot" => "Left behind by his group of secret visitors...", "rating" => 0],
            ["id" => 3, "title" => "The Matrix", "price" => 20, "stock" => 19, "plot" => "Thomas A. Anderson is a man living two lives...", "rating" => 0],
            ["id" => 4, "title" => "Titanic", "price" => 30, "stock" => 11, "plot" => "After winning a trip on the RMS Titanic during...", "rating" => 0],
            ["id" => 5, "title" => "Perfume: The Story of a Murderer", "price" => 25, "stock" => 21, "plot" => "In the squalid slums of eighteenth-century Paris...", "rating" => 0],
            ["id" => 7, "title" => "The Parent Trap", "price" => 15, "stock" => 13, "plot" => "When two pre-teens named Hallie and Annie meet...", "rating" => 0],
            ["id" => 8, "title" => "Kill Bill", "price" => 40, "stock" => 5, "plot" => "A young woman in El Paso, Texas, awakens after a four year long coma...", "rating" => 0],
            ["id" => 12, "title" => "The Lord of the Rings: The Rings of Power", "price" => 15, "stock" => 8, "plot" => "The Rings of Power, as the name suggests, is the story leading up to the creation of Sauron's ring...", "rating" => 0]
        ];
        $movie = null;

        // Buscar la película por ID
        foreach ($response as $m) {
            if ($m['id'] == $id) {
                $movie = $m;
                break;
            }
        }

        // Si no se encuentra la película, redirigir a la página de películas
        if (!$movie) {
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
