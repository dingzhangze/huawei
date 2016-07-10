<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Session,DB,Hash;

class LoginController extends Controller
{

    public function index(Request $request)
    {
      $data=$request->old();
      return view("admin.login.index",compact("data"));
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
    $this->validate($request,[
      "uname"=>"required",
      "password"=>"required|between:6,15",
    ],[
      "uname.required"=>"账号未填写",
      "password.required"=>"密码不能为空",
      "password.between"=>"密码长度应为6-15位"
    ]);

    //真实性验证
    $userRec=DB::table("admin_user")->where("uname",$data["uname"])->first();
    if(empty($userRec))
    {
      $request->flash();
      return back()->with(["info"=>"账号不存在"]);
    }else if(!Hash::check($data["password"],$userRec->password))
    {
      $request->flash();
      return back()->with(["info"=>"密码错误"]);
    }else
    {
      //返回结果
      //将用户状态写入Session
      session(["userData"=>$userRec]);
      return redirect("/Admin");
    }
  }


    //生成验证码
    public function captcha() {
  		//生成验证码图片的Builder对象，配置相应属性
  		$builder = new CaptchaBuilder;
  		//可以设置图片宽高及字体
  		$builder->build($width = 120, $height = 40, $font = null);
  		//获取验证码的内容
  		$phrase = $builder->getPhrase();

  		//把内容存入session
  		Session::flash('code', $phrase);
  		//生成图片
  		header("Cache-Control: no-cache, must-revalidate");
  		header('Content-Type: image/jpeg');
  		$builder->output();
  	}

  //退出登录
  public function logout()
  {
   //销毁session
		Session::forget("userData");
		return redirect("/Admin");
  }
}
