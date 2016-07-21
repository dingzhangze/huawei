@include("admin.layout.head")
<!-- content start -->
<!--<script src="{{ asset('/plugins/uploadify/jquery.uploadify.min.js')}}"></script>-->
<script src="/plugins/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="{{asset('/plugins/uploadify/uploadify.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}" />
<link rel="stylesheet" href="/css/admin/index-a.css">
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong>  <small></small></div>
    </div>

      <div>
     <div id="o1">
      <div id="tx1">
        <div id="tx2"><img src="{{Session::get('userData')->avartar}}" width="142px" height="142px" id="im"></div>
      </div>
      <div id="xx">
        <span class="mz"><h2>{{Session::get("userData")->uname}}</h2></span><br>
        <form name="fm">
	<input type="hidden" name="_token" value="{{csrf_token()}}" />
	<input type="hidden" name="uid" value="{{Session::get("userData")->uid}}" /><br>
	<input type="file" name="avartar" id="avartar" multiple="true" />
        </form>
        <script src="{{asset('/js/admin/index.js')}}"></script>
      </div>
    </div>
    <div id="o2">
      <ul> 
          <li>昵    称：{{Session::get("userData")->nickname}}</li>
          <li>性    别：{{Session::get("userData")->sex}}</li>
          <li>创建时间：{{Session::get("userData")->createtime}}</li>
      </ul>
    </div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <table class="am-table am-table-bd am-table-striped admin-content-table">
          <thead>
          <tr>
            <th>商品</th><th>咨询人</th><th>咨询问题</th><th>操作</th>
          </tr>
          </thead>
          <tbody>
           @foreach($comment as $comments) 
           @if(empty($comments->reply))
          <tr>
              
              <td>{{$comments->gname}}</td>
              <td>{{$comments->name}}</td>
              <td>{{$comments->comment}}</td>
              <td><a href="{{url('/Admin/Comment/'.$comments->id.'/edit')}}">回复</a></td>
          </tr>
          @endif
          @endforeach
          </tbody>
        </table>
      </div>
    </div>

    
        

      

     
      </div>
    </div>
  </div>
@include("admin.layout.foot")
