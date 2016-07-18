@include("home.layout.head")
<link type="text/css" rel="stylesheet" href="{{asset('/css/home/page.css')}}" />
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
						<p class="p-img"><a target="_blank" href="{{url('/Home/goodslist/'.$good->gid)}}" title="{{$good->name}}"><img alt="{{$good->name}}" src="{{$good->im}}"></a></p>
						<p class="p-name"><a target="_blank" href="{{url('/Home/goodslist/'.$good->gid)}}" title="{{$good->name}}">{{$good->name}}<span class="red"></span></a></p>
						<p class="p-price"><b>¥{{$good->price}}</b></p>
						<div class="p-button clearfix">
							<table colspan="0" rowspan="0" border="0">
								<tbody>
									<tr>
										<td><a href="javascript:;" onclick="ec.product.arrival(762843846)" class="p-button-an"><span>加入购物车</span></a></td>
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
		<div id="list-pager-36">{!!$goods->render()!!}</div>
    </div><!-- 20140726-频道-列表-end -->

@include("home.layout.foot")
