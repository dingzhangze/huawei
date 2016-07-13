<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="zh-cn">
<script>
var domainMain = 'http://www.vmall.com';
var domainWap = 'http://m.vmall.com';
var domainCart = 'http://cart.vmall.com';
var domainRemark = 'http://remark.vmall.com';
var domainShoppingConfig = 'http://addr.vmall.com';
var imagePath = 'http://res.vmallres.com/20160612/images';
var domainAccount = 'http://www.vmall.com';
var isUseAccount = 'false';
var upBindPhoneAddr = 'http://hwid1.vmall.com:8080/oauth2/userCenter/bindAccount/bindMobileAccount_1.jsp?lang=zh-cn&amp;themeName=cloudTheme&amp;reqClientType=26';
</script>
<script>
(function(){
	try
	{
		cookieGet=function(a){var f=null;if(document.cookie&&document.cookie!=""){var d=document.cookie.split(";");for(var c=0;c<d.length;c++){var b=(d[c]||"").replace(/^(\s|\u00A0)+|(\s|\u00A0)+$/g,"");if(b.substring(0,a.length+1)==(a+"=")){var e=function(i){i=i.replace(/\+/g," ");var h='()<>@,;:\\"/[]?={}';for(var g=0;g<h.length;g++){if(i.indexOf(h.charAt(g))!=-1){if(i.startWith('"')){i=i.substring(1)}if(i.endWith('"')){i=i.substring(0,i.length-1)}break}}return decodeURIComponent(i)};f=e(b.substring(a.length+1));break}}}return f};
		var uri = location.href;
		//增加产品详情页判断
		var prodReg=/\/\d+\.html/;
		var isProDetail =prodReg.test(uri);
		if(uri == domainMain || uri == (domainMain + "/index.html") || uri == (domainMain + "/")||isProDetail) {
			if(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
				var redirectWap = cookieGet("redirectWap");

				if(!redirectWap == "1" && !isProDetail) {
					window.location.href = domainWap;
				}else if(!redirectWap == "1" && isProDetail)
				{
					var wapUri =domainWap+uri.substring(uri.indexOf("/product"));
					window.location.href=wapUri;
				}
			}
		}
	}
	catch (err){}
})();
</script>
<title>华为手机【报价 价格 大全 怎么样】_华为商城</title>
<meta name="keywords" content="华为手机报价,华为智能手机,华为智能手机报价,">
<meta name="description" content="华为商城是华为旗下面向全国服务的电子商务官网。我们提供最新款的华为智能手机的价格、参数、图片大全等信息。官方品质保证，全国价格最低，欢迎选购！">

<link rel="shortcut icon" href="http://www.vmall.com/favicon.ico">
<link href="{{asset('/css/home/ec3.css')}}" rel="stylesheet" type="text/css">

<link href="{{asset('/css/home/main8.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('/js/home/jsapi.js')}}" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<script src="{{asset('/js/home/jquery-1.js')}}"></script>
<script src="{{asset('/js/home/ec.js')}}"></script>
<script src="{{asset('/js/home/ec_002.js')}}"></script>
<!--[if lt IE 9]><script src="http://res9.vmallres.com/20160612/js/common/html5shiv.js"></script> <![endif]-->
<script src="{{asset('/js/home/share.js')}}"></script>
</head>



<body class="wide">
<div class="top-banner" id="top-banner-block"></div>
<!-- 20130605-qq-彩贝-start -->
<div class="qq-caibei-bar hide" id="caibeiMsg">
	<div class="layout">
		<div class="qq-caibei-bar-tips" id="HeadShow"></div>
		<div class="qq-caibei-bar-userInfo" id="ShowMsg"></div>
	</div>
</div>
<!-- 20130605-qq-彩贝-end -->

