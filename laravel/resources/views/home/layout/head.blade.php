<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="zh-cn">
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<title>华为手机【报价 价格 大全 怎么样】_华为商城</title>
<meta name="keywords" content="华为手机报价,华为智能手机,华为智能手机报价,">
<meta name="description" content="华为商城是华为旗下面向全国服务的电子商务官网。我们提供最新款的华为智能手机的价格、参数、图片大全等信息。官方品质保证，全国价格最低，欢迎选购！">

<link rel="shortcut icon" href="http://www.vmall.com/favicon.ico">
<link href="{{asset('/css/home/ec3.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/ec2.css')}}" rel="stylesheet" type="text/css">

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
					<a href="" rel="nofollow" timetype="timestamp">我的订单</a>
				</li>
				<li class="s-promo"><a href="" rel="nofollow">V码(优购码)</a></li>
				<li class="s-hwep hide" id="preferential"></li>
				<li class="s-mobile"><a href="" target="_blank">手机版</a></li>
				<li class="s-sitemap">
					<div class="s-dropdown ">
						<div class="h">
							<a href="javascript:;">网站导航</a>
							<s></s>
						</div>
						<div class="b">
							<p><a href="javascript:;">帮助中心</a></p>
							<p><a href="javascript:;" target="_blank">PC软件</a></p>
							<p><a href="javascript:;" target="_blank">数字音乐</a></p>
							<p><a href="javascript:;" target="_blank">爱旅</a></p>
							<p><a href="javascript:;" target="_blank">华为网盘</a></p>
						</div>
					</div>
				</li>
			</ul>
		</div>
    </div>
</div>



