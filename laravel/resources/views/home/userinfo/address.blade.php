@include("home.layout.head");

<link href="{{asset('/css/home/main7.css')}}" rel="stylesheet" type="text/css">

<div class="hr-10"></div>
<div class="g">
	<!--面包屑 -->
<div class="breadcrumb-area"><a href="http://www.vmall.com/" title="首页">首页</a>&nbsp;&nbsp;\&nbsp;&nbsp;<em id="personCenter"><a href="http://www.vmall.com/member/" title="我的商城">我的商城</a></em><em id="pathPoint">&nbsp;&nbsp;\&nbsp;&nbsp;</em><span id="pathTitle">收货地址管理</span></div>	
</div>
<div class="hr-10"></div>

<div class="g">
    <div class="fr u-4-5"><!-- 20141212-栏目-start -->
<div class="section-header">
    <div class="fl">
        <h2><span>收货地址管理</span></h2>
    </div>
</div><!-- 20141212-栏目-end -->
<div class="hr-20"></div>
<!-- 20141216-我的收货地址-表单-编辑地址-start -->
<div class="myAddress-edit" id="myAddress-edit">
    <div class="form-edit-panels" id="form-edit-panels">
	    <form id="myAddress-form" action="" autocomplete="off" method="post" onsubmit="return ec.member.myAddress.save(this)" data-type="add">
            <input name="id" id="id" value="" type="hidden">
            <input name="randomFlag" id="randomFlag" value="6cbdf2bef664b5406b8d23179a15c0f8" type="hidden">
            <div class="form-edit-table">
                <table border="0" cellpadding="0" cellspacing="0">
                	<tbody>
                        <tr>
                            <th><span class="required">*</span><label for="consignee">收货人：</label></th>
                            <td>
                            	<input validator="validator11467805414437" maxlength="20" name="consignee" id="consignee" class="text span-130" type="text">
                            	<label id="consignee-msg"></label>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="2" class="selecte-vat"><span class="required">*</span><label for="province">收货地址：</label></th>
                            <td>
								<div id="myAddress-region" class="inline-block"><span class="ol_linkSelect ol_linkSelect_region"><select id="province" name="province" class="ec_linkSelect"><option selected="selected" value="">- 请选择 -</option><option value="3510">北京</option><option value="3511">安徽</option><option value="3656">福建</option><option value="3751">甘肃</option><option value="3853">广东</option><option value="4035">广西</option><option value="4158">贵州</option><option value="4261">海南</option><option value="4304">河北</option><option value="4489">河南</option><option value="4672">黑龙江</option><option value="4814">湖北</option><option value="4935">湖南</option><option value="5073">吉林</option><option value="5147">江苏</option><option value="5285">江西</option><option value="5399">辽宁</option><option value="5516">内蒙古</option><option value="5630">宁夏</option><option value="5662">青海</option><option value="5714">山东</option><option value="5873">山西</option><option value="6008">陕西</option><option value="6126">上海</option><option value="6147">四川</option><option value="6349">天津</option><option value="6370">西藏</option><option value="6451">新疆</option><option value="6565">云南</option><option value="6711">浙江</option><option value="6819">重庆</option></select></span></div>
								<label id="myAddress-msg"></label>
							</td>
                        </tr>
                        <tr class="tr-rel">
                            <td>
                            	<div class="inline-block relative">
                            		<label for="address" class="textarea span-480" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; color: rgb(153, 153, 153);">详细地址</label><textarea style="z-index: 1;" validator="validator21467805414437" name="address" id="address" maxlength="100" class="textarea span-480"></textarea>
                            	</div>
                            	<label class="vat" id="address-msg"></label>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="zipCode-add">邮编：</label></th>
                            <td>
                            	<input validator="validator31467805414437" maxlength="6" class="text span-80 ime-disabled" name="zipCode" id="zipCode" type="text">
                            	<label id="zipCode-msg"></label>
                            </td>
                        </tr>
                        <tr>
                            <th><span class="required">*</span><label for="mobile">手机号码：</label></th>
                            <td>
								<div class="inline-block vam"><input validator="validator41467805414437" maxlength="15" name="mobile" id="mobile" class="text span-130 ime-disabled" alt="tel-msg" type="text"><label class="titlebox" for="phone">或者固定电话：</label></div>
								<div class="inline-block vam relative"><label for="phone" class="text span-130 ime-disabled" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; color: rgb(153, 153, 153);">区号-主机-分机号</label><input style="z-index: 1;" validator="validator51467805414438" maxlength="20" name="phone" id="phone" class="text span-130 ime-disabled" alt="tel-msg" type="text"></div>
								<label id="tel-msg"></label>
			    			</td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td>
                            	<label class="inputbox"><input class="checkbox" name="defaultFlag" value="1" id="myAddress-default" type="checkbox"><span>设为默认收货地址</span></label>
                            </td>
                        </tr>
                        <tr class="tr-action">
                        	<th>&nbsp;</th>
                        	<td>
                        		<div id="form-edit-button">
                        			<input id="button-ok" class="button-action-ok" value="添加新地址" type="submit"><a href="javascript:;" id="button-cancel" class="button-action-cancel" onclick="ec.member.myAddress.reset()"><span>清&nbsp;&nbsp;空</span></a>
                        			<label class="label-info" id="submit-msg"></label>
                        		</div>
                        	</td>
                        </tr>
                    </tbody>
                </table>
            </div>
	    </form>
    </div>
