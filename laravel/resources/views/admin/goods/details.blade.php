@include("admin.layout.head")
<script src="/plugins/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="/plugins/uploadify/uploadify.css"></script>
<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}" />

<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">添加/修改商品详情</strong><small></small></div>
    </div>
    <hr/>
    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>
      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form  name="fm"  method="post" action="/Admin/goods/details"  class="am-form am-form-horizontal" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}" />
           <input type="hidden" name="thum" id="one" value=" @if(!empty($abc)){{$abc->thum}} @endif" />
           <input type="hidden" name="im1" id="two" value=" @if(!empty($abc)){{$abc->im1}} @endif" />
           <input type="hidden" name="im2" id="three" value=" @if(!empty($abc)){{$abc->im2}} @endif" />
           <input type="hidden" name="gid"  value="{{$id}}" />
           
          
          <div class="am-form-group">
            <label for="name" class="am-u-sm-3 am-form-label">商品名称</label>
            <div class="am-u-sm-9">
              <input type="text" id="name" name="name" placeholder="输入商品名称" value=" @if(!empty($abc)){{$abc->name}} @endif" >
            </div>
          </div>

          <div class="am-form-group">
            <label for="repassword" class="am-u-sm-3 am-form-label">商品价格</label>
            <div class="am-u-sm-9"><input type="text" name="price" placeholder="输入价格" value=" @if(!empty($abc)){{$abc->price}} @endif">
             
            </div>
          </div>

           <div class="am-form-group">
            <label for="repassword" class="am-u-sm-3 am-form-label">商品颜色</label>
            <div class="am-u-sm-9"><input type="text" name="color" placeholder="输入价格" value=" @if(!empty($abc)){{$abc->color}} @endif">
              </div>
              </div>
           
             <div class="am-form-group">
            <label for="repassword" class="am-u-sm-3 am-form-label">网络制式</label>
            <div class="am-u-sm-9"><input type="text" name="network" placeholder="输入价格" value=" @if(!empty($abc)){{$abc->network}} @endif"> 
            </div>
          </div>
                
              <div class="am-form-group">
            <label for="repassword" class="am-u-sm-3 am-form-label">商品版本</label>
            <div class="am-u-sm-9"><input type="text" name="versions" placeholder="输入价格" value=" @if(!empty($abc)){{$abc->versions}} @endif"> 
            </div>
          </div>
                
         
           
          <div class="am-form-group">
            <label for="repassword" class="am-u-sm-3 am-form-label">商品简介</label>
            <div class="am-u-sm-9"><input type="text" name="intro" placeholder="输入简介" value=" @if(!empty($abc)){{$abc->intro}} @endif">
             
            </div>
          </div>

    

          <div class="am-form-group">
            
            
                    <label for="nickname" class="am-u-sm-3 am-form-label">放大镜图片</label>
                
                    <div class="am-u-sm-13">
                        <div id="preview1">@if(!empty($abc))<img src="{{$abc->thum}} " width="150">@endif</div>
                        <input type="file" name="thum" id="thum">
                    </div>
               
              </div>
              
           <div class="am-form-group">
            
            
                    <label for="nickname" class="am-u-sm-3 am-form-label">商品详细图片</label>
                
                    <div class="am-u-sm-14">
                        <div id="preview2">@if(!empty($abc))<img src="{{$abc->im1}} " width="150">@endif</div>
                        <input type="file" name="im1" id="im1">
                    </div>
               
                    <div class="am-u-sm-14">
                        <div id="preview3">@if(!empty($abc))<img src="{{$abc->im2}} " width="150">@endif</div>
                        <input type="file" name="im2" id="im2">
                    </div>
               
              </div>
              
          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <input type="submit" class="am-btn am-btn-primary" value="添加">
            </div>
          </div>
        </form>
            <script src="/js/admin/goods_details.js"></script>
          <div class="fl errs">
    <ul>
    
    </ul></div>
     
    </div>
  </div>
   

@include("admin.layout.foot")
