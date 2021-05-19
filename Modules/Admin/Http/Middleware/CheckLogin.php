<?php

namespace Modules\Admin\Http\Middleware;

use App\Http\Middleware\Authenticate;
use Closure;
use Illuminate\Http\Request;
class CheckLogin extends Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $login_result = auth('admin')->check();
        if(!$login_result)
        {
            return redirect()->route('admin.login');
        }
        return $next($request);
    }
}
