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
                       //查找一下所有的权限列表 判断当前的操作是否需要权限验证
            $result = DB::table("admin_auth_rule")->get();
//            dd($result);//["/Admin/user" => "查看用户"]
            $rules = array();
            foreach ($result as $tmp)
            {
                $rules[$tmp->name] = $tmp->title;
            }
//            dd($rules);
            $subject = preg_replace("/\?.+$/", "", $_SERVER["REQUEST_URI"]);
            $subject = preg_replace("/\/\d+/", "", $subject);
//            dd($subject);
            if (array_key_exists($subject, $rules))
            {
                //获取当前用户的分组
                $groupid = DB::table("admin_user")->leftJoin("admin_auth_group_access", "admin_user.uid", "=", "admin_auth_group_access.uid")->where("admin_user.uid", Session::get("userData")->uid)->pluck("admin_auth_group_access.group_id");
                //由分组查询权限集合
                $lists = DB::table("admin_auth_group")->where("id", $groupid)->pluck("rules"); //[1,2,3,4]
                //当前操作的权限ID
                $rule = DB::table("admin_auth_rule")->where("name", $subject)->pluck("id");//7
                if (!in_array($rule, explode(",", $lists)))
                {
                    return redirect("/tips")->with(["info" => "你无权".$rules[$subject], "url" => $_SERVER['HTTP_REFERER']]);
                }
            }
        }
        return $next($request);
    }
}
