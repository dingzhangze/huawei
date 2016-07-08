@include("admin.layout.head")
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">修改用户</strong>  <small> </small></div>
    </div>
    <hr/>
    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>
      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form  method="post" action="/Admin/user/{{$userRec->uid}}" class="am-form am-form-horizontal">
          <input type="hidden" name="_token" value="{{csrf_token()}}" />
          <input type="hidden" name="_method" value="PUT">
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">账号</label>
            <div class="am-u-sm-9">
                <input type="text" id="user-name" name="uname" value="{{$userRec->uname}}" disabled  placeholder="账号/uname">
            </div>
          </div>

          <div class="am-form-group">
            <label for="password" class="am-u-sm-3 am-form-label">密码</label>
            <div class="am-u-sm-9">
            <input type="password" name="password" placeholder=""> （*置空则不修改*）
            </div>
          </div>

          <div class="am-form-group">
            <label for="repassword" class="am-u-sm-3 am-form-label">确认密码</label>
            <div class="am-u-sm-9">
                <input type="password" name="repassword" placeholder="">（*确认密码一致*）
            </div>
          </div>

          <div class="am-form-group">
            <label for="sex" class="am-u-sm-3 am-form-label">性别</label>
            <div class="am-u-sm-9">
                <input type="radio" name="sex" value="男" @if($userRec->sex == "男") checked @endif  id="male" /><label for="male">男</lable>&nbsp;&nbsp;&nbsp;
            <input type="radio" name="sex" value="女" id="male" @if($userRec->sex == "女") checked @endif /><label>女<label for="female">
            </div>
          </div>

          <div class="am-form-group">
            <label for="nickname" class="am-u-sm-3 am-form-label">昵称</label>
            <div class="am-u-sm-9">
              <input type="text" name="nickname" value="{{$userRec->nickname}}"  placeholder="输入你的昵称/nickname">
            </div>
          </div>
          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <input type="submit" class="am-btn am-btn-primary" value="修改">
            </div>
          </div>
        </form>
          <div class="fl errs">
    {{ session("info") }}
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
