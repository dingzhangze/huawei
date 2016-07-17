<!DOCTYPE html>
<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>帐号中心</title>

	<link href="https://hwid1.vmallres.com/CAS/up/common/images/default/hwfavicon.ico" type="image/x-icon" rel="shortcut icon">
<link href="{{asset('/css/home/ec.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/common.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/zh-cn_css.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/dialog.css')}}" rel="stylesheet" type="text/css">
<script src="{{ asset('/js/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
<script src="/plugins/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="{{asset('/plugins/uploadify/uploadify.css')}}" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
</head>
<body>


	<div class="topbar">
		<div class="tp wp mkcl">
			<div class="tbr">



						<b class="user"></b>


				<a class="account" href="#">{{Session::get("userDatas")->uname}}</a>
				<span> | </span>
				<a id="logoutUrl" href="{{url('/logout')}}">退出</a>
			</div>



		</div>
	</div>
	<div class="menu wp mkcl">
		<div class="mnr">
			<ul class="nav mkcl">
				<li data-menu="2" class="sel"><a href="/home/userinfo">个人信息</a></li
			</ul>
			<b class="navsign" style="display:none"></b>
		</div>

		<div class="main-logo" style="position:relative;">


			<div class="childLogo">


		     <img src="{{URL('/images/home/HUAWEI.png')}}">

			</div>


			<div class="left">
			  <span class="logo_text">个人中心</span>
			</div>

		</div>
	</div>

	<form action="/home/userinfo" method="post" name="fm"  enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />

		<input type="hidden" name="avartar" id="avartar" value="" />
			<input type="hidden" name="id" value="{{Session::get("userDatas")->id}}" />

	<div class="wp">
		<div class="pannel">


			<div class="upic">
				<a href="#" id="uploadImg"><img id="preview" src="{{$user->avartar}}"   height:"160px"="" width="160px"></a>
				 <p><input type="file" name="upload" id="upload"></p>

			</div>

              <script src="/js/home/user_tx.js"></script>


			<div id="upload_dialog_show" style="display:none;"></div>





			<div class="umsg">
				<p class="title">公开信息</p>
				<p class="line">
					用户名：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="s1" name="uname" value="{{$user->uname}}">
					<span class="uinfo"><label id="nickname"></label></span>
			    </p>

				<p class="line">
					性别：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="男" @if(($user->sex)=="男") checked @endif  id="male" /><label for="male">男</lable>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="sex" value="女" id="male" @if(($user->sex)=="女") checked @endif  /><label>女<label for="female">
				</p>


				  <p class="line">
				  	城市地区：

          <select id="s_province" name="s_province" ></select>  
            <select id="s_city" name="s_city" ></select>  
            <select id="s_county" name="s_county"></select>
            <script class="resources library" src="{{asset('/js/home/area.js')}}" type="text/javascript"></script>

            <script type="text/javascript">_init_area();</script>

            <div id="show"></div>

  <script type="text/javascript">
  var Gid  = document.getElementById ;
    var showArea = function(){
	     Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
	      Gid('s_city').value + " - 县/区" +
	       Gid('s_county').value + "</h3>"
							}
      Gid('s_county').setAttribute('onchange','showArea()');
</script>
				  	<span class="uinfo"><label id="cityarea"></label></span>
				  </p>

				<!--
				<p class="line">
					<a id="signatureLink" href="#" class="more">选择</a>
					个性签名：
					<span class="uinfo"><label id="signature"></label></span>
				</p>
				 -->
				<p class="title">非公开信息</p>
				<!--
				<p class="line">
					<a id="nameLink" href="#" class="more">编辑</a>
					姓：
					<span class="uinfo"><label id="firstname"></label></span>
					名：
					<span class="uinfo"><label id="secondname"></label></span>
				</p>
				 -->
				<p class="line">
					生日：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="s1" name="birth" value="">
					<span><label id="birthday"></label></span>
				</p>

				<p class="line">
					真实姓名：<input type="text" class="s1" name="relname" value="{{$user->relname}}">
					<span><label id="relname"></label></span>
				</p>

				<p class="line">
					手机号码：<input type="text" class="s1" name="tel" value="{{$user->tel}}">
					<span><label id="tel"></label></span>
				</p>

				<p class="line">
					邮箱：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="s1" name="email" value="{{$user->email}}">
					<span><label id="email"></label></span>
				</p>

        <p class="line">
         <input type="submit" class="sub1" value="确定">
       </p>
			</div>
		</div>
	</div>
</form>



<!-- 底部  -->

	<div class="wp ft">
		<p>

				<a href="https://hwid1.vmall.com/CAS/portal/agreements/userPrivacyPolicy/zh-cn_userPrivacyPolicy.html?siteID=1" class="rule" target="_blank">华为帐号隐私声明</a>
				<a href="https://hwid1.vmall.com/CAS/portal/agreements/EULA/zh-cn_EULA.html?siteID=1" class="rule" target="_blank">最终用户许可协议</a>







			<a href="https://hwid1.vmall.com/CAS/portal/faq/faq.html" class="ifaq" target="_blank">常见问题</a>
		</p>




				<p>Copyright©2011-2016    华为技术有限公司   版权所有   保留一切权利</p>
				<p>苏B2-20070200号           |           苏ICP备09062682号-9</p>





	</div>

</body></html>
