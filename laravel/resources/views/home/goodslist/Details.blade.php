@include("home.layout.head")
<div class="hr-10"></div>
<div class="g">
	<!--面包屑 -->
	<div class="breadcrumb-area fcn"><a href="{{url('/')}}" title="首页">首页</a>&nbsp;&gt;&nbsp;<span id="bread-pro-name">{{$goodslist->name}}</span></div>
</div>
<div class="hr-10"></div>
<div class="layout">
	<!--商品简介 -->
	<div class="pro-summary-area clearfix">
    	<div class="right-area">
        	<!--商品简介-属性 -->
        	<div class="pro-property-area clearfix">
                <div class="pro-meta-area">
                	<h1 id="pro-name">{{$goodslist->name}}</h1>

                	<!-- 插入 商品简介-广告语-->
                	<div class="pro-slogan" id="skuPromWord">{{$goodslist->intro}}</div>
                	<div class="hr-10"></div>
					<div class="line"></div>

                    <div class="pro-price">
							 <s style="display: none;" id="pro-price-old" class="hide"><label>华&nbsp;为&nbsp;&nbsp;价：</label>¥&nbsp; </s>
							 <span id="pro-price"><label>华&nbsp;为&nbsp;&nbsp;价：</label><b>¥&nbsp;{{$goodslist->price}}</b></span>
                    </div>

                    <!--chenzhongxian 促销和赠品合并-->
                    <!--商品简介-促销规则 -->
                    <div id="pro-promotions-area" class="pro-promotions-area">
                       <dl class="clearfix">
                            <dt>优惠信息：</dt>
                            <dd>
                                <ul style="display: none;" id="pro-promotions-list"></ul>
                                <ul id="pro-gift-list"><li><span>配&nbsp;</span> <a href="" target="_blank">华为 HUAWEI Type C 转接头（白色）</a></li></ul>
                            </dd>
                        </dl>
                    </div>

                    <div class="pro-coding"><label>商品编码：</label><span id="pro-sku-code">10110010133602</span></div>
                    <div class="pro-evaluate"><label>商品评分：</label><span class="pro-star"><span class="starRating-area"><s id="prd-remark-scoreAverage" style="width: 100%;"></s></span></span>&nbsp;（<a id="prd-remark-jmptoremark" href="#pro-tab-evaluate" onclick="ec.product.jmptoRemark()" title="共 20629 条评论">共&nbsp;20629&nbsp;条评论</a>）</div>

			<div class="pro-freight"><label>运&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;费：</label>
			<span style="color:red;">满&nbsp;99&nbsp;免运费</span>

			</div>
			<div class="pro-service"><label>服&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;务：</label>由华为商城负责发货，并提供售后服务</div>
			<div class="pro-service"><label>以旧换新：</label><a href="" target="_blank" textvalue="旧机最高抵5000元，立即参加&gt;&gt;"><span style="color:#ff0000"><span style="font-family:'微软雅黑','sans-serif';color:red;font-size:14px"><span style="font-family:arial, helvetica,sans-serif;color:red;font-size:12px">旧机最高抵</span><span style="font-family:arial, helvetica,sans-serif;color:red;font-size:12px">5000元，</span></span>立即参加&gt;&gt;</span></a></div>
		    <div class="hr-10"></div>
		    <div class="line"></div>
		    <div class="hr-15"></div>

                    <!--商品简介-SKU -->
                    <div id="pro-skus" class="pro-sku-area"><dl class="clearfix pro-sku-img"><dt>选择颜色：</dt><dd><ol><li class="tac pointer attr64263" data-attrname="颜色" data-attrid="64263" data-skuid="8267"><div class="sku"> <a title="{{$goodslist->color}}"><img src="{{$goodslist->thum}}" alt="{{$goodslist->color}}"></a><s></s>{{$goodslist->color}}</div></li></ol></dd></dl><dl class="clearfix pro-sku-text"><dt>选择制式：</dt><dd><ol><li class="tac pointer attr64241 attr64265 attr65097 attr68275 attr68281 attr68287 attr68317 selected" data-attrname="制式" data-attrid="64241,64265,65097,68275,68281,68287,68317" data-skuid="8255,8267,8259,8261,8263,8265,721625417"><div class="sku"> <a title="{{$goodslist->network}}">{{$goodslist->network}}</a><s></s></div></li></ol></dd></dl><dl class="clearfix pro-sku-text"><dt>选择内存：</dt><dd><ol><li class="tac pointer attr64243 attr65099 attr68277 attr68319 selected" data-attrname="内存" data-attrid="64243,65099,68277,68319" data-skuid="8255,8259,8261,721625417"><div class="sku"> <a title="{{$goodslist->versions}}">{{$goodslist->versions}}</a><s></s></div></li></ol></dd></dl></div>

					<div style="display: none;" class="pro-sku-area hide" id="contractLst">
						<!-- 联通合约机套餐 -->
						<dl class="pro-sku-text clearfix ">
								<dt>合&nbsp;&nbsp;约&nbsp;&nbsp;机：</dt>
								<dd id="contractList-ol">
								</dd>
						</dl>
						<form action="/contract/choose-{id}" id="contractForm" class="hide"></form>
					</div>


					<!-- 20140710-商品简介-延保-start -->
					<div style="display: block;" class="pro-ew-area hide">
						<dl class="pro-sku-text clearfix">
							<dt>购买服务：</dt>
							<dd>
								<ol class="clearfix">
									<!-- 鼠标悬停追加ClassName： hover，选中追加Class Name：selected -->
									<li style="z-index: 3;" id="extendProtected" class="sku-select">
										<!-- 取数据字节最长的div.sku的宽度赋值给所有div.sku -->
										<div style="width: 208px;" class="sku">
										   <a id="2663" href="" title="延保服务">终端延保服务（一年期）¥188.00</a><i></i><s></s>
										</div>
										<ul><li><div style="width:208px" class="sku" title="6092"><a id="2663" href="." title="延保服务">终端延保服务（一年期）¥188.00</a></div></li><li><div style="width:208px" class="sku" title="820742949"><a id="728258707" href="." title="延保服务">终端延保服务（半年期）¥98.00</a></div></li></ul>

									</li>
									<li id="extendProtectedProduct">
										<div class="pro-sku-tips">
											<a id="2663" href="" target="_blank">详情 &gt;</a>
										</div>
									</li>
									<li style="z-index: 3;" id="accidentProtected" class="sku-select clear">
										<!-- 取数据字节最长的div.sku的宽度赋值给所有div.sku -->
										<div style="width: 244px;" class="sku">
										      <a id="472525757" href="." title="意外保服务">意外保障服务D（一年期）¥280.00</a><i></i><s></s>
										</div>
										<ul><li><div style="width:244px" class="sku" title="199637048"><a id="472525757" href="." title="意外保服务">意外保障服务D（一年期）¥280.00</a></div></li><li><div style="width:244px" class="sku" title="441601818"><a id="739671590" href="." title="意外保服务">碎屏意外保障服务D（一年期）¥139.00</a></div></li></ul>
										<div class="pro-sku-tips">
										</div>
									</li>

									<li id="accidentProtectedProduct">
										<div class="pro-sku-tips">
											<a id="472525757" href="" target="_blank">详情 &gt;</a>
										</div>
									</li>

								</ol>
							</dd>
						</dl>
					</div><!-- 20140710-商品简介-延保-end -->

                    <!-- 关联商品 -->
					<div class="pro-sku-area" id="relPrdList">
						<dl class="pro-sku-text clearfix">
							<dt>关联商品：</dt>
							<dd>
								<ol>
									<li data-id="3419"><div class="sku"><a title="HUAWEI P9 Plus" href="" target="_blank">HUAWEI P9 Plus</a><s></s></div></li>
									<li data-id="3457"><div class="sku"><a title="华为 HUAWEI Type C 转接头" href="" target="_blank">华为 HUAWEI Type C 转接头</a><s></s></div></li>
								</ol>
							</dd>
						</dl>
					</div>
                    
                                       <script src="/js/jquery-1.8.3.min.js"></script>
                                       <meta name="csrf-token" content="{{ csrf_token() }}" />
                                                    <script>
                                                    $.ajaxSetup({
                                                            headers: {
                                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                            }
                                                    });
                                                    </script>
                             <?php
                                $count =1;
                               ?>
     	

                    <!-- 20131215-商品简介-购买数量-start -->
					<div id="pro-quantity-area" class="pro-stock-area">
						<dl class="clearfix">
							<dt>购买数量：</dt>
							<dd>
							 <span class="stock-area">


                                                <form method="post" action="/Home/goodslist">
                                           <input  type="hidden" name="_token" value="{{csrf_token()}}">
                                           <input type="hidden" name="gid" value="{{$goodslist->gid}}">
                                           <input type="hidden" name="name" value="{{$goodslist->name}}">
                                           <input type="hidden" name="price" value="{{$goodslist->price}}">
                                           <input type="hidden" name="thum" value="{{$goodslist->thum}}">
                                           <input type="hidden" name="color" value="{{$goodslist->color}}">
                                        

						     <a href="javascript:;" class="icon-minus-2 vam butt" title="减" ><span>-</span></a><input style="ime-mode: disabled;" id="pro-quantity" class="vam text"    value="{{$count}}"   autocomplete="off" type="text" name="count"><a href="javascript:;" class="icon-plus-2 vam butt" title="加"><span>+</span></a>
                                         <script src="/js/home/shoplist.js"></script>
                    
                                                         </span>

							</dd>
						</dl>
					</div><!-- 20131215-商品简介-购买数量-end -->

                    <!--  商品简介-购买数量
					<div id="pro-quantity-area" class="pro-stock-area" style="display: none;">购买数量：
    					<span class="stock-area">
						<input id="pro-quantity" type="text" class="vam text" value="1" autocomplete="off" />
   						</span>
					</div>
                      -->
                    <!-- dbank温馨提示 -->
                    <div class="pro-tips-area" id="pro-msg" style="display: none;">
                    	<div class="tips-style-2 tips-area">
                    		<i></i>
                    		 <div class="tips-text"><p><span>温馨提示：</span><span id="pro-msg-title">本套餐只适用于华为网盘标准和VIP用户购买，至尊VIP用户请勿购买。</span></p></div>
						</div>
					</div><!-- 20131218-商品简介-tips-end -->

                </div><!--end pro-meta-area-->

		<!--商品简介-提交操作 -->
		
