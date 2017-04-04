<?php

namespace Ridrog\SimpleAdmin\Http\Middleware;

use Closure;

class MustBeAdmin
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
        $user = $request->user();

        if ($user && $user[config('simpleadmin.condition')]){
            return $next($request);
        }

        return redirect(config('simpleadmin.redirect'));

    }
}
