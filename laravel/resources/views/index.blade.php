<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="zh-cn">

<title>华为商城官网-提供华为手机(荣耀V8、荣耀7、华为P9、荣耀5C、荣耀6Plus、华为Mate8、畅玩5X、荣耀5A等)、平板电脑、移动终端等产品的预约和购买</title>
<meta name="description" content="华为商城是华为旗下面向全国服务的电子商务平台官网，我们提供正品华为手机(华为P9、华为Mate8、荣耀V8、华为P8、荣耀7、荣耀畅玩5X、荣耀6Plus、荣耀畅玩4C、荣耀X2、荣耀畅玩4X、荣耀4A等)、平板电脑、配件等全新华为产品，品质保证！">
<meta name="keywords" content="华为手机,华为官网,华为,荣耀7,荣耀畅玩5X,荣耀畅玩4C,荣耀6Plus,华为P9">
 <meta name="mobile-agent" content="format=xhtml;url=http://m.vmall.com/">
<meta property="wb:webmaster" content="f62bd8cc2f7d9778">
<link rel="shortcut icon" href="http://www.vmall.com/favicon.ico">
<link href="{{asset('/css/home/ec2.css')}}" rel="stylesheet" type="text/css">

<link href="{{asset('/css/home/index.css')}}" rel="stylesheet" type="text/css">

</head>

<body class="wide">
<div class="shortcut">
    <div class="layout">
		<div class="s-sub">
			<ul>
				<li class="s-hw"><a href="" target="_blank">华为官网</a></li>
				<li class="s-honor"><a href="" target="_blank">荣耀官网</a></li>

				<li class="s-appsoft">
					<div class="s-dropdown">
						<div class="h">
							<a href="" target="_blank">软件应用</a>
							<s></s>
						</div>
						<div class="b">
							<p><a href="#" target="_blank">EMUI</a></p>
							<p><a href="#" target="_blank">应用市场</a></p>
							<p><a href="#" target="_blank">云服务</a></p>
							<p><a href="#" target="_blank">开发者联盟</a></p>
						</div>
					</div>

				</li><li class="s-club"><a href="#" target="_blank">花粉俱乐部</a></li>
				<li class="s-sr"><a href="javascript:;" onclick="showSelectRegion()">Select Region</a></li>
			</ul>
		</div>
		<div class="s-main">
			<ul>
          @if(empty(Session::get("userDatas")))
				<li class="s-login" id="unlogin_status">

						<a href="{{url('/login')}}" rel="nofollow">登录</a>
						&nbsp;&nbsp;&nbsp;<a href="{{url('/register')}}" rel="nofollow">注册</a>
				</li>
          @else
				<li class="s-user " id="login_status">

					<div class="s-dropdown">
						<div class="h">
              <a href="{{url('/home/userinfo')}}" id="customer_name" rel="nofollow" timetype="timestamp" class="link-user">您好, <strong>{{Session::get("userDatas")->uname}}</strong></a>
							 <em class="vip-state" id="vip-info">
								<a href="#" title="V0" id="vip-Active"><i class="icon-vip-level-0"></i>&nbsp;</a>
								<a title="实名认证" id="authentication" href="#"></a>
							</em>
							<s></s>
						</div>
						<div class="b">
							<p><a href="{{url('/home/userinfo')}}" target="_blank" id="user-center">我的华为帐号</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="{{url('/logout')}}">退出</a></p>
						</div>
					</div>

				</li>
        @endif
				<li class="s-myOrders">
					<a href="{{url('/Home/member/Myorder')}}" rel="nofollow" timetype="timestamp">我的订单</a>
				</li>
				<li class="s-promo"><a href="#" rel="nofollow">V码(优购码)</a></li>
				<li class="s-hwep hide" id="preferential"></li>
				<li class="s-mobile"><a href="#" target="_blank">手机版</a></li>
				<li class="s-sitemap">
					<div class="s-dropdown ">
						<div class="h">
							<a href="javascript:;">网站导航</a>
							<s></s>
						</div>
						<div class="b">
							<p><a href="">帮助中心</a></p>
							<p><a href="" target="_blank">PC软件</a></p>
							<p><a href="" target="_blank">数字音乐</a></p>
							<p><a href="" target="_blank">爱旅</a></p>
							<p><a href="" target="_blank">华为网盘</a></p>
						</div>
					</div>
				</li>
			</ul>
		</div>
    </div>
</div>

<textarea id="selectRegion-tips" style="display: none;">
</textarea>
<!-- <script src="./js/base1.js"></script> -->

<header class="header">
	<div class="layout">
		<!-- 21030909-logo-start -->
		<div class="logo logo-index"><a href="{{url('/')}}" title="Vmall.com - 华为商城"><img src="{{url('/images/home/newLogo.png')}}" alt="Vmall.com - 华为商城"></a></div><!-- 21030909-logo-start -->
		<!-- 20130909-搜索条-焦点为search-form增加className:hover -start -->
		<div class="searchBar">
			<!-- 页头热门搜索 -->
			<div class="searchBar-form" id="searchBar-area">
                            <form method="post"  action="/Home/goodslist/sou">
					<label for="search-kw" class="text" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; color: rgb(153, 153, 153);"></label>
                                        <input autocomplete="off" style="z-index: 1;" class="text" maxlength="100" id="search-kw" type="text" name="keyword" value="" ><input class="button" value="搜索" type="submit">
					<input id="default-search"  name="_token"  value="{{csrf_token()}}" type="hidden">
				</form>
			</div>

				<div class="searchBar-key">
	<b>热门搜索：</b>

		<a href="#" target="_blank">5A</a>


		<a href="#" target="_blank">荣耀7</a>


		<a href="#" target="_blank">HUAWEI P9</a>


		<a href="#" target="_blank">5C</a>


		<a href="#" target="_blank">5X</a>


		<a href="#" target="_blank">快充移动电源</a>

