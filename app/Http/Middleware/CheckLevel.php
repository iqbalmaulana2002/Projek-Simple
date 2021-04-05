<?php

namespace App\Http\Middleware;

use Closure;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $level)
    {
        if ($request->user()->level == $level) {
            return $next($request);
        } else {
            if (auth()->user()->level == 'admin') {
                return redirect('/admin/dashboard_admin');
            } elseif (auth()->user()->level == 'petugas') {
                return redirect('/petugas/dashboard_petugas');
            }
        }
    }
}
