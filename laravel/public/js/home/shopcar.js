/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
    //给点击事件绑定事件
    $(".but").click(function () {
       //改文本框中的数量
       if ($(this) .hasClass("icon-minus-3")) {
           $(this).prev().val(function (idx ,val) {
               if (val == 1 ) return 1;
             
               return parseInt(val) - 1;
           });
       }else if($(this).hasClass("icon-plus-3")) {
            $(this).next().val(function (idx ,val){
               
               return  parseInt(val) + 1;
           });
       }
       //修改小计的结果
       var giid = $(this ).children().val();
//       alert(giid);
       var price = parseInt($("#fid"+giid).html());
   // alert(price);
     
       
       var count = $(this).parent().find($("input:text")).val();
       // alert(count);
      var dd = price*count;
   // alert(dd);
      $("#fidd"+giid).html(dd);
         
       
       //修改总计的结果 
       var total = 0; 
       $(".gidd").each(function(){
          total += parseInt($(this).html()); 
       });
       $(".total").html(total);
       //发送ajax修改商品的数量
       $.ajax({
           type : "post",
           url : "/home/shopcar",
           data :"key=" + $(this).attr("key") + "&count=" + count,
           dataType : "json",
           success : function (result) {
               
           }
       });
       
       
       
    });
});