</div>

		</div><!-- 20130909-搜索条-end -->
		<!-- 21030910-头部-工具栏-start -->
		<div class="header-toolbar">
			<!-- 21030910-头部-工具栏-焦点为header-toolbar-item增加ClassName:hover -->
			<div class="header-toolbar-item" id="header-toolbar-imall">
				<!-- 21030909-我的商城-start -->
				<div class="i-mall">
					<div class="h"><a href="{{url('Home/member')}}" rel="nofollow" timetype="timestamp">我的商城</a>
					<i></i><s></s><u></u></div>
					<div class="b" id="header-toolbar-imall-content">
              @if(empty(Session::get("userDatas")))
						<div class="i-mall-prompt" id="cart_unlogin_info">


							<p>你好，请&nbsp;&nbsp;
                <a href="{{url('/login')}}" rel="nofollow">登录</a> | <a href="{{url('/register')}}" rel="nofollow">注册</a></p>
						</div>
            @else
            <div class="i-mall-prompt" id="cart_unlogin_info">
            <p>您好, <strong>{{Session::get("userDatas")->uname}}</strong></p>
            </div>
            <div class="i-mall-uc " id="cart_login_info">
							<ul>
								<li><a href="{{url('/Home/member/Myorder')}}" rel="nofollow" timetype="timestamp">我的订单</a></li>
								<li><a href="#" timetype="timestamp">待支付</a><span id="toolbar-orderWaitingHandleCount" class="hide">0</span></li>
								<li><a href="#" timetype="timestamp">待评论</a><span id="toolbar-notRemarkCount" class="hide">0</span></li>
								<li><a href="#" timetype="timestamp">优惠券</a><span id="toolbar-couponCount" class="hide">0</span></li>
								<li><a href="#" timetype="timestamp">站内信</a><span id="toolbar-newMsgCount" class="hide">0</span></li>
							</ul>
						</div>
            @endif
						
						<!-- 页头会员专享信息 -->

						<div class="i-mall-event ">
							<p><a href=""><img src="./images/20160127095348354.jpg" alt="特权频道"></a></p>
						</div>

					</div>
				</div><!-- 21030909-我的商城-end -->
			</div>
			<div class="header-toolbar-item" id="header-toolbar-minicart">
				<!-- 21030909-迷你购物车-start -->
				<div class="minicart">

					<div class="h" id="header-toolbar-minicart-h"><a href="{{url('/home/shopcar')}}" rel="nofollow" timetype="timestamp">我的购物车<span><em id="header-cart-total">1</em><b></b></span></a><i></i><s></s><u></u></div>
					<div class="b" id="header-toolbar-minicart-content">
						<div style="display: none;" class="minicart-pro-empty" id="minicart-pro-empty">
							<span class="icon-minicart">您的购物车是空的，赶紧选购吧！</span>
						</div>
						
					</div>

				</div><!-- 21030909-迷你购物车-end -->
			</div>

		</div><!-- 21030910-头部-工具栏-start -->
		<!-- 20140910-头部-二维码-start -->
		<div class="header-qrcode">
			<div style="width: 91px; height: 96px;" class="ec-slider" id="ec-erweima">
				<ul style="width: 91px; height: 96px;" class="ec-slider-list">
					<li style="width: 91px; height: 96px; position: absolute;" class="ec-slider-item">
						<p><a href="" target="blank" title="专享周三荣耀专场"><img src="{{url('/images/home/qrcode_vmall_app01.png')}}" alt="华为商城官方客户端"></a></p>
						<p><a href="" target="blank"><span>专享周三荣耀专场</span></a></p>
					</li>
					<li style="width: 91px; height: 96px; display: none; position: absolute;" class="ec-slider-item">
						<p><a href="" target="blank" title="微信扫码关注我们"><img src="{{url('/images/qrcode_vmall_wechat01.jpg')}}" alt="华为商城官方微信"></a></p>
						<p><a href="" target="blank"><span>微信扫码关注我们</span></a></p>
					</li>
				</ul>
			<div class="ec-slider-nav"><span class="current"></span><span></span></div><a style="display: none;" class="button-slider-prev" href="javascript:;"></a><a style="display: none;" class="button-slider-next" href="javascript:;"></a></div>
		</div><!-- 20140910-头部-二维码-end -->
	</div>
</header><!-- 21030909-头部-end -->

<textarea class="hide" id="ec-binding-phone">

</textarea><!-- 导航 -->
<div class="naver-main">
	<div class="layout">
		<!-- 20140823-分类-start -->
		<div class="category category-index" id="category-block">
			<!-- 20140822-分类-start -->
	<div class="h">
		<h2>全部商品</h2>
		<i class="icon-category"></i>
	</div>
	<div class="b">
		<ol class="category-list">
			<!-- 鼠标悬停增加ClassName： hover -->
                        @foreach ($firstNav as $fNav)
			<li class="category-item ">
                            <div class="category-info">
				<h3><a href="{{url('/Home/goodslist/'.$fNav->cid.'/edit')}}" target="_blank"><span>{{$fNav->cname}}</span></a></h3>

                                 @foreach($nav as $fn)
                                 @if(($fn->pid)==($fNav->cid)&&($fn->isNav)=="Y")

                                <a href="{{url('/Home/goodslist/'.$fn->cid.'/edit')}}"><span>{{$fn->cname}}</span></a>

                                @endif
                                @endforeach
                            </div>
                                <div class="category-panels children-col-1">
                                    <ul class="subcate-list children-col-list">
                                        @foreach($nav as $fn)
                                             @if(($fn->pid)==($fNav->cid))
                                        <li class="subcate-item">
                                              <a href="{{url('/Home/goodslist/'.$fn->cid.'/edit')}}" target="_blank"><span>{{$fn->cname}}</span></a>
                                        </li>
                                         @endif
                                          @endforeach
                                    </ul>
                                </div>

			</li>
                        @endforeach
		</ol>
	</div>
