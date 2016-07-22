@include("home.layout.head");
<link href="{{asset('/css/home/main10.css')}}" rel="stylesheet" type="text/css">
<div class="hr-10"></div>
<div class="g">
	<!--面包屑 -->
<div class="breadcrumb-area"><a href="{{url('/')}}" title="首页">首页</a>&nbsp;&nbsp;\&nbsp;&nbsp;<em id="personCenter"><a href="{{url('/Home/member/Myorder')}}" title="我的商城">我的商城</a></em><em id="pathPoint">&nbsp;&nbsp;\&nbsp;&nbsp;</em><span id="pathTitle">我的订单</span></div>	
</div>
<div class="hr-10"></div>

<div class="g">
    <div class="fr u-4-5"><!-- 20141212-栏目-start -->
<div class="section-header">
    <div class="fl">
        <h2><span>我的订单</span></h2>
    </div>
    <div class="fr">
    	<div class="ec-tab" id="ec-tab">
    		<ul>
    			<li class="current"><a href="javascript:;" onclick="ec.member.orderList.seltime(this,0);"><span>最近三月内订单<em style="display: none;" id="count-seltime-0">0</em></span></a></li>
    			<li><a href="javascript:;" onclick="ec.member.orderList.seltime(this,1);"><span>三个月前订单<em style="display: none;" id="count-seltime-1">0</em></span></a></li>
    		</ul>
    		<div class="ec-tab-arrow" style="width: 124px; left: 0px;"></div>
    	</div>
    </div>
</div>
<!-- 20141212-栏目-end -->
<!-- 20141222-我的订单-订单类别-start -->
<div class="myOrder-cate" id="myOrder-cate">
	<ul>
		<li class="current"><a href="javascript:;" onclick="ec.member.orderList.check(this,'all');"><span>全部<em></em></span></a></li>
		<li><a href="javascript:;" onclick="ec.member.orderList.check(this,'unpaid');"><span>待支付<em id="count-seltime-2" class="hide" data-num="0">0</em></span></a></li>
		<li><a href="javascript:;" onclick="ec.member.orderList.check(this,'nocomment');"><span>待评价<em data-his="0" data-num="0" style="display: none;" id="nocommentNum">0</em></span></a></li>
		<li><a href="javascript:;" onclick="ec.member.orderList.check(this,'send');"><span>待收货<em id="count-seltime-3" class="hide" data-num="0">0</em></span></a></li>
		<li><a href="javascript:;" onclick="ec.member.orderList.check(this,'finished');"><span>已完成</span></a></li>
		<li><a href="javascript:;" onclick="ec.member.orderList.check(this,'canceled');"><span>已取消</span></a></li>
	</ul>
</div>
<!-- 20141222-我的订单-订单类别-end -->
<!-- 20141222-我的订单-列表-start -->
<div class="myOrder-record" id="myOrders-list-content">
	
	<!-- 20141222-我的订单-列表-订单合并-end -->
	<div class="list-group-title">
		<table border="0" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th class="col-pro">商品</th>
					<th class="col-price">单价/元</th>
					<th class="col-quty">数量</th>
					<th class="col-pay">实付款/元</th>
					<th class="col-operate">订单状态及操作</th>
				</tr>
			</thead>
		</table>
	</div>
                @if(!empty($order[0]))
	<div class="list-group" id="list-group">
				<div class="list-group-item">
					<div class="o-info">
							<div class="col-info">
							<span class="o-date">{{$order[0]->ordertime}}</span>
							<span class="o-no">订单号：<a href="" >HW00{{$order[0]->number}}</a></span>
							</div>
							<div class="col-state">
									已取消
							</div>
					</div>
                                    @endif
					<div class="o-pro">
                                            @if(!empty($order))
                                            @foreach($order as $ord)
						<table border="0" cellpadding="0" cellspacing="0">
		        			<tbody>
		                        <!-- 组合套餐列表 -->
								<!-- 普通商品列表 -->
	                        			<tr>
				        					<td class="col-pro-img">
				    							<p class="p-img">
				    								
			                                    		<img alt="荣耀7i 双卡双待 全网通DM版 3GB内存+32GB存储（日耀金）" src="{{$ord->thum}}">
			                                    
				    							</p>
				        					</td>
				        					<td class="col-pro-info">
												<p class="p-name">
													
													<a title="荣耀7i 双卡双待 全网通DM版 3GB内存+32GB存储（日耀金）" target="_blank" href="">{{$gname->name}}</a>
												</p>
				        					</td>
				        					<td class="col-price"><em>¥</em><span>
				        								{{$ord->price}}
				        					</span></td>
				        					<td class="col-quty">{{$ord->count}}</td>
				        							<td rowspan="1" class="col-pay">
				        								<p><em>¥</em><span>
				        												{{$ord->total}}
							        								
								        				</span></p>
				        							</td>
				        								<td rowspan="1" class="col-operate">
				        										<!--已取消-->
				        									
                                                                                                                <p class="p-link"><a href="{{url('/Home/member/orderDetail/'.$order[0]->number)}}">订单详情</a></p>
				        								</td>
				        				</tr>
	                        	<!-- 普通商品列表 end -->
		        			</tbody>
		        		</table>
                                            @endforeach
                                            @endif
					</div>
				</div>
	</div>
	<!-- 20141222-我的订单-列表-订单合并-start -->
	<div class="myOrder-control " id="myOrder-control-bottom">
		<label class="inputbox" id="bottomCheckBoxDiv" name="bottomCheckBoxDiv">
			<!-- 20140819-我的订单-合并付款-start -->
				
			<!-- 20140819-我的订单-合并付款-end -->
		</label>
		<a href="javascript:;" class="button-operate-merge-pay" id="bottomButton" onclick="ec.member.orderList.mergePay();"><span>立即支付</span></a>
	</div>
	<!-- 20141222-我的订单-列表-订单合并-end -->
	<div class="list-group-page">
		<div class="pager" id="list-pager"></div>
	</div>
