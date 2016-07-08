@include("admin.layout.head")
<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}" />

<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户首页</strong>  <small></small></div>
            <form name="fm" method="post" action="{{url('/Admin/user')}}">
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
            <th>ID</th><th>账号</th><th>性别</th><th>昵称</th><th>权限管理</th><th>创建时间</th><th>操作</th>
          </tr>
          </thead>
          <tbody>
              @foreach($users as $user) 
          <tr><td>{{$user->uid}}</td><td>{{$user->uname}}</td><td>{{$user->sex}}</td> <td><span class="am-badge am-badge-success">{{$user->nickname}}</span></td>
            <td>
              <div class="am-dropdown" data-am-dropdown>
                <button class="am-btn am-btn-default am-btn-xs am-dropdown-toggle" data-am-dropdown-toggle><span class="am-icon-cog"></span> <span class="am-icon-caret-down"></span></button>
                <ul class="am-dropdown-content">
                  <li><a href="#">管理员</a></li>
                  <li><a href="#">一般用户</a></li>
                  <li><a href="#">超级用户</a></li>
                </ul>
              </div>
            </td>
            <td>{{$user->createtime}}</td>
            <td><a href="{{url('/Admin/user/'.$user->uid.'/edit')}}">修改</a>  <a href="{{url('/Admin/user/delete/'.$user->uid)}}">删除</a></td>
          </tr>
          @endforeach
        
          </tbody>
        </table>
          <p>
	{!!$users->appends(["keyword" => $keyword])->render()!!}
</p>
      </div>
    </div>


@include("admin.layout.foot")