</div>
<!-- 20140822-分类-end -->

		<!-- 20140823-分类-end -->
		<!-- 20130909-导航-start -->
		<nav class="naver">
				<ul id="naver-list">
			<li id="index"><a href="{{url('/')}}" onclick="_paq.push(['trackLink','点击首页活动导航第1位', 'link', '']);ec.code.addAnalytics({hicloud:true});" class="current">

             <span>首 页

					</span></a> </li>
		<li id="huawei"><a href="" onclick="_paq.push(['trackLink','点击首页活动导航第2位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>华为专区

					</span></a> </li>
		<li id="honor"><a href="" onclick="_paq.push(['trackLink','点击首页活动导航第3位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>荣耀专区

					</span></a> </li>
		<li id="honor"><a href="" onclick="_paq.push(['trackLink','点击首页活动导航第4位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>荣耀品牌日

			<s><img src="{{url('images/home/hot.png')}}" alt="hot"></s>

					</span></a> </li>
		<li id="honor"><a href="" onclick="_paq.push(['trackLink','点击首页活动导航第5位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>荣耀V8



			<s><img src="{{url('images/home/hot.png')}}" alt="hot"></s>

					</span></a> </li>
		<li id="HUAWEI"><a href="" onclick="_paq.push(['trackLink','点击首页活动导航第6位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>P9



			<s><img src="{{url('images/home/hot.png')}}" alt="hot"></s>

					</span></a> </li>
		<li id="peijian"><a href="" onclick="_paq.push(['trackLink','点击首页活动导航第7位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>配件专区

					</span></a> </li>
		<li><a href="javascript:;"><span>精彩频道</span><i></i></a>
			<ol>
					<li id="honor">
                 <a href="" onclick="_paq.push(['trackLink','点击首页活动导航第8位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">开售提醒</a></li>
					<li id="smrz">
                 <a href="" onclick="_paq.push(['trackLink','点击首页活动导航第9位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">实名认证</a></li>
					<li id="honor">
                 <a href="" onclick="_paq.push(['trackLink','点击首页活动导航第10位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">以旧换新</a></li>
					<li id="hyj">
                 <a href="" onclick="_paq.push(['trackLink','点击首页活动导航第11位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">合约机</a></li>
			</ol>
		</li>
</ul>


		</nav><!-- 20130909-导航-end -->
		</div>
	</div>


<!-- 20130904-热门板-start -->
<div class="hot-board">

	<div style="width: 100%; height: 448px;" class="ec-slider" id="index_slider">
	<img class="qwe" src="images/folder/10.jpg" height="448px" style="margin-left:-300px; position: absolute;
"/>
	<div class="ec-slider-nav-1">
	<span onclick="slider.flag = 0;" >1</span>
	<span onclick="slider.flag = 1;" >2</span>
	<span onclick="slider.flag = 2;" >3</span>
	<span onclick="slider.flag = 3;" >4</span>
	<span onclick="slider.flag = 4;" >5</span>
	<span onclick="slider.flag = 5;" >6</span>
	<span onclick="slider.flag = 6;" >7</span>
	<span onclick="slider.flag = 7;" >8</span>
	<span onclick="slider.flag = 8;" >9</span>
	<span onclick="slider.flag = 9;" >10</span>
	</div>
	<script>
			var slider = {
				arr : ['1.jpg', '2.jpg', '3.jpg', '4.png', '5.jpg', '6.jpg', '7.jpg', '8.jpg','9.jpg', '10.jpg'],
				flag : 0,
				start : function () {
					setInterval(slider.nextFrame, 3000);
				},
				nextFrame :function () {
					document.getElementsByClassName("qwe")[0].src = "images/folder/" + slider.arr[slider.flag%slider.arr.length];

					var lis = document.getElementsByClassName("ec-slider-nav-1")[0].getElementsByTagName("span");

					for (var i = 0; i < lis.length; i++) {
						if (i == slider.flag%slider.arr.length) {
							lis[i].style.backgroundColor = "#cf2b33";

						} else {
							lis[i].style.backgroundColor = "";

						}
					}
					slider.flag++;
				}
			};

			slider.start();
		</script>
                <a style="display: none;" class="button-slider-prev" href="javascript:;"></a>
                <a style="display: none;" class="button-slider-next" href="javascript:;"></a>

	<!--ads end-->
</div><!-- 20130904-热门板-end -->
<div class="hr-20"></div>
<div class="layout">
	<div class="fl u-4-3">
