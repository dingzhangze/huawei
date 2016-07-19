@include("admin.layout.head")

<link type="text/css" rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.css')}}" />
 
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">订单列表</strong>  <small></small></div>
            
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <table class="am-table am-table-bd am-table-striped admin-content-table">
          <thead>
          <tr>
            <th>订单号</th><th>用户ID</th><th>收货人</th><th>收货地址</th><th>联系电话</th><th>订单金额</th><th>下单时间</th><th>状态</th>
          </tr>
          </thead>
          <tbody>
             
          <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            <td><a href="">修改</a>  <a href="">删除</a></td>
          </tr>
         
              
          </tbody>
        </table>
          <p>

</p>
      </div>
    </div>
  
     
 @include("admin.layout.foot")