</div>
<!-- 20141216-我的收货地址-表单-编辑地址-end -->
<div class="hr-30"></div>
<!-- 20141216-我的收货地址-列表-start -->
<!--表单-我的收货地址 -->
<div style="display: block;" class="myAddress-record hide" id="myAddress-record">
	<div class="list-group-title">
		<table border="0" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th class="col-name">收货人</th>
					<th class="col-address">收货地址</th>
					<th class="col-zip">邮编</th>
					<th class="col-tel">手机/电话</th>
					<th class="col-operate">操作</th>
				</tr>
			</thead>
		</table>
	</div>
	<div class="list-group" id="list-group"><div class="list-group-item" id="myAddress-area-28664189"><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="col-name">张晓宇</td><td class="col-address">北京&nbsp;&nbsp;北京&nbsp;&nbsp;东城区&nbsp;&nbsp;北京市</td><td class="col-zip">111111</td><td class="col-tel"><p>13111112311</p></td><td class="col-operate"><p class="p-edit"><a class="edit" href="javascript:;" onclick="ec.member.myAddress.edit(28664189);" title="编辑"><span>编辑</span></a></p><p class="p-del"><a class="del" href="javascript:;" onclick="ec.member.myAddress.del(this,28664189);" title="删除"><span>删除</span></a></p><p class="p-state"><span class="default">默认地址</span></p></td></tr></tbody></table></div></div>
</div>
<textarea class="hide" id="success-tips">
</textarea>
<script src="%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_%E5%8D%8E%E4%B8%BA%E5%95%86%E5%9F%8E_files/address.js"></script><script id="jsapi_loader0" loadtype="insert" type="text/javascript" src="%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_%E5%8D%8E%E4%B8%BA%E5%95%86%E5%9F%8E_files/jquery.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader0');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader0 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script><script id="jsapi_loader1" loadtype="insert" type="text/javascript" src="%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_%E5%8D%8E%E4%B8%BA%E5%95%86%E5%9F%8E_files/ajax.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader1');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader1 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script><script id="jsapi_loader2" loadtype="insert" type="text/javascript" src="%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_%E5%8D%8E%E4%B8%BA%E5%95%86%E5%9F%8E_files/box-min.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader2');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader2 fail!');} return; }ol._setLoadStatus("ec.box/box-min.js","complete");})();</script><script id="jsapi_loader3" loadtype="insert" type="text/javascript" src="%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_%E5%8D%8E%E4%B8%BA%E5%95%86%E5%9F%8E_files/region-min.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader3');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader3 fail!');} return; }ol._setLoadStatus("linkSelect/region-min.js","complete");})();</script><script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_%E5%8D%8E%E4%B8%BA%E5%95%86%E5%9F%8E_files/bigInt.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("dh/bigInt.min.js","complete");})();</script><script id="jsapi_loader5" loadtype="insert" type="text/javascript" src="%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_%E5%8D%8E%E4%B8%BA%E5%95%86%E5%9F%8E_files/aes.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader5');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader5 fail!');} return; }ol._setLoadStatus("aes/aes.js","complete");})();</script><script id="jsapi_loader6" loadtype="insert" type="text/javascript" src="%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_%E5%8D%8E%E4%B8%BA%E5%95%86%E5%9F%8E_files/aesUtil.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader6');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader6 fail!');} return; }ol._setLoadStatus("aes/aesUtil.js","complete");})();</script><script id="jsapi_loader7" loadtype="insert" type="text/javascript" src="%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_%E5%8D%8E%E4%B8%BA%E5%95%86%E5%9F%8E_files/pbkdf2.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader7');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader7 fail!');} return; }ol._setLoadStatus("aes/pbkdf2.js","complete");})();</script><script id="jsapi_loader8" loadtype="insert" type="text/javascript" src="%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_%E5%8D%8E%E4%B8%BA%E5%95%86%E5%9F%8E_files/rc4.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader8');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader8 fail!');} return; }ol._setLoadStatus("crypt/rc4.js","complete");})();</script></div>
	<div class="fl u-1-5">
    	

