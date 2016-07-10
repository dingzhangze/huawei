/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
    //给单选框绑定点击事件 发送【阿贾克斯】请求到服务器处理 ajax
    $("input:radio").click(function () {
        $.ajax({
            type : "get",
            url : "/Admin/category/setIsNav/isNav/" + $(this).val() + "/cid/" + $(this).attr("cid"),
            data : null,
            dataType : "json",
            success:function (result){
                alert(result.info);
                if (!result.status) location.reload();
            }
        });
    });
})

