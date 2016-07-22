@include("home.layout.head");
<link href="{{asset('/css/home/ec2.css')}}" rel="stylesheet" type="text/css">

<link href="{{asset('/css/home/main5.css')}}" rel="stylesheet" type="text/css">
<div class="g">
	<!--面包屑 -->
<div class="breadcrumb-area"><a href="http://www.vmall.com/" title="首页">首页</a>&nbsp;&nbsp;\&nbsp;&nbsp;<em id="personCenter"><span>我的商城</span></em><em id="pathPoint"></em><span id="pathTitle"></span></div>	
</div>
<div class="hr-10"></div>

<div class="g">
    <div class="fr u-4-5"><!-- 20141227-我的商城-欢迎信息-start -->
<div class="myHome-welcome">
	<div class="h">
		<div class="w-img"><img src="{{Session::get("userDatas")->avartar}}" alt=""></div>
		<div class="w-vip">
				<i class="icon-vip-level-0"></i>
		</div>
	</div>
	<div class="b">
		<h2 class="w-name">
			{{Session::get("userDatas")->uname}}，欢迎您！</h2>
		<div class="w-info">
			<span>我的经验值：&nbsp;<em><a href="#" class="red">0</a></em></span>
		   		<span><a class="link-non-validated" href="#" target="_blank">未验证手机</a></span>
				<span><a class="link-non-validated" href="#" target="_blank">未验证邮箱</a></span>
			
				<span><a class="link-non-validated" href="#">未实名认证</a>  
				</span>
			
			<span>优惠券：&nbsp;<em><a href="#">0</a></em>&nbsp;张</span>
			<span>站内信：&nbsp;<em><a href="#">0</a></em>&nbsp;条</span>
		</div>
		<div class="w-ple">
			<dl>
				<dt>我的特权：</dt>
                                                  <dd><a href="#" title="获得与Vmall会员等级对应的“V”身份标识"><img src="{{asset('/images/home/icon_privilege_vip_small_light.png')}}" alt="“V”字身份高亮显示"></a></dd>
			    			 <dd><a href="#" title="有权参与会员专场领取优购码活动"><img src="{{asset('/images/home/icon_privilege_v_small_light.png')}}" alt="V码（优购码）"></a></dd>
			    			 <dd><a href="#" title="有权参与会员专场领取优惠劵活"><img src="{{asset('/images/home/icon_privilege_yh_small_light.png')}}" alt="优惠劵"></a></dd>
			    	<dd><a href="#" title="有权参与专属的会员日活动"><img src="{{asset('/images/home/icon_privilege_vipDay_small_gray.png')}}" alt="会员日参与权"></a></dd>
			</dl>
		</div>
	</div>
</div><!-- 20141227-我的商城-用户信息-end -->
<div class="hr-25"></div>
<!-- 20141227-我的商城-未支付列表-end -->
<div class="myHome-unpay-record">
	<div class="myHome-order-title">
		<div class="fl">
			<h3>待支付订单</h3>
		</div>
		<div class="fr">
			<a href="#" class="more">更多<em>&gt;</em></a>
		</div>
	</div>
	@if(!empty($orders))
    <div class="list-group" id="unpay-list-group">
        <div class="list-group-item"><div class="o-pro">
                <table border="0" cellpadding="0" cellspacing="0"><tbody>
                        @foreach($orders as $order)
                        @if(($order->state) == 1)
                        <tr>
                            <td class="col-pro-img"><p class="p-img">
                                    <a href="">
                                        <img src="{{$order->thum}}" alt=""></a>
                                </p></td><td class="col-pro-info"><p class="p-name">订单号：HW00{{$order->number}}</p></td>
                            <td class="col-price"><em>¥</em><span>{{$order->price}}</span></td><td class="col-link"><a href="{{url('/Home/member/orderDetail/'.$order->number)}}">订单详情</a></td>
                            <td class="col-operate"><p class="p-button"><a class="button-operate-pay" href="" target="_blank">
                                        <span>立即支付</span></a></p></td></tr>
                        @endif
                        @endforeach
                    </tbody>
                </table></div></div></div>
       @else
	<div class="list-group" id="uneval-list-group"><div class="list-group-empty">您暂时没有待付款订单。<a href="{{url('/')}}">挑选喜欢的商品去&gt;&gt;</a></div></div>
      @endif
</div>
<!-- 20141227-我的商城-未支付列表-end -->    	
<!-- 20141227-我的商城-待评价列表-end -->

	
<!-- 20141227-我的商城-待评价列表-end -->    	

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
                	<li id="li-order"><a href="{{url('/Home/member/Myorder')}}" title="我的订单"><span>我的订单<em>1</em></span></a></li>
                    <li id="li-exchange"><a href="http://www.vmall.com/member/exchange?t=1467805370645" title="我的退换货"><span>我的退换货</span></a></li>
					<li id="li-groupBuyRecord"><a href="http://www.vmall.com/member/groupBuyRecord?t=1467805370645" title="我的团购"><span>我的团购</span></a></li>
					<li id="li-recover"><a href="http://www.vmall.com/member/recycle/index?t=1467805370645" title="我的回收单"><span>我的回收单</span></a></li>
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
                    <li id="li-myAddress"><a href="{{url('Home/member/Myaddres')}}" title="收货地址管理"><span>收货地址管理</span></a></li>
                    
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
    </div>	<div class="hr-45"></div>

</div>
<div class="hr-80"></div>

@include("home.layout.foot");