<!--商品简介-提交操作 -->

<div class="pro-fixed-action">

    <div id="pro-select-sku" class="pro-selected"></div>
    <div style="visibility: visible;" id="pro-operation" class="pro-action-area"> 

        <input name="" type="submit" class="button-add-cart button-style-1" value="加入购物车"/>
        <input name="" type="submit" class="button-book-2 button-style-2" value="立即下单"/></div>
    <div class="pro-agreement-area hide" id="pro-agreement-area">
		<input class="vam" checked="checked" id="pro-agreement-area-check" type="checkbox"><label for="" class="vam">同意</label>&nbsp;<a href="." class="vam" onclick="">订金支付协议</a>
	</div>
</div>
</form>

<!--弹出层-成功添加到购物车 -->
<div id="cart-tips" class="pro-popup-area hide">
     <div class="h">
	<a href="" class="pro-popup-close" title="关闭"><span>关闭</span></a>
    </div>
    <div class="b">
		<div class="pro-add-success">
			<dl>
			<dt><s></s></dt>
				<dd>
					<p>HUAWEI P9 双摄像头  指纹识别</p>
					<div class="pro-add-success-msg">成功加入购物车!</div>
					<div class="pro-add-success-total">购物车中共&nbsp;<b id="cart-total">0</b>&nbsp;件商品，金额合计&nbsp;<b id="cart-price">¥&nbsp;0</b></div>
					<div class="pro-add-success-button"><a href="." class="button-style-1 button-go-cart" title="去购物车结算" onclick="ec.product.gotoshoppingCart()">去结算</a><a class="button-style-4 button-walking" href="." title="继续逛逛" onclick="">继续逛逛&nbsp;&gt;&gt;</a></div>
				</dd>
			</dl>
		</div>
    </div>
