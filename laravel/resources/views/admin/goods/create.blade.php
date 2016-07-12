@include("admin.layout.head")
<script src="/plugins/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="/plugins/uploadify/uploadify.css"></script>
<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}" />

<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">添加商品</strong><small> </small></div>
    </div>
    <hr/>
    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>
      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form  name="fm"  method="post" action="/Admin/goods"  class="am-form am-form-horizontal" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}" />
           <input type="hidden" name="im" id="im" value="" />
          <div class="am-form-group">
            <label for="name" class="am-u-sm-3 am-form-label">商品名称</label>
            <div class="am-u-sm-9">
              <input type="text" id="name" name="name" placeholder="输入商品名称">
            </div>
          </div>

          <div class="am-form-group">
            <label for="password" class="am-u-sm-3 am-form-label">所属分类</label>
            <div class="am-u-sm-9">
                <select name="cid">
                    <option value="">-请选择-</option>
                    <?php
                    foreach ($categories as $key => $cate) {
                        if ($key == 0) {
                            echo '<optgroup label="'.$cate->cname . '">';
                            continue;
                        }
                        if ($cate->pid == 0) {
                            echo "</optgroup><optgroup label='" .$cate->cname ."'>";
                        } else {
                            echo "<option value=' " . $cate->cid . "'>". $cate->cname . "</option>";
                        }
                    }
                    
                    echo "</optgroup>";
                    ?>
                </select>
            </div>
          </div>

          <div class="am-form-group">
            <label for="repassword" class="am-u-sm-3 am-form-label">商品价格</label>
            <div class="am-u-sm-9"><input type="text" name="price" placeholder="输入价格">
             
            </div>
          </div>

    

          <div class="am-form-group">
            <label for="nickname" class="am-u-sm-3 am-form-label">商品图片</label>
            <div class="am-u-sm-9">
             <div id="preview"></div><input type="file" name="upload" id="upload">
           
          </div>
         
          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <input type="submit" class="am-btn am-btn-primary" value="添加">
            </div>
          </div>
        </form>
            <script src="/js/admin/goods_create.js"></script>
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
