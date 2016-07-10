@include("admin.layout.head")
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">添加分组</strong>  <small> </small></div>
    </div>
    <hr/>
    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>
      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form  method="post" action="/Admin/group" class="am-form am-form-horizontal">
          <input type="hidden" name="_token" value="{{csrf_token()}}" />
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">名称</label>
            <div class="am-u-sm-9">
              <input type="text" id="title" name="title" value="">
            </div>
          </div>

          <div class="am-form-group">
            <label for="password" class="am-u-sm-3 am-form-label">权限</label>
            <div class="am-u-sm-9">
              @foreach ($rules as $key=>$rule)
              @if ($key % 4 == 0) <p> @endif
              <input type="checkbox" name="rules[]" value="{{$rule->id}}">{{$rule->title}}
              @if ($key % 4 == 3) <p> @endif
              @endforeach
            </div>
          </div>


          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <input type="submit" class="am-btn am-btn-primary" value="添加">
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