<!-- 20130904-频道-优惠-start -->
<div class="channel-favorable">
	<ul class="channel-pro-list" id="main-sale-list">

                   @foreach($phs as $ph)
		<li id="channel-pro-favorable-{{rand(1,4)}}" class="channel-pro-item channel-pro-favorable-item-1" data-activityid="" data-skutype="1" data-skuid="859934072">
			<div class="channel-pro-panels">
				<div class="pro-info">
					<div class="p-img"><a href="{{url('/Home/goodslist/'.$ph->gid)}}" title="{{$ph->name}}" target="_blank"><img src="{{$ph->im}}" alt="荣耀V8"></a></div>
					<div class="p-name"><a href="{{url('/Home/goodslist/'.$ph->gid)}}" title="{{$ph->name}}" target="_blank">
					{{$ph->name}}</a></div>
					<div class="p-shining">
						<div class="p-slogan"></div>
						<div class="p-promotions"></div>
					</div>
					<div class="p-price">
					<em>¥</em><span>{{$ph->price}}</span></div>
					<div class="p-button">
					<a href="{{url('/Home/goodslist/'.$ph->gid)}}" target="_blank" class="channel-button">立即抢购</a>
					</div>
					<div class="p-countdown hide">
						<span class="p-time"></span>
						<span class="p-quantity" style="display:none"></span>
					</div>
					<i class="p-tag"><img src="{{url('/images/home/1460244941377.png')}}" alt=""></i>
				</div>
			</div>
		</li>
                    @endforeach

	</ul>
</div><!-- 20130904-频道-优惠-end -->	</div>
	<div class="fr u-4-1">
<!-- 20130904-频道-促销-start -->
<div class="channel-sale">
	<div style="width: 276px; height: 310px;" class="ec-slider" id="group-slider">
		<ul style="width: 276px; height: 310px;" class="channel-pro-list ec-slider-list" id="slider-sale-list">
					<li style="width: 276px; height: 310px;" class="channel-pro-item ec-slider-item" data-block="slider">
				<p><a textvalue="只支持选中一个链接时生效" target="_blank" href=""><img src="{{url('/images/home/20160612175100190.jpg')}}" title="HUAWEI G9青春版 "></a><br></p>
			</li>
		</ul>
	</div>
</div>

<!-- 20130904-频道-促销-end -->
		<div class="hr-20"></div>
		<!-- 新闻公告-start -->
		<div class="ecnews-area">
			<div class="h">
				<div class="h-tab">
					<ul>
						<li class="current" id="tab-notice"><a href="">公告</a></li>
						<li id="tab-news"><a href="">评测 </a></li>
					</ul>
				</div>
			</div>
			<div class="b">
				<ul id="tab-notice-content">
						<li><a href="" title="【系统升级公告】" target="_blank">【系统升级公告】</a></li>
						<li><a href="" title="【必看】Vmall购机秘籍" target="_blank">【必看】Vmall购机秘籍</a></li>
						<li><a href="" title="【中奖名单】【荣耀618 】购荣耀V8！赢美国FISE观赛游!抽奖" target="_blank">【中奖名单】【荣耀618 】购荣耀V8！赢美国FISE观赛游!抽奖</a></li>
						<li><a href="" title="6月20日-7月19日使用支付宝支付，可赢2999元支付宝红包，每天一个。" target="_blank">6月20日-7月19日使用支付宝支付，可赢2999元支付宝红包，每天一个。</a></li>
						<li><a href="" title="618荣耀年中大促返场72小时" target="_blank">618荣耀年中大促返场72小时</a></li>
				</ul>
				<ul id="tab-news-content" class="hide">
						<li><a href="" title="流滑得让你爱不释手 荣耀V8全面评测" target="_blank">流滑得让你爱不释手 荣耀V8全面评测</a></li>
						<li><a href="" title="荣耀畅玩5C手机上手评测:更贴心的用机体验" target="_blank">荣耀畅玩5C手机上手评测:更贴心的用机体验</a></li>
						<li><a href="" title="时尚新商务 HUAWEI MateBook深度评测" target="_blank">时尚新商务 HUAWEI MateBook深度评测</a></li>
						<li><a href="" title="能打电话的智能手环 华为手环 B3 评测" target="_blank">能打电话的智能手环 华为手环 B3 评测</a></li>
						<li><a href="" title="华为P9真机上手评测：如何做到时尚且强大" target="_blank">华为P9真机上手评测：如何做到时尚且强大</a></li>
				</ul>

			</div>
		</div><!-- 新闻公告-end -->
		<div class="hr-20"></div>
		<!-- 20130909-ad-218*132-start -->
		<div class="banner">
			<p><a target="_blank" href=""><img src="{{url('/images/home/20160622165023742.jpg')}}"></a></p>
		</div><!-- 20130909-ad-218*132-start -->
		<div class="hr-20"></div>
	</div>
</div>
<div class="layout">
	<!-- 20130903-ad-1000*160-start -->
	<div class="banner">

		<!-- 20130903-ad-图片轮换-start --><div class="banner-slideshow">
                    <div style="width: 1200px; height: 160px;" id="m-banner" class="ec-slider">
                        <img class="lunbo" src="images/folder/2-5.jpg" />
                        <div class="ec-slider-nav">
                            <span onclick="sliders.flag = 0;"></span>
                            <span onclick="sliders.flag = 1;"></span>
                            <span onclick="sliders.flag = 2;"></span>
                            <span onclick="sliders.flag = 3;"></span>
                            <span onclick="sliders.flag = 4;"></span>
                        </div>
                        <script>
			var sliders = {
				arr : ['2-1.jpg', '2-2.jpg', '2-3.jpg', '2-4.jpg', '2-5.jpg'],
				flag : 0,
				start : function () {
					setInterval(sliders.nextFrame1, 5000);
				},
				nextFrame1 :function () {
					document.getElementsByClassName("lunbo")[0].src = "images/folder/" + sliders.arr[sliders.flag%sliders.arr.length];
					var lis = document.getElementsByClassName("ec-slider-nav")[0].getElementsByTagName("span");
					for (var i = 0; i < lis.length; i++) {
						if (i == sliders.flag%sliders.arr.length) {
							lis[i].style.class="current";

						} else {
							lis[i].style.class="";

						}
					}
					sliders.flag++;
				}
			};

			sliders.start();
		</script>
                        <a style="display: none;" class="button-slider-prev" href="javascript:;"></a>

	</div><!-- 20130903-ad-1000*160-end -->
