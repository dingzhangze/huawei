<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Login Page | Amaze UI Example</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="{{url('images/admin/favicon.png')}}">
  <link rel="stylesheet" href="{{asset('/css/admin/amazeui.min.css')}}"/>
  <!--引入wbox弹出层插件-->
  <script type="text/javascript" src="{{ asset('/plugins/wbox/jquery1.4.2.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/plugins/wbox/mapapi.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/plugins/wbox/wbox.js') }}"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/wbox/wbox/wbox.css') }}" />
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
    body{
    	background: #fff url(../../images/admin/1.jpg) 50% 0 no-repeat;}
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>Web ide</h1>
    <p>Integrated Development Environment<br/>代码编辑，代码生成，界面设计，调试，编译</p>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    {{session("info")}}
    <form method="post" class="am-form" name="login" action="/Admin/login/logTodo">
      <input type="hidden" name="_token" value="{{$data["_token"] or csrf_token()}}" />
      <label for="uname">用户名:</label>
      <input type="text" name="uname"  value="{{$data["uname"] or ''}}">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="password"  value="{{$data["password"] or ''}}">
      <br>
      <label for="code">验证码:</label>
      <input type="text" name="code" id="code" value="{{$data["code"] or ''}}">
      <img class="yzm" src="{{url('/Admin/login/captcha').'/'.rand()}}" align="top" onclick="this.src = this.src.replace(/\d+$/, '') + Math.random();" >
      <table>
      <br />
      <div class="am-cf">
        <input type="submit" id="btn" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fr">
      </div>
    </form>
    <hr>
    <p>© 2016 LAMP兄弟连, AK47小组版权所有.</p>
  </div>
</div>
	<script src="{{ url('/js/admin/login_index.js') }}"></script>
</body>
</html>
