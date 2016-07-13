@include("home.layout.head")
<div class="breadcrumb-area fcn">
		<a href="http://www.vmall.com/index.html" title="首页">首页</a>&nbsp;&gt;&nbsp;

	<span>手机</span>
</div>
<div class="hr-10"></div><div class="layout">
	<!-- 20140726-商品类别-start -->
	<div class="pro-cate-area">
		<!-- 20140726-商品类别-属性-start -->
		<div class="pro-cate-attr clearfix">
			<div class="p-title">分类：</div>
			<div class="p-default">
				<ul>
                    <li id="first-category" class="selected"><a href="http://www.vmall.com/list-36">全部</a></li>
					<!--<li class="selected"><a href="javascript:;">全部</a></li>-->
				</ul>
			</div>

			<!-- 二级虚拟分类 -->
			<div class="p-values">
				<div class="p-operate" style="display: none;">
					<!-- 追加ClassName： more-expand more-drop -->
					<a href="javascript:;" onclick="ec.product.more(this)" class="more more-expand">更多<s></s></a>
				</div>
				<!-- 一行的高度为30px,显示n行，p-expand的高度为nx30 -->
				<div class="p-expand">
					<ul class="clearfix">
	                    <li><a href="http://www.vmall.com/list-75">荣耀</a></li>
	                    <li><a href="http://www.vmall.com/list-77">荣耀畅玩</a></li>
	                    <li><a href="http://www.vmall.com/list-76">华为 Mate/P系列</a></li>
	                    <li><a href="http://www.vmall.com/list-81">华为 G/Y系列</a></li>
	                    <li><a href="http://www.vmall.com/list-38">运营商合约</a></li>
					</ul>
				</div>
			</div>

		</div><!-- 20140726-商品类别-属性-end -->

		<!-- 20140726-商品类别-属性-start -->
        <!-- 20140726-商品类别-属性-end -->

		<!-- 20140726-商品类别-排序-start -->
		<div class="pro-cate-sort clearfix">
			<div class="p-title">排序：</div>
			<div class="p-default">
				<ul>
					<li class="selected" id="sort-default"><a href="javascript:;" onclick="ec.product.sort('default')">默认</a></li>
				</ul>
			</div>
			<div class="p-values">
				<div class="p-expand">
					<ul class="clearfix">
					    <!-- 升序选择（从低到高）： sort-asc selected   降序选择（从高到低）： sort-desc selected -->
						<li id="sort-price"><a href="javascript:;" class="sort-price" onclick="ec.product.sort('price')">价格<s></s></a></li>
						<li id="sort-remarkNumber"><a href="javascript:;" class="sort-eval" onclick="ec.product.sort('remarkNumber')">评价数<s></s></a></li>
						<li id="sort-registterTime"><a href="javascript:;" class="sort-added" onclick="ec.product.sort('registterTime')">上架时间<s></s></a></li>
					</ul>
				</div>
			</div>
		</div><!-- 20140726-商品类别-排序-end -->

		<form id="listForm" method="post">


		</form>

	</div><!-- 20140726-商品类别-end -->

	<div class="hr-20"></div>
</div>

<!--到货通知弹出框-->
<textarea id="product-arrival-html" class="hide">	&lt;div class="arrival-remind-area"&gt;
		&lt;ul class="clearfix"&gt;
			&lt;li id="arrival-email"&gt;
				&lt;p class="a-title"&gt;邮件通知&lt;/p&gt;
				&lt;p id="account-email" class="a-txt"&gt;xxxxxxxxxxxxxxxxxxxx@huawei.com&lt;/p&gt;
				&lt;s&gt;&lt;/s&gt;
			&lt;/li&gt;
			&lt;li id="arrival-mobile"&gt;
				&lt;p class="a-title"&gt;短信通知&lt;/p&gt;
				&lt;p id="account-mobile" class="a-txt"&gt;185&nbsp;6644&nbsp;5856&lt;/p&gt;
				&lt;s&gt;&lt;/s&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
	&lt;div class="box-custom-button"&gt;
		&lt;input type="submit" class="box-ok box-button-style-1" value="提交"/&gt;
	&lt;/div&gt;
	&lt;div id="arrival-error" class="box-form-tips hide"&gt;
		&lt;span class="icon-error"&gt;输入有误&lt;/span&gt;
	&lt;/div&gt;
</textarea>


<script src="./css/new_list.js"></script><script id="jsapi_loader0" loadtype="insert" type="text/javascript" src="./css/jquery.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader0');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader0 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();</script><script id="jsapi_loader1" loadtype="insert" type="text/javascript" src="./css/ajax.js" charset="utf-8"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader1');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader1 fail!');} return; }ol._setLoadStatus("ajax","complete");})();</script>
<script>
	ec.load("ec.pager");
