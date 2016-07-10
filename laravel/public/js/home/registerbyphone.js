ec.load("ajax", {
	loadType : "lazy"
});
ec.load("ec.box", {
	loadType : "lazy"
});
ec.account = {};

/**
 * 检查帐号是否存在
 * 不需要验证码的校验
 */
var a = ec.account.checkExist = function(g, f, e, b, d, c) {
	ec.Cache.get("checkExist_ajax", function() {
		return new ec.ajax();
	}).post({
				url :getWebUrlHttps()+"isExsitUser?random="+new Date().getTime(),
				data:{"userAccount":g,"accountType":2,"pageToken":localInfo.pageToken},
				timeout : 12000,
				timeoutFunction : c,
				successFunction : function(data) {
					var resulte=data.existAccountFlag;
					if (resulte=="0") {
						f.attr("acceptValue", g);
						b(f);
					} 
					else if (resulte=="1" || resulte=="2") {	
						d();
					} 
					else
					{
						e();
					}
				},
				errorFunction :function(data){
					var resulte=data.existAccountFlag;
					if (resulte=="0") {
						f.attr("acceptValue", g);
						b(f);
					} 
					else if (resulte=="1" || resulte=="2") {
						d();
					} 
					else
					{
						e();
					}
				}
			});
};
	

function checkExistAuto(f)
{
	var e = function(g, x) {
		jQuery(g).show().html(x);
	};
	
	if(f.val().length>15 || f.val().length<5)
	{
//		e("#msg_phone",'<span class="vam icon-error">'+rss.login_js_accountlength+'</span>');
		showError($("#msg_phone"), rss.login_js_accountlength);
		return;
	}
	
	ec.account.checkExist(
			f.val(),
			f,
			function() {
//				e("#msg_phone",'<span class="vam icon-detect">'+rss.checking+'</span>');
				showError($("#msg_phone"), rss.login_js_accountlength);
			},
			function() {
//				e("#msg_phone","<span class='vam icon-ok' style='display:block'>"+rss.usablephone+"</span>");
				showError($("#msg_phone"), rss.unregisteredphone);
				f.removeClass("error");
			},
			function() {
//				e("#msg_phone","<span class='vam icon-error'>"+rss.phoneexist+"<a target='blank' href='"+getpasswordlink+"&userAccount="+f.val()+"&accountType=2&service="+localInfo.service+"&loginUrl="+localInfo.loginUrl+"&reqClientType="+localInfo.reqClientType+"&loginChannel="+localInfo.loginChannel+"&lang="+rss.lang+"&isDialog="+rss.reg_isDialog+"' style='color:#1155CC'>"+rss.findpwd+"<a/></span>");
				showError($("#msg_phone"), rss.phoneexist);
			},
			function() {
//				e("#msg_phone","<span class='vam icon-detect'>"+rss.timeout+"</span>");
				showError($("#msg_phone"), rss.timeout);
				f.removeClass("error");
			});
}


(function(){
	var username= $("#username");
	username.blur(function(){
		var countryCode = $("#countryCode").val()
		if(countryCode.indexOf("+") > -1) {
    		countryCode = countryCode.replace("+", "00");
    	}
		if(checkLengthByCountry(countryCode, username, "#msg_phone", rss.error))  {
			if(this.value.length>0 && valiMobile(this.value))
			{
				checkExistAuto(username);
			}else if(this.value.length == 0){
				showError($("#msg_phone"), rss.emptyphone);
			}else if(!valiMobile(this.value)) {
				showError($("#msg_phone"), rss.error);
			}
		}
	});

})();


function jsGetAge(strBirthday)
{       
	var r = strBirthday.match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/); // 格式检查
    if(r==null) {
  	  return -2;     
    }
	var returnAge;
	var strBirthdayArr=strBirthday.split("-");
	var birthYear = strBirthdayArr[0];
	var birthMonth = strBirthdayArr[1];
	var birthDay = strBirthdayArr[2];
	if(birthYear=="" || birthMonth=="" || birthDay=="") {
		return -2;
	}
	d = new Date();
	var nowYear = d.getFullYear();
	var nowMonth = d.getMonth() + 1;
	var nowDay = d.getDate();
	
	if(nowYear == birthYear)
	{
		returnAge = 0;//同年 则为0岁
	}
	else
	{
		var ageDiff = nowYear - birthYear ; //年之差
		if(ageDiff > 0)
		{
			if(nowMonth == birthMonth){
				var dayDiff = nowDay - birthDay;//日之差
				if(dayDiff < 0)
				{returnAge = ageDiff - 1;}
				else
				{returnAge = ageDiff ;}
			}else{
				var monthDiff = nowMonth - birthMonth;//月之差
				if(monthDiff < 0)
				{returnAge = ageDiff - 1;}
				else
				{returnAge = ageDiff ;}
			}
		}
		else
		{
			returnAge = -1;//返回-1 表示出生日期输入错误 晚于今天}
		}
	}
	return returnAge;//返回周岁年龄
}

