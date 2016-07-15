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
    // dd($bana);
    $pize=explode("-",$bana);
    // dd($pize);
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


}
