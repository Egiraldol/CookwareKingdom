<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $apiKey = '91fa0f8bbe9d0b2afacb6e5638b6f8cb'; // Reemplaza 'YOUR_API_KEY' con tu clave de API real
        $city = 'medellin'; // Puedes cambiar 'London' por cualquier ciudad
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

        $response = Http::get($url);

        if ($response->successful()) {
            $weatherData = $response->json();
            view()->share('weather', $weatherData);
        } else {
            view()->share('weather', null);
        }

        return $next($request);
    }
}
