@include("home.layout.head");

<link href="{{asset('/css/home/main7.css')}}" rel="stylesheet" type="text/css">

<div class="hr-10"></div>
<div class="g">
	<!--面包屑 -->
<div class="breadcrumb-area"><a href="{{url('/')}}" title="首页">首页</a>&nbsp;&nbsp;\&nbsp;&nbsp;<em id="personCenter"><a href="{{url('/home/member')}}" title="我的商城">我的商城</a></em><em id="pathPoint">&nbsp;&nbsp;\&nbsp;&nbsp;</em><span id="pathTitle">收货地址管理</span></div>	
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
	    <form  action="/Home/member/edit/{{$ids}}"  method="post"  data-type="add">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />

            <div class="form-edit-table">
                <table border="0" cellpadding="0" cellspacing="0">
                	<tbody>
                        <tr>
                            <th><span class="required">*</span><label for="consignee">收货人：</label></th>
                            <td>
                            	<input validator="validator11467805414437" maxlength="20" name="name" value="@if(!empty($alter)){{$alter->name}}@endif" class="text span-130" type="text">
                            	<label id="consignee-msg"></label>
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="2" class="selecte-vat"><span class="required">*</span><label for="province">收货地址：</label></th>
                            <td>
								<div>
                                            <select id="s_province" name="s_province"></select>  
                                            <select id="s_city" name="s_city" ></select>  
                                            <select id="s_county" name="s_county"></select>
                                            <script class="resources library" src="{{asset('/js/home/area.js')}}" type="text/javascript"></script>
                                            
                                            <script type="text/javascript">_init_area();</script>
                                            </div>
                                            <div id="show"></div>
                                        </div>
                                        <script type="text/javascript">
                                        var Gid  = document.getElementById ;
                                        var showArea = function(){
                                            Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" + 	
                                            Gid('s_city').value + " - 县/区" + 
                                            Gid('s_county').value + "</h3>"
                                                                    }
                                        Gid('s_county').setAttribute('onchange','showArea()');
                                        </script>
							</td>
                        </tr>
                        <tr class="tr-rel">
                            <td>
                            <label for="address" class="textarea span-480" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; color: rgb(153, 153, 153);"></label>
                            	<div class="inline-block relative">
                            		<textarea style="z-index: 1;" validator="validator21467805414437" name="add_detail"  maxlength="100" class="textarea span-480" placeholder="详细地址" >@if(!empty($alter)) {{$alter->address}}@endif</textarea>
                            	</div>
                            	<label class="vat" id="address-msg"></label>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="zipCode-add">邮编：</label></th>
                            <td>
                            	<input validator="validator31467805414437" maxlength="6" class="text span-80 ime-disabled" name="postcode"  type="text"  value="@if(!empty($alter)) {{$alter->postcode}}@endif">
                            	<label id="zipCode-msg"></label>
                            </td>
                        </tr>
                        <tr>
                            <th><span class="required">*</span><label for="mobile">手机号码：</label></th>
                            <td>
								<div class="inline-block vam"><input validator="validator41467805414437" maxlength="15" name="phone"  class="text span-130 ime-disabled"  type="text"  value="@if(!empty($alter)) {{$alter->phone}}@endif"></div>
								
			    			</td>
                        </tr>
        
                        <tr class="tr-action">
                        	<th>&nbsp;</th>
                        	<td>
                        		<div id="form-edit-button">
                        			<input id="button-ok" class="button-action-ok" value="确定" type="submit">
                        			
                        		</div>
                        	</td>
                        </tr>
                    </tbody>
                </table>
               
            </div>
	    </form>
    </div>
</div>
 <div class="zc_foot">
        {{ session("info") }}
        <ul>
        @if(count($errors) > 0)
            @foreach($errors->all() as $e)
            <li>{{$e}}</li>
            @endforeach
        @endif
        </ul>
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
      @foreach($add as $Uadd)
	<div class="list-group" id="list-group"><div class="list-group-item" id="myAddress-area-28664189"><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="col-name">{{$Uadd->name}}</td><td class="col-address">{{$Uadd->address}}</td><td class="col-zip">{{$Uadd->postcode}}</td><td class="col-tel"><p>{{$Uadd->phone}}</p></td><td class="col-operate"><p class="p-edit"><a class="edit" href="/Home/member/edit/{{$Uadd->id}}"  title="编辑"><span>编辑</span></a></p><p class="p-del"><a class="del" href="/Home/member/delete/{{$Uadd->id}}" title="删除"><span>删除</span></a></p><p class="p-state"><span class="default">默认地址</span></p></td></tr></tbody></table></div></div>
    @endforeach
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
                	<li id="li-order"><a href="{{url('/Home/member/Myorder')}}" title="我的订单"><span>我的订单<em>1</em></span></a></li>
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
                    <li class="current" id="li-myAddress"><a href="{{url('/Home/member/Myaddres')}}" title="收货地址管理"><span>收货地址管理</span></a></li>
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

<!--口号-20121025 -->
@include("home.layout.foot");