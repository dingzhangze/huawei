<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>登录</title>
<script type="text/javascript">

</script>

<link href="https://hwid1.vmallres.com/CAS/up/common/images/default/hwfavicon.ico" type="image/x-icon" rel="shortcut icon">
<link href="{{asset('/css/home/ec.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/common.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/zh-cn_css1.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/dialog.css')}}" rel="stylesheet" type="text/css">
<script type="text/javascript">var localHttps="https://hwid1.vmall.com/CAS";var currentSiteID="1";</script>
<script src="{{asset('/js/home/jsapi.js')}}" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<script src="{{asset('/js/home/jquery-1.js')}}" id="jsid"></script>
<script src="{{asset('/js/home/ec_002.js')}}"></script>
<script src="{{asset('/js/home/casui.js')}}"></script>
<script src="{{asset('/js/home/ec.js')}}"></script>
<script src="{{asset('/js/home/commonjs.js')}}"></script>
<link rel="stylesheet" type="text/css" href="./css/dialog.css">
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
</head>
<body class="login">

<div class="g">

		<!-- 头部  -->
<div class="customer-header">
	<div class="head_center">


			    <div class="main-logo">
					<img src="{{asset('/images/home/huaweiLogo.png')}}">
				</div>
				<div class="website-name" style="color:#999;">
					<span class="logo_line"></span>
					<b style="font-size: 25px;margin-top:20px;float: left;">|</b>
					<b style="font-size: 23px;margin-top:22px;float: left; margin-left:3px;">华为商城</b>
				</div>


	</div>
</div>
		<!--登录 -->
		<div>
		<div style="background-image: url('/images/home/login_bg.jpg');" class="login_bg_pic">
		</div>
		<div class="login-area login-right">
		   <div class="h">
				<h3 class="login-area-marginTop"><span>欢迎登录华为帐号</span></h3>
			</div>
			<form action="/login" method="post">
				  <input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="b">
				<div class="login-form-marginTop">
					<div class="form-edit-area">
						<table border="0" cellpadding="0" cellspacing="0">
							<tbody>
                                                            <tr>
                                                                <td>{{ session("info") }}</td>
                                                            </tr>
                                                                    <tr><td>
                                                                    @if(count($errors) > 0)
                                                                    @foreach($errors->all() as $e)
                                                                        <center> <li>{{$e}}</li></center>
                                                                    @endforeach
                                                                    @endif
                                                                </td></tr>
                                                            
								<tr>
									<td><label for="login_userName" class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 1px; padding-top: 1px;">
                      <div class="text vam" style="border: medium none; background: transparent none repeat scroll 0% 0%; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1"></div></label>
                      <input style="z-index: 1;" validator="validator11467707383711" autocomplete="off" class="text vam" id="login_userName" name="uname" maxlength="50" tabindex="1" type="text" placeholder="账号">
                      <div id="msg_username"></div>
                  </td>
								</tr>

								<tr>
									<td><label for="login_password" class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 1px; padding-top: 1px;">
                      <div class="text vam" style="border: medium none; background: transparent none repeat scroll 0% 0%; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1"></div></label>
                      <input style="z-index: 1;" validator="validator21467707383711" id="login_password" autocomplete="off" class="text vam" name="password" maxlength="32" tabindex="2" type="password"  placeholder="密码">
                      <div id="msg_password"></div>
                  </td>
								</tr>

								<tr>
									<td class="verify-td">
										<table>
											<tbody><tr>
												<td>
													<label for="randomCode" class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 1px; padding-top: 1px;">
                          <div class="verify vam" style="border: medium none; background: transparent none repeat scroll 0% 0%; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1"></div></label>
                          <input style="z-index: 1;" validator="validator31467707383712" autocomplete="off" class="verify vam" id="randomCode" name="code" maxlength="5" tabindex="3" type="text"  placeholder="不区分大小写">
                          <div id="msg_randowCode"></div>&nbsp;&nbsp;
												</td>
												<td>
													<img class="vam pointer yzm"  src="{{url('/Admin/login/captcha').'/'.rand()}}" alt="验证码：" onclick="this.src = this.src.replace(/\d+$/, '') + Math.random();" width="103px" height="37px">
													&nbsp;&nbsp;
												</td>

												<td>
													<span class="vam" style="margin:0px;" id="randomCodeError"></span>
												</td>
											</tr>
										</tbody></table>
									</td>
								</tr>
								<tr>
									<td class="mt-checkbox">
										<input class="checkbox vam" id="remember_name" name="remember_name" tabindex="4" type="checkbox"><label class="vam" for="remember_name">记住帐号</label>&nbsp;&nbsp;&nbsp;&nbsp;
										<a class="forgot vam" href="javascript:void(0)" onclick="gotoresetpwd()" title="忘记密码？"> 忘记密码？</a>
									</td>
								</tr>
								<tr>
									<td>
									    <div style="border-bottom:1px solid #d7d7d7;margin-bottom:20px"></div>
										<div style="margin-bottom:0px;"><span class="vam error" id="login_msg" style="margin-bottom:5px;display:block"></span></div>
										<input style="width:280px;" class="button-login" id="btnLogin" value="登录" tabindex="5" type="submit"><div id="msg_login"></div>&nbsp;&nbsp;

									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>


				<p class="login-tips" style="margin-top:30px">
					您还没有华为帐号吧？立即
					&nbsp;&nbsp;<a href="{{url('/register')}}" title="免费注册">免费注册</a>
				</p>
                <p class="login-tips inptips4">
                	华为帐号是您用于访问所有华为服务的帐号。使用华为帐号登录后，您将可以使用华为云服务、华为商城、花粉俱乐部、应用市场、EMUI产品、华为网盘和开发者联盟。
                </p>

			</div>
		</form>
		</div>

		</div>
	</div>
<div class="login-foot">
<!-- 底部  -->


	<div class="wp ft">
		<p>

				<a href="#" class="rule" target="_blank">华为帐号隐私声明</a>
				<a href="#" class="rule" target="_blank">最终用户许可协议</a>







			<a href="" class="ifaq" target="_blank">常见问题</a>
		</p>




				<p>Copyright©2011-2016    华为技术有限公司   版权所有   保留一切权利</p>
				<p>苏B2-20070200号           |           苏ICP备09062682号-9</p>





	</div>
</div>
<div id="layer">
	<div class="mc"></div>
</div>

<div id="selectCountryCodeDiv">

</div>




<script src="{{asset('js/home/uc_base.js')}}"></script>
<script src="{{asset('js/home/casui.js')}}"></script>
<script src="{{asset('js/home/authDialog.js')}}"></script>
<script src="{{asset('js/home/login.js')}}"></script>

</body></html>
