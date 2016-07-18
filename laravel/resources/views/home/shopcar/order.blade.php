<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="zh-cn">
<title>确认订单华为商城</title>
<link rel="shortcut icon" href="http://www.vmall.com/favicon.ico">
<link href="{{asset('/css/home/ec4.css')}}" rel="stylesheet" type="text/css">

<link href="{{asset('/css/home/main9.css')}}" rel="stylesheet" type="text/css">
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
				<li style="display: none;" class="s-login" id="unlogin_status">
						<script>document.write('<a href="https://hwid1.vmall.com/casserver/remoteLogin?loginChannel=26000000&reqClientType=26&loginUrl=http%3A%2F%2Fhwid1.vmall.com%3A8080%2Foauth2%2Fportal%2Flogin.jsp&service=http%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3D'+encodeURIComponent(encodeURIComponent(window.location.href))+'" rel="nofollow">登录</a>');</script><a href="https://hwid1.vmall.com/casserver/remoteLogin?loginChannel=26000000&amp;reqClientType=26&amp;loginUrl=http%3A%2F%2Fhwid1.vmall.com%3A8080%2Foauth2%2Fportal%2Flogin.jsp&amp;service=http%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3Dhttp%253A%252F%252Fwww.vmall.com%252Forder%252FnowConfirmcart" rel="nofollow">登录</a>
						&nbsp;&nbsp;&nbsp;<a href="https://hwid1.vmall.com/oauth2/portal/regbymail.jsp?service=http://www.vmall.com/account/caslogin&amp;loginChannel=26000000&amp;reqClientType=26" rel="nofollow">注册</a>
				</li>
				<li style="display: list-item;" class="s-user hide" id="login_status">
					<!--
						ie6下鼠标悬停追加ClassName： hover
						示例：[ s-dropdown hover ]
					-->
					<div class="s-dropdown">
						<div class="h">
							<a href="http://www.vmall.com/member?t=14687357054951468735691512" id="customer_name" rel="nofollow" timetype="timestamp" class="link-user">dingzha***...</a>
							 <em class="vip-state" id="vip-info">
								<a style="display: none;" class="link-noAct" href="http://www.vmall.com/member/account" id="vip-inActive" title="请完善个人信息，即刻享受会员特权">去激活</a>
								<a href="http://www.vmall.com/member/point" title="VMALL V0会员" id="vip-Active"><i class="icon-vip-level-0"></i>&nbsp;</a>
								<a title="实名认证" id="authentication" href="http://www.vmall.com/authmember/accesstoken"><i class="icon-authentication icon-authentication-not"></i>&nbsp;</a>
							</em>
							<s></s>
						</div>
						<div class="b">
							<p><a href="https://hwid1.vmall.com/oauth2/userCenter/hwAccount?reqClientType=26&amp;loginChannel=26000000&amp;themeName=cloudTheme" target="_blank" id="user-center">我的华为帐号</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://www.vmall.com/account/logout">退出</a></p>
						</div>
					</div>
				</li>
				<li class="s-myOrders">
					<a href="http://www.vmall.com/member/order?t=14687357054951468735691512" rel="nofollow" timetype="timestamp">我的订单</a>
				</li>
				<li class="s-promo"><a href="http://www.vmall.com/priority" rel="nofollow">V码(优购码)</a></li>
				<li class="s-hwep hide" id="preferential"></li>
				<li class="s-mobile"><a href="http://www.vmall.com/appdownload" target="_blank">手机版</a></li>
				<li class="s-sitemap">
					<div class="s-dropdown">
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


<!--头部 -->
<div class="order-header">
	<div class="g">
    	<div class="fl">
            <div class="logo logo-index"><a href="#" title="华为商城"><img src="{{url('/images/home/newLogo.png')}}" alt="华为商城"></a></div>
        </div>
        <div class="fr">
            <!--步骤-两步骤 -->
            <div class="progress-area progress-area-2">
                <!--核对订单 -->
                <div style="display: block;" id="progress-confirm" class="progress-co-area hide">填写核对订单信息</div>
                <!--成功提交订单 -->
                <div id="progress-submit" class="progress-sso-area hide">成功提交订单</div>
            </div>
        </div>
    </div>
