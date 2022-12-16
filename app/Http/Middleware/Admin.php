<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->admin == 0) {
            return $next($request);
        }
        throw new AccessDeniedHttpException('Ação não autorizada');

    }
}