<header class="header">
	<div class="layout">
		<!-- 21030909-logo-start -->

		<div class="logo logo-index"><a href="{{url('/')}}" title="Vmall.com - 华为商城"><img src="{{url('/images/home/newLogo.png')}}" alt="Vmall.com - 华为商城"></a></div><!-- 21030909-logo-start -->

		<!-- 20130909-搜索条-焦点为search-form增加className:hover -start -->
		<div class="searchBar">
			<!-- 页头热门搜索 -->
			<div class="searchBar-form" id="searchBar-area">
                            
                            
				<form method="post"  action="{{url('Home/goodslist/sou')}}">
					<label for="search-kw" class="text" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; color: rgb(153, 153, 153);"></label>
                                        <input autocomplete="off" style="z-index: 1;" class="text" maxlength="100" id="search-kw" type="text" name="keyword" value="@if(!empty($keyword)){{$keyword}} @endif" ><input class="button" value="搜索" type="submit">
					<input id="default-search" value="荣耀8" type="hidden">
                                        <input   name="_token"  value="{{csrf_token()}}" type="hidden">
				</form>
                            
                            
			</div>

				<div class="searchBar-key">
	<b>热门搜索：</b>


		<a href="javascript:;" target="_blank">V8</a>


		<a href="javascript:;" target="_blank">5A</a>


		<a href="javascript:;" target="_blank">5X</a>


		<a href="javascript:;" target="_blank">HUAWEI P9</a>


		<a href="javascript:;" target="_blank">5C</a>


		<a href="javascript:;" target="_blank">快充移动电源</a>


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
					<div style="display: none;" class="b" id="header-toolbar-imall-content">
						<div class="i-mall-prompt" id="cart_unlogin_info">
							<p>你好，请&nbsp;&nbsp;<script>document.write('<a href="/account/login?url='+encodeURIComponent(window.location.pathname)+'"  rel="nofollow">登录</a>');</script><a href="http://www.vmall.com/account/login?url=%2Flist-36" rel="nofollow">登录</a> | <a href="http://www.vmall.com/account/register" rel="nofollow">注册</a></p>
						</div>
						<div class="i-mall-uc " id="cart_login_info">
							<ul>
								<li><a href="javascript:;" rel="nofollow" timetype="timestamp">我的订单</a></li>
								<li><a href="javascript:;" timetype="timestamp">待支付</a><span id="toolbar-orderWaitingHandleCount" class="hide">0</span></li>
								<li><a href="javascript:;" timetype="timestamp">待评论</a><span id="toolbar-notRemarkCount" class="hide">0</span></li>
								<li><a href="javascript:;" timetype="timestamp">优惠券</a><span id="toolbar-couponCount" class="hide">0</span></li>
								<li><a href="javascript:;" timetype="timestamp">站内信</a><span id="toolbar-newMsgCount" class="hide">0</span></li>
							</ul>
						</div>
						<!-- 页头会员专享信息 -->
						<div class="i-mall-event ">
							<p><a href="javascript:;"><img src="./css/20160127095348354.jpg" alt="特权频道"></a></p>
						</div>
					</div>
				</div><!-- 21030909-我的商城-end -->
			</div>
			<div class="header-toolbar-item" id="header-toolbar-minicart">
				<!-- 21030909-迷你购物车-start -->
				<div class="minicart">
					<div class="h" id="header-toolbar-minicart-h"><a href="javascript:;" rel="nofollow" timetype="timestamp">我的购物车<span><em id="header-cart-total">0</em><b></b></span></a><i></i><s></s><u></u></div>
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
							<a class="button-minicart-settleup" href="javascript:;">去结算</a>
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
						<p><a href="javascript:;" target="blank" title="专享周三荣耀专场"><img src="{{url('/images/home/qrcode_vmall_app01.png')}}" alt="华为商城官方客户端"></a></p>
						<p><a href="javascript:;" target="blank"><span>专享周三荣耀专场</span></a></p>
					</li>
					<li style="width: 91px; height: 96px; position: absolute; display: none;" class="ec-slider-item">
						<p><a href="javascript:;" target="blank" title="微信扫码关注我们"><img src="{{url('/images/qrcode_vmall_wechat01.jpg')}}" alt="华为商城官方微信"></a></p>
						<p><a href="javascript:;" target="blank"><span>微信扫码关注我们</span></a></p>
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
                        @foreach (Session::get("firstNav") as $fNav)
				<li class="category-item ">
					<div class="category-info">
						<h3><a href="{{url('/Home/goodslist/'.$fNav->cid.'/edit')}}" target="_blank">
                                                        <span>{{$fNav->cname}}</span></a></h3>
                                                
                                                @foreach(Session::get("nav") as $fn)
                                                @if(($fn->pid)==($fNav->cid)&&($fn->isNav)=="Y")
						<a href="{{url('/Home/goodslist/'.$fn->cid.'/edit')}}" target="_blank">
                                                    <span>{{$fn->cname}}</span></a>
						@endif
                                                @endforeach
					</div>
                                        <div class="category-panels children-col-1">
                                            <ul class="subcate-list children-col-list">
                                                
                                                 @foreach(Session::get("nav") as $fn)
                                                 @if(($fn->pid)==($fNav->cid))
						<li class="subcate-item">
							<a href="{{url('/Home/goodslist/'.$fn->cid.'/edit')}}" target="_blank">
                                                            <span>{{$fn->cname}}</span></a>
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


		<!-- 20130909-导航-start -->
		<nav class="naver">
				<ul id="naver-list">

			<li class="" id="index"><a href="{{url('/')}}" onclick="_paq.push(['trackLink','点击首页活动导航第1位', 'link', '']);ec.code.addAnalytics({hicloud:true});" class="current">


             <span>首 页

					</span></a> </li>
		<li class="" id="huawei"><a href="javascript:;" onclick="_paq.push(['trackLink','点击首页活动导航第2位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>华为专区

					</span></a> </li>
		<li id="honor"><a href="javascript:;" onclick="_paq.push(['trackLink','点击首页活动导航第3位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>荣耀专区

					</span></a> </li>
		<li id="honor"><a href="javascript:;" onclick="_paq.push(['trackLink','点击首页活动导航第4位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>荣耀8

			<s><img src="{{url('images/home/hot.png')}}" alt="new"></s>
		</span></a> </li>
		<li class="" id="HUAWEI"><a href="javascript:;" onclick="_paq.push(['trackLink','点击首页活动导航第5位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>P9

			<s><img src="{{url('images/home/hot.png')}}" alt="hot"></s>
					</span></a> </li>
		<li id="honor"><a href="javascript:;" onclick="_paq.push(['trackLink','点击首页活动导航第6位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>荣耀V8

			<s><img src="{{url('images/home/hot.png')}}" alt="hot"></s>
					</span></a> </li>
		<li id="peijian"><a href="javascript:;" onclick="_paq.push(['trackLink','点击首页活动导航第7位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">

             <span>配件专区

					</span></a> </li>
		<li><a href="javascript:;"><span>精彩频道</span><i></i></a>
			<ol>
					<li id="honor">
                 <a href="javascript:;" onclick="_paq.push(['trackLink','点击首页活动导航第8位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">开售提醒</a></li>
					<li id="smrz">
                 <a href="javascript:;" onclick="_paq.push(['trackLink','点击首页活动导航第9位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">实名认证</a></li>
					<li id="honor">
                 <a href="javascript:;" onclick="_paq.push(['trackLink','点击首页活动导航第10位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">以旧换新</a></li>
					<li id="hyj">
                 <a href="javascript:;" onclick="_paq.push(['trackLink','点击首页活动导航第11位', 'link', '']);ec.code.addAnalytics({hicloud:true});" target="_blank">合约机</a></li>
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