</script><script id="jsapi_loader2" loadtype="insert" type="text/javascript" src="./css/pager-min.js" charset="gbk"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader2');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader2 fail!');} return; }ol._setLoadStatus("ec.pager/pager-min.js","complete");})();</script>
	<!-- 20140726-频道-列表-start -->
    <div class="channel-list">
        <!-- 20140727-商品列表-start -->
		<div class="pro-list clearfix">
			<ul>
      @foreach($goods as $good)
      <li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="#" title="{{$good->name}}"><img alt="{{$good->name}}" src="{{$good->im}}"></a></p>
						<p class="p-name"><a target="_blank" href="#" title="{{$good->name}}">{{$good->name}}<span class="red"></span></a></p>
						<p class="p-price"><b>¥{{$good->price}}</b></p>
						<div class="p-button clearfix">
							<table colspan="0" rowspan="0" border="0">
								<tbody>
									<tr>
										<td><a href="javascript:;" onclick="ec.product.arrival(762843846)" class="p-button-an"><span>到货通知</span></a></td>
										<td><label class="p-button-score"><span>0人评价</span></label></td>
									</tr>
								</tbody>
							</table>
						</div>
						
					</div>
				</li>
        @endforeach
			</ul>
		</div>
		<!-- 20140727-商品列表-end -->
		<!-- 分页-start -->
		<div id="list-pager-36" class="pager"><ul><li class="pgNext link first first-empty">|&lt;</li><li class="pgNext link pre pre-empty">&lt;</li><span class="qpages"><li class="page-number link pgCurrent">1</li><li class="page-number link">2</li></span><li class="pgNext link next">&gt;</li><li class="pgNext link last">&gt;|</li><li class="text quickPager"><select><option value="1" selected="selected">1</option><option value="2">2</option></select></li></ul></div>
    </div><!-- 20140726-频道-列表-end -->
<!--弹出层-成功添加到购物车 -->
<textarea id="cart-tips" class="hide">&lt;div class="pro-add-success"
style="margin:-14px -30px 0;"&gt;
	&lt;dl&gt;
		&lt;dt&gt;&lt;s&gt;&lt;/s&gt;&lt;/dt&gt;
		&lt;dd&gt;
			&lt;div id="cart-briefName" class="pro-add-success-name"&gt;华为 Ascend
 P1 U9200 3G手机（晶钻黑）WCDMA&lt;/div&gt;
			&lt;div class="pro-add-success-msg"&gt;成功加入购物车!&lt;/div&gt;
			&lt;div class="pro-add-success-total"&gt;购物车中共&nbsp;&lt;b
id="cart-total"&gt;0&lt;/b&gt;&nbsp;件商品，金额合计&nbsp;&lt;b
id="cart-price"&gt;¥&nbsp;2699&lt;/b&gt;&lt;/div&gt;
			&lt;div class="pro-add-success-button"&gt;&lt;a href="javascript:;"
class="box-ok button-style-1 button-go-cart"
title="去购物车结算"&gt;去结算&lt;/a&gt;&lt;a class="box-cancel button-style-4
button-walking" href="javascript:;"
title="继续逛逛"&gt;继续逛逛&nbsp;&gt;&gt;&lt;/a&gt;&lt;/div&gt;
		&lt;/dd&gt;
	&lt;/dl&gt;
&lt;/div&gt;
</textarea>
<!-- 20131218-商品简介-弹出层-成功添加到购物车-end -->

<!--弹出层-添加到购物车失败 -->
<textarea id="popup-tips" class="hide">    &lt;!--
20131230-商品简介-弹出层-添加到购物车失败-start --&gt;
	&lt;div class="pro-add-error" style="margin-top:-40px;"&gt;
		&lt;i&gt;&lt;/i&gt;
		&lt;div id="popup-tips-msg"
class="pro-add-error-msg"&gt;非常抱歉！该商品不能单独销售！&lt;/div&gt;
		&lt;div class="pro-add-error-button"&gt;&lt;a href="javascript:;"
title="知道了" class="box-cancel button-style-4
button-par-define"&gt;知道了&lt;/a&gt;&lt;/div&gt;
	&lt;/div&gt;
</textarea>
<!-- 20131230-商品简介-弹出层-添加到购物车失败-end -->




<form action="#" id="gotourl" method="get"></form>
<script>
	//去结算
	ec.product.gotoshoppingCart = function(){
		//BI统计
		_paq.push(['trackLink','加入购物车-去支付', 'link', ' ']);
		ec.code.addAnalytics({hicloud:true});
		setTimeout(function () {
			//var url = '/order/shoppingCart';
			var url = 'http://cart.vmall.com/cart/cart.html';
			$('#gotourl').attr('action', url).submit();
		}, 500);
	};
</script><div class="hr-40"></div>
<script>
    ec.ready(function(){
        //封装已选属性列表
        var attrList = [];
	    ec.product.renderPage(36, attrList, 'default', 'desc', {
		    pageNumber : 1,
		    totalPage : 2,
		    recordCount : 25
	    });
    });

    /**
     *描述：当点击一级分类，在展现属性中，可能出在存在相同的属性名称。
     *所以现在暂时弥补的方法  当点击分类---"全部"的时候，隐藏下面属性的列
     *@lifeng
    */
    ec.ready(function(){
    	var result = $("#first-category").attr("class");
    	if(result == "selected"){
    		//把分类下面的属性全部隐藏
    		$(".pro-cate-area").find("div[id^='pro-cate-attr-']").hide();
    	}
    })

</script>
@include("home.layout.foot")
