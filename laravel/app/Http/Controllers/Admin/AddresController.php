<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Session,Validator;
class AddresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $addres=DB::table("home_addres")->get();  
      return view("admin.Addres.index",compact("addres"));
//        return 111;
    }

    
   
    public function multi(Request $request)
    {
//       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.Addres.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->except("_token");
       
       str_replace(".","\.",$data["addres"]);
//       dd($data1);
       
       if (false !== $insertID = DB::table("home_addres")->insertGetId($data)) {
             return redirect("/tips")->with(["info" => "添加成功! ID:" . $insertID, "url" => "/Admin/Addres"]);
         } else {
             return redirect("/tips")->with(["info" => "出错了!" . $insertID, "url" => "/Admin/Addres"]);
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
//       return 111;
        $value=DB::table("home_addres")->where("aid",$id)->first();
        return view("admin.Addres.edit",compact("value"));
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
       $data = $request->except("_token","_method");
//       dd($data);
        str_replace(".","\.",$data["addres"]);
        
        if (false !== $insertID = DB::table("home_addres")->where("aid",$id )->update($data)) {
             return redirect("/tips")->with(["info" => "修改成功! ID:" . $insertID, "url" => "/Admin/Addres"]);
         } else {
             return redirect("/tips")->with(["info" => "出错了!" . $insertID, "url" => "/Admin/Addres"]);
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
        //
    }
    
    public function delete(Request $request, $id)
    {
       if (false !== $insertID = DB::table("home_addres")->where("aid",$id )->delete()) {
             return redirect("/tips")->with(["info" => "删除成功! ID:" . $insertID, "url" => "/Admin/Addres"]);
         } else {
             return redirect("/tips")->with(["info" => "出错了!" . $insertID, "url" => "/Admin/Addres"]);
         }
    }
}