</div>
<div class="hr-20"></div>

<div class="layout">
	<!-- 20130904-频道-楼层-start -->
	<div class="channel-floor">
		<div class="h">
			<h2><a href="" title="手机" target="_blank">手机</a></h2>
			<em class="channel-subtitle">华为精品手机</em>
			<ul class="channel-nav">
					<li><a href="" target="_blank">荣耀</a></li>
					<li><a href="" target="_blank">荣耀畅玩</a></li>
					<li><a href="" target="_blank">华为 Mate/P系列</a></li>
					<li><a href="" target="_blank">华为 G/Y系列</a></li>
					<li><a href="" target="_blank">运营商合约</a></li>
			</ul>
		</div>
		<div class="b">
			<ul class="channel-pro-list">
					<li id="channel-pro-1-1" class="channel-pro-item channel-pro-rec-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img"><a href="{{url('/Home/goodslist/'.$rexiao[0]->gid)}}" title="{{$rexiao[0]->name}}" target="_blank" rel="nofollow">
												<img src="{{$rexiao[0]->im}}" style="" alt="">
								</a></div>
								<div class="p-name"><a href="{{url('/Home/goodslist/'.$rexiao[0]->gid)}}" title="{{$rexiao[0]->name}}" target="_blank">
								{{$rexiao[0]->name}}
								</a></div>
								<div class="p-shining">
									<div class="p-slogan">智灵键，创新语音控制</div>
									<div class="p-promotions">原价1799元 直降200元！</div>
								</div>
								<div class="p-price"><em>¥</em><span>{{$rexiao[0]->price}}</span></div>
								<div class="p-button"><a href="{{url('/Home/goodslist/'.$rexiao[0]->gid)}}" target="_blank" class="channel-button" title="立即抢购">立即抢购</a></div>
									<i class="p-tag">
													<img src="{{url('/images/home/1460242398600_003.png')}}" alt="荣耀7 双卡双待双通 移动4G增强版 32GB存储（冰河银）">
									</i>

							</div>
						</div>
					</li>
                                     @foreach($phones as $phone)
					<li id="channel-pro-1-11" class="channel-pro-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img"><a href="{{url('/Home/goodslist/'.$phone->gid)}}" title="{{$phone->name}}" target="_blank" rel="nofollow">
												<img src="{{$phone->im}}" style="" alt="">
								</a></div>
								<div class="p-name">
								<a href="{{url('/Home/goodslist/'.$phone->gid)}}" title="{{$phone->name}}" target="_blank">
								{{$phone->name}}
									

								</a></div>
								<div class="p-price"><em>¥</em><span>{{$phone->price}}</span></div>
							</div>
						</div>
					</li>
					@endforeach



			</ul>
		</div>
	</div><!-- 20130904-频道-楼层-end -->
</div>
<div class="hr-20"></div>
<div class="layout">
	<!-- 20130904-频道-楼层-start -->
	<div class="channel-floor">
		<div class="h">
			<h2><a href="" title="平板 &amp; 穿戴" target="_blank">平板 &amp; 穿戴</a></h2>
			<em class="channel-subtitle">华为精品平板</em>
			<ul class="channel-nav">
					<li><a href="" target="_blank">平板电脑</a></li>
					<li><a href="" target="_blank">手环</a></li>
					<li><a href="" target="_blank">手表</a></li>
			</ul>
		</div>
		<div class="b">
			<ul class="channel-pro-list">
					<li id="channel-pro-2-1" class="channel-pro-item channel-pro-rec-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img"><a href="{{url('/Home/goodslist/'.$rexiao[1]->gid)}}" title="{{$rexiao[1]->name}}" target="_blank" rel="nofollow">
												<img src="{{$rexiao[1]->im}}" style="" alt="">
								</a></div>
								<div class="p-name"><a href="{{url('/Home/goodslist/'.$rexiao[1]->gid)}}" title="荣耀畅玩手环 A1 智能运动手环 运动睡眠监测 紫外线测试（活力蓝）" target="_blank">
								{{$rexiao[1]->name}}
								</a></div>
								<div class="p-shining">
									<div class="p-slogan">精致随行，百搭外观，轻巧佩戴。</div>
									<div class="p-promotions"></div>
								</div>
								<div class="p-price"><em>¥</em><span>{{$rexiao[1]->price}}</span></div>
								<div class="p-button"><a href="{{url('/Home/goodslist/'.$rexiao[1]->gid)}}" target="_blank" class="channel-button" title="立即抢购">立即抢购</a></div>
                                                                            <i class="p-tag">
										<img src="{{url('/images/home/1460242398600_003.png')}}" alt="荣耀畅玩手环 A1 智能运动手环 运动睡眠监测 紫外线测试（活力蓝）">
                                                                            </i>
							</div>
						</div>
					</li>
					@foreach($pban as $pd)
					<li id="channel-pro-2-11" class="channel-pro-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img"><a href="{{url('/Home/goodslist/'.$pd->gid)}}" title="{{$pd->name}}" target="_blank" rel="nofollow">
												<img src="{{$pd->im}}" style="" alt="">
								</a></div>
								<div class="p-name">
								<a href="{{url('/Home/goodslist/'.$pd->gid)}}" title="{{$pd->name}}" target="_blank">
								{{$pd->name}}
									<span class="p-slogan"></span>

								</a></div>
								<div class="p-price"><em>¥</em><span>{{$pd->price}}</span></div>
								<i class="p-tag">

								</i>
							</div>
						</div>
					</li>
                                       @endforeach

			</ul>
		</div>
	</div><!-- 20130904-频道-楼层-end -->
