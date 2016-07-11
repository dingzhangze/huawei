@include("admin.layout.head")

<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}" />
 
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">会员首页</strong>  <small></small></div>
            <form name="fm" method="post" action="{{url('/Home/user')}}">
    <p>
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <input type="submit" value="查找" style="float:right" />
        <input type="text" name="keyword" value="{{$keyword}}" placeholder="请输入账号或昵称" style="float:right" /> 
        
    </p>
</form>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <table class="am-table am-table-bd am-table-striped admin-content-table">
          <thead>
          <tr>
              <th>ID</th><th>账号</th><th>真实姓名</th><th>性别</th><th>联系方式</th><th>邮箱</th><th>类型</th><th>创建时间</th><th>状态</th>
          </tr>
          </thead>
          <tbody>
              @foreach($users as $user) 
          <tr><td>{{$user->id}}</td><td>{{$user->uname}}</td><td><span class="am-badge am-badge-success">{{$user->relname}}</span></td><td>{{$user->sex}}</td> 
              <td>{{$user->tel}}</td>
            
         
            <td>{{$user->email}}</td>
            <td>{{$user->Type}}</td><td>{{$user->createtime}}</td>
            <td><input type="radio" name="state" value="{{$user->state}}" checked/> 启用
        <input type="radio" name="state" value="{{$user->state}}"  />禁用</td>
          </tr>
          @endforeach
        
          </tbody>
        </table>
          <p>
	{!!$users->appends(["keyword" => $keyword])->render()!!}
</p>
      </div>
    </div>
  
 <script src="/js/admin/user_index.js"></script>
     
 @include("admin.layout.foot")
