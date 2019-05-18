<?php

namespace App\Http\Middleware;

use Auth;
use Closure;


class CheckStatus
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
        if (Auth::user()->isAdministrator()) {
            return redirect(route('blog.admin.index.index'));
        }
        if (Auth::user()->isUser()) {
            return redirect(route('blog.user.index.index'));
        }
        if (Auth::user()->isDisabled()) {
            return redirect(route('blog.disabled.index.index'));
        }
        return $next($request);
    }
}