<div class="shortcut">
    <div class="layout">
		<div class="s-sub">
			<ul>
				<li class="s-hw"><a href="http://consumer.huawei.com/cn/" target="_blank">华为官网</a></li>
				<li class="s-honor"><a href="http://www.honor.cn/" target="_blank">荣耀官网</a></li>
				<!--
				<li class="s-emui"><a href="http://emui.huawei.com/cn/" target="_blank">EMUI</a></li>
				<li class="s-appstore"><a href="http://appstore.huawei.com/" target="_blank">应用市场</a></li>
				<li class="s-cloud"><a href="http://cloud.huawei.com/cn/contact" target="_blank">云服务</a></li>
				<li class="s-developer"><a href="http://developer.huawei.com/" target="_blank">开发者联盟</a></li>
				-->
				<li class="s-appsoft">
					<div class="s-dropdown">
						<div class="h">
							<a href="http://emui.huawei.com/appsoft/" target="_blank">软件应用</a>
							<s></s>
						</div>
						<div class="b">
							<p><a href="http://emui.huawei.com/cn/" target="_blank">EMUI</a></p>
							<p><a href="http://appstore.huawei.com/" target="_blank">应用市场</a></p>
							<p><a href="http://cloud.huawei.com/" target="_blank">云服务</a></p>
							<p><a href="http://developer.huawei.com/" target="_blank">开发者联盟</a></p>
						</div>
					</div>

				</li><li class="s-club"><a href="http://club.huawei.com/" target="_blank">花粉俱乐部</a></li>
				<li class="s-sr"><a href="javascript:;" onclick="showSelectRegion()">Select Region</a></li>
			</ul>
		</div>
		<div class="s-main">
			<ul>
				<li class="s-login" id="unlogin_status">
						<script>document.write('<a href="#">登录</a>');</script><a href="https://hwid1.vmall.com/casserver/remoteLogin?loginChannel=26000000&amp;reqClientType=26&amp;loginUrl=http%3A%2F%2Fhwid1.vmall.com%3A8080%2Foauth2%2Fportal%2Flogin.jsp&amp;service=http%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3Dhttp%253A%252F%252Fwww.vmall.com%252Flist-36" rel="nofollow">登录</a>
						&nbsp;&nbsp;&nbsp;<a href="#" rel="nofollow">注册</a>
				</li>
				<li class="s-user hide" id="login_status">
					<!--
						ie6下鼠标悬停追加ClassName： hover
						示例：[ s-dropdown hover ]
					-->
					<div class="s-dropdown">
						<div class="h">
							<a href="http://www.vmall.com/member?t=14683240080851468324177815" id="customer_name" rel="nofollow" timetype="timestamp" class="link-user"></a>
							 <em class="vip-state" id="vip-info">
								<a class="link-noAct" href="http://www.vmall.com/member/account" id="vip-inActive" title="请完善个人信息，即刻享受会员特权">去激活</a>
								<a href="http://www.vmall.com/member/point" title="V0" id="vip-Active"><i class="icon-vip-level-0"></i>&nbsp;</a>
								<a title="实名认证" id="authentication" href="http://www.vmall.com/authmember/accesstoken"></a>
							</em>
							<s></s>
						</div>
						<div class="b">
							<p><a href="https://hwid1.vmall.com/oauth2/userCenter/hwAccount?reqClientType=26&amp;loginChannel=26000000&amp;themeName=cloudTheme" target="_blank" id="user-center">我的华为帐号</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://www.vmall.com/account/logout">退出</a></p>
						</div>
					</div>
				</li>
				<li class="s-myOrders">
					<a href="http://www.vmall.com/member/order?t=14683240080851468324177815" rel="nofollow" timetype="timestamp">我的订单</a>
				</li>
				<li class="s-promo"><a href="http://www.vmall.com/priority" rel="nofollow">V码(优购码)</a></li>
				<li class="s-hwep hide" id="preferential"></li>
				<li class="s-mobile"><a href="http://www.vmall.com/appdownload" target="_blank">手机版</a></li>
				<li class="s-sitemap">
					<div class="s-dropdown ">
						<div class="h">
							<a href="javascript:;">网站导航</a>
							<s></s>
						</div>
						<div class="b">
							<p><a href="http://www.vmall.com/help/index.html">帮助中心</a></p>
							<p><a href="http://consumer.huawei.com/minisite/HiSuite_cn/" target="_blank">PC软件</a></p>
							<p><a href="http://vmall.118100.cn/" target="_blank">数字音乐</a></p>
							<p><a href="http://www.hwtrip.com/" target="_blank">爱旅</a></p>
							<p><a href="http://dbank.vmall.com/" target="_blank">华为网盘</a></p>
						</div>
					</div>
				</li>
			</ul>
		</div>
    </div>
