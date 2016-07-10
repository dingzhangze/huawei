@include("admin.layout.head")
<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}" />
<script type="text/javascript" src="{{asset('/plugins/wbox/mapapi.js')}}"></script> 
<script type="text/javascript" src="/plugins/wbox/wbox.js"></script> 
<link rel="stylesheet" type="text/css" href="/plugins/wbox/wbox/wbox.css" />
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户首页</strong>  <small></small></div>
    </div>
      
    <div class="am-g">
      <div class="am-u-sm-12">
          <form method="post" action="{{url('/Admin/Rule/multi')}}">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              
              <input type="submit" name="submit" value="启用选中项">
              <input type="submit" name="submit" value="禁用选中项">
              <input type="submit" name="submit" value="删除选中项">
        <table class="am-table am-table-bd am-table-striped admin-content-table">
          <thead>
          <tr>
            <th>#</th><th>权限</th><th>名称</th><th>状态</th><th>操作</th>
          </tr>
          </thead>
          <tbody class="editRule">
              @foreach($rules as $rule) 
          <tr><td><input type="checkbox" name="rules[]" value="{{$rule->id}}"/></td>
              <td>{{$rule->name}}</td>
              <td>{{$rule->title}}</td>
              <td>{!!$rule->status == 1 ? "启用" :"<font color='red'>禁用</font>"!!}</td>
            <td><a class="editRule" href="javascript:void 0;" rule="{{$rule->id}}">编辑</a>  </td>
          </tr>
          @endforeach
        
          </tbody>
        </table>
       </form>
          <script src="{{asset('js/admin/rule_index.js')}}"></script>
      </div>
    </div>


@include("admin.layout.foot")
