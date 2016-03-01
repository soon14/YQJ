<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<title>分销中心</title>

<link href="themesmobile/68ecshopcom_mobile/css/v_user.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="head">
<dl>
<dt><?php if ($this->_var['user_info']['headimgurl']): ?><img src="<?php echo $this->_var['user_info']['headimgurl']; ?>" alt="头像"/><?php else: ?><img src="themesmobile/68ecshopcom_mobile/images/v-shop/tx.jpg" alt="头像"/><?php endif; ?></dt>
<dd>
<p><?php echo $this->_var['user_info']['nickname']; ?></p>
<span>加入时间：<?php echo $this->_var['user_info']['createymd']; ?></span>
<a href="v_shop.php?user_id=<?php echo $this->_var['user_id']; ?>" class="vshop_top" style=" color:#FFF">查看微店</a>
</dd>
</dl>
</div>

<div class="Money">
<h2>累计金额：<?php echo $this->_var['user_money']; ?>元</h2>
<dl>
<dt>
<span>可提现金额</span>
<strong><?php echo $this->_var['user_money']; ?>元</strong>
</dt>
<dd>
<a href="v_user_tixian.php">提现</a>
</dd>
</dl>
</div>

<ul class="mune bi_dom">
<li class="bi_r">
<a href="v_user_shouyi.php">
<span><img src="themesmobile/68ecshopcom_mobile/images/v-shop/n1.png" alt="收益统计"/></span>
<p>收益统计</p>
</a>
</li>
<li  class="bi_r">
<a href="v_user_huiyuan.php">
<span><img src="themesmobile/68ecshopcom_mobile/images/v-shop/n2.png" alt="会员"/></span>
<p>我的会员</p>
</a>
</li>
<li>
<a href="v_user_dianpu.php">
<span><img src="themesmobile/68ecshopcom_mobile/images/v-shop/n3.png" alt="店铺设置"/></span>
<p>店铺设置</p>

</a>
</li>
</ul>
<ul class="mune bi_dom">
<li class="bi_r">
<a href="v_user_erweima.php?user_id=<?php echo $this->_var['user_id']; ?>">
<span><img src="themesmobile/68ecshopcom_mobile/images/v-shop/n4.png" alt="二维码"/></span>
<p>二维码</p>
</a>
</li>
<li class="bi_r">
<a href="v_user_haibao.php?user_id=<?php echo $this->_var['user_id']; ?>">
<span><img src="themesmobile/68ecshopcom_mobile/images/v-shop/n5.png" alt="海报"/></span>
<p>我的海报</p>
</a>
</li>
<li>
<a href="v_user_shangsi.php">
<span><img src="themesmobile/68ecshopcom_mobile/images/v-shop/n6.png" alt="上司"/></span>
<p>我的上司</p>
</a>
</li>
</ul>

<?php echo $this->fetch('library/footer_nav1.lbi'); ?> 
</body>
</html>