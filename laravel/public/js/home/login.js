ec.ready(function() {
    $(".loginmask").hide();
	checkCookie("isRead");
    ec.time = getValue(document.location, 'delayrange');
    var showMsg = function(msg) {
        $("#login_msg").show().html(msg);
    };

    var loginUserName = getCookie('rememberAccount');
    if (loginUserName) {
        loginUserName = loginUserName.replace(/\"/g, "");
        $("#login_userName").val(loginUserName);
        $("#remember_name").attr("checked",true);
    }

    var userName = $("#login_userName"), password = $("#login_password"), userName_Hidden = $("#login_userName_Hidden"), s = function(obj) {
        $("#login_msg").hide();
        obj.removeClass("error");
    };

    // 绑定验证
    ec.form.validator.bind(userName, {
        type : ["require", "length"],
        min : 5,
        max : 50,
        validOnChange : true,
        errorFunction : function(obj, options) {
            switch (options.type) {
            case "require":
            	showWarning($("#msg_username"), rss.login_js_inputaccount);
                break;
            case "emailormobile":
            	showWarning($("#msg_username"), rss.login_js_accountlimit);
                break;
            case "length":
            	showWarning($("#msg_username"), rss.login_js_accountlength);
                break;
            };

            obj.addClass("error").focus();
        },
        successFunction : s
    });

    ec.form.validator.bind(userName_Hidden, {
        type : ["require", "length"],
        min : 5,
        max : 50,
        validOnChange : true,
        errorFunction : function(obj, options) {
            switch (options.type) {
            case "require":
                showMsg(rss.login_js_inputaccount);
                break;
            case "emailormobile":
                showMsg(rss.login_js_accountlimit);
                break;
            case "length":
                showMsg(rss.login_js_accountlength);
                break;
            };

            obj.addClass("error").focus();
        },
        successFunction : s
    });

    ec.form.validator.bind(password, {
        type : ["require"/*, "length"*/],
        trim : false,
        validOnChange : true,
        min : 8,
        max : 32,
        errorFunction : function(obj, options) {
            switch(options.type) {
            case "require":
            	showWarning($("#msg_password"), rss.common_js_inputpwd);
                break;
//            case "length":
//            	showWarning($("#msg_password"), rss.error_10000001_2);
//            	break;
            }

            obj.addClass("error");
        },
        successFunction : s
    });

    // 显示验证码
    var randomCode = $("#randomCode");
    ec.form.validator.bind(randomCode, {
        type : ["require", "chinaLang"],
        validOnChange : true,
        max : 4,
        min : 4,
        errorFunction : function(obj, options) {
            switch(options.type) {
            case "require":
            	showWarning($("#msg_randowCode"), rss.common_js_inputcode);
                break;
            case "chinaLang":
            	showWarning($("#msg_randowCode"), rss.login_js_codeerror);
                break;
            }
            obj.addClass("error");
        },
        successFunction : function() {
            $("#login_msg").hide();
        }
    });

    userName.keyup(function() {
        var that = $(this);
        if (that.val() != "" && /^[\s\S]*[\u4e00-\u9fa5]+[\s\S]*$/.test(that.val())) {
            that.val("");
        }
    });

    $(".cookie-pro").bind("click",function(){
        window.open (localInfo.cookiePrivacyPolicyUrl,"_blank");
    });
    
    $("#randomCode").bind("keyup", function(evt) {

        if (evt.which == 13) {
            $("#btnLogin").click();
            return;
        }

        var randomCode = $(this);
        var randomCodeImg = $('#randomCodeImg');
        var randomCodeError = $("#randomCodeError");
        if ( typeof (randomCode[0]) != "undefined" && randomCode.val().length == 4) {
            var thisValue = randomCode.val();
            var dataParms = {
                randomCode : thisValue,
                session_code_key : "login_session_ramdom_code_key",
                pageToken : localInfo.pageToken
            };

            ajaxHandler("authCodeValidate", dataParms, function(data) {
                if ("1" == data.isSuccess) {
//                    randomCodeError.removeClass("icon-error");
//                    randomCodeError.addClass("icon-ok");
//                    randomCodeError.css("display", "block");
                	showSuccess($("#msg_randowCode"), rss.autoCodeSuccess);
                    $("#btnLogin").focus();
                } else {
                    chgRandomCode(randomCodeImg[0], localInfo.webssoLoginSessionCode);
//                    randomCodeError.removeClass("icon-ok");
//                    randomCodeError.addClass("icon-error");
                    randomCode.focus();
                    randomCode.val("");
                    
                    switch(data.errorCode) 
    				{
    	 				case '10000201':
    					{
//    						randomCodeError.html("<span class='vam icon-error'>"+rss.js_wrongcode+"</span>");
    	 					showError($("#msg_randowCode"), rss.common_js_wrongcode);
    						break;
    					}
    	 				case '10000001':
    	 				{
//    	 					randomCodeError.html("<span class='vam icon-error'>参数错误</span>");
    	 					showError($("#msg_randowCode"), rss.error_10000001);
    	 					break;
    	 				}
    	 				case '10000004':
    	 				{
//    	 					randomCodeError.html("<span class='vam icon-error'>非法操作</span>");
    	 					showError($("#msg_randowCode"), rss.error_10000004);
    	 					break;
    	 				}
    	 				default:
    	 				{
//    	 					randomCodeError.html("<span class='vam icon-error'>不提供服务</span>");
    	 					showError($("#msg_randowCode"), rss.error_10000002);
    	 					break;
    	 				}
    				}
                }

            }, function(data) {

            }, false, "JSON");

        } else if ( typeof (randomCode[0]) != "undefined" && randomCode.val().length != 4) {
//            randomCodeError.removeClass("icon-error");
//            randomCodeError.removeClass("icon-ok");
        }

    });
    
    //儿童帐号登录时需要更新协议时调用
    function verifyGuardianPwd(userID, accountInfoArr, agrContentArr) {
    	var userAccount = accountInfoArr[0].userAccount;
    	$("<div>").Dialog(
		{
			title: rss.guardian_pwd,
			btnRight: {
				text: rss.verify,
				fn: function() {
					var self = this;
					var password = $("#password").val();
					funChkPwd(userID, password, function() {
						//成功后的回调方法
						self.hide();
						openUserAgrsDialog(agrContentArr, login, userID, password);
					});
				}
			},
			btnLeft: {
				text: rss.exit,
				fn: function() {}
			},
			html: '<span>'+rss.guardian_agree_notice.format(userAccount)+'</span><div class="dinput"><span><input id="password" type="password" placeholder="'+rss.inputLingPwd+'"/></span></div><p id="error_info"></p>'
		}).Dialog('show');
    }
    
    var funChkPwd=function(userID, pwd, callback){
		var strParms="verifyPassword";
		var dataParms = "";
		dataParms={
			"password":pwd,
			"userID":userID,
			"reqClientType":localInfo.reqClientType,
			"pageToken":localInfo.pageToken,
			"operType":"2"
		};	
		ajaxHandler(strParms,dataParms,function(data){
			var strResult=data.isSuccess;
			if(strResult=="1")
			{
				callback(userID, pwd);
			}
			else
			{
				var errorCode= data.errorCode;
				if(errorCode == '70002003' || errorCode == '10002073'){
					showError($("#error_info"), rss.error_10000001_2);
				}else if(errorCode == '70002057'){
					showError($("#error_info"), rss.error_70002057_2);
				}else if(errorCode == '70002058'){
					showError($("#error_info"), rss.error_70002058_1);
				} else {
					showError($("#error_info"), rss.error_70002003);
				}
			}
		},function(){
		},true,"json");
	};


    function openCountryCodeDialog(siteInfoObjArr) {
        var htmlStr = '<div class="mask"></div>';
        htmlStr += '<div class="dialog">';
        htmlStr += '<div class="dcent">';
        $.each(siteInfoObjArr, function(index, value) {
            var siteInfoObj = value;
            htmlStr += '<div class="code-node line mkcl">';
            htmlStr += '<b data-value="false" class="ccr radio roff r" data="'+siteInfoObj.siteID+'"></b>';
            htmlStr += '<p class="item">';
            var countryCodeDisplay = "+" + siteInfoObj.countryCode;
            htmlStr += '<span class="split cc">' + countryCodeDisplay + '</span><span class="split">' + $("#login_userName").val().trim() + '</span>';
            htmlStr += '</p>';
            htmlStr += '</div>';

        });
        htmlStr += '</div>';
        htmlStr += '</div>';
        $("#selectCountryCodeDiv").html(htmlStr);

        $(".radio").on("click", function(e) {
            $(this).removeClass('roff');
            $(this).addClass('ron');
            var self = $(this);
            setTimeout(function() {
                var countrycode = self.parent().find(".cc").text().trim().replace("+", "00");
                var newLoginName = countrycode + $("#login_userName").val().trim();
                $("#selectCountryCodeDiv").html("");
                $("#login_userName").val(newLoginName);
                localInfo.siteID = self.attr("data");               
                /*if (localInfo.currentSiteID != localInfo.siteID) {
                   openGotoOwnSiteDialog(siteInfoObjArr[0].loginUrl);
                }*/ 
            }, 200);

        });

    }

    function openUserAgrsDialog(agrContentArr,callbackFn, guardianUserID, guardianPwd) {
        var myDate = new Date();
        var thisYear = myDate.getFullYear();
        var thisMonth = myDate.getMonth()+1;
        var thisDay = myDate.getDate();
        var thisTime = thisYear + "-" + thisMonth + "-" + thisDay;
        var agrIDsStr = "";
       htmlStr = '';
     if ($.isArray(agrContentArr)) {
     for (var i=0;i<agrContentArr.length;i++) {
       var agreement = agrContentArr[i];
       agrIDsStr+=agreement.agrID+"|";
       htmlStr += '<div class="line">';
       htmlStr +=   '<div class="docname">';
       if(currentSiteID == "9" || (currentSiteID != "9" && agreement.agrID != 2)) {
    	   htmlStr +=   '<div class="r"><a href="'+agreement.agrHref+'" target="_blank">'+rss.more_details+'</a></div>';
       }
       //htmlStr +='《华为隐私政策》';
       htmlStr +=   agreement.agrTitle;
       htmlStr +=   '</div>';
       htmlStr +=   '<div class="doccont">';
      // htmlStr +=   '本软件使用过程中，将在保证隐私安全前提下采集您所有登录设备的IMEI，MEID，SN信息并上传至华为服务器，以标示设备及提供更优的软件服务。在需要短信验证码时，为简化用户的操作，将自动读取短信中的验证码填写在输入框中。华为非常重视您的个人数据和隐私，在您仔细阅读、了解、同意本政策之前，请不要向华为提交任何个人或隐私数据。';
       if(currentSiteID != "9") {
    	   htmlStr += agreement.agrBrief;
       }
       htmlStr +=   '</div>';
       htmlStr +=   '<div class="docdate"><b class="tick off" agrVer="'+agreement.agrVer+'"></b></div>';
       htmlStr +=   '</div>';
        }
       }
        
      $("div").Dialog({
          title: rss.user_agreement,
          btnLeft : false,
           btnRight : {
                text : rss.next_step,
                fn : function() {
                    var self = this;    
                    var paramObj = {
                		guardianUserID:guardianUserID,
                		guardianPwd:guardianPwd,
                		opType:"2",
                        agrIDs:agrIDsStr.substring(0,agrIDsStr.length-1)
                    };
                    if(guardianUserID) {
                    	paramObj.opType = "4";
                    }
                    callbackFn(paramObj,function(){
                        self.hide();
                    });                  
                }
          },
          html : htmlStr,
          beforeAction : function() {
              var self = this;
                self.disabled();
               $(".tick").on("click", function() {
                    $(this).data("value") == true ? $(this).trigger("turnoff") : $(this).trigger("turnon");
                }).on("turnon", function() {
                    $(this).removeClass("off");
                    $(this).data("value", true);
                    $(this).trigger("change", [true]);
                    if($(".tick").hasClass('off')) {
                        self.disabled();
                    } else {
                        self.enable();
                    }
                    
                }).on("turnoff", function() {
                    $(this).addClass("off");
                    $(this).data("value", false);
                    $(this).trigger("change", [false]);
                    if($(".tick").hasClass('off')) {
                        self.disabled();
                    } else {
                        self.enable();
                    }
                });
          }
          
          
      }).Dialog("show");
        
    }
    
    // 如果存在跨站点问题，是否已同意
    var agreeOrNot=false;
    
    function login(paramObj,callbackFn) {
        
      
        var dataParms = {
            submit : localInfo.submit,
            loginUrl : localInfo.loginUrl,
            service : localInfo.service,
            loginChannel : localInfo.loginChannel,
            reqClientType : localInfo.reqClientType,
            adUrl : localInfo.adUrl,
            lang : localInfo.lang,
            inviterUserID : localInfo.inviterUserID,
            inviter : localInfo.inviter,
            userAccount : userName.val().trim(),
            password : password.val(),
            authcode : randomCode.val(),
            pageToken : localInfo.pageToken,
            quickAuth:localInfo.quickAuth,
            newsign:localInfo.newsign,
            isThirdBind :localInfo.isThirdBind ==undefined?0:localInfo.isThirdBind   //区分登录进入的入口
            
        };
        if ($("#remember_name").attr("checked") == "checked") {
            dataParms.remember_name = "on";
        } else {
            dataParms.remember_name = "off";
        }
        var regx = /\s+/g;
        if (regx.test(dataParms.userAccount)) {
            showError($("#msg_login"),rss.login_wrong);            
            return false;
        }

         var errorFlag = false;
         var needRedirect = false;
          if (!dataParms.siteID && userName.val().trim()) {
        	   querySiteInfo(userName.val().trim(), function(siteInfoObjArr,data){
                if (siteInfoObjArr.length == 1) {
                	var crossSiteModel = null;
                	crossSiteModel=data.crossSiteModel;
                	
                	// 此处保存  账号 的跨站点信息, 无论是否跨站点，都要在这里保存，防止跨站点账号登陆后，非跨站点账号无法登陆。
                	localInfo.accountSiteID = siteInfoObjArr[0].siteID;
                	
                	if(localInfo.thirdLoginFlag != true && agreeOrNot!=true)
                	{
                		// 优先处置跨站点的场景
                        // 2的话，需要根据 redrectSiteUrl 进行跳转
                        if (crossSiteModel != null && crossSiteModel == 2) {
                            var redirectSiteUrl = data.redirectSiteUrl;

                            if(redirectSiteUrl.indexOf("oauth2")>0)
                            {
                            	redirectSiteUrl = redirectSiteUrl + localInfo.queryString;
                            }
                            else
                            {
                            	redirectSiteUrl = redirectSiteUrl + localInfo.requestURIQuery;
                            }
                            openGlobalCrossSiteDialog(redirectSiteUrl);
                            needRedirect = true;
                            return;
                        }

                        // 如果为1的话，提示需要进行跨站点发登陆
                        if (crossSiteModel != null && crossSiteModel == 1) {
                        	dataParms.siteID = siteInfoObjArr[0].siteID;
                        	
                        	
                            allowGlobalCrossLogin(paramObj,dataParms,callbackFn);
                            needRedirect = true;
                            return;
                        }
                	}
                	
                	
                    dataParms.siteID = siteInfoObjArr[0].siteID;
                }
                else if (siteInfoObjArr.length == 0)
                {
                   
                   if (data.existAccountFlag == "0")
                   {
                       errorFlag = false;
                   }
                   else
                   {
                       errorFlag = true;
                       var errorCode=data.errorCode;
                       if(errorCode=="10000507")
                       {
                          openGotoOwnSiteDialog();
                       }
                   }

                }
            });
        }
          
        if(needRedirect && agreeOrNot!=true)
        {
        	return;
        }
        
        if (errorFlag) {
            return;
        }
        if (paramObj && paramObj.remember_client_flag) {
            dataParms.remember_client_flag = paramObj.remember_client_flag;
        }
        if (paramObj && paramObj.agrIDs) {
            dataParms.agrIDs = paramObj.agrIDs;
        }
        if (paramObj && paramObj.guardianUserID) {
        	dataParms.guardianUserID = paramObj.guardianUserID;
        }
        if (paramObj && paramObj.guardianPwd) {
        	dataParms.guardianPassword = paramObj.guardianPwd;
        }
        if (paramObj && paramObj.newPassword) {
        	dataParms.newPassword = paramObj.newPassword;  //修改完成之后以新密码进行登录
        }
        if (paramObj && paramObj.opType) {
        	dataParms.opType = paramObj.opType;
        }
        if ($("#authenDialog").length > 0 || $("#authAndUpdatediv").length > 0) {
        	var txtTwoStepVerifyCode = $("#oldAuthCode").val();
            if(dataParms.opType == 5 || dataParms.opType == 6 || dataParms.opType == 7) {
            	var typeAndAccount=$.parseJSON($("#accountDiv1 input").val());
            	dataParms.authAccountType = typeAndAccount.type;
                dataParms.authAccount = typeAndAccount.account;
                dataParms.authcode = txtTwoStepVerifyCode;
            }else if(dataParms.opType == 8) {
            	var typeAndAccount=$.parseJSON($("#accountDiv input").val());
            	dataParms.authAccountType = typeAndAccount.type;
                dataParms.authAccount = typeAndAccount.account;
                dataParms.authcode = txtTwoStepVerifyCode;
            }else if (txtTwoStepVerifyCode) {
            	var typeAndAccount=$.parseJSON($("#accountDiv input").val());
                dataParms.twoStepVerifyCode = txtTwoStepVerifyCode;
                dataParms.verifyAccountType = typeAndAccount.type;
                dataParms.verifyUserAccount = typeAndAccount.account;
            }
        }

        ajaxHandler("remoteLogin", dataParms, function(data) {
            if ("1" == data.isSuccess) {
                if ($.isFunction(callbackFn)) {
                    callbackFn();
                 }
                $(".loginmask").show();     
                gotoUrl(data.callbackURL); 
                return false;
            } else {
            	showErrorCode(data, dataParms, callbackFn);
            }

        }, function(data) {

        }, false, "JSON");

    }
    
    /**
     * 登录接口错误码统一展示
     */
    function showErrorCode(data, dataParms, callbackFn) {
    	var opType = dataParms.opType;
    	if(!opType || opType == "0" || opType=="1") {
    		if ("10000201" == data.errorCode) {
    			if ((localInfo.thirdLoginFlag)&& (localInfo.thirdLoginFlag == true)) {
    				window.location.href = localInfo.loginUrl;
    			}
    			if ($.isFunction(callbackFn)) {
    				callbackFn();
    			}
    			// 验证码错误
    			showError($("#msg_randowCode"), rss.randomCodeIsInvalid);
    			chgRandomCodeForLogin();
    			$("#randomCode").focus();
    		} else if ("10000508" == data.errorCode) {
    			openNoAllowCrossSiteDialog();
    		} else if ("10000400" == data.errorCode) {
    			showError($("#msg_login"), rss.login_wrong);
    	
    		} else if ("70002071" == data.errorCode) {
    			showSuccessTipDialog("", rss.unverified_email_addr,
    					rss.email_has_sendto.format(userName.val()),
    					localInfo.emailPng, rss.resend, rss.exit,
    					rss.verified);
    			// showError($(".errortip"),"您的帐号尚未激活，请先激活帐号");
    		} else if ("10000402" == data.errorCode) {
    			// 错误次数过多
    			showError($("#msg_login"), rss.error_10000402);
    		} else if ("70002072" == data.errorCode) {
    			// 需要二次登录
    			var param = {
    				desc : rss.account_protect_tip,
    				lBtnTxt : rss.cancel,
    				rBtnTxt : rss.verify,
    				queryCond : $("#login_userName").val().trim(),
    				optType : "secondAuth",
    				callbackFn : login,
    				siteID : localInfo.accountSiteID
    			};
    			openAuthenDialog(param);
    		} else if ("10008001" == data.errorCode) {
    			if ($.isFunction(callbackFn)) {
    				callbackFn();
    			}
    			// 公有云IP黑名单,验证身份加修改密码
    			var param = {
    				desc : rss.account_protect_tip,
    				queryCond : $("#login_userName").val().trim(),
    				callbackFn : login,
    				opType : "5",
    				siteID : localInfo.accountSiteID
    			};
    			loginAuthAndUpdatePwd(param);
    		} else if ("10008002" == data.errorCode) {
    			if ($.isFunction(callbackFn)) {
    				callbackFn();
    			}
    			// 高度疑,验证身份加修改密码
    			var param = {
    				desc : rss.account_protect_tip,
    				queryCond : $("#login_userName").val().trim(),
    				callbackFn : login,
    				opType : "6",
    				siteID : localInfo.accountSiteID
    			};
    			loginAuthAndUpdatePwd(param);
    		} else if ("10008003" == data.errorCode) {
    			if ($.isFunction(callbackFn)) {
    				callbackFn();
    			}
    			// 普通疑似且简单密码,验证身份加修改密码
    			var param = {
    				desc : rss.account_protect_tip,
    				queryCond : $("#login_userName").val().trim(),
    				callbackFn : login,
    				opType : "7",
    				siteID : localInfo.accountSiteID
    			};
    			loginAuthAndUpdatePwd(param);
    		} else if ("10008004" == data.errorCode) {
    			if ($.isFunction(callbackFn)) {
    				callbackFn();
    			}
    			// 普通疑似非简单密码,验证身份
    			var param = {
    				desc : rss.risk_auth,
    				lBtnTxt : rss.cancel,
    				rBtnTxt : rss.verify,
    				queryCond : $("#login_userName").val().trim(),
    				optType : "identifyVerify",
    				callbackFn : login,
    				opType : "8",
    				siteID : localInfo.accountSiteID
    			};
    			openAuthenDialog(param);
    	
    		} else if ("10008005" == data.errorCode) {
    			if ($.isFunction(callbackFn)) {
    				callbackFn();
    			}
    			// 简单密码的需要强制修改密码提醒，修改密码
    			var param = {
    				opType : "9",
    				newPassword : dataParms.newPassword,
    				siteID : localInfo.accountSiteID,
    				callbackFn : login
    			};
    			updatePassword(param);
    		} else if ("10000504" == data.errorCode) {
    			if ($.isFunction(callbackFn)) {
    				callbackFn();
    			}
    			var accountInfoArr = [];
    			// 协议变更
    			if (data.agrIDs) {
    				// 儿童帐号登录情况
    				if (localInfo.closeTempFun != "true"
    						&& localInfo.currentSiteID == "7") {
    					getAccountInfo(dataParms.userAccount, "4",
    							function(data, userID) {
    								accountInfoArr = data.userAcctInfoList;
    								localInfo.userID = data.userID;
    							});
    				}
    				// TODO调用接口getAgreementContent查询agrementContent
    				var agrContentArr = [];
    				getAgreementContent(data.agrIDs, agrContentArr);
    				if (accountInfoArr.length > 0) {
    					verifyGuardianPwd(localInfo.userID, accountInfoArr,
    							agrContentArr); // 弹框验证监护人密码
    				} else {
    					openUserAgrsDialog(agrContentArr, login);
    				}
    			}
    		} else if ("70002039" == data.errorCode) {
    			if (opType == "1") { // 二次认证登录
    				showError($("#oldAuthCode_error_info"),
    						rss.error_70002039);
    			} else {
    				showError($("#msg_login"), rss.error_70002039);
    			}
    		} else if ("70002057" == data.errorCode) {
    			if (opType == "1") { // 二次认证登录
    				showError($("#oldAuthCode_error_info"),
    						rss.error_70002057_1);
    			} else {
    				showError($("#msg_login"), rss.error_70002057_1);
    			}
    		} else if ("70002058" == data.errorCode) {
    			if (opType == "1") { // 二次认证登录
    				showError($("#oldAuthCode_error_info"),rss.error_70002058);
    			} else {
    				showError($("#msg_login"), rss.error_70002058);
    			}
    		} else if ("70005004" == data.errorCode) {   //第三方
    			if (opType == "1") {  // 二次认证登录
    				showError($(".errortip"), rss.error_70005004);
    			} else {
    				showError($("#msg_login"), rss.error_70005004);
    			}
    	
    		} else if ("10000505" == data.errorCode) {  //第三方
    			if (opType == "1") {  // 二次认证登录
    				showError($(".errortip"), rss.error_10000505);
    			} else {
    				showError($("#msg_login"), rss.error_10000505);
    			}
    		} else {
    			showError($("#msg_login"), rss.login_wrong);
    		}
    	} else if(opType == "2" || opType == "4") { //更新协议
    		showError($(".errortip"), rss.error_10000001);
    	} else if(opType == "5" || opType == "6" || opType == "7") {
    		switch(data.errorCode) {
	    		case "70008001": {
	    			showError($(".errortip"), rss.error_70008001);
	    			break;
	    		}
	    		case "70002070": {
	    			showError($(".errortip"), rss.error_70002070);
	    			break;
	    		}
	    		case "70002020": {
	    			showError($(".errortip"), rss.error_70002020);
	    			break;
	    		}
	    		case "70002058": {
	    			showError($(".errortip"), rss.error_70002058);
	    			break;
	    		}
	    		case "70002039": {
	    			showError($(".errortip"), rss.error_70002039);
	    			break;
	    		}
	    		case "70002057": {
	    			showError($(".errortip"), rss.error_70002057_1);
	    			break;
	    		}
	    		case "10000504": {
	    			if ($.isFunction(callbackFn)) {
	    				callbackFn();
	    			}
	    			var accountInfoArr = [];
	    			// 协议变更
	    			if (data.agrIDs) {
	    				// 儿童帐号登录情况
	    				if (localInfo.closeTempFun != "true"
	    						&& localInfo.currentSiteID == "7") {
	    					getAccountInfo(dataParms.userAccount, "4",
	    							function(data, userID) {
	    								accountInfoArr = data.userAcctInfoList;
	    								localInfo.userID = data.userID;
	    							});
	    				}
	    				// TODO调用接口getAgreementContent查询agrementContent
	    				var agrContentArr = [];
	    				getAgreementContent(data.agrIDs, agrContentArr);
	    				if (accountInfoArr.length > 0) {
	    					verifyGuardianPwd(localInfo.userID, accountInfoArr,
	    							agrContentArr); // 弹框验证监护人密码
	    				} else {
	    					openUserAgrsDialog(agrContentArr, login);
	    				}
	    			}
	    			break;
	    		}
	    		default: {
					showError($(".errortip"), rss.error_10000001);
					break;
				}
    		}
    	} else if(opType == "8") { 
    		var errorCode = data.errorCode;
    		if (errorCode == "70002039") {
				showError($("#oldAuthCode_error_info"), rss.error_70002039);
			}
			else if (errorCode ==  "70002057") {
				showError($("#oldAuthCode_error_info"), rss.error_70002057_1);
			}
			else if (errorCode ==  "70002058") {
				showError($("#oldAuthCode_error_info"), rss.error_70002058);
			}
			else if (errorCode ==  "10000504") {
				if ($.isFunction(callbackFn)) {
					callbackFn();
				}
				var accountInfoArr = [];
				// 协议变更
				if (data.agrIDs) {
					// 儿童帐号登录情况
					if (localInfo.closeTempFun != "true"
							&& localInfo.currentSiteID == "7") {
						getAccountInfo(dataParms.userAccount, "4",
								function(data, userID) {
									accountInfoArr = data.userAcctInfoList;
									localInfo.userID = data.userID;
								});
					}
					// TODO调用接口getAgreementContent查询agrementContent
					var agrContentArr = [];
					getAgreementContent(data.agrIDs, agrContentArr);
					if (accountInfoArr.length > 0) {
						verifyGuardianPwd(localInfo.userID, accountInfoArr,
								agrContentArr); // 弹框验证监护人密码
					} else {
						openUserAgrsDialog(agrContentArr, login);
					}
				}
			}
			else {
				showError($("#oldAuthCode_error_info"), rss.error_10000001);
			}
    	} else {  //简单密码
    		switch(data.errorCode) {
	    		case "70008001": {
	    			showError($(".errortip"), rss.error_70008001);
	    			break;
	    		}
	    		case "70002070": {
	    			showError($(".errortip"), rss.error_70002070);
	    			break;
	    		}
	    		case "70002020": {
	    			showError($(".errortip"), rss.error_70002020);
	    			break;
	    		}
	    		case "70002057": {
	    			showError($(".errortip"), rss.error_70002057_2);
	    			break;
	    		}
	    		case "70002058": {
	    			showError($(".errortip"), rss.error_70002058_1);
	    			break;
	    		}
	    		case "10000504": {
	    			if ($.isFunction(callbackFn)) {
	    				callbackFn();
	    			}
	    			var accountInfoArr = [];
	    			// 协议变更
	    			if (data.agrIDs) {
	    				// 儿童帐号登录情况
	    				if (localInfo.closeTempFun != "true"
	    						&& localInfo.currentSiteID == "7") {
	    					getAccountInfo(dataParms.userAccount, "4",
	    							function(data, userID) {
	    								accountInfoArr = data.userAcctInfoList;
	    								localInfo.userID = data.userID;
	    							});
	    				}
	    				// TODO调用接口getAgreementContent查询agrementContent
	    				var agrContentArr = [];
	    				getAgreementContent(data.agrIDs, agrContentArr);
	    				if (accountInfoArr.length > 0) {
	    					verifyGuardianPwd(localInfo.userID, accountInfoArr,
	    							agrContentArr); // 弹框验证监护人密码
	    				} else {
	    					openUserAgrsDialog(agrContentArr, login);
	    				}
	    			}
	    			break;
	    		}
	    		default: {
					showError($(".errortip"), rss.error_10000001);
					break;
				}
    		}
    	}
	}
    
    function allowGlobalCrossLogin(paramObj,dataParms,callbackFn)
    {
    	var htmlStr=rss.global_cross_site_login;
    	$("<div>").Dialog({
    		title:rss.prompt,
    		btnLeft:{
    			text:rss.cancel_btn,
    			fn:function(){
    				this.hide();
    			}
    		},
    		btnRight:{
    			text:rss.uc_common_agree,
    			fn:function(){
    				agreeOrNot=true;
    				globalCrossSiteLogin(paramObj,dataParms,callbackFn);
    				this.hide();
    			}
    		},
    		html:htmlStr,
    		beforeAction:function(){
    			
    		}
    	}).Dialog("show");
    	$("#globalCrossPrivacyPolicy").attr('href',localInfo.globalCrossPrivacyPolicy);
    }

    function globalCrossSiteLogin(paramObj,dataParms,callbackFn)
    {
        if (paramObj && paramObj.remember_client_flag) {
            dataParms.remember_client_flag = paramObj.remember_client_flag;
        }
        if (paramObj && paramObj.agrIDs) {
            dataParms.agrIDs = paramObj.agrIDs;
        }
        if (paramObj && paramObj.guardianUserID) {
        	dataParms.guardianUserID = paramObj.guardianUserID;
        }
        if (paramObj && paramObj.guardianPwd) {
        	dataParms.guardianPassword = paramObj.guardianPwd;
        }
        if (paramObj && paramObj.newPassword) {
        	dataParms.newPassword = paramObj.newPassword;  //修改完成之后以新密码进行登录
        }
        if (paramObj && paramObj.opType) {
        	dataParms.opType = paramObj.opType;
        }
        if (paramObj && paramObj.newAuthCode) {
        	dataParms.newAuthCode = paramObj.newAuthCode;
        }
        if ($("#authenDialog").length > 0 || $("#authAndUpdatediv").length > 0) {  //有身份认证的地方
            var txtTwoStepVerifyCode = $("#oldAuthCode").val();
            if(dataParms.opType == 5 || dataParms.opType == 6 || dataParms.opType == 7) {
            	var typeAndAccount=$.parseJSON($("#accountDiv1 input").val());
            	dataParms.authAccountType = typeAndAccount.type;
                dataParms.authAccount = typeAndAccount.account;
                dataParms.authcode = txtTwoStepVerifyCode;
            }else if(dataParms.opType == 8) {
            	var typeAndAccount=$.parseJSON($("#accountDiv input").val());
            	dataParms.authAccountType = typeAndAccount.type;
                dataParms.authAccount = typeAndAccount.account;
                dataParms.authcode = txtTwoStepVerifyCode;
            }else if (txtTwoStepVerifyCode && typeAndAccount.account) {
            	var typeAndAccount=$.parseJSON($("#accountDiv input").val());
                dataParms.twoStepVerifyCode = txtTwoStepVerifyCode;
                dataParms.verifyAccountType = typeAndAccount.type;
                dataParms.verifyUserAccount = typeAndAccount.account;
            }
        }

        ajaxHandler("remoteLogin", dataParms, function(data) {
            if ("1" == data.isSuccess) {
                if ($.isFunction(callbackFn)) {
                    callbackFn();
                 }
                $(".loginmask").show();     
                gotoUrl(data.callbackURL); 
                return false;
            } else {
            	showErrorCode(data, dataParms, callbackFn);
            }

        }, function(data) {

        }, false, "JSON");
        
    }

    function openGlobalCrossSiteDialog(globalCrossSiteUrl)
    {
    	var htmlStr=rss.global_cross_page_redirect;
    	$("<div>").Dialog({
    		title:rss.prompt,
    		btnLeft:{
    			text:rss.cancel_btn,
    			fn:function(){
    				this.hide();
    			}
    		},
    		btnRight:{
    			text:rss.iKnowBtn,
    			fn:function(){
    				gotoUrl(globalCrossSiteUrl);
    			}
    		},
    		html:htmlStr,
    		beforeAction:function(){
    			
    		}
    	}).Dialog("show");
    }
    function openNoAllowCrossSiteDialog()
    {
        var htmlStr=rss.no_allow_cross_site_login;
        $("<div>").Dialog({
            title:rss.prompt,
            btnLeft:false,
            btnRight:{
                text:rss.IGetIt,
                fn:function(){
                    this.hide();
                }
            },
            html:htmlStr,
            beforeAction:function(){
                
            }
        }).Dialog("show");
    }
    

  function getAgreementContent(agrIDs,agrContentArr) {
    var dataParms = {
        "agrIDs" : JSON.stringify(agrIDs),
        "reqClientType" : localInfo.reqClientType,
        "lang" : localInfo.lang,
        "siteID": localInfo.accountSiteID,
        "pageToken" : localInfo.pageToken
    };
    ajaxHandler("getAgreementContent", dataParms, function(data) {
        var isSuccess = data.isSuccess;
        if (isSuccess == '1') {
           if (data.agreementContents) {
               $.each(data.agreementContents, function(index,agreement) {
                 agrContentArr.push(agreement);
               });
           }
        }
    }, function() {
    }, false, "json");
    }
    
    $("#btnLogin").bind("click", function() {
        var form = $('.login-form-marginTop')[0];
        if (!ec.form.validator(form, true)) {
            return false;
        }
        login();
    });


    $("#login_userName").bind("focusout", function() {
        var loginUserName = $("#login_userName").val().trim();
        if (loginUserName) {
            querySiteInfo(loginUserName, function(siteInfoObjArr,data) {
                if (siteInfoObjArr.length > 1) {
                    openCountryCodeDialog(siteInfoObjArr);
                } else if (siteInfoObjArr.length == 0) {
                	// 如果错误码为 10000507，那么进行提示
                   var errorCode=data.errorCode;
                   if(errorCode=="10000507")
                   {
                      openGotoOwnSiteDialog();
                   }
                }else if (siteInfoObjArr.length == 1){
                	var crossSiteModel=data.crossSiteModel;
                	if(crossSiteModel==2)
                	{
                		var redirectSiteUrl = data.redirectSiteUrl;

                        if(redirectSiteUrl.indexOf("oauth2")>0)
                        {
                        	redirectSiteUrl = redirectSiteUrl + localInfo.queryString;
                        }
                        else
                        {
                        	redirectSiteUrl = redirectSiteUrl + localInfo.requestURIQuery;
                        }
                        openGlobalCrossSiteDialog(redirectSiteUrl);
                	}
                }
            });
        }

    }); 


    ec.ui.hover(randomCode);
    ec.form.input.label(randomCode, rss.common_js_ignorecase);
    ec.form.input.label(userName, rss.login_js_hwaccount).label(password, rss.login_js_password);
    ec.ui.hover(userName).hover(password);
    userName.focus();
});

ec.form.validator.register("emailormobile", function(b, a) {
    if (a.allowEmpty && ec.util.isEmpty(b)) {
        return true;
    }
    if (b.length < 11) {
        return false;
    }
    return /^(1[34578])[0-9]{9}$|^\s*([A-Za-z0-9_-]+(\.\w+)*@(\w+\.)+\w+)\s*$/.test(b);
});

ec.form.validator.register("chinaLang", function(b, a) {
    if (a.allowEmpty && ec.util.isEmpty(b)) {
        return true;
    }
    if (b.length != 4) {
        return false;
    } else {
        return true;
    }
});

//提取url中的查询参数
function getValue(url, name) {
    var search = url.search, parts = (!search) ? [] : search.split('&'), params = {};

    for (var i = 0, len = parts.length; i < len; i++) {
        var param = parts[i].split('=');
        var pname = param[0];
        if (i == 0) {
            pname = pname.split('?')[1];
        }
        if (name == pname)
            return param[1];
        //		params[param[0]] = param[1];
    };
    return "";
}

function chgRandomCodeForLogin() {
    var randomCode = $("#randomCode");
    var randomCodeImg = $('#randomCodeImg');
    var randomCodeError = $("#randomCodeError");
    chgRandomCode(randomCodeImg[0], localInfo.webssoLoginSessionCode);
//    randomCodeError.removeClass("icon-ok");
//    randomCodeError.removeClass("icon-error");
    randomCode.val("");
}

//弹出框
function showSuccessTipDialog(tip1, tip2, tip3, imgPath, btn1, btnLeft, btnRight) {
	var htmlStr = '<div class="dtit">' + tip1 + '</div>';
	htmlStr += '<div class="dcent" style="margin-top: -80px">';
	htmlStr += '<div class="center">';
	htmlStr += '<img class="dimg" src="'+imgPath+'">';
	htmlStr += '<p class="inptips5 mbottom" style="margin-top: -30px">' + tip2 + '</p>';
	htmlStr += '</div>';
	htmlStr += '<p class="inptips3 det-width">' +tip3+ '</p>';
	htmlStr += '<div style="margin-bottom: 50px;margin-top: 30px">';
	htmlStr += '<div class="dbtn3 resendBtn" act="action"  intervaltime="60" id="getActive"><span>'+btn1+'</span><p id="get_authcode_error_info"></p></div>';
	htmlStr += '</div>';
	htmlStr += '</div>';

    var option = {
        title : "",
        btnRight : {
            text : btnRight,
            fn : function() {
                if (isActiveAccount($("#login_userName").val().trim())) {
                    window.location.reload();
                } else {
                    showError($(".errortip"), rss.verification_not_completed);
                }
            }
        },
        btnLeft : {
            text : btnLeft,
            fn : function() {
                this.hide();
            }
        },
        html : htmlStr,
        actions : {
            'action' : function() {
                if ($("#getActive").attr("disabled")) {
                    return false;
                }
                if (isActiveAccount($("#login_userName").val().trim())) {
					showError($("#get_authcode_error_info"), rss.error_70002019);
					return false;
				}
                getActivateEMailURL($("#login_userName").val().trim(), localInfo.reqClientType, $("#getActive"));
            }
        }
    };
    $("<div>").Dialog(option).Dialog('show');
    $(".userAccount").html($("#login_userName").val().trim());
}

function getAccountInfo(userAcct, isGetAll, callback) {
    var dataParms = {
        "userAccount" : userAcct,
        "reqClientType" : localInfo.reqClientType,
        "isGetAll" : isGetAll,
        "pageToken" : localInfo.pageToken
    };
    ajaxHandler("getUserAccInfo", dataParms, function(data) {
        var isSuccess = data.isSuccess;
        if (isSuccess == '1') {
            callback(data);
        }
    }, function() {
    }, false, "json");
}

function isActiveAccount(userAccount) {
    var isExist = false;
    getAccountInfo(userAccount, 0, function(data) {
        if (data && data.isSuccess == 1) {
            var datas = data.userAcctInfoList;
            for (var i = 0; i < datas.length; i++) {
                var account = datas[i];
                if ((account.accountType == 1 || account.accountType == 2) && account.accountState == 1) {
                    isExist = true;
                    break;
                }
            }
        }
    });
    return isExist;
}

/**
 * 仅是调用getActivateEMailURL接口
 */
function getActivateEMailURL(userAccount, reqClientType, $btn) {
    var param = {
        accountType : 1,
        userAccount : userAccount,
        reqClientType : reqClientType,
        email : userAccount,
        pageToken : localInfo.pageToken
    };
    ajaxHandler("getActivateEMailURL", param, function(data) {
        if (data.isSuccess == '1') {
        	jsInnerTimeout($btn, rss.resend);
            $btn.attr("disabled");
        } else {
            $btn.removeAttr("disabled");
            if (data.errorCode == "10000001" || data.errorCode == "70001201") {
                showError($("#get_authcode_error_info"), rss.error_10000001);
            }
            else if (data.errorCode == "10000002") {
                showError($("#get_authcode_error_info"), rss.error_10000002);
            }
            else if (data.errorCode == "10000004") {
                showError($("#get_authcode_error_info"), rss.error_10000004);
            }
            else if (data.errorCode == "70002001") {
                showError($("#get_authcode_error_info"), rss.error_70002001);
            }
            else if (data.errorCode == "70001401") {
                showError($("#get_authcode_error_info"), rss.error_70001401);
            }
            else if (data.errorCode == "70002008") {
                showError($("#get_authcode_error_info"), rss.error_70002008);
            }
            else if (data.errorCode == "70001102") {
                showError($("#get_authcode_error_info"), rss.error_70001102_1);
            }
            else if (data.errorCode == "70001104") {
                showError($("#get_authcode_error_info"), rss.error_70001104_0);
            }
            else if (data.errorCode == "70002019") {
                showError($("#get_authcode_error_info"), rss.error_70002019);
            }
            else if (data.errorCode == "70002009") {
                showError($("#get_authcode_error_info"), rss.error_70002009);
            } else {
                showError($("#get_authcode_error_info"), rss.get_activate_email_URL_Error);
            }
        }
    }, function() {
    }, true, "json");

}

function checkCookie(cookie) {
    if (localInfo.cookiePrivateAgreement == "true") {
        if (!ec.util.cookie.get(cookie)) {
        $("#cookies_privacy").removeClass("hidden");
    }
    
    $("#cookies_privacy").find("img").click(function(e) {
        $("#cookies_privacy").addClass("hidden");
        ec.util.cookie.set(cookie,true);
     });
   }
	
}

function querySiteInfo(userAccount,callbackFn) {

    var dataParms = {
        "userAccount" : userAccount,
        "reqClientType" : localInfo.reqClientType,
        "pageToken" : localInfo.pageToken
    };
    ajaxHandler("isExsitUser", dataParms, function(data) {
        var isSuccess = data.isSuccess;
        var errorCode = data.errorCode;
        var crossSiteModel=data.crossSiteModel;
        if (isSuccess == 1) {
        	
            var siteInfoObjArr = [];
            if (data.existAccountFlag == 1 || data.existAccountFlag == 2) {
                var siteInfoList = data.siteInfoList;
                if (siteInfoList) {
                    for (var i = 0; i < siteInfoList.length; i++) {
                        var siteInfo = siteInfoList[i];
                        var siteInfoObj = {};
                        siteInfoObj.siteID = siteInfo.siteID;
                        siteInfoObj.countryCode = siteInfo.cy;
                        siteInfoObj.loginUrl = siteInfo.loginUrl;
                        siteInfoObjArr.push(siteInfoObj);
                    }
                }
            }
            callbackFn(siteInfoObjArr,data);
        }
        else
        {
        	callbackFn([],data);
        }	
        

    }, function() {
    }, false, "json");

}

function openGotoOwnSiteDialog() {
    var htmlStr = rss.noSupportService;
    $("<div>").Dialog({
      title: rss.prompt,
      btnLeft : false,
      btnRight : {
            text : rss.iKnowBtn,
            fn : function() {
                this.hide(); 
                        
            }
      },
      html : htmlStr,
      beforeAction : function() {
 
      }

  }).Dialog("show");
}




