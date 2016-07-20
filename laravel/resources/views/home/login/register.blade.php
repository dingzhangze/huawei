<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>注册_华为帐号
</title> <link href="https://hwid1.vmallres.com/CAS/up/common/images/default/hwfavicon.ico" type="image/x-icon" rel="shortcut icon">
<link href="{{asset('/css/home/ec.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/common.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/zh-cn_css.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/zh-cn.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/dialog.css')}}" rel="stylesheet" type="text/css">

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<link href="{{asset('/css/home/dialog.css')}}" rel="stylesheet" type="text/css">

<style type="text/css">

.selected {
    padding: 10px;
    cursor: pointer;
    position: absolute;
    top: 20px;
    right: 10px;
}

</style>

</head>
<body class="reg">
	 <!-- 头部  -->

<div class="head-background">
	<div class="head_center">


			  	<div class="main-logo">
					<img src="{{url('/images/home/logo2.png')}}">
				</div>
				<div class="website-name" style="color:#fff;">
					<b style="font-size: 23px;margin-top: -4px;float: left;">|</b>
					<b style="font-size: 23px;margin-top: -1px;float: left; margin-left:5px;">华为商城</b>
				</div>


	</div>
</div>
	<!-- <div class="top-div"><p class ="huawei"></p></div> -->
	<div class="wp1 relative">
		<div class="reg-content" id="registerForm">
			<div class="reg-tab">


						<a href="#" class="tab-phone sel"></a>
					 	<a href="#" class="tab-email"> </a>

			</div>
			<div class="login r">
				已有华为帐号
				<a href="{{url('/login')}}" class="login-a" title="登录">登录 </a>▶
			</div>

			<div id="zc">
    <div class="zc_head">注册华为帐号</div>
    <div class="zc_main">
        <table>
        <form action="/register" method="post">

        <input type="hidden" name="_token" value="{{csrf_token()}}" />
			  <div class="zc_main_top">
				<div class="zc_ra1">账户<input type="text" value="" name="uname"></div>
				<div class="zc_ra1">密码<input type="password" value="" name="password"></div>
				<div class="zc_ra2">确认密码<input type="password" value="" name="repassword"></div>

				<div class="zc_ra3">验证码<input type="text" value="" name="code" class="input_4">
				<img class="input_5" src="{{url('/Admin/login/captcha').'/'.rand()}}" onclick="this.src = this.src.replace(/\d+$/, '') + Math.random();" />

				</div>
				<div class="zc_fw">
				<input type="checkbox" value="1" name="agree" checked >同意<a href="#">《华为帐号服务条款、华为隐私政策》</a>
				</div>
				<div class="zc_sub">
				<input type="submit" value="立即注册" name="sub" />
				</div>
			</div>
			<div class="zc_foot">
        {{ session("info") }}
        <ul>
        @if(count($errors) > 0)
            @foreach($errors->all() as $e)
            <li>{{$e}}</li>
            @endforeach
        @endif
        </ul>
			</div>
        </form>
        </table>
    </div>
</div>
	<!-- 底部  -->
<style>

.selectCountryImg {
    display: block;
    width: 30px;
    height: 30px;

}

</style>
<div class="wp1 ft">
	<div class="reg-content">
		<p class="footer">

					<a href="#" class="rule" target="_blank">华为帐号隐私声明</a>
					<a href="#" class="rule" target="_blank">最终用户许可协议</a>







			<a href="#" target="_blank"><em style="font-style: normal">|</em> </a>
      <a style="text-decoration: underline;" target="blank" href="#">常见问题</a>
		</p>




				<p class="footer">Copyright&nbsp;@&nbsp;2011-2016&nbsp;&nbsp;华为软件技术有
限公司&nbsp;&nbsp;版权所有&nbsp;&nbsp;保留一切权利&nbsp;&nbsp;苏B2-20070200
号&nbsp;|&nbsp;苏ICP备09062682号-9</p>

	</div>
</div>
</body></html>