function checkBirthday() {
	var birthday = $("#year").val()+"-"+$("#month").val()+"-"+$("#day").val();
	var age = jsGetAge(birthday);
	if(age == -2) {
		showError($("#birthdayError"), rss.chooseDateTip);
		return false;
	}
	if(age == -1) {
		showError($("#birthdayError"), rss.ageLimitTip);
		return false;
	}
	if(age < 13 && localInfo.createChildFlag!="true") {
		showError($("#birthdayError"), rss.ageLimitTip);
		return false;
	} else if(age < 0) {
		showError($("#birthdayError"), rss.age_error);
		return false;
	}
	
	if(getDaysInMonth($("#year").val(), $("#month").val()) > $("#day").val()) {
		showDaydd($("#day").val());
	} else if(getDaysInMonth($("#year").val(), $("#month").val()) < $("#day").val()) {
		showDaydd(getDaysInMonth($("#year").val(), $("#month").val()));
	}
	return true;
}

function submitFun()
{
	if($("#btnSubmit").attr("class").indexOf("sel") == -1) {
		return;
	}
	
	if(!ec.form.validator($("#registerForm"), true))
	{
		return false;
	}
	
	if(currentSiteID=="7") {
		if(!checkBirthday()) {
			return false;
		}
	}
	
	if(!checkNickname()) {
		return false;
	}
	
	if($(".tick.off").length != 0) {
		console.log($(".tick").data("value"));
		ec.account.showWarn();
		return false;
	}
   
	var countryCode = $("#countryCode").val()
	if(countryCode.indexOf("+") > -1) {
		countryCode = countryCode.replace("+", "00");
	}
	if(!checkLengthByCountry(countryCode, $("#username"), "#msg_phone", rss.error)) {
		return false;
	}
	
	var usernameObject =$("#username");
	if(!valiMobile(usernameObject.val())) {
		showError($("#register_msg"), rss.error);
		return false;
	}
	checkExistAuto(usernameObject,"regPost","","","","");
}

function checkNickname() {
	if(currentSiteID != "7") {
		return true;
	}
	
	if(!$("#uniquelyNickname") || !$("#uniquelyNickname").val() || $("#uniquelyNickname").val()=="") {
		return true;
	}

	if ($("#uniquelyNickname").val().toLowerCase() == "null") {
		showError($("#nickError"), rss.error_70005002);
        return false;
    }

    var uniquelyNickname = $.trim($("#uniquelyNickname").val());
    var bool = /^([^\u4e00-\u9fa5])+$/.test(uniquelyNickname);
    if (!bool || uniquelyNickname.length > 20) {
        showError($("#nickError"), rss.nicknameerror);
        return false;
    }
    return true;
}

function getbirthDate() {
	if(currentSiteID!="7") {
		return "";
	}
	var year = $("#year").val();
    var month = $("#month").val();
    var day = $("#day").val();
    if(month.length == 1) {
    	month = "0" + month;
    }
    if(day.length == 1) {
    	day = "0" + day;
    }
    var birth = year+month+day;
    return birth;
}

function getNickName() {
	if(currentSiteID != "7") {
		return "";
	}
	return $("#uniquelyNickname").val().trim();
}

function getGuardianAccount() {
	if(currentSiteID != "7") {
		return "";
	}
	return localInfo.userAccount;
}


/**
 * reg mobile userAccount
 */
