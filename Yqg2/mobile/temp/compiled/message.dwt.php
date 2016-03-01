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
  <link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/loginxin.css">
  <link rel="stylesheet" href="themesmobile/68ecshopcom_mobile/css/public.css" >
  </head>

<body>
    <header class="header_03">
      <div class="nl-login-title">
        <div class="h-left">
          <a class="sb-back" href="javascript:history.back(-1)" title="返回"></a>
        </div>
        <span style="text-align:center">系统提示</span>
      </div>
    </header>

  <div class="ng-form-zhu" style="text-align: center;font-size:16px;">


    <div class="tips" style=" margin-top:50px; padding-bottom:20px"><?php echo $this->_var['message']['content']; ?></div>
    <?php if ($this->_var['message']['url_info']): ?>
    <div class="tips">
      <?php $_from = $this->_var['message']['url_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('info', 'url');if (count($_from)):
    foreach ($_from AS $this->_var['info'] => $this->_var['url']):
?>
      <a href="<?php echo $this->_var['url']; ?>" style="color: #666;">
        <span class="tishi"><?php echo $this->_var['info']; ?></span>
      </a>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php endif; ?>
  </div>

</body>
</html>