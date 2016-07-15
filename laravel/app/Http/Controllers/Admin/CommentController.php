<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Session,Validator;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $comment=DB::table("admin_goods_comment")->get();
        $id=$comment[0]->gid;
//        dd($id);
        $goods=DB::table("admin_goods")->where("gid",$id)->lists("name");
//        dd($goods);
       return view("admin.Comment.index",["comment"=>$comment,"goods"=>$goods]);
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except("_token","comment");
        $data["rdatetime"] = date("Y-m-d H:i:s");
//        dd($data);
        $id=$data["id"];
//        dd($id);
        if (false !== $insertID = DB::table("admin_goods_comment")->where("id",$id )->update($data)) {
             return redirect("/tips")->with(["info" => "回复成功! ID:" . $insertID, "url" => "/Admin/Comment"]);
         } else {
             return redirect("/tips")->with(["info" => "出错了!" . $insertID, "url" => "/Admin/Comment"]);
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
        $comments=DB::table("admin_goods_comment")->get();
        $comment=$comments[0];
//        dd($comment);
        return view("admin.Comment.create",compact("comment"));
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
}