</div>
<div class="hr-20"></div>
<div class="layout">
	<!-- 20130904-频道-楼层-start -->
	<div class="channel-floor">
		<div class="h">
			<h2><a href="" title="笔记本电脑" target="_blank">笔记本电脑</a></h2>
			<em class="channel-subtitle">移动办公</em>
			<ul class="channel-nav">
					<li><a href="" target="_blank">MateBook</a></li>
					<li><a href="" target="_blank">拓展坞</a></li>
					<li><a href="" target="_blank">触控笔</a></li>
					<li><a href="" target="_blank">二合一键盘</a></li>
			</ul>
		</div>
		<div class="b">
			<ul class="channel-pro-list">
					<li id="channel-pro-3-1" class="channel-pro-item channel-pro-rec-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img"><a href="{{url('/Home/goodslist/'.$rexiao[2]->gid)}}" title="华为（HUAWEI）MateBook 12英寸平板二合一笔记本电脑（Intel core m3 4GB内存 128GB存储 Win10 内含键盘不含手写笔和扩展坞）香槟金" target="_blank" rel="nofollow">
												<img src="{{$rexiao[2]->im}}" style="" data-lazy-src="" alt="">
								</a></div>
								<div class="p-name"><a href="{{url('/Home/goodslist/'.$rexiao[2]->gid)}}" title="华为（HUAWEI）MateBook 12英寸平板二合一笔记本电脑（Intel core m3 4GB内存 128GB存储 Win10 内含键盘不含手写笔和扩展坞）香槟金" target="_blank">
								{{$rexiao[2]->name}}
								</a></div>
								<div class="p-shining">
									<div class="p-slogan">二合一笔记本电脑</div>
									<div class="p-promotions"></div>
								</div>
								<div class="p-price"><em>¥</em><span>{{$rexiao[2]->price}}</span></div>
								<div class="p-button"><a href="{{url('/Home/goodslist/'.$rexiao[2]->gid)}}" target="_blank" class="channel-button" title="立即抢购">立即抢购</a></div>
                                                                            <i class="p-tag">
										<img src="{{url('/images/home/1460242398600_003.png')}}" alt="华为（HUAWEI）MateBook 12英寸平板二合一笔记本电脑（Intel core m3 4GB内存 128GB存储 Win10 内含键盘不含手写笔和扩展坞）香槟金">
                                                                            </i>
							</div>
						</div>
					</li>
                                        @foreach($pc as $p)
					<li id="channel-pro-3-4" class="channel-pro-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img"><a href="{{url('/Home/goodslist/'.$p->gid)}}" title="{{$p->name}}" target="_blank" rel="nofollow">
												<img src="{{$p->im}}" style="" data-lazy-src="" alt="">
								</a></div>
								<div class="p-name">
								<a href="{{url('/Home/goodslist/'.$p->gid)}}" title="{{$p->name}}" target="_blank">
								{{$p->name}}
									<span class="p-slogan"></span>

								</a></div>
								<div class="p-price"><em>¥</em><span>{{$p->price}}</span></div>
							</div>
						</div>
					</li>
					@endforeach


			</ul>
		</div>
	</div><!-- 20130904-频道-楼层-end -->
</div>
<div class="hr-20"></div>
<div class="layout">
	<!-- 20130904-频道-楼层-start -->
	<div class="channel-floor">
		<div class="h">
			<h2><a href="" title="智能家居" target="_blank">智能家居</a></h2>
			<em class="channel-subtitle">上网必备</em>
			<ul class="channel-nav">
					<li><a href="" target="_blank">电力猫</a></li>
					<li><a href="" target="_blank">路由器</a></li>
					<li><a href="" target="_blank">电视盒子</a></li>
					<li><a href="" target="_blank">随行wifi</a></li>
			</ul>
		</div>
		<div class="b">
			<ul class="channel-pro-list">
					<li id="channel-pro-4-1" class="channel-pro-item channel-pro-rec-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img"><a href="{{url('/Home/goodslist/'.$rexiao[3]->gid)}}" title="" target="_blank" rel="nofollow">
												<img src="{{$rexiao[3]->im}}" style="" data-lazy-src="" alt="">
								</a></div>
								<div class="p-name"><a href="{{url('/Home/goodslist/'.$rexiao[3]->gid)}}" title="" target="_blank">
								{{$rexiao[3]->name}}
								</a></div>
								<div class="p-shining">
									<div class="p-slogan">创新子母路由，信号覆盖无忧！双WIFI覆盖，穿墙稳定，Hilink智能家居，网络安全无线路由器</div>
									<div class="p-promotions"></div>
								</div>
								<div class="p-price"><em>¥</em><span>{{$rexiao[3]->price}}</span></div>
								<div class="p-button"><a href="{{url('/Home/goodslist/'.$rexiao[3]->gid)}}" target="_blank" class="channel-button" title="立即抢购">立即抢购</a></div>
									 <i class="p-tag">
										<img src="{{url('/images/home/1460242398600_003.png')}}" alt="">
                                                                            </i>

							</div>
						</div>
					</li>

					@foreach($zns as $zn)
					<li id="channel-pro-4-5" class="channel-pro-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img"><a href="{{url('/Home/goodslist/'.$zn->gid)}}" title="{{$zn->name}}" target="_blank" rel="nofollow">
												<img src="{{$zn->im}}" style="" data-lazy-src="" alt="">
								</a></div>
								<div class="p-name">
								<a href="{{url('/Home/goodslist/'.$zn->gid)}}" title="{{$zn->name}}" target="_blank">
								{{$zn->name}}
									<span class="p-slogan"></span>

								</a></div>
								<div class="p-price"><em>¥</em><span>{{$zn->price}}</span></div>
							</div>
						</div>
					</li>
					@endforeach


			</ul>
		</div>
	</div><!-- 20130904-频道-楼层-end -->