function regPostAction()
{
	var authcode=$("#authCode").val(),
	newpassword=$("#password").val(),
	username=$("#username").val();
	var parentPassword = jQuery("#registerForm input[name='parentPassword']");
	var countryCode="";
	if($("#countryCode").val().indexOf("+") >-1) {
		countryCode=$("#countryCode").val().replace("+","00");
	} else {
		countryCode=$("#countryCode").val();
	}
	username=countryCode+username;
	var countryRegion = $("#countryRegion").val();
	
	var countryCode1 = "";
	var siteC = "";
	if(countryRegion.split("-").length > 1) {
		countryCode1 = countryRegion.split("-")[2];
		siteC = countryRegion.split("-")[0] + "-" + countryCode1;
	}
	var agreementContentsStr = localInfo.agreementContentsStr;
	agreementContentsStr = agreementContentsStr.replace(/\$countryCode/g,siteC);
	agreementContentsStr = agreementContentsStr.replace(/\'/g,"\"");
	
	var strParms="registerCloudAccount";
	var parmsData={
			"password":newpassword,
			"userAccount":username,
			"accountType":"2",
			"reqClientType":localInfo.reqClientType,
			"registerChannel":localInfo.loginChannel,
			"authCode":authcode,
			"languageCode":localInfo.lang,
			"countryCode":countryCode1,
			"pageToken":localInfo.pageToken,
			"agrVers": agreementContentsStr,
			"thirdLoginFlag":localInfo.thirdLoginFlag==""?false:localInfo.thirdLoginFlag,
			"uniquelyNickname":getNickName(),
			"birthDate":getbirthDate(),
			"guardianAccount":getGuardianAccount(),
			"guardianPassword":parentPassword.val()
	};
	
	ajaxHandler(strParms,parmsData,function(data){
		 if(data.isSuccess=="1")
		 {
		 	setTimeout(function(){
		 		if(localInfo.createChildFlag=="true") {
				 gotoUrl(localHttps + "/portal/userCenter/setting.html" + localInfo.urlQurey);
			 }else {
				 $("#register_msg").show().html("");
				 // 登录
				 /*** begin*auto login*****/
				 var dataRarmsReg={
						 
						 submit:localInfo.submit,
						 userAccount:username,
						 password:newpassword,
						 reqClientType:localInfo.reqClientType,
						 loginChannel:localInfo.loginChannel,
						 authcode:data.regToken,
						 service:localInfo.service,
						 loginUrl:localInfo.loginUrl,
						 pageToken:localInfo.pageToken
				 };
				 
				 ajaxHandler("remoteLogin",dataRarmsReg,function(data){			
					 if("1"==data.isSuccess)
					 {
						 gotoUrl(data.callbackURL);
						 return false;
					 }
					 else
					 {
						 showErrorByCode(data.errorCode);
					 }
					 
				 },function(data){
					 
				 },false,"JSON");
				 
				 /*** end*auto login*****/
				 
				 return true;
			 }

		 	}, 2000);
		 }
		 else
		 {
//			 $("#register_msg").show().html(rss.phoneregfail);
			 showErrorByCode(data.errorCode);
		 }
	},function(){},true,"json");
}

function checkLengthByCountry(countryCode, username, errorDiv, errorMsg) {
	if(countryCode.indexOf("+") > -1) {
		countryCode = countryCode.replace("+", "00");
	}
	var names = username.val().trim();
	var len = names.length;
	if(countryCode == "001" && len!=10) { //美国
		showError($(errorDiv), errorMsg);
		return false;
	}
	return true;
}

function showErrorByCode(errorCode) {
	if(errorCode=="70001201")
	 {
//		 $("#msg_randomCode").show().html("<span class='vam icon-error'>参数错误</span>");
		showError($("#register_msg"), rss.error_70001201);
	 }
	 else if(errorCode=="70008001")
	 {
		 showError($("#register_msg"), rss.error_70008001);
	 }
	 else if(errorCode=="70002070")
	 {
		 showError($("#register_msg"), rss.error_70002070);
	 }
	 else if(errorCode=="10000001")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>参数错误，参数不符合规则</span>");
		 showError($("#register_msg"), rss.error_10000001);
	 }
	 else if(errorCode=="70001401")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>系统内部错误</span>");
		 showError($("#register_msg"), rss.error_70001401);
	 }
	 else if(errorCode=="70002002")
	 {
//	 	$("#register_msg").show("<span class='vam icon-error'>"+rss.js_existemail+"<a target='blank'  href='"+getpasswordlink+"&userAccount="+username.val()+"&accountType=1&service="+localInfo.service+"&loginUrl="+localInfo.loginUrl+"&reqClientType="+localInfo.reqClientType+"&loginChannel="+localInfo.loginChannel+"&lang="+rss.lang+"&isDialog="+rss.reg_isDialog+"' style='color:#1155CC'>"+rss.findpwd+"<a/></span>");
		 showError($("#register_msg"), rss.error_70002002);
	 }
	 else if(errorCode=="70005003")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>昵称不符合规范</span>");
		 showError($("#register_msg"), rss.error_70005003);
	 }
	 else if(errorCode=="70005002")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>昵称已经存在</span>");
		 showError($("#register_msg"), rss.error_70005002);
	 }
	 else if(errorCode=="70007007")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>儿童不能同意“家长同意书”</span>");
		 showError($("#register_msg"), rss.error_70007007);
	 }
	 else if(errorCode=="70002003")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>监护人帐号或者密码错误</span>");
		 showError($("#register_msg"), rss.error_70002003);
	 }
	 else if(errorCode=="70006006")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>监护人帐号不能为非邮箱地址非手机号帐号</span>");
		 showError($("#register_msg"), rss.error_70006606);
	 }
	 else if(errorCode=="70007003")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>监护人年龄必须大于18岁</span>");
		 showError($("#register_msg"), rss.error_70007003);
	 }
	 else if(errorCode=="70007004")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>监护人没有同意“家长同意书”</span>");
		 showError($("#register_msg"), rss.error_70007004);
	 }
	 else if(errorCode=="70007001")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>监护人监护的儿童超过上限</span>");
		 showError($("#register_msg"), rss.error_70007001);
	 }
	 else if(errorCode=="70002067")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>不在服务区(您所在的地方暂未开通服务)</span>");
		 showError($("#register_msg"), rss.error_70002067);
	 }
	 else if(errorCode=="70002033")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>不能注册@inner.up.huawei后缀的邮箱地址</span>");
		 showError($("#register_msg"), rss.error_70002033);
	 }
	 else if(errorCode=="70002018")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>发送激活邮件失败</span>");
		 showError($("#register_msg"), rss.error_70002018);
	 }
	 else if(errorCode=="70002057")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>密码已连续错误四次</span>");
		 showError($("#register_msg"), rss.error_70002057);
	 }
	 else if(errorCode=="10002073")
	 {
		 showError($("#register_msg"), rss.error_10002073);
	 }
	 else if(errorCode=="70002058")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>密码连续错误过多，帐号被锁定10分钟</span>");
		 showError($("#register_msg"), rss.error_70002058);
	 }
	 else if(errorCode=="70002039")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>验证码不存在、错误或者过期</span>");
		 showError($("#register_msg"), rss.error_70002039);
	 }
	 else if(errorCode=="10000004")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>非法操作</span>");
		 showError($("#register_msg"), rss.error_10000004);
	 }
	 else if(errorCode=="10000002")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>不提供服务</span>");
		 showError($("#register_msg"), rss.error_10000002);
	 } 
	
	 else if(errorCode=="10000505")
	 {
//		 $("#register_msg").show("<span class='vam icon-error'>不提供服务</span>");
		 showError($("#register_msg"), rss.error_10000505);
	 }  
	
	 else {
//		 $("#register_msg").show().html("需要二次登录认证。");
		 showError($("#register_msg"), rss.smsSendDefErr);
	 }
}

