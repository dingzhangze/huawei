<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="zh-cn">
<title>订单创建成功华为商城</title>
<link rel="shortcut icon" href="">
<link href="{{asset('/css/home/ec2.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/home/main4.css')}}" rel="stylesheet" type="text/css">
</head>



<body class="wide order">
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
				<li class="s-hw"><a href="" target="_blank">华为官网</a></li>
				<li class="s-honor"><a href="" target="_blank">荣耀官网</a></li>
				<li class="s-appsoft">
					<div class="s-dropdown">
						<div class="h">
							<a href="" target="_blank">软件应用</a>
							<s></s>
						</div>
						<div class="b">
							<p><a href="" target="_blank">EMUI</a></p>
							<p><a href="" target="_blank">应用市场</a></p>
							<p><a href="" target="_blank">云服务</a></p>
							<p><a href="" target="_blank">开发者联盟</a></p>
						</div>
					</div>	
					
				</li><li class="s-club"><a href="" target="_blank">花粉俱乐部</a></li>
				<li class="s-sr"><a href="javascript:;" onclick="showSelectRegion()">Select Region</a></li>
			</ul>
		</div>
		<div class="s-main">
			 <ul>
                            @if(empty(Session::get("userDatas")))
				<li style="display: none;" class="s-login" id="unlogin_status">
						<a href="{{url('/login')}}" rel="nofollow">登录</a>
						&nbsp;&nbsp;&nbsp;<a href="{{url('/register')}}" rel="nofollow">注册</a>
				</li>
                                    @else
				<li style="display: list-item;" class="s-user hide" id="login_status">
					<!--
						ie6下鼠标悬停追加ClassName： hover
						示例：[ s-dropdown hover ]
					-->
                                    
					<div class="s-dropdown">
						<div class="h">
							<a href="" id="customer_name" rel="nofollow" timetype="timestamp" class="link-user">{{Session::get("userDatas")->uname}}.</a>
							 <em class="vip-state" id="vip-info">
								<a style="display: none;" class="link-noAct" href="" id="vip-inActive" title="请完善个人信息，即刻享受会员特权">去激活</a>
								<a href="" title="VMALL V0会员" id="vip-Active"><i class="icon-vip-level-0"></i>&nbsp;</a>
								<a title="实名认证" id="authentication" href=""><i class="icon-authentication icon-authentication-not"></i>&nbsp;</a>
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
							<p><a href="">帮助中心</a></p>
							<p><a href="" target="_blank">PC软件</a></p>
							<p><a href="/" target="_blank">数字音乐</a></p>
							<p><a href="" target="_blank">爱旅</a></p>
							<p><a href="" target="_blank">华为网盘</a></p>
						</div>
					</div>
				</li>
			</ul>
		</div>
    </div>
</div>

<!--头部 -->
<div class="order-header">
	<div class="g">
    	<div class="fl">
            <div class="logo logo-index"><a href="/" title="华为商城"><img src="{{url('/images/home/newLogo.png')}}" alt="华为商城"></a></div>
        </div>
        <div class="fr">
            <!--步骤-两步骤 -->
            <div class="progress-area progress-area-2">
                <!--核对订单 -->
                <div id="progress-confirm" class="progress-co-area hide">填写核对订单信息</div>
                <!--成功提交订单 -->
                <div style="display: block;" id="progress-submit" class="progress-sso-area hide">成功提交订单</div>
            </div>
        </div>
    </div>
</div>

<form action="/payment/process" id="pay-go-form" method="post" target="_blank" class="hide">
	<input name="orderCodes" value="2390112920|" type="hidden">
	<input name="paymentMethod" id="order-paymentMethod" value="" type="hidden">	
	<input name="paymentType" id="order-paymentType" value="" type="hidden">
	<input name="state" value="0" type="hidden">
</form>