</div>
<div class="hr-20"></div>
<div class="layout">
	<!-- 20130904-频道-楼层-start -->
	<div class="channel-floor">
		<div class="h">
			<h2><a href="" title="专属配件" target="_blank">专属配件</a></h2>
			<em class="channel-subtitle">配件与服务</em>
			<ul class="channel-nav">
					<li><a href="" target="_blank">保护壳</a></li>
					<li><a href="" target="_blank">保护套</a></li>
					<li><a href="" target="_blank">贴膜</a></li>
					<li><a href="" target="_blank">盒子遥控器</a></li>
					<li><a href="" target="_blank">表带</a></li>
					<li><a href="" target="_blank">电容笔</a></li>
			</ul>
		</div>
		<div class="b">
			<ul class="channel-pro-list">
					<li id="channel-pro-5-1" class="channel-pro-item channel-pro-rec-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img"><a href="{{url('/Home/goodslist/'.$rexiao[4]->gid)}}" title="荣耀 移动电源 10000mAh充电宝 快充宝双向快充18W 功率TypeC 与Micro USB双输入快充版（白色）" target="_blank" rel="nofollow">
												<img src="{{$rexiao[4]->im}}" style="" data-lazy-src="" alt="">
								</a></div>
								<div class="p-name"><a href="{{url('/Home/goodslist/'.$rexiao[4]->gid)}}" title="荣耀 移动电源 10000mAh充电宝 快充宝双向快充18W 功率TypeC 与Micro USB双输入快充版（白色）" target="_blank">
								{{$rexiao[4]->name}}
								</a></div>
								<div class="p-shining">
									<div class="p-slogan">普通版、快充版双项选择，129元起</div>
									<div class="p-promotions"></div>
								</div>
								<div class="p-price"><em>¥</em><span>{{$rexiao[4]->price}}</span></div>
								<div class="p-button"><a href="{{url('/Home/goodslist/'.$rexiao[4]->gid)}}" target="_blank" class="channel-button" title="立即抢购">立即抢购</a></div>
									 <i class="p-tag">
										<img src="{{url('/images/home/1460242398600_003.png')}}" alt="荣耀 移动电源 10000mAh充电宝 快充宝双向快充18W 功率TypeC 与Micro USB双输入快充版（白色）">
                                                                            </i>

							</div>
						</div>
					</li>

					@foreach($pjs as $pj)
					<li id="channel-pro-5-4" class="channel-pro-item">
						<div class="channel-pro-panels">
							<div class="pro-info">
								<div class="p-img"><a href="{{url('/Home/goodslist/'.$pj->gid)}}" title="{{$pj->name}}" target="_blank" rel="nofollow">
												<img src="{{$pj->im}}" style="" data-lazy-src="" alt="">
								</a></div>
								<div class="p-name">
								<a href="{{url('/Home/goodslist/'.$pj->gid)}}" title="{{$pj->name}}" target="_blank">
								{{$pj->name}}
									<span class="p-slogan"></span>

								</a></div>
								<div class="p-price"><em>¥</em><span>{{$pj->price}}</span></div>
								<i class="p-tag">
													<img src="" data-lazy-src="" alt="">
								</i>
							</div>
						</div>
					</li>
					@endforeach




			</ul>
		</div>
	</div><!-- 20130904-频道-楼层-end -->
</div>
<div class="hr-20"></div>



<div class="layout">
	<li class="ec-slider-item"><div class="ec-slider-item-img"><a href="" target="_blank"><img src="{{url('/images/home/20160530195653686.jpg')}}"></a></div></li>
</div>
<div class="hr-40"></div>
<!-- 20130902-关注-start -->
<div class="follow">
	<div class="layout">
		<ul>
			<li><a class="follow-hwsoft" href="" target="_blank"><img src="{{url('/images/home/follow_hwsoft_application.png')}}" alt="华为软件应用"></a></li>
			
			<li><a href="" target="_blank" rel="nofollow" class="follow-sina"><img alt="关注新浪微博" src="{{url('/images/home/follow_sina.png')}}"></a></li>
			<li><a class="follow-qzone" href="" target="_blank"><img src="{{url('/images/home/follow_qzone.png')}}" alt="关注QQ空间"></a></li>
			
			<li onmouseout="this.className=''" onmouseover="this.className='hover'" class=""><a href="javascript:;" class="follow-android"><img alt="下载手机客户端" src="{{url('/images/home/follow_android.png')}}"></a><div class="follow-panel follow-panel-qrcode">
			<img src="{{url('/images/home/img67.png')}}" alt="专享周三荣耀专场"><p><b>专享周三荣耀专场</b></p><s></s></div></li>
		</ul>
	</div>