</div>


<script>
ec.load("ec.box" , {loadType : "lazy"});
/**
*功能：给鼠标移动到s-dropdown上面的时候，记得给他多添加一个hover类样式
*目的是兼容ie6
*@author 李峰
*/
$(function(){
	$(".s-dropdown").hover(function(){
		$(this).addClass("hover");
	},function(){
		$(this).removeClass("hover");
	});
	var maxcolor=$('.top-banner-max').find('p').children('a').css("background-color");
	var mincolor=$('.top-banner-min').find('p').children('a').css("background-color");

	$('.top-banner-max').css({"background-color":maxcolor,overflow:"hidden"});
	$('.top-banner-min').css({"background-color":mincolor,overflow:"hidden"});
});

//显示全球导航选择层
function showSelectRegion()
{
    var box = new ec.box($("#selectRegion-tips").val(),{
			boxid : "region-select-box",
			boxclass : "ol_box_4",
			title : "Please select your country or region.",
			width : 940,
			showButton : false,
			autoPosition:false,
			onopen: function(box){
			},
			onok : function(box){
			},
			oncancel : function(box){
				box.close();
				$(".ol_box_mask").remove();
			},
			onclose : function(box){
				$(".ol_box_mask").remove();
			}
		});

		box.open();

				$(".box-title").css("font-size","28px").css("font-weight","normal");
				$("#region-select-box").css("height","auto");
				$(".ol_box_mask").click(function(){box.close();});

				$(".box-header").unbind("mousemove");
				$(".box-header").unbind("mousedown");

				var divTop=document.getElementById("region-select-box").offsetTop;
				$("#region-select-box").mousedown(function (e) {
					var e=e||window.event;
					var region = document.getElementById("region-select-box");

					var leftX = e.clientX - region.offsetLeft;
					var topY = e.clientY - region.offsetTop;
					$("#region-select-box").mousemove(function (event) {
					 var e=event||window.event;
					  var left=	e.clientX - leftX;
					  var top=e.clientY - topY;

					  if(e.clientX - leftX<20-region.offsetWidth){
					  left=20-region.offsetWidth;
					  }
					  if(e.clientY - topY<20-region.offsetHeight){
					  top=20-region.offsetHeight;
					  }

					 if(e.clientY - topY+20>=$(window).height()){
					  top=$(window).height() - 20;
					  }
					  if(e.clientX - leftX+20>=$(window).width()){
					  left=$(window).width() - 20;
					  }
					  $("#region-select-box").css({"left": left, "top": top});
					  divTop=top;

					});
				});
				$("#region-select-box").mouseup(function () {
				$("#region-select-box").unbind("mousemove");
				});
            $(window).scroll(function () {
                $("#region-select-box").offset({ top: divTop });
            });
}

</script>
<header class="header">
	<div class="layout">
		<!-- 21030909-logo-start -->
		<div class="logo logo-index"><a href="http://www.vmall.com/index.html" title="Vmall.com - 华为商城"><img src="{{url('/images/home/newLogo.png')}}" alt="Vmall.com - 华为商城"></a></div><!-- 21030909-logo-start -->
		<!-- 20130909-搜索条-焦点为search-form增加className:hover -start -->
		<div class="searchBar">
			<!-- 页头热门搜索 -->
			<div class="searchBar-form" id="searchBar-area">
				<form method="get" onsubmit="return search(this)">
					<label for="search-kw" class="text" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; color: rgb(153, 153, 153);">荣耀8</label><input autocomplete="off" style="z-index: 1;" class="text" maxlength="100" id="search-kw" type="text"><input class="button" value="搜索" type="submit">
					<input id="default-search" value="荣耀8" type="hidden">
				</form>
			</div>

				<div class="searchBar-key">
	<b>热门搜索：</b>

		<a href="http://www.vmall.com/search?keyword=V8" target="_blank">V8</a>


		<a href="http://www.vmall.com/search?keyword=5A" target="_blank">5A</a>


		<a href="http://www.vmall.com/search?keyword=5X" target="_blank">5X</a>


		<a href="http://www.vmall.com/search?keyword=HUAWEI%20P9" target="_blank">HUAWEI P9</a>


		<a href="http://www.vmall.com/search?keyword=5C" target="_blank">5C</a>


		<a href="http://www.vmall.com/search?keyword=%E5%BF%AB%E5%85%85%E7%A7%BB%E5%8A%A8%E7%94%B5%E6%BA%90" target="_blank">快充移动电源</a>

