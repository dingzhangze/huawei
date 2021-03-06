<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Session,Validator;
class chainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $chaining=DB::table("home_chaining")->get();  
      return view("admin.chaining.index",compact("chaining"));
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
        return view("admin.chaining.create");
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
       
       str_replace(".","\.",$data["chaining"]);
//       dd($data1);
       
       if (false !== $insertID = DB::table("home_chaining")->insertGetId($data)) {
             return redirect("/tips")->with(["info" => "添加成功! ID:" . $insertID, "url" => "/Admin/chaining"]);
         } else {
             return redirect("/tips")->with(["info" => "出错了!" . $insertID, "url" => "/Admin/chaining"]);
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
        $value=DB::table("home_chaining")->where("aid",$id)->first();
        return view("admin.chaining.edit",compact("value"));
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
        str_replace(".","\.",$data["chaining"]);
        
        if (false !== $insertID = DB::table("home_chaining")->where("aid",$id )->update($data)) {
             return redirect("/tips")->with(["info" => "修改成功! ID:" . $insertID, "url" => "/Admin/chaining"]);
         } else {
             return redirect("/tips")->with(["info" => "出错了!" . $insertID, "url" => "/Admin/chaining"]);
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
       if (false !== $insertID = DB::table("home_chaining")->where("aid",$id )->delete()) {
             return redirect("/tips")->with(["info" => "删除成功! ID:" . $insertID, "url" => "/Admin/chaining"]);
         } else {
             return redirect("/tips")->with(["info" => "出错了!" . $insertID, "url" => "/Admin/chaining"]);
         }
    }
}
