<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login');
        }

        elseif ( $user == 1 ) {
            return redirect('/');
        }
        return $next($request);
    }
}