</div>

		</div><!-- 20130909-搜索条-end -->
		<!-- 21030910-头部-工具栏-start -->
		<div class="header-toolbar">
			<!-- 21030910-头部-工具栏-焦点为header-toolbar-item增加ClassName:hover -->
			<div class="header-toolbar-item" id="header-toolbar-imall">
				<!-- 21030909-我的商城-start -->
				<div class="i-mall">
					<div class="h"><a href="http://www.vmall.com/member?t=14683240080851468324177815" rel="nofollow" timetype="timestamp">我的商城</a>
					<i></i><s></s><u></u></div>
					<div style="display: none;" class="b" id="header-toolbar-imall-content">
						<div class="i-mall-prompt" id="cart_unlogin_info">
							<p>你好，请&nbsp;&nbsp;<script>document.write('<a href="/account/login?url='+encodeURIComponent(window.location.pathname)+'"  rel="nofollow">登录</a>');</script><a href="http://www.vmall.com/account/login?url=%2Flist-36" rel="nofollow">登录</a> | <a href="http://www.vmall.com/account/register" rel="nofollow">注册</a></p>
						</div>
						<div class="i-mall-uc " id="cart_login_info">
							<ul>
								<li><a href="http://www.vmall.com/member/order?t=14683240080851468324177815" rel="nofollow" timetype="timestamp">我的订单</a></li>
								<li><a href="http://www.vmall.com/member/order?t=14683240080851468324177815&amp;tab=unpaid" timetype="timestamp">待支付</a><span id="toolbar-orderWaitingHandleCount" class="hide">0</span></li>
								<li><a href="http://www.vmall.com/member/order?t=14683240080851468324177815&amp;tab=nocomment" timetype="timestamp">待评论</a><span id="toolbar-notRemarkCount" class="hide">0</span></li>
								<li><a href="http://www.vmall.com/member/coupon?t=14683240080851468324177815" timetype="timestamp">优惠券</a><span id="toolbar-couponCount" class="hide">0</span></li>
								<li><a href="http://www.vmall.com/member/msg?t=14683240080851468324177815" timetype="timestamp">站内信</a><span id="toolbar-newMsgCount" class="hide">0</span></li>
							</ul>
						</div>
						<!-- 页头会员专享信息 -->
						<div class="i-mall-event ">
							<p><a href="http://www.vmall.com/notice-657"><img src="./css/20160127095348354.jpg" alt="特权频道"></a></p>
						</div>
					</div>
				</div><!-- 21030909-我的商城-end -->
			</div>
			<div class="header-toolbar-item" id="header-toolbar-minicart">
				<!-- 21030909-迷你购物车-start -->
				<div class="minicart">
					<div class="h" id="header-toolbar-minicart-h"><a href="http://cart.vmall.com/cart/cart.html?t=14683240080851468324177815" rel="nofollow" timetype="timestamp">我的购物车<span><em id="header-cart-total">0</em><b></b></span></a><i></i><s></s><u></u></div>
					<div class="b" id="header-toolbar-minicart-content">
						<div class="minicart-pro-empty" id="minicart-pro-empty">
							<span class="icon-minicart">您的购物车是空的，赶紧选购吧！</span>
						</div>
						<div style="display: none;" id="minicart-pro-list-block">
						<ul class="minicart-pro-list" id="minicart-pro-list">

						</ul>
						</div>
						<div style="display: none;" class="minicart-pro-settleup" id="minicart-pro-settleup">
							<p>共<em id="micro-cart-total">0</em>件商品，金额合计<b id="micro-cart-totalPrice">¥&nbsp;0</b></p>
							<a class="button-minicart-settleup" href="http://cart.vmall.com/cart/cart.html">去结算</a>
						</div>
					</div>
				</div><!-- 21030909-迷你购物车-end -->
			</div>

		</div><!-- 21030910-头部-工具栏-start -->
		<!-- 20140910-头部-二维码-start -->
		<div class="header-qrcode">
			<div style="width: 91px; height: 96px;" class="ec-slider" id="ec-erweima">
				<ul style="width: 91px; height: 96px;" class="ec-slider-list">
					<li style="width: 91px; height: 96px; position: absolute; display: list-item;" class="ec-slider-item">
						<p><a href="http://www.vmall.com/appdownload" target="blank" title="专享周三荣耀专场"><img src="{{url('/images/home/qrcode_vmall_app01.png')}}" alt="华为商城官方客户端"></a></p>
						<p><a href="http://www.vmall.com/appdownload" target="blank"><span>专享周三荣耀专场</span></a></p>
					</li>
					<li style="width: 91px; height: 96px; position: absolute; display: none;" class="ec-slider-item">
						<p><a href="http://www.vmall.com/appdownload" target="blank" title="微信扫码关注我们"><img src="{{url('/images/qrcode_vmall_wechat01.jpg')}}" alt="华为商城官方微信"></a></p>
						<p><a href="http://www.vmall.com/appdownload" target="blank"><span>微信扫码关注我们</span></a></p>
					</li>
				</ul>
			<div class="ec-slider-nav"><span class="current"></span><span class=""></span></div><a style="display: none;" class="button-slider-prev" href="javascript:;"></a><a style="display: none;" class="button-slider-next" href="javascript:;"></a></div>
		</div><!-- 20140910-头部-二维码-end -->
	</div>
