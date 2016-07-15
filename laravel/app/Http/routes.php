<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//前台首页
Route::any('/', "home\IndexController@index");
//前台注册
Route::get('/register',"home\LoginController@create");
Route::post("/register","home\LoginController@store");
//前台登陆
Route::get('/login',"home\LoginController@index");
Route::post('/login',"home\LoginController@logTodo");
Route::get("/logout", "home\LoginController@logout");

//前台用户信息
Route::resource("/home/userinfo", "Home\UserController");
Route::get( "/home/userinfo", "home\UserController@index");
Route::post("/home/userinfo/tx","home\UserController@tx");




//前台商品列表
Route::resource("/Home/goodslist", "Home\IndexController");
//Route::get('/Home/goodslist/{id}/show',"Home\IndexController@show");
Route::post('/Home/goodslist/sou',"Home\IndexController@sou");
Route::post("/Home/goodslist/comment","Home\IndexController@comment");

//消息提示
Route::get("/tips", function () {
    return view("errors.tips");
});

//后台首页
Route::get('/Admin',"Admin\IndexController@index");
//后台登陆
Route::get("/Admin/login", "Admin\LoginController@index");
Route::post("/Admin/login/logTodo", "Admin\LoginController@logTodo");
//获取验证码的地址
Route::get("/Admin/login/captcha/{tmp}", "Admin\LoginController@captcha");
Route::get("/Admin/login/logout", "Admin\LoginController@logout");
Route::post("/Admin/user/avartar", "Admin\UserController@avartar");
//前台会员模块
 Route::resource("/Admin/Huser","Admin\HUserController");
//用户模块
Route::resource("/Admin/user", "Admin\UserController");
Route::match(["get", "post"], "Admin/user", "Admin\UserController@index");
Route::post("/Admin/user/store", "Admin\UserController@store");
Route::post("/Admin/user/setGroup", "Admin\UserController@setGroup");
Route::get("/Admin/user/delete/{id}", "Admin\UserController@destroy");

//分组模块
Route::resource("/Admin/group", "Admin\GroupController");
Route::post("/Admin/group/setRule", "Admin\GroupController@setRule");
Route::get("/Admin/group/delete/{id}", "Admin\GroupController@destroy");

//权限管理的处理
Route::resource("/Admin/rule","Admin\RuleController");
Route::post("/Admin/Rule/multi", "Admin\RuleController@multi");
Route::get("/Admin/rule/show/{id}", "Admin\RuleController@show");

//分类模块
Route::resource("/Admin/category", "Admin\CategoryController");
Route::get("/Admin/category/setIsNav/isNav/{isNav}/cid/{cid}", "Admin\CategoryController@setIsNav");
Route::get("/Admin/category/child/{cid}", "Admin\CategoryController@create");
Route::get("/Admin/category/delete/{cid}", "Admin\CategoryController@destroy");

//商品模块
Route::resource("/Admin/goods", "Admin\GoodsController");
Route::post("/Admin/goods/upload", "Admin\GoodsController@upload");
Route::get("/Admin/goods/delete/{id}", "Admin\GoodsController@destroy");

//商品详情图片上传
Route::post("/Admin/goods/thum", "Admin\GoodsController@thum");
Route::post("/Admin/goods/im1", "Admin\GoodsController@im1");
Route::post("/Admin/goods/im2", "Admin\GoodsController@im2");
Route::post("/Admin/goods/details", "Admin\GoodsController@details");

//咨询模块
Route::resource("/Admin/Comment", "Admin\CommentController");
Route::get("/Admin/Comment", "Admin\CommentController@index");
