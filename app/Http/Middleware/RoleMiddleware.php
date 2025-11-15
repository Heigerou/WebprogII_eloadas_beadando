<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $userRole = auth()->user()->role ?? 'visitor';

        if (!in_array($userRole, $roles)) {
            abort(403, 'Nincs jogosultságod az oldal megtekintéséhez.');
        }

        return $next($request);
    }
}
