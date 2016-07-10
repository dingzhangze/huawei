<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Session,Validator;
class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查找所有权限
        $rules=DB::table("admin_auth_rule")->get();
        //模板中显示
        return view("admin.rule.index",compact("rules"));
//        return($rules);
    }

    
    //批量操作按钮的提交地址
    public function multi(Request $request)
    {
//        dd($request->all());
        $rules = join(",",$request->get("rules"));
//        dd($rules);
        switch($request->get("submit"))
        {
           case "启用选中项":
//               return "1";
               $result=DB::update("UPDATE think_admin_auth_rule SET status=1 WHERE id in ({$rules})");
//               dd($result);
               break;
           case "禁用选中项":
               $result=DB::update("UPDATE think_admin_auth_rule SET status='0' WHERE id in({$rules})");
               break;
           case "删除选中项":
               
               $result=DB::table("admin_auth_rule")->whereIn("id",$request->get("rules"))->delete();
           default;
        }
        return back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("admin.rule.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //接受数据
        $data = $request->except("_token");
        //dd($data);
     //   验证数据
        $this->validate($request, [
            "name" => "required|unique:admin_auth_rule",
            "title" => "required"
        ]);
        if (false !== DB::table("admin_auth_rule")->insert($data))
        {
            return back();
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
        //查找信息
        $rule = DB::table("admin_auth_rule")->where("id", $id)->first();
//        dd($rule);
        return view("admin.rule.show", compact("rule"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
         $data = $request->except("_token", "_method");
        //修改该权限信息
        DB::table("admin_auth_rule")->where("id", $id)->update($data);
        //返回上一页
        echo "<script>";
            echo "parent.location.href='/Admin/rule';";
        echo "</script>";
        exit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
