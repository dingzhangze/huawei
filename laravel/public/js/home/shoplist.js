/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
    //给点击事件绑定事件
    $(".butt").click(function () {
       //改文本框中的数量
       if ($(this) .hasClass("icon-minus-2")) {
           $(this).next().val(function (idx ,val) {
                // alert (aa);
               if (val == 1 ) return 1;
             
               return parseInt(val) - 1;
           });
       }else if($(this).hasClass("icon-plus-2")) {
            $(this).prev().val(function (idx ,val){
               
               return  parseInt(val) + 1;
           });
       }
       //得到商品的数量
           var count = $(this).parent().find($("input:text")).val();
         //  alert(count);
     //  商品数量
//       $.ajax({
//           type : "post",
//           url : "/Home/goodslist",
//           data :"count=" + count,
//           dataType : "json",
//           success : function (result) {
//               
//           }
//       });
       
       
    });
});