<div class="layout">
	<!-- 20131130-订单-确认-鼠标悬停增加ClassName： order-confirm-expand -->
    <div class="order-confirm order-confirm-expand" id="order-confirm-detail">
		<div class="h">
			<s class="icon-success-7"></s>
			<h3>订单提交成功，请您尽快付款！</h3>	
			<p name="order-pay-info" ordertype="">订单号：&nbsp;&nbsp;HW00{{$goodss->number}}&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;付款金额（元）：&nbsp;&nbsp;<b>
				{{$goodss->total}}
			</b>&nbsp;<b>元</b></p>
			<div class="tips">请您在&nbsp;&nbsp;<b id="lastPayTime">{{$goodss->ordertime}}</b>&nbsp;完成支付，否则订单将自动取消。</div>
			<div class="hr-5"></div>
		</div>
		<div class="b">
			<table border="0" cellpadding="0" cellspacing="0">
				<tbody>
				
					<tr>
						<th>订单编号：</th>
						<td><span>HW00{{$goodss->number}}</span></td>
					</tr>
					<tr>
						<th>订单金额：</th>
						<td>
							{{$goodss->total}}
						</td>
					</tr>
					
					<tr>
						<th>收货信息：</th>
						<td>
							{{$goodss->address}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							{{$goodss->name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							{{$goodss->phone}}
						</td>
					</tr>

					
					<tr>
						<th>购买日期：</th>
						<td>{{$goodss->ordertime}}</td>
					</tr>
					<tr>
						<th>配送方式：</th>
						<td>
							由默认快递公司配送&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							运费￥0.00							
						</td>
					</tr>
					<tr>
						<th>发票信息：</th>
						<td>个人</td>
					</tr>
					
				</tbody>
			</table>
		</div>
		<div class="f"></div>
	</div><!-- 20131130-订单-确认-end -->

	<!--订单-表单-支付方式-20121012 -->
<!--订单-表单-支付方式-20121012 -->
<div class="order-form-area">
<div class="order-payment" id="order-payment-mod">
	<h3 class="title">选择支付方式
		<b>[&nbsp;<a title="重新选择支付方式" href="javascript:;" onclick="ec.order.payment.edit()">重新选择</a>&nbsp;]</b>
	</h3>
    <div class="order-payment-list" id="order-payment-list">
	    <dl>
		<dd>
		<div class="order-payment-area">
		   <div class="h"><b>第三方支付平台</b></div>
				<div class="b clearfix" id="payment-bank-list-other">
             <ul class="clearfix">
             <li><div class="payment-area">
                 <input id="input-ALIPAY-1" value="ALIPAY" class="radio vam" name="bankName-input" data-type="1" seed="payment_3_1" type="radio"><!-- 支付宝扫码支付活动链接 -->
                 <div style="position:absolute;left: 30px;top: -20px;">
                  <a href="#" target="_blank" style="color:red">
                  <span style="color:red;white-space: nowrap;">赢2999元红包&gt;</span></a></div>
                 <label for="input-ALIPAY-1" class="vam">
                 <img disabled="" title="支付宝" alt="支付宝" src="{{url('/images/home/alipay_logo1.png')}}" class="vam pointer"><i style="background:#FF8502;color: #FFF;">推荐</i>
                 </label></div></li>
                 <li><div class="payment-area"><input id="input-WECHAT-17" value="WECHAT" class="radio vam" name="bankName-input" data-type="17" seed="payment_3_1" type="radio"><!-- 支付宝扫码支付活动链接 --><label for="input-WECHAT-17" class="vam"><img disabled="" title="微信支付" alt="微信支付" src="{{url('/images/home/wechat_logo.gif')}}" class="vam pointer"></label></div></li><li><div class="payment-area"><input id="input-TENPAY-7" value="TENPAY" class="radio vam" name="bankName-input" data-type="7" seed="payment_3_1" type="radio"><!-- 支付宝扫码支付活动链接 --><label for="input-TENPAY-7" class="vam"><img disabled="" title="财付通支付" alt="财付通支付" src="{{url('/images/home/tenpay_logo.gif')}}" class="vam pointer"></label></div></li></ul><!--bankList end--></div>
		    </div>
			<div class="order-payment-area">
			<div class="h"><b>银行网银</b><em>支持以下各银行储蓄卡及信用卡</em>
                            <span>[<a href="#" target="_blank" title="查看支付限额">查看支付限额</a>]</span></div>
				<div class="b clearfix" id="payment-bank-list-bank">
                             <!--bankList start-->  <ul class="clearfix">
                                 <li><div class="payment-area">
                                  <input id="input-C_M_B-2" value="C_M_B" class="radio vam" name="bankName-input" data-type="2" seed="payment_1_1" type="radio">
                                  <label for="input-C_M_B-2" class="vam">
                                      <img disabled="" title="招商银行" alt="招商银行" src="{{url('/images/home/CMB_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔无限额（专业版），信用卡单笔最高限额5000元（专业版单笔无限额）</p><s></s></div></label></div></li>
                                      <li><div class="payment-area"><input id="input-ICBC-7" value="ICBC" class="radio vam" name="bankName-input" data-type="7" seed="payment_1_2" type="radio"><label for="input-ICBC-7" class="vam"><img disabled="" title="中国工商银行" alt="中国工商银行" src="{{url('/images/home/ICBC_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔无限额（U盾客户），信用卡单笔无限额（U盾客户）</p><s></s></div></label></div></li>
                                      <li><div class="payment-area"><input id="input-CCB-1" value="CCB" class="radio vam" name="bankName-input" data-type="1" seed="payment_1_3" type="radio"><label for="input-CCB-1" class="vam"><img disabled="" title="中国建设银行" alt="中国建设银行" src="{{url('/images/home/CCB_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔最高限额100万元（证书客户），信用卡单笔最高限额100万元（证书客户）</p><s></s></div></label></div></li>
                                      <li><div class="payment-area"><input id="input-COMM-1" value="COMM" class="radio vam" name="bankName-input" data-type="1" seed="payment_1_4" type="radio"><label for="input-COMM-1" class="vam"><img disabled="" title="交通银行" alt="交通银行" src="{{url('/images/home/COMM_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔最高限额50000元（证书客户），信用卡单笔最高限额10000元（证书客户）</p><s></s></div></label></div></li>
                                      <li><div class="payment-area"><input id="input-ABC-1" value="ABC" class="radio vam" name="bankName-input" data-type="1" seed="payment_1_5" type="radio"><label for="input-ABC-1" class="vam"><img disabled="" title="中国农业银行" alt="中国农业银行" src="{{url('/images/home/ABC_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔无限额（K宝证书客户），信用卡单笔无限额（K宝证书客户）</p><s></s></div></label></div></li>
                                      <li><div class="payment-area"><input id="input-0302-2" value="0302" class="radio vam" name="bankName-input" data-type="2" seed="payment_1_6" type="radio"><label for="input-0302-2" class="vam"><img disabled="" title="中信银行" alt="中信银行" src="{{url('/images/home/CITIC_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔无限额（证书客户），信用卡单笔最高限额500元（证书客户）</p><s></s></div></label></div></li>
                                      <li><div class="payment-area"><input id="input-SPDB-1" value="SPDB" class="radio vam" name="bankName-input" data-type="1" seed="payment_1_7" type="radio"><label for="input-SPDB-1" class="vam"><img disabled="" title="上海浦东发展银行" alt="上海浦东发展银行" src="{{url('/images/home/SPDB_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔无限额（证书客户），信用卡单笔无限额（证书客户）</p><s></s></div></label></div></li>
                                      <li><div class="payment-area"><input id="input-BOCB2C-1" value="BOCB2C" class="radio vam" name="bankName-input" data-type="1" seed="payment_1_8" type="radio"><label for="input-BOCB2C-1" class="vam"><img disabled="" title="中国银行" alt="中国银行" src="{{url('/images/home/BOC_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔最高限额10000.00元，信用卡单笔最高限额5000.00元</p><s></s></div></label></div></li>
                                      <li><div class="payment-area"><input id="input-GDB-1" value="GDB" class="radio vam" name="bankName-input" data-type="1" seed="payment_1_9" type="radio"><label for="input-GDB-1" class="vam"><img disabled="" title="广东发展银行" alt="广东发展银行" src="{{url('/images/home/GDB_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔无限额（数字证书客户），信用卡单笔最高限额1500.00元（数字证书客户）</p><s></s></div></label></div></li>
                                      <li><div class="payment-area"><input id="input-0309-2" value="0309" class="radio vam" name="bankName-input" data-type="2" seed="payment_1_11" type="radio"><label for="input-0309-2" class="vam"><img disabled="" title="兴业银行" alt="兴业银行" src="{{url('/images/home/CIB_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>兴业银行-储蓄卡单笔无限额（证书客户），信用卡单笔无限额</p><s></s></div></label></div></li>
                                      <li><div class="payment-area"><input id="input-CEB-7" value="CEB" class="radio vam" name="bankName-input" data-type="7" seed="payment_1_12" type="radio"><label for="input-CEB-7" class="vam"><img disabled="" title="光大银行" alt="光大银行" src="{{url('/images/home/CEB_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔最高限额20万元（阳光网盾），信用卡单笔最高限额20万元（阳光网盾）</p><s></s></div></label></div></li>
                                      <li><div class="payment-area"><input id="input-POSTGC-1" value="POSTGC" class="radio vam" name="bankName-input" data-type="1" seed="payment_1_13" type="radio"><label for="input-POSTGC-1" class="vam"><img disabled="" title="中国邮政储蓄银行" alt="中国邮政储蓄银行" src="{{url('/images/home/PSBC_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔最高限额3000元（签约用户）</p><s></s></div></label></div></li>
                                     
                                      <li><div class="payment-area"><input id="input-HZCBB2C-1" value="HZCBB2C" class="radio vam" name="bankName-input" data-type="1" seed="payment_1_15" type="radio"><label for="input-HZCBB2C-1" class="vam"><img disabled="" title="杭州银行" alt="杭州银行" src="{{url('/images/home/HZCB_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔无限额（证书客户），信用卡单笔最高限额500元（证书客户）</p><s></s></div></label></div></li>
                                      <li><div class="payment-area"><input id="input-CMBC-7" value="CMBC" class="radio vam" name="bankName-input" data-type="7" seed="payment_1_16" type="radio"><label for="input-CMBC-7" class="vam"><img disabled="" title="中国民生银行" alt="中国民生银行" src="{{url('/images/home/CMBC_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔最高限额50万元（U宝），信用卡单笔最高限额50万元（U宝）</p><s></s></div></label></div></li>
                                      <li><div class="payment-area"><input id="input-BJRCB-1" value="BJRCB" class="radio vam" name="bankName-input" data-type="1" seed="payment_1_17" type="radio"><label for="input-BJRCB-1" class="vam"><img disabled="" title="北京农村商业银行" alt="北京农村商业银行" src="{{url('/images/home/BJRCB_OUT.gif')}}" class="vam pointer"><div class="bank-tips"><p>储蓄卡单笔最高限额20万元（证书客户），信用卡单笔最高限额20万元（证书客户）</p><s></s></div></label></div></li>
                             </ul><!--bankList end--></div>
			</div>
			<div class="order-payment-area">
				<div class="h"><b>信用卡快捷支付</b><em>无需网银</em></div>
				<div class="b clearfix" id="payment-bank-list-shortcut"><!--bankList start-->  
                                    <ul class="clearfix">
                                        <li><div class="payment-area"><input id="input-CMB_FP-5" value="CMB_FP" class="radio vam" name="bankName-input" data-type="5" seed="payment_1_1" type="radio"><label for="input-CMB_FP-5" class="vam"><img disabled="" title="招商银行" alt="招商银行" src="{{url('/images/home/CMB_OUT.gif')}}" class="vam pointer"><i>快捷</i></label></div></li>
                                        <li><div class="payment-area"><input id="input-ICBC_FP-5" value="ICBC_FP" class="radio vam" name="bankName-input" data-type="5" seed="payment_1_2" type="radio"><label for="input-ICBC_FP-5" class="vam"><img disabled="" title="中国工商银行" alt="中国工商银行" src="{{url('/images/home/ICBC_OUT.gif')}}" class="vam pointer"><i>快捷</i></label></div></li>
                                        <li><div class="payment-area"><input id="input-CCB_FP-5" value="CCB_FP" class="radio vam" name="bankName-input" data-type="5" seed="payment_1_3" type="radio"><label for="input-CCB_FP-5" class="vam"><img disabled="" title="中国建设银行" alt="中国建设银行" src="{{url('/images/home/CCB_OUT.gif')}}" class="vam pointer"><i>快捷</i></label></div></li>
                                        <li><div class="payment-area"><input id="input-ABC_FP-5" value="ABC_FP" class="radio vam" name="bankName-input" data-type="5" seed="payment_1_4" type="radio"><label for="input-ABC_FP-5" class="vam"><img disabled="" title="中国农业银行" alt="中国农业银行" src="{{url('/images/home/ABC_OUT.gif')}}" class="vam pointer"><i>快捷</i></label></div></li>
                                        <li><div class="payment-area"><input id="input-CEB_FP-5" value="CEB_FP" class="radio vam" name="bankName-input" data-type="5" seed="payment_1_6" type="radio"><label for="input-CEB_FP-5" class="vam"><img disabled="" title="中国光大银行" alt="中国光大银行" src="{{url('/images/home/CEB_OUT.gif')}}" class="vam pointer"><i>快捷</i></label></div></li>
                                        <li><div class="payment-area"><input id="input-BOC_FP-5" value="BOC_FP" class="radio vam" name="bankName-input" data-type="5" seed="payment_1_7" type="radio"><label for="input-BOC_FP-5" class="vam"><img disabled="" title="中国银行" alt="中国银行" src="{{url('/images/home/BOC_OUT.gif')}}" class="vam pointer"><i>快捷</i></label></div></li>
            
                                        <li><div class="payment-area"><input id="input-CMBC_FP-5" value="CMBC_FP" class="radio vam" name="bankName-input" data-type="5" seed="payment_undefined" type="radio"><label for="input-CMBC_FP-5" class="vam"><img disabled="" title="中国民生银行" alt="中国民生银行" src="{{url('/images/home/CMBC_OUT.gif')}}" class="vam pointer"><i>快捷</i></label></div></li>
                                        <li><div class="payment-area"><input id="input-CIB_FP-5" value="CIB_FP" class="radio vam" name="bankName-input" data-type="5" seed="payment_undefined" type="radio"><label for="input-CIB_FP-5" class="vam"><img disabled="" title="兴业银行" alt="兴业银行" src="{{url('/images/home/CIB_OUT.gif')}}" class="vam pointer"><i>快捷</i></label></div></li>
                                        <li><div class="payment-area"><input id="input-CITIC_FP-5" value="CITIC_FP" class="radio vam" name="bankName-input" data-type="5" seed="payment_undefined" type="radio"><label for="input-CITIC_FP-5" class="vam"><img disabled="" title="中信银行" alt="中信银行" src="{{url('/images/home/CITIC_OUT.gif')}}" class="vam pointer"><i>快捷</i></label></div></li>
                                        <li><div class="payment-area"><input id="input-GDB_FP-5" value="GDB_FP" class="radio vam" name="bankName-input" data-type="5" seed="payment_undefined" type="radio"><label for="input-GDB_FP-5" class="vam"><img disabled="" title="广东发展银行" alt="广东发展银行" src="{{url('/images/home/GDB_OUT.gif')}}" class="vam pointer"><i>快捷</i></label></div></li></ul><!--bankList end--></div>
			</div>
						<div class="order-payment-area">
				<div class="h"><b>分期付款：</b>支持以下各银行储蓄卡及信用卡，查看分期付款</div>
				<div class="b clearfix" id="payment-bank-list-instalment">
					<ul>
							<li>
								<div class="payment-area" id="instalment-bank-detail">
									<input id="intalment-185" value="HB" class="radio vam" data-type="1" name="bankName-input" seed="payment_花呗分期" type="radio">
									<label for="intalment-185" class="vam">
										
										<img class="vam" disabled="" title="花呗" name="instalmentImg" alt="花呗" src="{{url('/images/home/HB_OUT.gif')}}">
									</label>
								    <input class="displayId" name="displayId" value="185" type="hidden">
								    <div class="huabei-tips-stages hidden" id="huabei_tips">
										
									</div>
									
								</div>
								
							</li>
					</ul>
					<!--增加 current 实现展示-->
					<dl class="huabei current hidden" id="instalment-huabei">
						
					</dl>
				</div>
			</div>
		</dd>
	    </dl>
		<div class="order-payment-action-area">
			<span class="voucher-use">
				<label><input disabled="disabled" id="voucher" class="checkbox vam" type="checkbox">使用代金券支付</label><span id="voucher-total">可用代金券金额：0.00元</span>
			</span>
			<a class="button-style-5 button-confirm-payment" href="javascript:;" onclick="ec.order.payment.submit()">确认支付方式</a>
			<div class="huabei-tips-stages hidden" id="huabei_nochoicegroup">
				<div><label class="label-error"></label><p>您还没选定具体的分期数，<br>请先选定分期数.</p></div>
				<div class="f">
					<s class="icon-arrow-down"></s>
				</div>
			</div>
		</div>
    </div>
	<!--订单-表单-支付方式列表结束 -->
        <!--订单确认页跳转过来的-->
	<!--订单-表单-支付方式确认-20121016 -->
    <div class="order-payment-define-area hide" id="order-payment-define-area">
		<div class="b">
			<dl>
				<dd>
					<div class="payment-area vam">
						<input class="radio vam" id="set-bank-input" type="radio"><label class="vam current" for="set-bank-input"><img id="set-bank-img" class="vam" alt="#"><i id="set-bank-i">快捷</i></label>
						<em class="vam" id="set-bank-youhui"></em>
						<div class="bank-event-tips" id="bank-event-tips">
								<p>温馨提示：储蓄卡单笔无限额（专业版网银），信用卡单笔最高限额5000元</p>
								<s></s>
						</div>
					</div>
					<div class="inline-block vam"><span class="order-payment-price">支付&nbsp;<b><span id="payValue">1599.00</span></b>&nbsp;<b>元</b></span></div><br><div class="bank-tips" id="set-bank-tips"><p></p><s></s></div>
				</dd>
			</dl>
			<ul id="instalment-description">
			
			</ul>
			<div class="payment-wechat clearfix hide" id="payment-wechat">
				<div class="payment-wechat-code">
					<div class="payment-wechat-img">
						<img src="" id="payment-wechat-img" alt="">
					</div>
					<div class="payment-wechat-tips">
						<i></i>
						<p>请使用微信扫一扫</p>
						<p>扫描二维码支付</p>
					</div>
				</div>
				<div class="payment-wechat-banner">
					<img src="%./images/payment_wechat_banner.jpg" alt="请使用微信扫一扫">
				</div>
			</div>
			<div class="payment-wechat clearfix hide" id="payment-105" style="width:600px; height:300px;">
				<iframe id="payment-105-img" src="" name="iframepage" scrolling="no" frameborder="0" height="100%" width="100%">
				</iframe>
			</div>
		</div>
		<div class="f">
		<a href="http://www.vmall.com/payment/process?orderCodes=2390112920%7C&amp;paymentMethod=ALIPAY&amp;paymentType=1&amp;state=0" class="button-style-5 button-confirm-payment" id="go2pay" target="_blank">立即支付</a>
		</div>
    </div>

	<!--订单-表单-支付方式确认结束 -->

	</div>
</div>
<div class="hr-50"></div>
    <!-- 订单支付金额  -->
  <input id="orderCashPay" name="cashPay" value="1599.00" type="hidden">


<!-- 银行列表模板 -->
<!-- 银行列表 end-->
<!--订单-表单-支付方式结束 -->
</div>





<!--提交订单-已付款 -->
<!--提交订单-支付-常见问题-20121017 -->

<!--提交订单-支付-常见问题结束 -->
<!--口号-20121025 -->
@include("home.layout.foot");