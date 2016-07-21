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
            <th>订单号</th><th>收货人</th><th>收货地址</th><th>联系电话</th><th>订单金额</th><th>下单时间</th><th>状态</th>
          </tr>
          </thead>
          <tbody>
          @foreach($addres as $add)   
          <tr>
              <td>HW00{{$add->number}}</td>
              <td>{{$add->name}}</td>
              <td>{{$add->address}}</td>
              <td>{{$add->phone}}</td>
              <td>{{($add->count)*($add->price)}}</td>
              <td>{{$add->ordertime}}</td>
              <td>
                  <select name="state" id="{{$add->id}}">
                        <option value="1"  @if ($add->state == 1)  selected @endif}>待付款</option>
                        <option value="2"  @if ($add->state == 2)  selected @endif>已付款</option>
                        <option value="3"  @if ($add->state == 3)  selected @endif>已完成</option>
                  </select>
                  
              </td>
          </tr>
         @endforeach
              
          </tbody>
        </table>
          <script src="/js/admin/addres_index.js"></script>
          <p>

</p>
      </div>
    </div>
  
     
 @include("admin.layout.foot")
