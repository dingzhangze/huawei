@include("admin.layout.head")
<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}" />
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">修改友情链接</strong><small> </small></div>
    </div>
    <hr/>
    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>
      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form  method="post" action="/Admin/chaining/{{$value->aid}}" class="am-form am-form-horizontal">
          <input type="hidden" name="_token" value="{{csrf_token()}}" />
           <input type="hidden" name="_method" value="PUT">
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">友情链接名称</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-name" name="name" value="{{$value->name}}">
            </div>
          </div>

          <div class="am-form-group">
            <label for="chaining" class="am-u-sm-3 am-form-label">友情链接地址</label>
            <div class="am-u-sm-9">
              <input type="text" name="chaining" value="{{$value->chaining}}">
            </div>
          </div>

         
          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <input type="submit" class="am-btn am-btn-primary" value="添加">
            </div>
          </div>
        </form>
         
      </div>
    </div>
  </div>

@include("admin.layout.foot")