</div>
<!-- 20141222-我的订单-列表-end -->
<input id="colid" value="0" type="hidden">
<input id="checkid" value="all" type="hidden">
<form action="#" method="get" id="gotoUrl"></form>

<!-- 物流信息模板 -->

</div>
	<div class="fl u-1-5">
    	

<!--左边菜单 -->
<div class="mc-menu-area">
	<div class="h"><a href="{{('/home/member')}}" class="button-go-mc" title="我的商城"><span>我的商城</span></a></div>
    <div class="b">
        <ul>
        	<li>
        		<h3>
        			<span>订单中心</span>
        		</h3>
            	<ol>
                	<li class="current" id="li-order"><a href="{{url('/Home/member/Myorder')}}" title="我的订单"><span>我的订单</span></a></li>
                    <li id="li-exchange"><a href="" title="我的退换货"><span>我的退换货</span></a></li>
					<li id="li-groupBuyRecord"><a href="" title="我的团购"><span>我的团购</span></a></li>
					<li id="li-recover"><a href="" title="我的回收单"><span>我的回收单</span></a></li>
                </ol>
            </li>
            <li>
            	<h3>
            		<span>个人中心</span>
            	</h3>
            	<ol>
            		<li id="li-myAppointment"><a href="#" title="我的预约"><span>我的预约</span></a></li>
                    <li id="li-notification"><a href="#" title="到货通知"><span>到货通知</span></a></li>
                    <li id="li-point"><a href="#" title="等级与特权"><span>等级与特权</span></a></li>
                    <li id="li-authentication"><a href="#" title="实名认证"><span>实名认证</span></a></li>
                    <li id="li-balance"><a href="#" title="代金券"><span>代金券</span></a></li>
					<li id="li-petal"><a href="#" title="我的花瓣"><span>我的花瓣</span></a></li>
                    <li id="li-coupon"><a href="#" title="我的优惠劵"><span>我的优惠劵</span></a></li>
                    <li id="li-enterprise" class="hide"></li>
                    <li id="li-myAddress"><a href="{{url('/Home/member/Myaddres')}}" title="收货地址管理"><span>收货地址管理</span></a></li>
                    <!--  
                    <li id="li-zp"><a href="/member/invoiceQualifications/view?t=1468890289515" title="专票资质"><span>专票资质</span></a></li>
                	-->
                </ol>
            </li>
            <li>
            	<h3>
            		<span>社区中心</span>
            	</h3>
            	<ol>
                	<li id="li-prdRemark"><a href="#" title="商品评价"><span>商品评价</span></a></li>
                    <li id="li-msg"><a href="#" title="站内信"><span>站内信</span></a></li>
                </ol>
            </li>
        </ul>
    </div>
    <div class="f"></div>
</div>
    </div>
</div>
<div class="hr-80"></div>

@include("home.layout.foot");