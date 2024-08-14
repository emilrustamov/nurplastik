<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Получаем язык из URL
        $locale = $request->route('locale');

        // Проверяем, поддерживается ли этот язык, и устанавливаем его
        if (!in_array($locale, ['en', 'ru', 'tm'])) {
            $locale = config('app.locale');
        }

        // Устанавливаем локаль в Laravel
        App::setLocale($locale);

        return $next($request);
    }
}
