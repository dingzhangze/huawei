@include("admin.layout.head")
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">添加分类</strong> / <small>Create a classify </small></div>
    </div>
    <hr/>
    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>
      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form  method="post" action="/Admin/category" class="am-form am-form-horizontal">
          <input type="hidden" name="_token" value="{{csrf_token()}}" />
          <input type="hidden" name="pid" value="{{isset($data) ? $data->cid : 0}}" />
          <input type="hidden" name="path" value="{{isset($data) ? $data->path.",".$data->cid : 0}}" />
          <div class="am-form-group">
            <label for="cid" class="am-u-sm-3 am-form-label">父类</label>
            <div class="am-u-sm-9">
            <input type="text"  readOnly="true" value="{{isset($data) ? $data->cname : "根类"}}">
              </div>
          </div>

          <div class="am-form-group">
            <label for="cname" class="am-u-sm-3 am-form-label">类名</label>
            <div class="am-u-sm-9">
              <input type="text" name="cname" value="">
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
              <input type="submit" class="am-btn am-btn-primary" value="添加">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@include("admin.layout.foot")
