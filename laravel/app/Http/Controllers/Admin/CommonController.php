<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class CommonController extends Controller {

	public function __construct() {
		//验证登陆状态 如果没有登陆则跳转到登陆页
		if (!Session::has("userData")) {
//			return redirect("/login");
			header("Location:/Admin/login");
			exit;
		}
	}

}
