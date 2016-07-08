<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,
    Session,
    Validator,
    Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request) {
         //查询用户信息
         $users = DB::table("user")
                 ->where("uname", "LIKE", "%" . $request->get("keyword") . "%")
                 ->orWhere("nickname", "LIKE", "%" . $request->get("keyword") . "%")
                 ->orderBy("uid", "DESC")
                 ->paginate(8);
         //获取搜索条件
         $keyword = $request->get("keyword");
         //显示模板
         return view("admin.user.index", ["users" => $users, "keyword" => $keyword]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $request) {
         return view("admin.user.create");
     }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //执行数据验证
        $this->validate($request, [
            "uname" => "required|unique:user",
            "password" => "required|between:6, 15",
           "repassword" => "required|same:password",
            "nickname" => "required"
        ], [
            "uname.required" => "账号不能为空",
            "uname.unique" => "账号已被占用",
            "password.required" => "密码不能为空",
            "password.between" => "密码长度应为6-15位",
            "repassword.required" => "确认密码必须填写",
            "repassword.same" => "俩次密码输入不一致",
            "nickname.required" => "昵称不能为空"
        ]);
        //提取出数据并重组
        $data = $request->except("_token","repassword");
        $data["password"] = Hash::make($data["password"]);
          $data["createtime"] = date("Y-m-d H:i:s");
        //执行数据创建
        if (FALSE !== DB::table("user")->insertGetId($data)) {
            return redirect("/Admin/user");
        }else {
            return back()->with(["info" => "添加用户失败"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //查询该用户的记录
        $userRec  = DB::table("user")->where("uid",$id)->first();
        //显示模板
        return view("admin.user.edit",compact("userRec"));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //验证数据的有效性
        $this->validate($request,[
            "password" => "between:6, 15",
            "repassword" => "same:papssword",
            "nickname" => "required",
        ],[
            "password.between" => "密码长度应为6-15位",
            "repassword.same" => "两次密码输入不一致",
            "nickname.required" => "昵称不能为空"
        ]);
        //修改用户的数据
        $data = $request->except("_token","_method","repassword");
        $data["createtime"] = date("Y-m-d H:i:s");
        //对密码重新构造
        if(!empty($data["password"])) {
            $data["password"] = Hash::make($data["password"]);
        }else {
            unset($data["password"]);
        }
        if (false != $affectedRows  = DB::table("user")->where("uid",$id )->update($data)) {
            return redirect("/Admin/user");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除该用户记录
        if (false !== DB::table("user")->where("uid",$id )->delete()) {
            return redirect("/tips")->with(["info"=>"操作成功","url" => "/Admin/user"]);
         }else {
           return redirect("/tips")->with(["info"=>"操作失败","url" => "/Admin/user"]);  
         }
    }
}