</div>



<!-- 20130913-弹出层-购买延保-start -->
<div id="popup-extend" class="pro-popup-area hide">
	<div class="h">
		<a href="." class="pro-popup-close" title="关闭" onclick="">关闭</a>
	</div>

	<div class="b">
		<div class="pro-extend-area">
				<h3>购买延保</h3>
				<div class="pro-extend-search">
					<div class="form-edit-area">
						<form action="." id="checkExtend-ID" onsubmit="return ec.product.checkExtend()">
							<input id="extendSkuId" type="hidden">
							<label for="extend-text" class="text vam" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; color: rgb(153, 153, 153);">输入IMEI/SN/MEID信息</label><input style="z-index: 1;" class="text vam" id="extend-text" maxlength="50" type="text"><input class="button-style-4 button-extend-search vam" value="查看可购买的延保" type="submit">
						</form>
					</div>
				</div>

				<div class="pro-extend-result hide" id="pro-extend-result-id">
					<div id="extend-msg-succuss" class="hide"></div>
					<div id="extend-msg-error" class="hide"></div>
				</div>

				<div class="pro-extend-tips">温馨提示：IMEI/SN/MEID号可在产品外包装上找到，可拆卸电池的手机可将电池拆掉电池下面的标签上可以看到，手机上输入*#06#也可以显示。</div>
				<div class="pro-extend-button">
					<a id="button-extend" class="button-style-disabled-1 button-go-extend-checkout-disabled" href="." title="提交订单" onclick=""><span>提交订单</span></a>
				</div>
		</div>
	</div>

</div><!-- 20130913-弹出层-购买延保-end -->

<!-- Baidu Button BEGIN -->
<div class="pro-bdShare-area">
	<div id="bdshare" class="bdShare bdshare_t bds_tools get-codes-bdshare" data="">
	</div>
</div>
<form action="#" id="gotourl" method="get"></form>

<!-- Baidu Button END -->            </div>
        </div>

        <div class="left-area">
        	<!--商品简介-图片画廊 -->
        	<div class="pro-gallery-area">
            	<div class="pro-gallery-img">
                    <div id="small"  style="padding:0px;margin:0px; top:0px;z-index:300;position:absolute;width:480px;height:480px; overflow:hidden"><img src="{{$goodslist->thum}}" alt="" width='100%' id='smallImg'>
                        <div id="move" style="padding:0px;margin:0px; width:150px;height:150px;z-index:301;position:absolute;background:url('/images/home/bg.png');left:0px;top:0px;visibility:hidden;cursor:move;"></div>
                            
                    </div>
                    <div id="big" style="padding:0px;margin:0px; width:480px;height:480px;position:absolute;left:540px;top:0px;overflow:hidden;display:none; background:white;z-index:3000"><img src="{{$goodslist->thum}}" alt="" id='bigImg' style="position:absolute;width:960px;height:960px"></div>
                    
      <script type="text/javascript">
                var small = document.getElementById('small');

                var move = document.getElementById('move');

                var bigImg = document.getElementById('bigImg');

                var big = document.getElementById('big');

                var smallImg = document.getElementById('smallImg');

                small.onmousemove = function(e)
                {
                        move.style.visibility = 'visible'; 

                        big.style.display = 'block';
                        //获取x坐标
                        var x = e.pageX;
                        //获取y坐标
                        var y  = e.pageY;

                        //获取samll左偏移量
                        var ml = small.offsetLeft+65;
                        //获取small顶部的偏移量
                        var mt = small.offsetTop+310;

                        //获取move的宽度一半的距离
                        var mwh = move.offsetWidth/2;
                        //获取move的高度一半的距离
                        var mhh =move.offsetHeight/2;

                        var mll = x-ml-mwh;

                        var mhh = y-mt-mhh;

                        if(mll <= 0) {
                                mll = 0;
                        }

                        var maxl =  small.offsetWidth-move.offsetWidth;
                        if(mll >= maxl) {
                                mll = maxl;
                        }

                        if(mhh <= 0) {
                                mhh = 0;
                        }

                        var maxt = small.offsetHeight-move.offsetHeight;

                        if(mhh >= maxt) {

                                mhh = maxt;
                        }
                        move.style.left = mll+'px';

                        move.style.top = mhh+'px';

                        var bl = (mll/small.offsetWidth)*(bigImg.offsetWidth-92);

                        var bt = (mhh/small.offsetHeight)*(bigImg.offsetHeight-92);

                        bigImg.style.left = -bl+'px';

                        bigImg.style.top = -bt+'px';

                        //console.log(mhh);
                }

                //鼠标移除事件
                small.onmouseout = function()
                {
                        move.style.visibility= 'hidden';

                        big.style.display = 'none';
                }

               


                </script>   
                    
                    
                    
                    
                    
                    
				</div>
                <div class="pro-gallery-nav">
                	<a href="." class="pro-gallery-back" onclick=""></a>
                	<div class="pro-gallery-thumbs">
                        <ul style="left: 0px;" id="pro-gallerys"><li class=""><img src="{{$goodslist->thum}}" ></li></ul>
                    </div>
                    <a href="." class="pro-gallery-forward" onclick=""></a>
                </div>
            </div>
        </div>

    </div>
</div>


<!--//图片放大效果-->
<script tyep="text/javascript">
      







</script>



