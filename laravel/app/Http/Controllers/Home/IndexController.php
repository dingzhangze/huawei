<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //首页导航
        $firstNav=DB::table("admin_category")->where("pid","=","0")->get();
        $nav=Db::table("admin_category")->get();
//        foreach($firstNav as $fn){
//            $subclass=DB::table("admin_category")->where("pid","=", $fn->cid)->get();
//        }
////        dd($cid)
//       
////        dd($firstNav);
//          dd($subclass);
        
      
         
        
       //首页商品类别
         $phs = DB::table("admin_goods")->where("cid","=","46")->take(4)->get();
         $rexiao = DB::table("admin_goods")->where("cid","=","47")->get();
       $phones = DB::table("admin_goods")->leftJoin("admin_category", "admin_goods.cid", "=", "admin_category.cid")->where("pid","=","1")->take(10)->get();
       $pban = DB::table("admin_goods")->leftJoin("admin_category", "admin_goods.cid", "=", "admin_category.cid")->where("pid","=","2")->take(10)->get();
       $pc = DB::table("admin_goods")->leftJoin("admin_category", "admin_goods.cid", "=", "admin_category.cid")->where("pid","=","5")->orderBy("gid","desc")->take(2)->get();
        $zns = DB::table("admin_goods")->leftJoin("admin_category", "admin_goods.cid", "=", "admin_category.cid")->where("pid","=","6")->take(6)->get();
        $pjs = DB::table("admin_goods")->leftJoin("admin_category", "admin_goods.cid", "=", "admin_category.cid")->where("pid","=","7")->take(14)->get();
     //  dd($pjs);
       
        return view("index",["firstNav" => $firstNav ,"nav" => $nav,"phones"=> $phones, "pban" => $pban, "pc" => $pc,"zns"=> $zns,"pjs"=>$pjs,"phs"=>$phs,"rexiao"=>$rexiao]);
        
        
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
    public function destroy($id)
    {
        //
    }
}
