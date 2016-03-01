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
<link rel="stylesheet" type="text/css" href="themesmobile/68ecshopcom_mobile/css/user.css"/> 
<script type="text/javascript" src="themesmobile/68ecshopcom_mobile/js/jquery.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,utils.js,user.js')); ?>
</head>
<body>
<header>
  <div class="tab_nav">
    <div class="header">
      <div class="h-left"><a class="sb-back" href="javascript:history.back(-1)" title="返回"></a></div>
      <div class="h-mid"><?php if ($this->_var['action'] == 'profile'): ?>个人资料<?php elseif ($this->_var['action'] == 'default'): ?>用户中心<?php elseif ($this->_var['action'] == 'bonus'): ?>我的红包<?php elseif ($this->_var['action'] == 'order_list'): ?>我的订单<?php elseif ($this->_var['action'] == 'order_detail'): ?>订单详情<?php elseif ($this->_var['action'] == 'account_log' || $this->_var['action'] == 'account_deposit' || $this->_var['action'] == 'account_raply' || $this->_var['action'] == 'account_detail' || $this->_var['action'] == 'act_account' || $this->_var['action'] == 'pay'): ?>资金管理<?php elseif ($this->_var['action'] == 'address_list'): ?>地址管理<?php elseif ($this->_var['action'] == 'address'): ?>地址管理<?php elseif ($this->_var['action'] == 'vc_login'): ?>储值卡充值<?php endif; ?></div>
      <div class="h-right">
        <aside class="top_bar">
          <div onClick="show_menu();$('#close_btn').addClass('hid');" id="show_more"><a href="javascript:;"></a> </div>
        </aside>
      </div>
    </div>
  </div>
</header>
<?php echo $this->fetch('library/up_menu.lbi'); ?> 
<div id="tbh5v0"> <?php if ($this->_var['action'] == 'default'): ?>
  <div class="user_info">
    <div class="username"><?php echo $this->_var['info']['username']; ?></div>
  </div>
  <?php echo $this->fetch('library/user_nav.lbi'); ?>
  <?php endif; ?>
  
  
  
  <?php if ($this->_var['action'] == 'profile'): ?><?php echo $this->fetch('library/user_welcome.lbi'); ?><?php endif; ?>
  <?php if ($this->_var['action'] == 'order_list'): ?> <?php echo $this->fetch('library/user_order_list.lbi'); ?><?php endif; ?>
  <?php if ($this->_var['action'] == 'bonus'): ?> <?php echo $this->fetch('library/user_bonus.lbi'); ?><?php endif; ?>
  <?php if ($this->_var['action'] == 'address_list'): ?><?php echo $this->fetch('library/user_address_list.lbi'); ?><?php endif; ?>
  <?php if ($this->_var['action'] == 'address'): ?><?php echo $this->fetch('library/user_address.lbi'); ?><?php endif; ?>
  <?php if ($this->_var['action'] == 'order_detail'): ?><?php echo $this->fetch('library/user_order_detail.lbi'); ?><?php endif; ?>
  <?php if ($this->_var['action'] == "account_raply" || $this->_var['action'] == "account_log" || $this->_var['action'] == "act_account" || $this->_var['action'] == "account_deposit" || $this->_var['action'] == "account_detail"): ?><?php echo $this->fetch('library/user_account.lbi'); ?><?php endif; ?> 
  	<?php if ($this->_var['action'] == "vc_login"): ?><?php echo $this->fetch('library/user_vclogin.lbi'); ?><?php endif; ?> 
        <?php if ($this->_var['action'] != 'order_detail'): ?><?php elseif ($this->_var['action'] == 'address_list'): ?>
  
  <?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->fetch('library/footer_nav.lbi'); ?>
<?php endif; ?>
 </div>
</body>
</html>