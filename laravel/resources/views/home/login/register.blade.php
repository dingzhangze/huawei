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
<script type="text/javascript">var localHttps="https://hwid1.vmall.com/CAS";var currentSiteID="1";</script>
<script src="{{asset('/js/home/jsapi.js')}}" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<script src="{{asset('/js/home/jquery-1.js')}}" id="jsid"></script>
<script src="{{asset('/js/home/ec_002.js')}}"></script>
<script src="{{asset('/js/home/casui.js')}}"></script>
<script src="{{asset('/js/home/ec.js')}}"></script>
<script src="{{asset('/js/home/commonjs.js')}}"></script>
<script src="{{asset('/js/home/base.js')}}"></script>


<script src="{{asset('/js/home/casui.js')}}"></script>
<script src="{{asset('/js/home/uc_base.js')}}"></script>

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
				<a href="#" class="login-a" title="登录">登录 </a>▶
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







			<a href="#" target="_blank"><em style="font-style: normal">|</em> </a><a style="text-decoration: underline;" target="blank" href="https://hwid1.vmall.com/CAS/portal/faq/faq.html">常见问题</a>
		</p>




				<p class="footer">Copyright&nbsp;@&nbsp;2011-2016&nbsp;&nbsp;华为软件技术有
限公司&nbsp;&nbsp;版权所有&nbsp;&nbsp;保留一切权利&nbsp;&nbsp;苏B2-20070200
号&nbsp;|&nbsp;苏ICP备09062682号-9</p>

	   <div class="foot-selectCountry-margin">
	     <div style="float:right;right:10px">

		  </div>
	     <div style="float:right;margin-right:10px">
		     <div>
		         <div id="selectedCountry">中国</div>
		     </div>
		  </div>

	  </div>
	</div>
</div>

	<script type="text/javascript">

 		$(document).ready(function(){
 			//drop menu
 			$(".ddrop").click(function() {
 				var open = $(this).data("open");
 				if (!open) {
 				$(this).children('.dpmenu').attr("tabindex", 0).fadeIn(300).focus();
 				$(this).data("open", true);
 				}
 				});

 				$(".dpmenu > li").click(function() {
 				var $p = $(this).closest('.ddrop');
 				$p.children('input').val($(this).data("value"));
 				$p.children('span').text($(this).text());
 				$(this).parent().fadeOut(300, function() {
 				$p.data("open", false);
 				});
 				});

 				$(".dpmenu").blur(function() {
 				$(this).fadeOut(300, function() {
 				$(this).parent().data("open", false);
 				});
 				});


				$(".tick").on("click", function() {
					$(this).data("value") == true ? $(this).trigger("turnoff") : $(this).trigger("turnon");
				}).on("turnon", function() {
					$(this).removeClass("off");
					$(this).data("value", true);
					$(this).trigger("change", [true]);
					if($(".tick.off").length == 0) {
						$("#btnSubmit").addClass("sel");
					}
				}).on("turnoff",function() {
					$(this).addClass("off");
					$(this).data("value", false);
					$(this).trigger("change", [false]);
					$("#btnSubmit").removeClass("sel");
				});

				//调整tips样式
		 		$(".lb_opacity_Class").css("padding-top","8px");

				//下拉列表
		 		var items = [];
		 		if (localInfo.countryCodes)
		 		{
		 			var contrysArr = localInfo.countryCodes.split(",");
		 			$.each(contrysArr, function(n, value) {
		 				var temp = value.split("(");
		 				var key = temp[0];
		 				if(key.indexOf("+")>-1) {
			 				key = key.replace("+", "00");
		 				}

		 				if (key) {
			 				var item = {
			 					value:key,
			 					label:value
			 				};
		 					items.push(item);
		 				}
		 			});

		 		}
		 		$('#input_languageCode').DropList({
		 			items: items,
		 			defaultValue:localInfo.default_country_code,
		 			onChange: function(key, value) {
		 				var temp = value.split("(");
		 				if (temp.length > 1)
		 				{
		 					$("#countryCode").val(temp[0]);
		 					var phone = $("#username").val();
		 					if(phone != "") {
		 						checkLengthByCountry($("#countryCode").val(), $("#username"), "#msg_phone", rss.error);
			 					if(!valiMobile(phone))
			 					{
			 						showError($("#msg_phone"), rss.error);
			 						return;
			 					}
		 					}
		 				}
		 			}
		 	    });

		 		//页面加载时获取国家列表
		 		//getIPCountry();
		 		getCountryRegion();
		 		displayCountry();
	 	});
 	</script>


</body></html>