<div style="display: block;" id="group-area" class="layout hide">
<div class="hr-20"></div>
	    <!--商品详情-优惠套装 -->
	    <div style="display: none;" id="tab-bundle" class="pro-suit-area">
		<div class="h">
		    <h3>优惠套装</h3>
		    <div class="h-tab" id="bundle-tab">
		    </div>
		</div>
		<div class="b clearfix">
		    <div class="pro-main">
			<!--tab切换以pro-suit-parts-list作为模块进行切换- pro-suit-parts-list的style属性 overflow-x: scroll当子集li的N数大于5时出现-->

		    </div>
			<div class="pro-sub">
				<div class="pro-suit-cost-area">
		    	</div>
		    </div>
		</div>
	    </div>
	    <div id="tab-split" class="hr-20 hide"></div>
	    <!--商品详情-优惠套装 end -->



</div>


<div class="hr-20"></div>
<div class="layout">
	<div class="fr u-3-4">
	<!-- 20131220-商品详情-start -->
		<div class="pro-detail-area clearfix">
		<div style="display: none;" class="tool-fixed-holder"></div>
		<div id="pro-tab-all" class="pro-detail-tool">

		<!--商品详情-书签 -->
        <div id="pro-tab-area" class="pro-detail-tab clearfix">
        	<div class="pro-detail-tab-nav">
            <ul>
                <li id="pro-tab-feature" class="current"><a href="." title="商品详情"><span>商品详情</span></a></li>
                <li id="pro-tab-evaluate"><a href="." title="用户评价"><span id="prd-remark-span-tab-evaluate">用户评价<em></em></span></a></li>
                <li id="pro-tab-parameter" data-skulist="8259,8255,8267,8273,8261,8263,8265,8269,8275,8279,8277,721625417"><a href="." title="规格参数"><span>规格参数</span></a></li>
                <li id="pro-tab-package"><a href="." title="包装清单"><span>包装清单</span></a></li>
		<li id="pro-tab-software"><a href="." title="软件下载"><span>软件下载</span></a></li>
                <li id="pro-tab-service"><a href="." title="售后服务"><span>售后服务</span></a></li>

            </ul>
            </div>

            <div class="pro-detail-tab-button"><a style="display: inline-block;" id="tab-addcart-button" href="." class="button-style-1 button-add-cart-3" onclick="ec.product.buyComb();return false;">加入购物车</a><a style="display: none;" href="." id="tab-notice-button" class="button-style-2 button-notice-arrival-2" onclick="ec.product.arrival();return false;">到货通知</a></div>
        </div>
        </div>

        <!--商品详情-->
        <div class="pro-detail-area">
            <!--产品特征 -->
<div id="pro-tab-feature-content" class="pro-detail-tab-area pro-feature-area">
<div>
<div style="display: block;" id="pro-tab-feature-content-8259" class="hide">
<img src="{{$goodslist->im1}}" title="9.jpg" alt="9.jpg"></div>









<div style="display: block;" id="pro-tab-feature-content-721625417" class="hide">
<img src="{{$goodslist->im2}}" title="9.jpg" alt="9.jpg"></div>
</div>
<div class="hr-20"></div>
<div class="pro-disclaimer-area">
<p>※本网站尽可能地提供准确的信息。本网站内所涉及的产品图片与实物可能有细微区别，效果演示图和示意图仅供参考（图片为合成图、模拟演示图），有关产品的外观（包括但不限于颜色）请以实物为准。</p>
<p>※限于篇幅，本网站中所包含的信息（包括但不限于产品规格、功能说明等）可能不完整，请以有关产品使用说明书的具体信息为准。</p>
</div>
</div>