</div>
<script>ec.code.addService({showService : true , showTools : true});</script>


<script>window._to = { start: new Date() };</script>
<script>document.body.className = "wide order";</script>

<div class="layout order">
	<!--栏目 -->

	<!--订单-表单 -->
	<div class="order-form-area">

     <!-- ************************【start 新的地址  edit by wangshaohua  】******************************************************************  -->		
	    	<!-- 20140813-订单-表单-地址-start -->
    	<div class="order-address" id="order-address-mod">
    	
			<h3 class="title">收货人信息<b>[<a id="addAddress" href="javascript:;" onclick="ec.order.myAddress.add()">使用新地址</a>]</b></h3>
			<div style="display: none;" class="order-address-list" id="order-address-list">
				<ol>
				</ol>
			</div>
			<!-- 20140813-订单-表单-地址-空数据-start -->
			<div class="order-address-empty" id="order-address-empty">您还没有收货地址，马上&nbsp;<a id="creatAddress" href="javascript:;" onclick="ec.order.myAddress.add()">添加</a>&nbsp;吧！</div><!-- 20140813-订单-表单-地址-空数据-end -->
			<div id="address-more" class="hide">
				<a href="javascript:;" class="address-expand">更多地址<i></i></a>
			</div>
			<input name="orderDistrict" id="order-district" type="hidden">
            </div>
				<div class="order-invoice">
        	<h3 class="title">发票信息<em>（请谨慎选择发票抬头，订单出库后不能修改）</em></h3>
			<div class="order-invoice-list" id="order-invoice-area">
				<ul>
					<li>
						<div class="invoice-main">
							<input name="titleType" id="titleType-per" class="radio" value="1" checked="checked" seed="Invoice_1" type="radio"><label for="titleType-per">个人</label>
						</div>
					</li>
					<li>
						<div class="invoice-main">
							<input name="titleType" id="titleType-com" class="radio" value="2" type="radio"><label for="titleType-com">单位</label>
						</div>
						<div class="invoice-sub">
							<label><input style="width:21%;" id="invoiceTitle-com" placeholder="请输入单位名称，勿填无关信息" class="text vam" seed="Invoice_content" disabled="disabled" type="text"><span id="companyError"></span></label>
						</div>
					</li>
					
                    <!-- 灰色状态className " invoice-main-disabled " -->
					<input id="selfAllSkuIds" value="5886" type="hidden">
					<input id="huaweiTerminalName" name="huaweiTerminalName" value="华为终端有限公司" type="hidden">
				</ul>
			</div>
			<p class="tips"><em>注意：</em>如果商品由第三方卖家销售，发票内容由其卖家决定，发票由卖家开具并寄出</p>
        </div>
		<!--    新的发票信息【End】            --><!--modify by l00222000 增加支持电子发票 20150320-->
		
		<form id="order-confirm-form" action="/order/createcart" autocomplete="off" method="post">
			<input name="consigneeAddressId" id="order-address" type="hidden">
			<input name="deliveryMethod" id="order-deliveryMethod" value="1" type="hidden">
			<input name="paymentMethod" id="order-paymentMethod" value="" type="hidden">
			<input name="paymentType" id="order-paymentType" value="" type="hidden"> 
			<input name="invoiceTitle" id="order-invoiceTitle" type="hidden">
			<input name="titleType" id="order-titleType" type="hidden">
			<input name="custMessage" id="order-custMessage" type="hidden">
			<input name="couponCode" id="order-couponCode" type="hidden">
			<input name="activityId" id="order-activityId" value="" type="hidden"> 
			<input name="state" id="order-state" value="0" type="hidden">
			<input name="paramExtra" id="order-paramExtra" value="" type="hidden"> 
			<input name="skuIds" value="5886" type="hidden">
			
			
			<input name="answer" id="answer" type="hidden">
			<input name="petalNumber" id="order-huaban" type="hidden">
			<!-- 团购所需参数 -->
			<input id="orderTag" name="orderTag" value="" type="hidden">
			<input name="sbs" value="5886" type="hidden">
			<input name="types" value="1" type="hidden">
			<input name="qtys" value="1" type="hidden">
			<input name="ess" value="" type="hidden">
			<input name="ass" value="" type="hidden">
			<input name="orderNote" id="order-note" type="hidden">
			<input name="_sf" value="18877940f967140a90583b99eb0e10d9" type="hidden">
		</form>
	</div>
	<div class="sc-area">
	<!--如果有自营商品，展示自营商品-->
	<!--购物车 -->
	<!--兼容秒杀订单-->
	  <div class="dt-order-area">
		<!-- 20140630-自营商品订单-start -->
	    <div class="order-pro-list" id="order-pro-list">
			<!--购物车-商品列表-20121016 start-->
			<div class="order-pro-list">
				<!--订单-商品-标题 -->
				<div class="order-pro-title-area">
				    <div class="h">以下商品由&nbsp;&nbsp;<b>华为商城</b>&nbsp;&nbsp;选择合作快递配送</div>
					<div class="b">
						<table border="0" cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th class="tr-pro">商品</th>
									<th class="tr-price">单价（元）</th>
									<th class="tr-quantity">数量</th>
									<th class="tr-subtotal">小计（元）</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
				<!--订单-商品-标题 -->
			<!--订单-商品-套餐-->
				<!--订单-商品-套餐  End-->
				
				<!--订单-商品-普通商品-->
				<div class="order-pro-area">
					<table border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td class="tr-pro">
									<ul class="pro-area-2">
										<li>
										  <a title="华为 HUAWEI 畅享5 移动4G智能手机（梦幻金）" target="_blank" href="http://www.vmall.com/product/2494.html#5886" seed="item-name">华为 HUAWEI 畅享5 移动4G智能手机（梦幻金）</a>
										</li> 
									 </ul>
								 </td>
								<!-- 预付订金商品的价格为空 -->
								<td class="tr-price">¥799.00</td>
								<td class="tr-quantity">1</td>
								<td rowspan="1" class="tr-subtotal">
								<p><b>¥799.00</b></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- 预付订金 start-->
				<!-- 预付订金 end-->
				<!--订单-商品-普通商品 End-->
			</div><!--购物车-商品列表-20121016 end-->
		</div>
		<!--购物车-自营商品列表结束 -->
		<!-- 20140627-商品结算-start -->
		<div class="order-pro-total clearfix">
		   	<div class="fl">
		   	       <!--优惠券使用参数-->
                	<form id="order-normal-form" autocomplete="off" method="post">
		                 <input name="couSkuIds" value="5886" type="hidden">
	               </form>
	               
					<!--20140627-订单-表单-使用优惠-start -->
					 <div class="order-coupon">
						<div class="order-coupon-area">
						    <input id="order-coupon-check" class="checkbox vam" seed="preferential" type="checkbox">
						    <label class="vam">使用优惠券</label>
						    <em>（<a href="http://www.vmall.com/help/faq-957.html" target="_blank" title="了解华为商城优惠券规则">了解优惠券使用规则</a>）</em>
						<span id="coupon-info" class="vam hide"> 
						<span id="coupon-info-desc"></span> 
					
						  <input id="input-couponCode" data-weight="" type="hidden"></span>
					  </div>
					<div class="order-coupon-edit-area hide" id="order-coupon-area">
						<div class="form-edit-area">
							<div class="form-edit-table">
								<form onsubmit="return ec.order.addCoupon()" autocomplete="off">
								<table border="0" cellpadding="0" cellspacing="0">
									<tbody>
										<tr>
											<td>
											<input class="radio vam" id="useCouponRadio" name="CouponTypeSelect" type="radio">
											 <select id="coupon-select" class="vam">
											     <option selected="selected" value="">选择已绑定优惠券</option>
											 </select>
											</td>
										</tr>
										<tr>
											<td>   
										        	<input class="radio vam" id="useCouponRadio" name="CouponTypeSelect" type="radio">
											        <input id="couponCode2" class="text vam span-150" placeholder="请输入优惠券代码" type="text"> 
													<input class="button-style-disabled-4 button-action-use-disabled" value="使用" type="submit">
											</td>
										</tr>
										<tr class="hide">
											<td>
											    <input id="couponDescription" class="radio" name="CouponTypeSelect" checked="checked" type="radio">
											    <label for="">礼券SOHO0216246591646&nbsp;&nbsp;&nbsp;&nbsp;金额￥100.00&nbsp;&nbsp;&nbsp;&nbsp;购物满100可用&nbsp;&nbsp;&nbsp;&nbsp;<em>[<a href="javascript:;">修改</a>]</em></label>
											 </td>
										</tr>
									</tbody>
								</table>
								</form>
								<p>注：华为券每次只能使用一张，不可多张混合使用</p>
							</div>
						</div>
					   </div>
					  </div>
					  <!--20140627-订单-表单-使用优惠-end -->
				   <!-- 20140628-订单-表单-花瓣-start -->
					<div class="order-huaban">
					  <div class="order-huaban-area">
						<input class="checkbox vam" id="huaban-checkbox" onclick="ec.order.huaban.toggle(this)" autocomplete="off" type="checkbox">
						<label class="vam">使用花瓣</label>
						<em>（<a target="_blank" href="http://www.vmall.com/help/faq-960.html" title="了解花瓣使用规则">使用规则</a>）</em>
						<em>（<a href="http://www.vmall.com/member/petal" target="_blank" title="花瓣详情">花瓣详情</a>）</em> 
						<span class="vam hide" id="huaban-deduction-1">¥&nbsp;<b>-0</b>&nbsp;元</span>
					    </div>
					    <div class="order-huaban-edit-area hide" id="huaban-form">
						  <div class="form-edit-area">
							<div class="form-edit-table">
								<table border="0" cellpadding="0" cellspacing="0">
								  <tbody>
									<tr>
										<td>
											<p>
												<input class="text vam span-150" id="huaban-input-text" placeholder="请输入使用花瓣数量" type="text">
												<input class="button-style-4 button-action-use" value="使用" onclick="ec.order.huaban.confirm()" type="button">
												&nbsp;&nbsp;
												<span id="huaban-text-msg-1"></span>
											</p>
											
										</td>
									</tr>
									</tbody>
								</table>
								<p>花瓣余额：<b id="huaban-count">0</b>个&nbsp;（可使用：<span id="huaban-max">0</span>个）&nbsp;<span>¥&nbsp;-<b id="huaban-plus">0</b></span>&nbsp;元</p><span id="huaban-text-msg-2"></span>
							</div>
						 </div>
					  </div>
					  <div class="order-huaban-detail-area hide" id="huaban-confirm">
						<p>
							已使用<b id="huaban-input-num">0</b>个花瓣，实体减额为
							<b id="huaban-deduction-2">0</b>元<em>[<a href="javascript:;" title="修改" onclick="ec.order.huaban.edit()">修改</a>]</em>
						</p>
					  </div>
					</div>
				<!--  20140628-订单-表单-花瓣-end --> 
				 </div>
				 <div class="fr">
					<!-- 20140630-订单-金额-start -->
					<div class="order-cost-area">
						<table border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td class="tal">商品总金额：</td>
								<td class="tar">&nbsp;¥&nbsp;
								   <em id="order-cost-area" data-oldval=" 799.00">799.00</em>
								</td>
							</tr>
							<tr>
								<td class="tal">运费：</td>
								<td class="tar">&nbsp;¥&nbsp;
									   <em id="order-deliveryCharge">0.00</em> 
								</td>
							</tr>
							<tr>
								<td class="tal">使用优惠券：</td>
								<td class="tar">-&nbsp;¥&nbsp;
								  <em><span id="order-couponDiscount">0.00</span> </em>
								</td>
							</tr>
							<tr>
								<td class="tal">使用花瓣：</td>
								<td class="tar">-&nbsp;¥&nbsp;
								  <em><span id="oreder-huaban-num">0.00</span> </em>
								</td>
							</tr>
							<tr>
								<td class="tal">商家活动：
								</td>
								<td class="tar">-&nbsp;¥&nbsp;<em>0.00</em>
								</td>
							</tr>
						</tbody>
					</table>
						<p class="order-cost-total">
						  <span class="p-subtotal-price"> 应付金额：<b class="total">¥</b><b class="total" id="order-price" data-oldval="799.00">799.00</b></span>
					    </p>
					</div><!-- 20140630-订单-金额-end -->
				</div>
		    </div>
		    <!-- 20140627-商品结算-end -->
		    
		    		
			<!--自营订单-赠品   -start-->
			<div id="order-gift-area" class="order-gift-area hide">
				
					<div id="premiumsList" class="hide"></div>
			</div>
			<!--自营订单-赠品-end-->
			
			
		  </div>
		
		
		<!--展示代销商品 start-->
		 <!-- 代销商品展示结束 -->
		 
	    	<!-- 提交订单start-->
			<div class="order-action-area tar">
				<!-- 20140630-订单-下单验证-start -->
				<div class="order-protect">
				</div>
				<!-- 20140630-订单-下单验证-end -->
				   <span class="p-subtotal-price">应付总额：<b>¥<span class="vab" id="payableTotal"></span></b></span>
				<a href="javascript:;" onclick="ec.order.submit();" class="button-style-1 button-submit-order" title="提交订单" seed="checkout-submit"><span>提交订单</span></a>
			</div>
		  <!-- 提交订单end-->
	</div>
