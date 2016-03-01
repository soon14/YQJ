<div id="pickup_point_list">
<?php if ($this->_var['pickupinfo']): ?>
<ul>
<?php $_from = $this->_var['pickupinfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('pid', 'names');if (count($_from)):
    foreach ($_from AS $this->_var['pid'] => $this->_var['names']):
?>
<li>
	<p class="shop_name"><?php echo $this->_var['names']['shop_name']; ?></p>
    <p>地址：<?php echo $this->_var['names']['address']; ?></p>
    <p>联系人：<?php echo $this->_var['names']['contact']; ?></p>
    <p>联系方式：<?php echo $this->_var['names']['phone']; ?></p>
</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
<?php else: ?>
<div class="no_ziti">该地区尚未开放自提点</div>
<?php endif; ?> 
</div>