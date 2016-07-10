@include("admin.layout.head")
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">添加用户</strong> / <small>Create a user </small></div>
    </div>
    <hr/>
    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>
      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form  method="post" action="/Admin/rule" class="am-form am-form-horizontal">
          <input type="hidden" name="_token" value="{{csrf_token()}}" />
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">权限</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-name" name="name" value="{{old("name")}}" placeholder="权限">
            </div>
          </div>

          <div class="am-form-group">
            <label for="password" class="am-u-sm-3 am-form-label">名称</label>
            <div class="am-u-sm-9">
              <input type="text" name="title" value="{{old("title")}}" placeholder="权限名称">
            </div>
          </div>


          <div class="am-form-group">
            <label for="sex" class="am-u-sm-3 am-form-label">状态</label>
            <div class="am-u-sm-9">
                <input type="radio" name="status" value="1" checked id="male" /><label for="male">启用</lable>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="status" value="0" id="female" /><label>禁用<label for="female">
            </div>
          </div>

          
          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <input type="submit" class="am-btn am-btn-primary" value="添加">
            </div>
          </div>
        </form>
          <div class="fl errs">
    <ul>
    @if(count($errors) > 0)
        @foreach($errors->all() as $e)
        <li>{{$e}}</li>
        @endforeach
    @endif
    </ul></div>
      </div>
    </div>
  </div>

@include("admin.layout.foot")
