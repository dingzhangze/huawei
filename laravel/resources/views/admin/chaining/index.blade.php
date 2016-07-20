@include("admin.layout.head")

<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}" />
 
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">友情链接列表</strong>  <small></small></div>
            
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <table class="am-table am-table-bd am-table-striped admin-content-table">
          <thead>
          <tr>
            <th>ID</th><th>链接名称</th><th>链接域名</th><th>操作</th>
          </tr>
          </thead>
          <tbody>
              @foreach($chaining as $add)
          <tr>
              <td>{{$add->aid}}</td>
              <td>{{$add->name}}</td>
              <td>{{$add->chaining}}</td>
       
            <td><a href="/Admin/chaining/{{$add->aid}}/edit">修改</a>  <a href="/Admin/chaining/delete/{{$add->aid}}">删除</a></td>
          </tr>
         
               @endforeach
          </tbody>
        </table>
          <p>

</p>
      </div>
    </div>
  
     
 @include("admin.layout.foot")