(function() {
	var a = ec.account.checkExist = function(g, f, e, b, d, c) {
		if (g == f.attr("acceptValue")) {
			b(f);
			return;
		}
		e();
		var cuntryCode= $("#countryCode").val();
		if(cuntryCode.indexOf("+") > -1) {
			cuntryCode = cuntryCode.replace("+","00");
		}
		var phone= cuntryCode+f.val();
	
		ec.Cache.get("checkExist_ajax", function() {
			return new ec.ajax();
		}).post(
				{
					url :getWebUrlHttps()+"isExsitUser?random="+new Date().getTime(),
					data:{"userAccount":phone,"pageToken":localInfo.pageToken},
					timeout : 12000,
					timeoutFunction : c,
					successFunction : function(data) {
						var resulte=data.existAccountFlag;
						if (resulte=="0") {
							f.attr("acceptValue", g);
							b(f);
						}
						else
						{
							d(f);
						}
					},
					errorFunction :function(data){
						var resulte=data.existAccountFlag;
						if (resulte=="0") {
							f.attr("acceptValue", g);
							b(f);
						}
						else
						{
							d(f);
						}
					}
				});
	};
	ec.account.register = {
		submit : function(b) {
			if (!ec.form.validator(b, false)) {
				return false;
			}
			return true;
		}
	};
})();

ec.account.showAgreement = function() {
	new ec.box($("#agreement_content").val(), {
		boxid : "agreement_box",
		title : rss.agreement,
		showButton : true,
		boxclass : "ol_box agreement-area",
		remember : true,
		height : 350,
		width : 740,
		autoHeight : false
	}).open();
};

/**
 * 提示注册协议必须勾选
 */
ec.account.showWarn = function() {
	var strContentHtml="<div style='margin:20px 50px auto 50px;color:red;font-weight:bold;'>"+rss.regprotocol+"</div>";
	new ec.box(strContentHtml, {
		boxid : "agreement_box1",
		title : "",
		showButton : false,
		boxclass : "ol_box agreement-area",
		remember : true,
		height : 100,
		width : 350,
		autoHeight : false
	}).open();
};

ec.account.authCodeDialog = function() {
	new ec.box($("#authCodeDialog_content").val(), {
		boxid : "authCodeDialog_box",
		title : rss.getsmscode,
		showButton : false,
		boxclass : "ol_box agreement-area",
		remember : true,
		height : 120,
		width : 400,
		autoHeight : false
	}).open();
};

