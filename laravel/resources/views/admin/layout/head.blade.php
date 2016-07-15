<!doctype html>
<html class="no-js fixed-layout">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>后台管理</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="{{asset('/images/admin/favicon.png')}}">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="{{asset('/css/admin/amazeui.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('/css/admin/admin.css')}}">

  <script src="{{ asset('/js/jquery-1.8.3.min.js') }}" type="text/javascript"></script>

   <meta name="csrf-token" content="{{ csrf_token() }}" />
        <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>

</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar am-topbar-inverse admin-header">
  <div class="am-topbar-brand">
    <strong>HUAWEI</strong>   <small>后台管理系统</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">

      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">

          <li><a href="{{url('/Admin')}}"><span class="am-icon-user"></span> 资料</a></li>

          <li><a href="{{url('/Admin/login/logout')}}"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="{{url('/Admin')}}"><span class="am-icon-home"></span> 首页</a></li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 用户管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>

          <ul class="am-list am-collapse admin-sidebar-sub " id="collapse-nav">
            <li><a href="{{url('/Admin/user')}}" class="am-cf"><span class="am-icon-check"></span> 用户列表</a></li>

             <li><a href="{{url('/Admin/Huser')}}" class="am-cf"><span class="am-icon-th"></span> 会员列表</a></li>

            <li><a href="{{ url("/Admin/user/create") }}"><span class="am-icon-puzzle-piece"></span> 添加用户</a></li>

            <li><a href="{{url('/Admin/group')}}"><span class="am-icon-th"></span> 分组列表</a></li>
            <li><a href="{{url('/Admin/group/create')}}"><span class="am-icon-calendar"></span> 添加分组</a></li>
           <li><a href="{{ url('/Admin/rule') }}"><span class="am-icon-bug"></span>权限列表</a></li>
             <li><a href="{{url('/Admin/rule/create')}}"><span class="am-icon-bug"></span>添加权限</a></li>
          </ul>
        </li>
		<li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav1'}"><span class="am-icon-file"></span> 分类管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav1">
            <li><a href="{{url('/Admin/category')}}" class="am-cf"><span class="am-icon-check"></span> 分类列表</a></li>
            <li><a href="{{ url('/Admin/category/create')}}"><span class="am-icon-puzzle-piece"></span> 添加根类</a></li>
          </ul>
        </li>


		<li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav2'}"><span class="am-icon-file"></span> 商品管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub " id="collapse-nav2">


            <li><a href="{{url('/Admin/goods')}}" class="am-cf"><span class="am-icon-th"></span> 商品列表</a></li>
            <li><a href="{{url('/Admin/goods/create')}}"><span class="am-icon-puzzle-piece"></span> 添加商品</a></li>



          </ul>
        </li>
		<li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav3'}"><span class="am-icon-file"></span> 订单管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub " id="collapse-nav3">
            <li><a href="" class="am-cf"><span class="am-icon-th"></span> 订单列表</a></li>

          </ul>
        </li>
        
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav4'}"><span class="am-icon-file"></span> 咨询管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub " id="collapse-nav4">
            <li><a href="{{url('/Admin/Comment')}}" class="am-cf"><span class="am-icon-th"></span> 咨询列表</a></li>
           

          </ul>
        </li>
		<li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav5'}"><span class="am-icon-file"></span> 广告管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub " id="collapse-nav5">
            <li><a href="" class="am-cf"><span class="am-icon-th"></span> 广告列表</a></li>
            <li><a href=""><span class="am-icon-puzzle-piece"></span> 添加广告</a></li>

          </ul>
        </li>


      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>二期项目倒计时:<br><b>     12天<b></p>
        </div>
      </div>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> wiki</p>
          <p>Welcome to the Amaze UI wiki!</p>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar end -->
