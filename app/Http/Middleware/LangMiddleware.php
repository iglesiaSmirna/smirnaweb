<?php
namespace App\Http\Middleware;

use App\Http\Controllers\AuthController;
use Closure;
use app\Http\Controllers;

class LangMiddleware {

    /**
     * @param $request
     * @param Closure $next
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function handle($request, Closure $next)
    {
        $lang = $request->lang;
        $url  = $request->getPathInfo();
        if ($lang==null) {
            $lang_nav = AuthController::Lang();
            return redirect($url.'?lang='.$lang_nav);
        } else {
            return ($lang=='es'||$lang=='en') ? $next($request) : redirect($url.'?lang=es');
        }
    }
}