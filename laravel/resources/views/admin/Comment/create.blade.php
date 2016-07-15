@include("admin.layout.head")
<div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">回复评论</strong><small></small></div>
      </div>

      <hr/>

      <div class="am-g">
     <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8"></div>
        <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
            <form class="am-form am-form-horizontal" method="post" action="/Admin/Comment">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <input type="hidden" name="id" value="{{$comment->id}}" />
              <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">咨询问题</label>
            <div class="am-u-sm-9">
                <input type="text" id="user-name" name="comment" value="{{$comment->comment}}" readonly="true">
            </div>
          </div>
                
            <div class="am-form-group">
              <label for="user-intro" class="am-u-sm-3 am-form-label">回复问题</label>
              <div class="am-u-sm-9">
                <textarea name="reply" rows="5" id="user-intro" placeholder="输入回复"></textarea>
                <small>请认真回复，谢谢合作！</small>
              </div>
            </div>

            <div class="am-form-group">
              <div class="am-u-sm-9 am-u-sm-push-3">
                <button type="submit" class="am-btn am-btn-primary">回复</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

@include("admin.layout.foot")
