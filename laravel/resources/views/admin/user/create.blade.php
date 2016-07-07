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
        <form  method="post" action="/Admin/user/store" class="am-form am-form-horizontal">
          <input type="hidden" name="_token" value="{{csrf_token()}}" />
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">账号/UserName</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-name" name="uname" placeholder="账号/UserName">
            </div>
          </div>

          <div class="am-form-group">
            <label for="password" class="am-u-sm-3 am-form-label">密码/password</label>
            <div class="am-u-sm-9">
              <input type="password" name="password" placeholder="输入你的密码/password">
            </div>
          </div>

          <div class="am-form-group">
            <label for="repassword" class="am-u-sm-3 am-form-label">确认密码</label>
            <div class="am-u-sm-9">
              <input type="password" name="repassword" placeholder="确认你的密码 / repassword">
            </div>
          </div>

          <div class="am-form-group">
            <label for="sex" class="am-u-sm-3 am-form-label">性别</label>
            <div class="am-u-sm-9">
            <input type="radio" name="sex" value="男" checked id="male" /><label for="male">男</lable>、
            </label><input type="radio" name="sex" value="女" />女<label for="female">
            </div>
          </div>

          <div class="am-form-group">
            <label for="nickname" class="am-u-sm-3 am-form-label">昵称</label>
            <div class="am-u-sm-9">
              <input type="text" name="nickname" placeholder="输入你的昵称/nickname">
            </div>
          </div>
          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <button type="button" class="am-btn am-btn-primary">保存</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@include("admin.layout.foot")
