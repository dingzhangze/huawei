/*
 * Copyright(c)2016 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  liutian<1538731090@qq.com> liutian_jiayi
 * @Create on 2016-6-22 17:27:18
 * @Version 1.0
 */
//$(function () {
//	//给登陆按钮绑定一个鼠标经过事件 事件处理程序中绑定一个wbox弹出层
//	$("#btn").mouseover(function () {
//		//首先获取弹出层内容 即表单验证的结果
//		var uname = $("input[name=uname]").val();
//		var password = $("input[name=password]").val();
//		var code = $("input[name=code]").val();
//		var message = "";
//		if (uname.match(/^\s*$/)) {
//			message += "<li>账号未填写</li>";
//		}
//		if (password.length < 6 || password.length > 15) {
//			message += "<li>密码长度应为6-15位</li>";
//		}
//		if (code.length != 5) {
//			message += "<li>验证法输入不合法</li>";
//		}
//		if (message != "") {//验证有错 绑定弹出层 输出错误
//			//绑定弹出层 点击后显示
//			$(this).wBox({
//				title: "错误提示",
//				html: "<ul style='width:220px;height:60px;font:13px/24px 微软雅黑;color:red'>" + message + "<ul>",
//				opacity: 0.5,
//			});
//		} else {//绑定点击事件提交
//			$(this).click(function () {
//				document.login.submit();
//			});
//		}
//	});
//})
