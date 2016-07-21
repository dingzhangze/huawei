
$(function () {
    //给分组下拉框绑定onchange事件
    $("select[name=state]").change(function () { 
        var result = confirm("确定要修改用户对应的分组？");
        if (!result) {
            location.reload();
            return;
        }
        //发送AJAX请求服务器端处理
        $.ajax({
            type : "post",
            url : "/Admin/addres/setState",
            data : "state=" + $(this).val() + "&id=" + $(this).attr("id"),
            dataType : "json",
            success : function (result) {
                alert(result.info);
                if (!result.status) location.reload();
            }
        });
    });
});
