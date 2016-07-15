@include("admin.layout.head")

<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}" />

<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商品列表</strong>  <small></small></div>

    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <table class="am-table am-table-bd am-table-striped admin-content-table">
          <thead>
          <tr>
            <th>GID</th><th>产品名称</th><th>所属分类</th><th>价格</th><th>图片</th><th>操作</th>
          </tr>
          </thead>
          <tbody>
              @foreach($goods as $tmp)
          <tr><td>{{$tmp->gid}}</td><td>{{$tmp->name}}</td><td>{{$tmp->cname}}</td> <td><span class="am-badge am-badge-success">{{$tmp->price}}￥</span></td>

            <td><img src="{{$tmp->im}}" height="50" /></td>
            <td><a href="/Admin/goods/{{$tmp->gid}}/edit">修改</a>  <a href="/Admin/goods/delete/{{$tmp->gid}}">删除</a>  <a href="/Admin/goods/{{$tmp->gid}}">[更改详情]</a></td>
          </tr>
          @endforeach

          </tbody>
        </table>
          <p>
	{!!$goods->render()!!}
</p>
      </div>
    </div>



 @include("admin.layout.foot")
