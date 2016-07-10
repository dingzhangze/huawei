@include("admin.layout.head")

<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}" />
 
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">角色管理</strong>  <small></small></div>
 
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <table class="am-table am-table-bd am-table-striped admin-content-table">
          <thead>
          <tr>
            <th>ID</th><th>名称</th><th>权限</th><th>操作</th>
          </tr>
          </thead>
          <tbody>
              @foreach($groups as $group) 
          <tr><td>{{$group->id}}</td><td>{{$group->title}}</td>
            <td>
                   @foreach($rules as $key=>$rule)
            @if ($key % 5 == 0)<p>@endif
                @if (in_array($rule->id, explode(",", $group->rules)))
                <input type="checkbox" name="rule"  groupid ="{{$group->id}}"  value="{{$rule->id}}" checked >{{$rule->title}}、
                @else
                <input type="checkbox" name="rule" groupid ="{{$group->id}}"  value="{{$rule->id}}">{{$rule->title}}、
                @endif
                @if ($key % 5 == 4)</p>@endif
            @endforeach   
            </td>
           
            <td><a href="{{url('/Admin/group')."/".$group->id."/edit"}}">修改</a>  <a href="{{url('/Admin/group/delete').'/'.$group->id}}">删除</a></td>
          </tr>
          @endforeach
        
          </tbody>
        </table>
     
      </div>
    </div>
     
<script src="/js/admin/group_index.js"></script>
     
 @include("admin.layout.foot")
