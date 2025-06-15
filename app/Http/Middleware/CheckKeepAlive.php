<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CheckKeepAlive
{
    public function handle($request, Closure $next)
    {
        // Rotas que devem ser ignoradas pelo middleware
        $excludedRoutes = [
            'login',
            'logout',
            'keepAlive',
        ];

        // Se a rota atual for uma das ignoradas, apenas continua
        if ($request->route() && in_array($request->route()->getName(), $excludedRoutes)) {
            return $next($request);
        }

        if (Auth::check()) {
            $user = Auth::user();

            // Se o campo keepAlive for null OU for muito antigo
            $limite = Carbon::now()->subMinutes(5);

            if (is_null($user->keepAlive) || $user->keepAlive < $limite) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect()->route('login')->withErrors([
                    'message' => 'Sua sessão expirou por inatividade.',
                ]);
            }
        }

        return $next($request);
    }
}
