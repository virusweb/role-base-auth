<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        switch ($role) {
            case 'admin':
                return (Auth::user()->role == 1) ? $next($request) : abort(403);
                break;
            case 'po':
                return (Auth::user()->role == 2) ? $next($request) : abort(403);
            default:
                return abort(403);
        }
    }
}
