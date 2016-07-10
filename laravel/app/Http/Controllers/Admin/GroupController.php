<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Session;
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //查询所有分组信息
        $groups = DB::table("admin_auth_group")->get();
        $rules = DB::table("admin_auth_rule")->get();
        // 加载模板显示
        return view("admin.group.index",["groups" => $groups, "rules" => $rules]);
    }
    
    //设置权限
    public function setRule(Request $request)
     {
         //判断是添加还是删除一个权限
        $rules = explode(",",DB::table("admin_auth_group")->where("id", $request->get("id"))->pluck("rules"));
        if (false != $key = array_search($request->get("rule") , $rules))
                {
                   unset($rules[$key]);
                }else
                {
                    array_push($rules, $request->get("rule"));
                }
         //修改该分组的权限集合
         if (false !== DB::table("admin_auth_group")->where("id", $request->get("id"))->update(["rules"=>join(",",$rules)]))
         {
             return response()->json(["status"=> 1,"info"=> "修改分组权限成功"]);
         }else
         {
              return response()->json(["status"=> 0,"info"=> "修改分组权限失败"]);
         }
    }      
            

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //查看所有权限
        $rules = DB::table("admin_auth_rule")->get();
        //显示模板
        return view("admin.group.create",compact("rules"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   {
        //接收数据
        $data = $request->except("_token");
//        dd($data);
        $data["rules"] = join(",", $data["rules"]);
        //存入数据库
        if (false !== $insertID = DB::table("admin_auth_group")->insertGetId($data))
        {
            return redirect("/tips")->with(["info" => "Add Ok.ID:".$insertID, "url" => "/Admin/group"]);
        } else
        {
            return redirect("/tips")->with(["info" => "failed", "url" => "/Admin/group"]);
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
        //查看该分组的信息
        $group = DB::table("admin_auth_group")->where("id",$id)->first();
        //查看所有的权限
        $rules = DB::table("admin_auth_rule")->get();
        //发送模板显示
        return view("admin.group.edit",["group"=> $group, "rules" => $rules]);
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
        //接受数据
        $data = $request->except("_token","_method");
        $data["rules"] = join(",",$data["rules"]);
        //更新一条记录
        if (false !== DB::table("admin_auth_group")->where("id", $id)->update($data))
        {
            return redirect("/tips")->with(["info" => "Update OK!", "url" => "/Admin/group"]);
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
        //删除这个分组
        DB::table("admin_auth_group")->where("id", $id)->delete();
        //删除分组下的所有用户
        $users = DB::table("admin_auth_group_access")->where("group_id",$id)->get();
        foreach ($users as $user)
        {
            DB::table("admin_user")->where("uid", $user->uid)->delete();
        }
          return redirect("/tips")->with(["info" => "删除成功", "url" => "/Admin/group"]);
    }
}