<!--规格参数 -->
<div id="pro-tab-parameter-content" class="pro-detail-tab-area pro-parameter-area hide"><div>正在加载中...</div></div>
<!--包装清单 -->
<div id="pro-tab-package-content" class="pro-detail-tab-area pro-package-area hide">
<div id="pro-tab-package-content-8259">
<p><span style="font-family:arial,helvetica,sans-serif;font-size:12px;">手机（电池内置） x 1，中式充电器 x 1，数据线（Type-C头） x 1，半入耳式线控耳机 x 1，点纹透明保护壳 x 1，快速指南 x 1，华为手机三包凭证 x 1，取卡针 x 1，金卡会员卡 x 1</span><br></p><p><br></p>
</div>
<div style="display: none;" id="pro-tab-package-content-8255">
<p><span style="font-family:arial,helvetica,sans-serif;font-size:12px;">手机（电池内置） x 1，中式充电器 x 1，数据线（Type-C头） x 1，半入耳式线控耳机 x 1，点纹透明保护壳 x 1，快速指南 x 1，华为手机三包凭证 x 1，取卡针 x 1，金卡会员卡 x 1</span><br></p><p><br></p>
</div>
<div style="display: none;" id="pro-tab-package-content-8267">
<p><span style="font-family:arial,helvetica,sans-serif;font-size:12px;">手机（电池内置） x 1，中式充电器 x 1，数据线（Type-C头） x 1，半入耳式线控耳机 x 1，点纹透明保护壳 x 1，快速指南 x 1，华为手机三包凭证 x 1，取卡针 x 1，金卡会员卡 x 1</span><br></p><p><br></p>
</div>
<div style="display: none;" id="pro-tab-package-content-8273">
<p><span style="font-family:arial,helvetica,sans-serif;font-size:12px;">手机（电池内置） x 1，中式充电器 x 1，数据线（Type-C头） x 1，半入耳式线控耳机 x 1，点纹透明保护壳 x 1，快速指南 x 1，华为手机三包凭证 x 1，取卡针 x 1，金卡会员卡 x 1</span><br></p><p><br></p>
</div>
<div style="display: none;" id="pro-tab-package-content-8261">
<p><span style="font-family:arial,helvetica,sans-serif;font-size:12px;">手机（电池内置） x 1，中式充电器 x 1，数据线（Type-C头） x 1，半入耳式线控耳机 x 1，点纹透明保护壳 x 1，快速指南 x 1，华为手机三包凭证 x 1，取卡针 x 1，金卡会员卡 x 1</span><br></p><p><br></p>
</div>
<div style="display: none;" id="pro-tab-package-content-8263">
<p><span style="font-family:arial,helvetica,sans-serif;font-size:12px;">手机（电池内置） x 1，中式充电器 x 1，数据线（Type-C头） x 1，半入耳式线控耳机 x 1，点纹透明保护壳 x 1，快速指南 x 1，华为手机三包凭证 x 1，取卡针 x 1，金卡会员卡 x 1</span><br></p><p><br></p>
</div>
<div style="display: none;" id="pro-tab-package-content-8265">
<p><span style="font-family:arial,helvetica,sans-serif;font-size:12px;">手机（电池内置） x 1，中式充电器 x 1，数据线（Type-C头） x 1，半入耳式线控耳机 x 1，点纹透明保护壳 x 1，快速指南 x 1，华为手机三包凭证 x 1，取卡针 x 1，金卡会员卡 x 1</span><br></p><p><br></p>
</div>
<div style="display: none;" id="pro-tab-package-content-8269">
<p><span style="font-family:arial,helvetica,sans-serif;font-size:12px;">手机（电池内置） x 1，中式充电器 x 1，数据线（Type-C头） x 1，半入耳式线控耳机 x 1，点纹透明保护壳 x 1，快速指南 x 1，华为手机三包凭证 x 1，取卡针 x 1，金卡会员卡 x 1</span><br></p><p><br></p>
</div>
<div style="display: none;" id="pro-tab-package-content-8275">
<p><span style="font-family:arial,helvetica,sans-serif;font-size:12px;">手机（电池内置） x 1，中式充电器 x 1，数据线（Type-C头） x 1，半入耳式线控耳机 x 1，点纹透明保护壳 x 1，快速指南 x 1，华为手机三包凭证 x 1，取卡针 x 1，金卡会员卡 x 1</span><br></p><p><br></p>
</div>
<div style="display: none;" id="pro-tab-package-content-8279">
<p><span style="font-family:arial,helvetica,sans-serif;font-size:12px;">手机（电池内置） x 1，中式充电器 x 1，数据线（Type-C头） x 1，半入耳式线控耳机 x 1，点纹透明保护壳 x 1，快速指南 x 1，华为手机三包凭证 x 1，取卡针 x 1，金卡会员卡 x 1</span><br></p><p><br></p>
</div>
<div style="display: none;" id="pro-tab-package-content-8277">
<p><span style="font-family:arial,helvetica,sans-serif;font-size:12px;">手机（电池内置） x 1，中式充电器 x 1，数据线（Type-C头） x 1，半入耳式线控耳机 x 1，点纹透明保护壳 x 1，快速指南 x 1，华为手机三包凭证 x 1，取卡针 x 1，金卡会员卡 x 1</span><br></p><p><br></p>
</div>
<div style="display: none;" id="pro-tab-package-content-721625417">
<p><span style="font-family:arial,helvetica,sans-serif;font-size:12px;">手机（电池内置） x 1，中式充电器 x 1，数据线（Type-C头） x 1，半入耳式线控耳机 x 1，点纹透明保护壳 x 1，快速指南 x 1，华为手机三包凭证 x 1，取卡针 x 1，金卡会员卡 x 1</span><br></p><p><br></p>
</div>
</div>
<!--售后服务 -->
<div id="pro-tab-service-content" class="pro-detail-tab-area pro-service-area hide">
<div style="display: block;" id="pro-tab-service-content-8259" class="hide">
<p><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">本产品全国联保，享受三包服务，质保期为：一年质保</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">售后服务电话：400-830-8300</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">华为消费者BG官网： </span><a style="font-family:arial, helvetica, sans-serif;color:#333333;cursor:pointer;text-decoration:underline" href=""><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">http://consumer.huawei.com/cn/</span></a></span><br></p>
</div>
<div style="display: none;" id="pro-tab-service-content-8255" class="hide">
<p><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">本产品全国联保，享受三包服务，质保期为：一年质保</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">售后服务电话：400-830-8300</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">华为消费者BG官网： </span><a style="font-family:arial, helvetica, sans-serif;color:#333333;cursor:pointer;text-decoration:underline" href=""><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;"></span></a></span><br></p>
</div>
<div style="display: none;" id="pro-tab-service-content-8267" class="hide">
<p><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">本产品全国联保，享受三包服务，质保期为：一年质保</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">售后服务电话：400-830-8300</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">华为消费者BG官网： </span><a style="font-family:arial, helvetica, sans-serif;color:#333333;cursor:pointer;text-decoration:underline" href=""><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;"></span></a></span><br></p>
</div>
<div style="display: none;" id="pro-tab-service-content-8273" class="hide">
<p><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">本产品全国联保，享受三包服务，质保期为：一年质保</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">售后服务电话：400-830-8300</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">华为消费者BG官网： </span><a style="font-family:arial, helvetica, sans-serif;color:#333333;cursor:pointer;text-decoration:underline" href="http://consumer.huawei.com/cn/"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">http://consumer.huawei.com/cn/</span></a></span><br></p>
</div>
<div style="display: none;" id="pro-tab-service-content-8261" class="hide">
<p><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">本产品全国联保，享受三包服务，质保期为：一年质保</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">售后服务电话：400-830-8300</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">华为消费者BG官网： </span><a style="font-family:arial, helvetica, sans-serif;color:#333333;cursor:pointer;text-decoration:underline" href="http://consumer.huawei.com/cn/"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">http://consumer.huawei.com/cn/</span></a></span><br></p>
</div>
<div style="display: none;" id="pro-tab-service-content-8263" class="hide">
<p><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">本产品全国联保，享受三包服务，质保期为：一年质保</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">售后服务电话：400-830-8300</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">华为消费者BG官网： </span><a style="font-family:arial, helvetica, sans-serif;color:#333333;cursor:pointer;text-decoration:underline" href="http://consumer.huawei.com/cn/"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">http://consumer.huawei.com/cn/</span></a></span><br></p>
</div>
<div style="display: none;" id="pro-tab-service-content-8265" class="hide">
<p><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">本产品全国联保，享受三包服务，质保期为：一年质保</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">售后服务电话：400-830-8300</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">华为消费者BG官网： </span><a style="font-family:arial, helvetica, sans-serif;color:#333333;cursor:pointer;text-decoration:underline" href="http://consumer.huawei.com/cn/"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">http://consumer.huawei.com/cn/</span></a></span><br></p>
</div>
<div style="display: none;" id="pro-tab-service-content-8269" class="hide">
<p><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">本产品全国联保，享受三包服务，质保期为：一年质保</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">售后服务电话：400-830-8300</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">华为消费者BG官网： </span><a style="font-family:arial, helvetica, sans-serif;color:#333333;cursor:pointer;text-decoration:underline" href="http://consumer.huawei.com/cn/"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">http://consumer.huawei.com/cn/</span></a></span><br></p>
</div>
<div style="display: none;" id="pro-tab-service-content-8275" class="hide">
<p><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">本产品全国联保，享受三包服务，质保期为：一年质保</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">售后服务电话：400-830-8300</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">华为消费者BG官网： </span><a style="font-family:arial, helvetica, sans-serif;color:#333333;cursor:pointer;text-decoration:underline" href="http://consumer.huawei.com/cn/"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">http://consumer.huawei.com/cn/</span></a></span><br></p>
</div>
<div style="display: none;" id="pro-tab-service-content-8279" class="hide">
<p><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">本产品全国联保，享受三包服务，质保期为：一年质保</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">售后服务电话：400-830-8300</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">华为消费者BG官网： </span><a style="font-family:arial, helvetica, sans-serif;color:#333333;cursor:pointer;text-decoration:underline" href="http://consumer.huawei.com/cn/"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">http://consumer.huawei.com/cn/</span></a></span><br></p>
</div>
<div style="display: none;" id="pro-tab-service-content-8277" class="hide">
<p><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">本产品全国联保，享受三包服务，质保期为：一年质保</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">售后服务电话：400-830-8300</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">华为消费者BG官网： </span><a style="font-family:arial, helvetica, sans-serif;color:#333333;cursor:pointer;text-decoration:underline" href="http://consumer.huawei.com/cn/"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">http://consumer.huawei.com/cn/</span></a></span><br></p>
</div>
<div style="display: none;" id="pro-tab-service-content-721625417" class="hide">
<p><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">本产品全国联保，享受三包服务，质保期为：一年质保</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7天内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">售后服务电话：400-830-8300</span><br style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:tahoma, 微软雅黑;font-size:14px"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">华为消费者BG官网： </span><a style="font-family:arial, helvetica, sans-serif;color:#333333;cursor:pointer;text-decoration:underline" href="http://consumer.huawei.com/cn/"><span style="line-height:21px;background-color:#ffffff;font-family:arial,helvetica,sans-serif;font-size:12px;">http://consumer.huawei.com/cn/</span></a></span><br></p>
</div>
</div>

