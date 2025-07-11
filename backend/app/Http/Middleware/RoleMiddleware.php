<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = $request->user();

        if (!in_array($user->role, $roles)) {
            return response()->json(['error' => 'Unauthorized.'], 403);
        }

        return $next($request);
    }
}
