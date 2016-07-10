@include("admin.layout.head")
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">修改分类</strong> / <small><a href="javascript:history.back();"><<返回</a></small></div>
    </div>
    <hr/>
    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>
      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form  method="post" action="/Admin/category/{{$category->cid}}" class="am-form am-form-horizontal">
          <input type="hidden" name="_token" value="{{csrf_token()}}" />
          <input type="hidden" name="_method" value="PUT" />
          <div class="am-form-group">
            <label for="cname" class="am-u-sm-3 am-form-label">类名</label>
            <div class="am-u-sm-9">
            <input type="text" name="cname" value="{{$category->cname}}" />
              </div>
          </div>

          <div class="am-form-group">
            <label for="isNav" class="am-u-sm-3 am-form-label">导航</label>
            <div class="am-u-sm-9">
              <input type="radio" name="isNav" value="Y" />是、
              <input type="radio" name="isNav" value="N" checked="checked" />否
            </div>
          </div>

          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <input type="submit" class="am-btn am-btn-primary" value="修改">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@include("admin.layout.foot")
