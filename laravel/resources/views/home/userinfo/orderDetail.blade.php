@include("home.layout.head");
<link href="{{asset('/css/home/main10.css')}}" rel="stylesheet" type="text/css">
<div class="hr-10"></div>
<div class="g">
	<!--面包屑 -->
<div class="breadcrumb-area"><a href="http://www.vmall.com/" title="首页">首页</a>&nbsp;&nbsp;\&nbsp;&nbsp;<em id="personCenter"><a href="http://www.vmall.com/member/" title="我的商城">我的商城</a></em><em id="pathPoint">&nbsp;&nbsp;\&nbsp;&nbsp;</em><span id="pathTitle">我的订单</span></div>	
</div>
<div class="hr-10"></div>

<div class="g">
    <div class="fr u-4-5"><!-- 20141212-栏目-start -->
<div class="section-header">
    <div class="fl">
        <h2><span>订单号：HW00{{$ords[0]->number}}</span></h2>
    </div>
</div>

　　		
		
　　
<!-- 20141212-栏目-end -->
<!-- 20141223-订单详情-收货信息-start -->
<div class="hr-50"></div>
<div class="order-detail-receive">
	<div class="h">
		<h3>收货信息</h3>
	</div>
	<div class="b">
		<div class="form-info-panels">
			<table border="0" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<th>姓名：</th>
						<td>{{$ords[0]->name}}</td>
					</tr>
					<tr>
						<th>收货地址：</th>
						<td>{{$ords[0]->address}}</td>
					</tr>
					<tr>
						<th>联系电话：</th>
						<td>{{$ords[0]->phone}}</td>
					</tr>
					<tr>
						<th>配送方式：</th>
						<td>由默认快递公司配送</td>
					</tr>
		                    <tr>
		                        <th>发票信息：</th>
		                        <td>
		                        	个人
		                        	&nbsp;&nbsp;
		                        </td>
		                    </tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- 20141223-订单详情-收货信息-end -->
<div class="hr-50"></div>
	<!-- 20141223-订单详情-商品清单-start -->
	<div class="order-detail-pro">
		<!-- 20141223-商品清单-商品列表-start -->
		<div class="order-pro-record">
			<div class="list-group-caption">
				<h3>商品清单</h3>
			</div>
			<div class="list-group-title">
	    		<table border="0" cellpadding="0" cellspacing="0">
	    			<thead>
	    				<tr>
	    					<th class="col-pro">商品名称</th>
	    					<th class="col-int">积分</th>
	    					<th class="col-price">单价/元</th>
	    					<th class="col-quty">数量</th>
	    					<th class="col-pay">小计/元</th>
	    					<th class="col-state">状态</th>
	    				</tr>
	    			</thead>
	    		</table>
	    	</div>
	    	<div class="list-group">
	    		<!-- 组合套餐 -->
		    		<div class="list-group-item">
		    			<div class="o-pro">
                                            @foreach($ords as $ord)
		    				<table border="0" cellpadding="0" cellspacing="0">
			        			<tbody>
				        				<tr>
				        					<td class="col-pro-img">
			        							<p class="p-img">
			        								<a  href="" target="_blank">
														<img alt="荣耀7i 双卡双待 全网通DM版 3GB内存+32GB存储（日耀金）" src="{{$ord->thum}}">                                        
													</a>
			        							</p>
				        					</td>
				        					<td class="col-pro-info">
			    								<p class="p-name">
			    									<a  target="_blank" href="">{{$gname->name}}</a>
			    								</p>
				        					</td>
				        					<td class="col-int">0</td>
				        					<td class="col-price"><em>¥</em><span>
				        								{{$ord->price}}
				        					</span></td>
				        					<td class="col-quty">{{$ord->count}}</td>
				        					<td class="col-pay" rowspan="1"><em>¥</em><span>
				        							{{$ord->total}}
				        					</span></td>
				        					<td class="col-state">--</td>
				        				</tr>
			        			</tbody>
			        		</table>
                                            @endforeach
		    			</div>
		    		</div>
	    	</div>
		</div>
		<!-- 20141223-商品清单-商品列表-end -->
		<!-- 20141223-商品清单-赠品列表-start -->
		<!-- 20141223-商品清单-赠品列表-end -->
		<!-- 20141223-商品清单-合计-start -->
		<div class="order-pro-total">
			<div class="order-pro-cost">
				<table border="0" cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<th>商品金额总计：</th>
							<td><em>¥</em><span>{{$ord->price}}</span></td>
						</tr>
						<tr>
							<th>
运费：</th>
							<td><em>¥</em><span>0.00</span></td>
						</tr>
						<tr>
							<th>使用优惠券：</th>
							<td><em>-&nbsp;¥</em><span>0.00</span></td>
						</tr>
						<tr>
							<th>使用花瓣：</th>
							<td><em>-&nbsp;¥</em><span>0.00</span></td>
						</tr>
						<tr>
							<th>
&nbsp;商家活动：
							</th>
							<td><em>-&nbsp;¥</em><span>0.00</span></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="order-pro-cost-total">合计（含运费）：<em>¥</em><span>
					{{$ord->total}}
				</span></div>
		</div>
		<!-- 20141223-商品清单-合计-end -->
	</div>
	<!-- 20141223-订单详情-商品清单-end -->
<div class="hr-40"></div>
<div>
	
</div>
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
                    <li id="li-exchange"><a href="#" title="我的退换货"><span>我的退换货</span></a></li>
					<li id="li-groupBuyRecord"><a href="#" title="我的团购"><span>我的团购</span></a></li>
					<li id="li-recover"><a href="#" title="我的回收单"><span>我的回收单</span></a></li>
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
                    <li id="li-zp"><a href="/member/invoiceQualifications/view?t=1468845321982" title="专票资质"><span>专票资质</span></a></li>
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