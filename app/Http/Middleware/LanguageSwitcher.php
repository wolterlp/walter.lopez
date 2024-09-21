<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher
{
    public function handle($request, Closure $next)
    {
        // Si el idioma está en la URL (ejemplo: /en o /es)
        if ($request->has('lang')) {
            $lang = $request->get('lang');
            // Establecer el idioma en la sesión
            Session::put('locale', $lang);
        }

        // Usar el idioma guardado en la sesión, o el predeterminado
        $locale = Session::get('locale', config('app.locale'));
        App::setLocale($locale);

        return $next($request);
    }
}
