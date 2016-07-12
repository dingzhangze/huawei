/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
    $("#upload").uploadify({
        swf : "/plugins/uploadify/uploadify.swf",
        buttonText : "点我上传",
        buttonImage : "/plugins/uploadify/ImgBtn.png",
        width : 50,
        height : 23,
        //设置上传要求
        fileSizeLimit : 1*1024*1024,
        fileTypeExts : "*.jpg;*.jpeg;*.png;*.gif",
        //上传参数
        method : "post",
        formData : {
            _token : document.fm._token.value
        },
        uploader : "/Admin/goods/upload",
        onUploadSuccess : function (file, txt, response) {
            eval("var result =" +  txt);//  "var result = {status:1, info:'/uploads/goods/2016071115519527.jpg'}"
            if (!result.status) alert(result.info)
            else {//预览图片
                $("#preview").html("<img src='" + result.info + "' width=150 />");
                //将图片信息 写入控件  随表单一起提交
                $("#im").val(result.info);
            }
        }
    });
})