</div>
<div class="hr-45"></div>
<!-- 优惠活动列表 -->


<!-- 优惠卷列表 -->
<textarea id="order-coupon-tpl" class="hide">	&lt;!--#macro orderCoupon data--&gt;
	&lt;!--#list data as lst--&gt;
	&lt;option value="{#lst.couponCode}"&gt;{#lst.couponName}&lt;/option&gt;
	&lt;!--/#list--&gt;
	&lt;!--/#macro--&gt;
</textarea>



<!-- 【新地址改造：添加地址修改地址    确认，删除  start】   -->
<div class="ol_box_4" style="width: 690px; display: none;" id="addAddressBox">
    <div class="box-ct">
        <div class="box-header">
            <div class="box-tl"></div>
            <div class="box-tc">
                <div class="box-tc1"></div>
                <div class="box-tc2"><a class="box-close" style="right:-20px;" title="关闭" onclick="return false;" href="javascript:;"></a><span class="box-title">添加地址</span></div>
            </div>
            <div class="box-tr"></div>
        </div>
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td class="box-cl"></td>
                    <td class="box-cc">
                    	<div>
                        	<!-- 20140815-表单-地址-start -->
							<form action="" id="order-address-add-form" name="order-address-add-form">
								<div class="form-address-area">
									<div class="form-edit-area">
										<div class="form-edit-table">
											<table border="0" cellpadding="0" cellspacing="0">
												<tbody>
												<!--
													 <tr>
														<th>&nbsp;</th>
														<td><a href="javscript:;" title="您现在可以直接调用支付宝帐户的收货地址"><img class="vam" alt="使用支付宝地址" src="/images/echannel/btn/btn14.png"/></a></td>
													</tr> -->
													<tr>
														<th><span class="required">*</span><label for="">收货人：</label></th>
														<td><input name="consignee" class="text vam span-200" type="text"><span id="consigneeError"> </span></td>
													</tr>
													<tr>
														<th rowspan="2" class="vat"><span class="required">*</span><label for="">收货地址：</label></th>
                                                        <td name="myAddress-add-region" id="myAddress-add-region">
                                                         </td>
                                                        
													<td> </td>
													</tr>
													<tr>
														<td><textarea class="textarea span-500" placeholder="详细地址" name="address" seed="adress-detail"></textarea><span id="addressDetailError"></span> </td>
													</tr>
													<tr>
														<th><label for="">邮编：</label></th>
														<td><input name="zipCode" class="text vam span-100 ime-disabled" type="text"><span id="zipCodeError"></span>
														</td>
													</tr>
													<tr>
														<th><span class="required">*</span><label for="">手机号码：</label></th>
														<td><div class="vam inline-block"><input name="mobile" class="text span-100 ime-disabled" type="text"></div>&nbsp;&nbsp;
														    <label for="" class="vam">或固定电话：&nbsp;</label><div class="vam inline-block"><input name="phone" class="text  span-150 ime-disabled" placeholder="区号-主机-分机号" type="text"></div><span id="phone-msg"> </span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="box-button">
									<a href="javascript:;" class="box-ok"><span>确定</span></a>
									<a href="javascript:;" class="box-cancel"><span>取消</span></a>
								</div>
								<div>
									<span id="validateAddressMsg"></span>
								</div>
								<input name="randomFlag" id="randomFlag" value="5ca1e10db9ad434008d27abd3bb3a421" type="hidden">
								<input name="id" id="address-edit-id" type="hidden">
							</form>

							<!-- 20140815-表单-地址-end -->
                        </div>
                    </td>
                    <td class="box-cr"></td>
                </tr>
            </tbody>
        </table>
        <div class="box-bottom">
            <div class="box-bl"></div>
            <div class="box-bc"></div>
            <div class="box-br"></div>
        </div>
    </div>
</div>

<div style="display: none;" class="ol_box_4" id="delAddressBox">
    <div class="box-ct">
        <div class="box-header" style="width:400px">
            <div class="box-tl"></div>
            <div class="box-tc" style="width:400px">
                <div class="box-tc1"></div>
                <div class="box-tc2"><a class="box-close" title="关闭" onclick="return false;" href="javascript:;"></a><span class="box-title"></span></div>
            </div>
            <div class="box-tr"></div>
        </div>
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td class="box-cl"></td>
                    <td class="box-cc">
                    	<div class="box-content">
							<!-- 20140815-删除地址tips-start -->
							<div class="box-confirm-area">
								<p>您确定要删除此地址吗？</p>
							</div>
							<div class="box-button">
								<a href="javascript:;" class="box-ok"><span>确定</span></a>
								<a href="javascript:;" class="box-cancel"><span>取消</span></a>
							</div>
							<!-- 20140815-删除地址tips-end -->
                        </div>
                    </td>
                    <td class="box-cr"></td>
                </tr>
            </tbody>
        </table>
        <div class="box-bottom">
            <div class="box-bl"></div>
            <div class="box-bc"></div>
            <div class="box-br"></div>
        </div>
    </div>
</div>
<!-- 【新地址改造：添加地址修改地址   确认，删除   END】     -->


<script src="./confirm.js"></script><script id="jsapi_loader0" loadtype="insert" type="text/javascript" src="./box-min.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader0');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader0 fail!');} return; }ol._setLoadStatus("ec.box/box-min.js","complete");})();</script><script id="jsapi_loader1" loadtype="insert" type="text/javascript" src="./bigInt.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader1');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader1 fail!');} return; }ol._setLoadStatus("dh/bigInt.min.js","complete");})();</script><script id="jsapi_loader2" loadtype="insert" type="text/javascript" src="./aes.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader2');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader2 fail!');} return; }ol._setLoadStatus("aes/aes.js","complete");})();</script><script id="jsapi_loader3" loadtype="insert" type="text/javascript" src="./aesUtil.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader3');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader3 fail!');} return; }ol._setLoadStatus("aes/aesUtil.js","complete");})();</script><script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="./pbkdf2.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("aes/pbkdf2.js","complete");})();</script><script id="jsapi_loader5" loadtype="insert" type="text/javascript" src="./rc4.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader5');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader5 fail!');} return; }ol._setLoadStatus("crypt/rc4.js","complete");})();</script><script id="jsapi_loader6" loadtype="insert" type="text/javascript" src="./region-min.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader6');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader6 fail!');} return; }ol._setLoadStatus("linkSelect/region-min.js","complete");})();</script>

<script>
ec.load("ajax");
	ec.order.isDeliveryFree = 0;
	ec.order.price = 799;
	ec.order.totalPrice = 799;
	ec.order.enterpriseTotalPrice = 0;
	ec.order.discountTotalPrice = 0;
	ec.order.weight = parseInt("100");
	ec.order.deliveryFree = 0;

		ec.order.petalFlagTotalPrice = ec.order.totalPrice - ec.order.enterpriseTotalPrice;
		ec.order.balancePrice = 0;
		ec.order.realTotalPrice = 0;
    ec.order.total=799.00 <!--应付总金额-->
</script><script id="jsapi_loader7" loadtype="insert" type="text/javascript" src="./jquery.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader7');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader7 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script><script id="jsapi_loader8" loadtype="insert" type="text/javascript" src="./ajax.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader8');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader8 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script>

@include("home.layout.foot");