<?php

namespace App\Http\Middleware;
use Spatie\Permission\Models\Role;
use Auth;

use Closure;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if (Auth::check()) {
            if ($user->hasAnyRole(['admin', 'master'])) {
                return $next($request);
            }
        }
        return redirect()->route('home');
    }
}
