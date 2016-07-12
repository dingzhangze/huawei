@include("admin.layout.head")
<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}" />
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">分类列表</strong> / <small>category listings</small></div>
    </div>

    <hr>

    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-6">
        <div class="am-btn-toolbar">
          <div class="am-btn-group am-btn-group-xs">
            <div type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span><a href="{{ url('/Admin/category/create') }}"> 新增</a></div>
          </div>
        </div>
      </div>
    
      <div class="am-u-sm-12 am-u-md-3">
        <div class="am-input-group am-input-group-sm">
          <input type="text" class="am-form-field">
        <span class="am-input-group-btn">
          <button class="am-btn am-btn-default" type="button">搜索</button>
        </span>
        </div>
      </div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
            <tr>
            <th class="table-id">#</th><th class="table-title">类名</th><th class="table-type">父类</th><th class="table-author am-hide-sm-only">路径</th><th class="table-date am-hide-sm-only">是否导航</th><th class="table-set">操作</th>
            </tr>
            </thead>
            <tbody>
                @foreach($categories as $cate)
            <tr>
              <td>{{$cate->cid}}</td>
              <td>{{$cate->cname}}</td>
              <td>{{$cate->pid}}</td>
              <td class="am-hide-sm-only">{{$cate->path}}</td>
              <td class="am-hide-sm-only"><input type="radio" cid="{{$cate->cid}}" name="isNav_{{$cate->cid}}" value="Y" @if($cate->isNav == "Y") checked @endif />是、否<input type="radio" name="isNav_{{$cate->cid}}"cid="{{$cate->cid}}" value="N" @if($cate->isNav == "N") checked @endif /></td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <div class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o">[<a href="/Admin/category/child/{{$cate->cid}}">添加子类</a>]</span></div>
                    <div class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy">[<a href="/Admin/category/{{$cate->cid}}/edit">编辑</a> ]</span> </div>
                  @if (!$cate->hasChild) <div class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o">[<a href="/Admin/category/delete/{{$cate->cid}}">删除</a>]</span></div>@endif
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
          <div class="am-cf">
            <div class="am-fr">
            {!!$categories->render()!!}
            </div>
          </div>

        </form>
      </div>

    </div>
  </div>

  <footer class="admin-content-footer">
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
  </footer>

</div>
<script src="/js/admin/category_index.js"></script>
<!-- content end -->
@include("admin.layout.foot")
