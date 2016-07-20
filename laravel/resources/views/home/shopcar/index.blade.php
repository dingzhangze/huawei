<!DOCTYPE html>
<html><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Language" content="zh-cn">


        <title>华为商城官网-提供华为手机(荣耀V8、荣耀7、华为P9、荣耀5C、荣耀6Plus、华为Mate8、畅玩5X、荣耀5A等)、平板电脑、移动终端等产品的预约和购买</title>
        <meta name="description" content="华为商城是华为旗下面向全国服务的电子商务平台官网，我们提供正品华为手机(华为P9、华为Mate8、荣耀V8、华为P8、荣耀7、荣耀畅玩5X、荣耀6Plus、荣耀畅玩4C、荣耀X2、荣耀畅玩4X、荣耀4A等)、平板电脑、配件等全新华为产品，品质保证！">  
        <meta name="keywords" content="华为手机,华为官网,华为,荣耀7,荣耀畅玩5X,荣耀畅玩4C,荣耀6Plus,华为P9">
        <link rel="shortcut icon" href="http://www.vmall.com/favicon.ico">
        <link href="{{asset('/css/home/ec2.css')}}" rel="stylesheet" type="text/css">

        <link href="{{asset('/css/home/main2.css')}}" rel="stylesheet" type="text/css">
    </head>



    <body class="wide sc">
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
                        <!--
                        <li class="s-emui"><a href="http://emui.huawei.com/cn/" target="_blank">EMUI</a></li>
                        <li class="s-appstore"><a href="http://appstore.huawei.com/" target="_blank">应用市场</a></li>
                        <li class="s-cloud"><a href="http://cloud.huawei.com/cn/contact" target="_blank">云服务</a></li>
                        <li class="s-developer"><a href="http://developer.huawei.com/" target="_blank">开发者联盟</a></li>
                        -->
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
                        <li style="display: none;" class="s-login" id="unlogin_status">
                            <a href="" rel="nofollow">登录</a>
                            &nbsp;&nbsp;&nbsp;<a href="" rel="nofollow">注册</a>
                        </li>
                        <li style="display: list-item;" class="s-user hide" id="login_status">
                            <!--
                                    ie6下鼠标悬停追加ClassName： hover
                                    示例：[ s-dropdown hover ]
                            -->
                            <div class="s-dropdown">
                                <div class="h">
                                    <a href="" id="customer_name" rel="nofollow" timetype="timestamp" class="link-user">huafans011...</a>
                                    <em class="vip-state" id="vip-info">
                                        <a style="display: none;" class="link-noAct" href="" id="vip-inActive" title="请完善个人信息，即刻享受会员特权">去激活</a>
                                        <a href="" title="VMALL V0会员" id="vip-Active"><i class="icon-vip-level-0"></i>&nbsp;</a>
                                        <a title="实名认证" id="authentication" href=""><i class="icon-authentication icon-authentication-not"></i>&nbsp;</a>
                                    </em>
                                    <s></s>
                                </div>
                                <div class="b">
                                    <p><a href="" target="_blank" id="user-center">我的华为帐号</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://www.vmall.com/account/logout">退出</a></p>
                                </div>
                            </div>
                        </li>
                        <li class="s-myOrders">
                            <a href="" rel="nofollow" timetype="timestamp">我的订单</a>
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
                                    <p><a href="" target="_blank">数字音乐</a></p>
                                    <p><a href="" target="_blank">爱旅</a></p>
                                    <p><a href="" target="_blank">华为网盘</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <textarea id="selectRegion-tips" style="display: none;">
        </textarea>


        <!--头部 -->
        <div class="order-header">
            <div class="g">
                <div class="fl">
                    <div class="logo logo-index"><a href="#" title="华为商城"><img src="{{url('/images/home/newLogo.png')}}" alt="华为商城"></a></div>
                </div>
                <div class="fr">
                    <!--步骤条-三步骤 -->
                    <div class="progress-area progress-area-3">
                        <!--我的购物车 -->
                        <div style="display: block;" id="progress-cart" class="progress-sc-area hide">我的购物车</div>
                        <!--核对订单 -->
                        <div id="progress-confirm" class="progress-co-area hide">填写核对订单信息</div>
                        <!--成功提交订单 -->
                        <div id="progress-submit" class="progress-sso-area hide">成功提交订单</div>
                    </div>
                </div>
            </div>
        </div>


        <textarea class="hide" id="ec-binding-phone">	
        </textarea>


        <div class="layout">
            <!-- 20131223-购物车-start -->
            <div class="sc-list">
                <!-- 20131223-购物车-商品列表-start -->
                <div class="sc-pro-list">

                    <!-- 20131223-订单-商品-标题-start -->
                    <div class="sc-pro-title-area">
                        <div class="h">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="tr-check">
                                          
                                        </th>
                                        <th class="tr-pro">商品</th>
                                        <th class="tr-price">单价<em>（元）</em></th>
                                        <th class="tr-quantity">数量</th>
                                        <th class="tr-subtotal">小计<em>（元）</em></th>
                                        <th class="tr-operate">操作</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- 20131223-订单-商品-标题-end -->
                    <form id="cart-form" autocomplete="off" method="get">
                        <input name="state" value="1" type="hidden">
                        <span id="cart-list"><!--product-list start-->
                            <div class="sc-pro-area" id="order-pro-5886">
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
                              
                                $total = 0;
                              ?>
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        @if(!empty($goods))
                                            @foreach($goods as $key=>$tmp)
                                          <?php  $total += $tmp->price*$tmp->count ?>
                                        <tr class="sc-pro-item"><td rowspan="1" class="tr-check"><p class="timerpromo-5886 hide"></p></td>
                                            <td class="tr-pro"><div class="pro-area clearfix">
                                                    <p class="p-img"><a title="" target="_blank" href="" seed="cart-item-name"><img alt="" src="{{$tmp->thum}}"></a></p><p class="p-name"><a title="{{$tmp->name}}" target="_blank" href=" seed="cart-item-name">{{$tmp->name}}</a></p>
                                                
                                                    <p class="p-sku"><em>颜色：{{$tmp->color}}</em></p><p class="p-explain">此商品由华为终端发货</p><p class="understock-5886 hide"></p></div></td><td class="tr-price"><span class="giid" id="{{"fid".$tmp->gid}}">{{$tmp->price}}</span></td><td class="tr-quantity" rowspan="1"> 
                                                <div class="sc-stock-area"><div class="stock-area">
                                                        <a href="javascript:;"  class="icon-plus-3 vam but"   id="{{$tmp->gid}}" title="加" key="{{$key}}"><input type="hidden" id="fid" value="{{$tmp->gid}}"><span>+</span></a>
                                                        <input style="ime-mode: disabled;" id="{{"fiddd".$tmp->gid}}" class="shop-quantity textbox vam" value="{{$tmp->count}}" data-skuid="5886" data-type="1" seed="cart-item-num" type="text">
                                                        <a href="javascript:;" class="icon-minus-3 vam but"   title="减" key="{{$key}}"><input type="hidden" id="fid" value="{{$tmp->gid}}"><span>-</span></a></div><p class="normalLimitstock-5886 hide"></p></div></td>
                                            <td rowspan="1" class="tr-subtotal"><b class = "gidd" id="{{"fidd".$tmp->gid}}">{{$tmp->price*$tmp->count}}</b></td>
                                            <td rowspan="1" class="tr-operate"><a href="/home/shopcar/delete/{{$key}}" class="icon-sc-del" title="删除" onclick="" seed="cart-item-del">删除</a></td></tr>
                                      @endforeach
                                      @endif
                                    </tbody></table></div><!--product-list end--></span></form></div>
                <div class="hr-20"></div><div id="cart-total-area" class="sc-total-area clearfix">
                    <div class="sc-total-control"><label class="vam" for="checkAll-buttom"></label><a class="vam" href="javascript:;" seed="cart-all-del"></a></div><div class="sc-total-price">
                        <table border="0" cellpadding="0" cellspacing="0"><tbody><tr><th><em>总计金额：<em></em></em></th><td><b id="sc-cartInfo-totalPrice" class="total">¥{{$total}}</b></td></tr></tbody></table>
                    </div></div><div class="hr-25"></div><div class="sc-action-area clearfix"><a class="button-style-4 button-go-shopping-3" href="/">继续购物</a><a class="button-style-1 button-go-checkout-2" href="/home/shopcar/order" seed="cart-pay">去结算</a>
                    <div class="sc-action-tips hide" id="sc-action-tips"><div class="tips-style-1 tips-area"><i></i><div class="tips-text"><p id="tips-text-p">购物车中有库存不足商品，请处理后结算</p></div><s></s></div></div></div>
                  
                    
                    <script src="/js/home/shopcar.js"></script>
                <!--购物车-商品列表 end -->

                <!--购物车-空数据 --> 
                <div id="cart-empty-msg" class="sc-empty-area hide">
                    亲，您购物车里还没有物品哦，快去逛逛吧！
                </div>
                <!-- 购物车列表 End-->
            </div>
            <div class="hr-35"></div>

            <div class="hr-25"></div>
            <!--热门推荐-20121011 -->
            <div id="pro-recommend-area" class="pro-scroller-area hide">
                <div class="h">
                    <h3>您可能感兴趣的商品</h3>
                </div>
                <div class="b">
                    <!--左边滚动按钮className：pro-scroller-back 不可点击className：pro-scroller-back-disabled ；右边滚动按钮className：pro-scroller-forward 不可点击className：pro-scroller-forward-disabled --> 
                    <a id="cart-img-prev" class="pro-scroller-back-disabled" href="javascript:;" onclick=")"></a>
                    <div class="pro-list">
                        <!--ul的宽度等于li宽度*N -->
                        <ul style="width:1158px;" id="pro-recommend-list"></ul>
                    </div>
                    <a id="cart-img-next" class="pro-scroller-forward" href="javascript:;" onclick=""></a>
                </div>
            </div>
            <!--热门推荐结束 -->

            <!-- 购物车主体 End　-->
        </div>
        <div class="hr-75"></div>

        <textarea id="product-list-html" class="hide">&
        </textarea>


        @include("home.layout.foot");