<!--左边菜单 -->
<div class="mc-menu-area">
	<div class="h"><a href="http://www.vmall.com/member?t=1467805409931" class="button-go-mc" title="我的商城"><span>我的商城</span></a></div>
    <div class="b">
        <ul>
        	<li>
        		<h3>
        			<span>订单中心</span>
        		</h3>
            	<ol>
                	<li id="li-order"><a href="http://www.vmall.com/member/order?t=1467805409931" title="我的订单"><span>我的订单<em>1</em></span></a></li>
                    <li id="li-exchange"><a href="http://www.vmall.com/member/exchange?t=1467805409931" title="我的退换货"><span>我的退换货</span></a></li>
					<li id="li-groupBuyRecord"><a href="http://www.vmall.com/member/groupBuyRecord?t=1467805409931" title="我的团购"><span>我的团购</span></a></li>
					<li id="li-recover"><a href="http://www.vmall.com/member/recycle/index?t=1467805409931" title="我的回收单"><span>我的回收单</span></a></li>
                </ol>
            </li>
            <li>
            	<h3>
            		<span>个人中心</span>
            	</h3>
            	<ol>
            		<li id="li-myAppointment"><a href="http://www.vmall.com/member/myAppointment?t=1467805409931" title="我的预约"><span>我的预约</span></a></li>
                    <li id="li-notification"><a href="http://www.vmall.com/member/notification?t=1467805409931" title="到货通知"><span>到货通知</span></a></li>
                    <li id="li-point"><a href="http://www.vmall.com/member/point?t=1467805409931" title="等级与特权"><span>等级与特权</span></a></li>
                    <li id="li-authentication"><a href="http://www.vmall.com/authmember/accesstoken?t=1467805409931" title="实名认证"><span>实名认证</span></a></li>
                    <li id="li-balance"><a href="http://www.vmall.com/member/balance?t=1467805409931" title="代金券"><span>代金券</span></a></li>
					<li id="li-petal"><a href="http://www.vmall.com/member/petal?t=1467805409931" title="我的花瓣"><span>我的花瓣</span></a></li>
                    <li id="li-coupon"><a href="http://www.vmall.com/member/coupon?t=1467805409931" title="我的优惠劵"><span>我的优惠劵</span></a></li>
                    <li id="li-enterprise" class="hide"></li>
                    <li class="current" id="li-myAddress"><a href="http://www.vmall.com/member/myAddress?t=1467805409931" title="收货地址管理"><span>收货地址管理</span></a></li>
                    <!--  
                    <li id="li-zp"><a href="/member/invoiceQualifications/view?t=1467805409931" title="专票资质"><span>专票资质</span></a></li>
                	-->
                </ol>
            </li>
            <li>
            	<h3>
            		<span>社区中心</span>
            	</h3>
            	<ol>
                	<li id="li-prdRemark"><a href="http://www.vmall.com/member/prdRemarkView?t=1467805409931" title="商品评价"><span>商品评价</span></a></li>
                    <li id="li-msg"><a href="http://www.vmall.com/member/msg?t=1467805409931" title="站内信"><span>站内信</span></a></li>
                </ol>
            </li>
        </ul>
    </div>
    <div class="f"></div>
</div>
    </div>
</div>
<div class="hr-80"></div>

<!--口号-20121025 -->
@include("home.layout.foot");