</header><!-- 21030909-头部-end -->



<div class="naver-main">
	<div class="layout">
		<!-- 20140823-分类-start -->
		<div class="category" id="category-block">
			<!-- 20140822-分类-start -->
	<div class="h">
		<h2>全部商品</h2>
		<i class="icon-category"></i>
	</div>
	<div class="b">
		<ol class="category-list">
			<!-- 鼠标悬停增加ClassName： hover -->
							<li class="category-item ">
					<div class="category-info">
						<h3>
							<a href="http://www.vmall.com/list-36" target="_blank"><span>手机
													</span></a></h3>
								<a href="http://www.vmall.com/list-75" target="_blank"><span>荣耀
																</span></a>
								<a href="http://www.vmall.com/list-77" target="_blank"><span>荣耀畅玩
																</span></a>
								<a href="http://www.vmall.com/list-76" target="_blank"><span>华为 Mate/P系列
																</span></a>
					</div>



								<div class="category-panels children-col-1">
												<ul class="subcate-list children-col-list">
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-75" target="_blank">
													<span>荣耀
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-77" target="_blank">
													<span>荣耀畅玩
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-76" target="_blank">
													<span>华为 Mate/P系列
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-81" target="_blank">
													<span>华为 G/Y系列
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-38" target="_blank">
													<span>运营商合约
																											</span>
												</a>
											</li>
								<dl class="category-banner children-col-2">
									<dt><span>推荐商品</span></dt>
											<dd><a href="http://www.vmall.com/recycle?url=%3Fpid%3D1032" target="_blank">以旧换新
																							</a></dd>
											<dd><a href="http://www.vmall.com/product/2647.html" target="_blank">华为 Mate 8
																							</a></dd>
											<dd><a href="http://www.vmall.com/product/2519.html" target="_blank">荣耀畅玩5X
																							</a></dd>
								</dl>
								</ul>
						</div>
				</li>
				<li class="category-item odd">
					<div class="category-info">
						<h3>
							<a href="http://www.vmall.com/list-40" target="_blank"><span>平板 &amp; 穿戴
													</span></a></h3>
								<a href="http://www.vmall.com/list-41" target="_blank"><span>平板电脑
																</span></a>
								<a href="http://www.vmall.com/list-42" target="_blank"><span>手环
																</span></a>
								<a href="http://www.vmall.com/list-85" target="_blank"><span>手表
																</span></a>
					</div>



								<div class="category-panels children-col-1">
												<ul class="subcate-list children-col-list">
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-41" target="_blank">
													<span>平板电脑
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-42" target="_blank">
													<span>手环
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-85" target="_blank">
													<span>手表
																											</span>
												</a>
											</li>
								<dl class="category-banner children-col-2">
									<dt><span>推荐商品</span></dt>
											<dd><a href="http://www.vmall.com/product/1350.html" target="_blank">荣耀平板
																							</a></dd>
											<dd><a href="http://www.vmall.com/product/2642.html" target="_blank">HUAWEI WATCH
																							</a></dd>
											<dd><a href="http://www.vmall.com/product/2323.html#4989,42" target="_blank">荣耀手环zero
																							</a></dd>
								</dl>
								</ul>
						</div>
				</li>
				<li class="category-item ">
					<div class="category-info">
						<h3>
							<a href="http://www.vmall.com/list-59"><span>笔记本电脑
													</span></a></h3>
								<a href="http://www.vmall.com/list-241" target="_blank"><span>MateBook
																</span></a>
								<a href="http://www.vmall.com/list-247" target="_blank"><span>拓展坞
																</span></a>
								<a href="http://www.vmall.com/list-249" target="_blank"><span>触控笔
																</span></a>
					</div>



								<div class="category-panels children-col-1">
												<ul class="subcate-list children-col-list">
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-241" target="_blank">
													<span>MateBook
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-247" target="_blank">
													<span>拓展坞
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-249" target="_blank">
													<span>触控笔
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-251" target="_blank">
													<span>二合一键盘
																											</span>
												</a>
											</li>
						</ul></div>
				</li>
				<li class="category-item odd">
					<div class="category-info">
						<h3>
							<a href="http://www.vmall.com/list-43"><span>智能家居
													</span></a></h3>
								<a href="http://www.vmall.com/list-44" target="_blank"><span>电力猫
																</span></a>
								<a href="http://www.vmall.com/list-45" target="_blank"><span>路由器
																</span></a>
								<a href="http://www.vmall.com/list-46" target="_blank"><span>电视盒子
																</span></a>
					</div>



								<div class="category-panels children-col-1">
												<ul class="subcate-list children-col-list">
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-44" target="_blank">
													<span>电力猫
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-45" target="_blank">
													<span>路由器
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-46" target="_blank">
													<span>电视盒子
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-97">
													<span>随行wifi
																											</span>
												</a>
											</li>
								<dl class="category-banner children-col-2">
									<dt><span>推荐商品</span></dt>
											<dd><a href="http://www.vmall.com/product/1822.html#3463" target="_blank">荣耀路由
																							</a></dd>
											<dd><a href="http://www.vmall.com/product/1680.html#3102,46" target="_blank">荣耀盒子
																							</a></dd>
								</dl>
								</ul>
						</div>
				</li>
				<li class="category-item ">
					<div class="category-info">
						<h3>
							<a href="http://www.vmall.com/list-47" target="_blank"><span>专属配件
													</span></a></h3>
								<a href="http://www.vmall.com/list-48" target="_blank"><span>保护壳
																</span></a>
								<a href="http://www.vmall.com/list-49" target="_blank"><span>保护套
																</span></a>
								<a href="http://www.vmall.com/list-50" target="_blank"><span>贴膜
																</span></a>
					</div>



								<div class="category-panels children-col-1">
												<ul class="subcate-list children-col-list">
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-48" target="_blank">
													<span>保护壳
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-49" target="_blank">
													<span>保护套
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-50" target="_blank">
													<span>贴膜
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-223">
													<span>盒子遥控器
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-225" target="_blank">
													<span>表带
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-227" target="_blank">
													<span>电容笔
																											</span>
												</a>
											</li>
								<dl class="category-banner children-col-2">
									<dt><span>推荐商品</span></dt>
											<dd><a href="http://www.vmall.com/product/2699.html">荣耀 圈铁耳机
																							</a></dd>
											<dd><a href="http://www.vmall.com/product/2205.html#4519">荣耀小口哨
																							</a></dd>
											<dd><a href="http://www.vmall.com/product/1337.html#2303,51">耐翔 蜂巢 蓝牙耳机
																							</a></dd>
								</dl>
								</ul>
						</div>
				</li>
				<li class="category-item odd">
					<div class="category-info">
						<h3>
							<a href="http://www.vmall.com/list-54" target="_blank"><span>通用配件
													</span></a></h3>
								<a href="http://www.vmall.com/list-229"><span>耳机
																</span></a>
								<a href="http://www.vmall.com/list-55" target="_blank"><span>音箱
																</span></a>
								<a href="http://www.vmall.com/list-56" target="_blank"><span>移动电源
																</span></a>
					</div>



								<div class="category-panels children-col-2">
												<ul class="subcate-list children-col-list">
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-229">
													<span>耳机
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-55" target="_blank">
													<span>音箱
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-56" target="_blank">
													<span>移动电源
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-231">
													<span>自拍杆
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-58" target="_blank">
													<span>充电器/线材
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-83" target="_blank">
													<span>U盘/存储卡
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-233" target="_blank">
													<span>支架
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-235" target="_blank">
													<span>摄像机/镜头
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-239" target="_blank">
													<span>智能硬件
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://www.vmall.com/list-237" target="_blank">
													<span>车载电器
																											</span>
												</a>
											</li>
												</ul>
									<ul class="subcate-list children-col-list">
								<dl class="category-banner children-col-2">
									<dt><span>推荐商品</span></dt>
											<dd><a href="http://www.vmall.com/product/2134.html">小天鹅蓝牙音箱
																							</a></dd>
								</dl>
								</ul>
						</div>
				</li>
				<li class="category-item ">
					<div class="category-info">
						<h3>
							<a href="http://app.vmall.com/" target="_blank"><span>应用市场
													</span></a></h3>
								<a href="http://app.vmall.com/game/list" target="_blank"><span>手机游戏
																</span></a>
								<a href="http://app.vmall.com/" target="_blank"><span>手机应用
																</span></a>
					</div>



								<div class="category-panels children-col-1">
												<ul class="subcate-list children-col-list">
											<li class="subcate-item">
												<a href="http://app.vmall.com/game/list" target="_blank">
													<span>手机游戏
																											</span>
												</a>
											</li>
											<li class="subcate-item">
												<a href="http://app.vmall.com/" target="_blank">
													<span>手机应用
																											</span>
												</a>
											</li>
						</ul></div>
				</li>
		</ol>
	</div>
