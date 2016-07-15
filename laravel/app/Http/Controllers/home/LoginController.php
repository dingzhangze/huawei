<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,
    Session,
    Validator,
    Hash;

class LoginController extends Controller
{

     //登陆页面
    public function index(Request $request)
    {
      	$data = $request->old();
        return view("home.login.login",compact("data"));
    }

  //登陆验证
  public function logTodo(Request $request)
  {
    //接受数据
    $data = $request->all();
    //验证码是否正确
    if (session("code") != $data["code"])
    {
      $request->flash();
      return back()->with(["info" => "验证码错误"]);
    }

    //有效性验证
    $this->validate($request, [
      "uname" => "required",
      "password" => "required|between:6,15",
    ], [
      "uname.required" => "账号未填写",
      "password.required" => "密码不能为空",
      "password.between" => "密码长度应为6-15位"
    ]);

    //真实性验证
    $userRec = DB::table("home_user")->where("uname", $data["uname"])->first();
    if (empty($userRec))
    {
      $request->flash();
      return back()->with(["info" => "账号不存在"]);
    } else if (!Hash::check($data["password"], $userRec->password))
    {
      $request->flash();
      return back()->with(["info" => "密码错误"]);
    } else
    {//返回结果
      //将用户状态写入session
      Session::put("userData", $userRec);
                        Session::save();
     return view('welcome');
    }
  }



     //注册页面
    public function create()
    {
      return view("home.login.register");
    }



     //注册处理
    public function store(Request $request)
    {
      //接受数据
  		$data = $request->all();
  		//验证码是否正确
  		if (session("code") != $data["code"])
  		{
  			$request->flash();
  			return back()->with(["info" => "验证码错误"]);
  		}
      //执行数据验证
      $this->validate($request, [
          "uname" => "required|unique:home_user",
          "password" => "required|between:6, 15",
         "repassword" => "required|same:password",
      ], [
          "uname.required" => "账号不能为空",
          "uname.unique" => "账号已被占用",
          "password.required" => "密码不能为空",
          "password.between" => "密码长度应为6-15位",
          "repassword.required" => "确认密码必须填写",
          "repassword.same" => "俩次密码输入不一致",
      ]);
      //提取出数据并重组
      $data = $request->except("_token","repassword","code", "agree","sub");
      $data["password"] = Hash::make($data["password"]);
        $data["createtime"] = date("Y-m-d H:i:s");
      //执行数据创建
      if (FALSE !== DB::table("home_user")->insertGetId($data)) {
           return back()->with(["info" => "注册成功"]);
      }else {
          return back()->with(["info" => "注册失败"]);
      }
    }


}
