<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Session;

class ShopcarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $id=Session::get("userDatas")->uname;
        //查询SESSION中cart字段的值
       $goods =  Session::get("cart")["$id"];
       //将数组转化正对象集合
//       dd($goods);
       $goods = (json_decode(json_encode($goods)));
        
       
//       dd($goods);
       //在模板中显示
       return view("home.shopcar.index",compact("goods"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
    }
    
    public  function order()
    {
        $uid=Session::get("userDatas")->id;
        $site=DB::table("home_address")->where("uid",$uid)->get();
//       dd($site);
        $id = Session::get("userDatas")->uname;
        
        $goods = Session::get("cart")["$id"];
       // dd($goods);
        
        return view("/home/shopcar/order",["goods"=>$goods,"site"=>$site]);
    }


    /**
     * Store a newly created resource in storage.
     *将商品加入购物车
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $id=Session::get("userDatas")->uname;
       //先获取 购物购物车元商品信息
        $old = Session::pull("cart")["$id"];
        //修改商品的数量
        $old[$request->get("key")]["count"] = $request->get("count");
        //将修改的数据存入session
        $sess["$id"] = $old;
        Session::put("cart",$sess);
        Session::save();
     //  dd(Session::get("cart"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($key)
    {
         $id=Session::get("userDatas")->uname;
        //先获取原有的商品信息
        $old = Session::pull("cart")["$id"];
        //删除某个元素
        unset($old[$key]);
        //保存信息的数据
        $sess["$id"] = $old;
        Session::put("cart",$sess);
        Session::save();
        //回调
        return back();
    }
    
    //订单提交
    public function orders(Request $request) 
    {
       $data = $request->except("_token");
       if(!empty($data['address']["phone"]['name'])) {
       $data["number"] = rand(100000,999999);
       $data["ordertime"] = date("Y-m-d H:i:s");
       $name =Session::get("userDatas")->uname;
      $goods =  Session::get("cart")["$name"];
     // dd($goods);
        foreach($goods as $good) {
             $datas =  array_merge($good,$data);
             DB::table("home_orders")->insertGetId($datas);
                 
        }
       $goodss =  DB::table("home_orders")->where("number",$data["number"])->first();
     // dd($goodss);
     return view("/home/shopcar/pay",compact("goodss"));
       }else
       {
           
           
           return redirect("/tips")->with(["info" => "请填写个人信息", "url" => "/home/shopcar/order"]);
       }   
       
    
}
}