</div>
<!-- 20140822-分类-end -->

		<!-- 20140823-分类-end -->
		<!-- 20130909-导航-start -->
		<nav class="naver">
				<ul id="naver-list">
			<li class="" id="index"><a href="http://www.vmall.com/index.html" onclick="_paq.push(['trackLink','点击首页活动导航第1位', 'link', '']);ec.code.addAnalytics({hicloud:true});" class="current">

             <span>首 页

					</span></a> </li>
		<li class="" id="huawei"><a href="http://www.vmall.com/huawei" onclick="_paq.push(['trackLink','点击首页活动导航第2位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>华为专区

					</span></a> </li>
		<li id="honor"><a href="http://www.vmall.com/honor" onclick="_paq.push(['trackLink','点击首页活动导航第3位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>荣耀专区

					</span></a> </li>
		<li id="honor"><a href="http://mm.vmall.com/ry8.html" onclick="_paq.push(['trackLink','点击首页活动导航第4位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>荣耀8

			<s><img src="{{url('images/home/hot.png')}}" alt="new"></s>
		</span></a> </li>
		<li class="" id="HUAWEI"><a href="http://www.vmall.com/product/3325.html" onclick="_paq.push(['trackLink','点击首页活动导航第5位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>P9

			<s><img src="{{url('images/home/hot.png')}}" alt="hot"></s>
					</span></a> </li>
		<li id="honor"><a href="http://www.vmall.com/product/186517099.html" onclick="_paq.push(['trackLink','点击首页活动导航第6位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>荣耀V8

			<s><img src="{{url('images/home/hot.png')}}" alt="hot"></s>
					</span></a> </li>
		<li id="peijian"><a href="http://sale.vmall.com/peijian.html" onclick="_paq.push(['trackLink','点击首页活动导航第7位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>配件专区

					</span></a> </li>
		<li><a href="javascript:;"><span>精彩频道</span><i></i></a>
			<ol>
					<li id="honor">
                 <a href="http://www.vmall.com/honor/remind" onclick="_paq.push(['trackLink','点击首页活动导航第8位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">开售提醒</a></li>
					<li id="smrz">
                 <a href="http://www.vmall.com/notice-657" onclick="_paq.push(['trackLink','点击首页活动导航第9位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">实名认证</a></li>
					<li id="honor">
                 <a href="http://www.vmall.com/recycle?url=%3Fpid%3D1032" onclick="_paq.push(['trackLink','点击首页活动导航第10位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">以旧换新</a></li>
					<li id="hyj">
                 <a href="http://www.vmall.com/list-38" onclick="_paq.push(['trackLink','点击首页活动导航第11位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">合约机</a></li>
			</ol>
		</li>
