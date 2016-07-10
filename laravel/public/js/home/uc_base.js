/**
 * Last Update:2015-10-30
 */

var errorInfo = {};

function gid(id)
{
	return document.getElementById(id);
}

function showError(obj, msg, direction, leftPix, rightPix)
{
	//obj.html("<div class='relative'><div class='pop'><b class='uptick'></b><div class='poptips cas_error'><table class='popMsg'><tr><td><b class='poptips-no'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	if(direction && direction == "left" && leftPix && rightPix) {
		obj.html("<div class='relative'><div class='pop'><b class='uptick_left'></b><div class='poptips_left' style='margin-left:" + leftPix + "px;margin-right:" + rightPix + "px;'><table class='popMsg cas_error'><tr><td><b class='poptips-no'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else if(direction && direction == "right" && leftPix && rightPix) {
		obj.html("<div class='relative'><div class='pop'><b class='uptick'></b><div class='poptips' style='margin-left:" + leftPix + "px;margin-right:" + rightPix + "px;'><table class='popMsg cas_error'><tr><td><b class='poptips-no'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else if(direction && direction == "left" && leftPix){
		obj.html("<div class='relative'><div class='pop'><b class='uptick_left'></b><div class='poptips_left' style='margin-left:" + leftPix + "px;'><table class='popMsg cas_error'><tr><td><b class='poptips-no'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else if(direction && direction == "right" && leftPix){
		obj.html("<div class='relative'><div class='pop'><b class='uptick'></b><div class='poptips' style='margin-left:" + leftPix + "px;'><table class='popMsg cas_error'><tr><td><b class='poptips-no'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else if(direction && direction == "left") {
		obj.html("<div class='relative'><div class='pop'><b class='uptick_left'></b><div class='poptips_left'><table class='popMsg cas_error'><tr><td><b class='poptips-no'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else {
		obj.html("<div class='relative'><div class='pop'><b class='uptick'></b><div class='poptips'><table class='popMsg cas_error'><tr><td><b class='poptips-no'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}
	autoHide(obj);
}

function showSuccess(obj, msg, direction, leftPix, rightPix) {
	//obj.html("<div class='relative'><div class='pop'><b class='uptick'></b><div class='poptips cas_ok'><table class='popMsg'><tr><td><b class='poptips-yes'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	if(direction && direction == "left" && leftPix && rightPix) {
		obj.html("<div class='relative'><div class='pop'><b class='uptick_left'></b><div class='poptips_left' style='margin-left:" + leftPix + "px;margin-right:" + rightPix + "px;'><table class='popMsg cas_ok'><tr><td><b class='poptips-yes'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else if(direction && direction == "right" && leftPix && rightPix) {
		obj.html("<div class='relative'><div class='pop'><b class='uptick'></b><div class='poptips' style='margin-left:" + leftPix + "px;margin-right:" + rightPix + "px;'><table class='popMsg cas_ok'><tr><td><b class='poptips-yes'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else if(direction && direction == "left" && leftPix){
		obj.html("<div class='relative'><div class='pop'><b class='uptick_left'></b><div class='poptips_left' style='margin-left:" + leftPix + "px;'><table class='popMsg cas_ok'><tr><td><b class='poptips-yes'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else if(direction && direction == "right" && leftPix){
		obj.html("<div class='relative'><div class='pop'><b class='uptick'></b><div class='poptips' style='margin-left:" + leftPix + "px;'><table class='popMsg cas_ok'><tr><td><b class='poptips-yes'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else if(direction && direction == "left") {
		obj.html("<div class='relative'><div class='pop'><b class='uptick_left'></b><div class='poptips_left'><table class='popMsg cas_ok'><tr><td><b class='poptips-yes'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else {
		obj.html("<div class='relative'><div class='pop'><b class='uptick'></b><div class='poptips'><table class='popMsg cas_ok'><tr><td><b class='poptips-yes'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}
	autoHide(obj);
}

function showWarning(obj, msg, direction, leftPix, rightPix) {
	//obj.html("<div class='relative'><div class='pop'><b class='uptick'></b><div class='poptips cas_warn'><table class='popMsg'><tr><td><b class='poptips-warn'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	if(direction && direction == "left" && leftPix && rightPix) {
		obj.html("<div class='relative'><div class='pop'><b class='uptick_left'></b><div class='poptips_left' style='margin-left:" + leftPix + "px;margin-right:" + rightPix + "px;'><table class='popMsg cas_warn'><tr><td><b class='poptips-warn'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else if(direction && direction == "right" && leftPix && rightPix) {
		obj.html("<div class='relative'><div class='pop'><b class='uptick'></b><div class='poptips' style='margin-left:" + leftPix + "px;margin-right:" + rightPix + "px;'><table class='popMsg cas_warn'><tr><td><b class='poptips-warn'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else if(direction && direction == "left" && leftPix){
		obj.html("<div class='relative'><div class='pop'><b class='uptick_left'></b><div class='poptips_left' style='margin-left:" + leftPix + "px;'><table class='popMsg cas_warn'><tr><td><b class='poptips-warn'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else if(direction && direction == "right" && leftPix){
		obj.html("<div class='relative'><div class='pop'><b class='uptick'></b><div class='poptips' style='margin-left:" + leftPix + "px;'><table class='popMsg cas_warn'><tr><td><b class='poptips-warn'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else if(direction && direction == "left") {
		obj.html("<div class='relative'><div class='pop'><b class='uptick_left'></b><div class='poptips_left'><table class='popMsg cas_warn'><tr><td><b class='poptips-warn'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}else {
		obj.html("<div class='relative'><div class='pop'><b class='uptick'></b><div class='poptips'><table class='popMsg cas_warn'><tr><td><b class='poptips-warn'></b></td><td>"+msg+"</td></tr></table></div></div></div>");
	}
	autoHide(obj);
}

function autoHide(obj) {
	var attr = obj.attr("tiptimer");
	if (!attr) {
		attr = "tiptimer" + new Date().getTime();
		obj.attr("tiptimer", attr);
	}
	
	if (errorInfo[attr]) {
		window.clearTimeout(errorInfo[attr]);
	}
	
	errorInfo[attr] = window.setTimeout(function(){
		errorInfo[attr] = null;
		obj.html("");
	},2000);
}

$.extend(ec.form.validator.defaults ,{
	errorClass : "cas_error",
	autoFocus : false,
	errorFunction:function(obj , options){
		var css = "cas_error",
			msg = options.msg[options.type] || options.msg["default"];
		switch(options.type){
			case "require":
				css = "cas_warn";
				break;
		}
		
//		$(options.msg_ct).html("<div class='relative'><div class='pop'><b class='uptick'></b><p class='poptips "+css+"'>"+msg+"</p></div></div>");
		showWarning($(options.msg_ct), msg);
		if(options.autoFocus)obj.focus();
	
		window.setTimeout(function(){
				$(options.msg_ct).html("");
	
		},2000);
	},
	successFunction:function(obj , options){
		/*$(options.msg_ct).html("<div class='relative'><div class='pop'><b class='uptick'></b><p class='poptips cas_ok'>√</p></div></div>");
		
		window.setTimeout(function(){
			$(options.msg_ct).html("");
		},2000);
		return false;*/
	}
});