ec.ready(function() {
			var e = function(g, f) {
				jQuery(g).show().html(f);
			};
			var d = jQuery("#registerForm input[name='formBean.username']");			
			var c = jQuery("#registerForm input[name='formBean.password']");
			var a = jQuery("#registerForm input[name='checkPassword']");
			var b = jQuery("#registerForm input[name='formBean.authCode']");
			var pp = jQuery("#registerForm input[name='parentPassword']");
			
			var btnSubmit = $("#btnSubmit");
			
			var countryCode = $("#countryCode").val()
			if(countryCode.indexOf("+") > -1) {
	    		countryCode = countryCode.replace("+", "00");
	    	}
	    	if(countryCode == "001") { //美国
	    		ec.form.validator.bind(d, {
					type : [ "require", "length" ],
					min : 10,
					max : 10,
					trim:true,
					validOnChange : true,
					msg_ct : "#msg_phone",
					msg : {
						require : rss.emptyphone,
						"default" :rss.error
					}
				});
	    	} else {
	    		ec.form.validator.bind(d, {
	    			type : [ "require", "length" ],
	    			min : 5,
	    			max : 15,
	    			trim:true,
	    			validOnChange : true,
	    			msg_ct : "#msg_phone",
	    			msg : {
	    				require : rss.emptyphone,
	    				"default" :rss.error
	    			}
	    		});
	    	}
			ec.form.validator.bind(c, {
				type : [ "require", "length","password","pwdformat" ],
				trim : false,
				validOnChange : true,
				min : 8,
				max : 32,
				msg_ct : "#msg_password",
				msg : {
					require : rss.inputpwd,
					length : rss.modifyUserPwd_input_8_32_chars,
					password : rss.modifyUserPwd_input_8_32_complax_chars_desc,
					pwdformat : rss.common_js_pwd_account_same_reverse
				}
			});
			ec.form.validator.bind(a, {
				type : [ "require", "eq" ],
				trim : false,
				validOnChange : true,
				compareTo : c,
				msg_ct : "#msg_checkPassword",
				msg : {
					require :rss.confirmpwd,
					eq : rss.pwdnotsame
				}
			});
			
			ec.form.validator.bind(b, {
				type : [ "require", "length", "int"],
				trim:true,
				validOnChange : true,
				max : 8,
				min : 4,
				msg_ct : "#msg_phoneRandomCode",
				msg :{
					"require" : rss.inputsmscode,
					"int" : rss.wrongformatsmscode,
					"default" : rss.wrongformatsmscode
				},
				successFunction : function(f) {
//					e("#msg_phoneRandomCode","<span class='vam icon-ok'>&nbsp;</span>");
				}
			});
			
			ec.form.validator.register("pwdformat", function(b_val, a) {
				if (a.allowEmpty && ec.util.isEmpty(b_val)) {
					return true;
				}
				var username=$("#username").val();
				usernameReverse=username.split("").reverse().join("");
				
				if(b_val.toLowerCase()==username.toLowerCase() || b_val.toLowerCase()==usernameReverse.toLowerCase())
				{
					return false;
				}
				else
				{
					return true;
				}
			});
			ec.form.input.label.defaults.ifRight="10px";
            ec.form.input.label($('#uniquelyNickname'), rss.notnull);
	
            if(currentSiteID == "7") {
            	ec.form.validator.bind($("#uniquelyNickname"), {
    				type : ["length","nickname"],
    				trim:false,
    				validOnChange : true,
    				min : 0,
    				max : 20,
    				msg_ct : "#nickError",
    				msg : {
    					length : rss.nicknameLengthLimit,
    					nickname:rss.nicknameerror
    				}
    			});
            }/*else if(currentSiteID != "1"){
            	ec.form.validator.bind($("#uniquelyNickname"), {
    				type : [ "require", "length","nickname"],
    				trim:false,
    				validOnChange : true,
    				min : 1,
    				max : 20,
    				msg_ct : "#nickError",
    				msg : {
    					require : rss.nicknameMissingTip,
    					length : rss.nicknameLengthLimit,
    					nickname:rss.nicknameerror
    				}
    			});
            }*/
			
			ec.ui.hover(d).hover(b).hover(c).hover(a).hover(pp);
			ec.form.input.label(d,rss.inputnumber).label(c, rss.pwdlength).label(a,rss.pwdlength).label(b, rss.codelength);
//			d.focus();
			
			if(currentSiteID == "7") {
				ec.form.validator.bind(pp, {
					type : [ "require", "length","password","pwdformat"],
					trim:false,
					validOnChange : true,
					min : 8,
					max : 32,
					msg_ct : "#msg_checkPassword_parent",
					msg : {
						require : rss.inputpwd,
						length : rss.modifyUserPwd_input_8_32_chars,
						password : rss.modifyUserPwd_input_8_32_complax_chars_desc,
						pwdformat : rss.common_js_pwd_account_same_reverse
					}
				});
				ec.form.input.label(pp,rss.modifyUserPwd_input_8_32_chars);
			}
			
			btnSubmit.bind("click",submitFun);
			c.bind("keyup",function(){onPwdKeyUp(c[0]);});
		});
	
		ec.form.validator.register("pwdComplax", function(b_val, a) {
			if (a.allowEmpty && ec.util.isEmpty(b_val)) {
				return true;
			}
			
			return isPWDComplex(b_val);
		});
		
	function checkExistAuto(f,flagPost,smsReqType,session_code_key,reqClientType,lang)
	{
		var e = function(g, x) {
			jQuery(g).show().html(x);
		};
		
		ec.account.checkExist(f.val(),f,
				function() {
					showWarning($("#msg_phone"), rss.checking);
				},
				function() {
					showSuccess($("#msg_phone"), rss.unregisteredphone);
					f.removeClass("error");
					if(flagPost=="regPost")
					{
						regPostAction();
					}
					if(flagPost=="getAuthCodePost")
					{
						var strUserAccount="";
						if($("#countryCode").val().indexOf("+") >-1) {
							strUserAccount=$("#countryCode").val().replace("+","00")+f.val();
						} else {
							strUserAccount=$("#countryCode").val()+f.val();
						}
						sendSMS(strUserAccount,reqClientType,lang);
					}
				},
				function() {
//					e("#msg_phone","<span class='vam icon-error'>"+rss.phoneexist+"<a target='blank' href='"+localInfo.getpasswordlink+"&userAccount="+f.val()+"&accountType="+localInfo.accountType+"&service="+localInfo.service+"&loginUrl="+localInfo.loginUrl+"&reqClientType="+localInfo.reqClientType+"&loginChannel="+localInfo.loginChannel+"&lang="+localInfo.lang+"&isDialog="+rss.reg_isDialog+"' style='color:#1155CC'>"+rss.findpwd+"<a/></span>");
					showError($("#msg_phone"), rss.phoneexist);
				},
				function() {
//					e("#msg_phone","<span class='vam icon-detect'>"+rss.timeout+"</span>");
					showError($("#msg_phone"), rss.timeout);
					f.removeClass("error");
		  });
	}	

	function sendSMS(phoneNumber,reqClientType,lang){
		var getCodeButton=$("#getValiCode");
		
		var strParms="getSMSAuthCode";
		var dataParms={
				"userAccount":phoneNumber,
				"smsReqType":"4",
				"reqClientType":reqClientType,
				"pageToken":localInfo.pageToken,
				"accountType":2,
				"siteID":localInfo.currentSiteID,
				"languageCode":localInfo.lang
		};
		
		ajaxHandler(strParms,dataParms,function(data) {
			  if(data.isSuccess=="1")
				{
				  	showSuccess($("#msg_getPhoneRandomCode"), rss.smsHasSendTo.format(getExpressPhone(dataParms.userAccount)));
					getCodeButton.attr("IntervalTime",60);
					getCodeButton.attr("disabled",true);
					jsInnerTimeout();
				}
			  else
			    {
				  switch(data.errorCode) {
				  	case '10000001':
	 				case '70001201': {
//	 					$("#msg_phoneRandomCode").html("<span class='vam icon-error'>参数错误</span>");
	 					showError($("#msg_getPhoneRandomCode"), rss.error_70001201);
	 					break;
	 				}
	 				case '70001401': {
//	 					$("#msg_phoneRandomCode").html("<span class='vam icon-error'>系统内部错误</span>");
	 					showError($("#msg_getPhoneRandomCode"), rss.error_70001401);
	 					break;
	 				}
	 				case '70002002': {
//	 					$("#msg_phoneRandomCode").html("<span class='vam icon-error'>用户不存在</span>");
	 					showError($("#msg_getPhoneRandomCode"), rss.error_70002002);
	 					break;
	 				}
	 				case '70002001': {
//	 					$("#msg_phoneRandomCode").html("<span class='vam icon-error'>用户已存在</span>");
	 					showError($("#msg_getPhoneRandomCode"), rss.error_70002001);
	 					break;
	 				}
	 				case '70002028': {
//	 					$("#msg_phoneRandomCode").html("<span class='vam icon-error'>用户没有传入的手机号码</span>");
	 					showError($("#msg_getPhoneRandomCode"), rss.error_70002028);
	 					break;
	 				}
	 				case '70002046': {
//	 					$("#msg_phoneRandomCode").html("<span class='vam icon-error'>手机号已经激活</span>");
	 					showError($("#msg_getPhoneRandomCode"), rss.error_70002046);
	 					break;
	 				}
	 				case '70002030': {
//	 					$("#msg_phoneRandomCode").html("<span class='vam icon-error'>短信验证码发送失败</span>");
	 					showError($("#msg_getPhoneRandomCode"), rss.error_70002030);
	 					break;
	 				}
	 				case '70001102': {
//						$("#msg_phoneRandomCode").html("<span class='vam icon-error'>获取验证码短信次数较为频繁， 1分钟后可重试。</span>");
	 					showError($("#msg_getPhoneRandomCode"), rss.error_70001102);
	 					break;
	 				}
	 				case '70001104': {
//						$("#msg_phoneRandomCode").html("<span class='vam icon-error'>获取验证码短信次数过于频繁， 24小时后可重试</span>");
	 					showError($("#msg_getPhoneRandomCode"), rss.error_70001104);
	 					break;
	 				}
	 				case '10000004': {
//	 					$("#msg_phoneRandomCode").html("<span class='vam icon-error'>非法操作</span>");
	 					showError($("#msg_getPhoneRandomCode"), rss.error_10000004);
	 					break;
	 				}
	 				case '10000002': {
//	 					$("#msg_phoneRandomCode").html("<span class='vam icon-error'>不提供服务</span>");
	 					showError($("#msg_getPhoneRandomCode"), rss.error_70001201);
	 					break;
	 				}
	 				default: {
//	 					$("#msg_phoneRandomCode").html("<span class='vam icon-error'>获取验证码错误</span>");
	 					showError($("#msg_getPhoneRandomCode"), rss.error_70001201);
	 					break;
	 				}
				}
		    }	
		  },function(){},true,"JSON");
	}
	
  
    $("#selectCountryImg").click(function(){
            openCountryCodeDialog(countryRegions);
            
        });
	function getdefaultCountryByCurrentSiteID() {
		var defaultCountry = "";
		switch (currentSiteID) {
		case "9":
			defaultCountry = currentSiteID+"-" + "en-us";
			break;
		case "5":
			defaultCountry = currentSiteID+"-" + "zh-hk";
			break;
		case "8":
			defaultCountry = currentSiteID+"-" + "ru-ru";
			break;
		case "7":
			defaultCountry = currentSiteID+"-" + "de-de";
			break;
		case "6":
			defaultCountry = currentSiteID+"-" + "pt-br";
			break;
		case "1":
			defaultCountry = currentSiteID+"-" + "zh-cn";
			break;
		case "3":
			defaultCountry = currentSiteID+"-" + "en-in";
			break;
		}
		return defaultCountry;
	}
	
    var countryRegions = [];
    /**
     * 获取国家列表
     */
    function getCountryRegion(){
        var dataParms={
                "pageToken":localInfo.pageToken
        };
        var strParms="getCountryRegion";
        ajaxHandler(strParms,dataParms,function(data) {
              if(data.isSuccess=="1")
                {
                  countryRegions = data.countryRegions;
                }
          },function(){},false,"JSON");
    }
    
        function displayCountry() {
        var inputCountryCode = localInfo.countryCode;
        var ipCountryCode = getIPCountry();
        var defaultCountry = getdefaultCountryByCurrentSiteID();
        var defaultCountryCode = defaultCountry.split("-")[2];
        var country = "";
        if (countryRegions.length>0) {
            $.each(countryRegions,function(n,value) {                 
                  if (inputCountryCode.toLowerCase() == value.localeID.split("-")[1]) {
                      $("#selectedCountry").text(value.localRegion); 
                      country = localInfo.currentSiteID+"-"+value.localeID;
                      return false;
                  } else if (ipCountryCode.toLowerCase() == value.localeID.split("-")[1]) {
                      $("#selectedCountry").text(value.localRegion); 
                      country = localInfo.currentSiteID+"-"+value.localeID;
                      return false;
                  } else if (defaultCountryCode.toLowerCase() == value.localeID.split("-")[1]) { 
                      $("#selectedCountry").text(value.localRegion); 
                      country = defaultCountry;
                      return false;
                  }
              });

        }
        
        if (countryRegions.length <= 1) {
            $("#selectCountryImg").parent().remove();
        }
        
        $("#countryRegion").val(country);
    }
  function getIPCountry() {
        var ipcountry="";
        var dataParms = {
            "pageToken" : localInfo.pageToken,
            "reqClientType" : localInfo.reqClientType
        };
        var strParms = "getIPCountry";
        ajaxHandler(strParms, dataParms, function(data) {
            if (data.isSuccess == "1") {
                if (data.countryCode != "") { //
                    ipcountry = localInfo.currentSiteID+"-"+data.countryCode;
                }   
            }
        }, function() {
        }, false, "JSON");
        return ipcountry;
    }