</ul>
<script>
	$(function () {
		$('#naver-list li').hover(function () {
			$(this).addClass('hover');
		},function () {
			$(this).removeClass('hover');
		});

		$('naver-list a').click(function(id){
            alert(id);
        });
	});
</script>

		</nav><!-- 20130909-导航-end -->
		</div>
	</div>

<script>
(function () {
	//所有分类显示隐藏控制
	var isIndex =  false,
		categoryBlock = gid('category-block');

	if(isIndex) return;

	$("#category-block").hover(function(){
		$(this).addClass("category-hover");
	},function(){
		$(this).removeClass("category-hover");
	});

	/*categoryBlock.onmouseover = function () {
		categoryBlock.className = 'category category-hover';
	};
	categoryBlock.onmouseout = function () {
		categoryBlock.className = 'category';
	};*/

}());

/**
*功能：给鼠标移动到category-list li上面的时候，记得给他多添加一个hover类样式
*目的是兼容ie6,以及调整二级分类的弹出框的位置。
*@author 李峰
*/
/**
$(function(){
	$(".category-item").hover(function(){
		$(this).addClass("hover");
		//1.二级分类的top值
		var childrenTop = $(this).offset().top;
		//2.一级分类的top值
		var parentTop = $(".category-list").offset().top;
		//3.二级分类到一级分类顶部的距离
		var top = childrenTop - parentTop;
		//4.二级分类的弹出层的高度
		var childrenHeight = $(this).find(".category-panels").innerHeight();
		//5.一级分类容器的总高度
		var totalHeight = $(".category-list").height();
		alert("childrenTop:"+childrenTop+";parentTop:"+parentTop+";top:"+top+";childrenHeight:"+childrenHeight+";totalHeight:"+totalHeight) ;

		//6.如果二级分类.category-panels的内容高度大于总容量totalHeight,那么.category-panels置顶，然后多余的自动往下延续
		//如果二级分类childrenHeight内容高度(childrenHeight + top )大于totalHeight,那么.category-panels往上移动childrenHeight + top -totalHeight
		if((top + childrenHeight) > totalHeight)
		{
			if(childrenHeight > totalHeight)
			{
				$(this).find(".category-panels").css("top",-top);
			}else{
				//上移动
				var topX = (childrenHeight+top) - totalHeight;
				$(this).find(".category-panels").css("top",-topX);

			}

		}

	},function(){
		$(this).removeClass("hover");
	});
});
 */
</script>
<div class="hr-10"></div>
<div class="g">
