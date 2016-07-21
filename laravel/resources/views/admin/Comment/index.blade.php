@include("admin.layout.head")

<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}" />
 
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">咨询列表</strong>  <small></small></div>
           
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <table class="am-table am-table-bd am-table-striped admin-content-table">
          <thead>
          <tr>
            <th>ID</th><th>商品</th><th>评论人</th><th>评论内容</th><th>回复内容</th><th>操作</th>
          </tr>
          </thead>
          <tbody>
              @foreach($comment as $comments)
          <tr>
              <td>{{$comments->id}}</td>
              <td>{{$comments->gname}}</td>
              <td>{{$comments->name}}</td>
              <td>{{$comments->comment}}</td>
             
              <td>{{$comments->reply}}</td>
            
            <td><a href="{{url('/Admin/Comment/'.$comments->id.'/edit')}}">回复</a>  <a href="{{url('/Admin/Comment/delete/'.$comments->id)}}">删除</a></td>
          </tr>
              @endforeach
        
          </tbody>
        </table>
          <p>

</p>
      </div>
    </div>
  
 
     
 @include("admin.layout.foot")
