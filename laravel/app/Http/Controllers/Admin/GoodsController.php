<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\GoodsRequest;
use App\Http\Controllers\Controller;
use DB,
 Session;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //关联查询所有的商品信息
        $goods = DB::table("admin_goods")->leftJoin("admin_category", "admin_goods.cid", "=", "admin_category.cid")->orderBy("admin_goods.cid")->paginate(5);
        //引入模板显示
        return view("admin.goods.index", compact("goods"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //查询所有的分类
        $categories = DB::table("admin_category")->orderByRaw("CONCAT_WS(',',path,cid)")->get();
        foreach ($categories as $key=>$cat)
        {
            $categories[$key]->cname = "|".str_repeat("-", substr_count($cat->path, ",")*10).$cat->cname;
        }
        //加载模板
        return view("admin.goods.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoodsRequest $request)
    {
        //接受数据
        $data = $request->except("_token","upload");
        //数据入库
        $insertID = DB::table("admin_goods")->insertGetId($data);
        //返回提示
        if ($insertID !== false)
        {
            return redirect("/tips")->with(["info" => "Add Goods OK! ID :" .$insertID, "url" => "/Admin/goods"]);
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
        $value=DB::table("admin_goods_details")->where("gid","=",$id)->get();
        dd($value);
        if(!empty(DB::table("admin_goods_details")->where("gid","=",$id)->get()))
       {
            $value=DB::table("admin_goods_details")->where("gid","=",$id)->get();
             return view("admin.goods.details",  compact($value));
        }else{
            $value="111";
            return view("admin.goods.details",  compact($value));
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //查询所有的分类
        $categories = DB::table("admin_category")->orderByRaw("CONCAT_WS(',',path,cid)")->get();
         foreach ($categories as $key=>$cat)
        {
            $categories[$key]->cname = "|".str_repeat("-", substr_count($cat->path, ",")*10).$cat->cname;
        }
        //查询该商品信息
        $goods = DB::table("admin_goods")->leftJoin("admin_category", "admin_goods.cid","=","admin_category.cid")->where("gid",$id)->first();
        //dd($goods);
        //发送数据
        return view("admin.goods.edit",["goods" => $goods, "categories" => $categories]);
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
        //
        $data = $request->except("_token","_method","upload");
        $result = DB::table("admin_goods")->where("gid",$id)->update($data);
        if($result !== false) {
            return redirect("/tips")->with(["info" => "Update Ok!", "url" => "/Admin/goods"]);
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
        //获取商品图片地址
        $im = DB::table("admin_goods")->where("gid",$id)->pluck("im");
        //删除商品记录
        DB::table("admin_goods")->where("gid",$id)->delete();
        //删除商品图片
        unlink(public_path()."/".$im);
        //返回
        return redirect("/tips")->with(["info" => "删除成功", "url" => "/Admin/goods"]);
    }
    
    //上传商品图片
    public function upload(Request $request)
    {
       //重命名并转存文件
        $file = $request->file("Filedata");//get post file
        $suffix = $file->getClientOriginalExtension();
        $rename = date("YmdHis").rand(1000,9999).".".$suffix;//201607111549289527.jpg
        $result = $file->move("./uploads/goods", $rename);
        //返回提示
        if ($result)
        {
            return response()->json(["status" => 1, "info" => "/uploads/goods/{$rename}"]);
        } else
        {
            return response()->json(["status" => 0, "info" => "上传失败"]);
        }
    }
}