function openCountryCodeDialog(countryRegions) {
        var htmlStr = '<div class="mask"></div>';
        htmlStr += '<div class="countryDialog" >';
        htmlStr += '<div class="dcent2">';
        $.each(countryRegions, function(index, value) {
            htmlStr += '<div >';    
          /*
            if ($("#countryRegion").val() == currentSiteID+"-"+value.localeID) {      
                      htmlStr += '<div class="item2 selectedBackground">';
                      } else {
                        htmlStr += '<div class="item2">';  
                      }*/
          
            htmlStr += '<div class="item2">';  
            var countryDisplay = value.localRegion;
            htmlStr += '<span class="split cc">' + countryDisplay + '</span><input type="hidden" value="' + currentSiteID+"-"+value.localeID + '">';
            if ($("#countryRegion").val() == currentSiteID+"-"+value.localeID) {
                htmlStr += '<b data-value="false" class="selected"></b>';
                $(this).css({
                "background-color":"#ebebeb"
            });
            } else {
                htmlStr += '<b data-value="false" ></b>';
            }
            
            htmlStr += '</div>';
            htmlStr += '</div>';

        });
        htmlStr += '</div>';
        htmlStr += '</div>';
        $("#selectCountryCodeDiv").html(htmlStr);
        
        $(".code-node:last").removeClass("line");
        
        $(window).resize(function(){
        	$(".countryDialog").css({
        		"top":((window.innerHeight/2-$(".countryDialog").outerHeight()/2)>=0?(window.innerHeight/2-$(".countryDialog").outerHeight()/2):0)+"px",
                "left":((window.innerWidth/2-$(".countryDialog").outerWidth()/2)>=0?(window.innerWidth/2-$(".countryDialog").outerWidth()/2):0)+"px",
                "position":"fixed",
                "margin":"0px"
        	});
        });
    
        $(".countryDialog").css({
            "top":((window.innerHeight/2-$(".countryDialog").outerHeight()/2)>=0?(window.innerHeight/2-$(".countryDialog").outerHeight()/2):0)+"px",
            "left":((window.innerWidth/2-$(".countryDialog").outerWidth()/2)>=0?(window.innerWidth/2-$(".countryDialog").outerWidth()/2):0)+"px",
            "position":"fixed",
            "margin":"0px"
        });

        $(".item2").on("click", function(e) {
            $(".countryDialog").find(".selected").removeClass('selected');
            $(this).find("b").addClass('selected');
            var self = $(this);
            setTimeout(function() {
                $("#selectedCountry").text(self.parent().find(".cc").text().trim());
                var country = self.parent().find("input").val();
                $("#selectCountryCodeDiv").html("");
                getAgreementContent(country.split("-")[1]);
                 $("#countryRegion").val(country);
            }, 200);

        });
        
        var $item = $(".item2");
        $item.on("mouseover",function() {
            $(this).addClass("selectedBackground");
        });
        $item.on("mouseout",function() {
            $(this).removeClass("selectedBackground");
        });
    }
	
	function getAgreementContent(country) {
		var agrContentArr =[];
		var dataParms = {
			"pageToken" : localInfo.pageToken,
			"reqClientType" : localInfo.reqClientType,
			"lang" : localInfo.lang,
			"agrIDs" : "[0,2]",
			"countryCode":country
		};
		var strParms = "getAgreementContent";
		ajaxHandler(strParms, dataParms, function(data) {
			if (data.isSuccess == "1") {
				if (data.agreementContents) {
	               $.each(data.agreementContents, function(index,agreement) {
	                 agrContentArr.push(agreement);
	               });
		        }
				var htmlStr = "";
				for (var i = 0; i < agrContentArr.length; i++) {
					var agreement = agrContentArr[i];
					htmlStr += '<div class="node"><div class="node-title">'+agreement.agrTitle+'<a class="reg-more r" target="_blank" href="'+agreement.agrHref+'">'+rss.more_details+'> </a></div>';
					htmlStr += '<div class="node-intro">'+agreement.agrBrief+'</div>';
					htmlStr += '<div class="agree">';
					htmlStr += '<b class="tick off" ver="'+agreement.agrVer+'"></b>';
					htmlStr += rss.agree;
					htmlStr += '</div></div>';
				}
				$("#agreement").empty();
				$("#agreement").html(htmlStr);
				
				$(".tick").on("click", function() {
					$(this).data("value") == true ? $(this).trigger("turnoff") : $(this).trigger("turnon");
				}).on("turnon", function() {
					$(this).removeClass("off");
					$(this).data("value", true);
					$(this).trigger("change", [true]);
					if($(".tick.off").length == 0) {
						$("#btnSubmit").addClass("sel");
					}
				}).on("turnoff",function() {
					$(this).addClass("off");
					$(this).data("value", false);
					$(this).trigger("change", [false]);
					$("#btnSubmit").removeClass("sel");
				});
			}
		}, function() {
		}, true, "JSON");
	}
	
	function getMobileCode(smsReqType,session_code_key,reqClientType,lang)
	{
		var mobilephone= $("#username").val();
		if(mobilephone=="")
		{
//			$("#msg_phone").html("<span class='vam icon-error'>"+rss.phoneemptyfail+"</span>");
			showError($("#msg_phone"), rss.phoneemptyfail);
			return;
		}
		
		if(!valiMobile(mobilephone))
		{
//			$("#msg_phone").html("<span class='vam icon-error'>"+rss.error+"</span>");
			showError($("#msg_phone"), rss.error);
			return;
		}
		
		var countryCode = $("#countryCode").val()
		if(countryCode.indexOf("+") > -1) {
			countryCode = countryCode.replace("+", "00");
		}
		if(!checkLengthByCountry(countryCode, $("#username"), "#msg_phone", rss.error)) {
			return;
		}
		
		$("#msg_phone").html("");
		$("#msg_phoneRandomCode").html("");
		$("#register_msg").html("");
		
		var useraccountcheck=$("#username");
		checkExistAuto(useraccountcheck,"getAuthCodePost",smsReqType,session_code_key,reqClientType,lang);
	}
	
	function jsInnerTimeout()
	{
		var codeObj=$("#getValiCode");
		
		var intAs=parseInt(codeObj.attr("IntervalTime"));

		intAs--;
		codeObj.attr("disabled",true);
		if(intAs<=-1)
		{
			codeObj.attr("disabled",false);
			codeObj.val(rss.getsmscode);
			return true;
		}
		
		codeObj.val(intAs+'s');
		codeObj.attr("IntervalTime",intAs);
		
		setTimeout("jsInnerTimeout()",1000);
	}
	

	function changePhoneCode (){
		var userAcount=$("#username").val();
		var lang_select= jQuery("#input_languageCode").find("option:selected").val();
		var msg_phone_obj=$("#msg_phone");
		var flagValiResult=true;
		
		if(lang_select == "+86")
		{
			if (userAcount.length < 11) {
				flagValiResult= false;
			}
			else
			{
				flagValiResult= /^(1[34578])[0-9]{9}$|(^(\+|00)852[9865])[0-9]{7}$/.test(userAcount);
			}
		}
		else
		{
			flagValiResult= /^[0-9]{5,15}$/.test(userAcount);
		}
		
		if(userAcount=="")
		{
			msg_phone_obj.html("");
			return false;
		}
		
		if(!flagValiResult)
		{
//			msg_phone_obj.html("<span class='vam icon-error'>"+rss.error+"</span>");
			showError(msg_phone_obj, rss.error);
			return false;
		}
		
		userAcount=lang_select.replace("+","00")+userAcount;
		var strParms="isExsitUser";
		var parmsData={
				"userAccount":userAcount,
				"pageToken":localInfo.pageToken
		};
		
		ajaxHandler(strParms,parmsData,function(data){
			 if(data.isSuccess=="1" && data.existAccountFlag=="0")
			 {
//				 msg_phone_obj.html("<span class='vam icon-ok'>"+rss.usablephone+"</span>");
				 showSuccess(msg_phone_obj, rss.unregisteredphone);
			 }
			 else
			 {
//				 msg_phone_obj.html("<span class='vam icon-error'>"+rss.phoneexist+"<a target='blank' href='"+localInfo.getpasswordlink+"&userAccount="+userAcount+"&accountType="+localInfo.accountType+"&service="+localInfo.service+"&loginUrl="+localInfo.loginUrl+"&reqClientType="+localInfo.reqClientType+"&loginChannel="+localInfo.loginChannel+"&lang="+localInfo.lang+"&isDialog="+rss.reg_isDialog+"' style='color:#1155CC'>"+rss.findpwd+"<a/></span>");
				 showError(msg_phone_obj, rss.phoneexist);
			 }
		},function(){},true,"json");
		
		
		
	}
	
	function valiMobile(b)
	{
		if(b.indexOf(" ")>-1) {
			return false;
		}
		b=$.trim(b);
		if(b.length==0)
		{
			return true;
		}
		var lang_select= jQuery("#countryCode").val();
		
		if(lang_select == "0086" || lang_select == "+86")
		{
			if (b.length < 11) {
				return false;
			}
			return /^(1[34578])[0-9]{9}$|(^(\+|00)852[9865])[0-9]{7}$/.test(b);
		}
		else
		{
			return /^[0-9]{5,15}$/.test(b) ;
		}
	}
	