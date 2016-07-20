<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,
    Session,
    Validator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Session::get("userDatas")->id;
      $user= DB::table("home_user")->where("id","=",$id)->first();
      // dd($user);
        return view("home.userinfo.index",compact("user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //修改用户的数据

      $id=Session::get("userDatas")->id;
      $data = $request->except("_token","_method","birth");
      $data["city"]=$data["s_province"]."-".$data["s_city"]."-".$data["s_county"];
      unset($data["s_province"],$data["s_city"],$data["s_county"]);
     //dd($data);
      if (false != $affectedRows  = DB::table("home_user")->where("id",$id )->update($data)) {

          return redirect("/home/userinfo");
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $id=Session::get("userDatas")->id;
    $user= DB::table("home_user")->where("id",$id)->first();

    $bana=$user->city;
   
    $pize=explode("-",$bana);
   
      return view("home.userinfo.edit",["user"=>$user,"pize"=>$pize]);
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

    //上传头像
    public function tx(Request $request)
    {
       //重命名并转存文件
        $file = $request->file("Filedata");//get post file
        $suffix = $file->getClientOriginalExtension();
        $rename = date("YmdHis").rand(1000,9999).".".$suffix;//201607111549289527.jpg
        $result = $file->move("./upload/avartar", $rename);
        //返回提示
        if ($result)
        {
            return response()->json(["status" => 1, "info" => "/upload/avartar/{$rename}"]);
        } else
        {
            return response()->json(["status" => 0, "info" => "上传失败"]);
        }
    }

    //用户中心
    public function member()
    {
        return view("home.userinfo.usermall");
    }



    //用户收货地址
    public function site()
    {
         $id=Session::get("userDatas")->id;
        //查询收货地址
        $add=DB::table("home_address")->where('uid','=',$id)->get();
     
        return view("home.userinfo.address",compact('add'));
    }

    //收货地址入库
    public function address(Request $request)
    {
       //接受数据
        $data = $request->except("_token");
        $data["address"]=$data["s_province"]."-".$data["s_city"]."-".$data["s_county"]."-".$data["add_detail"];
       unset($data["s_province"],$data["s_city"],$data["s_county"],$data["add_detail"]);
        
         //数据有效性验证
            $this->validate($request,[
            "name"=>"required",
            "add_detail"=>"required",
            "phone"=>"required",
            ],[
            "name.required"=>"收货人未填写",
            "add_detail.required"=>"地址不能为空",
           "phone.required"=>"电话号码不能为空"
            ]);
            $data["uid"]=$id;
            //执行数据创建
            if (FALSE !== DB::table("home_address")->insertGetId($data)) {
                return back()->with(["info" => "添加成功"]);
            }else {
                return back()->with(["info" => "添加失败"]);
            }
        // $insertID=DB::table("home_address")->insertGetId($data);
        //返回提示
        if ($insertID !== false)
        {
            return redirect("/Home/member/Myaddres");
        }
        
    }

    // 删除收获地址
   public function delete($id) 
   {
       $del= DB::table("home_address")->where("id",$id)->delete();
       
         if ($del !== false)
        {
            return redirect("/Home/member/Myaddres");
        }
   }

   //修改收获地址
   public function alter($id)
   {
       $uid=Session::get("userDatas")->id;
        //查询收货地址
       $add=DB::table("home_address")->where('uid',$uid)->get();
       $ids=$add[0]->id;
       $alter=DB::table("home_address")->where("id",$id)->first();
       return view("home.userinfo.editaddr",["add"=>$add,"alter"=>$alter,"ids"=>$ids]);
   }

   //修改收获地址数据
   public function editaddr(Request $request,$id)
   {
     $uid=Session::get("userDatas")->id;
       //修改数据
    $add=DB::table("home_address")->where('uid','=',$uid)->get();
    $data=$request->except("_token","s_province","s_city","s_county");
    $data["address"]=$data["add_detail"];
    unset($data["add_detail"]);
    // dd($data);
    if (false != $affectedRows  = DB::table("home_address")->where("id",$id )->update($data)) {
       
    return redirect("/Home/member/Myaddres");
   }
   }

    //我的订单
    public function order()
    {
        return view("home.userinfo.Myorder");
    }


}
