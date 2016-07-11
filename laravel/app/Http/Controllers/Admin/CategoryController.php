<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,
    Sesion;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *显示资源列表
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //查找所有的分类
      $categories = DB::table("admin_category")->orderByRaw("CONCAT_WS(',', path, cid)")->paginate(10);
      //重组数据值 在类名前缀一个缩进
      foreach ($categories as $key => $cate) {
          $categories[$key]->cname = "||" . str_repeat("=", substr_count($cate->path, ",") * 10) . $cate->cname;
          $categories[$key]->hasChild = DB::table("admin_category")->where("path", "LIKE", "%,{$cate->cid}%")->first();
      }
      //引入模板显示
      return view("admin.category.index", compact("categories"));
    }


    //设置某分类是否在导航栏显示
    public function setIsNav(Request $request,$isNav,$cid){
      $result = DB::table("admin_category")->where("cid", $cid)->update(["isNav" => $isNav]);
      if ($result !== false) {
          return response()->json(["status" => 1, "info" => "修改成功！"]);
      } else {
          return response()->json(["status" => 0, "info" => "修改失败！"]);
      }
    }
    /**
     * Show the form for creating a new resource.
     *显示一个添加资源的表单
     * @return \Illuminate\Http\Response
     */
     public function create($cid = NULL) {
         //给该类添加子类
         if (!empty($cid)) {
             $data = DB::table("admin_category")->where("cid", $cid)->first();
         }
         return view("admin.category.create", compact("data"));
     }

     /**
      * Store a newly created resource in storage.
      * 存储一个资源
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request) {
         //接受数据
         $data = $request->except("_token");
         if (false !== $insertID = DB::table("admin_category")->insertGetId($data)) {
             return redirect("/tips")->with(["info" => "Add Category Ok! ID:" . $insertID, "url" => "/Admin/category"]);
         } else {
             return redirect("/tips")->with(["info" => "Failed!" . $insertID, "url" => "/Admin/category"]);
         }
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id) {

     }

     /**
      * Show the form for editing the specified resource.
      * 显示一个指定的资源
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id) {
         //查找该分类的信息
         $category = DB::table("admin_category")->where("cid", $id)->first();
         return view("admin.category.edit", ["category" => $category]);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id) {
         //接受数据
         $data = $request->except("_token", "_method");
         DB::table("admin_category")->where("cid", $id)->update($data);
         return redirect("/Admin/category");
     }

     /**
      * Remove the specified resource from storage.
      * 销毁一个资源
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id) {
         //如果该类有子类 则不能删除
         if (DB::table("admin_category")->where("path", "LIKE", "%,{$id}%")->first()) {
             return redirect("/tips")->with(["info" => "Has Child!", "url" => "/Admin/category"]);
         } else {
             DB::table("admin_category")->where("cid", $id)->delete();
             return redirect("/Admin/category");
         }
     }

   }
