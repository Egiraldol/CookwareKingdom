<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Obtiene el idioma de la sesión o usa el idioma por defecto de la configuración
        $locale = Session::get('locale', config('app.locale'));

        // Establece el idioma de la aplicación
        App::setLocale($locale);

        return $next($request);
    }
}
