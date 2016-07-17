<!DOCTYPE html>
<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>帐号中心</title>

	<link href="https://hwid1.vmallres.com/CAS/up/common/images/default/hwfavicon.ico" type="image/x-icon" rel="shortcut icon">
<link href="{{asset('/css/home/ec.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/common.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/zh-cn_css.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/dialog.css')}}" rel="stylesheet" type="text/css">
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
				<li data-menu="2" class="sel"><a href="/home/userinfo/{{Session::get("userDatas")->id}}/edit">编辑</a></li
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



	<div class="wp">
		<div class="pannel">
			<div class="upic">
				<a href="#" id="uploadImg"><img id="headPic" src="{{$user->avartar}}" height:"160px"="" width="160px"></a>

			</div>

			<div id="upload_dialog_show" style="display:none;"></div>

			<div class="umsg">
				<p class="title">公开信息</p>
				<p class="line">
					用户名：
					<span class="uinfo"><label id="uname">{{$user->uname}}</label></span>
			    </p>

			    <p class="line">
					论坛昵称：
					<span class="uinfo"><label id="forumNickname"></label></span>
			    </p>

				<p class="line">
					性别：
					<span class="uinfo"><label id="gender">{{$user->sex}}</label></span>
				</p>


				  <p class="line">
				  	城市地区：
				  	<span class="uinfo"><label id="cityarea">{{$user->city}}</label></span>
				  </p>

				<p class="title">非公开信息</p>
				<p class="line">
					生日：
					<span><label id="birthday"></label></span>
				</p>

				<p class="line">
					真实姓名：
					<span><label id="relname"></label>{{$user->relname}}</span>
				</p>

				<p class="line">
					手机号码：
					<span><label id="tel"></label>{{$user->tel}}</span>
				</p>

				<p class="line">
					邮箱：
					<span><label id="email"></label>{{$user->email}}</span>
				</p>


			</div>
		</div>
	</div>




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
