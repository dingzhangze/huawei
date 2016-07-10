 <?php

namespace App\Http\Middleware;

use Closure;
use Session;
use DB;

class CommonMiddleware
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
           //验证登陆状态 如果没有登陆则跳转到登陆页
        if (!Session::has("userData") && !preg_match("/^\/Admin\/login/",$_SERVER['REQUEST_URI'])) {
            return redirect("/Admin/login");
        } else {
           
        }
        return $next($request);
    }
}
