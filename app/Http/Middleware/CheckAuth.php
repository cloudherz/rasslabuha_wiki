<?php

namespace App\Http\Middleware;

use App\Models\RSession;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CheckAuth
{
    public function handle(Request $request, Closure $next)
    {
        $cookieValue = $request->cookie('r_auth');

        if ($cookieValue && str_contains($cookieValue, '|')) {
            [$userId, $token] = explode('|', $cookieValue, 2);

            $session = RSession::where('r_user_id', $userId)
                ->where('token', $token)
                ->first();

            if ($session && $session->expiration_date > time()) {
                $user = $session->user;

                $request->merge(['R_USER' => $user]);

                View::share('R_USER', $user);
            }
        }

        return $next($request);
    }
}