</div>
<!-- 20130902-关注-end -->


<textarea id="top-banner" class="hide">	&lt;!-- 顶部banner --&gt;

</textarea>

<script>

</script>



<!--口号-20121025 -->
<div class="slogan">
	<ul>
		<li class="s1"><i></i>500强企业&nbsp;品质保证</li>
		<li class="s2"><i></i>7天退货&nbsp;15天换货</li>
		<!-- <li class="s3"><i></i>99元起免运费</li> -->
		<li class="s3"><i></i>
			<span>99元起免运费</span>
</li>
		<li class="s4"><i></i>448家维修网点&nbsp;全国联保</li>
	</ul>
</div><!--口号-end -->
<!--服务-20121025 -->
<div class="service">
		<dl class="s1">
			<dt><i></i>帮助中心</dt>
			<dd>
				<ol>
					<li><a target="_blank" href="">购物指南</a></li>
					<li><a target="_blank" href="">配送方式</a></li>
					<li><a target="_blank" href="">支付方式</a></li>
					<li><a target="_blank" href="">常见问题</a></li>
				</ol>
			</dd>
		</dl>
		<dl class="s2">
			<dt><i></i>售后服务</dt>
			<dd>
				<ol>
					<li><a target="_blank" href="">保修政策</a></li>
					<li><a target="_blank" href="">退换货政策</a></li>
					<li><a target="_blank" href="">退换货流程</a></li>
					<li><a target="_blank" href="">保修状态查询</a></li>
				</ol>
			</dd>
		</dl>
		<dl class="s3">
			<dt><i></i>技术支持</dt>
			<dd>
				<ol>
					<li><a target="_blank" href="">售后网点</a></li>
					<li><a target="_blank" href="">预约维修</a></li>
					<li><a target="_blank" href="">手机寄修服务</a></li>
					<li><a target="_blank" href="">软件下载</a></li>
				</ol>
			</dd>
		</dl>
		<dl class="s4">
			<dt><i></i>关于商城</dt>
			<dd>
				<ol>
					<li><a target="_blank" href="">公司介绍</a></li>
					<li><a target="_blank" href="">华为商城简介</a></li>
					<li><a target="_blank" href="">联系客服</a></li>
				</ol>
			</dd>
		</dl>
		<dl class="s5">
			<dt><i></i>关注我们</dt>
			<dd>
				<ol>
					<li><a class="sina" rel="nofollow" href="" target="_blank">新浪微博</a></li>
					<li><a class="qq" rel="nofollow" href="" target="_blank">腾讯微博</a></li>
					<li><a class="huafen" href="" target="_blank">花粉社区</a></li>
					<li><a href="" target="_blank">商城手机版</a></li>
				</ol>
			</dd>
		</dl>
</div>




<!--底部 -->

<footer class="footer">
    <!-- 20130902-底部-友情链接-start -->
	<div class="footer-otherLink">
		<p style="text-align:left;">友情链接： | 
                    
                    @foreach($chaining as $add)
                    <a href="http://{{$add->chaining}}" target="_blank">{{$add->name}}</a> | 
                    @endforeach
                    
                </p>
                <p style="text-align:left;"><span style="line-height:1.5;"></span></p>
	</div>
	<div class="footer-warrant-area"><p><a textvalue="隐私政策" title="隐私政策" target="_blank" href="">隐私政策</a>  <a title="服务协议" target="_blank" href="">服务协议</a>        Copyright © 2012-2016  VMALL.COM   版权所有  保留一切权利</p><p><a target="_blank" href=""><img style="width:20px;height:20px;float:none;" src="{{url('/images/home/20160226162651249.png')}}" title="公安备案" border="0" height="20" hspace="0" vspace="0" width="20"><span style="font-size:15px;font-family:宋体"><span style="font-size:12px;font-family:arial,helvetica,sans-serif;"> 苏公网安备</span><span style="font-size:12px;font-family:arial,helvetica,sans-serif;"> 32011402010009号</span></span></a> | 苏ICP备09062682号-9 | 增值电信业务经营许可证：苏B2-20130048 | <a target="_blank" href="">网络文化经营许可证：苏网文[2012]0401-019号</a></p><p><br><a target="_blank" href=""></a></p><p><a target="_blank" href=""><img src="{{url('/images/home/20160226162415360.png')}}" style="float:none;width:90px;height:32px;" title="电子营业执照" border="0" height="32" hspace="0" vspace="0" width="90"></a>   <a target="_blank" href=""><img style="width:90px;height:32px;float:none;" src="{{url('/images/home/20160226162521265.png')}}" title="可信网站" border="0" height="32" hspace="0" vspace="0" width="90"></a>   <a target="_blank" href=""><img style="width:90px;height:32px;float:none;" src="{{url('/images/home/20160226162531395.png')}}" title="诚信网站" border="0" height="32" hspace="0" vspace="0" width="90"></a></p></div><!--授权结束 -->
</footer>




<div id="AutocompleteContainter_c676d" style="position: absolute; z-index: 9999; top: 127px; left: 378.5px;"><div class="autocomplete-w1"><div class="autocomplete" id="Autocomplete_c676d" style="display: none; width: 344px; max-height: 400px;"></div></div></div><img src="./images/Mapping.gif" style="display: none;"></body></html>
<!--Hit 2016-07-05 16:10:41,1-->
