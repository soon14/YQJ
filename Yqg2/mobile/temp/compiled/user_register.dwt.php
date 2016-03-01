<!DOCTYPE html >
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/public.css"/>
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/login.css"/>  


<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js,register.js,transport.js')); ?>
</head>
<body>
	<header id="header" class='header'>
	<div class="h-left"><a href="javascript:history.back(-1)" class="back"></a></div>
    <div class="h-mid">用户注册</div>
     </header>
	<div id="tbh5v0">
			<?php if ($this->_var['shop_reg_closed'] == 1): ?>
			<div class="font12"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
			<?php else: ?>
			<script type="text/javascript">
		
		$().ready(function(){
			
			setCurrentForm($("#mobileForm"));
			
			//判断点击验证码
			var is_mob_log = true;
			
			$("#mobileForm").find(".check-code-img").click();
			
			//登录切换
			$("#logRegTab li").bind("click", function () {
				if (this.id == "mob_log") {
					
					if(is_mob_log){
						return;
					}
					
					is_mob_log = true;
					
					$("#mob_log").removeClass("currl");
					$("#acc_log").addClass("currr");
					$("#phonearea").removeClass("hide");
					$("#accountarea").addClass("hide");
					
					setCurrentForm($("#mobileForm"));
					
					$("#mobileForm").find(".check-code-img").click();
				} else {
					
					if(!is_mob_log){
						return;
					}
					
					is_mob_log = false;
					
					$("#acc_log").removeClass("currr");
					$("#mob_log").addClass("currl");
					$("#phonearea").addClass("hide");
					$("#accountarea").removeClass("hide");
					
					setCurrentForm($("#emailForm"));
					
					$("#emailForm").find(".check-code-img").click();
				}
				$(".btn_log").css("color","#FFFEFE");
				
		    });
		});
		</script>
			<div class="log_reg_box">
			<!--只留手机注册
				<ul class="tab" id="logRegTab">
					<li id="mob_log" class="curr">
						<span>
							<font>手机注册</font>
						</span>
					</li>
					<li id="acc_log" class="curr currr">
						<span>
							<font>邮箱注册</font>
						</span>
					</li>
				</ul>-->
				<div id="logRegTabCon">
					<div class="log_reg_item" id="phonearea">
						<form action="register.php" id="mobileForm" name="mobileForm" method="post">
							<input type="hidden" id="register_type" name="register_type" value="mobile" />
					
								<div class="field phone">
									<input type="text" id="mobile_phone" name="mobile_phone" placeholder="手机号" class="c-form-txt-normal" onblur="checkMobilePhone(this);" />
									<div class="tips">
										<span id="mobile_phone_notice"></span>
									</div>
								</div>
								<div class="field pwd">
									<input type="password" id="password" name="password" placeholder="密码" class="c-form-txt-normal" onblur="check_password(this.value);" />
									<div class="tips">
										<span id="password_notice"></span>
									</div>
								</div>
								<div class="field pwd">
									<input type="password" id="confirm_password" name="confirm_password" placeholder="确认密码" class="c-form-txt-normal" onblur="check_confirm_password(this.value);" />
									<div class="tips">
										<span id="confirm_password_notice"></span>
									</div>
								</div>
								<?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
								<?php if ($this->_var['field']['id'] == 6): ?>
								<div class="">
									<div class="">
										<select name="sel_question" <?php if ($this->_var['field']['is_need']): ?> required<?php endif; ?> class="c-f-text"> <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'],'selected'=>$this->_var['profile']['passwd_question'])); ?>
										</select>
									</div>
								</div>
								<div class="field no">
									<div class="ptxt st">
                                    
										<input type="text " placeholder="密码问题答案" name="passwd_answer" value="<?php echo $this->_var['profile']['passwd_answer']; ?>" <?php if ($this->_var['field']['is_need']): ?> required<?php endif; ?> class="c-form-txt-normal" onblur="check_conform_password(this.value);" />
                                        
									</div>
									<?php if ($this->_var['field']['is_need']): ?>
									<div class="tips">
										<span id="<?php echo $this->_var['field']['id']; ?>_notice"> </span>
									</div>
									<?php endif; ?>
								</div>
								<?php else: ?>
								<div class="field no">
									<div class="ptxt st">
										<input type="text" name="extend_field<?php echo $this->_var['field']['id']; ?>" value="<?php echo $this->_var['field']['content']; ?>" placeholder="<?php echo $this->_var['field']['reg_field_name']; ?>" id="extend_field_<?php echo $this->_var['field']['id']; ?>" class="c-form-txt-normal" />
									</div>
									<?php if ($this->_var['field']['is_need']): ?>
									<div class="tips">
										<span id="<?php echo $this->_var['field']['id']; ?>_notice"> </span>
									</div>
									<?php endif; ?>
								</div>
								<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								<div class="yanzheng"  style=" margin-top:0px;">
                                <div class="codeTxt">
									<input type="text" id="mobile_code" name="mobile_code" placeholder="手机验证码" />
                                    </div>
                                 <div class="codePhoto">
									<input id="zphone" type="button" value="获取手机验证码 " class="zphone" style=" color:#FFF">
                                  </div>
								</div>
								<?php if ($this->_var['enabled_captcha']): ?>
                                <div class="yanzheng">
                                    
										<div class="codeTxt">
											<input type="text" id="captcha" name="captcha" placeholder="验证码" />
										</div>
										<div class="codePhoto">
											<img class="check-code-img" src="captcha.php?is_mobile_reg=1&<?php echo $this->_var['rand']; ?>" alt="<?php echo $this->_var['lang']['comment_captcha']; ?>" title="<?php echo $this->_var['lang']['captcha_tip']; ?>" onClick="this.src='captcha.php?is_mobile_reg=1&'+Math.random()" height="25" />
										</div>
									</div>
								
								<?php endif; ?>
									<p class="tip">如果是特殊用户（餐饮企业、政府部门、社团组织等)可联系平台管理员XXXXXX，可获得更多优惠政策</p>
									<input type="submit" id="btn_submit" name="Submit" class="btn_big1" value="注 册" />
									<input type="hidden" name="act" value="register" />
									<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
						</form>
					</div>
					<div class="log_reg_item hide" id="accountarea">
						<form action="register.php" method="post" id="emailForm" name="emailForm" >
							<input type="hidden" id="register_type" name="register_type" value="email" />
								<div class="field email">
									<div class="st">
										<input type="email" name="email" placeholder="邮箱地址" value="" class="c-form-txt-normal" id="email" onblur="checkEmail(this.value);" />
									</div>
									<div class="tips">
										<span id="email_notice"></span>
									</div>
								</div>
								<div class="field pwd">
									<div>
										<input type="password" name="password" id="password" onblur="check_password(this.value);" value="" placeholder="密码" class="c-form-txt-normal" />
									</div>
									<div class="tips">
										<span id="password_notice"> </span>
									</div>
								</div>
								<div class="field pwd">
									<div>
										<input type="password" name="confirm_password" id="confirm_password" onblur="check_confirm_password(this.value);" value="" placeholder="确认密码" class="c-form-txt-normal">
									</div>
									<div class="tips">
										<span id="confirm_password_notice"> </span>
									</div>
								</div>
								<?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
								<?php if ($this->_var['field']['id'] == 6): ?>
								<div class="">
									<div class="">
										<select name="sel_question" <?php if ($this->_var['field']['is_need']): ?> required<?php endif; ?> class="c-f-text"> <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'],'selected'=>$this->_var['profile']['passwd_question'])); ?>
										</select>
									</div>
								</div>
								<div class="field no">
									<div class="st">
										<input type="text " placeholder="密码问题答案" name="passwd_answer" value="<?php echo $this->_var['profile']['passwd_answer']; ?>" <?php if ($this->_var['field']['is_need']): ?> required<?php endif; ?> class="c-f-text" />
									</div>
									<?php if ($this->_var['field']['is_need']): ?>
									<div class="tips">
										<span id="conform_password_notice"> </span>
									</div>
									<?php endif; ?>
								</div>
								<?php else: ?>
								<div class="field no">
									<div class="ptxt st">
										<input type="text" name="extend_field<?php echo $this->_var['field']['id']; ?>" value="<?php echo $this->_var['field']['content']; ?>" placeholder="<?php echo $this->_var['field']['reg_field_name']; ?>" id="extend_field_<?php echo $this->_var['field']['id']; ?>" class="c-form-txt-normal" />
									</div>
									<?php if ($this->_var['field']['is_need']): ?>
									<div class="tips">
										<span id="conform_password_notice"> </span>
									</div>
									<?php endif; ?>
								</div>
								<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
									<div class="yanzheng" style=" margin-top:0px;">
                                <div class="codeTxt">
									<input type="text" id="email_code" name="email_code" placeholder="邮箱验证码"/></div>
                                     <div class="codePhoto">
									<input id="zemail" type="button" value="获取邮箱验证码 " class="zphone" style=" color:#FFF">
                                    </div>
								</div>
								<?php if ($this->_var['enabled_captcha']): ?>
								<div class="yanzheng">
                                <div class="codeTxt">
									<input type="text" id="captcha" name="captcha" placeholder="验证码" /></div><div class="codePhoto">
									<img class="check-code-img" src="captcha.php?is_email_reg=1&<?php echo $this->_var['rand']; ?>" alt="<?php echo $this->_var['lang']['comment_captcha']; ?>" title="<?php echo $this->_var['lang']['captcha_tip']; ?>" onClick="this.src='captcha.php?is_email_reg=1&'+Math.random()" height="25" /></div>
								</div>
								<?php endif; ?>
							
									<input type="checkbox" style="display: none" name="agreement" value="1" checked="checked" required />
									<input type="submit" id="btn_submit" name="Submit" class="btn_big1" value="注 册" />
									<input type="hidden" name="act" value="register" />
									<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
								

						</form>
					</div>
				</div>
			</div>
			<script type="text/javascript">
			var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
			<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
			var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
			$().ready(function(){
				
				$("#zemail").click(function(){
					sendEmailCode($("#email"), $("#email_code"), $(this));
				});
				
				$("#zphone").click(function(){
					sendMobileCode($("#mobile_phone"), $("#mobile_code"), $(this));
				});
				
				$("#emailForm").submit(function(){
					return reg_by_email();
				});
				
				$("#mobileForm").submit(function(){
					return reg_by_mobile();
				});
			});
			</script>
			<?php endif; ?>
			<?php echo $this->fetch('library/page_footer.lbi'); ?>
	</div>
	<script type="text/javascript">
	var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
	<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
	</script>
	</div>
	<script type="text/javascript">
	$(function(){ 
		$('input[type=text],input[type=password]').bind({ 
		focus:function(){ 
		 $(".global-nav").css("display",'none'); 
		}, 
		blur:function(){ 
		 $(".global-nav").css("display",'flex'); 
		} 
		}); 
	}) 
	</script>
</body>
</html>