<div id="pro-tab-software-content" class="pro-detail-tab-area pro-software-area hide">
<iframe id="pro_software_iframe" name="pro_software_iframe" src="./a.htm" data-src="" scrolling="no" frameborder="0" height="300" width="100%"></iframe>
</div>	    <div id="remarkLoading"></div>
            <!--用户评价 -->
            <div id="pro-tab-evaluate-content" class="pro-detail-tab-area pro-evaluate-area  hide">
                <!--用户评分 -->
                <div class="pro-score-area clearfix">
                	<div class="pro-score-average">
                	    <em>好评度:</em>
						<span><b id="pro-evaluate-avgSorce"></b>%</span>

					</div>

                 <div id="pro-score-impress" class="pro-score-impress"></div>

                   <div class="pro-score-button"><a href="" class="button-style-4 button-comment">发表评价</a></div>
                </div>

                <!-- 20131220-商品详情-用户评论-书签-start -->
				<div class="pro-evaluate-tab clearfix">
					<div class="pro-evaluate-tab-nav">
						<ul id="pro-evaluate-click-type">
							<li id="pro-evaluate-click-all" class="current"><a href="."><span>全部评价<em id="pro-evaluate-number-all">(</em></span></a></li>
							<li id="pro-evaluate-click-high"><a href="."><span>好评<em id="pro-evaluate-number-high">(100)</em></span></a></li>
							<li id="pro-evaluate-click-mid"><a href="."><span>中评<em id="pro-evaluate-number-mid"></em></span></a></li>
							<li id="pro-evaluate-click-low"><a href="."><span>差评<em id="pro-evaluate-number-low"></em></span></a></li>
						</ul>
					</div>

					<!--分页 -->
                <div class="pro-evaluate-page">
					<!-- 20131220-分页-start -->
					<div id="pro-msg-pagerup" class="pager">
					</div><!-- 20131220-分页-end -->
				</div>

				</div><!-- 20131220-商品详情-用户评价-书签-end -->

                <!--用户留言 -->
                <!-- 20131222-商品详情-用户评价-start -->
				<div id="pro-msg-list" class="pro-comment-list">
				</div><!-- 20131222-商品详情-用户评价-end -->


                <!--分页 -->
                <div class="pro-evaluate-page">
					<!-- 20131220-分页-start -->
					<div id="pro-msg-pager" class="pager">

					</div><!-- 20131220-分页-end -->
					 	<div class="hr-15"></div>
					</div>
            	</div>
        	</div>
    	</div>
    	<!--咨询-->
    <div class="pro-detail-area clearfix" id="prd_detail_counsel">
			<div class="pro-detail-tool">
				<!-- 20140624-商品详情-书签-start -->
				<div class="pro-detail-tab clearfix">
					<div class="pro-detail-tab-nav">
						<ul>
							<li class="current" id="prd_detail_counsel_1"><a href="." onclick="ec.product.divchange(1)"><span>全部咨询</span></a></li>
							<li id="prd_detail_counsel_6"><a href="." onclick="ec.product.divchange(6)"><span>常见问题</span></a></li>
							<li id="prd_detail_counsel_2"><a href="." onclick="ec.product.divchange(2)"><span>商品咨询</span></a></li>
							<li id="prd_detail_counsel_3"><a href="." onclick="ec.product.divchange(3)"><span>支付</span></a></li>
							<li id="prd_detail_counsel_4"><a href="." onclick="ec.product.divchange(4)"><span>配送</span></a></li>
							<li id="prd_detail_counsel_5"><a href="." onclick="ec.product.divchange(5)"><span>售后</span></a></li>

						</ul>
					</div>
					<div class="pro-detail-tab-link"></div>
				</div><!-- 20140624-商品详情-书签-end -->
			</div>

			<!-- 20140624-商品详情-全部咨询-start -->
			<div class="pro-detail-tab-area pro-inquire-area " id="prddetail_counsel_all">
				<!-- 20140624-商品详情-咨询提示-start -->
				<div class="pro-inquire-tips">
					<label>温馨提示：</label>因产线可能更改商品包装、产地、附配件等未及时通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不便还请谅解，谢谢！
				</div><!-- 20140624-商品详情-咨询提示-end -->
				<div class="pro-inquire-list" id="all_prd_counsel_content">
                                    
                                    @foreach($comment as $comments)
					<div class="pro-inquire-item clearfix">
						<div class="pro-inquire-user">
                                                    <label>@if(!empty($comments->name)) {{$comments->name}} @endif </label><span></span><s><i class="icon-vip-level-0"></i></s>:&nbsp;&nbsp;&nbsp;&nbsp;<em>@if(!empty($comments->cdatetime)) {{$comments->cdatetime}} @endif</em>
						</div>
						<div class="pro-inquire-question">
							<label>咨询内容：</label><span>@if(!empty($comments->comment)) {{$comments->comment}} @endif</span>
						</div>
						<div class="pro-inquire-answer">
							<label>回复：</label><span>@if(!empty($comments->reply)) {{$comments->reply}} @endif</span>
							<em>@if(!empty($comments->rdatetime)) {{$comments->rdatetime}} @endif</em>
						</div>
					</div>
                                    @endforeach
				</div>
				<div class="pro-inquire-page clearfix">
					<div class="pro-inquire-record">共<em>{{$count}}</em>条</div>
					<!-- 20131220-分页-start -->
					</div>
			</div><!-- 20140624-商品详情-全部咨询-end -->

			<!-- 20140624-商品详情-商品咨询-start -->
			<div class="pro-detail-tab-area pro-inquire-area " id="prddetail_counsel_prd" style="display:none;">
				<!-- 20140624-商品详情-咨询提示-start -->
				<div class="pro-inquire-tips">
					<label>温馨提示：</label>因产线可能更改商品包装、产地、附配件等未及时通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不便还请谅解，谢谢！
				</div><!-- 20140624-商品详情-咨询提示-end -->
				<div class="pro-inquire-list" id="prd_prd_counsel_content">
				</div>
				<div class="pro-inquire-page clearfix" id="prddetail_counsel_prd_total">
					<div class="pro-inquire-record">共<em></em>条</div>
					<!-- 20131220-分页-start -->
					<div class="pager" id="prd_prd_counsel"><ul><li class="pgNext link first first-empty">|&lt;</li><li class="pgNext link pre pre-empty">&lt;</li><span class="qpages"><li class="page-number link pgCurrent">1</li></span><li class="pgNext link next next-empty">&gt;</li><li class="pgNext link last last-empty">&gt;|</li></ul></div><!-- 20131220-分页-end -->
				</div>
			</div><!-- 20140624-商品详情-商品咨询-end -->

			<!-- 20140624-商品-支付咨询-start -->
			<div class="pro-detail-tab-area pro-inquire-area " id="prddetail_counsel_pay" style="display:none;">
				<!-- 20140624-商品详情-咨询提示-start -->
				<div class="pro-inquire-tips">
					<label>温馨提示：</label>因产线可能更改商品包装、产地、附配件等未及时通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不便还请谅解，谢谢！
				</div><!-- 20140624-商品-咨询提示-end -->
				<div class="pro-inquire-list" id="pay_prd_counsel_content">
				</div>
				<div class="pro-inquire-page clearfix" id="prddetail_counsel_pay_total">
					<div class="pro-inquire-record">共<em></em>条</div>
					<!-- 20131220-分页-start -->
					<div class="pager" id="pay_prd_counsel_page"><ul><li class="pgNext link first first-empty">|&lt;</li><li class="pgNext link pre pre-empty">&lt;</li><span class="qpages"><li class="page-number link pgCurrent">1</li></span><li class="pgNext link next next-empty">&gt;</li><li class="pgNext link last last-empty">&gt;|</li></ul></div><!-- 20131220-分页-end -->
				</div>
			</div><!-- 20140624-商品-支付咨询-end -->

			<!-- 20140624-商品-配送咨询-start -->
			<div class="pro-detail-tab-area pro-inquire-area " id="prddetail_counsel_trans" style="display:none;">
				<!-- 20140624-商品详情-咨询提示-start -->
				<div class="pro-inquire-tips">
					<label>温馨提示：</label>因产线可能更改商品包装、产地、附配件等未及时通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不便还请谅解，谢谢！
				</div><!-- 20140624-商品详情-咨询提示-end -->
				<div class="pro-inquire-list" id="trans_prd_counsel_content">
				</div>
				<!--分页判断-->
				<div class="pro-inquire-page clearfix" id="prddetail_counsel_trans_total">
					<div class="pro-inquire-record">共<em></em>条</div>
					<!-- 20131220-分页-start -->
					<div class="pager" id="trans_prd_counsel_page"><ul><li class="pgNext link first first-empty">|&lt;</li><li class="pgNext link pre pre-empty">&lt;</li><span class="qpages"><li class="page-number link pgCurrent">1</li></span><li class="pgNext link next next-empty">&gt;</li><li class="pgNext link last last-empty">&gt;|</li></ul></div>
					<!-- 20131220-分页-end -->
				</div>
			</div><!-- 20140624-商品-配送咨询-end -->

			<!-- 20140624-商品-售后咨询-start -->
			<div class="pro-detail-tab-area pro-inquire-area " id="prddetail_counsel_service" style="display:none;">
				<!-- 20140624-商品详情-咨询提示-start -->
				<div class="pro-inquire-tips">
					<label>温馨提示：</label>因产线可能更改商品包装、产地、附配件等未及时通知，且每位咨询者购买、提问时间等不同。为此，客服给到的回复仅对提问者3天内有效，其他网友仅供参考！给您带来的不便还请谅解，谢谢！
				</div><!-- 20140624-商品详情-咨询提示-end -->
				<div class="pro-inquire-list" id="ser_prd_counsel_content">
				</div>
				<div class="pro-inquire-page clearfix" id="prddetail_counsel_serv_total">
					<div class="pro-inquire-record">共<em></em>条</div>
					<!-- 20131220-分页-start -->
					<div class="pager" id="ser_prd_counsel_page"><ul><li class="pgNext link first first-empty">|&lt;</li><li class="pgNext link pre pre-empty">&lt;</li><span class="qpages"><li class="page-number link pgCurrent">1</li></span><li class="pgNext link next next-empty">&gt;</li><li class="pgNext link last last-empty">&gt;|</li></ul></div><!-- 20131220-分页-end -->
				</div>
			</div><!-- 20140624-商品-售后咨询-end -->

			<!-- 20140624-商品-常见问题-start -->
			<div class="pro-detail-tab-area pro-faq-area " id="prddetail_counsel_ques" style="display:none;">
				<!-- 20140624-商品详情-常见问题提示-start -->
				<div class="pro-faq-tips">
					<label>温馨提示：</label> 因商城随时可能更新商品版本、价格、附配件、赠品等信息未及时通知，且每位顾客的购买情况等也不同，为此以下常见问题答复仅供参考，具体请以下单页面显示为准！若给您带来的不便还请谅解，谢谢！
				</div><!-- 20140624-商品详情-咨询提示-end -->
				<div class="pro-faq-list" id="ques_prd_counsel_content">
						<div class="pro-inquire-empty"><p>暂无相关内容</p></div>
				</div>
			</div><!-- 20140624-商品详情-全部咨询-end -->

			<!-- 20140624-商品详情-咨询表单-start -->
			<div id="inquire-form" class="pro-inquire-form-area">
				<div class="h">
					<h3>发表咨询</h3>
					<p>声明：您可在购买前对产品包装、颜色、套餐、运输、支付等方面进行咨询，我们有专人进行回复！因产线可能会更改一些产品的包装、颜色、产
地等参数，所以该回复仅在当时对提问者有效，其他网友仅供参考！咨询回复的工作时间为：周一至周五，9:00至18:00，请耐心等待工作人员回复。</p>
				</div>
				<div class="b">
					<div class="form-edit-area">
                                            <form method="post" action="/Home/goodslist/comment">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                                <input type="hidden" name="gid" value="{{$goodslist->gid}}" />
                                                <input type="hidden" name="gname" value="{{$goodslist->name}}" />
<input type="hidden" name="name" value="@if(!empty(Session::get('userDatas'))) {{Session::get("userDatas")->uname}}@else 游客{{rand(1000,9999)}}  @endif" />
							<div class="form-edit-table">
                                                            <p><textarea placeholder=""  class="textarea" name="comment" id="counseltextid" maxlength="100"></textarea></p>
							</div>
							<div class="form-edit-action">
                                                            <input class="button-style-4 button-inquire-sumbit" value="提交"  type="submit">
							</div>
						</form>
					</div>
				</div>
			</div><!-- 20140624-商品详情-咨询表单-end -->

		</div>
    </div>
    <div class="fl u-1-4">
    <!--购买该商品的用户还购买了 start-->
    <!--购买该商品的用户还购买了 end-->
<div class="hot-area">
	<div class="h">
		<h3><span>热销榜单</span></h3>
	</div>
	<div class="b">
		<!--商品列表 -->
		<div class="pro-list">
		<ul>
                    @foreach($ppp as $pp)
                   <li>
			<div>
			    <p class="p-img"><a href="{{url('/Home/goodslist/'.$pp->gid)}}" title=""><img src="{{$pp->im}}" alt="{{$pp->name}}"></a><s class="s1"></s></p>
			    <p class="p-name"><a href="{{url('/Home/goodslist/'.$pp->gid)}}" title="">{{$pp->name}}</a></p>
			    <p class="p-price"><b>¥{{$pp->price}}</b></p>
			</div>
		    </li>
	            @endforeach
		</ul>
	    </div>
	</div>
</div>
        <div id="pro-seg-hot" class="hr-20"></div>
<!-- 最近浏览过的商品  -->
    </div>
</div>

<div class="hr-60"></div>

<!--到货通知弹出框-->
<textarea id="product-arrival-html" class="hide">	&lt;div class="arrival-remind-area"&gt;

</textarea>


<!-- 20150331-咨询提交成功提示-start -->
<textarea id="product-counsel-html" class="hide">    &lt;div

</textarea>

<textarea id="product-attention-html" class="hide">&lt;!-- 20130423-表单-关注-start --&gt;

</textarea>

<
@include("home.layout.foot")
