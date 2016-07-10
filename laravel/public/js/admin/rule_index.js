/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
    $("a.editRule").mouseover(function () {
//        alert($(this).attr("rule"));
        $(this).wBox({
            title : "设置权限",
            target : "/Admin/rule/show/" + $(this).attr("rule"),
            requestType : "iframe",
            iframeWH : {
                width : 300,
                height: 150
            },
            opacity : 0
        });
    });
})